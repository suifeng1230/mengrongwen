<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:21:41
         compiled from "admin:product/product/so.html" */ ?>
<?php /*%%SmartyHeaderCode:74045ad55a35d1f335-29868458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '155e91d61e16b8065d206099f0dffe33f70f2de1' => 
    array (
      0 => 'admin:product/product/so.html',
      1 => 1429266516,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '74045ad55a35d1f335-29868458',
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
  'unifunc' => 'content_5ad55a35df9f67_19978948',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55a35df9f67_19978948')) {function content_5ad55a35df9f67_19978948($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"product/product:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
<form action="?product/product-index.html" id="SO-form" method="post">
<table width="100%" border="0" cellspacing="0" class="table-data form"><tr>
    <tr><th>标题：</th><td><input type="text" name="SO[title]" value="" class="input w-300"/></td></tr>
    <tr><th>商品ID：</th>
        <td>
            <input type="text" name="SO[product_id]" value="" class="input w-100"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label><b>商铺ID：</b><input type="text" name="SO[shop_id]" value="" class="input w-100"/></label>
        </td>
    </tr>
    <tr><th>分类：</th>
        <td><select name="SO[cat_id]" class="w-150"><option value="">--分类--</option><?php echo smarty_function_widget(array('id'=>"shop/cate"),$_smarty_tpl);?>
</select></td>
    </tr>
    <tr><th>品牌：</th><td><select name="SO[brand_id]" class="w-150"><option value="">--品牌--</option><?php echo smarty_function_widget(array('id'=>"shop/brand"),$_smarty_tpl);?>
</select></td></tr>
    <tr><th>城市：</th>
        <td><select name="SO[city_id]" class="w-150"><option value="">--城市--</option><?php echo smarty_function_widget(array('id'=>"data/city"),$_smarty_tpl);?>
</select></td>
    </tr>
    <tr><th>创建时间：</th>
        <td>
            <input type="text" name="SO[dateline][0]" value="" class="input w-100" date="dateline" readonly/>~
            <input type="text" name="SO[dateline][1]" value="" class="input w-100" date="dateline" readonly/>
        </td>
    </tr>
    <tr><th>最后修改：</th>
        <td>
            <input type="text" name="SO[lastupdate][0]" value="" class="input w-100" date="lastupdate" readonly/>~
            <input type="text" name="SO[lastupdate][1]" value="" class="input w-100" date="lastupdate" readonly/>
        </td>
    </tr>
    <tr><th>审核：</th>
        <td>
            <select name="SO[audit]" class="w-100"><option value="">全部</option><option value="1">发布</option><option value="0">待审</option></select>
        </td>
    </tr> 
    <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="搜 索" /></td></tr>
</table>
</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>