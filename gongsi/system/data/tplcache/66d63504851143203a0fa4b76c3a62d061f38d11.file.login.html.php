<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 19:57:19
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\mobile\passport\login.html" */ ?>
<?php /*%%SmartyHeaderCode:66315ad5e11f78be56-15410474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66d63504851143203a0fa4b76c3a62d061f38d11' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\mobile\\passport\\login.html',
      1 => 1500629535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66315ad5e11f78be56-15410474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5e11f8a1415_50006086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5e11f8a1415_50006086')) {function content_5ad5e11f8a1415_50006086($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["tpl_page_title"] = new Smarty_variable("登录页", null, 0);?>
<?php $_smarty_tpl->tpl_vars["seo_sub_title"] = new Smarty_variable("登录页", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pding login_cont">
	<form id='login-form' class="login_form mb10">
		<table>
			<tr>
				<td class="pro">
					<span class="loginIo loginIo1"></span><input type="text" name="data[uname]" class="text full" placeholder="请输入用户名" />
				</td>
			</tr>
			<tr>
				<td class="pro">
					<span class="loginIo loginIo2"></span><input type="password" name="data[passwd]" class="text full" placeholder="请输入密码"  />
				</td>
			</tr>
			<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['access']['verifycode']['login']){?>
			<tr>
				<td>
					<input class="text short lt" type="text" name="verifycode" placeholder="请输入验证码"/>
					<div class="rt yanzh"><img verify="#pass-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" id="pass-verify"/></div>
				</td>
			</tr>
			<?php }?>
		</table>
		<label class="rt">
			<input type="checkbox" name="keep" class="check" />
			30天之内自动登录</label>
		<a  href="#" id='login-btn' class="btn subbtn_full">立即登录</a>
	</form>
	<p>第三方账号登录：</p>
	<div class="other_login"> <a href="<?php echo smarty_function_link(array('ctl'=>'mobile/passport:qqlogin'),$_smarty_tpl);?>
" class="qq_login"> <span class="app_ico qq_login_ico lt"></span> <span class="text">QQ账号登录</span> </a> <a href="<?php echo smarty_function_link(array('ctl'=>'mobile/passport:weibo'),$_smarty_tpl);?>
" class="weibo_login"> <span class="app_ico weibo_login_ico lt"></span> <span class="text">微博账号登录</span> </a> </div>
	<p>没有账号？<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/passport:signup'),$_smarty_tpl);?>
" class="fontcl2">立即注册</a></p>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $("#login-btn").click(function(){
        $.post('<?php echo smarty_function_link(array('ctl'=>"mobile/passport:login"),$_smarty_tpl);?>
',$("#login-form").serialize(),function(ret){
            if(ret.error){
                 Widget.MsgBox.error(ret.message.join(","));
            }else{
                window.location="<?php echo smarty_function_link(array('ctl'=>'mobile/ucenter/index'),$_smarty_tpl);?>
";
            }
        },'json');
    });        
});
</script> 
<script>
$("[verify]").click(function(){
	$($(this).attr("verify")).attr("src", "<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_"+Math.random());
});
</script> 
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>