<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:21:21
         compiled from "widget:default/option.html" */ ?>
<?php /*%%SmartyHeaderCode:281235ad55a215238d7-87457156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '281235ad55a215238d7-87457156',
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
  'unifunc' => 'content_5ad55a2155e260_42948150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55a2155e260_42948150')) {function content_5ad55a2155e260_42948150($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\libs\\smarty\\plugins\\function.html_options.php';
?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['data']->value['options'],'selected'=>$_smarty_tpl->tpl_vars['data']->value['value'],'value'=>$_smarty_tpl->tpl_vars['detail']->value['value']),$_smarty_tpl);?>
<?php }} ?>