<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 13:44:29
         compiled from "admin:system/seotmpl/items.html" */ ?>
<?php /*%%SmartyHeaderCode:187925ad589bde77844-99156327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6337927204da89e9687d410d68fbfbcac8180bf9' => 
    array (
      0 => 'admin:system/seotmpl/items.html',
      1 => 1429266512,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '187925ad589bde77844-99156327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad589be09ca98_04679221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad589be09ca98_04679221')) {function content_5ad589be09ca98_04679221($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"><?php echo smarty_function_link(array('ctl'=>"system/seotmpl:create",'load'=>"mini:添加SEO模板",'class'=>"button",'title'=>"添加模板"),$_smarty_tpl);?>
</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr>
        <th class="w-100">ID</th><th>标题</th><th>KEY</th><th class="w-100">创建时间</th><th class="w-150">操作</th></tr>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <tr>
            <td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['systmpl_id'];?>
" name="systmpl_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['systmpl_id'];?>
<label></td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['key'];?>
</td><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
            <td>
                <?php echo smarty_function_link(array('ctl'=>"system/seotmpl:config",'args'=>$_smarty_tpl->tpl_vars['item']->value['systmpl_id'],'title'=>"配置",'class'=>"button"),$_smarty_tpl);?>

                <?php echo smarty_function_link(array('ctl'=>"system/seotmpl:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['systmpl_id'],'load'=>"mini:修改模板设置",'title'=>"修改模板",'class'=>"button"),$_smarty_tpl);?>

            </td>
        </tr>
        <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
         <tr><td colspan="20"><p class="text-align tip-notice">没有数据</p></td></tr>
        <?php } ?>
    </table>
	</form>
	<div class="page-bar">
		<table>
			<tr>
                <td class="w-100"><label><input type="checkbox" CKA="PRI"/>&nbsp;&nbsp;全选</label></td>
                <td colspan="10" class="left"></td><td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
            </tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>