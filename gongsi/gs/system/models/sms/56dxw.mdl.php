<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: 56dxw.mdl.php 3350 2014-02-18 01:33:22Z youyi $
 */

Import::I('sms');
class Mdl_Sms_56dxw implements Sms_Interface
{   
    protected $gateway = 'http://jiekou.56dxw.com/sms/HttpInterface.aspx';
    protected $_cfg = array();

    public $lastmsg = '';
	public $lastcode = 1;

    public function __construct($system)
    {
    	$this->_cfg = $system->config->get('sms');
    }
    
    public function send($mobile, $content)
    {
		$c = urlencode($content);
		$url = "http://api.smsbao.com/sms?u=".$this->_cfg['uname']."&p=".md5($this->_cfg['passwd'])."&m=".$mobile."&c=".$c;
    	$ret = $this->getHtml($url);
    	
		if($ret == 0){
			return true;
		}else{
			switch($ret){
			   case 30:$error='密码错误';break;
			   case 40:$error='账号不存在';break;
			   case 41:$error='余额不足';break;
			   case 42:$error='帐号过期';break;
			   case 43:$error='IP地址限制';break;
			   case 50:$error='内容含有敏感词';break;
			   case 51:$error='手机号码不正确';break;
			   default:$error='未知的错误';
			}
			$this->lastcode = $ret;
			$this->lastmsg = $error;
		}
    	
    	return false;
    }
	
	private function getHtml($url,$data = null){
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($curl, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1);
		if (!empty($data)){
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		}
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_TIMEOUT,10);
		$output = curl_exec($curl);
		curl_close($curl);
		return $output;
	}
}