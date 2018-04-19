<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 14:21:27
         compiled from "280c1c8caf6d28581ef08e99e675624e1f94b88e" */ ?>
<?php /*%%SmartyHeaderCode:77465ac46ee7dd0571-08468320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '280c1c8caf6d28581ef08e99e675624e1f94b88e' => 
    array (
      0 => '280c1c8caf6d28581ef08e99e675624e1f94b88e',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '77465ac46ee7dd0571-08468320',
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
  'unifunc' => 'content_5ac46ee7debaf6_16571552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac46ee7debaf6_16571552')) {function content_5ac46ee7debaf6_16571552($_smarty_tpl) {?>
                <li>
                    <span class="lt"><font class="paihang_num<?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</font><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></span>
                   <span class="rt">已投标：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['tenders_num'];?>
</font></span>
                </li>
                <?php }} ?>