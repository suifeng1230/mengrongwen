<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 16:58:44
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\tenders\fast.html" */ ?>
<?php /*%%SmartyHeaderCode:26995ac493c410c0e0-69872257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd32516fee4e7539443caf797363fefa15e70933a' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\tenders\\fast.html',
      1 => 1435920496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26995ac493c410c0e0-69872257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tender_yz' => 0,
    'pager' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac493c4189101_79422518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac493c4189101_79422518')) {function content_5ac493c4189101_79422518($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["min_ititle"] = new Smarty_variable("装修招标", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("block/mini-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h2>免费发布装修招标</h2>
<form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'ajax'),$_smarty_tpl);?>
" mini-form="sign-form" method="post" >
<input type="hidden" name="data[from]" value="TZX" /> 
<div class="yuyBook">
	<dl>
		<dt class="name">
			您的称呼
		</dt>
		<dd>
		<input name="data[contact]" type="text" class="text" value=""  placeholder="请输入您的称呼"//>
		</dd>
	</dl>
	<dl>
		<dt class="tel">
			手机号码
		</dt>
		<dd>
		<input name="data[mobile]" type="text" class="text" value=""  placeholder="请输入手机号码"//>
		</dd>
	</dl>
	  <?php if ($_smarty_tpl->tpl_vars['tender_yz']->value){?>
	<dl>
		<dt class="yzm">
			验 证 码
		</dt>
		<dd class="short">
		<input class="text short" type="text"  name="verifycode" placeholder="请输入验证码"/>
		</dd><img title="点击刷新验证码" verify="#pass-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" id="pass-verify"/>
	</dl>
	 <?php }?>
	 <div class="yuyue_bottom"><input type="submit" value="立即报名" class="btn btn_sub_big" /><b class="yuyue_tel">装修热线：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</font></b></div>
</div>
</form>
<script>
$("[verify]").click(function(){
	$($(this).attr("verify")).attr("src", "<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_"+Math.random());
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("block/mini-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>