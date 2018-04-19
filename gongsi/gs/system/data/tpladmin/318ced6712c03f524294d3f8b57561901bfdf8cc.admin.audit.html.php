<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:34:52
         compiled from "admin:company/company/audit.html" */ ?>
<?php /*%%SmartyHeaderCode:114955ac42bbc57ab33-50740099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '318ced6712c03f524294d3f8b57561901bfdf8cc' => 
    array (
      0 => 'admin:company/company/audit.html',
      1 => 1429266516,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '114955ac42bbc57ab33-50740099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
    'member_list' => 0,
    'cityList' => 0,
    'areaList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42bbc645d69_88121152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42bbc645d69_88121152')) {function content_5ac42bbc645d69_88121152($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"></td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr><th class="w-100">ID</th><th>管理者UID</th><th>城市</th><th>地区</th><th>公司名称</th><th>公司简称</th><th>联系人</th><th>电话</th><th>保障金</th><th>评分</th><th>排序</th><th class="w-150">操作</th></tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr><td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_id'];?>
" name="company_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['company_id'];?>
<label></td>
        <td><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['uid'])){?><?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'];?>
（ID:<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
） <?php }else{ ?>等待认领<?php }?></td>                    
        <td><?php echo $_smarty_tpl->tpl_vars['cityList']->value[$_smarty_tpl->tpl_vars['item']->value['city_id']]['city_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['areaList']->value[$_smarty_tpl->tpl_vars['item']->value['area_id']]['area_name'];?>
</td>  
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['contact'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['xiaobao'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['score'];?>
</td>                    
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['orderby'];?>
</td>
        <td><?php echo smarty_function_link(array('ctl'=>"company/company:auditup",'args'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'title'=>"通过审核",'class'=>"button"),$_smarty_tpl);?>
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
			<td colspan="10" class="left"><?php echo smarty_function_link(array('ctl'=>"company/company:auditup",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量通过审核的装修公司吗?",'priv'=>"hide",'value'=>"批量审核"),$_smarty_tpl);?>
</td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>