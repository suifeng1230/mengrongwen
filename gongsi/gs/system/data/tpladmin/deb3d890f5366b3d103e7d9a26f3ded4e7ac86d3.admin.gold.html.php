<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 10:32:04
         compiled from "admin:config/gold.html" */ ?>
<?php /*%%SmartyHeaderCode:190365ac43924e03278-48290327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deb3d890f5366b3d103e7d9a26f3ded4e7ac86d3' => 
    array (
      0 => 'admin:config/gold.html',
      1 => 1429266518,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '190365ac43924e03278-48290327',
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
  'unifunc' => 'content_5ac43924e97996_88324192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac43924e97996_88324192')) {function content_5ac43924e97996_88324192($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<div class="page-data"><form action="?system/config-gold.html" mini-form="config-form" method="post" >
<input type="hidden" name="K" value="gold" />
<table width="100%" border="0" cellspacing="0" class="table-data form"><tr>
	<th>是否开启：</th>
	<td>
		<label><input type="radio" name="config[open]" <?php if ($_smarty_tpl->tpl_vars['config']->value['open']){?>checked="checked"<?php }?> value="1"/>是</label>&nbsp;&nbsp;
		<label><input type="radio" name="config[open]" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['open'])&&empty($_smarty_tpl->tpl_vars['config']->value['open'])){?>checked="checked"<?php }?> value="0"/>否</label>
	</td>
</tr>
<tr>
	<th>开启在线充值：</th>
	<td>
		<label><input type="radio" name="config[onpay]" <?php if ($_smarty_tpl->tpl_vars['config']->value['onpay']){?>checked="checked"<?php }?> value="1"/>是</label>&nbsp;&nbsp;
		<label><input type="radio" name="config[onpay]" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['onpay'])&&empty($_smarty_tpl->tpl_vars['config']->value['onpay'])){?>checked="checked"<?php }?> value="0"/>否</label>
	</td>
</tr>
<tr><th>金币汇率：</th><td><input type="text" name="config[huilv]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['huilv'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/><span class="tip-comment">1RMB兑换多少金币</span></td></tr>
<tr><th>最小充值：</th><td><input type="text" name="config[minpay]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['minpay'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/><span class="tip-comment">RMB</span></td></tr>
    <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form></div>

<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>