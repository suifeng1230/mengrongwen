<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:38:28
         compiled from "5cf4d2623818930145c4374420ae975558e6993b" */ ?>
<?php /*%%SmartyHeaderCode:37995ad550140fc564-71954920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cf4d2623818930145c4374420ae975558e6993b' => 
    array (
      0 => '5cf4d2623818930145c4374420ae975558e6993b',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '37995ad550140fc564-71954920',
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
  'unifunc' => 'content_5ad5501414a773_52320942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5501414a773_52320942')) {function content_5ad5501414a773_52320942($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
				<li<?php if ($_smarty_tpl->tpl_vars['first']->value){?> class="first"<?php }?>>
				<div class="opacity_img"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
"/></a>
					<p class="bg"></p>
					<p class="text"><span class="lt"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],20);?>
</span><span class="rt"><span class="index_ico like_ico"></span><?php echo $_smarty_tpl->tpl_vars['item']->value['likes'];?>
</span></p>
				</div>
				</li>
				<?php }} ?>