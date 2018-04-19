<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:16:55
         compiled from "52609077113f5e2f74aa2e60fca2d48c26a16fb8" */ ?>
<?php /*%%SmartyHeaderCode:171305acb0557c9b347-49943772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52609077113f5e2f74aa2e60fca2d48c26a16fb8' => 
    array (
      0 => '52609077113f5e2f74aa2e60fca2d48c26a16fb8',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '171305acb0557c9b347-49943772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5acb0557ccda16_08206328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb0557ccda16_08206328')) {function content_5acb0557ccda16_08206328($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
				<li class='lt'>
					<a  href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="_blank">
						<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="undefined" style="display: inline;height:115px !important;">
						<div class="sk_item_shadow"></div>
						<p style=' margin-top: 25px;'><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['ext']['shop']['name'],20);?>
【<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],60);?>
】</p>
						<p style=' margin-top: 8px;'><b style='font-size:20px;font-weight:bold;color:red;'>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</b><span style='margin-left:4px;text-decoration: line-through;color: #555;'>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['market_price'];?>
</span></p>
					</a>
				</li>
			<?php }} ?>