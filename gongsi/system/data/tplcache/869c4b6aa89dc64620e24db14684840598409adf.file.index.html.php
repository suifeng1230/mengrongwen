<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:10:42
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\mobile\index.html" */ ?>
<?php /*%%SmartyHeaderCode:305ad557a2600138-74634080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '869c4b6aa89dc64620e24db14684840598409adf' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\mobile\\index.html',
      1 => 1523528296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305ad557a2600138-74634080',
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
  'unifunc' => 'content_5ad557a2b63109_59032664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad557a2b63109_59032664')) {function content_5ad557a2b63109_59032664($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adv')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.adv.php';
if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_block_calldata')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_block_KT')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.KT.php';
?><?php $_smarty_tpl->tpl_vars["is_index_home"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--banner开始-->
<div class="banner">
	<?php echo smarty_function_adv(array('id'=>"17",'name'=>"手机版首页轮播广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

</div>
<script type="text/javascript">
	$(document).ready(function(){
		$.KT.initBanner(".banner", 0.5, true,5000);
	});
</script>
<!--banner结束-->
<!--分类开始-->
<div class="pding">
	<div class="nav">
		<ul style="padding: 0px;margin-bottom: 20px;">
			<li>
				<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-1-1'),$_smarty_tpl);?>
"><span class="index_ico index_ico1"></span>
					<p>建材</p>
				</a>
			</li>
			<li>
				<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-2-1'),$_smarty_tpl);?>
"><span class="index_ico index_ico2"></span>
					<p>家具</p>
				</a>
			</li>
			<li>
				<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product'),$_smarty_tpl);?>
"><span class="index_ico index_ico17"></span>
					<p>体育用品</p>
				</a>
			</li>
			<li>
				<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-3-1'),$_smarty_tpl);?>
"><span class="index_ico index_ico18"></span>
					<p>家用电器</p>
				</a>
			</li>
			<li>
				<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/designer'),$_smarty_tpl);?>
"><span class="index_ico index_ico3"></span>
					<p>设计师</p>
				</a>
			</li>
			<li>
				<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/company'),$_smarty_tpl);?>
"><span class="index_ico index_ico5"></span>
					<p>装修公司</p>
				</a>
			</li>
			<li>
				<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/gz'),$_smarty_tpl);?>
"><span class="index_ico index_ico4"></span>
					<p>找工长</p>
				</a>
			</li>
			<li>
				<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/article'),$_smarty_tpl);?>
"><span class="index_ico index_icoq2"></span>
					<p>学装修</p>
				</a>
			</li>
			<li>
				<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/case'),$_smarty_tpl);?>
"><span class="index_ico index_icoq4"></span>
					<p>装修案例</p>
				</a>
			</li>
			<li>
				<a href="#" id="dt-hd-nav"><span class="index_ico index_ico11"></span>
					<p>更多</p>
				</a>
			</li>
			<div class="cl"></div>
		</ul>
	</div>
</div>
<!--分类结束-->
<!--优惠活动开始-->
<style>
	.clear1{background: #eeeeee;height: 10px;}
	.youhui{width:100%;height:46px;position:relative;}
	.txt1{margin: 11px;float: left;color: #fff;border: 1px solid #f74a0d;height: 18px;line-height:18px;border-radius: 6px;padding: 2px;background: #f74a0d;font-weight: 100;}
</style>

<div class="youhui">
	<span style="margin-top: 11px; float: left;background: #ff4100;width: 4px;height: 24px;"></span>
	<p class="" style="line-height:46px;margin-left:10px;font-size:18px;width: 80px; float: left;">优惠活动</p>
	<div style="float:left;line-height:46px;height: 46px; overflow: hidden;">
		<ul id="sItem">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/youhui",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"12")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/youhui",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"12"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li>
				<{if $item.status=='process'}>
				<a target="_blank" title='<{$item.title}>' href="<{link ctl='youhui:detail' arg0=$item.youhui_id}>" class="txt1">进行中</a>
				<{elseif $item.status == 'wait'}>
				<a  target="_blank" title='<{$item.title}>' href="<{link ctl='youhui:detail' arg0=$item.youhui_id}>" class="txt1">未开始</a>
				<{else}>
				<a target="_blank" title='<{$item.title}>' href="<{link ctl='youhui:detail' arg0=$item.youhui_id}>" class="txt1">已结束</a>
				<{/if}>
				<a href="<{link ctl='youhui:detail' arg0=$item.youhui_id}>"  target="_blank"><{$item.title|cutstr:40:''}></a>
			</li>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/youhui",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"12"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</ul>
	</div>	
</div>
<script type="text/javascript">  
	$(document).ready(function(){  
		$("#sItem").scrollQ();  
	});  
</script> 
<script type="text/javascript">
	(function($){    
		var status = false;    
		$.fn.scrollQ = function(options){    
			var defaults = {    
				line:1,    
				scrollNum:1,    
				scrollTime:4000  
			}  
			var options=jQuery.extend(defaults,options);  
			var _self = this;  
			return this.each(function(){    
				$("li",this).each(function(){  
					$(this).css("display","none");  
				})  
				$("li:lt("+options.line+")",this).each(function(){  
					$(this).css("display","block");  
				})  
				function scroll() {  
					for(i=0;i<options.scrollNum;i++) {  
						var start=$("li:first",_self);  
						start.fadeOut(100);  
						start.css("display","none");  
						start.appendTo(_self);  
						$("li:eq("+(options.line-1)+")",_self).each(function(){  
							$(this).fadeIn(500);  
							$(this).css("display","block");  
						})  
					}  
				}  
				var timer;  
				timer = setInterval(scroll,options.scrollTime);  
				_self.bind("mouseover",function(){  
					clearInterval(timer);  
				});  
				_self.bind("mouseout",function(){  
					timer = setInterval(scroll,options.scrollTime);  
				});  
			});  
		}  
	})(jQuery);   
</script>
<style type="text/css" media="screen">
	.xsqg_pro span{padding:11px;}
	.pub_tit{background: #fff;border-top: 1px solid #e3e3e3;border-bottom: 1px solid #eee;padding: 5px 0px 5px 10px;		position: relative;font-size: 18px;color: #555;}
	.zb_box1{width: 100%;position: relative;float: left;height: 300px;overflow: hidden;}
	.to_mobile_zb{position: relative;height: 300px;overflow: hidden;background: #fff;width: 50%;float:left;}
	.to_mobile_zb li{ height:45px; line-height:45px; border-bottom:1px dotted #eee; overflow:hidden;}
	.to_mobile_zb li span{ display:inline-block;width:25%;float:left;text-align: center;}
	.zxbox_lt{width: 50%;position: relative; overflow: hidden;  height: 300px;  background: #fff;float: left;}
	.zxbox_lt img{width: 100%;}
	.to_mobile_zb .new_order_tit{background: #eee;position: relative;z-index: 11;line-height: 40px;height: 40px;overflow: hidden;}
	.to_mobile_zb .new_order_tit span{width: 25%; text-align: center;float: left;}
	.to_mobile_zb .new_order_tit p span{display: inline-block; color: #333;}
	.to_mobile_zb .to_mobile_zb_btn{height: 65px;width: 100%;position: absolute;bottom:0;background: #fff;}
	.to_mobile_zb .to_mobile_zb_btn img{width: 50%;height: 80%;float: left;}
</style>
<script type="text/javascript">
	//首页最新订单文字无缝滚动效果
	$(function(){
		$("div.to_mobile_zb").myScroll({
        speed:40, //数值越大，速度越慢
        rowHeight:45 //li的高度
    });
	});
</script>
<script language="javascript" type="text/javascript" src="/themes/default/mobile/static/js/scroll.js"></script>
<div class="zb_box1">
	<div class="zxbox_lt"><?php echo smarty_function_adv(array('id'=>"44",'name'=>"手机版首页招标",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
	<div class="to_mobile_zb">
		<div class="new_order_tit"><span>发布日期</span><span>业主</span><span>风格</span><span>预算</span></div>
		<ul class="index_nwod_list" style="margin-top: -41px;">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"tenders/tenders",'order'=>"dateline",'limit'=>"99")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'order'=>"dateline",'limit'=>"99"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li>
				<a href="<{link ctl='tenders:detail' arg1=$item.tenders_id }>" target="_blank">
					<span class="graycl"><{$item.dateline|format:"m-d"}></span>
					<span class="fontcl1"><{$item.contact|cutstr:12}></span><span class="long"><{$item.style_title}></span>
					<span><{$item.budget_title}></span>
				</a>
			</li>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'order'=>"dateline",'limit'=>"99"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
		</ul>
		<div class="to_mobile_zb_btn">
			<a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
"><img src="/themes/default/mobile/static/images/fabu.png" alt=""></a>
			<a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
"><img src="/themes/default/mobile/static/images/toubiao.png" alt=""></a>
		</div>
	</div>
</div>
<!--优惠活动结束-->
<!--限时抢购-->

<div class="xsqg" style="display: none;">
	<div class="clear1"></div>
	<div class="xsqg_lt">
		<span class="xsqg_ico"></span>
		<h1>限时抢购</h1>
		<h2>限时限量抢全网好货</h2>
		<div class="xsqg_pro">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"35",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"1")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"35",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li <{if $index%4==0}> style=" border-left:none;"<{/if}>> 
				<{if $item.sale_type == 2}>
				<div class="tim1"><p><span  remaintime="<{$item.sale_time}>"></span></p></div>
				<div class="tim2">最后<p><span remaintime1="<{$item.sale_time}>"></span></p></div>
				<{elseif $item.sale_type == 1}>
				<p class="point_p">
					<{if $item.sale_sku > $item.sale_count}>
					<span class="shop_ico point_ico"></span>已有 <font class="pointcl"><{$item.sale_count}></font>人抢购，仅剩余 <font class="pointcl"><{$item.sale_sku-$item.sale_count}></font>
					<{else}>
					<span class="pointcl">真遗憾您来晚了，已经卖光了。</span>
					<{/if}>
				</p>
				<{else}>
				<{/if}>
				<a target="_blank"  href="<{link ctl='mobile/product:detail' arg1=$item.product_id}>">
					<img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" /></a>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"35",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
			</div>
		</div>
		<div class="xsqg_rt">
			<div class="xsqg_rt1">
				<div style="width:74%;overflow:hidden;float:left;">
					<span class="xsqg_ico1"></span>
					<h1>好货不断</h1>
					<h2>品质生活从现在开始</h2>
					<h2 style="color:#29b8f9;font-size:14px;">解救强迫症，就是爱挑剔</h2>
				</div>
				<div class="xsqg_pro">
					<li style="height: 85px;margin-right: 5px;"> 
						<?php echo smarty_function_adv(array('id'=>"18",'name'=>"手机版首页好货不断右广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

					</li>
				</div>
			</div>
			<div class="xsqg_rt2">
				<div class="xsqg_pro1">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"32",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"2")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"32",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li> 
						<a target="_blank"  href="<{link ctl='mobile/product:detail' arg1=$item.product_id}>">
							<img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" />
							<p style="color:#333;font-size:12px;margin-left:3px;"><{$item.title|cutstr:18:''}></p>
							<p style="color:#e84294;margin-left:3px;">￥ <{$item.price}></p>
						</a>
					</li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"32",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			</div>
		</div>
	</div>    
	<div class="clear1"></div>
	<script type="text/javascript">
		(function(K, $){
			$(function(){
				var dateTime = new Date();
				var difference = dateTime.getTime() - <?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
*1000;	
				setInterval(function(){
					$("[remaintime]").each(function(){
						var obj = $(this);
						var endTime = new Date(parseInt(obj.attr('remaintime')) * 1000);
						var nowTime = new Date();
						var nMS=endTime.getTime() - nowTime.getTime() + difference;
						var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
						var myH=Math.floor(nMS/(1000*60*60)) % 24;
						var myM=Math.floor(nMS/(1000*60)) % 60;
						var myS=Math.floor(nMS/1000) % 60;
						var myMS=Math.floor(nMS/100) % 10;
						if(myD>= 0){
							var str ="最后"+myD+"天"+myH+"小时"+myM+"分钟"+myS+"秒";
						}else{
							var str = "真遗憾您来晚了，抢购已经结束。";	
						}
						obj.html(str);
					});
				}, 100);
			});
		})(window.KT, window.jQuery);
	</script>
	<!--限时抢购-->
	<!--限时抢购-->
	<style>
		.hotjj{width:100%;position:relative;overflow:hidden;height:100%;}
		.hojj_title{height:46px;text-align:center;border-bottom:1px solid #dedede;}
		.hojj_info{height:100%;width:100%;float:left;}
		.hojj_info li{float: left; width: 25%; margin-left: -1px;  border-left: 1px solid #dedede; border-bottom: 1px solid #dedede;}
		.hojj_info li img{width: 100%;height: 100%;}
		.hojj_info1{width:100%;float:left;}
		.hojj_info1 li{float: left; width: 50%; margin-left: -1px;  border-left: 1px solid #dedede; border-bottom: 1px solid #dedede;}
		.hojj_info1 li img{width: 100%;height: 100%;}
		.btm{height:46px;text-align:center;border-top:1px solid #dedede;width:100%;overflow:hidden;}
		.btm h1{color:#fa4745;line-height:46px;}
		.rmjjad{width:100%;float:left;height: 100%;}
		.rmjjad img{width: 100%;height: 100%;}
	</style>

	<div class="hotjj"><div class="clear1"></div>
		<div class="hojj_title"><span class="htjj_ico">热门家居</span></div>
		<div class="hojj_info">
			<?php echo smarty_function_adv(array('id'=>"40",'name'=>"手机版首页热门家居（方）",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"asc",'limit'=>"4"),$_smarty_tpl);?>

		</div>
		<div class="hojj_info1">
			<?php echo smarty_function_adv(array('id'=>"41",'name'=>"手机版首页热门家居（长）",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"asc",'limit'=>"2"),$_smarty_tpl);?>

		</div>
		<div class="hojj_info">
			<?php echo smarty_function_adv(array('id'=>"40",'name'=>"手机版首页热门家居（方）",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"desc",'limit'=>"4"),$_smarty_tpl);?>

		</div>
		<div class="hojj_info1">
			<?php echo smarty_function_adv(array('id'=>"41",'name'=>"手机版首页热门家居（长）",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"desc",'limit'=>"2"),$_smarty_tpl);?>

		</div>
		<div class="btm"><a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product'),$_smarty_tpl);?>
"><h1>还有更多精品哦>></h1></a></div>
	</div>
	<!--限时抢购-->

	<div class='rmjjad'><?php echo smarty_function_adv(array('id'=>"42",'name'=>"手机版首页热门家居下方条幅广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
	<!--商城惠购-->
	<style>
		.schg{width:100%;position:relative;overflow:hidden;height:100%;}
		.schg_title{height:46px;text-align:center;border-bottom:1px solid #dedede;}	
		.schg_info{height:100%;width:100%;float:left;border-bottom:1px solid #dedede;margin-top: -1px;}
		.schg_info .schg_lt{width:10%;height:260px;text-align:center;float:left;    box-shadow: 0px 1px 2px 1px rgba(0, 0, 0, 0.21);z-index: 2;position: relative;}
		.schg_info .schg_lt h1{width:100%;height:42px;background:#ff5c26;color:#fff;font-size:22px;    box-shadow: 0px 1px 2px 0px rgba(0,0,0,0.3);	line-height: 42px;	z-index: 2;position: relative;}
		.schg_info .schg_lt .schg_ltd{width:100%;height:218px;background:#fb7736;color:#fff;font-size:22px;}
		.schg_info .schg_lt .schg_ltd .schg_ltdx {    width: 44%; margin-left: 25%; padding-top: 22px;font-weight:bold;line-height:42px;}
		.schg_info .schg_lt .schg_ltd .schg_ltdx1 {padding-top: 45px;line-height: 60px;    margin-left: 25%;font-weight:bold;    width: 44%;}
		.schg_info .schg_ct {height: 260px;width: 60%;float: left; }
		.schg_info .schg_ct li {z-index: 1;	position: relative;width: 50%;overflow: hidden; height: 130px;float: left;border: 1px solid #dedede;margin-bottom:-1px;margin-right: -1px;border-left: none;border-bottom: none;}
		.schg_info .schg_ct h1{padding: 8px 8px 0 8px;}
		.schg_info .schg_ct img,.schg_info .schg_rt img{width:100%;margin-left: 1px;}
		.schg_info .schg_rt{height:260px;float:left;overflow: hidden; width: 30%; text-align: center;}
		.schg_info .schg_rt h1{padding:8px;padding-bottom:0;text-align: left;}
		</style>
		<div class="schg">
			<div class="schg_title"><span class="schg_ico">商城惠购</span></div>
			<div class="schg_info">
				<div class="schg_lt">
					<h1>1F</h1>
					<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-1'),$_smarty_tpl);?>
"><div class="schg_ltd"><div class="schg_ltdx">基础建材</div></div></a>
				</div>
				<div class="schg_ct">
					<li>
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-6'),$_smarty_tpl);?>
"><h1>灯饰照明</h1>
							<img src="/themes/default/mobile/static/images/pro/pro1.png" />
						</a>
					</li>
					<li>
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-7'),$_smarty_tpl);?>
"><h1>厨房卫浴</h1>
							<img src="/themes/default/mobile/static/images/pro/pro2.png" />
						</a>
					</li>
					<li>
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-8'),$_smarty_tpl);?>
"><h1>电工电料</h1>
							<img src="/themes/default/mobile/static/images/pro/pro3.png" />
						</a>
					</li>
					<li>
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-9'),$_smarty_tpl);?>
"><h1>墙地面材料</h1>
							<img src="/themes/default/mobile/static/images/pro/pro4.png" />
						</a>
					</li>
				</div>
				<div class="schg_rt">
					<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-10'),$_smarty_tpl);?>
"><h1 >装饰材料</h1>
						<img src="/themes/default/mobile/static/images/pro/pro5.png" />
					</a>
					<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-1'),$_smarty_tpl);?>
"><small style="text-align:center;color:red;width:100%;font-size:14px;">更多建材产品>></small>
					</a>
				</div>
			</div>
			<div class="schg_info">
				<div class="schg_lt">
					<h1 style="background:#d58c00;">2F</h1>
					<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-2'),$_smarty_tpl);?>
"><div class="schg_ltd" style="background:#e7a62a;"><div class="schg_ltdx1">家具</div></div>
					</a>
				</div>
				<div class="schg_ct">
					<li>
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-111'),$_smarty_tpl);?>
"><h1>卧室用</h1>
							<img src="/themes/default/mobile/static/images/pro/pro6.png" />
						</a>
					</li>
					<li>
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-112'),$_smarty_tpl);?>
"><h1>客厅用</h1>
							<img src="/themes/default/mobile/static/images/pro/pro7.png" />
						</a>
					</li>
					<li>
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-113'),$_smarty_tpl);?>
"><h1>餐厅用</h1>
							<img src="/themes/default/mobile/static/images/pro/pro8.png" />
						</a>
					</li>
					<li>
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-114'),$_smarty_tpl);?>
"><h1>书房用</h1>
							<img src="/themes/default/mobile/static/images/pro/pro9.png" /></a>
						</li>
					</div>
					<div class="schg_rt">
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-116'),$_smarty_tpl);?>
"><h1>商业办公</h1>
							<img src="/themes/default/mobile/static/images/pro/pro10.png" />
						</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-2'),$_smarty_tpl);?>
"><small style="text-align:center;color:red;width:100%;font-size:14px;">更多家具产品>></small>
						</a>
					</div>
				</div>
				<div class="schg_info">
					<div class="schg_lt">
						<h1 style="background:#0cbe7d;">3F</h1>
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-3'),$_smarty_tpl);?>
"><div class="schg_ltd" style="background:#31d398;"><div class="schg_ltdx1">家电</div></div></a>
					</div>
					<div class="schg_ct">
						<li >
							<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-194'),$_smarty_tpl);?>
"><h1>大家电</h1>
								<img src="/themes/default/mobile/static/images/pro/pro11.png" />
							</a>
						</li>
						<li>
							<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-195'),$_smarty_tpl);?>
"><h1>生活电器</h1>
								<img src="/themes/default/mobile/static/images/pro/pro12.png" />
							</a>
						</li>
						<li>
							<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-196'),$_smarty_tpl);?>
"><h1>厨房电器</h1>
								<img src="/themes/default/mobile/static/images/pro/pro13.png" />
							</a>
						</li>
						<li>
							<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-197'),$_smarty_tpl);?>
"><h1>个人护理</h1>
								<img src="/themes/default/mobile/static/images/pro/pro14.png" />
							</a>
						</li>
					</div>
					<div class="schg_rt">
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-3'),$_smarty_tpl);?>
"><h1>家用电器</h1>
							<img src="/themes/default/mobile/static/images/pro/pro15.png" />
						</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-3'),$_smarty_tpl);?>
"><small style="text-align:center;color:red;width:100%;font-size:14px;">更多家电产品>></small>
						</a>
					</div>
				</div>
				<div class="schg_info">
					<div class="schg_lt">
						<h1 style="background:#0cbcbe;">4F</h1>
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-4'),$_smarty_tpl);?>
"><div class="schg_ltd" style="background:#43d4d6;"><div class="schg_ltdx">软装配饰</div></div>
						</a>
					</div>
					<div class="schg_ct">
						<li >
							<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-251'),$_smarty_tpl);?>
"><h1>日用家居</h1>
								<img src="/themes/default/mobile/static/images/pro/pro16.png" />
							</a>
						</li>
						<li>
							<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-250'),$_smarty_tpl);?>
"><h1>布艺家纺</h1>
								<img src="/themes/default/mobile/static/images/pro/pro17.png" />
							</a>
						</li>
						<li>
							<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-249'),$_smarty_tpl);?>
"><h1>门窗帘幕</h1>
								<img src="/themes/default/mobile/static/images/pro/pro18.png" />
							</a>
						</li>
						<li>
							<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-247'),$_smarty_tpl);?>
"><h1>工艺饰品</h1>
								<img src="/themes/default/mobile/static/images/pro/pro19.png" />
							</a>
						</li>
					</div>
					<div class="schg_rt">
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-248'),$_smarty_tpl);?>
"><h1>床上用品</h1>
							<img src="/themes/default/mobile/static/images/pro/pro20.png" />
						</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-4'),$_smarty_tpl);?>
"><small style="text-align:center;color:red;width:100%;font-size:14px;">更多家居用品>></small>
						</a>
					</div>
				</div>
				<div class="schg_info">
					<div class="schg_lt">
						<h1 style="background:#e14a02;">5F</h1>
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-5'),$_smarty_tpl);?>
"><div class="schg_ltd" style="background:#f6592b;"><div class="schg_ltdx1">其他</div></div>
						</a>
					</div>
					<div class="schg_ct">
						<li >
							<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-336'),$_smarty_tpl);?>
"><h1>地暖</h1>
								<img src="/themes/default/mobile/static/images/pro/pro21.png" />
							</a>
						</li>
						<li>
							<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-337'),$_smarty_tpl);?>
"><h1>保洁</h1>
								<img src="/themes/default/mobile/static/images/pro/pro22.png" />
							</a>
						</li>
						<li>
							<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-338'),$_smarty_tpl);?>
"><h1>搬场</h1>
								<img src="/themes/default/mobile/static/images/pro/pro23.png" />
							</a>
						</li>
						<li>
							<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-339'),$_smarty_tpl);?>
"><h1>家居用品</h1>
								<img src="/themes/default/mobile/static/images/pro/pro24.png" />
							</a>
						</li>
					</div>
					<div class="schg_rt">
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-5'),$_smarty_tpl);?>
"><h1>植物花卉</h1>
							<img src="/themes/default/mobile/static/images/pro/pro25.png" />
						</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/product-index-5'),$_smarty_tpl);?>
"><small style="text-align:center;color:red;width:100%;font-size:14px;">更多家居用品>></small>
						</a>
					</div>
				</div><img style=" width: 100%; height: 100%;" src="/themes/default/mobile/static/images/pro/zhengpin.png" />
			</div>	
			<div class="clear1"></div>
			<!--商城惠购-->
			<!--折扣专区-->
			<style>
				.zkzq{width:100%;position:relative;overflow:hidden;height:100%;}
				.zkzq_title{height:46px;text-align:center;border-bottom:1px solid #dedede;}	
				.zkzq_info{height:100%;width:100%;float:left;}
				.zkzq_info .zkzq_top{width:100%;height:100%;float:left;}
				.zkzq_info .zkzq_top img{width: 100%;height: 100%;}
				.zkzq_info .zkzq_bo{width:50%;float:left;border-left: 1px solid #dedede;border-bottom: 1px solid #dedede;    margin-left: -1px;}
				.zkzq_info .zkzq_bo h1{padding: 3%;font-size:14px;float: left;line-height: 22px;height: 40px;overflow: hidden;}
				.zkzq_info .zkzq_bo p{margin: 3px 0;}
				.zkzq_info .zkzq_bo .zkzq_bo_img{overflow:hidden;width:100%;height:105px;float: left;}
				.zkzq_info .zkzq_bo img{width:100%;height:100%;}
				.zkzq_info .zkzq_bo li{width:66%;height:180px;float: left;padding:2%;}
				.zkzq_info .zkzq_bo .zkzq_bo1{width:30%;overflow:hidden;float: left;}
				.zkzq_info .zkzq_bo .zkzq_bo1 img{width:100%; height: 100%;padding:0;}
				.zkzq_info .zkzq_bo .zkzq_bo1 li{width:100%;height:60px;}
			</style>
			<div class="zkzq">
				<div class="zkzq_title"><span class="schg_ico">折扣专区</span></div>
				<div class="zkzq_info">
					<div class="zkzq_top">
						<?php echo smarty_function_adv(array('id'=>"43",'name'=>"手机版首页折扣专区banner轮播",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

						<div style="width:100% ;position: absolute;    margin-top: -22px;background: rgba(51,51,51,0.6);   ">
							<div style=" width:58% ;line-height: 22px;    color: #fff; background: #e81a62;float:left;  padding-left: 2%; ">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"35",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"1")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"35",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<li <{if $index%4==0}> style=" border-left:none;"<{/if}>> 
									<{if $item.sale_type == 2}>
									<p><span  remaintime="<{$item.sale_time}>"></span></p>
									<{elseif $item.sale_type == 1}>
									<p class="point_p">
										<{if $item.sale_sku > $item.sale_count}>
										<span class="shop_ico point_ico"></span>已有 <font class="pointcl"><{$item.sale_count}></font>人抢购，仅剩余 <font class="pointcl"><{$item.sale_sku-$item.sale_count}></font>
										<{else}>
										<span class="pointcl">真遗憾您来晚了，已经卖光了。</span>
										<{/if}>
									</p>
									<{else}>
									<{/if}>
								</li>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"35",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</div>
							<div style=" line-height: 22px; color: #EDEDED;float:left;padding-left: 2%;  ">
								真低价，敢比价。
							</div>
						</div>
					</div>
	<!--	<div class="zkzq_bo"> 
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"35",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>'data[sale_remai]','limit'=>"1")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"35",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>'data[sale_remai]','limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<li >
		<a target="_blank"  href="<{if $item.link}><{$item.link}><{else}><{link ctl='mall/product:detail' arg0=$item.producdt_id arg1='1'}><{/if}>">
		<img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" /></a>
		<p><h1><{$item.title|cutstr:24:''}><p><b style="color: #e81a62;font-size:14px;font-weight: normal;">￥<{$item.price}></b><small style="color:#666;text-decoration: line-through;margin-left:5%;">￥<{$item.market_price}></small></p></h1><p>
		</li><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"35",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>'data[sale_remai]','limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<div class="zkzq_bo1"><?php echo smarty_function_adv(array('id'=>"50",'name'=>"ad",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"asc",'limit'=>"2"),$_smarty_tpl);?>
</div>
	</div>  -->
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'product/product','sale_type'=>"2",'limit'=>"4")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'product/product','sale_type'=>"2",'limit'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<div class="zkzq_bo" > 
		<li>
			<a target="_blank" class='zkzq_bo_img'  href="<{link ctl='mobile/product:detail' arg1=$item.product_id}>">
				<img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" /></a>
				<p><h1><{$item.name}></h1></p>
				<p>
				<b style="color: #e81a62;font-size:14px;font-weight: normal;">￥<{$item.price}></b>
				<small style="color:#666;text-decoration: line-through;margin-left:5%;">￥<{$item.market_price}></small></p>
			</li>
			<div class="zkzq_bo1">
				<{calldata  mdl='product/photo' product_id=$item.product_id limit="3"}>
				<li><a href="<{link ctl='mobile/product:detail' arg1=$item.product_id}>"><img src="<{$pager.img}>/<{$item.photo}>_small.jpg" /></a></li>
				<{/calldata}>
			</div>
		</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'product/product','sale_type'=>"2",'limit'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>
</div>	
<!--折扣专区-->
<!--猜你喜欢-->
<style>
	.like{width:100%;position:relative;overflow:hidden;height:100%;background:#eee;}
	.like_title{height:46px;text-align:center;margin-top:15px;margin-bottom:5px;}	
	.like_info{width:100%;margin: 0 auto;}
	.like_info li{width:48.5%;float:left;background:#fff;float:left;margin-top: 2%;margin-left: 1%; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);}
	.like_info li img{width: 100%; height: 100%;}
</style>
<div class="like">
	<div class="like_title"><span class="like_ico">您可能需要这些</span></div>
	<?php echo $_smarty_tpl->getSubTemplate ("mobile/index_pro/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<!--猜你喜欢-->
<!--<div class="mb10">
	<p class="pub_tit">推荐装修公司</p>
	<ul class="app_menu">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"37",'name'=>"手机版首页推荐公司",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"37",'name'=>"手机版首页推荐公司",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<li>
			<a href="<{link ctl='mobile/company' arg0=$item.company_id}>">
			<img src="<{$pager.img}>/<{$item.logo}>" class="lt pic" />
			<h2><{$item.name}></h2>
			<p class="nowrap">口号：<{$item.slogan}></p>
			<p class="nowrap"><span>案例(<font class="fontcl2"><{$item.case_num}></font>)</span><span>工地(<font class="fontcl2"><{$item.site_num}></font>)</span></p>
			<div class="cl"></div>
			</a>
		</li>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"37",'name'=>"手机版首页推荐公司",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</ul>
</div>
<div class="mb10">
	<p class="pub_tit">优惠信息</p>
	<ul class="app_menu">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"38",'name'=>"手机版首页推荐优惠信息",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"38",'name'=>"手机版首页推荐优惠信息",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<li>
			<a href="<{link ctl='mobile/youhui:detail' arg0=$item.youhui_id}>">
			<div class="index_youhui opacity_img">
				<img src="<{$pager.img}>/<{$item.photo}>" />
				<p class="bg"></p>
				<p class="text"><{$item.title}></p>
			</div>
			</a>
		</li>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"38",'name'=>"手机版首页推荐优惠信息",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</ul>
</div> -->
<script type="text/javascript" src="/themes/default/mobile/assets/script/slider.js"></script>
<script type="text/javascript">
	$(document).ready(function(){$(".slider").yxMobileSlider({width:300,height:150,during:3000})});
</script>
<script type="text/javascript" src="/themes/default/mobile/static/script/flipsnap.min.js"></script>
<script type="text/javascript" src="/themes/default/mobile/static/script/banner.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$.KT.initBanner(".banner", 0.5, true,5000);
	});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>