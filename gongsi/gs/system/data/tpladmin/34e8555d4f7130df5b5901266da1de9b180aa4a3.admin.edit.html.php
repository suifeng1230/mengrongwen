<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 17:19:59
         compiled from "admin:gz/gz/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:175115ac498bf97ff36-13998909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34e8555d4f7130df5b5901266da1de9b180aa4a3' => 
    array (
      0 => 'admin:gz/gz/edit.html',
      1 => 1430882490,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '175115ac498bf97ff36-13998909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'detail' => 0,
    'CONFIG' => 0,
    'v' => 0,
    'k' => 0,
    'attr' => 0,
    'OATOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac498bfa8d7f5_96295561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac498bfa8d7f5_96295561')) {function content_5ac498bfa8d7f5_96295561($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"gz/gz:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data"><form action="?gz/gz-edit.html" mini-form="gz-form" method="post" >
<input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['uid'];?>
"/>
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr>
    <th>会员名：</th>
    <td>
        <a ucard="@<?php echo $_smarty_tpl->tpl_vars['detail']->value['uid'];?>
"><b class="blue"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['uname'])===null||$tmp==='' ? '--' : $tmp);?>
(UID:<?php echo $_smarty_tpl->tpl_vars['detail']->value['uid'];?>
)</b></a> &nbsp;&nbsp;&nbsp;
        <?php echo smarty_function_link(array('ctl'=>"member/member:edit",'args'=>$_smarty_tpl->tpl_vars['detail']->value['uid'],'title'=>"修改用户信息",'class'=>"button"),$_smarty_tpl);?>

    </td>
</tr>    
<tr><th><span class="red">*</span>名称：</th><td><input type="text" name="data[name]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>等级：</th><td><select name="data[group_id]" class="w-150"><?php echo smarty_function_widget(array('id'=>"member/group",'from'=>'gz','value'=>$_smarty_tpl->tpl_vars['detail']->value['group_id']),$_smarty_tpl);?>
</select></td></tr>
<tr><th>QQ：</th><td><input type="text" name="data[qq]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['qq'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>手机：</th><td><input type="text" name="data[mobile]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['mobile'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>服务理念：</th><td><input type="text" name="data[slogan]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['slogan'];?>
" class="input w-300"/></td></tr>
<tr><th class="w-100"><span class="red">*</span>城市：</th><td><?php echo smarty_function_widget(array('id'=>"data/region",'city_id'=>$_smarty_tpl->tpl_vars['detail']->value['city_id'],'area_id'=>$_smarty_tpl->tpl_vars['detail']->value['area_id']),$_smarty_tpl);?>
</td></tr>
<tr><th>统计：</th>
    <td>
        <label>浏览数:<input type="text" name="data[views]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['views'])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-100"/></label>
        <label>案例数:<input type="text" name="data[case_num]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['case_num'])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-100"/></label>
        <label>工地数:<input type="text" name="data[site_num]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['site_num'])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-100"/></label>
        <label>预约数:<input type="text" name="data[yuyue_num]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['yuyue_num'])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-100"/></label>       
    </td>
</tr>
<tr><th>评分：</th>
    <td>
        <label>评论数:<input type="text" name="data[comments]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['comments'])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-100"/></label>
        <label>&nbsp;&nbsp;综合:<input type="text" name="data[score]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['score'])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-100"/></label>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONFIG']->value['score']['gz']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <label>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
:<input type="text" name="data[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value[$_smarty_tpl->tpl_vars['k']->value])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-100"/></label>
        <?php } ?>
    </td>
</tr>
<?php echo smarty_function_widget(array('id'=>"attr/form",'from'=>"zx:gz",'value'=>$_smarty_tpl->tpl_vars['attr']->value),$_smarty_tpl);?>

<tr><th><span class="red">*</span>关于：</th><td><textarea name="data[about]" kindeditor="full" style="width:800px;height:350px;"><?php echo $_smarty_tpl->tpl_vars['detail']->value['about'];?>
</textarea></td></tr>
<tr><th>排序：</th><td><input type="text" name="data[orderby]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['orderby'])===null||$tmp==='' ? '50' : $tmp);?>
" class="input w-100"/></td></tr>
<tr>
    <th>审核：</th>
    <td>
        <label><input type="radio" name="data[audit]" checked="checked" <?php if ($_smarty_tpl->tpl_vars['detail']->value['audit']){?>checked="checked"<?php }?> value="1"/>发布</label>&nbsp;&nbsp;
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
var editor = KindEditor.create('textarea[kindeditor]',{uploadJson : '?magic/upload-editor.html', extraFileUploadParams:{OATOKEN:"<?php echo $_smarty_tpl->tpl_vars['OATOKEN']->value;?>
"}});
})(window.KT, window.jQuery);
</script> <script type="text/javascript">
(function(K, $){
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