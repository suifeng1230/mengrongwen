<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:38:28
         compiled from "72ebeb6f8d8a31abf6a98ce6a33dfda98b1ba6a2" */ ?>
<?php /*%%SmartyHeaderCode:29885ad55014b35ac4-74621575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72ebeb6f8d8a31abf6a98ce6a33dfda98b1ba6a2' => 
    array (
      0 => '72ebeb6f8d8a31abf6a98ce6a33dfda98b1ba6a2',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '29885ad55014b35ac4-74621575',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55014b70457_24459205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55014b70457_24459205')) {function content_5ad55014b70457_24459205($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
				<li>
					<a target='_blank' title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'ask:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['ask_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],48);?>
</a>
				</li>
				<?php }} ?>