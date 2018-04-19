<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:27:07
         compiled from "admin:shop/mendian/items.html" */ ?>
<?php /*%%SmartyHeaderCode:52915ad55b7b04c617-09841769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4432514f8713b5514d7dc26e5d699e6822d6a701' => 
    array (
      0 => 'admin:shop/mendian/items.html',
      1 => 1429266520,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '52915ad55b7b04c617-09841769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
    'city_list' => 0,
    'shop_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55b7b29e295_03388551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55b7b29e295_03388551')) {function content_5ad55b7b29e295_03388551($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_iplocal')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.iplocal.php';
if (!is_callable('smarty_modifier_format')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"><?php echo smarty_function_link(array('ctl'=>"shop/mendian:create",'class'=>"button",'title'=>"添加"),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;<?php echo smarty_function_link(array('ctl'=>"shop/mendian:so",'load'=>"mini:搜索活动咨讯",'width'=>"mini:500",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>
</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr><th class="w-100">ID</th><th>标题</th><th>城市</th><th>商铺</th><th class="w-100">类型</th><th class="w-50">审核</th><th class="w-150">ClientIp</th><th class="w-100">添加时间</th><th class="w-150">操作</th></tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['mendian_id'];?>
" name="mendian_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['mendian_id'];?>
<label></td>        
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
        <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['city_list']->value[$_smarty_tpl->tpl_vars['item']->value['city_id']]['city_name'])===null||$tmp==='' ? '--' : $tmp);?>
</td>
        <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['shop_list']->value[$_smarty_tpl->tpl_vars['item']->value['shop_id']]['title'])===null||$tmp==='' ? '--' : $tmp);?>
(ID:<?php echo $_smarty_tpl->tpl_vars['item']->value['shop_id'];?>
)</td>        
        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['from']=='active'){?>活动<?php }else{ ?>资讯<?php }?></td>        
        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['audit']){?>正常<?php }else{ ?><b class="red">待审</b><?php }?></td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['clientip'];?>
(<?php echo smarty_modifier_iplocal($_smarty_tpl->tpl_vars['item']->value['clientip']);?>
)</td><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
        <td>
            <?php echo smarty_function_link(array('ctl'=>"shop/mendian:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['mendian_id'],'title'=>"修改",'class'=>"button"),$_smarty_tpl);?>

            <?php echo smarty_function_link(array('ctl'=>"shop/mendian:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['mendian_id'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>

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
    			<td colspan="10" class="left"><?php echo smarty_function_link(array('ctl'=>"shop/mendian:delete",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量删除选中的内容吗?",'priv'=>"hide",'value'=>"批量删除"),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;<?php echo smarty_function_link(array('ctl'=>"shop/mendian:doaudit",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量审核选中的内容吗?",'priv'=>"hide",'value'=>"批量审核"),$_smarty_tpl);?>
</td>
    			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
    		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>