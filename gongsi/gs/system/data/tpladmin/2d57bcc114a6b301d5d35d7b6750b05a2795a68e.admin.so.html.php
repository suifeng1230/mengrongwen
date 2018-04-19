<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 18:22:08
         compiled from "admin:gz/gz/so.html" */ ?>
<?php /*%%SmartyHeaderCode:246455ac4a750132f00-23390038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d57bcc114a6b301d5d35d7b6750b05a2795a68e' => 
    array (
      0 => 'admin:gz/gz/so.html',
      1 => 1429266512,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '246455ac4a750132f00-23390038',
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
  'unifunc' => 'content_5ac4a750234c47_81336882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac4a750234c47_81336882')) {function content_5ac4a750234c47_81336882($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"gz/gz:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data"><form action="?gz/gz-index.html" id="SO-form" method="post">
<table width="100%" border="0" cellspacing="0" class="table-data form"><tr><th>ID：</th><td><input type="text" name="SO[uid]" value="" class="input w-300"/></td></tr>
    <tr><th>城市：</th><td><input type="text" name="SO[city_id]" value="" class="input w-300"/></td></tr>
    <tr><th>名称：</th><td><input type="text" name="SO[name]" value="" class="input w-300"/></td></tr>
    <tr><th>手机：</th><td><input type="text" name="SO[mobile]" value="" class="input w-300"/></td></tr>
    <tr><th>刷新时间：</th><td><input type="text" name="SO[lasttime][0]" value="" class="input w-100" date="lasttime" readonly/>~<input type="text" name="SO[lasttime][1]" value="" class="input w-100" date="lasttime" readonly/></td></tr>
    <tr><th>审核：</th><td><input type="text" name="SO[audit]" value="" class="input w-300"/></td></tr>
    <tr><th>创建时间：</th><td><input type="text" name="SO[dateline][0]" value="" class="input w-100" date="dateline" readonly/>~<input type="text" name="SO[dateline][1]" value="" class="input w-100" date="dateline" readonly/></td></tr>    <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="搜 索" /></td></tr>
</table>
</form></div>

<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>