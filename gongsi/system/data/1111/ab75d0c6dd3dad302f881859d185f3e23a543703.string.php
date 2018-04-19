<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:36:15
         compiled from "ab75d0c6dd3dad302f881859d185f3e23a543703" */ ?>
<?php /*%%SmartyHeaderCode:256535ac42c0f7e6d71-69208396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab75d0c6dd3dad302f881859d185f3e23a543703' => 
    array (
      0 => 'ab75d0c6dd3dad302f881859d185f3e23a543703',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '256535ac42c0f7e6d71-69208396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42c0f811d06_72213701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42c0f811d06_72213701')) {function content_5ac42c0f811d06_72213701($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?>
					<li>
                        <span><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline'],"m-d");?>
</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['contact'];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['from_title'];?>
</span>
                        <span class="long"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],50);?>
</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['budget_title'];?>
</span><a href="<?php echo smarty_function_link(array('ctl'=>'tenders:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tenders_id']),$_smarty_tpl);?>
"  target="_blank"><span class="fontcl2">查看</span></a>
					</li>
                    <?php }} ?>