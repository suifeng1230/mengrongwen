<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 10:30:52
         compiled from "admin:data/city/items.html" */ ?>
<?php /*%%SmartyHeaderCode:76395ac438dc071d60-87181919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b187064c556c6dc1870ee19f0ee8482bfb16761' => 
    array (
      0 => 'admin:data/city/items.html',
      1 => 1429266516,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '76395ac438dc071d60-87181919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
    'themes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac438dc12d583_32675815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac438dc12d583_32675815')) {function content_5ac438dc12d583_32675815($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right">
				<?php echo smarty_function_link(array('ctl'=>"data/city:so",'load'=>"mini:搜索城市",'width'=>"mini:400",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>
 &nbsp; &nbsp;
				<?php echo smarty_function_link(array('ctl'=>"data/city:create",'class'=>"button",'title'=>"添加"),$_smarty_tpl);?>

			</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr><th class="w-100">ID</th><th class="w-150">省份</th><th class="w-150">城市</th><th class="w-100">拼音</th><th>模板</th><th class="w-100">排序</th><th class="w-100">状态</th><th class="w-150">操作</th></tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
		<td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['city_id'];?>
" name="city_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['city_id'];?>
<label></td>
		<td><?php echo $_smarty_tpl->tpl_vars['item']->value['province_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['city_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['pinyin'];?>
</td><td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['themes']->value[$_smarty_tpl->tpl_vars['item']->value['theme_id']])===null||$tmp==='' ? '默认模板' : $tmp);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['orderby'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['item']->value['audit']){?>开启<?php }else{ ?>关闭<?php }?></td>
		<td>
			<?php echo smarty_function_link(array('ctl'=>"data/city:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['city_id'],'title'=>"修改",'class'=>"button"),$_smarty_tpl);?>

			<?php echo smarty_function_link(array('ctl'=>"data/city:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['city_id'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>

		</td>
	</tr>
    <?php } ?>
    </table>
	</form>
	<div class="page-bar">
		<table>
			<tr>
			<td class="w-100"><label><input type="checkbox" CKA="PRI"/>&nbsp;&nbsp;全选</label></td>
			<td colspan="10" class="left"><?php echo smarty_function_link(array('ctl'=>"data/city:delete",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量删除选中的内容吗?",'priv'=>"hide",'value'=>"批量删除"),$_smarty_tpl);?>
</td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>