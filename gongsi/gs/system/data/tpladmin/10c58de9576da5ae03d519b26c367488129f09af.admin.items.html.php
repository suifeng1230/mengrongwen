<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 10:30:26
         compiled from "admin:data/attr/items.html" */ ?>
<?php /*%%SmartyHeaderCode:37615ac438c2dd9b90-34006426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10c58de9576da5ae03d519b26c367488129f09af' => 
    array (
      0 => 'admin:data/attr/items.html',
      1 => 1429266516,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '37615ac438c2dd9b90-34006426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
    'from_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac438c2ea0f43_66118011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac438c2ea0f43_66118011')) {function content_5ac438c2ea0f43_66118011($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right">
			<?php echo smarty_function_link(array('ctl'=>"data/attr:so",'load'=>"mini:搜索属性",'width'=>"mini:350",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>
 &nbsp; &nbsp;
			<?php echo smarty_function_link(array('ctl'=>"data/attr:create",'load'=>"mini:添加属性",'class'=>"button",'width'=>"mini:400",'title'=>"添加"),$_smarty_tpl);?>
</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr><th class="w-100">ID</th><th class="w-150">关联模块</th><th>属性名称</th><th class="w-150">多选</th><th class="w-150">搜索</th><th class="w-50">排序</th><th class="w-150">操作</th></tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
		<td class="left"><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['attr_id'];?>
" name="attr_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['attr_id'];?>
<label></td>
		<td><?php echo $_smarty_tpl->tpl_vars['from_list']->value[$_smarty_tpl->tpl_vars['item']->value['from_id']]['title'];?>
</td>
		<td><input type="test" name="data[<?php echo $_smarty_tpl->tpl_vars['item']->value['attr_id'];?>
][title]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" class="input w-300" /></td>
		<td><label><input type="checkbox" name="data[<?php echo $_smarty_tpl->tpl_vars['item']->value['attr_id'];?>
][multi]" value="Y" <?php if ($_smarty_tpl->tpl_vars['item']->value['multi']=='Y'){?>checked="checked"<?php }?> />多选</label></td>
		<td><label><input type="checkbox" name="data[<?php echo $_smarty_tpl->tpl_vars['item']->value['attr_id'];?>
][filter]" value="Y" <?php if ($_smarty_tpl->tpl_vars['item']->value['filter']=='Y'){?>checked="checked"<?php }?> />搜索</label></td>
		<td><input type="test" name="data[<?php echo $_smarty_tpl->tpl_vars['item']->value['attr_id'];?>
][orderby]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['orderby'];?>
" class="input w-50" /></td>
		<td>
			<?php echo smarty_function_link(array('ctl'=>"data/attr:detail",'args'=>$_smarty_tpl->tpl_vars['item']->value['attr_id'],'title'=>"选项",'class'=>"button"),$_smarty_tpl);?>

			<?php echo smarty_function_link(array('ctl'=>"data/attr:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['attr_id'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>

		</td>
	</tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
     <tr><td colspan="20"><p class="text-align">没有数据</p></td></tr>
    <?php } ?>
    </table>
	</form>
	<div class="page-bar">
		<table>
			<tr>
			<td class="w-100"><label><input type="checkbox" CKA="PRI"/>&nbsp;&nbsp;全选</label></td>
			<td class="w-200"><?php echo smarty_function_link(array('ctl'=>"data/attr:update",'type'=>"button",'submit'=>"mini:#items-form",'title'=>"更新内容"),$_smarty_tpl);?>
</td>
			</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>