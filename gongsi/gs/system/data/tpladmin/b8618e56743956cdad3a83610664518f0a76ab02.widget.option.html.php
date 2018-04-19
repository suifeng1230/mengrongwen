<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 10:29:09
         compiled from "widget:default/option.html" */ ?>
<?php /*%%SmartyHeaderCode:51075ac43875c4d973-97631088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8618e56743956cdad3a83610664518f0a76ab02' => 
    array (
      0 => 'widget:default/option.html',
      1 => 1429266502,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '51075ac43875c4d973-97631088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac43875c5d372_12168413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac43875c5d372_12168413')) {function content_5ac43875c5d372_12168413($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\libs\\smarty\\plugins\\function.html_options.php';
?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['data']->value['options'],'selected'=>$_smarty_tpl->tpl_vars['data']->value['value'],'value'=>$_smarty_tpl->tpl_vars['detail']->value['value']),$_smarty_tpl);?>
<?php }} ?>