<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 18:00:24
         compiled from "admin:gz/gz/items.html" */ ?>
<?php /*%%SmartyHeaderCode:123265ac498ba6b00b5-31372486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c865ed22514a5394914bdfc60b952f1d107c5eb3' => 
    array (
      0 => 'admin:gz/gz/items.html',
      1 => 1522835678,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '123265ac498ba6b00b5-31372486',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac498ba7d5075_79583612',
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac498ba7d5075_79583612')) {function content_5ac498ba7d5075_79583612($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"><?php echo smarty_function_link(array('ctl'=>"gz/gz:create",'class'=>"button",'title'=>"添加"),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;<?php echo smarty_function_link(array('ctl'=>"gz/gz:so",'load'=>"mini:搜索内容",'width'=>"mini:500",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>
</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr><th class="w-100">ID</th><th>城市</th><th>名称</th><th>QQ</th><th>手机</th><th class="w-50">案例数</th><th class="w-50">工地数</th><th class="w-100">刷新时间</th><th class="w-50">审核</th><th class="w-150">操作</th></tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

    <tr><td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
" name="uid[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
<label></td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['city_name'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
（ID:<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
，金币数：<?php echo $_smarty_tpl->tpl_vars['item']->value['gold'];?>
)</a><?php echo smarty_function_link(array('ctl'=>"member/member:gold",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'title'=>"充值金币",'load'=>"mini:充值金币",'width'=>"mini:500",'class'=>"button"),$_smarty_tpl);?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['qq'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['mobile'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['case_num'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['site_num'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['lasttime'];?>
</td>
<td><?php if ($_smarty_tpl->tpl_vars['item']->value['audit']){?>正常<?php }else{ ?><b class="red">待审</b><?php }?></td>
<td><?php echo smarty_function_link(array('ctl'=>"member/member:manager",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'title'=>"管理",'class'=>"button",'target'=>"member_manager"),$_smarty_tpl);?>
<?php echo smarty_function_link(array('ctl'=>"gz/gz:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'title'=>"修改",'class'=>"button"),$_smarty_tpl);?>

<?php echo smarty_function_link(array('ctl'=>"block/item:push",'arg0'=>'gz','arg1'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'title'=>"推送",'load'=>"mini:推送工长",'class'=>"button"),$_smarty_tpl);?>
<?php echo smarty_function_link(array('ctl'=>"gz/gz:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>
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
			<td colspan="10" class="left"><?php echo smarty_function_link(array('ctl'=>"gz/gz:delete",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量删除选中的内容吗?",'priv'=>"hide",'value'=>"批量删除"),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;
            <?php echo smarty_function_link(array('ctl'=>"block/item:batch",'args'=>'gz','type'=>"button",'load'=>"mini:批量推荐工长",'batch'=>"mini:PRI",'priv'=>"hide",'value'=>"批量推荐"),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;
            <?php echo smarty_function_link(array('ctl'=>"gz/gz:doaudit",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量审核选中的内容吗?",'priv'=>"hide",'value'=>"批量审核"),$_smarty_tpl);?>
</td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>