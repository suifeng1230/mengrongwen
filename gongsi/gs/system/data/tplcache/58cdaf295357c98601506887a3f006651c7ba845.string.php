<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:35:02
         compiled from "58cdaf295357c98601506887a3f006651c7ba845" */ ?>
<?php /*%%SmartyHeaderCode:252135ac42bc60fc860-47615986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58cdaf295357c98601506887a3f006651c7ba845' => 
    array (
      0 => '58cdaf295357c98601506887a3f006651c7ba845',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '252135ac42bc60fc860-47615986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42bc6117df0_93062719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42bc6117df0_93062719')) {function content_5ac42bc6117df0_93062719($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
				<div class="index_study_news_top">
					<h3><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],35);?>
</a></h3>
					<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['desc'],100);?>
<font class="fontcl2">[详情]</font></a>
				</div>
                <?php }} ?>