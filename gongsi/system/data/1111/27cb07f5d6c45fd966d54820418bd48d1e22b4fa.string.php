<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:16:56
         compiled from "27cb07f5d6c45fd966d54820418bd48d1e22b4fa" */ ?>
<?php /*%%SmartyHeaderCode:265565acb0558789fc1-99035944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27cb07f5d6c45fd966d54820418bd48d1e22b4fa' => 
    array (
      0 => '27cb07f5d6c45fd966d54820418bd48d1e22b4fa',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '265565acb0558789fc1-99035944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5acb05587a20b9_63481702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb05587a20b9_63481702')) {function content_5acb05587a20b9_63481702($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
				<li>
					<a href="<?php echo smarty_function_link(array('ctl'=>'diary:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
"  target="_blank"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],48);?>
</a>
				</li>
				<?php }} ?>