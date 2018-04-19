<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:35:01
         compiled from "d3068833d02dc087bd8e9a43656c4f44cd329cf6" */ ?>
<?php /*%%SmartyHeaderCode:327095ac42bc5c99201-44331787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3068833d02dc087bd8e9a43656c4f44cd329cf6' => 
    array (
      0 => 'd3068833d02dc087bd8e9a43656c4f44cd329cf6',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '327095ac42bc5c99201-44331787',
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
  'unifunc' => 'content_5ac42bc5caca90_82827042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42bc5caca90_82827042')) {function content_5ac42bc5caca90_82827042($_smarty_tpl) {?>
					<li><span class="paihang_num <?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                    <?php }} ?>