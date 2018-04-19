<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 17:15:34
         compiled from "3fbd6d723e9f2fe1ee85697c44c1e70a6c762bc1" */ ?>
<?php /*%%SmartyHeaderCode:235705ac497b69b6079-22595042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fbd6d723e9f2fe1ee85697c44c1e70a6c762bc1' => 
    array (
      0 => '3fbd6d723e9f2fe1ee85697c44c1e70a6c762bc1',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '235705ac497b69b6079-22595042',
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
  'unifunc' => 'content_5ac497b69d92f9_26557268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac497b69d92f9_26557268')) {function content_5ac497b69d92f9_26557268($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?>
		<li>
			<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" class="lt pic" />
			<h2><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h2>
			<p class="nowrap">口号：<?php echo $_smarty_tpl->tpl_vars['item']->value['slogan'];?>
</p>
			<p class="nowrap"><span>案例(<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['case_num'];?>
</font>)</span><span>工地(<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['site_num'];?>
</font>)</span></p>
			<div class="cl"></div>
			</a>
		</li>
		<?php }} ?>