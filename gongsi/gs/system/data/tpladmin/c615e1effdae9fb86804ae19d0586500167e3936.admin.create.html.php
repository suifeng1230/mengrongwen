<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 11:04:21
         compiled from "admin:module/menu/create.html" */ ?>
<?php /*%%SmartyHeaderCode:25345ac440b5008e16-06985222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c615e1effdae9fb86804ae19d0586500167e3936' => 
    array (
      0 => 'admin:module/menu/create.html',
      1 => 1429266518,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '25345ac440b5008e16-06985222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'menu' => 0,
    'tree' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac440b50996b3_37813196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac440b50996b3_37813196')) {function content_5ac440b50996b3_37813196($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td style="width:30px;" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th align="left"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td></td>
      </tr>
    </table>
</div>

<div class="page-data">
	<form action="?module/menu-save.html" mini-form="menu-form" method="post">
	<input type="hidden" name="ID" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['mod_id'];?>
">
	<table width="100%" border="0" cellspacing="0" class="table-data form">
		<tr>
			<th>菜单标题:</th>
			<td><input type="text" name="data[title]" class="input w-200" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
"></td>
		</tr>
		<tr>
			<th>上级菜单:</th>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['menu']->value['module']=='top'){?>
				顶级菜单
				<?php }else{ ?>
				<select name="data[parent_id]" val="<?php echo $_smarty_tpl->tpl_vars['menu']->value['parent_id'];?>
" class="w-100">
				<?php if (!$_smarty_tpl->tpl_vars['menu']->value&&!$_smarty_tpl->tpl_vars['pager']->value['PID']){?>
				<option value="0">顶级菜单</option>
				<?php }?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['mod_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value['mod_id']==$_smarty_tpl->tpl_vars['menu']->value['parent_id']||$_smarty_tpl->tpl_vars['v']->value['mod_id']==$_smarty_tpl->tpl_vars['pager']->value['PID']){?>selected="selected"<?php }?>>&nbsp;&nbsp;|--<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</option><?php } ?>
				</select>
				<?php }?>
			</td>
		</tr>
		<tr>
			<th width="150">排序：</th>
			<td><input type="text" name="data[orderby]" class="input w-50" value="<?php if ($_smarty_tpl->tpl_vars['menu']->value['orderby']){?><?php echo $_smarty_tpl->tpl_vars['menu']->value['orderby'];?>
<?php }else{ ?>50<?php }?>"></td>
		</tr>
		<tr>
			<th class="form-button-th"></th>
			<td class="form-button-td"><input type="submit" class="bt-big"  value="提  交  数  据" /></td>
		</tr>
	</table>
	</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>