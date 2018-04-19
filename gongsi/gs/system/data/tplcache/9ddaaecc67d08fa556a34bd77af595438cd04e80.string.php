<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:35:01
         compiled from "9ddaaecc67d08fa556a34bd77af595438cd04e80" */ ?>
<?php /*%%SmartyHeaderCode:289025ac42bc5ec7c12-43967761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ddaaecc67d08fa556a34bd77af595438cd04e80' => 
    array (
      0 => '9ddaaecc67d08fa556a34bd77af595438cd04e80',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '289025ac42bc5ec7c12-43967761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'first' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42bc5eeed11_09557647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42bc5eeed11_09557647')) {function content_5ac42bc5eeed11_09557647($_smarty_tpl) {?>
            <?php if ($_smarty_tpl->tpl_vars['first']->value){?>
            <li class="first">
            <?php }else{ ?>
            <li>
            <?php }?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/></a>
                <p><b>头衔：<?php echo $_smarty_tpl->tpl_vars['item']->value['group_name'];?>
</b></p>
				<p><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></p>
			</li>
            <?php }} ?>