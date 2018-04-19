<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 17:44:50
         compiled from "admin:links/items.html" */ ?>
<?php /*%%SmartyHeaderCode:100785ac49e92df4b99-29543380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '818fc40b5422688097130d58c228fb84baf8882c' => 
    array (
      0 => 'admin:links/items.html',
      1 => 1429266516,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '100785ac49e92df4b99-29543380',
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
  'unifunc' => 'content_5ac49e92ec3c59_91573588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac49e92ec3c59_91573588')) {function content_5ac49e92ec3c59_91573588($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"><?php echo smarty_function_link(array('ctl'=>"market/links:create",'load'=>"mini:添加友情链接",'width'=>"mini:600",'class'=>"button",'title'=>"添加"),$_smarty_tpl);?>
</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr>
		<th class="w-100">ID</th><th class="w-200">标题</th><th class="w-200">链接</th><th>城市</th>
		<th class="w-50">审核</th><th class="w-100">添加时间</th><th class="w-150">操作</th>
	</tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
		<td class="left"><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['link_id'];?>
" name="link_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['link_id'];?>
<label></td>
		<td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
</td>
		<td class="left"><?php echo smarty_function_widget(array('id'=>"data/city",'type'=>"label",'value'=>$_smarty_tpl->tpl_vars['item']->value['city_id'],'separator'=>",&nbsp;&nbsp;"),$_smarty_tpl);?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['item']->value['audit']){?>上架<?php }else{ ?>下架<?php }?></td><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
		<td>
			<?php echo smarty_function_link(array('ctl'=>"market/links:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['link_id'],'title'=>"修改",'load'=>"mini:添加友情链接",'width'=>"mini:600",'class'=>"button"),$_smarty_tpl);?>

			<?php echo smarty_function_link(array('ctl'=>"market/links:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['link_id'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>

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
			<td colspan="10" class="left">
				<?php echo smarty_function_link(array('ctl'=>"market/links:delete",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量删除选中的内容吗?",'priv'=>"hide",'value'=>"批量删除"),$_smarty_tpl);?>

			</td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>