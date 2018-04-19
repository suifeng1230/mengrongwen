<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:47:11
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\passport\reg.html" */ ?>
<?php /*%%SmartyHeaderCode:195265ad5602f339e56-81590909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a166ae9018ff7ed29ed802131fb71a0988562f5' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\passport\\reg.html',
      1 => 1498806461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195265ad5602f339e56-81590909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5602f462c93_53056040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5602f462c93_53056040')) {function content_5ad5602f462c93_53056040($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["seo_sub_title"] = new Smarty_variable("会员注册", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部内容结束-->
<div class="subwd">
	<!--主体内容开始-->
	<div class="login_box">
		<h2><b class="lt">会员注册</b><span class="rt tit">已有账号？<a href="<?php echo smarty_function_link(array('ctl'=>'passport'),$_smarty_tpl);?>
" class="fontcl2">点击登录</a></span></h2>
		<p class="bar register_one"></p>
		<ul class="register_list">
			<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['access']['signup_type']['member']){?><li class="first">
				<p class="tit">业主会员<font class="fontcl2">（注册）</font></p>
				<p>晒晒自己的装修日记，向大家展示自己装修成果，与大家共同分享装修过程。</p>
				<a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup','arg0'=>'member'),$_smarty_tpl);?>
" class="btn btn_main_big">立即注册</a>
			</li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['access']['signup_type']['mechanic']){?><li>
				<p class="tit">装修工人<font class="fontcl2">（注册）</font></p>
				<p>晒晒自己的装修日记，向大家展示自己装修成果，与大家共同分享装修过程。</p>
				<a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup','arg0'=>'mechanic'),$_smarty_tpl);?>
" class="btn btn_main_big">立即注册</a>
			</li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['access']['signup_type']['designer']){?><li>
				<p class="tit">设计师<font class="fontcl2">（注册）</font></p>
				<p>晒晒自己的装修日记，向大家展示自己装修成果，与大家共同分享装修过程。</p>
				<a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup','arg0'=>'designer'),$_smarty_tpl);?>
" class="btn btn_main_big">立即注册</a>
			</li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['access']['signup_type']['gz']){?><li class="first">
				<p class="tit">装修工长<font class="fontcl2">（注册）</font></p>
				<p>晒晒自己的装修日记，向大家展示自己装修成果，与大家共同分享装修过程。</p>
				<a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup','arg0'=>'gz'),$_smarty_tpl);?>
" class="btn btn_main_big shangjia_btn">立即注册</a>
			</li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['access']['signup_type']['company']){?><li>
				<p class="tit">装修公司<font class="fontcl2">（注册）</font></p>
				<p>晒晒自己的装修日记，向大家展示自己装修成果，与大家共同分享装修过程。</p>
				<a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup','arg0'=>'company'),$_smarty_tpl);?>
" class="btn btn_main_big shangjia_btn">立即注册</a>
			</li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['access']['signup_type']['shop']){?><li>
				<p class="tit">建材商家<font class="fontcl2">（注册）</font></p>
				<p>晒晒自己的装修日记，向大家展示自己装修成果，与大家共同分享装修过程。</p>
				<a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup','arg0'=>'shop'),$_smarty_tpl);?>
" class="btn btn_main_big shangjia_btn">立即注册</a>
			</li><?php }?>
		</ul>
	</div>
	<!--主体内容结束-->
</div>
<!--底边内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>