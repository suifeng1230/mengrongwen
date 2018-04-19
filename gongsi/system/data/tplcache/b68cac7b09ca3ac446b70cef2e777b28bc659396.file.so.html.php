<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:32:36
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\mobile\so\so.html" */ ?>
<?php /*%%SmartyHeaderCode:214825ad55cc47e5179-63697982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b68cac7b09ca3ac446b70cef2e777b28bc659396' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\mobile\\so\\so.html',
      1 => 1500629536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214825ad55cc47e5179-63697982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55cc4921841_58909174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55cc4921841_58909174')) {function content_5ad55cc4921841_58909174($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["tpl_page_title"] = new Smarty_variable("搜索页", null, 0);?>
<?php $_smarty_tpl->tpl_vars["seo_sub_title"] = new Smarty_variable(($_smarty_tpl->tpl_vars['request']->value['city']['city_name']).("搜索页"), null, 0);?>
<!doctype html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/sheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<style>
.search_box a{border-top-left-radius: 50px; border-bottom-left-radius: 50px;    height: 38px;     background: rgba(255, 255, 255, 0);   line-height: 38px;    border-right: 1px solid rgba(255, 255, 255, 0.37); color: #fff;}
.search_cont{width:100%;float: left;border: none;    height: 46px;    line-height: 46px;margin: 0;    background: #ff4100;}
.search_cont input.text{border-top-right-radius: 50px; color: #fff;border-bottom-right-radius: 50px;    height: 38px;    line-height: 38px;  background: rgba(255, 255, 255, 0);}
.clo{ float: right;position: relative;width:12%;text-align: center;  line-height: 46px;}
.clo a{color:#fff;} 
.search_box{width:20%;height: 100%;float: left;}
.search_cont input.text{width:64%;}
.seach_i{margin: 18px 10% 0px 0px;}
.search_choose{top: 46px;background-color: rgba(51, 51, 51, 0.76);left: 10%;}
.search_choose a{border-radius: 0 !important;    background: rgba(255, 255, 255, 0);    color: #fff;}
.mainbtn_full{    width: 96%;    margin: 2%;    background: #FF4100;    border: 1px solid #FF4100;}
.ser_bo{    background-color: #B52600;  border-radius: 50px;     width: 84%;    float: left;  height: 38px;    top: 4px;     margin-left: 4%;  position: relative;}
</style>
<div class="search" style="min-height:300px;margin: 0;">
	<form method="post" action="<?php echo smarty_function_link(array('ctl'=>'mobile/product'),$_smarty_tpl);?>
" id="top-search">
		<div class="search_cont">
			<div class='ser_bo'>
			   <div class="search_box"> 
					<a href="javascript:void(0);" id="top_select" class="lt">商品<span class="app_ico seach_i rt"></span></a>
					<div class="search_choose none">
						<a href="javascript:void(0);" rel="<?php echo smarty_function_link(array('ctl'=>'mobile/company:items'),$_smarty_tpl);?>
">公司</a>
						<a href="javascript:void(0);" rel="<?php echo smarty_function_link(array('ctl'=>'mobile/designer:items'),$_smarty_tpl);?>
">设计师</a>
						<a href="javascript:void(0);"  rel="<?php echo smarty_function_link(array('ctl'=>'mobile/home:tuan'),$_smarty_tpl);?>
">团装</a>
						<a href="javascript:void(0);" rel="<?php echo smarty_function_link(array('ctl'=>'mobile/case:index'),$_smarty_tpl);?>
">案例</a>
						<a href="javascript:void(0);" rel="<?php echo smarty_function_link(array('ctl'=>'mobile/product'),$_smarty_tpl);?>
">商品</a>
						<a href="javascript:void(0);" rel="<?php echo smarty_function_link(array('ctl'=>'mobile/store'),$_smarty_tpl);?>
" class="last">材料商</a>
					</div>
				</div>
				<input type="text" name="kw" class="text lt" placeholder="请输入你要搜索的关键字" value="<?php echo $_smarty_tpl->tpl_vars['pager']->value['sokw'];?>
"  x-webkit-speech speech/>
				<input type="submit" class="ser_input1"  style='top: 6px;' value=""/>
			</div>	
			<div class='clo'><a href="<?php if ($_smarty_tpl->tpl_vars['pager']->value['backurl']){?><?php echo $_smarty_tpl->tpl_vars['pager']->value['backurl'];?>
<?php }else{ ?><?php echo smarty_function_link(array('ctl'=>'mobile/index'),$_smarty_tpl);?>
<?php }?>" >取消</a></div>
			<div class="cl"></div>
		</div>
	</form>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".search .search_box").mouseover(function(){
				var o = $(".topso").offset();
				$(this).find(".search_choose").css({left:o.left,top:o.top+35}).show();
			}).mouseleave(function(){
				$(this).find(".search_choose").hide();
			});
			$(".search .search_choose a").click(function(){
				$(".search .search_box #top_select").html($(this).text());
				$(".search form").attr('action',$(this).attr('rel'));
				$(".search .search_choose").hide();
			}); 
		});
	</script>
</div>
<div class="content" style='padding:0'>
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>