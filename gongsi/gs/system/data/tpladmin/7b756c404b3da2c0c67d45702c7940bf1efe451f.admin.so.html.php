<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 16:15:05
         compiled from "admin:data/area/so.html" */ ?>
<?php /*%%SmartyHeaderCode:267145ac48989157994-91596179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b756c404b3da2c0c67d45702c7940bf1efe451f' => 
    array (
      0 => 'admin:data/area/so.html',
      1 => 1429266516,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '267145ac48989157994-91596179',
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
  'unifunc' => 'content_5ac489891ad8a0_09609282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac489891ad8a0_09609282')) {function content_5ac489891ad8a0_09609282($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"data/area:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
<form action="?data/area-index.html" id="SO-form" method="post">
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr><th>ID：</th><td><input type="text" name="SO[area_id]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['area_id'];?>
" class="input w-100"/></td></tr>
<tr><th>城市：</th><td><select name="SO[city_id]" class="w-100"><option value="">全部</option><?php echo smarty_function_widget(array('id'=>"data/city"),$_smarty_tpl);?>
</select></td></tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="搜 索" /></td></tr>
</table>
</form></div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>