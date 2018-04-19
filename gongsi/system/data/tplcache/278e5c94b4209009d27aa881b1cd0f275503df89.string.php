<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:38:28
         compiled from "278e5c94b4209009d27aa881b1cd0f275503df89" */ ?>
<?php /*%%SmartyHeaderCode:48835ad55014b9f267-13517542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '278e5c94b4209009d27aa881b1cd0f275503df89' => 
    array (
      0 => '278e5c94b4209009d27aa881b1cd0f275503df89',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '48835ad55014b9f267-13517542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55014bce075_30665876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55014bce075_30665876')) {function content_5ad55014bce075_30665876($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
				<li>
					<a href="<?php echo smarty_function_link(array('ctl'=>'article:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
" target="_blank"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],48);?>
</a>
				</li>
				<?php }} ?>