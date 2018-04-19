<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:36:15
         compiled from "widget:data/region.html" */ ?>
<?php /*%%SmartyHeaderCode:253755ac42c0f644d95-38370319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fda00583e2b113c45153d89096be3e2478c1cd3' => 
    array (
      0 => 'widget:data/region.html',
      1 => 1430718890,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '253755ac42c0f644d95-38370319',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widget' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42c0f6b6230_43839915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42c0f6b6230_43839915')) {function content_5ac42c0f6b6230_43839915($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\libs\\smarty\\plugins\\function.html_options.php';
?><region id="<?php echo $_smarty_tpl->tpl_vars['widget']->value['GUID'];?>
">
<select class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['class'])===null||$tmp==='' ? 'w-150' : $tmp);?>
" province="<?php echo $_smarty_tpl->tpl_vars['data']->value['province_id'];?>
" name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['name_province'])===null||$tmp==='' ? 'province_id' : $tmp);?>
"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['data']->value['provinces'],'selected'=>$_smarty_tpl->tpl_vars['data']->value['province_id']),$_smarty_tpl);?>
</select>
<?php if ($_smarty_tpl->tpl_vars['data']->value['level']>1){?>
<select class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['class'])===null||$tmp==='' ? 'w-150' : $tmp);?>
" city="<?php echo $_smarty_tpl->tpl_vars['data']->value['city_id'];?>
" name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['name_city'])===null||$tmp==='' ? 'data[city_id]' : $tmp);?>
"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['data']->value['citys'],'selected'=>$_smarty_tpl->tpl_vars['data']->value['city_id']),$_smarty_tpl);?>
</select>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['data']->value['level']>2){?>
<select class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['class'])===null||$tmp==='' ? 'w-150' : $tmp);?>
" area="<?php echo $_smarty_tpl->tpl_vars['data']->value['area_id'];?>
" name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['name_area'])===null||$tmp==='' ? 'data[area_id]' : $tmp);?>
"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['data']->value['areas'],'selected'=>$_smarty_tpl->tpl_vars['data']->value['area_id']),$_smarty_tpl);?>
</select>
<?php }?>
</region>
<script type="text/javascript">(function(K, $){Widget.Region("<?php echo $_smarty_tpl->tpl_vars['widget']->value['GUID'];?>
");})(window.KT, window.jQuery);</script><?php }} ?>