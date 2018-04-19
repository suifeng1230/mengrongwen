<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 13:45:27
         compiled from "admin:config/mobile.html" */ ?>
<?php /*%%SmartyHeaderCode:274815ad589f731a6f7-26493406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de12399ad6be5081763cd0a51e88869017ab03fe' => 
    array (
      0 => 'admin:config/mobile.html',
      1 => 1491466613,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '274815ad589f731a6f7-26493406',
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
  'unifunc' => 'content_5ad589f741c432_73329061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad589f741c432_73329061')) {function content_5ad589f741c432_73329061($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<h4 class="tip-notice" style="margin-bottom:10px;">说明：全局中开启了3G站功能设置才有效</h4>
<form action="?system/config-mobile.html" mini-form="config-form" method="post" >
<input type="hidden" name="K" value="mobile" />
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr>
    <th>3G版名称：</th>
    <td>
        <input type="text" name="config[title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/>
        <span class="tip-comment">如：博虎装修网系统手机版</span>
    </td>
</tr>
<tr>
    <th>3G版域名：</th>
    <td>
        <input type="text" name="config[url]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['url'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/>
        <span class="tip-comment">3G版的域名，以http://开头, 如http://www.xiaobihu.org/mobile</span>
    </td>
</tr>
<tr>
	<th>自动跳转：</th>
	<td>
		<label><input type="radio" name="config[forward]" <?php if ($_smarty_tpl->tpl_vars['config']->value['forward']){?>checked="checked"<?php }?> value="1"/>是</label>&nbsp;&nbsp;
		<label><input type="radio" name="config[forward]" <?php if (empty($_smarty_tpl->tpl_vars['config']->value['forward'])){?>checked="checked"<?php }?> value="0"/>否</label>
        <span class="tip-comment">开启后用户使用手机浏览器访问网站首页时自动跳转到手机站点首页进行访问</span>
	</td>
</tr>
<tr>
    <th>安卓下载地址：</th>
    <td>
        <input type="text" name="config[down_android]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['down_android'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/>
    </td>
</tr>
<tr>
    <th>苹果下载地址：</th>
    <td>
        <input type="text" name="config[down_iphone]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['down_iphone'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/>
    </td>
</tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>