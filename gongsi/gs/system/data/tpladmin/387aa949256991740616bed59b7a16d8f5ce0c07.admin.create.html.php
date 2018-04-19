<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 17:44:58
         compiled from "admin:links/create.html" */ ?>
<?php /*%%SmartyHeaderCode:184445ac49e9a44db79-44010173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '387aa949256991740616bed59b7a16d8f5ce0c07' => 
    array (
      0 => 'admin:links/create.html',
      1 => 1429266516,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '184445ac49e9a44db79-44010173',
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
  'unifunc' => 'content_5ac49e9a4d2897_68277013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac49e9a4d2897_68277013')) {function content_5ac49e9a4d2897_68277013($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"market/links:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
<form action="?market/links-create.html" mini-form="links-form" method="post" >
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr><th>标题：</th><td><input type="text" name="data[title]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
" class="input w-300"/></td></tr>
<tr><th>链接：</th><td><input type="text" name="data[link]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['link'];?>
" class="input w-300"/></td></tr>
<tr><th>LOGO：</th><td><input type="text" name="data[logo]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['logo'];?>
" class="input w-300"/></td></tr>
<tr><th>城市：</th><td><?php echo smarty_function_widget(array('id'=>"data/city",'type'=>"checkbox",'name'=>"data[city_ids]"),$_smarty_tpl);?>
</td></tr>
<tr><th>描述：</th><td><textarea name="data[desc]" class="textarea w-400"><?php echo $_smarty_tpl->tpl_vars['detail']->value['desc'];?>
</textarea></td></tr>
<tr><th>审核：</th>
	<td>
		<label><input type="radio" name="data[audit]" <?php if ($_smarty_tpl->tpl_vars['detail']->value['audit']){?>checked="checked"<?php }?> value="1"/>上架</label>&nbsp;&nbsp;
		<label><input type="radio" name="data[audit]" <?php if (!$_smarty_tpl->tpl_vars['detail']->value['audit']){?>checked="checked"<?php }?> value="0"/>下架</label>
	</td>
</tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form></div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>