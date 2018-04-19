<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 11:50:15
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\ucenter\shop\gmsm.html" */ ?>
<?php /*%%SmartyHeaderCode:257835ac99177345d74-60256290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dde0bc7b025418d7c790d420fd66e17558107f5' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\ucenter\\shop\\gmsm.html',
      1 => 1429266550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257835ac99177345d74-60256290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'shop_no_open' => 0,
    'shop' => 0,
    'pager' => 0,
    'OTOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac9917742c7f4_29952087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac9917742c7f4_29952087')) {function content_5ac9917742c7f4_29952087($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="ucenter_t">
    <ul>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:base'),$_smarty_tpl);?>
" >基本设置</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:info'),$_smarty_tpl);?>
">资料设置</a></li>
        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['domain']['shop']){?>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:domain'),$_smarty_tpl);?>
">个性域名</a></li>
        <?php }?>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:seo'),$_smarty_tpl);?>
">SEO设置</a></li>
        <li class="on"><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:gmsm'),$_smarty_tpl);?>
">购买说明</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/banner:index'),$_smarty_tpl);?>
">轮转广告</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:skin'),$_smarty_tpl);?>
">店铺模板</a></li>  
    </ul>
</div>
<div class="ucenter_c">
<?php if ($_smarty_tpl->tpl_vars['shop_no_open']->value){?><div class="tips"><span class="notice">您还没有开通商铺，请先填写商铺资料</span></div><?php }?>
<form action="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:gmsm'),$_smarty_tpl);?>
" mini-form="ucenter" method="post" ENCTYPE="multipart/form-data">
<table cellspacing="0" cellpadding="0" class="form">
   <tr><th><span class="red">*</span>商铺标题：</th><td><b class="blue"><?php echo $_smarty_tpl->tpl_vars['shop']->value['title'];?>
</b></td></tr>
    <tr><th>订购须知：</th><td><textarea name="data[dgxz]" kindeditor="simple" style="width:700px;height:350px;"><?php echo $_smarty_tpl->tpl_vars['shop']->value['dgxz'];?>
</textarea></td></tr>
    <tr><th>配送安装：</th><td><textarea name="data[psaz]" kindeditor="simple" style="width:700px;height:350px;"><?php echo $_smarty_tpl->tpl_vars['shop']->value['psaz'];?>
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