<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:36:20
         compiled from "8f99aa2592f3253be4f55bea4868824e9dc943a4" */ ?>
<?php /*%%SmartyHeaderCode:224295ac42c14a706f5-68879462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f99aa2592f3253be4f55bea4868824e9dc943a4' => 
    array (
      0 => '8f99aa2592f3253be4f55bea4868824e9dc943a4',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '224295ac42c14a706f5-68879462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iteration' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42c14a977f4_56702306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42c14a977f4_56702306')) {function content_5ac42c14a977f4_56702306($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
				<li> <span class="lt"><font class="paihang_num<?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</font><a href="<?php echo smarty_function_link(array('ctl'=>'gz-detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],35);?>
</a></span> <span class="rt">已投标：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['tenders_num'];?>
</font></span> </li>
				<?php }} ?>