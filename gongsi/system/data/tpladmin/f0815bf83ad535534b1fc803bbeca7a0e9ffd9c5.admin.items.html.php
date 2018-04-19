<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:32:16
         compiled from "admin:product/photo/items.html" */ ?>
<?php /*%%SmartyHeaderCode:222345ad55cb05d13f2-92219241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0815bf83ad535534b1fc803bbeca7a0e9ffd9c5' => 
    array (
      0 => 'admin:product/photo/items.html',
      1 => 1429266518,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '222345ad55cb05d13f2-92219241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
    'product_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55cb084a194_53257505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55cb084a194_53257505')) {function content_5ad55cb084a194_53257505($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"><?php echo smarty_function_link(array('ctl'=>"product/photo:so",'load'=>"mini:搜索图片",'width'=>"mini:500",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>
</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr><th class="w-100">ID</th><th class="w-50">图片</th><th>商品</th><th>标题</th><th class="w-50">大小</th><th class="w-50">排序</th><th class="w-100">上传时间</th><th class="w-100">操作</th></tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['photo_id'];?>
" name="photo_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['photo_id'];?>
<label></td>
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_small.jpg" class="wh-50" photo="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" /></td>

        <td><a href="?product/photo-product-<?php echo $_smarty_tpl->tpl_vars['item']->value['product_id'];?>
.html"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['product_list']->value[$_smarty_tpl->tpl_vars['item']->value['product_id']]['title'])===null||$tmp==='' ? '--' : $tmp);?>
(ID:<?php echo $_smarty_tpl->tpl_vars['item']->value['product_id'];?>
)</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
<td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['size'],"size");?>
</td>

        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['orderby'];?>
</td>
<td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
        
<td><?php echo smarty_function_link(array('ctl'=>"product/photo:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['photo_id'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>
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
			<td colspan="10" class="left"><?php echo smarty_function_link(array('ctl'=>"product/photo:delete",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量删除选中的内容吗?",'priv'=>"hide",'value'=>"批量删除"),$_smarty_tpl);?>
</td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>