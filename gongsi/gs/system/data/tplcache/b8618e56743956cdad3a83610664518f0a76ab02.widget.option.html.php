<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:36:15
         compiled from "widget:default/option.html" */ ?>
<?php /*%%SmartyHeaderCode:140145ac42c0f619e10-13813765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '140145ac42c0f619e10-13813765',
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
  'unifunc' => 'content_5ac42c0f62d696_22402293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42c0f62d696_22402293')) {function content_5ac42c0f62d696_22402293($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\libs\\smarty\\plugins\\function.html_options.php';
?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['data']->value['options'],'selected'=>$_smarty_tpl->tpl_vars['data']->value['value'],'value'=>$_smarty_tpl->tpl_vars['detail']->value['value']),$_smarty_tpl);?>
<?php }} ?>