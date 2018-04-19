<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 11:45:21
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\ucenter\shop\info.html" */ ?>
<?php /*%%SmartyHeaderCode:245025ac99051e68592-89152862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e07ed9863a7a187e5d1b91e9116026490622dfb' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\ucenter\\shop\\info.html',
      1 => 1429266550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245025ac99051e68592-89152862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'shop_no_open' => 0,
    'shop' => 0,
    'MEMBER' => 0,
    'request' => 0,
    'pager' => 0,
    'OTOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac990522efd93_04452459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac990522efd93_04452459')) {function content_5ac990522efd93_04452459($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="ucenter_t">
    <ul>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:base'),$_smarty_tpl);?>
" >基本设置</a></li>
        <li class="on"><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:info'),$_smarty_tpl);?>
">资料设置</a></li>
        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['domain']['shop']){?>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:domain'),$_smarty_tpl);?>
">个性域名</a></li>
        <?php }?>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:seo'),$_smarty_tpl);?>
">SEO设置</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:gmsm'),$_smarty_tpl);?>
">购买说明</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/banner:index'),$_smarty_tpl);?>
">轮转广告</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:skin'),$_smarty_tpl);?>
">店铺模板</a></li>  
    </ul>
</div>
<div class="ucenter_c">
<?php if ($_smarty_tpl->tpl_vars['shop_no_open']->value){?><div class="tips"><span class="notice">您还没有开通商铺，请先填写商铺资料</span></div><?php }?>
<form action="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:info'),$_smarty_tpl);?>
" mini-form="ucenter" method="post" ENCTYPE="multipart/form-data">
<table cellspacing="0" cellpadding="0" class="form">
   <tr><th><span class="red">*</span>商铺标题：</th><td><input type="text" name="data[title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shop']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
    <tr><th><span class="red">*</span>商铺名称：</th>
		<td><input type="text" name="data[name]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shop']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/>
			<span class="tip-comment">店铺短名称、简称</span>
		</td>
	</tr>
    <tr><th><span class="red">*</span>商铺分类：</th><td><select name="data[cat_id]" class="select w-150"><?php echo smarty_function_widget(array('id'=>"shop/cate",'value'=>$_smarty_tpl->tpl_vars['shop']->value['cat_id']),$_smarty_tpl);?>
</select></td></tr>
    <?php if ($_smarty_tpl->tpl_vars['shop']->value['city_id']){?>
    <tr>
        <th class="w-100"><span class="red">*</span>地区：</th>
        <td>
            <label><b class="blue"><?php echo $_smarty_tpl->tpl_vars['shop']->value['city_name'];?>
</b></label>&nbsp;&nbsp;&nbsp;
            <label><select name="data[area_id]" class="select w-100"><?php echo smarty_function_widget(array('id'=>"data/area",'value'=>$_smarty_tpl->tpl_vars['shop']->value['area_id'],'city_id'=>(($tmp = @$_smarty_tpl->tpl_vars['shop']->value['city_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['MEMBER']->value['city_id'] : $tmp)),$_smarty_tpl);?>
</select></label>
        </td>
    </tr>
    <?php }else{ ?>
    <tr>
        <th class="w-100"><span class="red">*</span>地区：</th>
        <td><?php echo smarty_function_widget(array('id'=>"data/region",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'class'=>"select w-150"),$_smarty_tpl);?>
</td>
    </tr>
    <?php }?>
    <tr><th><span class="red">*</span>联系人：</th><td><input type="text" name="data[contact]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shop']->value['contact'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<!--    
    <tr><th><span class="red">*</span>手机：</th><td><input type="text" name="data[mobile]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shop']->value['mobile'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
-->
    <tr><th><span class="red">*</span>电话：</th><td><input type="text" name="data[phone]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shop']->value['phone'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
    <tr><th>传真：</th><td><input type="text" name="fields[fox]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shop']->value['fox'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
    <tr>
        <th>客服QQ：</th><td><input type="text" name="fields[qq]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shop']->value['qq'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/><span class="tip-comment">多个QQ用","分隔</span></td>
    </tr>
    <tr><th>公司邮箱：</th><td><input type="text" name="fields[mail]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shop']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
    <tr><th>营业时间：</th><td><input type="text" name="fields[hours]" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['hours'];?>
" class="input w-300"/><span class="tip-comment">如9:00 - 18:00</span></td></tr>
    <tr><th>店铺公告：</th><td><textarea name="fields[bulletin]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['shop']->value['bulletin'];?>
</textarea></td></tr>
    <tr><th>地图坐标：</th>
        <td>
            <label>经度:<input type="text" name="data[lng]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shop']->value['lng'])===null||$tmp==='' ? '' : $tmp);?>
" id="Bmap_marker_lng" class="input w-100"/></label>
            <label>纬度:<input type="text" name="data[lat]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shop']->value['lat'])===null||$tmp==='' ? '' : $tmp);?>
" id="Bmap_marker_lat" class="input w-100"/></label> 
            <span class="tip-comment"><a class="pbtn" map-marker="#Bmap_marker_lng,#Bmap_marker_lat" >拾取工具</a></span>
        </td>
    </tr>
    <tr><th>地址：</th><td><input type="text" name="fields[addr]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shop']->value['addr'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-500"/></td></tr>
    <tr><th>交通：</th><td><input type="text" name="fields[jiaotong]" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['jiaotong'];?>
" class="input w-500"/></td></tr>
    <tr><th>公司介绍：</th><td><textarea name="fields[info]" kindeditor="simple" style="width:700px;height:350px;"><?php echo $_smarty_tpl->tpl_vars['shop']->value['info'];?>
</textarea></td></tr>
    <tr><th></th><td><input type="submit" value="提交数据" class="green_btn" /></td></tr>
</table>
</form>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.bmap.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/kindeditor/kindeditor.js"></script>
<script type="text/javascript">
(function(K, $){
var editor = KindEditor.create('textarea[kindeditor]',{uploadJson : '<?php echo smarty_function_link(array('ctl'=>"magic:editorupload",'http'=>"base"),$_smarty_tpl);?>
', extraFileUploadParams:{OTOKEN:"<?php echo $_smarty_tpl->tpl_vars['OTOKEN']->value;?>
"}});
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>