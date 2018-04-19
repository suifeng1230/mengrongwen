<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 14:20:46
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\ucenter\member\bindaccount.html" */ ?>
<?php /*%%SmartyHeaderCode:156875ac9b4be131d07-82279699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fc036ae68ac29be630b7ddb0903d4ad2ffadc08' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\ucenter\\member\\bindaccount.html',
      1 => 1444841744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156875ac9b4be131d07-82279699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MEMBER' => 0,
    'CONFIG' => 0,
    'qq_bind' => 0,
    'wb_bind' => 0,
    'wxlogin_bind' => 0,
    'admin_weixin' => 0,
    'member_wechat' => 0,
    'wechat_bind_qr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac9b4be27bca1_18662592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac9b4be27bca1_18662592')) {function content_5ac9b4be27bca1_18662592($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="ucenter_t">
	<ul>
		<li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:bindaccount'),$_smarty_tpl);?>
">绑定帐号</a></li>
	</ul>
</div>
<div class="ucenter_c">	
    <div class="tips"><span class="notice"><?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['verify_mail']){?>您的邮箱已经认证，更换后需要重新认证<?php }else{ ?>您还没有验证邮箱，<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/verify:mail','arg0'=>'verify'),$_smarty_tpl);?>
" mini-act="立即验证邮箱" class="pbtn">立即验证邮箱</a><?php }?></span></div>
    <form id="account-form">
    <table cellspacing="0" cellpadding="0" class="form">
        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['connect']['qq_is_open']){?>
        <tr><th>腾讯QQ：</th><td>
            <?php if ($_smarty_tpl->tpl_vars['qq_bind']->value){?>
            <b class="blue">已绑定</b>
            <?php }else{ ?>
            <p><a href="<?php echo smarty_function_link(array('ctl'=>'passport:qqlogin','arg0'=>'bind'),$_smarty_tpl);?>
" class="ico_list qq_login" style="width: 140px;height: 32px;margin: 5px 0px;background-position: -301px -32px"></a></p>
            <?php }?>
            </td>
        </tr>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['connect']['weibo_is_open']){?>
        <tr><th>新浪微博：</th><td>
            <?php if ($_smarty_tpl->tpl_vars['wb_bind']->value){?>
            <b class="blue">已绑定</b>
            <?php }else{ ?>
            <p><a href="<?php echo smarty_function_link(array('ctl'=>'passport:weibo','arg0'=>'bind'),$_smarty_tpl);?>
" class="ico_list weibo_login" style="width: 140px;height: 32px;margin: 5px 0px;background-position: -301px 0px;"></a></p>
            <?php }?>
            </td>
        </tr>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['connect']['weixin_is_open']){?>
        <tr><th>微信：</th><td>
            <?php if ($_smarty_tpl->tpl_vars['wxlogin_bind']->value){?>
            <b class="blue">已绑定</b>
            <?php }else{ ?>
            <p><a href="<?php echo smarty_function_link(array('ctl'=>'passport:wxlogin','arg0'=>'bind'),$_smarty_tpl);?>
" class="ico_listwx weixin_login" style="width: 140px;height: 32px;margin: 5px 0px;"></a></p>
            <?php }?>
            </td>
        </tr>
        <?php }?>
       <!-- <?php if ($_smarty_tpl->tpl_vars['admin_weixin']->value&&$_smarty_tpl->tpl_vars['admin_weixin']->value['type']==1){?>
        <tr><th>微信：</th><td>
            <?php if ($_smarty_tpl->tpl_vars['member_wechat']->value){?><b class="blue">已绑定</b>
            <?php }elseif($_smarty_tpl->tpl_vars['wechat_bind_qr']->value){?><img src="<?php echo $_smarty_tpl->tpl_vars['wechat_bind_qr']->value;?>
" width="200"/><br />扫描绑定微信帐号 
            <?php }?>
            </td>
        </tr>
        <?php }?>
    --></table>
    </form>
</div>
<!--//右面下开始-->
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>