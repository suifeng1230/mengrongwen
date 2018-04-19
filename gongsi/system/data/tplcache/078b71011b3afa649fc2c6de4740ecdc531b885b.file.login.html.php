<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:42:46
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\passport\login.html" */ ?>
<?php /*%%SmartyHeaderCode:88065ad55116d6b290-94020560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '078b71011b3afa649fc2c6de4740ecdc531b885b' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\passport\\login.html',
      1 => 1498806461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88065ad55116d6b290-94020560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'pager' => 0,
    'wxlogin_jsqr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55116e9fc62_34217399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55116e9fc62_34217399')) {function content_5ad55116e9fc62_34217399($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["seo_sub_title"] = new Smarty_variable("会员登录", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subwd">
	<!--主体内容开始-->
	<div class="login_box">
		<div class="login_lt lt">
		<h2><font id='form' class="on">会员登录</font><font id='form2'>业主手机登录</font></h2>
		<form  id="account-form" action="<?php echo smarty_function_link(array('ctl'=>'passport:login','http'=>'ajax'),$_smarty_tpl);?>
" method="post" mini-form="login">
			<table>
				<tr>
					<td class="title">用户名</td>
					<td class="middle">
						<p class="input"><span class="ico_list username_ico lt"></span>
							<input class="text lt"  name="account[uname]" type="text" placeholder="请输入您的用户名" />
						</p>
					</td>
					<td></td>
				</tr>
				<tr>
					<td class="title">密码</td>
					<td class="middle">
						<p class="input"><span class="ico_list password_ico lt"></span>
							<input class="text lt" name="account[passwd]" type="password" placeholder="请输入您的用户密码" />
						</p>
					</td>
					<td></td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['access']['verifycode']['login']){?>
				<tr>
					<td class="title">验证码</td>
					<td class="middle">
						<p class="input short lt">
							<span class="ico_list yanzheng_ico"></span>
							<input class="text short" type="text" name="verifycode" placeholder="请输入验证码"/>
						</p>
						<div class="rt"><img verify="#pass-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" id="pass-verify"/></div>
				</td>
				<td></td>
				</tr>
				<?php }?>
				<tr>
					<td></td>
					<td class="middle">
						<label class="lt">
						<input type="checkbox" class="check" />
						30天之内自动登录</label>
						<a class="fontcl2 rt"  href="<?php echo smarty_function_link(array('ctl'=>'passport:forgot'),$_smarty_tpl);?>
">忘记密码？</a>
					</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td class="middle"><input type="submit" class="btn" value="立即登录" /></td>
					<td></td>
				</tr>
			</table>
		</form>
        
         <form id="account-form2" style="display:none">
            <input type="hidden" name="account[from]" value="<?php echo $_smarty_tpl->tpl_vars['pager']->value['from'];?>
" />
			<table>
				<tr>
					<td class="title">手机号码</td>
					<td class="middle"><p class="input"><span class="new_icon tel_ico lt"></span><input class="input text" name="data[phone]" type="text" id="phone" placeholder="请输入您的手机号码"/></p></td>
					<td><div id="unameTip" style="width:240px;margin-top:-18px;"></div></td>
				</tr>
				
				<tr>
					<td class="title">验证码</td>
					<td class="middle">
                    <p class="input short lt" style="width:160px;"><span class="ico_list yanzheng_ico"></span><input class="text short"  style="width:100px;" name="data[code]" type="text" placeholder="请输入验证码"/></p>
                     <span id='code'  class="goYz"><a id='show_loading' class="none pointcl">...</a><a login="passport:sendsms" class="pointcl">发送验证码</a></span>
                    </td>
					
				</tr>
               
				<tr>
					<td></td>
					<td class="middle"><input type="submit" action="<?php echo smarty_function_link(array('ctl'=>'passport:byphone','arg0'=>'member','http'=>'ajax'),$_smarty_tpl);?>
" mini-submit="#account-form2" class="btn" value="立即注册" /></td>
					<td></td>
				</tr>
			</table>
			</form>
	</div>
	<div class="login_rt rt">

		<h2>没有账号？<a href="<?php echo smarty_function_link(array('ctl'=>'passport:reg'),$_smarty_tpl);?>
" class="fontcl2">立即注册</a></h2>
		<?php if (false&&$_smarty_tpl->tpl_vars['wxlogin_jsqr']->value){?>
		<div id="wxlogin_jsqr" style="width:240px;height:240px;background-color:#DDD;"></div>
		<script src="http://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script>
		<?php echo $_smarty_tpl->tpl_vars['wxlogin_jsqr']->value;?>

		<?php }else{ ?>
		<img src="/themes/default/static/images/login_img.jpg" />
		<?php }?>
		<h3>第三方账号登录：</h3>
		<a href="<?php echo smarty_function_link(array('ctl'=>'passport:qqlogin'),$_smarty_tpl);?>
" class="login_qq hl_icon" title="QQ登录"></a>
		<a href="<?php echo smarty_function_link(array('ctl'=>'passport:weibo'),$_smarty_tpl);?>
" class="login_weibo hl_icon" title="微博登录"></a>
		<a href="<?php echo smarty_function_link(array('ctl'=>'passport:weixin','http'=>'ajax'),$_smarty_tpl);?>
" mini-width="350" mini-load="请使用微信扫描二维码登录" class="login_weixin hl_icon"  title="微信登录"></a>
		<a href="<?php echo smarty_function_link(array('ctl'=>'passport:wxlogin'),$_smarty_tpl);?>
"class="login_weixin hl_icon"  title="微信登录"></a>
	</div>
	<div class="cl"></div>
</div>
<!--主体内容结束-->
</div>
<!--底边内容开始-->

<script>
(function(K, $){
$("[verify]").click(function(){
	$($(this).attr("verify")).attr("src", "<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_"+Math.random());
});		 
 $("#form").click(function(){
		$(this).addClass('on'); ;	
		$("#form2").removeClass('on');				   
		$("#account-form2").hide();
		$("#account-form").show();
 });
  $("#form2").click(function(){
		$(this).addClass('on'); ;	
		$("#form").removeClass('on');
		$("#account-form").hide();
		$("#account-form2").show();
 });
 $("[login]").click(function(e){
	var link = "<?php echo smarty_function_link(array('ctl'=>'passport/sendsms','arg0'=>'#phone#','http'=>'base'),$_smarty_tpl);?>
";
	var phone = $("#phone").val();
	var last_time = 60;
	var __interval = null;
	$.getJSON(link.replace("#phone#", phone), function(ret){
		if(ret.error){
			Widget.MsgBox.error(ret.message.join(""));
		}else{
			__interval = setInterval(function(){
				last_time --;
				if(last_time >0){
					$("#show_loading").html("重新获取（"+last_time+"）秒").show();
					$("[login]").hide();
				}else{
					clearInterval(__interval);
					last_time = 60;
					$("#show_loading").hide();
					$("[login]").show();
				}
			}, 1000);
		}
	});
});
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>