<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 14:34:35
         compiled from "79b512af9062acb9dc6bc2acf474ce8266594ffb" */ ?>
<?php /*%%SmartyHeaderCode:3555ac9b7fb70fdd6-15298170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79b512af9062acb9dc6bc2acf474ce8266594ffb' => 
    array (
      0 => '79b512af9062acb9dc6bc2acf474ce8266594ffb',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '3555ac9b7fb70fdd6-15298170',
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
  'unifunc' => 'content_5ac9b7fb7331e4_22588321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac9b7fb7331e4_22588321')) {function content_5ac9b7fb7331e4_22588321($_smarty_tpl) {?>
            <?php echo print_r('calldata');?>

                    
                    <li><span class="paihang_num <?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                    <?php }} ?>