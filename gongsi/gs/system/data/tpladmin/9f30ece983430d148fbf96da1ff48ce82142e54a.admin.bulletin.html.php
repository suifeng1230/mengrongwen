<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 10:32:06
         compiled from "admin:config/bulletin.html" */ ?>
<?php /*%%SmartyHeaderCode:249335ac43926db9607-61012621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f30ece983430d148fbf96da1ff48ce82142e54a' => 
    array (
      0 => 'admin:config/bulletin.html',
      1 => 1429266518,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '249335ac43926db9607-61012621',
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
  'unifunc' => 'content_5ac43926e327a1_52792037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac43926e327a1_52792037')) {function content_5ac43926e327a1_52792037($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<form action="?system/config-bulletin.html" mini-form="config-form" method="post" >
<input type="hidden" name="K" value="bulletin" />
<table width="100%" border="0" cellspacing="0" class="table-data form">
    <tr>
        <th>会员中心公告：</th>
        <td>
            <label><input type="radio" name="config[open_member]" <?php if ($_smarty_tpl->tpl_vars['config']->value['open_member']){?>checked="checked"<?php }?> value="1"/>开启</label>&nbsp;&nbsp;
            <label><input type="radio" name="config[open_member]" <?php if (empty($_smarty_tpl->tpl_vars['config']->value['open_member'])){?>checked="checked"<?php }?> value="0"/>关闭</label>
        </td>   
    </tr>
    <tr><th>公告内容：</th><td><textarea name="config[member]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['member'];?>
</textarea></td></tr>
    <tr>
        <th>公司中心公告：</th>
        <td>
            <label><input type="radio" name="config[open_company]" <?php if ($_smarty_tpl->tpl_vars['config']->value['open_company']){?>checked="checked"<?php }?> value="1"/>开启</label>&nbsp;&nbsp;
            <label><input type="radio" name="config[open_company]" <?php if (empty($_smarty_tpl->tpl_vars['config']->value['open_company'])){?>checked="checked"<?php }?> value="0"/>关闭</label>
        </td>   
    </tr>
    <tr><th>公告内容：</th><td><textarea name="config[company]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['company'];?>
</textarea></td></tr>
    <tr>
        <th>商铺中心公告：</th>
        <td>
            <label><input type="radio" name="config[open_shop]" <?php if ($_smarty_tpl->tpl_vars['config']->value['open_shop']){?>checked="checked"<?php }?> value="1"/>开启</label>&nbsp;&nbsp;
            <label><input type="radio" name="config[open_shop]" <?php if (empty($_smarty_tpl->tpl_vars['config']->value['open_shop'])){?>checked="checked"<?php }?> value="0"/>关闭</label>
        </td>
    </tr>
    <tr><th>公告内容：</th><td><textarea name="config[shop]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['shop'];?>
</textarea><br /></td></tr>
    <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>