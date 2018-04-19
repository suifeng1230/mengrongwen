<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 15:44:08
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\block\mini-header.html" */ ?>
<?php /*%%SmartyHeaderCode:78975ac48248c54875-82248586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25eef7047e22fed59dd52a15bc2df6e8db1a61e5' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\block\\mini-header.html',
      1 => 1429266542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78975ac48248c54875-82248586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac48248c64273_25510575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac48248c64273_25510575')) {function content_5ac48248c64273_25510575($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['request']->value['MINI']!='load'){?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><?php echo $_smarty_tpl->getSubTemplate ("block/sheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body>
<iframe id="miniframe" name="miniframe" style="display:none;"></iframe>
<?php }?><?php }} ?>