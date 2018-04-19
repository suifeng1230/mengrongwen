<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 14:23:12
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\tenders\success.html" */ ?>
<?php /*%%SmartyHeaderCode:215225ac46f503be179-57397203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c9e5384ee7160771929b8ebe6e09fd8e99a3de8' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\tenders\\success.html',
      1 => 1429266536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215225ac46f503be179-57397203',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wx_tenders_qr' => 0,
    'CONFIG' => 0,
    'MEMBER' => 0,
    'tenders_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac46f504ac629_50928107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac46f504ac629_50928107')) {function content_5ac46f504ac629_50928107($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><style type="text/css">/*
    .ui-hack-widget-dialog{border:none;}
    .ui-hack-widget-dialog .ui-dialog-titlebar{background:#FFF;border:none;}*/
</style> 
<?php if ($_smarty_tpl->tpl_vars['wx_tenders_qr']->value){?>
<div class=" menu_list_ok_tenders">
	<h1 class="fontcl1"><span class="index_ico lt"></span>恭喜您，申请成功！</h1>
	<div class="s1_hd_sub"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
客服将于24小时内联系您，请您保持手机畅通。</div>
	<img src="/themes/default/static/images/box_service.png" />
	<div class="service_img"><img src="<?php echo $_smarty_tpl->tpl_vars['wx_tenders_qr']->value;?>
" /></div>
</div>
<?php }else{ ?>
<div class=" menu_list_ok_tenders">
	<h1 class="fontcl1"><span class="index_ico lt"></span>恭喜您，申请成功！</h1><br />
	<div class="s1_hd_sub"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
客服将于24小时内与您联系！</div>
    <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['uid']){?>
    <p class="colorbg"><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:tendersDetail','arg0'=>$_smarty_tpl->tpl_vars['tenders_id']->value),$_smarty_tpl);?>
" >查看招标详情>></a></p>
    <?php }?>
	<br />
</div>
<?php }?>
<div id="Tenders_success_dd" class="none"></div>
<script type="text/javascript">
(function(){
$(".ui-hack-widget-dialog").css({"border":"none"});
$(".ui-hack-widget-dialog .ui-dialog-titlebar").css({"border":"none","background":"#FFF"});
})(window.KT, window.jQuery);
<\/script><?php }} ?>