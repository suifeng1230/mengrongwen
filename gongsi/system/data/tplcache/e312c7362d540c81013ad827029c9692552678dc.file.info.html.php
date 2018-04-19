<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:59:35
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\ucenter\mechanic\info.html" */ ?>
<?php /*%%SmartyHeaderCode:227045ad5631741aba3-97194092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e312c7362d540c81013ad827029c9692552678dc' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\ucenter\\mechanic\\info.html',
      1 => 1499396406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227045ad5631741aba3-97194092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mechanic' => 0,
    'MEMBER' => 0,
    'request' => 0,
    'pager' => 0,
    'OTOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad563175c4893_04318393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad563175c4893_04318393')) {function content_5ad563175c4893_04318393($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_function_widget')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="ucenter_t">
    <ul>
        <li class="on"><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/mechanic:info'),$_smarty_tpl);?>
">资料设置</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/mechanic:attr'),$_smarty_tpl);?>
">属性设置</a></li>
        <?php if ($_smarty_tpl->tpl_vars['mechanic']->value['name']){?> <p class="refresh de_refresh"><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/mechanic:refresh','http'=>'ajax'),$_smarty_tpl);?>
" mini-load="刷新排名"  mini-width="400">刷新排名</a><span>最新刷新时间为：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['mechanic']->value['flushtime']);?>
</span></p><?php }?>
    </ul>
</div>
<div class="ucenter_c">
<form action="<?php echo smarty_function_link(array('ctl'=>'ucenter/mechanic:info'),$_smarty_tpl);?>
" mini-form="ucenter" method="post" ENCTYPE="multipart/form-data">
<table cellspacing="0" cellpadding="0" class="form">
	<tr><th>名称：</th><td><input type="text" name="data[name]" value="<?php echo $_smarty_tpl->tpl_vars['mechanic']->value['name'];?>
" class="input w-300"/></td></tr>
    <tr><th class="w-100">地区：</th>
        <td><?php if ($_smarty_tpl->tpl_vars['mechanic']->value['city_id']){?><b class="blue"><?php echo $_smarty_tpl->tpl_vars['mechanic']->value['city_name'];?>
</b>&nbsp;&nbsp;&nbsp;
            <select name="data[area_id]" class="select w-150"><?php echo smarty_function_widget(array('id'=>"data/area",'value'=>$_smarty_tpl->tpl_vars['mechanic']->value['area_id'],'city_id'=>$_smarty_tpl->tpl_vars['mechanic']->value['city_id']),$_smarty_tpl);?>
</select>
            <?php }else{ ?>
            <?php echo smarty_function_widget(array('id'=>"data/region",'city_id'=>(($tmp = @$_smarty_tpl->tpl_vars['MEMBER']->value['city_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['request']->value['city_id'] : $tmp),'class'=>"select w-150"),$_smarty_tpl);?>

            <?php }?>
        </td>        
    </tr>
    <tr><th>联系电话：</th><td><input type="text" name="data[mobile]" value="<?php echo $_smarty_tpl->tpl_vars['mechanic']->value['mobile'];?>
" class="input w-300"/></td></tr>
    <tr><th>联系QQ：</th><td><input type="text" name="data[qq]" value="<?php echo $_smarty_tpl->tpl_vars['mechanic']->value['qq'];?>
" class="input w-300"/></td></tr>
    <tr><th>个人简介：</th><td><textarea name="data[about]" kindeditor="full" style="width:700px;height:350px;"><?php echo $_smarty_tpl->tpl_vars['mechanic']->value['about'];?>
</textarea></td></tr>
    <tr><th></th><td><input type="submit" value="保存" class="green_btn" /></td></tr>
</table>
</form>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/kindeditor/kindeditor.js"></script>
<script type="text/javascript">
(function(K, $){
var editor = KindEditor.create('textarea[kindeditor]',{uploadJson : '<?php echo smarty_function_link(array('ctl'=>"magic:editorupload",'http'=>"base"),$_smarty_tpl);?>
', extraFileUploadParams:{OTOKEN:"<?php echo $_smarty_tpl->tpl_vars['OTOKEN']->value;?>
"}});
$("select[name='data[city_id]']").live('change', function(){
    var city_id = $(this).val();
    if(!city_id){return false;}
    var link = "<?php echo smarty_function_link(array('ctl'=>'magic:area','arg0'=>'#city_id#','http'=>true),$_smarty_tpl);?>
"
    $.getJSON(link.replace("#city_id#", city_id), function(ret){
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
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>