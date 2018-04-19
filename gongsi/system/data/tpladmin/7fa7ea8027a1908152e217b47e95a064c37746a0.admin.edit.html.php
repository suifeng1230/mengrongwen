<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:32:56
         compiled from "admin:shop/shop/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:86575ad55cd872e0c7-10803618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fa7ea8027a1908152e217b47e95a064c37746a0' => 
    array (
      0 => 'admin:shop/shop/edit.html',
      1 => 1490172091,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '86575ad55cd872e0c7-10803618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'detail' => 0,
    'member' => 0,
    'CONFIG' => 0,
    'OATOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55cd8ad79a1_55148430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55cd8ad79a1_55148430')) {function content_5ad55cd8ad79a1_55148430($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"shop/shop:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
<form action="?shop/shop-edit.html" mini-form="shop-form" method="post" ENCTYPE="multipart/form-data">
<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
    <li><a href="#table-info">基本信息</a></li>
	<li><a href="#table-gmsm">购买说明</a><li>
    <li><a href="#table-seo">SEO设置</a></li>
</ul>
<input type="hidden" name="shop_id" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['shop_id'];?>
"/>
<table width="100%" border="0" cellspacing="0" class="table-data form" id="table-info">
<tr><th><span class="red">*</span>店铺标题：</th><td><input type="text" name="data[title]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
" class="input w-300"/></td></tr>
<tr><th><span class="red">*</span>商家名称：</th>
	<td><input type="text" name="data[name]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
" class="input w-300"/><span class="tip-comment">店铺短名称、简称</span></td>
</tr>
<tr><th>等级：</th><td><select name="data[group_id]" class="w-150"><?php echo smarty_function_widget(array('id'=>"member/group",'from'=>'shop','value'=>$_smarty_tpl->tpl_vars['detail']->value['group_id']),$_smarty_tpl);?>
</select></td></tr>
<tr>
    <th>所属会员：</th>
    <td>
        <input type="hidden" name="data[uid]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['uid'];?>
" id="select_member_id" />
        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['detail']->value['uid']){?><?php echo $_smarty_tpl->tpl_vars['member']->value['uname'];?>
<?php }?>" id="select_member_uname" class="input w-300" readonly/>
        <?php echo smarty_function_link(array('ctl'=>"member/member:dialog",'arg0'=>"shop",'select'=>"mini:#select_member_id,#select_member_uname/N/选择用户",'title'=>"选择用户",'class'=>"button"),$_smarty_tpl);?>

    </td>
</tr>
<tr> <th>分类：</th><td><select name="data[cat_id]" class="w-150"><?php echo smarty_function_widget(array('id'=>"shop/cate",'parent_id'=>0,'value'=>$_smarty_tpl->tpl_vars['detail']->value['cat_id']),$_smarty_tpl);?>
</select></td></tr>
<tr>
    <th class="w-100">城市：</th>
    <td>
       <b class="blue"><?php echo $_smarty_tpl->tpl_vars['detail']->value['city_name'];?>
</b>
         <select name="data[area_id]" class="w-150"><?php echo smarty_function_widget(array('id'=>"data/area",'city_id'=>$_smarty_tpl->tpl_vars['detail']->value['city_id'],'value'=>$_smarty_tpl->tpl_vars['detail']->value['area_id']),$_smarty_tpl);?>
</select>
    </td>
</tr>
<tr><th>长方形LOGO：</th>
    <td>
        <input type="file" name="data[logo]" class="input w-300" />
        <?php if ($_smarty_tpl->tpl_vars['detail']->value['logo']){?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['logo'];?>
" photo="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['logo'];?>
" class="wh-30" style="vertical-align:middle;display:inline;"/>
        <?php }?>
        <span class="tip-comment">尺寸大小：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['CONFIG']->value['attach']['shop']['logo'])===null||$tmp==='' ? '200X100' : $tmp);?>
</span>
    </td>
