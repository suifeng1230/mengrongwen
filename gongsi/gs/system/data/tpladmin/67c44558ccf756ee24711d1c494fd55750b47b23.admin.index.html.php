<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 10:32:21
         compiled from "admin:fenzhan/admin/index.html" */ ?>
<?php /*%%SmartyHeaderCode:123605ac4393568cc71-63997503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67c44558ccf756ee24711d1c494fd55750b47b23' => 
    array (
      0 => 'admin:fenzhan/admin/index.html',
      1 => 1429266518,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '123605ac4393568cc71-63997503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'v' => 0,
    'city_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac43935754027_74992385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac43935754027_74992385')) {function content_5ac43935754027_74992385($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"fenzhan/admin:create",'width'=>"mini:500",'load'=>"mini:创建管理员",'class'=>"button"),$_smarty_tpl);?>
</td>
		<td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
	<form action="?module/menu-update.html" mini-form="menu-order" method="post"/>
	<input type="hidden" name="batch" value="orderby" />
	<table align="center" width="100%" cellpadding="0" cellspacing="0" class="table-data list">
		<tr>
			<th class="w-100">ID</th>
			<th>用户名</th>
			<th class="w-100">类型</th>
            <th class="w-100">城市</th>
            <th class="w-100">联系人</th>
            <th class="w-100">电话</th>
            <th class="w-100">邮箱</th>
            <th class="w-100">状态</th>
			<th class="w-150">最后登录IP</th>
			<th class="w-150">最后登录时间</th>
			<th class="w-150">操作</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<tr id="line-admin-<?php echo $_smarty_tpl->tpl_vars['v']->value['fz_uid'];?>
">
			<td><label><?php echo $_smarty_tpl->tpl_vars['v']->value['fz_uid'];?>
</label></td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['fz_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['role'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['city_list']->value[$_smarty_tpl->tpl_vars['v']->value['city_id']]['city_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['contact'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mail'];?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['v']->value['closed']==3){?>已删除<?php }elseif($_smarty_tpl->tpl_vars['v']->value['closed']){?>禁用<?php }else{ ?>正常<?php }?></td>		
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['lastip'];?>
</td>
			<td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['v']->value['lastlogin']);?>
</td>
			<td class="left">
				
				<?php echo smarty_function_link(array('ctl'=>"fenzhan/admin:edit",'args'=>($_smarty_tpl->tpl_vars['v']->value['fz_uid']),'width'=>"mini:500",'load'=>"mini:编辑管理员",'class'=>"button",'title'=>"编辑"),$_smarty_tpl);?>

				
				<?php echo smarty_function_link(array('ctl'=>"fenzhan/admin:delete",'args'=>($_smarty_tpl->tpl_vars['v']->value['fz_uid']),'class'=>"button",'title'=>"删除"),$_smarty_tpl);?>

			</td>
		</tr>
		<?php } ?>
	</table>
	<div class="page-bar">
		<table>
			<tr>
				<td></td>			
				<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
			</tr>
		</table>
	</div>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>