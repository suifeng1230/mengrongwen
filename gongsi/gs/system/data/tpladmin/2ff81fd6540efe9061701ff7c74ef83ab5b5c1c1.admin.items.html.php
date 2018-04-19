<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 11:01:10
         compiled from "admin:zxb/items.html" */ ?>
<?php /*%%SmartyHeaderCode:191745ac43ff62d09f5-14407251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ff81fd6540efe9061701ff7c74ef83ab5b5c1c1' => 
    array (
      0 => 'admin:zxb/items.html',
      1 => 1433483358,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '191745ac43ff62d09f5-14407251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
    'cityList' => 0,
    'member_list' => 0,
    'company_list' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac43ff63e5fb6_89899457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac43ff63e5fb6_89899457')) {function content_5ac43ff63e5fb6_89899457($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"><?php echo smarty_function_link(array('ctl'=>"zxb/zxb:create",'class'=>"button",'title'=>"添加"),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr><th class="w-50">ID</th><th class="w-50">城市ID</th><th class="w-50">用户</th><th class="w-50">隶属公司</th><th>联系人</th><th>联系电话</th><th class="w-50">状态</th><th>备注</th><th>创建IP</th><th>查看招标</th><th class="w-100">创建时间</th><th class="w-150">操作</th></tr>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<tr><td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['zxb_id'];?>
" name="zxb_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['zxb_id'];?>
<label></td>
<td><?php echo $_smarty_tpl->tpl_vars['cityList']->value[$_smarty_tpl->tpl_vars['item']->value['city_id']]['city_name'];?>
</td>
<td><a href='?ctl=member/member&SO[uid]=<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
'><?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'];?>
</a></td>
<td><a href='?ctl=company/company&SO[company_id]=<?php echo $_smarty_tpl->tpl_vars['item']->value['company_id'];?>
'><?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['title'];?>
</a></td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['contact'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['mobile'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</td>
<td><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['comment'],30);?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['clientip'];?>
</td>
<td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
<td><?php if ($_smarty_tpl->tpl_vars['item']->value['tenders_id']){?><a href='?ctl=tenders/tenders&SO[tenders_id]=<?php echo $_smarty_tpl->tpl_vars['item']->value['tenders_id'];?>
'>查看招标</a><?php }?></td>
<td><?php echo smarty_function_link(array('ctl'=>"zxb/step:index",'args'=>$_smarty_tpl->tpl_vars['item']->value['zxb_id'],'title'=>"管理流程",'class'=>"button"),$_smarty_tpl);?>
<?php echo smarty_function_link(array('ctl'=>"zxb/zxb:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['zxb_id'],'title'=>"修改",'class'=>"button"),$_smarty_tpl);?>

<?php echo smarty_function_link(array('ctl'=>"zxb/zxb:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['zxb_id'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>
</td></tr>
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
			<td colspan="10" class="left"><?php echo smarty_function_link(array('ctl'=>"zxb/zxb:delete",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量删除选中的内容吗?",'priv'=>"hide",'value'=>"批量删除"),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;<?php echo smarty_function_link(array('ctl'=>"zxb/zxb:doaudit",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量审核选中的内容吗?",'priv'=>"hide",'value'=>"批量审核"),$_smarty_tpl);?>
</td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>