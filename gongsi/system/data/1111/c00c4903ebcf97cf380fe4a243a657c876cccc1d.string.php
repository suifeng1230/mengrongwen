<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:16:55
         compiled from "c00c4903ebcf97cf380fe4a243a657c876cccc1d" */ ?>
<?php /*%%SmartyHeaderCode:311955acb0557cea4d2-69466896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c00c4903ebcf97cf380fe4a243a657c876cccc1d' => 
    array (
      0 => 'c00c4903ebcf97cf380fe4a243a657c876cccc1d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '311955acb0557cea4d2-69466896',
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
  'unifunc' => 'content_5acb0557d157b5_65020255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb0557d157b5_65020255')) {function content_5acb0557d157b5_65020255($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
				<li<?php if ($_smarty_tpl->tpl_vars['first']->value){?> class="first"<?php }?> >
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