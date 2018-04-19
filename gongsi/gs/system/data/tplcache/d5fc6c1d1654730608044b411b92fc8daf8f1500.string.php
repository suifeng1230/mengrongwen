<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:35:01
         compiled from "d5fc6c1d1654730608044b411b92fc8daf8f1500" */ ?>
<?php /*%%SmartyHeaderCode:74505ac42bc5cc8015-66249299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5fc6c1d1654730608044b411b92fc8daf8f1500' => 
    array (
      0 => 'd5fc6c1d1654730608044b411b92fc8daf8f1500',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '74505ac42bc5cc8015-66249299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iteration' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42bc5cef122_18621507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42bc5cef122_18621507')) {function content_5ac42bc5cef122_18621507($_smarty_tpl) {?>
                <?php if ($_smarty_tpl->tpl_vars['iteration']->value%5==1){?>
				<li class="first">
                <?php }else{ ?>
                <li>
                <?php }?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"/></a>
					<p><b><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" class="tit"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></b></p>
					<p>设计方案：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['case_num'];?>
套</font></p>
				</li>                
                <?php }} ?>