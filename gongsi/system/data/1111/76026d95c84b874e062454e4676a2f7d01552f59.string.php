<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:35:01
         compiled from "76026d95c84b874e062454e4676a2f7d01552f59" */ ?>
<?php /*%%SmartyHeaderCode:107925ac42bc5d8b547-09784488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76026d95c84b874e062454e4676a2f7d01552f59' => 
    array (
      0 => '76026d95c84b874e062454e4676a2f7d01552f59',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '107925ac42bc5d8b547-09784488',
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
  'unifunc' => 'content_5ac42bc5db2657_81878612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42bc5db2657_81878612')) {function content_5ac42bc5db2657_81878612($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
				<li<?php if ($_smarty_tpl->tpl_vars['first']->value){?> class="first"<?php }?>>
					<div class="opacity_img"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"/></a><p class="bg"></p>
						<p class="text"><span class="lt"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],20);?>
</span><span class="rt"><span class="index_ico like_ico"></span><?php echo $_smarty_tpl->tpl_vars['item']->value['likes'];?>
</span></p>
					</div>
				</li>
                <?php }} ?>