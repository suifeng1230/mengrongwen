<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:36:30
         compiled from "a7c9b8eaaf22cccc237761675c2db8bd789d2ed2" */ ?>
<?php /*%%SmartyHeaderCode:89185ac42c1e788881-58578156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7c9b8eaaf22cccc237761675c2db8bd789d2ed2' => 
    array (
      0 => 'a7c9b8eaaf22cccc237761675c2db8bd789d2ed2',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '89185ac42c1e788881-58578156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42c1e7a7c85_60182024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42c1e7a7c85_60182024')) {function content_5ac42c1e7a7c85_60182024($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                    <li><span class="ico_list news_ico"></span><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_title'];?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><b>[<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['cat_title'],12,'');?>
]</b> <?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],20);?>
</a></li>
                    <?php }} ?>