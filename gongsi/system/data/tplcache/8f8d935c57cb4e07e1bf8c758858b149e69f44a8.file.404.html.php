<?php /* Smarty version Smarty-3.1.8, created on 2018-04-18 09:53:17
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\mobile\page\404.html" */ ?>
<?php /*%%SmartyHeaderCode:284605ad6a50d01f4b8-40422531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f8d935c57cb4e07e1bf8c758858b149e69f44a8' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\mobile\\page\\404.html',
      1 => 1500629535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284605ad6a50d01f4b8-40422531',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad6a50d088c46_43358763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad6a50d088c46_43358763')) {function content_5ad6a50d088c46_43358763($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("mobile/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pding">
	<div class="tishi">
		<div class="list"><img src="/themes/default/mobile/static/images/404_pic.jpg" /></div>
	</div>
</div>
<script type="text/javascript">setTimeout(function(){window.location.href="<?php echo smarty_function_link(array('ctl'=>'mobile/index'),$_smarty_tpl);?>
"}, 3000)</script>
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>