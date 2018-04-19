<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 11:51:47
         compiled from "admin:shop/news/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:167065ac991d3d13807-34154559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff4896ca342d9647576635f5d7a84f4f6b690d66' => 
    array (
      0 => 'admin:shop/news/edit.html',
      1 => 1429266520,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '167065ac991d3d13807-34154559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'detail' => 0,
    'shop' => 0,
    'OATOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac991d3e7e486_40398815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac991d3e7e486_40398815')) {function content_5ac991d3e7e486_40398815($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"shop/news:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data"><form action="?shop/news-edit.html" mini-form="news-form" method="post" >
<input type="hidden" name="news_id" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['news_id'];?>
"/>
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr><th>标题：</th><td><input type="text" name="data[title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr>
    <th><span class="red">*</span>商铺：</th>
    <td>
        <input type="hidden" name="data[shop_id]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['shop_id'];?>
" id="select_shop_shop_id_id" />
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['title'];?>
" id="select_shop_shop_id_title" class="input w-300" readonly/>
        <?php echo smarty_function_link(array('ctl'=>"shop/shop:dialog",'select'=>"mini:#select_shop_shop_id_id,#select_shop_shop_id_title/N/选择商铺",'title'=>"选择商铺",'class'=>"button"),$_smarty_tpl);?>

    </td>
</tr>
<tr>
    <th class="w-100">城市：</th>
    <td>
       <b class="blue"><?php echo $_smarty_tpl->tpl_vars['shop']->value['city_name'];?>
</b>
    </td>
</tr>
<tr><th class="w-100">类型：</th>
    <td>
        <select name="data[from]" class="w-150">
            <option value="active"<?php if ($_smarty_tpl->tpl_vars['detail']->value['from']=='active'){?> selected="selected"<?php }?>>店铺活动</option>
            <option value="news" <?php if ($_smarty_tpl->tpl_vars['detail']->value['from']=='news'){?> selected="selected"<?php }?>>店铺资讯</option>
        </select>
    </td>
</tr>
<tr><th>内容：</th><td><textarea name="data[content]" kindeditor="full" style="width:800px;height:350px;"><?php echo $_smarty_tpl->tpl_vars['detail']->value['content'];?>
</textarea><br /></td></tr>
<tr>
	<th><span class="red">*</span>审核：</th>
	<td>
		<label><input type="radio" name="data[audit]" <?php if ($_smarty_tpl->tpl_vars['detail']->value['audit']){?>checked="checked"<?php }?> value="1"/>发布</label>&nbsp;&nbsp;
		<label><input type="radio" name="data[audit]" <?php if (empty($_smarty_tpl->tpl_vars['detail']->value['audit'])){?>checked="checked"<?php }?> value="0"/>待审</label>
	</td>
</tr>
    <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form></div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/kindeditor/kindeditor.js"></script>
<script type="text/javascript">
(function(K, $){
var editor = KindEditor.create('textarea[kindeditor]', {uploadJson : '?magic/upload-editor.html', extraFileUploadParams:{OATOKEN:"<?php echo $_smarty_tpl->tpl_vars['OATOKEN']->value;?>
"}});
})(window.KT, window.jQuery);
</script> 
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>