<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:38:27
         compiled from "8ccf00acfb62d82c23beed582b0a88b3e478bdd0" */ ?>
<?php /*%%SmartyHeaderCode:220215ad55013edf018-10626458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ccf00acfb62d82c23beed582b0a88b3e478bdd0' => 
    array (
      0 => '8ccf00acfb62d82c23beed582b0a88b3e478bdd0',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '220215ad55013edf018-10626458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55013f199a5_36307067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55013f199a5_36307067')) {function content_5ad55013f199a5_36307067($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
					<li style="line-height: 33px;">
						<a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
" target="_blank" class="lt" style="padding-left: 5px;font-size:14px;white-space:nowrap;overflow:hidden;"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],15);?>
</a>
						<em class="rt" style="padding-right: 8px;"><?php echo $_smarty_tpl->tpl_vars['item']->value['area_name'];?>
</em>
					</li>
					<?php }} ?>