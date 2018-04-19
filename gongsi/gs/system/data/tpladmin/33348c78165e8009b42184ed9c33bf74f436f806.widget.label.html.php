<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 17:44:50
         compiled from "widget:default/label.html" */ ?>
<?php /*%%SmartyHeaderCode:59515ac49e92edb359-82582744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33348c78165e8009b42184ed9c33bf74f436f806' => 
    array (
      0 => 'widget:default/label.html',
      1 => 1429266502,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '59515ac49e92edb359-82582744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac49e92efe5d3_09971213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac49e92efe5d3_09971213')) {function content_5ac49e92efe5d3_09971213($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (in_array($_smarty_tpl->tpl_vars['k']->value,(array)$_smarty_tpl->tpl_vars['data']->value['value'])){?><label class="<?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['data']->value['style'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label><?php echo $_smarty_tpl->tpl_vars['data']->value['separator'];?>
<?php }?><?php } ?><?php }} ?>