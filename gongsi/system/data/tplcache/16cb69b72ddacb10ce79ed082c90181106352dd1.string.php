<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:38:28
         compiled from "16cb69b72ddacb10ce79ed082c90181106352dd1" */ ?>
<?php /*%%SmartyHeaderCode:3375ad550142b1dd8-01927939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16cb69b72ddacb10ce79ed082c90181106352dd1' => 
    array (
      0 => '16cb69b72ddacb10ce79ed082c90181106352dd1',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '3375ad550142b1dd8-01927939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55014307ce4_13619836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55014307ce4_13619836')) {function content_5ad55014307ce4_13619836($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_modifier_cutstr')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tenders_id']),$_smarty_tpl);?>
" target="_blank"><span style="width:30%"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline'],"m-d");?>
</span><span><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['contact'],3);?>
</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['style_title'];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['budget_title'];?>
</span></a></li>
					<?php }} ?>