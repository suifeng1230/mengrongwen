<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 17:15:34
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\mobile\block\header.html" */ ?>
<?php /*%%SmartyHeaderCode:97995ac497b6846d13-33238184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '956cbab26a1e41b2c5c8263251558c91aa3e16eb' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\mobile\\block\\header.html',
      1 => 1482119279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97995ac497b6846d13-33238184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_index_home' => 0,
    'pager' => 0,
    'CONFIG' => 0,
    'request' => 0,
    'tpl_page_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac497b689cc38_79885927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac497b689cc38_79885927')) {function content_5ac497b689cc38_79885927($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><!doctype html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/sheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<iframe id="miniframe" name="miniframe" style="display:none;"></iframe>
<div class="top nowrap">
	<div class="sub_top">
        <?php if (!$_smarty_tpl->tpl_vars['is_index_home']->value){?>
		<a href="<?php if ($_smarty_tpl->tpl_vars['pager']->value['backurl']){?><?php echo $_smarty_tpl->tpl_vars['pager']->value['backurl'];?>
<?php }else{ ?><?php echo smarty_function_link(array('ctl'=>'mobile/index'),$_smarty_tpl);?>
<?php }?>" class="lt app_ico top_lt"></a>
        <?php }elseif($_smarty_tpl->tpl_vars['CONFIG']->value['site']['multi_city']){?>
		<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/city'),$_smarty_tpl);?>
" class="lt city_link"><span class="app_ico city_ico"></span><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
切换</a>
        <?php }?>
		<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['tpl_page_title']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['pager']->value['title'] : $tmp))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['CONFIG']->value['mobile']['title'] : $tmp);?>

        <p class="rt"><a href="<?php echo smarty_function_link(array('ctl'=>'mobile/ucenter/index'),$_smarty_tpl);?>
" class="app_ico login_ico"></a>
        <?php if (!$_smarty_tpl->tpl_vars['is_index_home']->value){?><a href="#" class="app_ico top_rt" id="dt-hd-nav"></a><?php }?>
		</p>
        <?php echo $_smarty_tpl->getSubTemplate ("mobile/block/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<div class="mb10"></div>
<div class="content"><?php }} ?>