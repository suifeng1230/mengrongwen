<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:16:56
         compiled from "14550659cfc7961ad0c6c99c7d8c8ed4a57ed3f1" */ ?>
<?php /*%%SmartyHeaderCode:101595acb0558663440-53446192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14550659cfc7961ad0c6c99c7d8c8ed4a57ed3f1' => 
    array (
      0 => '14550659cfc7961ad0c6c99c7d8c8ed4a57ed3f1',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '101595acb0558663440-53446192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5acb05586b9365_12812071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb05586b9365_12812071')) {function content_5acb05586b9365_12812071($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='process'){?>
					<a target="_blank" title='<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
' href="<?php echo smarty_function_link(array('ctl'=>'youhui:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
" class="colorBg bg">进行中</a>
					<?php }elseif($_smarty_tpl->tpl_vars['item']->value['status']=='wait'){?>
					<a  target="_blank" title='<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
' href="<?php echo smarty_function_link(array('ctl'=>'youhui:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
" class="bg">未开始</a>
					<?php }else{ ?>
					<a target="_blank" title='<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
' href="<?php echo smarty_function_link(array('ctl'=>'youhui:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
" class="bg">已结束</a>
					<?php }?>
					<a href="<?php echo smarty_function_link(array('ctl'=>'youhui:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
"  target="_blank"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],35,'');?>
</a>
				</li>
				<?php }} ?>