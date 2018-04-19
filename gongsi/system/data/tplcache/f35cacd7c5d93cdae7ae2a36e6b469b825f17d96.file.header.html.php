<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:42:15
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\block\header.html" */ ?>
<?php /*%%SmartyHeaderCode:120185ad550f7351f74-28518076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f35cacd7c5d93cdae7ae2a36e6b469b825f17d96' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\block\\header.html',
      1 => 1499756917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120185ad550f7351f74-28518076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'pager' => 0,
    'COOKIE' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad550f7601810_76709373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad550f7601810_76709373')) {function content_5ad550f7601810_76709373($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_function_adv')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.adv.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $_smarty_tpl->getSubTemplate ("block/sheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body class="pagewd">
<iframe id="miniframe" name="miniframe" style="display:none;"></iframe>
<!--头部内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("block/top-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main_header">
	<div class="mainwd top_bottom">
		<div class="logo lt" style='width: 192px; height: 130px;box-shadow:4px 31px 15px rgba(0,0,0,0.1),0 0 40px rgba(0,0,0,0.1) inset; margin-top:-57px;'>
			<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><img class="pos" src="<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['logo']){?><?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['logo'];?>
<?php }else{ ?>/themes/default/static/images/logo.png<?php }?>" style='width:100%;height:172px;'/></a>
		</div>
		<div class="search_box lt" style='margin-top: -15px;background-color: #F6F6F6;'>
			<?php echo smarty_function_widget(array('id'=>"public/sobox",'sokw'=>$_smarty_tpl->tpl_vars['pager']->value['sokw']),$_smarty_tpl);?>

			<div class="search_key">
                热门：
                <a href="">岗亭</a>
                <a href="">硅藻泥</a>
                <a href="">塑胶地板</a>
                <a href="">防火门</a>
                <a href="">防水涂料</a>
                <a href="">断桥铝门窗</a>
                <a href="">指纹门禁</a>
			</div>
		</div>
		<style>
		.header_icortbox a{text-decoration:none;}
		.header_icortbox font{position: absolute;display: inline-block;padding: 1px;font-size: 12px;line-height: 12px;color: #fff; background-color: #f10215; border-radius: 7px;min-width: 12px; text-align: center;margin-left: 3px;}
		</style>
		<div class="header_icortbox">
			<a href='<?php echo smarty_function_link(array('ctl'=>'trade/cart'),$_smarty_tpl);?>
'><span><!-- <i class="login_ico shipCar_ico"></i> -->我的购物车<?php if ($_smarty_tpl->tpl_vars['COOKIE']->value['CART_NUMBER']){?><font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['COOKIE']->value['CART_NUMBER'];?>
</font><?php }?></span></a>
		</div>
	<!--	<div class="site_commitment rt">
			<ul>
				<li><span class="index_ico ico1"></span></li>
				<li><span class="index_ico ico2"></span></li>
			</ul>
		</div>  -->
	</div>
	<div class="main_nav" style='margin-left: -28px; margin-top: -50px;'>
		<div class="mainwd hoverno main_nav_cont">
			<ul class="index_nav">
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='index'){?>class="current"<?php }?>>首页</a>
				</li>
				<li >
					<a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='mall/index'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='mall/store'){?>class="current"<?php }?>  href="<?php echo smarty_function_link(array('ctl'=>'mall'),$_smarty_tpl);?>
">建材商城</a>
					<ul class="main_nav_son none">
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'mall'),$_smarty_tpl);?>
">商城主页</a>
						</li>
						<li><a  href="<?php echo smarty_function_link(array('ctl'=>'mall/store'),$_smarty_tpl);?>
">商家列表</a>
						</li>
					</ul>
				</li>
				<li><a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='tenders'){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">我要装修</a>
				</li>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='gs'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='designer'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='gz'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='mechanic'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='youhui'){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'gz'),$_smarty_tpl);?>
">找施工</a>
					<ul class="main_nav_son none">
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'gs'),$_smarty_tpl);?>
">找装修公司</a>
						</li>
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
">找设计师</a>
						</li>
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'gz'),$_smarty_tpl);?>
">找工长</a>
						</li>
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'mechanic'),$_smarty_tpl);?>
">找工人</a>
						</li>
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'youhui'),$_smarty_tpl);?>
">优惠信息</a>
						</li>
					</ul>
				</li>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='article'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='diary'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='ask'){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'article'),$_smarty_tpl);?>
">装修攻略</a>
					<ul class="main_nav_son none">
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'diary'),$_smarty_tpl);?>
">装修日记</a>
						</li>
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'ask'),$_smarty_tpl);?>
">知识问答</a>
						</li>
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'article'),$_smarty_tpl);?>
">装修课堂</a>
						</li>
					</ul>
				</li>
				<li><a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='case'){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">装修案例</a>
				</li>
			<!--	<li><a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='activity'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='mall/coupon'){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'activity'),$_smarty_tpl);?>
">优惠活动</a>
					<ul class="main_nav_son none">
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'mall/coupon-items'),$_smarty_tpl);?>
">优惠券</a>
						</li>
					</ul>
				</li> -->
				<li><a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='news'){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'news'),$_smarty_tpl);?>
">本地新闻</a>
				</li>
			</ul>
		</div>
		<div style='margin-left:10px;width: 190px;float: left;'><?php echo smarty_function_adv(array('id'=>"32",'name'=>"首页导航右边小条幅广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $(".search_box .search_cont").mouseover(function(){
        var o = $("#top_select").offset();
        $(this).find(".search_cont_list").css({left:o.left-2,top:o.top+36}).show();
    }).mouseleave(function(){
        $(this).find(".search_cont_list").hide();
    });
    $(".search_cont_list a").click(function(){
        $(".search_box .search_cont #top_select").html($(this).text()+'<span class="search_ico index_ico"></span>');
        $(".search_box form").attr('action',$(this).attr('rel'));
        $(".search_box .search_cont_list").hide();
    });
    //绿色导航
    $(".main_nav ul li").mouseover(function(){
        $(this).find(".main_nav_son").show();
		$(this).addClass('current');
    }).mouseleave(function(){
	$(this).removeClass('current');
        $(this).find(".main_nav_son").hide();
    });
});
</script>
<?php }} ?>