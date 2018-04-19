<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 14:27:14
         compiled from "cbd31ae460a28da865fc4b0c38de7ece991af4d9" */ ?>
<?php /*%%SmartyHeaderCode:167125ac9b642529131-40993872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbd31ae460a28da865fc4b0c38de7ece991af4d9' => 
    array (
      0 => 'cbd31ae460a28da865fc4b0c38de7ece991af4d9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '167125ac9b642529131-40993872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iteration' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac9b642552dd5_54444011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac9b642552dd5_54444011')) {function content_5ac9b642552dd5_54444011($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                    <li>
                        <span class="lt"><font class="paihang_num<?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</font><a href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],35);?>
</a></span>
                        <span class="rt">已投标：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['tenders_num'];?>
</font></span>
                    </li>
                 <?php }} ?>