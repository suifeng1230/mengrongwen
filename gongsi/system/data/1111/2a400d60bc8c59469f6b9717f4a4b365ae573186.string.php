<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:36:30
         compiled from "2a400d60bc8c59469f6b9717f4a4b365ae573186" */ ?>
<?php /*%%SmartyHeaderCode:41065ac42c1e696540-27150817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a400d60bc8c59469f6b9717f4a4b365ae573186' => 
    array (
      0 => '2a400d60bc8c59469f6b9717f4a4b365ae573186',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '41065ac42c1e696540-27150817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42c1e6b97d7_48210142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42c1e6b97d7_48210142')) {function content_5ac42c1e6b97d7_48210142($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?><?php if ($_smarty_tpl->tpl_vars['index']->value<8){?><a href="<?php echo smarty_function_link(array('ctl'=>'article:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'arg1'=>1),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_title'];?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],5,'');?>
</a><?php }?><?php }} ?>