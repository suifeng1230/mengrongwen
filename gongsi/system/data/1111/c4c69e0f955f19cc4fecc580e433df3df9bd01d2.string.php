<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:35:01
         compiled from "c4c69e0f955f19cc4fecc580e433df3df9bd01d2" */ ?>
<?php /*%%SmartyHeaderCode:213135ac42bc5e69ff4-25535968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4c69e0f955f19cc4fecc580e433df3df9bd01d2' => 
    array (
      0 => 'c4c69e0f955f19cc4fecc580e433df3df9bd01d2',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '213135ac42bc5e69ff4-25535968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42bc5e85580_67782536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42bc5e85580_67782536')) {function content_5ac42bc5e85580_67782536($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
					<li><span  class="long"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline'],"m-d");?>
</span><span><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['contact'],3);?>
</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['style_title'];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['budget_title'];?>
</span></li>
                    <?php }} ?>