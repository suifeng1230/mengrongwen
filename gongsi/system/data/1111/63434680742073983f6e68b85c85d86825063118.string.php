<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 11:51:59
         compiled from "63434680742073983f6e68b85c85d86825063118" */ ?>
<?php /*%%SmartyHeaderCode:54595ac991df64da36-35744111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63434680742073983f6e68b85c85d86825063118' => 
    array (
      0 => '63434680742073983f6e68b85c85d86825063118',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '54595ac991df64da36-35744111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'shop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac991df6bd0a4_44882250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac991df6bd0a4_44882250')) {function content_5ac991df6bd0a4_44882250($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
?>
                <li>
                    <a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop:newsdetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['news_id'],'shop'=>$_smarty_tpl->tpl_vars['shop']->value),$_smarty_tpl);?>
" class="lt"><span class="ico_list news_ico"></span><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],35);?>
</a><span class="graycl rt"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span>
                </li>
                <?php }} ?>