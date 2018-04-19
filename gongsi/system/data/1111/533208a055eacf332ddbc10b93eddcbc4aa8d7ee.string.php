<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:35:01
         compiled from "533208a055eacf332ddbc10b93eddcbc4aa8d7ee" */ ?>
<?php /*%%SmartyHeaderCode:220555ac42bc5f40da0-09326296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '533208a055eacf332ddbc10b93eddcbc4aa8d7ee' => 
    array (
      0 => '533208a055eacf332ddbc10b93eddcbc4aa8d7ee',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '220555ac42bc5f40da0-09326296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'first' => 0,
    'index' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42bc6019f35_30323907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42bc6019f35_30323907')) {function content_5ac42bc6019f35_30323907($_smarty_tpl) {?>
				<li<?php if ($_smarty_tpl->tpl_vars['first']->value||$_smarty_tpl->tpl_vars['index']->value==5){?> class="first"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/></a></li>
                <?php }} ?>