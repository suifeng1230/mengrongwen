<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:36:30
         compiled from "52441558c6325c02fa7109592ca52568af4d928d" */ ?>
<?php /*%%SmartyHeaderCode:289735ac42c1e838533-03958695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52441558c6325c02fa7109592ca52568af4d928d' => 
    array (
      0 => '52441558c6325c02fa7109592ca52568af4d928d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '289735ac42c1e838533-03958695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42c1e84fc33_65516142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42c1e84fc33_65516142')) {function content_5ac42c1e84fc33_65516142($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                    <li>
                        <span class="ico_list news_ico"></span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><b>[<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['cat_title'],12);?>
]</b><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],20);?>
</a>
                    </li>
                    <?php }} ?>