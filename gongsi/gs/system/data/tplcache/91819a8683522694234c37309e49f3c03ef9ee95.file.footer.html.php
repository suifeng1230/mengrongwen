<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 17:15:34
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\mobile\block\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:117445ac497b6a1f803-62157395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91819a8683522694234c37309e49f3c03ef9ee95' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\mobile\\block\\footer.html',
      1 => 1499329010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117445ac497b6a1f803-62157395',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'request' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac497b6a65d18_40518334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac497b6a65d18_40518334')) {function content_5ac497b6a65d18_40518334($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?></div>
<div class="footer">
	<div class="footer_cont">
		<p><font class="on">触屏版</font><font class="bgray">|</font><a href="<?php echo smarty_function_link(array('ctl'=>'mobile/index:force','arg0'=>'web'),$_smarty_tpl);?>
" >电脑版</a><font class="bgray">|</font><a href="<?php echo smarty_function_link(array('ctl'=>'mobile/about','arg0'=>'about'),$_smarty_tpl);?>
" >关于我们</a></p>
		<p><font class="f12">手机版<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</font><font class="f12"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['icp'];?>
</font></p>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/sfooter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if (substr($_smarty_tpl->tpl_vars['request']->value['ctl'],0,14)!='mobile/ucenter'&&!$_smarty_tpl->tpl_vars['pager']->value['tender_hide']&&substr($_smarty_tpl->tpl_vars['request']->value['ctl'],0,11)!='mobile/shop'){?>
<div class="h40"></div>
<div class="tender">
    <div class="tender_cont">
        <h2 class="lt"><span class="app_ico tel_ico"></span><b><a href="tel:<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</a></b></h2>
        <a href="<?php echo smarty_function_link(array('ctl'=>'mobile/tenders'),$_smarty_tpl);?>
" class="rt mainbtn btn">立即招标<?php echo $_smarty_tpl->tpl_vars['pager']->value['tender_hide'];?>
</a>
    </div>
</div>
<?php }?>
</body>
</html><?php }} ?>