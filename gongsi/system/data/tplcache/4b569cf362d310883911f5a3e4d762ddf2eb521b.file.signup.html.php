<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:48:38
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\passport\signup.html" */ ?>
<?php /*%%SmartyHeaderCode:293545ad560864b0d20-98748390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b569cf362d310883911f5a3e4d762ddf2eb521b' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\passport\\signup.html',
      1 => 1498806461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293545ad560864b0d20-98748390',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'short_msg' => 0,
    'CONFIG' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad560866c0329_70428441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad560866c0329_70428441')) {function content_5ad560866c0329_70428441($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
?><?php $_smarty_tpl->tpl_vars["seo_sub_title"] = new Smarty_variable("会员注册", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subwd">
	<!--主体内容开始-->
    <style>#account-form p.input{width:245px;} .register_form table td p input.text{width:240px;}</style>
	<div class="login_box">
		<h2><b class="lt">会员注册</b><span class="rt tit">已有账号？<a href="<?php echo smarty_function_link(array('ctl'=>'passport'),$_smarty_tpl);?>
" class="fontcl2">点击登录</a></span></h2>
		<p class="bar register_two"></p>
		<div class="login_lt register_form lt">
			<h3 class="vipSp">
				<font id='form' class="on"><?php echo $_smarty_tpl->tpl_vars['pager']->value['from_title'];?>
（注册）</font> 
				<?php if ($_smarty_tpl->tpl_vars['pager']->value['from_title']=='业主'){?>
				<span <?php if ($_smarty_tpl->tpl_vars['short_msg']->value=='0'){?>style="display:none"<?php }?>>
					<font id='form2'><?php echo $_smarty_tpl->tpl_vars['pager']->value['from_title'];?>
（手机注册）</font>
				</span>
				<?php }?>
			</h3>
			<form id="account-form">
            <input type="hidden" name="account[from]" value="<?php echo $_smarty_tpl->tpl_vars['pager']->value['from'];?>
" />
			<table>
				<tr>
					<td class="title">用户名</td>
					<td class="middle"><p class="input"><input class="input text" name="account[uname]" type="text" id="uname" placeholder="请输入您的帐户名"/></p></td>
					<td><div id="unameTip" style="width:240px;margin-top:-18px;"></div></td>
				</tr>
				<tr>
					<td class="title">邮箱</td>
					<td class="middle"><p class="input"><input class="text" name="account[mail]" id="mail" type="text" placeholder="请输入您的邮箱" /></p></td>
					<td><div id="mailTip" style="width:240px;margin-top:-18px;"></div></td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['multi_city']){?>
				<tr>
					<td class="title">城市</td>
					<td class="middle"><?php echo smarty_function_widget(array('id'=>"data/region",'name_city'=>"account[city_id]",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'class'=>"text",'level'=>2),$_smarty_tpl);?>
</td>
					<td></td>
				</tr>
				<?php }?>
				<tr>
					<td class="title">密码</td>
					<td class="middle"><p class="input"><input class="text" name="account[passwd]" id="passwd" type="password" placeholder="请输入您的登录密码" /></p></td>
					<td><div id="passwdTip" style="width:240px;margin-top:-18px;"></div></td>
				</tr>
				<tr>
					<td class="title">确认密码</td>
					<td class="middle"><p class="input"><input class="text" name="confirmpasswd" id="confirmpasswd" type="password" placeholder="请再次输入您的登录密码" /></p></td>
					<td><div id="confirmpasswdTip" style="width:240px;margin-top:-18px;"></div></td>
				</tr>
                <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['access']['verifycode']['signup']){?>
				<tr>
					<td class="title">验证码</td>
					<td class="middle">
                    <p class="input short lt" style="width:105px;"><input class="text short"  style="width:100px;" name="verifycode" type="text" placeholder="请输入验证码"/></p><div class="rt"><img verify="#pass-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" id="pass-verify"/></div></td>
					<td><a verify="#pass-verify">点击刷新验证码</a></td>
				</tr>
                <?php }?>
				<tr>
					<td></td>
					<td class="middle"><input type="submit" action="<?php echo smarty_function_link(array('ctl'=>'passport:create','http'=>'ajax'),$_smarty_tpl);?>
" mini-submit="#account-form" class="btn" value="立即注册" /></td>
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
					<td class="middle"><p class="input"><input class="input text" name="data[phone]" type="text" id="phone" placeholder="请输入您的手机号码"/></p></td>
					<td><div id="unameTip" style="width:240px;margin-top:-18px;"></div></td>
				</tr>
				
				<tr>
					<td class="title">验证码</td>
					<td class="middle">
                    <p class="input short lt" style="width:105px;"><input class="text short"  style="width:100px;" name="data[code]" type="text" placeholder="请输入验证码"/></p>
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
		<div class="login_rt register_rt rt">
			<p class="title">当前会员注册类型：</p>
			<p class="lei"><font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['pager']->value['from_title'];?>
</font><a href="<?php echo smarty_function_link(array('ctl'=>'passport:reg'),$_smarty_tpl);?>
">返回重新选择</a></p>
			<h3>第三方账号登录：</h3>
			<a href="<?php echo smarty_function_link(array('ctl'=>'passport:qqlogin'),$_smarty_tpl);?>
" class="login_qq hl_icon" title="QQ登录"></a>
		<a href="<?php echo smarty_function_link(array('ctl'=>'passport:weibo'),$_smarty_tpl);?>
" class="login_weibo hl_icon" title="微博登录"></a>
		<a href="<?php echo smarty_function_link(array('ctl'=>'passport:weixin','http'=>'ajax'),$_smarty_tpl);?>
" mini-width="350" mini-load="请使用微信扫描二维码登录" class="login_weixin hl_icon"  title="微信登录"></a>
		</div>
		<div class="cl"></div>
	</div>
	<!--主体内容结束-->
</div>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/formValidator/formValidator.js"></script>
<script type="text/javascript">
(function(K, $){
$.formValidator.initConfig({formID:"account-form",theme:"ArrowSolidBox",/*submitOnce:true,*/
	onError:function(msg,obj,errorlist){
		Widget.MsgBox.error(msg);
	},
	ajaxPrompt : '有数据正在异步验证，请稍等...'
});
$("#mail").formValidator({onShow:"请输入邮箱",onFocus:"邮箱6-100个字符,输入正确了才能离开焦点",onCorrect:"恭喜你,你输对了"}).inputValidator({min:6,max:100,onError:"你输入的邮箱长度非法,请确认"})
	.regexValidator({regExp:"^([\\w-.]+)@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.)|(([\\w-]+.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(]?)$",onError:"你输入的邮箱格式不正确"}) 
	.ajaxValidator({
		dataType : "json",
		async : true,
		url : "<?php echo smarty_function_link(array('ctl'=>'passport:check','http'=>'ajax'),$_smarty_tpl);?>
",
		success : function(ret){
			if(ret.error){
				return ret.message.join(",");
			}
			return true;
		},
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onError : "该邮箱不可用，请更换邮箱",
		onWait : "正在对邮箱进行合法性校验，请稍候..."
	});
