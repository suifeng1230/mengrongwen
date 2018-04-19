<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:35:01
         compiled from "9bddfd7abd4c9346e7a1e7b9e3ea27be2db96ace" */ ?>
<?php /*%%SmartyHeaderCode:261725ac42bc5c66586-37955231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bddfd7abd4c9346e7a1e7b9e3ea27be2db96ace' => 
    array (
      0 => '9bddfd7abd4c9346e7a1e7b9e3ea27be2db96ace',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '261725ac42bc5c66586-37955231',
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
  'unifunc' => 'content_5ac42bc5c7dc85_44347219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42bc5c7dc85_44347219')) {function content_5ac42bc5c7dc85_44347219($_smarty_tpl) {?>
                    <li><span class="paihang_num <?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                    <?php }} ?>