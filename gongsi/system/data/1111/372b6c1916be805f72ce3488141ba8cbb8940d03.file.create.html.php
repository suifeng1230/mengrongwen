<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 11:50:59
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\ucenter\shop\news\create.html" */ ?>
<?php /*%%SmartyHeaderCode:215405ac991a3a63f98-85422174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '372b6c1916be805f72ce3488141ba8cbb8940d03' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\ucenter\\shop\\news\\create.html',
      1 => 1429266550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215405ac991a3a63f98-85422174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group' => 0,
    'detail' => 0,
    'pager' => 0,
    'OTOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac991a3b90952_16158002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac991a3b90952_16158002')) {function content_5ac991a3b90952_16158002($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="ucenter_t">
    <ul><li class="on">添加资讯</li></ul>
    <span class="r"><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/news:index'),$_smarty_tpl);?>
" class="pbtn">商铺资讯管理</a></span>
</div>
<div class="ucenter_c">
<?php if ($_smarty_tpl->tpl_vars['group']->value['priv']['allow_news']<0){?>
    <div class="tips"><span class="lock">您是【<b class="red"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
</b>】没有权限添加商铺资讯</span></div>
<script type="text/javascript">
(function(K, $){$("[mini-form] input").attr("disabled", "disabled");})(window.KT, window.jQuery);
</script>
<?php }elseif(!$_smarty_tpl->tpl_vars['group']->value['priv']['allow_news']){?>
    <div class="tips"><span class="notice">您是【<b class="red"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
</b>】添加商铺资讯需要审核</span></div>
<?php }?>
<form action="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/news:create'),$_smarty_tpl);?>
" mini-form="shop-form" method="post">
<table cellspacing="0" cellpadding="0" class="form">
    <tr><th><span class="red">*</span>标题：</th><td><input type="text" name="data[title]" value="" class="input w-400"/></td></tr>
    <tr><th>内容：</th><td><textarea name="data[content]" kindeditor="full" style="width:700px;height:350px;"><?php echo $_smarty_tpl->tpl_vars['detail']->value['content'];?>
</textarea><br /></td></tr>
    <tr><th></th><td><?php if ($_smarty_tpl->tpl_vars['group']->value['priv']['allow_news']<0){?><input type="button" value="没有权限" disabled="disabled" class="mpbtn" /><?php }else{ ?><input type="submit" value="提交数据" class="green_btn" /><?php }?></td></tr>
</table>
</form>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/kindeditor/kindeditor.js"></script>
<script type="text/javascript">
(function(K, $){
<?php if ($_smarty_tpl->tpl_vars['group']->value['priv']['allow_news']<0){?>
var editor = KindEditor.create('textarea[kindeditor]',{readonlyMode : true});
$("[mini-form] input,[mini-form] select,[mini-form] textarea").attr("disabled", "disabled");
<?php }else{ ?>
var editor = KindEditor.create('textarea[kindeditor]',{uploadJson : '<?php echo smarty_function_link(array('ctl'=>"magic:editorupload"),$_smarty_tpl);?>
', extraFileUploadParams:{OTOKEN:"<?php echo $_smarty_tpl->tpl_vars['OTOKEN']->value;?>
"}});
<?php }?>
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>