$("#uname").formValidator({onShow:"请输入用户名,",onFocus:"用户名至少5个字符,最多16个字符",onCorrect:"该用户名可以注册"}).inputValidator({min:2,max:16,onError:"你输入的用户名非法,请确认"})
	    .ajaxValidator({
		dataType : "json",
		async : true,
		url : "<?php echo smarty_function_link(array('ctl'=>'passport:check','http'=>'ajax'),$_smarty_tpl);?>
",
		success : function(ret){
			if(ret.error){
				return ret.message.join(",");
			}
			return true;
		},
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onError : "该用户名不可用，请更换用户名",
		onWait : "正在对用户名进行合法性校验，请稍候..."
	});
	$("#passwd").formValidator({onShow:"请输入密码",onFocus:"至少6个长度",onCorrect:"密码合法"}).inputValidator({min:6,empty:{leftEmpty:false,rightEmpty:false,emptyError:"密码两边不能有空符号"},onError:"密码不能为空,请确认"});
	$("#confirmpasswd").formValidator({onShow:"输再次输入密码",onFocus:"至少6个长度",onCorrect:"密码一致"}).inputValidator({min:6,empty:{leftEmpty:false,rightEmpty:false,emptyError:"重复密码两边不能有空符号"},onError:"重复密码不能为空,请确认"}).compareValidator({desID:"passwd",operateor:"=",onError:"2次密码不一致,请确认"});
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
	var link = "<?php echo smarty_function_link(array('ctl'=>'passport:sendsms','arg0'=>'#phone#','http'=>'ajax'),$_smarty_tpl);?>
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