<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:42:15
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\page\404.html" */ ?>
<?php /*%%SmartyHeaderCode:221135ad550f72b1cc7-99847510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0b700e5f665ced36f0374a09b7794b29d067b65' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\page\\404.html',
      1 => 1498806460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221135ad550f72b1cc7-99847510',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad550f7313764_66965205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad550f7313764_66965205')) {function content_5ad550f7313764_66965205($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/sheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="mainwd">
	<div class="error_box">
		<div class="error_cont hoverno">
			<h1>404!</h1>
			<p>对不起，您所访问的页面出现错误！</p>
			<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" class="btn">返回首页</a><a href="javascript:windows.history.back();" class="btn">返回上一页</a>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>







<?php }} ?>