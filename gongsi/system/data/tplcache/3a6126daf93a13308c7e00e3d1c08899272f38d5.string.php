<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 11:01:34
         compiled from "3a6126daf93a13308c7e00e3d1c08899272f38d5" */ ?>
<?php /*%%SmartyHeaderCode:240055ad5638e045724-90034475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a6126daf93a13308c7e00e3d1c08899272f38d5' => 
    array (
      0 => '3a6126daf93a13308c7e00e3d1c08899272f38d5',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '240055ad5638e045724-90034475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5638e06c834_48989491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5638e06c834_48989491')) {function content_5ad5638e06c834_48989491($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><a href="<?php echo smarty_function_link(array('ctl'=>"mall/product",'arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'arg1'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
								<?php }} ?>