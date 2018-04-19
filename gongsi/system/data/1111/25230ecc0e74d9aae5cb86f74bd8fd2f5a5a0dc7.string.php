<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:35:02
         compiled from "25230ecc0e74d9aae5cb86f74bd8fd2f5a5a0dc7" */ ?>
<?php /*%%SmartyHeaderCode:136825ac42bc6133379-98834423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25230ecc0e74d9aae5cb86f74bd8fd2f5a5a0dc7' => 
    array (
      0 => '25230ecc0e74d9aae5cb86f74bd8fd2f5a5a0dc7',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '136825ac42bc6133379-98834423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42bc6146bf9_90554118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42bc6146bf9_90554118')) {function content_5ac42bc6146bf9_90554118($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><font class="fontcl2">[<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_title'];?>
]</font> | <?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],46);?>
</a></li>
                    <?php }} ?>