<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 17:44:58
         compiled from "widget:default/checkbox.html" */ ?>
<?php /*%%SmartyHeaderCode:13655ac49e9a5016a1-06517117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fd75d4869a02c30150686b5ae98fc2c7554a478' => 
    array (
      0 => 'widget:default/checkbox.html',
      1 => 1429266502,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '13655ac49e9a5016a1-06517117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'widget' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac49e9a54f8b6_84730547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac49e9a54f8b6_84730547')) {function content_5ac49e9a54f8b6_84730547($_smarty_tpl) {?><ul class="group-list">
    <li<?php if ($_smarty_tpl->tpl_vars['data']->value['style']){?> style="<?php echo $_smarty_tpl->tpl_vars['data']->value['style'];?>
"<?php }?>><b class="red"><label><input type="checkbox" CKA="<?php echo $_smarty_tpl->tpl_vars['widget']->value['GUID'];?>
"/>全选</label></b></li>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><li<?php if ($_smarty_tpl->tpl_vars['data']->value['style']){?> style="<?php echo $_smarty_tpl->tpl_vars['data']->value['style'];?>
"<?php }?>><label><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]"  <?php if (in_array($_smarty_tpl->tpl_vars['k']->value,(array)$_smarty_tpl->tpl_vars['data']->value['value'])||$_smarty_tpl->tpl_vars['data']->value['all']){?> checked="checked"<?php }?>value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" CK="<?php echo $_smarty_tpl->tpl_vars['widget']->value['GUID'];?>
"/><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label></li><?php } ?>
</ul><?php }} ?>