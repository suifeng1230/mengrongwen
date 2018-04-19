<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 14:12:59
         compiled from "admin:payment/logs/so.html" */ ?>
<?php /*%%SmartyHeaderCode:82485ac46ceb3c9919-45058685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c2afd22a76feb7939ca20039e1058ff5a066360' => 
    array (
      0 => 'admin:payment/logs/so.html',
      1 => 1429266520,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '82485ac46ceb3c9919-45058685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac46ceb41b9a5_84870919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac46ceb41b9a5_84870919')) {function content_5ac46ceb41b9a5_84870919($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"payment/log:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data"><form action="?payment/log-index.html" id="SO-form" method="post">
<table width="100%" border="0" cellspacing="0" class="table-data form">
    <tr><th>支付接口：</th><td><input type="text" name="SO[payment]" value="" class="input w-200"/></td></tr>
    <tr><th>流水号：</th><td><input type="text" name="SO[trade_no]" value="" class="input w-200"/></td></tr>
    <tr><th>类型：</th>
        <td><select name="SO[from]" class="w-100"><option value="">全部</option><option value="order">订单</option><option value="gold">充值</option></select></td>
    </tr>
    <tr><th>支付状态：</th><td><select name="SO[payed]" class="w-100"><option value="">全部</option><option value="1">已支付</option><option value="0">未支付</option></select></td></tr>
    <tr><th>支付时间：</th><td><input type="text" name="SO[payedtime][0]" value="" class="input w-100" date="payedtime" readonly/>~<input type="text" name="SO[payedtime][1]" value="" class="input w-100" date="payedtime" readonly/></td></tr>
    <tr><th>创建时间：</th><td><input type="text" name="SO[dateline][0]" value="" class="input w-100" date="dateline" readonly/>~<input type="text" name="SO[dateline][1]" value="" class="input w-100" date="dateline" readonly/></td></tr>    <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="搜 索" /></td></tr>
</table>
</form></div>

<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>