<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 10:30:46
         compiled from "admin:payment/logs/items.html" */ ?>
<?php /*%%SmartyHeaderCode:19055ac438d6e303a1-69474754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1241ebb77cd54764d0c94dc07185e2e6940c852' => 
    array (
      0 => 'admin:payment/logs/items.html',
      1 => 1429266520,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '19055ac438d6e303a1-69474754',
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
  'unifunc' => 'content_5ac438d6edc1c9_80567659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac438d6edc1c9_80567659')) {function content_5ac438d6edc1c9_80567659($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_iplocal')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.iplocal.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"><?php echo smarty_function_link(array('ctl'=>"payment/log:so",'load'=>"mini:搜索内容",'width'=>"mini:400",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>
</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr>
        <th class="w-100">ID</th><th>类型</th><th>接口</th><th>流水号</th><th class="w-50">支付状态</th>
        <th class="w-100">支付IP</th><th class="w-100">支付时间</th><th class="w-100">创建IP</th><th class="w-100">创建时间</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr><td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['log_id'];?>
" name="log_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['log_id'];?>
<label></td>

    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['from'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['payment'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['trade_no'];?>
</td>

    <td><?php if ($_smarty_tpl->tpl_vars['item']->value['payed']){?><b class="blue">已支付</b><?php }else{ ?><b class="red">未支付</b><?php }?></td>

    <td><?php if ($_smarty_tpl->tpl_vars['item']->value['payed']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['payedip'];?>
(<?php echo smarty_modifier_iplocal($_smarty_tpl->tpl_vars['item']->value['payedip']);?>
)<?php }else{ ?>--<?php }?></td>
<td><?php if ($_smarty_tpl->tpl_vars['item']->value['payed']){?><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['payedtime']);?>
<?php }else{ ?>--<?php }?></td>

    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['clientip'];?>
(<?php echo smarty_modifier_iplocal($_smarty_tpl->tpl_vars['item']->value['clientip']);?>
)</td>
<td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
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
			<td colspan="10" class="left"></td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>