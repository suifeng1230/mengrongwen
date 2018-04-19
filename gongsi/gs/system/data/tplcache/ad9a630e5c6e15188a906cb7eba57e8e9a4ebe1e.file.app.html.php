<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 09:13:53
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\app\app.html" */ ?>
<?php /*%%SmartyHeaderCode:308055acabe51d114b4-99977455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad9a630e5c6e15188a906cb7eba57e8e9a4ebe1e' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\app\\app.html',
      1 => 1496988728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308055acabe51d114b4-99977455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5acabe5205cf93_10458133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acabe5205cf93_10458133')) {function content_5acabe5205cf93_10458133($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<!--头部内容结束-->
<div class="appBanner">
	<div style="width:100%; height:580px; position:absolute; z-index:2; background:#3492e3 url('/themes/default/static/images/xiaobihuapp.jpg') center center no-repeat;">
		<div class="mainwd">
			<div class="appBanner_tact">
				<div class="appBanner_tact_lt lt"> <a href="<?php echo smarty_function_link(array('ctl'=>'app:iphone','http'=>'www'),$_smarty_tpl);?>
" target="_blank"><img src="/themes/default/static/images/appBtn1.jpg" alt="苹果下载" title="苹果下载" /></a> <a href="<?php echo smarty_function_link(array('ctl'=>'app:android','http'=>'www'),$_smarty_tpl);?>
" target="_blank"><img src="/themes/default/static/images/appBtn2.jpg" alt="安卓下载" title="安卓下载" /></a> </div>
				<div class="appBanner_tact_rt lt">
					<p>手机扫描二维码快速下载</p>
					<img src="<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['weixinqr']){?><?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['weixinqr'];?>
<?php }else{ ?>/themes/default/static/images/weixin.jpg<?php }?>" width="140" height="140"/></div>
				<div class="cl"></div>
			</div>
		</div>
	</div>
</div>
<div class="appcontent_bg1">
	<div class="mainwd"> <img src="/themes/default/static/images/appImg1.jpg" /> </div>
</div>
<div class="appcontent_bg2">
	<div class="mainwd"> <img src="/themes/default/static/images/appImg2.jpg" /> </div>
</div>
<div class="appcontent_bg3">
	<div class="mainwd"> <img src="/themes/default/static/images/appImg3.jpg" /> </div>
</div>
<!--底部内容开始--> 
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>