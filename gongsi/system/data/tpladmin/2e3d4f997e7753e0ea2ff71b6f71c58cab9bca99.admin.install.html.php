<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 15:20:57
         compiled from "admin:payment/install.html" */ ?>
<?php /*%%SmartyHeaderCode:275305ad5a05978e191-07890146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e3d4f997e7753e0ea2ff71b6f71c58cab9bca99' => 
    array (
      0 => 'admin:payment/install.html',
      1 => 1429266520,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '275305ad5a05978e191-07890146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5a059972803_11179030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5a059972803_11179030')) {function content_5ad5a059972803_11179030($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"payment/payment:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
<h4 class="tip-notice">安装的支付接口必须在目录 system/plugins/payment 存在</h4>
<form action="?payment/payment-install.html" mini-form="payment-form" method="post">
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr>
    <th><span class="red">*</span>payment：</th>
    <td>
        <input type="text" name="data[payment]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['payment'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-200"/>
        <span class="tip-comment">不可重复且目录存在</span>
    </td>
</tr>
<tr><th><span class="red">*</span>标题：</th><td><input type="text" name="data[title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-200"/></td></tr>
<tr><th>logo：</th><td><input type="file" name="data[logo]" class="input w-200" /></td></tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form></div>

<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>