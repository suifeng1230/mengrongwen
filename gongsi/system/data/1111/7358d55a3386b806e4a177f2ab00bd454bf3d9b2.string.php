<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:35:02
         compiled from "7358d55a3386b806e4a177f2ab00bd454bf3d9b2" */ ?>
<?php /*%%SmartyHeaderCode:117155ac42bc615e305-42913428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7358d55a3386b806e4a177f2ab00bd454bf3d9b2' => 
    array (
      0 => '7358d55a3386b806e4a177f2ab00bd454bf3d9b2',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '117155ac42bc615e305-42913428',
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
  'unifunc' => 'content_5ac42bc6189284_43001200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42bc6189284_43001200')) {function content_5ac42bc6189284_43001200($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" class="lt"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"/></a>
						<div class="index_news_list_text rt">
							<h3><a class="tit" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],27);?>
</a></h3>
							<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['desc'],100);?>
<font class="fontcl2">[详情]</font></a>
						</div>
						<div class="cl"></div>
					</li>
                    <?php }} ?>