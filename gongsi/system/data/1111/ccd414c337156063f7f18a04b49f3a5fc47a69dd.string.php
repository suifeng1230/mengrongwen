<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:36:30
         compiled from "ccd414c337156063f7f18a04b49f3a5fc47a69dd" */ ?>
<?php /*%%SmartyHeaderCode:146795ac42c1e7caf14-43091035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccd414c337156063f7f18a04b49f3a5fc47a69dd' => 
    array (
      0 => 'ccd414c337156063f7f18a04b49f3a5fc47a69dd',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '146795ac42c1e7caf14-43091035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42c1e7ea313_85369628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42c1e7ea313_85369628')) {function content_5ac42c1e7ea313_85369628($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                    <li><span class="ico_list news_ico"></span><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"  title="<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_title'];?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><b>[<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['cat_title'],12,'');?>
]</b><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],20);?>
</a></li>
                    <?php }} ?>