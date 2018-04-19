<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 13:45:16
         compiled from "admin:config/access.html" */ ?>
<?php /*%%SmartyHeaderCode:81325ad589ec33b220-18448736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4935251978a50107ac4fb781f134063a6fed343d' => 
    array (
      0 => 'admin:config/access.html',
      1 => 1435917552,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '81325ad589ec33b220-18448736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad589ec5d7241_88456040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad589ec5d7241_88456040')) {function content_5ad589ec5d7241_88456040($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"></td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
<h4 class="tip-notice">注册访问</h4>
<form action="?system/config-access.html" mini-form="config-form" method="post" >
<input type="hidden" name="K" value="access" />
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr><th>可注册类型：</th>
    <td>
        <label><input type="checkbox" name="config[signup_type][member]" value="member" <?php if ($_smarty_tpl->tpl_vars['config']->value['signup_type']['member']){?>checked="checked"<?php }?>/>业主</label>
        <label style="margin-left:30px;"><input type="checkbox" name="config[signup_type][company]" value="company" <?php if ($_smarty_tpl->tpl_vars['config']->value['signup_type']['company']){?>checked="checked"<?php }?>/>公司</label>
        <label style="margin-left:30px;"><input type="checkbox" name="config[signup_type][gz]" value="gz" <?php if ($_smarty_tpl->tpl_vars['config']->value['signup_type']['gz']){?>checked="checked"<?php }?>/>工长</label>
        <label style="margin-left:30px;"><input type="checkbox" name="config[signup_type][designer]" value="designer" <?php if ($_smarty_tpl->tpl_vars['config']->value['signup_type']['designer']){?>checked="checked"<?php }?>/>设计师</label>
        <label style="margin-left:30px;"><input type="checkbox" name="config[signup_type][mechanic]" value="mechanic" <?php if ($_smarty_tpl->tpl_vars['config']->value['signup_type']['mechanic']){?>checked="checked"<?php }?>/>技工</label>
        <label style="margin-left:30px;"><input type="checkbox" name="config[signup_type][shop]" value="shop" <?php if ($_smarty_tpl->tpl_vars['config']->value['signup_type']['shop']){?>checked="checked"<?php }?>/>商家</label>
    </td>
</tr>
<tr><th>注册限制：</th>
    <td>
        <input type="text" name="config[signup_count]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['signup_count'])===null||$tmp==='' ? '10' : $tmp);?>
" class="input w-100"/>
        <span class="tip-comment">同一IP24小时可以注册的帐户数, 0:不限制</span>
    </td>
</tr>
<tr><th>注册间隔：</th>
    <td>
        <input type="text" name="config[signup_time]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['signup_time'])===null||$tmp==='' ? '10' : $tmp);?>
" class="input w-100"/>
        <span class="tip-comment">同一IP注册帐户的时间隔(分钟), 0:不限制</span>
    </td>
</tr>
<tr><th>保留用户名：</th>
    <td>
        <textarea name="config[retain_uname]" class="textarea w-300"><?php echo $_smarty_tpl->tpl_vars['config']->value['retain_uname'];?>
</textarea>
        <span class="tip-comment">保留的用户名，一行一个，支持通配符(*)</span>
    </td>
</tr>
<tr><th>限制访问IP：</th>
    <td>
        <textarea name="config[denyip]" class="textarea w-300"><?php echo $_smarty_tpl->tpl_vars['config']->value['denyip'];?>
</textarea>
        <span class="tip-comment">限制访问IP，一行一个，支持通配符(*)</span>
    </td>
</tr>
<tr><th>短信限制：</th>
    <td>
        <input type="text" name="config[mobile_count]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['mobile_count'])===null||$tmp==='' ? '10' : $tmp);?>
" class="input w-100"/>
        <span class="tip-comment">同一IP24小时可以接收短信数，0:不限制</span>
    </td>
</tr>
<tr><th>短信间隔：</th>
    <td>
        <input type="text" name="config[mobile_time]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['mobile_time'])===null||$tmp==='' ? '10' : $tmp);?>
" class="input w-100"/>
        <span class="tip-comment">同一IP接收短信的时间隔(分钟), 0:不限制</span>
    </td>
</tr>
<tr><th>招标限制：</th>
    <td>
        <input type="text" name="config[tender_count]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['tender_count'])===null||$tmp==='' ? '10' : $tmp);?>
" class="input w-100"/>
        <span class="tip-comment">同一IP24小时可以可以发布招标数, 0:不限制</span>
    </td>
</tr>
<tr><th>招标间隔：</th>
    <td>
        <input type="text" name="config[tender_time]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value['tender_time'])===null||$tmp==='' ? '5' : $tmp);?>
" class="input w-100"/>
        <span class="tip-comment">同一IP发布招标的时间隔(分钟), 0:不限制</span>
    </td>
</tr>
<tr>
    <th>开启验证码：</th>
    <td>
        <label><input type="checkbox" name="config[verifycode][signup]" value="signup" <?php if ($_smarty_tpl->tpl_vars['config']->value['verifycode']['signup']){?>checked="checked"<?php }?>/>注册帐号</label>
        <label style="margin-left:30px;"><input type="checkbox" name="config[verifycode][login]" value="login" <?php if ($_smarty_tpl->tpl_vars['config']->value['verifycode']['login']){?>checked="checked"<?php }?>/>登录帐号</label>
        <label style="margin-left:30px;"><input type="checkbox" name="config[verifycode][admin]" value="admin" <?php if ($_smarty_tpl->tpl_vars['config']->value['verifycode']['admin']){?>checked="checked"<?php }?>/>后台登录</label>
        
        <label style="margin-left:30px;"><input type="checkbox" name="config[verifycode][yuyue]" value="yuyue" <?php if ($_smarty_tpl->tpl_vars['config']->value['verifycode']['yuyue']){?>checked="checked"<?php }?>/>预约</label>
        <label style="margin-left:30px;"><input type="checkbox" name="config[verifycode][comment]" value="comment" <?php if ($_smarty_tpl->tpl_vars['config']->value['verifycode']['comment']){?>checked="checked"<?php }?>/>评论</label>
        <label style="margin-left:30px;"><input type="checkbox" name="config[verifycode][ask]" value="ask" <?php if ($_smarty_tpl->tpl_vars['config']->value['verifycode']['ask']){?>checked="checked"<?php }?>/>问答</label>
        <label style="margin-left:30px;"><input type="checkbox" name="config[verifycode][tender]" value="ask" <?php if ($_smarty_tpl->tpl_vars['config']->value['verifycode']['tender']){?>checked="checked"<?php }?>/>招标</label>
    </td>
</tr>
<tr>
    <th>关闭站点：</th>
    <td>
        <label><input type="radio" name="config[closed]" <?php if ($_smarty_tpl->tpl_vars['config']->value['closed']){?>checked="checked"<?php }?> value="1" >是</label>
        <label style="margin-left:30px;"><input type="radio" name="config[closed]" <?php if (!$_smarty_tpl->tpl_vars['config']->value['closed']){?>checked="checked"<?php }?> value="0" >否</label>
    </td>
</tr>
<tr id="tr_closed_reason"<?php if (!$_smarty_tpl->tpl_vars['config']->value['closed']){?>style="display:none;"<?php }?>>
    <th>关闭原因：</th>
    <td><textarea name="config[closed_reason]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['closed_reason'];?>
</textarea></td>
</tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form>
</div>
<script type="text/javascript">
(function(K, $){
    $("input[name='config[closed]']").on('click', function(){
        if($(this).val() == 1){
            $("#tr_closed_reason").show();
        }else{
            $("#tr_closed_reason").hide();
        }
    });
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>