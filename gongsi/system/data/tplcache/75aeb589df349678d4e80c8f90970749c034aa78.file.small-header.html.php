<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:42:46
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\block\small-header.html" */ ?>
<?php /*%%SmartyHeaderCode:165595ad55116eaf669-92422459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75aeb589df349678d4e80c8f90970749c034aa78' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\block\\small-header.html',
      1 => 1499756917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165595ad55116eaf669-92422459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ucenter_header' => 0,
    'pager' => 0,
    'MEMBER' => 0,
    'COOKIE' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad551170efe45_13008398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad551170efe45_13008398')) {function content_5ad551170efe45_13008398($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php echo $_smarty_tpl->getSubTemplate ("block/sheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body class="smallpage">
<iframe id="miniframe" name="miniframe" style="display:none;"></iframe>
<!--头部内容开始-->
<div class="sub_nav">
	<div class="subwd<?php if ($_smarty_tpl->tpl_vars['ucenter_header']->value){?> w1100<?php }?>">
		<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" class="pic lt"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/sub_logo.png" /></a>
		<div class="lt"><a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
">首页</a>
			<a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">我要装修</a>
			<a href="<?php echo smarty_function_link(array('ctl'=>'gs'),$_smarty_tpl);?>
">找装修公司</a>
			<a href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
">找设计师</a>
			<a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">效果图</a>
		</div>
		<div class="rt">
			<?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['uid']){?>
			<ul class="top_nav_login hoverno lt">
				<li>
					<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:index'),$_smarty_tpl);?>
"><span class="login_ico denglu_ico"></span><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
<span class="ico_list login_litico"></span></a>
					<div class="top_nav_login_son sub_nav_login_son">
						<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:index'),$_smarty_tpl);?>
">个人中心</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/diary:index'),$_smarty_tpl);?>
">装修日记</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/ask:index'),$_smarty_tpl);?>
">装修问答</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:tenders'),$_smarty_tpl);?>
">我的招标</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'passport:loginout'),$_smarty_tpl);?>
">退出</a>
					</div>
				</li>
				<?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='company'){?>
				<li>
					<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/company:index'),$_smarty_tpl);?>
"><span class="ico_list in_t_s_ico"></span>公司管理<span class="ico_list login_litico"></span></a>
					<div class="top_nav_login_son sub_nav_login_son">
						<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/company:info'),$_smarty_tpl);?>
">公司设置</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/company/case:index'),$_smarty_tpl);?>
">案例管理</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/company/youhui:index'),$_smarty_tpl);?>
">优惠信息</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/company/yuyue:company'),$_smarty_tpl);?>
">预约管理</a>
					</div>
				</li>
				<?php }elseif($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='shop'){?>
				<li>
					<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:index'),$_smarty_tpl);?>
"><span class="ico_list in_t_s_ico"></span>商铺管理<span class="ico_list login_litico"></span></a>
					<div class="top_nav_login_son sub_nav_login_son">
						<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:info'),$_smarty_tpl);?>
">商铺设置</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/order:index'),$_smarty_tpl);?>
">订单管理</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/yuyue:shop'),$_smarty_tpl);?>
">预约管理</a>
					</div>
				</li>
				<?php }?>
			</ul>
			<?php }else{ ?>
			<p class="lt"><a href="<?php echo smarty_function_link(array('ctl'=>'passport'),$_smarty_tpl);?>
"><font class="login_ico denglu_ico"></font>登录</a>|<a href="<?php echo smarty_function_link(array('ctl'=>'passport:reg'),$_smarty_tpl);?>
">注册</a>|</p>
			<?php }?>
			<p class="lt sub_nav_prt">
			<a href="<?php echo smarty_function_link(array('ctl'=>'trade/cart'),$_smarty_tpl);?>
"><font class="login_ico shipCar_ico"></font>购物车<?php if ($_smarty_tpl->tpl_vars['COOKIE']->value['CART_NUMBER']){?>(<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['COOKIE']->value['CART_NUMBER'];?>
</font>)<?php }?></a>|
			<span><font class="ico_list in_t_tel_ico"></font>装修热线：<b class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span></p>
		</div>
		<div class="cl"></div>
	</div>
</div>
<script type="text/javascript">
(function(K, $){
$(".top_nav_login li").mouseover(function(){
	$(this).find('.top_nav_login_son').show();
}).mouseout(function(){
	$(this).find('.top_nav_login_son').hide();
});
})(window.KT, window.jQuery);
</script>
<?php }} ?>