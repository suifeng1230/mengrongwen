<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 16:15:01
         compiled from "admin:data/area/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:286775ac48985e243c9-72203932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d289661b08d6c5805659fc66ce2ed41b1ebf688' => 
    array (
      0 => 'admin:data/area/detail.html',
      1 => 1429266516,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '286775ac48985e243c9-72203932',
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
  'unifunc' => 'content_5ac48985e85e53_59360345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac48985e85e53_59360345')) {function content_5ac48985e85e53_59360345($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
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
<div class="page-data"><table width="100%" border="0" cellspacing="0" class="table-data form">
<tr><th>ID：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['area_id'];?>
</td></tr>
<tr><th>城市：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['city_id'];?>
</td></tr>
<tr><th>地区：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['area_name'];?>
</td></tr>
<tr><th>排序：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['orderby'];?>
</td></tr>
</table></div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>