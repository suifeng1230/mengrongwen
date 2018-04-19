<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:22:34
         compiled from "admin:product/product/create.html" */ ?>
<?php /*%%SmartyHeaderCode:167945ad55a6ad75439-02787934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ca60f67d4774abb25e7a2c9bc285a8330190d2f' => 
    array (
      0 => 'admin:product/product/create.html',
      1 => 1435920492,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '167945ad55a6ad75439-02787934',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'shop' => 0,
    'parents' => 0,
    'v' => 0,
    'detail' => 0,
    'OATOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55a6b0c34d7_03965397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55a6b0c34d7_03965397')) {function content_5ad55a6b0c34d7_03965397($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
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
<form action="?product/product-create.html" mini-form="product-form" method="post" ENCTYPE="multipart/form-data">
<input type="hidden" name="shop_id" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['shop_id'];?>
" />
<input type="hidden" name="data[cat_id]" value="<?php echo $_smarty_tpl->tpl_vars['pager']->value['cat_id'];?>
" />
<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
    <li><a href="#table-info">基本信息</a></li>
    <li><a href="#table-attr">商品属性</a></li>
    <li><a href="#table-seo">SEO信息</a></li>
</ul>
<table width="100%" border="0" cellspacing="0" class="table-data form" id="table-info">
<tr><th>分类：</th>
    <td>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
?><b class="blue"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</b><?php if (!$_smarty_tpl->tpl_vars['v']->last){?>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<?php }?><?php } ?>
        <?php echo smarty_function_link(array('ctl'=>"product/product:create",'arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'load'=>"mini:选择商品分类",'confirm'=>"mini:已经填写的内容将会丢失？",'title'=>"重选分类",'class'=>"button"),$_smarty_tpl);?>

    </td>
</tr>
<tr><th><span class="red">*</span>店铺：</th><td><b class="blue"><?php echo $_smarty_tpl->tpl_vars['shop']->value['title'];?>
</b></td></tr>
<tr><th><span class="red">*</span>标题：</th><td><input type="text" name="data[title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th><span class="red">*</span>名称：</th>
    <td><input type="text" name="data[name]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/><span class="tip-comment">商品短名称、简称</span></td>
</tr>
<tr><th>城市：</th><td><b class="blue"><?php echo $_smarty_tpl->tpl_vars['shop']->value['city_name'];?>
</b>&nbsp;&nbsp; <select name="data[area_id]" class="w-100"><?php echo smarty_function_widget(array('id'=>"data/area",'city_id'=>$_smarty_tpl->tpl_vars['shop']->value['city_id'],'value'=>$_smarty_tpl->tpl_vars['detail']->value['area_id']),$_smarty_tpl);?>
</td></tr>
<tr><th>品牌：</th><td><select name="data[brand_id]" class="w-100"><option>--选择--</option><?php echo smarty_function_widget(array('id'=>"shop/brand",'cat_id'=>$_smarty_tpl->tpl_vars['pager']->value['cat_id']),$_smarty_tpl);?>
</select></td></tr>
<tr>
    <th>封面：</th>
    <td>
        <input type="text" name="data[photo]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['photo'];?>
" <?php if ($_smarty_tpl->tpl_vars['detail']->value['photo']){?>photo="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['photo'];?>
"<?php }?> class="input w-300" />&nbsp;&nbsp;&nbsp;
        <input type="file" name="data[photo]" class="input w-100" />
    </td>
</tr>
<tr><th><span class="red">*</span>商品描述：</th><td><textarea name="fields[info]" kindeditor="full" style="width:800px;height:350px;"><?php echo $_smarty_tpl->tpl_vars['detail']->value['info'];?>
</textarea><br /></td></tr>
<tr><th>价格：</th>
    <td>
        <label>市场价:<input type="text" name="data[market_price]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['market_price'])===null||$tmp==='' ? '0.00' : $tmp);?>
" class="input w-100"/></label>
        <label>商铺价:<input type="text" name="data[price]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['price'])===null||$tmp==='' ? '0.00' : $tmp);?>
" class="input w-100"/></label>
    </td>
</tr>
<tr><th>单位：</th>
    <td><input type="text" name="data[danwei]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['danwei'])===null||$tmp==='' ? '个' : $tmp);?>
" class="input w-200"/><span class="tip-comment">如:个、件、每平方、每米等</span></td>
</tr>
<tr><th>库存数：</th><td><input type="text" name="data[store]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['store'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr>
    <th>类型：</th>
    <td>
        <ul class="group-list">
            <li><label><input type="radio" name="data[sale_type]" value="0" checked="checked">普通</label></li>
            <li><label><input type="radio" name="data[sale_type]" value="1">限量</label></li>
            <li><label><input type="radio" name="data[sale_type]" value="2">限时</label></li>
            <div class="clear-both"></div>
        </ul>
    </td>
</tr>
<tr id="tr_sale_time" class="hide"><th class="red">限时：</th><td><input type="text" name="data[sale_time]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['sale_time'])===null||$tmp==='' ? '' : $tmp);?>
" datetime="sale_time" class="input w-100"/><span class="tip-comment">只有在类型为"限时"时有效</span></td></tr>
<tr id="tr_sale_sku1" class="hide">
<th>抢购数：</th><td><input type="text" name="data[sale_sku]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['sale_sku'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr id="tr_sale_sku2" class="hide">
<th>已抢购数：</th><td><input type="text" name="data[sale_count]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['sale_count'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td>
</tr>
<tr>
    <th>促销：</th>
    <td>
        <ul class="group-list">
            <li><label><input type="checkbox" name="data[sale_remai]" value="1">热卖</label></li>
            <li><label><input type="checkbox" name="data[sale_youhui]" value="1">优惠</label></li>
            <li><label><input type="checkbox" name="data[sale_tuijian]" value="1">推荐</label></li>
            <div class="clear-both"></div>
        </ul>
    </td>
</tr>
<tr><th>排序：</th><td><input type="text" name="data[orderby]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['orderby'])===null||$tmp==='' ? '50' : $tmp);?>
" class="input w-50"/></td></tr>
<tr>
    <th>在线支付：</th>
	<td>
        <ul class="group-list">
            <li><label><input type="radio" name="data[onpayment]" checked="checked" value="1"/>是</label></li>
            <li><label><input type="radio" name="data[onpayment]" value="0"/>否</label></li>
        </ul>
	</td>
</tr>
<tr>
    <th>上架：</th>
	<td>
        <ul class="group-list">
		    <li><label><input type="radio" name="data[onsale]" checked="checked" value="1"/>上架</label></li>
		    <li><label><input type="radio" name="data[onsale]" value="0"/>下架</label></li>
        </ul>
	</td>
</tr>
<tr>
	<th>审核：</th>
	<td>
        <ul class="group-list">
            <li><label><input type="radio" name="data[audit]" checked="checked" value="1"/>发布</label></li>
            <li><label><input type="radio" name="data[audit]" value="0"/>待审</label></li>
        </ul>
	</td>
</tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
<table width="100%" border="0" cellspacing="0" class="table-data form" id="table-attr" style="display:none;">
<?php echo smarty_function_widget(array('id'=>"shop/attr",'cat_id'=>$_smarty_tpl->tpl_vars['pager']->value['cat_id']),$_smarty_tpl);?>

<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
<table width="100%" border="0" cellspacing="0" class="table-data form hide" id="table-seo">
<tr><th>SEO标题：</th><td><input type="text" name="fields[seo_title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['seo_title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-500"/></td></tr>
<tr><th>SEO关键字：</th><td><input type="text" name="fields[seo_keywords]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['seo_keywords'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-500"/></td></tr>
<tr><th>SEO描述：</th><td><textarea name="fields[seo_description]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['detail']->value['seo_description'];?>
</textarea><br /></td></tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form>
</div>
<script src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/swfupload/swfupload.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt.upload.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/kindeditor/kindeditor.js"></script>
<script type="text/javascript">
(function(K, $){
$("div.page-data").tabs();
var editor = KindEditor.create('textarea[kindeditor]', {uploadJson : '?magic/upload-editor.html', extraFileUploadParams:{OATOKEN:"<?php echo $_smarty_tpl->tpl_vars['OATOKEN']->value;?>
"}});
$("[name='data[sale_type]']").click(function(){
    if($(this).val() == 2){
        $("#tr_sale_sku1").hide();
		$("#tr_sale_sku2").hide();
        $("#tr_sale_time").show();
    }else if($(this).val() == 1){
        $("#tr_sale_time").hide();
        $("#tr_sale_sku1").show();
		$("#tr_sale_sku2").show();
    }else{
        $("#tr_sale_sku2").hide();
		$("#tr_sale_sku1").hide();
        $("#tr_sale_time").hide();
    }
});
$("[name='data[sale_type]']:checked").trigger("click");
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>