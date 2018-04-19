<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:36:30
         compiled from "250f57f3f7f65be12bd2e8f91206a5fdd316ce5a" */ ?>
<?php /*%%SmartyHeaderCode:72365ac42c1e801a28-74426938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '250f57f3f7f65be12bd2e8f91206a5fdd316ce5a' => 
    array (
      0 => '250f57f3f7f65be12bd2e8f91206a5fdd316ce5a',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '72365ac42c1e801a28-74426938',
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
  'unifunc' => 'content_5ac42c1e81cfa2_90351979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42c1e81cfa2_90351979')) {function content_5ac42c1e81cfa2_90351979($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"/></a>
                <p class="bg"></p><p class="text"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],20);?>
</p>
                <?php }} ?>