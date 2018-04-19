<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:10:42
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\mobile\block\sheader.html" */ ?>
<?php /*%%SmartyHeaderCode:145005ad557a2d4b5f6-12373216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82b9f730592ddecf029c4f4dd59b44d1ff814595' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\mobile\\block\\sheader.html',
      1 => 1500955571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145005ad557a2d4b5f6-12373216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo_sub_title' => 0,
    'seo_title' => 0,
    'SEO' => 0,
    'CONFIG' => 0,
    'seo_keywords' => 0,
    'seo_description' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad557a2e16826_83155287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad557a2e16826_83155287')) {function content_5ad557a2e16826_83155287($_smarty_tpl) {?><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width" />
<link rel="apple-touch-icon-precomposed" href="/themes/default/mobile/static/images/apple114.png" />
<link rel="apple-touch-startup-image" href="/themes/default/mobile/static/images/apple114.png" />
<title><?php if ($_smarty_tpl->tpl_vars['seo_sub_title']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_sub_title']->value;?>
_<?php }?><?php if ($_smarty_tpl->tpl_vars['seo_title']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_title']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['SEO']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['mobile']['title'];?>
<?php }?></title>
<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['seo_keywords']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_keywords']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['SEO']->value['keywords']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['keywords'];?>
<?php }?>" />
<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['seo_description']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_description']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['SEO']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['description'];?>
<?php }?>" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/style/kt.widget.css">
<link rel="stylesheet" type="text/css" href="/themes/default/mobile/static/css/public.css">
<link rel="stylesheet" type="text/css" href="/themes/default/mobile/static/css/style.css">
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt.j.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/toastr/toastr.min.css">
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/toastr/toastr.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt.j.js"></script>
<script type="text/javascript"  src="/themes/default/mobile/static/script/kt.js"></script>
<script type="text/javascript"  src="/themes/default/mobile/static/script/widget.msgbox.js"></script>
<script language="javascript" type="text/javascript" src="/themes/default/mobile/static/js/common.min.js"></script>
<script language="javascript" type="text/javascript" src="/themes/default/mobile/static/js/menu.js"></script>

</head><?php }} ?>