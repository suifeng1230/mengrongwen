<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:16:55
         compiled from "1e967a7727118e6d83e2d18dc134c3d88cb6a528" */ ?>
<?php /*%%SmartyHeaderCode:42875acb05576d77c9-49494525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '42875acb05576d77c9-49494525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5acb05576ed011_12495539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb05576ed011_12495539')) {function content_5acb05576ed011_12495539($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?>
							<a href="<?php echo smarty_function_link(array('ctl'=>"mall/product",'arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'arg1'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
						<?php }} ?>