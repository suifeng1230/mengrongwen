<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 17:42:22
         compiled from "admin:member/member/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:234245ac49dfe174846-45015719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '769dd7486d754de20dd36401ffd2957c30c7a87f' => 
    array (
      0 => 'admin:member/member/edit.html',
      1 => 1490151319,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '234245ac49dfe174846-45015719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac49dfe24b5f3_28302361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac49dfe24b5f3_28302361')) {function content_5ac49dfe24b5f3_28302361($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_function_YMD')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.YMD.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.YMD.js"></script>
<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"member/member:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<form action="?member/member-edit.html" mini-form="member-form" method="post" ENCTYPE="multipart/form-data">
<input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['uid'];?>
" />
<div class="page-data">
<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
    <li><a href="#table-info">基本信息</a></li>
    <li><a href="#member-avatar">用户头像</a></li>
</ul>
<table width="100%" border="0" cellspacing="0" id="table-info" class="table-data form">
<tr><th><span class="red">*</span>帐号：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['uname'];?>
</td></tr>
<tr><th><span class="red">*</span>邮箱：</th><td><input type="text" name="data[mail]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['mail'];?>
" class="input w-200"/></td></tr>
<tr><th><span class="red">*</span>密码：</th><td><input type="text" name="data[passwd]" value="******" class="input w-200"/><span class="tip-comment">不想修改密码保持不变</span></td></tr>
<tr><th>手机：</th><td><input type="text" name="data[mobile]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['mobile'];?>
" class="input w-200"/></td></tr>
<tr><th>城市：</th><td><select name="data[city_id]" class="select w-100"><?php echo smarty_function_widget(array('id'=>"data/city",'value'=>$_smarty_tpl->tpl_vars['detail']->value['city_id']),$_smarty_tpl);?>
</select></td></tr>  
<tr><th><span class="red">*</span>类型：</th><td><select name="data[from]" class="w-100"><?php echo smarty_function_widget(array('id'=>"member/from",'value'=>$_smarty_tpl->tpl_vars['detail']->value['from']),$_smarty_tpl);?>
</select></td>
<tr><th>等级：</th><td><select name="data[group_id]" class="w-100"><?php echo smarty_function_widget(array('id'=>"member/group",'from'=>$_smarty_tpl->tpl_vars['detail']->value['from'],'value'=>$_smarty_tpl->tpl_vars['detail']->value['group_id']),$_smarty_tpl);?>
</select></td>
<tr><th>生日：</th><td><?php echo smarty_function_YMD(array('name'=>"data",'Y'=>$_smarty_tpl->tpl_vars['detail']->value['Y'],'M'=>$_smarty_tpl->tpl_vars['detail']->value['M'],'D'=>$_smarty_tpl->tpl_vars['detail']->value['D']),$_smarty_tpl);?>
</td></tr>
<tr><th>真实姓名：</th><td><input type="text" name="data[realname]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['realname'];?>
" class="input w-200"/></td></tr>
<tr><th>邮箱验证：</th>
    <td>
        <ul class="group-list">
            <li style="width:80px;"><label><input type="radio" name="data[verify_mail]" value="0"<?php if (!$_smarty_tpl->tpl_vars['detail']->value['verify_mail']){?>checked<?php }?> />未认证</label></li>
            <li style="width:80px;"><label><input type="radio" name="data[verify_mail]" value="1"<?php if ($_smarty_tpl->tpl_vars['detail']->value['verify_mail']){?>checked<?php }?> />已认证</label></li>
        </ul>
    </td>
</tr>
<tr><th>手机验证：</th>
    <td>
        <ul class="group-list">
            <li style="width:80px;"><label><input type="radio" name="data[verify_mobile]" value="0"<?php if (!$_smarty_tpl->tpl_vars['detail']->value['verify_mobile']){?>checked<?php }?> />未认证</label></li>
            <li style="width:80px;"><label><input type="radio" name="data[verify_mobile]" value="1"<?php if ($_smarty_tpl->tpl_vars['detail']->value['verify_mobile']){?>checked<?php }?> />已认证</label></li>
        </ul>
    </td>
</tr>
<tr><th>状态：</th>
    <td>
        <ul class="group-list">
            <li style="width:80px;"><label><input type="radio" name="data[closed]" value="0"<?php if (!$_smarty_tpl->tpl_vars['detail']->value['closed']){?>checked<?php }?> />正常</label></li>
            <li style="width:80px;"><label><input type="radio" name="data[closed]" value="1"<?php if ($_smarty_tpl->tpl_vars['detail']->value['closed']==1){?>checked<?php }?> />禁言</label></li>
            <li style="width:80px;"><label><input type="radio" name="data[closed]" value="2"<?php if ($_smarty_tpl->tpl_vars['detail']->value['closed']==2){?>checked<?php }?> />锁定</label></li>
        </ul>
    </td>
</tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
<div id="member-avatar" style="height:500px;width:700px;margin:10px auto auto 20px;"></div>
</div>
</form>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.avatar.js"></script>
<script type="text/javascript">
(function(K, $){
$("div.page-data").tabs();
$("#member-avatar").Avatar({"uid":"<?php echo $_smarty_tpl->tpl_vars['detail']->value['uid'];?>
","upload":"?member/member-face.html","face":"<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['face'];?>
"});
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>