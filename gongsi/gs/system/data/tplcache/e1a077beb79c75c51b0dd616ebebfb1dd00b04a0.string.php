<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 15:36:06
         compiled from "e1a077beb79c75c51b0dd616ebebfb1dd00b04a0" */ ?>
<?php /*%%SmartyHeaderCode:138495ac9c666120c24-85587729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1a077beb79c75c51b0dd616ebebfb1dd00b04a0' => 
    array (
      0 => 'e1a077beb79c75c51b0dd616ebebfb1dd00b04a0',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '138495ac9c666120c24-85587729',
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
  'unifunc' => 'content_5ac9c66613fff3_81300278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac9c66613fff3_81300278')) {function content_5ac9c66613fff3_81300278($_smarty_tpl) {?>    
                    <li><span class="paihang_num <?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                    <?php }} ?>