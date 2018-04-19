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
   
    public function index()
    {
         
		$this->pagedata['site_status_list'] = K::M('home/site')->get_status();
        $this->seo->init('index');
        $this->tmpl = 'index.html';

		$city_list = K::M('data/city')->fetch_all(); 
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
        $this->pagedata['city_list']  = $city_list;
    }

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
            $mobile = $this->system->config->get('mobile');
            $this->system->cookie->delete('force_web');
            $this->system->cookie->delete('force_mobile');
            $this->system->cookie->set('force_mobile', 1);
            header('Location:'.$mobile['url']);
            exit;            
        }
    } 

}