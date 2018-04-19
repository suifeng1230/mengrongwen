<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:33:32
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\block\sheader.html" */ ?>
<?php /*%%SmartyHeaderCode:278625ac42b6ccacad7-07579848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38a835b8ce00bff1b13e375a67158892e19a65ff' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\block\\sheader.html',
      1 => 1483580172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278625ac42b6ccacad7-07579848',
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
    'VER' => 0,
    'request' => 0,
    'tpl_head_append' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42b6cdc9da1_83849805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42b6cdc9da1_83849805')) {function content_5ac42b6cdc9da1_83849805($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if ($_smarty_tpl->tpl_vars['seo_sub_title']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_sub_title']->value;?>
_<?php }?><?php if ($_smarty_tpl->tpl_vars['seo_title']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_title']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['SEO']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
<?php }?></title>
<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['seo_keywords']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_keywords']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['SEO']->value['keywords']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['keywords'];?>
<?php }?>" />
<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['seo_description']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_description']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['SEO']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['description'];?>
<?php }?>" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/ui/j.ui.css?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/style/kt.widget.css?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/style/common.css?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
" type="text/css" />
<link type="text/css" rel="stylesheet" href="/themes/default/static/css/public.css?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
" />
<link type="text/css" rel="stylesheet" href="/themes/default/static/css/style.css?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
" />
<link rel="stylesheet" type="text/css" href="/themes/default/static/css/append.css?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
"/> 
<script type="text/javascript">window.URL={"domain":"<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['domain'];?>
","url":"<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['siteurl'];?>
", "res":"<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
", "img":"<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
","city":"<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['siteurl'];?>
"};window.G={"city":"<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
"};</script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt.j.js?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt.js?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/ui/j.ui.js?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.login.js?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.msgbox.js?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
"></script>
<script type="text/javascript"  src="/themes/default/static/js/scroll.js?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
"></script>
<?php echo $_smarty_tpl->getSubTemplate ("block/css_append.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['tpl_head_append']->value;?>
<?php }} ?>