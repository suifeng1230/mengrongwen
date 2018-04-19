<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:16:55
         compiled from "76efedd66d5a9a8865234751f6ba8d1e66a5b406" */ ?>
<?php /*%%SmartyHeaderCode:91425acb0557dff156-67673843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76efedd66d5a9a8865234751f6ba8d1e66a5b406' => 
    array (
      0 => '76efedd66d5a9a8865234751f6ba8d1e66a5b406',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '91425acb0557dff156-67673843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5acb0557e12f69_97281005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb0557e12f69_97281005')) {function content_5acb0557e12f69_97281005($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?>
									<a href="<?php echo smarty_function_link(array('ctl'=>"mall/product",'arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'arg1'=>1),$_smarty_tpl);?>
"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span></a>
								<?php }} ?>