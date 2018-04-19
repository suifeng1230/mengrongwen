<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 10:30:59
         compiled from "admin:config/routeurl.html" */ ?>
<?php /*%%SmartyHeaderCode:94425ac438e3e758a4-61247098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77825e6c1d3a03573b84c535c3d67463dae1a687' => 
    array (
      0 => 'admin:config/routeurl.html',
      1 => 1429266518,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '94425ac438e3e758a4-61247098',
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
  'unifunc' => 'content_5ac438e4011f60_23808786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac438e4011f60_23808786')) {function content_5ac438e4011f60_23808786($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<div class="tip-notice">
URL格式说明<br />
默认URL格式： /article.html, /article-items.html, /article-detail-1-1.html<br />
目录URL格式： /article/,  /article/items,  /article/detail-1-1.html
</div>
<form action="?system/config-routeurl.html" mini-form="config-form" method="post" >
<input type="hidden" name="K" value="routeurl" />
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr>
    <th class="w-100">URL格式：</th>
    <td colspan="3">
        <select name="config[route_type]" class="w-200">
            <option value="0">默认URL格式</option>
            <option value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['route_type']){?>selected<?php }?>>目录URL格式</option>
        </select>
    </td>
</tr>
<tr>
    <th>公司：</th><td><input type="text" name="config[gs]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['gs'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
    <th>工长：</th><td><input type="text" name="config[gz]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['gz'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
</tr>
<tr>
    <th>设计师：</th><td><input type="text" name="config[designer]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['designer'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
    <th>技工：</th><td><input type="text" name="config[mechanic]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['mechanic'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
</tr>
<tr>
    <th>小区：</th><td><input type="text" name="config[home]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['home'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
    <th>工地：</th><td><input type="text" name="config[site]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['site'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
</tr>
<tr>
    <th>问答：</th><td><input type="text" name="config[ask]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['ask'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
    <th>日记：</th><td><input type="text" name="config[diray]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['diray'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
</tr>
<tr>
    <th>优惠：</th><td><input type="text" name="config[youhui]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['youhui'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
    <th>活动：</th><td><input type="text" name="config[activity]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['activity'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
</tr>
<tr>
    <th>学堂：</th><td><input type="text" name="config[article]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['article'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
    <th>新闻：</th><td><input type="text" name="config[news]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['news'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
</tr>
<tr>
    <th>商铺：</th><td><input type="text" name="config[mall/store]" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['mall']/(($tmp = @'store')===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
    <th>商品：</th><td><input type="text" name="config[product]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['product'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
</tr>
<tr>
    <th>招标：</th><td><input type="text" name="config[tenders]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['tenders'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
    <th>装修保：</th><td><input type="text" name="config[zxb]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['zxb'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
</tr>
<tr>
    <th>案例：</th><td><input type="text" name="config[case]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['case'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
    <th>设计师主页：</th><td><input type="text" name="config[blog]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['blog'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
</tr>
<tr>
    <th>公司主页：</th><td><input type="text" name="config[company]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['company'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
    <th>商铺主页：</th><td><input type="text" name="config[mall/shop]" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['mall']/(($tmp = @'shop')===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
</tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form></div>

<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>