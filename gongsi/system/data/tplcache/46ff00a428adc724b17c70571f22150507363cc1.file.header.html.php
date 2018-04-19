<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:41:43
         compiled from "E:\phpstudy\WWW\gongsi\install\view\header.html" */ ?>
<?php /*%%SmartyHeaderCode:218655ad550d732b904-55132985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46ff00a428adc724b17c70571f22150507363cc1' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\install\\view\\header.html',
      1 => 1482996703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218655ad550d732b904-55132985',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad550d738d395_64397744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad550d738d395_64397744')) {function content_5ad550d738d395_64397744($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7">
<title>安装向导 - 装修网门户系统</title>
	<link rel="stylesheet" href="../static/style/common.css" type="text/css" />
	<link rel="stylesheet" href="../static/style/kt.widget.css" type="text/css" />
	<link rel="stylesheet" href="../static/ui/j.ui.css" type="text/css" />
	<script type="text/javascript"  src="../static/script/kt.j.js"></script>
	<script type="text/javascript"  src="../static/script/kt.js"></script>
	<script type="text/javascript"  src="../static/script/widget.msgbox.js"></script>
</head>
<style type="text/css">
body {margin-left: 0px;	margin-top: 0px; margin-right: 0px;	margin-bottom: 0px; font-size:14px;color:#666666;font-family: "微软雅黑"}
a:link {text-decoration: none;color: #0066CC;}
a:visited {text-decoration: none;color: #0066CC;}
a:hover {text-decoration: underline;color: #009900;}
a:active {text-decoration: none;}
.left_table_right_dot{border-bottom:1px #DEF0F5 solid;border-top:1px #DEF0F5 solid;border-left:1px #DEF0F5 solid; background-image:url(../images/dot.gif); background-repeat:repeat-y; background-position:right; padding-top:15px; padding-bottom:100px; background-color: #F7FBFC; font-size:14px; color:#666666}
.link_1{ background-image:url(../images/link_bg.gif); background-repeat:no-repeat; background-position:right; color:#FF6600; font-weight:bold}
.link_2{ font-size:14px; color: #009900 }
.step_submit { padding:3px; font-size:12px;}
.input { width:180px; height:18px;padding:3px;margin:5px;  }	
</style>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-bottom:1px solid #DEF0F5;">
  <tr>
    <td height="60" >
		<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
		  <tr>
			<td><h2 style="font-size:18px;font-weight:bold;">《<b style="color:#FF6600;">装修网门户系统</b>》安装向导</h2></td>
		  </tr>
		</table>
	</td>
  </tr>
</table>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;">
  <tr>
    <td width="186" valign="top"><table width="180" border="0" cellspacing="0" cellpadding="0"  class="left_table_right_dot">
      <tr>
        <td>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr><td height="40" align="center" <?php if ($_smarty_tpl->tpl_vars['request']->value['step']=='protocol'){?>class="link_1"<?php }?>>许可协议</td></tr>
			<tr><td height="40" align="center" <?php if ($_smarty_tpl->tpl_vars['request']->value['step']=='check'){?>class="link_1"<?php }?>>环境检测</td></tr>
			<tr><td height="40" align="center" <?php if ($_smarty_tpl->tpl_vars['request']->value['step']=='config'){?>class="link_1"<?php }?>>参数配置</td></tr>
			<tr><td height="40" align="center" <?php if ($_smarty_tpl->tpl_vars['request']->value['step']=='install'){?>class="link_1"<?php }?>>开始安装</td></tr>
			<tr><td height="40" align="center" <?php if ($_smarty_tpl->tpl_vars['request']->value['step']=='success'){?>class="link_1"<?php }?>>安装完成</td></tr>
			</table>
		</td>
      </tr>
    </table></td>
    <td valign="top">
<div style="line-height:200%; min-height:300px;display:block;padding:10px;border:1px solid #eee;">
<?php }} ?>