<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:38:27
         compiled from "1e967a7727118e6d83e2d18dc134c3d88cb6a528" */ ?>
<?php /*%%SmartyHeaderCode:26365ad55013aeb3a2-83660241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e967a7727118e6d83e2d18dc134c3d88cb6a528' => 
    array (
      0 => '1e967a7727118e6d83e2d18dc134c3d88cb6a528',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '26365ad55013aeb3a2-83660241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55013b16331_61415309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55013b16331_61415309')) {function content_5ad55013b16331_61415309($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?>
							<a href="<?php echo smarty_function_link(array('ctl'=>"mall/product",'arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'arg1'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
						<?php }} ?>