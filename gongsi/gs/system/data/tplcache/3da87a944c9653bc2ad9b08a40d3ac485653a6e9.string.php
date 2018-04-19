<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:36:30
         compiled from "3da87a944c9653bc2ad9b08a40d3ac485653a6e9" */ ?>
<?php /*%%SmartyHeaderCode:9405ac42c1e6250b8-04821355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3da87a944c9653bc2ad9b08a40d3ac485653a6e9' => 
    array (
      0 => '3da87a944c9653bc2ad9b08a40d3ac485653a6e9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '9405ac42c1e6250b8-04821355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42c1e6444b2_28076042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42c1e6444b2_28076042')) {function content_5ac42c1e6444b2_28076042($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                    <li><span class="ico_list news_ico"></span><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"  title="<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_title'];?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank"><b>[<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['cat_title'],12);?>
]</b> <?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],30);?>
</a></li>
                    <?php }} ?>