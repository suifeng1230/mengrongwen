<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 14:33:48
         compiled from "e85c52bbd95319a0aa4ef864d02aa2aa677ca526" */ ?>
<?php /*%%SmartyHeaderCode:107405ac9b7ccab6134-72105813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e85c52bbd95319a0aa4ef864d02aa2aa677ca526' => 
    array (
      0 => 'e85c52bbd95319a0aa4ef864d02aa2aa677ca526',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '107405ac9b7ccab6134-72105813',
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
  'unifunc' => 'content_5ac9b7ccacea15_21336191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac9b7ccacea15_21336191')) {function content_5ac9b7ccacea15_21336191($_smarty_tpl) {?>
            <?php echo print_r('KT');?>

            <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/></a></li>
            
            <?php }} ?>