<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 15:44:08
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\gs\yuyue.html" */ ?>
<?php /*%%SmartyHeaderCode:13125ac48248b0c629-51541747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5f870a13d497139a6f690b6222eb18eb3645629' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\gs\\yuyue.html',
      1 => 1435920500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13125ac48248b0c629-51541747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_id' => 0,
    'detail' => 0,
    'yuyue_yz' => 0,
    'pager' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac48248c0a4e4_50098660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac48248c0a4e4_50098660')) {function content_5ac48248c0a4e4_50098660($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["min_ititle"] = new Smarty_variable("报名公司设计", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("block/mini-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<form action="<?php echo smarty_function_link(array('ctl'=>'gs:yuyue','http'=>'ajax'),$_smarty_tpl);?>
" mini-form="sign-form" method="post" >
<input name="company_id" type="hidden" class="input" value="<?php echo $_smarty_tpl->tpl_vars['company_id']->value;?>
" />
	<h2>我想请<font class="red" style="font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
</font>帮我解决烦恼！</h2>
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
	<?php if ($_smarty_tpl->tpl_vars['yuyue_yz']->value){?>
	<dl>
		<dt class="yzm">验 证 码</dt>
		<dd class="short"><input class="text short" type="text"  name="verifycode" placeholder="请输入验证码"/></dd>
		<img title="点击刷新验证码" verify="#yuyue-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" id="yuyue-verify"/>
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