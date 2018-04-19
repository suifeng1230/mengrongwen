<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 10:30:58
         compiled from "admin:config/domain.html" */ ?>
<?php /*%%SmartyHeaderCode:106695ac438e235d502-76674748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e37195a2632e3538bad36b5acbb0f39aad2cbae7' => 
    array (
      0 => 'admin:config/domain.html',
      1 => 1429266520,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '106695ac438e235d502-76674748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'CONFIG' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac438e23e2221_21444693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac438e23e2221_21444693')) {function content_5ac438e23e2221_21444693($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<div class="page-data"><form action="?system/config-domain.html" mini-form="config-form" method="post" >
<input type="hidden" name="K" value="domain" />
<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['domain']){?>
<p class="tip-notice">您的根域名是：<b class="red"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['domain'];?>
</b>, 设置时不可与城市分站域名冲突,全部不要以"http"开头，结尾不要'/'</p>
<?php }else{ ?>
<p class="tip-error"><b>您没有设置网站根域名，请在设置-&gt;网站设置-&gt;基本设置 设置站网站根域名，否则会导致网站无法打开</b></p>
<?php }?>
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr>
    <th>案例：</th>
    <td>
        <input type="text" name="config[case]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['case'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/>
        <span class="tip-comment">留空表示不启用， 填写的域名必须是网站设置的根域名的子域名</span>
    </td>
</tr>
<tr>
    <th>学堂：</th>
    <td>
        <input type="text" name="config[article]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['article'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/>
        <span class="tip-comment">留空表示不启用， 填写的域名必须是网站设置的根域名的子域名</span>
    </td>
</tr>
<tr>
    <th>小区：</th>
    <td>
        <input type="text" name="config[home]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['home'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/>
        <span class="tip-comment">留空表示不启用， 填写的域名必须是网站设置的根域名的子域名</span>
    </td>
</tr>
<tr>
    <th>问答：</th>
    <td>
        <input type="text" name="config[ask]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['ask'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/>
        <span class="tip-comment">留空表示不启用， 填写的域名必须是网站设置的根域名的子域名</span>
    </td>
</tr>
<tr>
    <th>商城：</th>
    <td>
        <input type="text" name="config[mall]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['mall'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/>
        <span class="tip-comment">留空表示不启用， 填写的域名必须是网站设置的根域名的子域名</span>
    </td>
</tr>
<tr>
    <th>商品：</th>
    <td>
        <input type="text" name="config[product]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['product'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/>
        <span class="tip-comment">留空表示不启用， 填写的域名必须是网站设置的根域名的子域名</span>
    </td>
</tr>
<tr>
    <th>公司主页：</th>
    <td>
        <input type="text" name="config[company]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['company'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/>
        <span class="tip-comment">留空表示不启用,如公司的个性域名是"test.ijh.cc", 则要填写"ijh.cc"，支持三域名域名</span>
    </td>
</tr>
<tr>
    <th>商家主页：</th>
    <td>
        <input type="text" name="config[shop]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['shop'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/>
         <span class="tip-comment">留空表示不启用,如商铺的个性域名是"test.ijh.cc", 则要填写"ijh.cc"，支持三域名域名</span>
    </td>
</tr>
<tr>
    <th>保留域名：</th>
    <td>
        <input type="text" name="config[holddomain]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['holddomain'])===null||$tmp==='' ? 'www|*admin*|shop|company|mall|*blog*|*space*|*bbs*' : $tmp);?>
" class="input w-500"/>
        <span class="tip-comment">多个之间用 | 隔开，可以使用通配符*</span>
    </td>
</tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form></div>

<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>