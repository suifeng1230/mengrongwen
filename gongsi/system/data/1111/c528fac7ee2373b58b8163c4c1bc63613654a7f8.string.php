<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:16:56
         compiled from "c528fac7ee2373b58b8163c4c1bc63613654a7f8" */ ?>
<?php /*%%SmartyHeaderCode:90295acb0558a34eb5-25805958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c528fac7ee2373b58b8163c4c1bc63613654a7f8' => 
    array (
      0 => 'c528fac7ee2373b58b8163c4c1bc63613654a7f8',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '90295acb0558a34eb5-25805958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5acb0558a82bf5_84150957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb0558a82bf5_84150957')) {function content_5acb0558a82bf5_84150957($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?> 
				<li>
					<a target='_blank' title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'ask:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['ask_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],48);?>
</a>
				</li>
				<?php }} ?>