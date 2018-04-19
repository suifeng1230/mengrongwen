<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 10:31:47
         compiled from "admin:config/integral.html" */ ?>
<?php /*%%SmartyHeaderCode:288795ac4391315ccb3-64913101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed6d5d7d5f4d8bf4b078e6e8fdbdb2006eff0f81' => 
    array (
      0 => 'admin:config/integral.html',
      1 => 1429266518,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '288795ac4391315ccb3-64913101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac439131e96d2_21891536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac439131e96d2_21891536')) {function content_5ac439131e96d2_21891536($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<h4 class="tip-notice">所有积分输入负数代表该操作需要扣除积分</h4>
<form action="?system/config-integral.html" mini-form="config-form" method="post" >
<input type="hidden" name="K" value="integral" />
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr><th>发布效果图：</th><td><input type="text" name="config[case]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['case'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>发布在建工地：</th><td><input type="text" name="config[site]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['site'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>发布问答：</th><td><input type="text" name="config[ask]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['ask'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>回复问答：</th><td><input type="text" name="config[answer]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['answer'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>发布优惠信息：</th><td><input type="text" name="config[youhui]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['youhui'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>发布商家优惠券：</th><td><input type="text" name="config[coupon]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['coupon'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>身份认证：</th><td><input type="text" name="config[certification]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['certification'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>发布产品：</th><td><input type="text" name="config[product]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['product'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>邮件认证：</th><td><input type="text" name="config[email]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>手机认证：</th><td><input type="text" name="config[mobile]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['mobile'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>刷新金币：</th><td><input type="text" name="config[gold]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['gold'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>发布装修日记：</th><td><input type="text" name="config[diary]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['diary'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>发布装修公司新闻：</th><td><input type="text" name="config[news]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['news'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
    <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form></div>

<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>