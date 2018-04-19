<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:38:28
         compiled from "76efedd66d5a9a8865234751f6ba8d1e66a5b406" */ ?>
<?php /*%%SmartyHeaderCode:155695ad5501433e7f7-30764521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '155695ad5501433e7f7-30764521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55014369776_52098829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55014369776_52098829')) {function content_5ad55014369776_52098829($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?>
									<a href="<?php echo smarty_function_link(array('ctl'=>"mall/product",'arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'arg1'=>1),$_smarty_tpl);?>
"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span></a>
								<?php }} ?>