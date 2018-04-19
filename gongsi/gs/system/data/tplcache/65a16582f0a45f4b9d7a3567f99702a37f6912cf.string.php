<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:36:30
         compiled from "65a16582f0a45f4b9d7a3567f99702a37f6912cf" */ ?>
<?php /*%%SmartyHeaderCode:320955ac42c1e5e68a8-64543029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65a16582f0a45f4b9d7a3567f99702a37f6912cf' => 
    array (
      0 => '65a16582f0a45f4b9d7a3567f99702a37f6912cf',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '320955ac42c1e5e68a8-64543029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42c1e605ca6_62432629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42c1e605ca6_62432629')) {function content_5ac42c1e605ca6_62432629($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                <li>
                    <h2><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],20);?>
</h2>
                    <p><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['desc'],150);?>
<font class="fontcl2">[阅读全文]</font></a></p>
                </li>
                <?php }} ?>