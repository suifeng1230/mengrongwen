<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 14:21:27
         compiled from "65c0e1adf59686574e0d337088b3c656a10de06f" */ ?>
<?php /*%%SmartyHeaderCode:114055ac46ee7d82369-47480168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65c0e1adf59686574e0d337088b3c656a10de06f' => 
    array (
      0 => '65c0e1adf59686574e0d337088b3c656a10de06f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '114055ac46ee7d82369-47480168',
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
  'unifunc' => 'content_5ac46ee7dad2e7_78853036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac46ee7dad2e7_78853036')) {function content_5ac46ee7dad2e7_78853036($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                <li>
                    <span class="lt"><font class="paihang_num<?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</font><a href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],35);?>
</a></span>
                    <span class="rt">报名数：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['sign_num'];?>
</font></span>
                </li>
                <?php }} ?>