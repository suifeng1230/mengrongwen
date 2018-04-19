<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:16:56
         compiled from "a12a7635c457ceca67854e6b18b22090daa3e2e0" */ ?>
<?php /*%%SmartyHeaderCode:150025acb0558b452a0-62745827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a12a7635c457ceca67854e6b18b22090daa3e2e0' => 
    array (
      0 => 'a12a7635c457ceca67854e6b18b22090daa3e2e0',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '150025acb0558b452a0-62745827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5acb0558b65846_39552442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb0558b65846_39552442')) {function content_5acb0558b65846_39552442($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?> 
				<li>
					<a href="<?php echo smarty_function_link(array('ctl'=>'article:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
" target="_blank"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],48);?>
</a>
				</li>
				<?php }} ?>