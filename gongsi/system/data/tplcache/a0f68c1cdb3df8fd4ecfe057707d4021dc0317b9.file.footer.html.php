<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:10:43
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\mobile\block\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:42685ad557a307a287-78368447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0f68c1cdb3df8fd4ecfe057707d4021dc0317b9' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\mobile\\block\\footer.html',
      1 => 1500955571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42685ad557a307a287-78368447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'pager' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad557a3122229_71724622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad557a3122229_71724622')) {function content_5ad557a3122229_71724622($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?></div>
<div class="tender">
  <!--  <div class="tender_cont">
        <h2 class="lt"><span class="app_ico tel_ico"></span><b><a href="tel:<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</a></b></h2>
        <a href="<?php echo smarty_function_link(array('ctl'=>'mobile/tenders'),$_smarty_tpl);?>
" class="rt mainbtn btn">立即招标<?php echo $_smarty_tpl->tpl_vars['pager']->value['tender_hide'];?>
</a>
    </div>-->
	<style>
	.tender ul{width:100%;position:relative;}
	.tender ul li{width:33.333333%;float: left;text-align: center;}
	.tender ul li .footico1{background:url(/themes/default/mobile/static/images/btn-tabs_01.png) no-repeat;background-size:100%; padding: 0 10px;}
	.tender ul li .footico2{background:url(/themes/default/mobile/static/images/btn-tabs_05.png) no-repeat;background-size:100%; padding: 0 10px;}
	.tender ul li .footico3{background:url(/themes/default/mobile/static/images/btn-tabs_06.png) no-repeat;background-size:100%; padding: 1px 10px;}
	.tender ul li .footico4{background:url(/themes/default/mobile/static/images/ser.png) no-repeat;background-size:100%; padding: 0 10px;}
	.tender ul li .footico5{background:url(/themes/default/mobile/static/images/btn-tabs_03.png) no-repeat;background-size:100%; padding: 0 10px;}
	.tender ul li p{line-height: 10px;color: #808080;}
	.tender .share{width:10%;float:right;text-align: center;height: 100%;}
	.tender .share img{width: 100%;height: 100%;}
	.tender .share .shareico{background:url(/themes/default/mobile/static/images/share2.png) no-repeat;background-size:100%;    padding: 2px 25px 22px 8px;}
	</style>
	<script>
			$(function (){
			$('.tender ul li').click(function (){
				//把之前已有的active去掉
				$('.active').removeClass('active');
				//当前点击的li加上class
				$(this).addClass("active");
		 
			});
		})
	</script>
	<ul>
		<li class='active'>
			<a href='/mobile/index.html'><span class='footico1'></span>
			<p>首页</p></a>
		</li>
	<li>
			<a href='/mobile/trade/cart.html'><span class='footico2'></span>
			<p>购物车</p></a>
		</li> 
		<li>
			<a href='/mobile/ucenter.html'><span class='footico3'></span>
			<p>用户中心</p></a>
		</li>
		<!--	<li>
			<a href='/mobile/index.html'><span class='footico4'></span>
			<p>附近</p></a>
		</li>
		<li>
			<a href='/mobile/index.html'><span class='footico5'></span>
			<p>更多</p></a>
		</li> 
		<div class="share"><span class='shareico'></span></div>
		  -->
	</ul>
		
</div>
<!--<div class="footer">
	<div class="footer_cont">
		<p><font class="on">触屏版</font><font class="bgray">|</font><a href="<?php echo smarty_function_link(array('ctl'=>'mobile/index:force','arg0'=>'web'),$_smarty_tpl);?>
" >电脑版</a></p>
		<p><font class="f12">手机版<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</font><font class="f12"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['icp'];?>
</font></p>
	</div>
</div>  -->
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/sfooter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if (substr($_smarty_tpl->tpl_vars['request']->value['ctl'],0,14)!='mobile/ucenter'&&!$_smarty_tpl->tpl_vars['pager']->value['tender_hide']&&substr($_smarty_tpl->tpl_vars['request']->value['ctl'],0,11)!='mobile/shop'){?>
<div class="h40"></div>

<?php }?>
</body>
</html><?php }} ?>