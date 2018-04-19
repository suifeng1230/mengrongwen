<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 14:14:03
         compiled from "admin:weixin/coupon/create.html" */ ?>
<?php /*%%SmartyHeaderCode:307375ac46d2b883405-50865538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e94e13ed25f2f22e49b266a4e7b1c0de8d50789' => 
    array (
      0 => 'admin:weixin/coupon/create.html',
      1 => 1430718894,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '307375ac46d2b883405-50865538',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'detail' => 0,
    'OATOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac46d2b9718b7_02453915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac46d2b9718b7_02453915')) {function content_5ac46d2b9718b7_02453915($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"weixin/coupon:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data"><form action="?weixin/coupon-create.html" mini-form="coupon-form" method="post" ENCTYPE="multipart/form-data">
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr><th>微信号：</th><td><input type="text" name="data[wx_id]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['wx_id'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>关键字：</th><td><input type="text" name="data[keyword]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['keyword'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>标题：</th><td><input type="text" name="data[title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>封面简介：</th><td><textarea name="data[intro]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['detail']->value['intro'];?>
</textarea><br /></td></tr>
<tr><th>封面图片：</th><td><input type="text" name="data[photo]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['photo'];?>
" <?php if ($_smarty_tpl->tpl_vars['detail']->value['photo']){?>photo="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['photo'];?>
"<?php }?> class="input w-300" />&nbsp;&nbsp;&nbsp;<input type="file" name="data[photo]" class="input w-100" /></td></tr>
<tr><th>发布时间：</th><td> <input type="text" name="data[stime]" value="<?php if ($_smarty_tpl->tpl_vars['detail']->value['stime']){?><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['stime'],'Y-m-d');?>
<?php }?>" class="input w-100" date="stime" readonly/> </td></tr>
<tr><th>结束时间：</th><td> <input type="text" name="data[ltime]" value="<?php if ($_smarty_tpl->tpl_vars['detail']->value['ltime']){?><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['ltime'],'Y-m-d');?>
<?php }?>" class="input w-100" date="ltime" readonly/></td></tr>
<tr><th>使用说明：</th><td><input type="text" name="data[use_tips]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['use_tips'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>过期说明：</th><td><input type="text" name="data[end_tips]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['end_tips'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>过期提示图片：</th><td><input type="text" name="data[end_photo]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['end_photo'];?>
" <?php if ($_smarty_tpl->tpl_vars['detail']->value['end_photo']){?>photo="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['end_photo'];?>
"<?php }?> class="input w-300" />&nbsp;&nbsp;&nbsp;<input type="file" name="data[end_photo]" class="input w-100" /></td></tr>
<tr><th>优惠券数量：</th><td><input type="text" name="data[num]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['num'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/><span class="tip-comment">数量</span></td></tr>
<tr><th>每人最多允许获取次数：</th><td><input type="text" name="data[max_count]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['max_count'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>已领取数：</th><td><input type="text" name="data[down_count]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['down_count'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>已使用：</th><td><input type="text" name="data[use_count]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['use_count'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>浏览量：</th><td><input type="text" name="data[views]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['views'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr>
	<th>粉丝状态</th>
	<td>
	<ul class="group-list">
        	<label><input type="radio" name="data[follower_condtion]" checked="checked" value="1"/>关注</label>&nbsp;&nbsp;
            <label><input type="radio" name="data[follower_condtion]" value="0"/>不关注</label>
        </li>
		<div class="clear-both"></div>
	</ul>
	</td>
</tr>

<tr>
	<th>会员要求</th>
	<td>
	<ul class="group-list">
        	<label><input type="radio" name="data[member_condtion]" checked="checked" value="1"/>关注</label>&nbsp;&nbsp;
            <label><input type="radio" name="data[member_condtion]" value="0"/>不关注</label>
        </li>
		<div class="clear-both"></div>
	</ul>
	</td>
</tr>
    <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form></div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.bmap.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/kindeditor/kindeditor.js"></script>
<script type="text/javascript">
(function(K, $){
var editor = KindEditor.create('textarea[kindeditor]',{uploadJson : '?magic/upload-editor.html', extraFileUploadParams:{OATOKEN:"<?php echo $_smarty_tpl->tpl_vars['OATOKEN']->value;?>
"}});
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>