<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:28:10
         compiled from "admin:shop/brand/create.html" */ ?>
<?php /*%%SmartyHeaderCode:320855ad55bbab959e7-04321093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0db8d08f6ddafa8c0bbc620530d309c7e7e8079' => 
    array (
      0 => 'admin:shop/brand/create.html',
      1 => 1429266520,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '320855ad55bbab959e7-04321093',
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
  'unifunc' => 'content_5ad55bbac938a9_25315760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55bbac938a9_25315760')) {function content_5ad55bbac938a9_25315760($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"shop/brand:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data"><form action="?shop/brand-create.html" mini-form="brand-form" method="post" ENCTYPE="multipart/form-data">
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr><th><span class="red">*</span>品牌：</th><td><input type="text" name="data[title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>Logo：</th><td><input type="text" name="data[logo]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['logo'];?>
" <?php if ($_smarty_tpl->tpl_vars['detail']->value['logo']){?>photo="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['logo'];?>
"<?php }?> class="input w-300" />&nbsp;&nbsp;&nbsp;<input type="file" name="data[logo]" class="input w-100" /></td></tr>
<tr><th>连接：</th><td><input type="text" name="data[url]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['url'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>描述：</th><td><textarea name="data[desc]" class="textarea w-400"><?php echo $_smarty_tpl->tpl_vars['detail']->value['desc'];?>
</textarea><br /></td></tr>
<tr><th>排序：</th><td><input type="text" name="data[orderby]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['orderby'])===null||$tmp==='' ? 50 : $tmp);?>
" class="input w-50"/></td></tr>
<tr>
	<th>审核：</th>
	<td>
		<label><input type="radio" name="data[audit]" checked="checked" value="1"/>发布</label>&nbsp;&nbsp;
		<label><input type="radio" name="data[audit]" value="0"/>待审</label>
	</td>
</tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form></div>

<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>