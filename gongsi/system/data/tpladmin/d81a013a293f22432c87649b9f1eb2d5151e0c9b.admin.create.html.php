<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:25:13
         compiled from "admin:shop/attr/create.html" */ ?>
<?php /*%%SmartyHeaderCode:263115ad55b09d6dd29-52803243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd81a013a293f22432c87649b9f1eb2d5151e0c9b' => 
    array (
      0 => 'admin:shop/attr/create.html',
      1 => 1429266520,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '263115ad55b09d6dd29-52803243',
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
  'unifunc' => 'content_5ad55b09e29547_35951736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55b09e29547_35951736')) {function content_5ad55b09e29547_35951736($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"shop/attr:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
<form action="?shop/attr-create.html" mini-form="attr-form" method="post" >
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr><th><span class="red">*</span>属性：</th><td><input type="text" name="data[title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-200"/></td></tr>
<tr><th><span class="red">*</span>分类：</th>
    <td><input type="hidden" name="data[cat_id]" value="0" id="J_cate_id"/>
        <select class="J_cate_select mgr10" style="min-width:100px;" data-pids="" data-pid="0" data-uri="?shop/cate-children-#pid#.html"></select>
    </td>
</tr>
</td></tr><tr><th>是否多选：</th><td>
<select name="data[multi]" class="w-100">
	<option value="Y">多选</option>
	<option value="N">单选</option>
</select>
</td></tr>
</td></tr><tr><th>可搜索：</th><td>
<select name="data[filter]" class="w-100">
	<option value="Y">是</option>
	<option value="N">否</option>
</select>
<tr><th class="w-100">排序：</th><td><input type="text" name="data[orderby]" value="50" class="input w-100"/></td></tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form></div>
<script type="text/javascript">
(function(K, $){
$('.J_cate_select').cate_select();
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>