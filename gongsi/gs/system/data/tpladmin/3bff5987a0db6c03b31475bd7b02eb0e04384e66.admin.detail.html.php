<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 10:33:41
         compiled from "admin:module/ctl/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:17965ac439855c7cc4-03056899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bff5987a0db6c03b31475bd7b02eb0e04384e66' => 
    array (
      0 => 'admin:module/ctl/detail.html',
      1 => 1429266518,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '17965ac439855c7cc4-03056899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'modules' => 0,
    'mod' => 0,
    'menu_tree' => 0,
    'v' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac439856b22f3_94200090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac439856b22f3_94200090')) {function content_5ac439856b22f3_94200090($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right">&nbsp;<?php echo smarty_function_link(array('ctl'=>"module/ctl:index",'class'=>"button"),$_smarty_tpl);?>
<td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
	<form action="?module/ctl-save.html" mini-form="ctl-batch" method="post">
	<input type="hidden" name="batch" value="module" />
	<table width="100%" border="0" cellspacing="0" class="table-data list">
		<tr>
			<th class="w-100">模型标题:</th>
			<th class="w-100">控制器</th>
			<th class="w-100">Action</th>
			<th class="w-100">排序</th>
			<th class="w-100">父级菜单:</th>
			<th class="w-100"><a href="###" batch="add_new_line">新增一行</a></th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['mod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mod']->key => $_smarty_tpl->tpl_vars['mod']->value){
$_smarty_tpl->tpl_vars['mod']->_loop = true;
?>
		<tr id="mod-ctl-<?php echo $_smarty_tpl->tpl_vars['mod']->value['mod_id'];?>
">
			<td><input type="text" name="module[<?php echo $_smarty_tpl->tpl_vars['mod']->value['mod_id'];?>
][title]" class="input w-100" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value['title'];?>
"></td>
			<td><input type="text" name="module[<?php echo $_smarty_tpl->tpl_vars['mod']->value['mod_id'];?>
][ctl]" class="input w-100" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value['ctl'];?>
"></td>
			<td><input type="text" name="module[<?php echo $_smarty_tpl->tpl_vars['mod']->value['mod_id'];?>
][act]" class="input w-100" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value['act'];?>
"></td>
			<td><input type="text" name="module[<?php echo $_smarty_tpl->tpl_vars['mod']->value['mod_id'];?>
][orderby]" class="input w-30" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value['orderby'];?>
"></td>
			<td>
				<select name="module[<?php echo $_smarty_tpl->tpl_vars['mod']->value['mod_id'];?>
][parent_id]">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"><?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['mod_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['vv']->value['mod_id']==$_smarty_tpl->tpl_vars['mod']->value['parent_id']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
</option><?php } ?></optgroup><?php } ?>
				</select>
				<label style="padding-left:10px;"><input type="checkbox" name="module[<?php echo $_smarty_tpl->tpl_vars['mod']->value['mod_id'];?>
][visible]" value="1" <?php if ($_smarty_tpl->tpl_vars['mod']->value['visible']){?>checked="checked"<?php }?> />显示</label>
			</td>
			<td><a href="?module/ctl-remove-<?php echo $_smarty_tpl->tpl_vars['mod']->value['mod_id'];?>
.html" mini-act="remove:mod-ctl-<?php echo $_smarty_tpl->tpl_vars['mod']->value['mod_id'];?>
">删除</a></td>
		</tr>
		<?php } ?>
		<tr batch="tool_bar">
			<td colspan="5" class="table-button-td right">
				<input type="submit" class="bt-big"  id="button2" value="提 交 数 据" />
			</td>
			<td class="table-button-td"></td>
		</tr>
	</table>
	</form>
</div>
<script type="text/paint" id="module_tmpl">
	<tr>
		<td><input type="text" size="50" name="data[{index}][title]" class="input w-100" value=""></td>
		<td><input type="text" name="data[{index}][ctl]" class="input w-100" value=""></td>
		<td><input type="text" name="data[{index}][act]" class="input w-100" value=""></td>
		<td><input type="text" name="data[{index}][orderby]" class="input w-30" value="50"></td>
		<td>
			<select name="data[{index}][parent_id]">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"><?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['mod_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['pager']->value['PID']==$_smarty_tpl->tpl_vars['vv']->value['mod_id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
</option><?php } ?></optgroup><?php } ?>
			</select>
			<label style="padding-left:10px;"><input type="checkbox" name="data[{index}][visible]" value="1"/>显示</label>
		</td>
		<td><a href="###" batch="remove_item_line">取消</a></td>
	</tr>
</script>
<script type="text/javascript">
(function(K, $){
$(document).ready(function(){
	var tmpl = $("#module_tmpl").html();
	$("a[batch='add_new_line']").click(function(){
		var k = K.Guid();
		$("[batch='tool_bar']").before(tmpl.replace(new RegExp("{index}","gm"),k));
	}).click();
	$("a[batch='remove_item_line']").die().live('click',function(){
		$(this).parent().parent('tr').remove();
	});
});
})(window.KT, window.jQuery)
</script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>