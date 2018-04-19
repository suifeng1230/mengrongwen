<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:36:30
         compiled from "c14dda499a368d9923fdced7d3d62df03f81e75f" */ ?>
<?php /*%%SmartyHeaderCode:42195ac42c1e6e4760-48196004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c14dda499a368d9923fdced7d3d62df03f81e75f' => 
    array (
      0 => 'c14dda499a368d9923fdced7d3d62df03f81e75f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '42195ac42c1e6e4760-48196004',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42c1e703b61_74908420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42c1e703b61_74908420')) {function content_5ac42c1e703b61_74908420($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" /></a>
                <p class="bg"></p><p class="text"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],20);?>
</p>
                <?php }} ?>