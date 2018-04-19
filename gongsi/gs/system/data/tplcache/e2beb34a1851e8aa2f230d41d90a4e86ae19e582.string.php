<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:36:24
         compiled from "e2beb34a1851e8aa2f230d41d90a4e86ae19e582" */ ?>
<?php /*%%SmartyHeaderCode:305255ac42c18299661-29981944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2beb34a1851e8aa2f230d41d90a4e86ae19e582' => 
    array (
      0 => 'e2beb34a1851e8aa2f230d41d90a4e86ae19e582',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '305255ac42c18299661-29981944',
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
  'unifunc' => 'content_5ac42c182b8a74_49334622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42c182b8a74_49334622')) {function content_5ac42c182b8a74_49334622($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
				<li>
                    <span class="lt"><font class="paihang_num<?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</font><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],35);?>
</a></span>
                    <span class="rt">已投标：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['tenders_num'];?>
</font></span>
                </li>
                <?php }} ?>