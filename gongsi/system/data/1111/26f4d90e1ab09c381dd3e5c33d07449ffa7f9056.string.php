<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:16:55
         compiled from "26f4d90e1ab09c381dd3e5c33d07449ffa7f9056" */ ?>
<?php /*%%SmartyHeaderCode:39815acb0557f34219-54311606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26f4d90e1ab09c381dd3e5c33d07449ffa7f9056' => 
    array (
      0 => '26f4d90e1ab09c381dd3e5c33d07449ffa7f9056',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '39815acb0557f34219-54311606',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5acb0558020fa1_23527455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb0558020fa1_23527455')) {function content_5acb0558020fa1_23527455($_smarty_tpl) {?>
				<li <?php if ($_smarty_tpl->tpl_vars['index']->value%3==0){?>style="margin-left:4px;"<?php }?>>
					<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/></a>
					<p class="text"><span class="lt"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</strong></a></h4></span></p>
					<p class="rt">口碑值：<font class="fontcl1"><?php echo $_smarty_tpl->tpl_vars['item']->value['score'];?>
</font></p>
				</li>
				<?php }} ?>