</tr>
<tr><th>正方形LOGO：</th>
    <td>
        <input type="file" name="data[thumb]" class="input w-300" />
     <?php if ($_smarty_tpl->tpl_vars['detail']->value['thumb']){?>
     <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['thumb'];?>
" photo="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['thumb'];?>
" class="wh-30" style="vertical-align:middle;display:inline;"/>
     <?php }?>
     <span class="tip-comment">尺寸大小：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['CONFIG']->value['attach']['shop']['thumb'])===null||$tmp==='' ? '200X200' : $tmp);?>
</span>
    </td>
</tr>
<tr><th>banner：</th>
    <td>
        <input type="text" name="fields[banner]"<?php if ($_smarty_tpl->tpl_vars['detail']->value['banner']){?> photo="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['logo'];?>
"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['banner'];?>
" class="input w-300">
        <label><input type="file" name="fields[banner]" class="input w-100" /></label>
    </td>
</tr>
<tr>
    <th>消保：</th>
    <td>
        <input type="text" name="data[xiaobao]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['xiaobao'];?>
" class="input w-100"/>
        <span class="tip-comment">消费保证金，0：表示未参加消保</span>
    </td>
</tr>
<tr>
    <th>评分：</th>
    <td>
        <label>总评分:<input type="text" name="data[score]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['score'];?>
" class="input w-100"/></label>
        <label>评论数:<input type="text" name="data[comments]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['comments'];?>
" class="input w-100"/></label>
    </td>
</tr>
<tr>
    <th>统计：</th>
    <td>     
        <label>商品数:<input type="text" name="data[products]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['products'];?>
" class="input w-100"/></label>
        <label>浏览数:<input type="text" name="data[views]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['views'];?>
" class="input w-100"/></label>
    </td>
</tr>
<tr><th>电话：</th><td><input type="text" name="data[phone]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['phone'];?>
" class="input w-300"/></td></tr>
<tr><th>传真：</th><td><input type="text" name="fields[fox]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['fox'];?>
" class="input w-300"/></td></tr>
<tr><th>公司邮箱：</th><td><input type="text" name="fields[mail]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['mail'];?>
" class="input w-300"/></td></tr>
<tr><th>QQ：</th><td><input type="text" name="fields[qq]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['qq'];?>
" class="input w-300"/><span class="tip-comment">多个用逗号分隔</span></td></tr>
<tr><th>营业时间：</th><td><input type="text" name="fields[hours]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['hours'];?>
" class="input w-300"/><span class="tip-comment">如9:00 - 18:00</span></td></tr>
<tr><th>个性域名：</th><td><input type="text" name="data[domain]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['domain'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-500"/></td></tr>
<tr><th>百度地图：</th>
	<td>
		<label>经度:<input type="text" name="data[lng]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['lng'];?>
" id="Bmap_marker_lng" class="input w-100"/></label>
		<label>纬度:<input type="text" name="data[lat]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['lat'];?>
" id="Bmap_marker_lat" class="input w-100"/></label>	
		<span class="tip-comment">使用百度地图经纬度<a map-marker="#Bmap_marker_lng,#Bmap_marker_lat" class="button"><b>拾取工具</b></a></span>
	</td>
</tr>
<tr><th>地址：</th><td><input type="text" name="fields[addr]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['addr'];?>
" class="input w-500"/></td></tr>
<tr><th>交通：</th><td><input type="text" name="fields[jiaotong]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['jiaotong'];?>
" class="input w-500"/></td></tr>
<tr><th>店铺公告：</th><td><textarea name="fields[bulletin]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['detail']->value['bulletin'];?>
</textarea><br /></td></tr>
<tr><th>商铺介绍：</th><td><textarea name="fields[info]" kindeditor="full" style="width:800px;height:350px;"><?php echo $_smarty_tpl->tpl_vars['detail']->value['info'];?>
</textarea></td></tr>
<tr><th>VIP店铺：</th>
    <td>
        <ul class="group-list">
            <li><label><input type="radio" name="data[is_vip]" <?php if (!$_smarty_tpl->tpl_vars['detail']->value['is_vip']){?>checked="checked"<?php }?> value="0" >普通商铺</label></li>
            <li><label><input type="radio" name="data[is_vip]" <?php if ($_smarty_tpl->tpl_vars['detail']->value['is_vip']){?>checked="checked"<?php }?> value="1">旗舰商铺</label></li>
            <div class="clear-both"></div>
        </ul>
    </td>
</tr>
<tr><th>实名认证：</th>
    <td>
        <ul class="group-list">
            <li><label><input type="radio" name="data[verify_name]" <?php if (!$_smarty_tpl->tpl_vars['detail']->value['verify_name']){?>checked="checked"<?php }?> value="0" >未认证</label></li>
            <li><label><input type="radio" name="data[verify_name]" <?php if ($_smarty_tpl->tpl_vars['detail']->value['verify_name']){?>checked="checked"<?php }?> value="1">已认证</label></li>
            <div class="clear-both"></div>
        </ul>
    </td>
</tr>
<tr><th>审核：</th><td>
    <ul class="group-list">
        <li><label><input type="radio" name="data[audit]" value="0" <?php if ($_smarty_tpl->tpl_vars['detail']->value['audit']==0){?> checked="checked"<?php }?>  ck="MOD-6">待审核</label></li>
        <li><label><input type="radio" name="data[audit]" value="1" <?php if ($_smarty_tpl->tpl_vars['detail']->value['audit']==1){?> checked="checked"<?php }?>  ck="MOD-6">已审核</label></li>
        <div class="clear-both"></div>
    </ul>
</td>
<tr><th>排序：</th><td><input type="text" name="data[orderby]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['orderby'];?>
" class="input w-100"/></td></tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
<table width="100%" border="0" cellspacing="0" class="table-data form" id="table-gmsm">
<tr><th>订购须知：</th><td><textarea name="fields[dgxz]" kindeditor="full" style="width:800px;height:350px;"><?php echo $_smarty_tpl->tpl_vars['detail']->value['dgxz'];?>
</textarea></td></tr>
<tr><th>配送安装：</th><td><textarea name="fields[psaz]" kindeditor="full" style="width:800px;height:350px;"><?php echo $_smarty_tpl->tpl_vars['detail']->value['psaz'];?>
</textarea></td></tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
<table width="100%" border="0" cellspacing="0" class="table-data form" id="table-seo">
<tr><th>SEO标题：</th><td><input type="text" name="fields[seo_title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['seo_title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-400"/></td></tr>
<tr><th>SEO关键字：</th><td><input type="text" name="fields[seo_keywords]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['seo_keywords'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-400"/></td></tr>
<tr><th>SEO描述：</th><td><textarea name="fields[seo_description]" class="textarea w-400"><?php echo $_smarty_tpl->tpl_vars['detail']->value['seo_description'];?>
</textarea><br /></td></tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.bmap.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/kindeditor/kindeditor.js"></script>
<script type="text/javascript">
(function(K, $){
$("div.page-data").tabs();
var editor = KindEditor.create('textarea[kindeditor]', {uploadJson : '?magic/upload-editor.html', extraFileUploadParams:{OATOKEN:"<?php echo $_smarty_tpl->tpl_vars['OATOKEN']->value;?>
"}});
$("select[name='data[city_id]']").live('change', function(){
	var city_id = $(this).val();
	if(!city_id){return false;}
	$.getJSON("?data/area-city-"+city_id+".html", function(ret){
		if(ret.error){
			Widget.MsgBox.error(ret.message.join(","));
		}else if(ret.areas.length>0){
			var html = "";
			for(var i=0; i<ret.areas.length; i++){
				html += '<option value="'+ret.areas[i].area_id+'">'+ret.areas[i].area_name+'</option>';
			}
			$("select[name='data[area_id]']").html(html);		
		}else{
			$("select[name='data[area_id]']").html('<option value="">--</option>');
		}
	});
});
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>