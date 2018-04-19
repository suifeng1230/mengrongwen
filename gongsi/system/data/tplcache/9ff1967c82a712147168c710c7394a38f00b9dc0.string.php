<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 11:01:33
         compiled from "9ff1967c82a712147168c710c7394a38f00b9dc0" */ ?>
<?php /*%%SmartyHeaderCode:47245ad5638dd70829-24873988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ff1967c82a712147168c710c7394a38f00b9dc0' => 
    array (
      0 => '9ff1967c82a712147168c710c7394a38f00b9dc0',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '47245ad5638dd70829-24873988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5638dd9b7b4_26797996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5638dd9b7b4_26797996')) {function content_5ad5638dd9b7b4_26797996($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?>
								<a  style='margin-right: 3px;color:#fff;height:0;' href="<?php echo smarty_function_link(array('ctl'=>"mall/product",'arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'arg1'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
							<?php }} ?>