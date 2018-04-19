<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:16:55
         compiled from "982f8d94e22f7a354d13a5af1fd06506af16ab67" */ ?>
<?php /*%%SmartyHeaderCode:143725acb0557ec9817-07248961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '982f8d94e22f7a354d13a5af1fd06506af16ab67' => 
    array (
      0 => '982f8d94e22f7a354d13a5af1fd06506af16ab67',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '143725acb0557ec9817-07248961',
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
  'unifunc' => 'content_5acb0557ef2dc0_30007030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb0557ef2dc0_30007030')) {function content_5acb0557ef2dc0_30007030($_smarty_tpl) {?>
							<li>
								<a class="mall_clickstream" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="_blank">
									<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" width="155" height="120" alt="undefined" style="display: inline;">
									<p><?php echo $_smarty_tpl->tpl_vars['item']->value['ext']['shop']['name'];?>
【<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
】</p>
									<p class="f_c_e81a62"><b class="fontcl2">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</b><span>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['market_price'];?>
</span></p>
									<em class="icn_triangle_red_down">热门</em>
								</a>
							</li>
						<?php }} ?>