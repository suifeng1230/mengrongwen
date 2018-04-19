<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:33:33
         compiled from "1ce0c2c596acef0e6995564becf790c4cf638148" */ ?>
<?php /*%%SmartyHeaderCode:19785ac42b6d34a6b6-72397121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ce0c2c596acef0e6995564becf790c4cf638148' => 
    array (
      0 => '1ce0c2c596acef0e6995564becf790c4cf638148',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '19785ac42b6d34a6b6-72397121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'last' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42b6d35df46_74388642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42b6d35df46_74388642')) {function content_5ac42b6d35df46_74388642($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><a href="<?php echo smarty_function_link(array('ctl'=>'about','arg0'=>$_smarty_tpl->tpl_vars['item']->value['page']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a> <?php if (!$_smarty_tpl->tpl_vars['last']->value){?>|<?php }?> <?php }} ?>