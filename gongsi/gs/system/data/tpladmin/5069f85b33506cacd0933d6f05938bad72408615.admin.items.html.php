<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 10:30:22
         compiled from "admin:data/censor/items.html" */ ?>
<?php /*%%SmartyHeaderCode:46675ac438be214f01-35992012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5069f85b33506cacd0933d6f05938bad72408615' => 
    array (
      0 => 'admin:data/censor/items.html',
      1 => 1429266516,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '46675ac438be214f01-35992012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
    'type_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac438be3803d2_82292128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac438be3803d2_82292128')) {function content_5ac438be3803d2_82292128($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right">
				<?php echo smarty_function_link(array('ctl'=>"data/censor:so",'load'=>"mini:添加过滤词",'width'=>"mini:400",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>
 &nbsp; &nbsp;
				<?php echo smarty_function_link(array('ctl'=>"data/censor:create",'load'=>"mini:添加过滤词",'width'=>"mini:400",'class'=>"button",'title'=>"添加"),$_smarty_tpl);?>

			</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr>
		<th class="w-100">ID</th><th class="w-100">类型</th><th>关键词</th><th>替换词</th>
		<th class="w-150">添加人</th><th class="w-150">添加时间</th><th class="w-150">操作</th>
	</tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
		<td class="left"><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
" name="ID[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
<label></td>
		<td><?php echo $_smarty_tpl->tpl_vars['type_list']->value[$_smarty_tpl->tpl_vars['item']->value['type']];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['find'];?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='filter'){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['replace'])===null||$tmp==='' ? '--' : $tmp);?>
<?php }else{ ?>--<?php }?></td>
		<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['admin'])===null||$tmp==='' ? '--' : $tmp);?>
</td><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
		<td>
			<?php echo smarty_function_link(array('ctl'=>"data/censor:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['ID'],'load'=>"mini:修改关键词",'width'=>"mini:400",'title'=>"修改",'class'=>"button"),$_smarty_tpl);?>

			<?php echo smarty_function_link(array('ctl'=>"data/censor:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['ID'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>

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
			<td colspan="10" class="left"><?php echo smarty_function_link(array('ctl'=>"data/censor:delete",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量删除选中的内容吗?",'priv'=>"hide",'value'=>"批量删除"),$_smarty_tpl);?>
</td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>