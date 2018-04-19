<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:25:07
         compiled from "admin:shop/attr/items.html" */ ?>
<?php /*%%SmartyHeaderCode:202085ad55b03dc26c9-13044998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3889d669e51af704d85d085115939e93dbc407ca' => 
    array (
      0 => 'admin:shop/attr/items.html',
      1 => 1429266520,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '202085ad55b03dc26c9-13044998',
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
  'unifunc' => 'content_5ad55b0416a4f7_60423919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55b0416a4f7_60423919')) {function content_5ad55b0416a4f7_60423919($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right">
                <?php echo smarty_function_link(array('ctl'=>"shop/attr:create",'load'=>"mini:添加属性",'width'=>"mini:450",'class'=>"button",'title'=>"添加"),$_smarty_tpl);?>

                <?php echo smarty_function_link(array('ctl'=>"shop/attr:so",'load'=>"mini:搜索属性",'width'=>"mini:500",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>

            </td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr><th class="w-100">ID</th><th>分类</th><th>属性</th><th>多选</th><th>检索</th><th>排序</th><th class="w-150">操作</th></tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
		<td class="left"><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['attr_id'];?>
" name="attr_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['attr_id'];?>
<label></td>
		<td><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_title'];?>
(ID:<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
)</td>
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
			<?php echo smarty_function_link(array('ctl'=>"shop/attr:detail",'args'=>$_smarty_tpl->tpl_vars['item']->value['attr_id'],'title'=>"选项",'class'=>"button"),$_smarty_tpl);?>

			<?php echo smarty_function_link(array('ctl'=>"shop/attr:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['attr_id'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>

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
            <td colspan="10" class="left"><?php echo smarty_function_link(array('ctl'=>"shop/attr:update",'type'=>"button",'submit'=>"mini:#items-form",'title'=>"更新数据"),$_smarty_tpl);?>
</td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>