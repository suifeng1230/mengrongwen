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

}