<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 13:45:23
         compiled from "admin:config/score.html" */ ?>
<?php /*%%SmartyHeaderCode:273575ad589f33dcdd3-07305298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19673c8f78766558d4bd1d291ba3f3df49fb8ab6' => 
    array (
      0 => 'admin:config/score.html',
      1 => 1432188650,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '273575ad589f33dcdd3-07305298',
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
  'unifunc' => 'content_5ad589f3509a90_25142123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad589f3509a90_25142123')) {function content_5ad589f3509a90_25142123($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<h4 class="tip-notice">留空表示不启用该评分项</h4>
<form action="?system/config-score.html" mini-form="config-form" method="post" >
<input type="hidden" name="K" value="score" />
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr><th>评分设置：</th><td>装修公司</td></tr>
<tr><th>score1：</th><td><input type="text" name="config[company][score1]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['company']['score1'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>score2：</th><td><input type="text" name="config[company][score2]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['company']['score2'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>score3：</th><td><input type="text" name="config[company][score3]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['company']['score3'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>score4：</th><td><input type="text" name="config[company][score4]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['company']['score4'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>score5：</th><td><input type="text" name="config[company][score5]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['company']['score5'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>评分设置：</th><td>设计师</td></tr>
<tr><th>score1：</th><td><input type="text" name="config[designer][score1]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['designer']['score1'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>score2：</th><td><input type="text" name="config[designer][score2]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['designer']['score2'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>score3：</th><td><input type="text" name="config[designer][score3]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['designer']['score3'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>评分设置：</th><td>工长</td></tr>
<tr><th>score1：</th><td><input type="text" name="config[gz][score1]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['gz']['score1'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>score2：</th><td><input type="text" name="config[gz][score2]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['gz']['score2'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>score3：</th><td><input type="text" name="config[gz][score3]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['gz']['score3'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>