<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 18:42:49
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\passport\forgot.html" */ ?>
<?php /*%%SmartyHeaderCode:261835ad5cfa9376403-74960862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf07d6565258b18e96434d18871a81df417593d0' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\passport\\forgot.html',
      1 => 1498806461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261835ad5cfa9376403-74960862',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5cfa9435ab1_47999061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5cfa9435ab1_47999061')) {function content_5ad5cfa9435ab1_47999061($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["seo_sub_title"] = new Smarty_variable("会员登录", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subwd">
	<!--主体内容开始-->
	<div class="login_box">
		<div class="login_lt lt">
		<h2>找回密码</h2>
		<div class="passport_for">
			<div class="passport_for_liuc liuc1"></div>
			<ul class="for_liuc">
				<li class="current">确认账号</li><li>安全认证</li><li>重置密码</li>
			</ul>
		</div>
		<div class="pass_for_form">
			<form id="forgot-form">
				<table>
					<tr class="zh">
						<td><b class="tit">邮箱：</b></td>
						<td><input type="text" name="forgotmail" class="text" placeholder="请输入注册时的邮箱" /></td>
					</tr>
					<tr class="zh">
						<td></td>
						<td class="graycl">我们将发送重置密码邮件到你的邮箱</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="button" action="<?php echo smarty_function_link(array('ctl'=>'passport:forgot','http'=>'ajax'),$_smarty_tpl);?>
" mini-submit="#forgot-form" class="btn" value="下一步" /></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<div class="login_rt rt">
		<h2>没有账号？<a href="<?php echo smarty_function_link(array('ctl'=>'passport:reg'),$_smarty_tpl);?>
" class="fontcl2">立即注册</a>
		</h2>
		<img src="/themes/default/static/images/login_img.jpg" />
		<h3>第三方账号登录：</h3>
		<p><a href="<?php echo smarty_function_link(array('ctl'=>'passport:weibo'),$_smarty_tpl);?>
" class="ico_list weibo_login"></a>
		</p>
		<p><a href="<?php echo smarty_function_link(array('ctl'=>'passport:qqlogin'),$_smarty_tpl);?>
" class="ico_list qq_login"></a>
		</p>
	</div>
	<div class="cl"></div>
</div>
<!--主体内容结束-->
</div>
<!--底边内容开始-->
<script>
$("[verify]").click(function(){
	$($(this).attr("verify")).attr("src", "<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_"+Math.random());
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>