<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_Index extends Ctl
{
    private  $_price_allow_fields ='style_id,house_type_id,way_id,home_name,level,from';
    public function index()
    {
//		$this->bug($this);die;
		$city_list = K::M('data/city')->fetch_all(); // K::M('文件夹名/控制器名')->方法名(); 查询
		foreach($city_list as $k=>$v){
			if(!$v['audit']){
                unset($city_list[$k]);
            }
            if($v['pinyin']){
                $py = strtoupper(substr($v['pinyin'], 0, 1));
                $v['py'] = $py;
                $city_list[$k] = $v;
            }
        }
        //$city_list  城市列表  
        $this->pagedata['city_list']  = $city_list;
        // $this->pagedata 查询类型
		//首页报价
		$this->pagedata['setting'] = k::M('tenders/setting')->fetch_all_setting();
		$this->pagedata['type'] = k::M('tenders/setting')->get_type();
        K::M('helper/seo')->init('tenders',array());   //seo 设置
		if($price = K::M('system/cookie')->get('price')){
			$this->pagedata['is_show'] = '1';
		}
		// 工程完成状态 
		$this->pagedata['site_status_list'] = K::M('home/site')->get_status(); 
		// $this->bug($this->pagedata);
        $this->seo->init('index');
        $this->tmpl = 'index.html';
    }




//手机端或pc
    public function force($to='web')
    {
        $site = $this->system->config->get('site');
        if($to == 'web'){
            $this->system->cookie->delete('force_web');
			$this->system->cookie->delete('force_mobile');
			$this->system->cookie->set('force_web', 1);
			header('Location:'.$site['siteurl']);
            exit;
        }else if($site['mobile'] && ($to == 'mobile')){

            $mobile = $this->system->config->get('mobile'); //
        	
            $this->system->cookie->delete('force_web');     //选择模板
            $this->system->cookie->delete('force_mobile');
            $this->system->cookie->set('force_mobile', 1);
            header('Location:'.$mobile['url']);
            exit;            
        }
    } 


	public function text1()
	{
		$city_list = K::M('data/city')->fetch_all();
//		$this->pagedata['city_list'] =$city_list;
//		$this->bug($city_list);
		$this->tmpl='text/text.html';
	}
	public function text2()
	{
		$data['name'] =   $this->GP('name');
		$data['pwd'] = $this->GP('pwd');
	 	echo json_encode($data);

//		echo $this->GP('pwd');
	}



//首页报价
	public function get_price($mj)
	{
		$filter['city_id'] = $this->request['city_id'];
		if(!$mj = (int) $mj) {
			$this->error(404);
		}else if(!$items = K::M('price/attr')->items($filter)){
			$this->error(404);
		}else{
			$from = K::M('price/attrfrom')->items();

			$tenders = K::M('tenders/tenders')->items();
			$arr  = array();
			$last_price = $cailiao_price  = '';
			$zhucaiprice = $rengongprice = $fucaiprice ='';
			$count = 0;
			foreach($items as $k => $v){
				if(strpos($v['per'],'%')){
					$items[$k]['price'] = ($mj*$v['per']*$v["zhucai"]+$mj*$v['per']*$v["fucai"]+$mj*$v['per']*$v["rengong"])/100;
					$items[$k]['zhucaiprice'] = ($mj*$v['per']*$v["zhucai"])/100;
					$items[$k]['mj'] = ($mj*$v['per'])/100;
					$last_price += $items[$k]['price'];
					$items[$k]['rengongprice'] = ($mj*$v['per']*$v["rengong"])/100;
					$items[$k]['fucaiprice'] = ($mj*$v['per']*$v["fucai"])/100;
					$zhucaiprice += $items[$k]['zhucaiprice'];
					$fucaiprice += $items[$k]['fucaiprice'];
					$rengongprice += $items[$k]['rengongprice'];
					$cailiao_price += ($mj*$v['per']*$v["zhucai"]+$mj*$v['per']*$v["fucai"])/100;
				}else{
					$items[$k]['price'] = $v['per']*$v["zhucai"]+$v['per']*$v["fucai"]+$v['per']*$v["rengong"];
					$items[$k]['mj'] = $v['per'];
					$last_price += $items[$k]['price'];
					$cailiao_price += $v['per']*$v["zhucai"]+$v['per']*$v["fucai"];
				}
				$count++;
			}
			foreach($items as $k => $v){
				$arr[$v["pricefrom_id"]][] = $v;
			}
			$this->pagedata['cailiao_price'] = $cailiao_price;
			$this->pagedata['last_price'] = $last_price;
			$this->pagedata['zhucaiprice'] = $zhucaiprice;
			$this->pagedata['fucaiprice'] = $fucaiprice;
			$this->pagedata['rengongprice'] = $rengongprice;
			$this->pagedata['arr'] = $arr;
			$this->pagedata['from'] = $from;
			$this->pagedata['tenders'] = $tenders;
			$this->pagedata['mj'] = $mj;
			$this->pagedata['is_show'] = '1';
			$this->tmpl = 'price/index_get_price.html';
			return $this->output(true);
		}
	}
// 预约
	public function yuyue()
	{
		if(!$data = $this->GP('data')){
			$this->err->add('您的信息没有填写',201);
		}else if(!$data['mj']){
			$this->err->add('请填写建筑面积',202);
		}else{
			$this->pagedata['data'] = $data;
			$this->tmpl = 'price/yuyue.html';
		}



    }
////首页报价结束
	public function zhiFu()
	{
		$this->tmpl = 'text/text.html';
	}

	public function aliPay()
	{
		$aa = ($this->GP('data'));
		$this->alPay(111);

	}

	public function alPay($order_sn)
	{

//        $order_sn = base64_encode($request->get('order_sn'));
//		$order = Order::find()->where(['order_sn'=>$order_sn])->asArray()->one();
		header("Content-type:text/html;charset=utf-8");


//        \Yii::import('application.vendor.*');
		require_once(IN_DIR.'system/plugins/payments/pay/alipay_core.function.php');
		require_once(IN_DIR.'system/plugins/payments/pay/alipay_md5.function.php');
		require_once(IN_DIR.'system/plugins/payments/pay/alipay_notify.class.php');
		require_once(IN_DIR.'system/plugins/payments/pay/alipay_submit.class.php');
		$alipay_config = \Yii::$app->params['alipay_config'];
		$payment_type = "1";
		$notify_url = \Yii::$app->params['alipay']['notify_url'];
		//需http://格式的完整路径，不能加?id=123这类自定义参数
		//页面跳转同步通知页面路径
		$return_url = \Yii::$app->params['alipay']['return_url'];
		//需http://格式的完整路径，不能加?id=123这类自定义参数，不能写成http://localhost/
		//卖家支付宝帐户
		$seller_email = \Yii::$app->params['alipay']['seller_email'];
		//必填
		//商户订单号
		$out_trade_no = $order_sn;
		//商户网站订单系统中唯一订单号，必填
		//订单名称
		$subject = '测试';
		//必填
		//付款金额
		$total_fee = 0.01;
		//必填
		//订单描述
		$body = '测试';
		//商品展示地址
		$show_url = '';
		//需以http://开头的完整路径，例如：http://www.xxx.com/myorder.html
		//防钓鱼时间戳
		$anti_phishing_key = "";
		//若要使用请调用类文件submit中的query_timestamp函数
		//客户端的IP地址
		$exter_invoke_ip = "";
		//非局域网的外网IP地址，如：221.0.0.1


		/************************************************************/

		//构造要请求的参数数组，无需改动
		$parameter = array(
			"service" => "create_direct_pay_by_user",
			"partner" => trim($alipay_config['partner']),
			"payment_type" => $payment_type,
			"notify_url" => $notify_url,
			"return_url" => $return_url,
			"seller_email" => $seller_email,
			"out_trade_no" => $out_trade_no,
			"subject" => $subject,
			"total_fee" => $total_fee,
			"body" => $body,
			"show_url" => $show_url,
			"anti_phishing_key" => $anti_phishing_key,
			"exter_invoke_ip" => $exter_invoke_ip,
			"_input_charset" => trim(strtolower($alipay_config['input_charset']))
		);
		//        print_r($parameter);die;
//建立请求
		$alipaySubmit = new \AlipaySubmit($alipay_config);
		$html_text = $alipaySubmit->buildRequestForm($parameter,"get", "正在跳转");
		echo $html_text;


	}





//    public function smsSend()
//    {
//        $phone = $this->GP('phone');
//        $code = rand(1000,9999);
//        SmsDemo::sendSms($phone,$code);
//        session_start();
//        $_SESSION['code']=$code;
//
//
//    }
}