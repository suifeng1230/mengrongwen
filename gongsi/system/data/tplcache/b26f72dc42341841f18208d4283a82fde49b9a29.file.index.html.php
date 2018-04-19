<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 11:01:33
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\mall\index.html" */ ?>
<?php /*%%SmartyHeaderCode:9115ad5638d90b729-73647174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b26f72dc42341841f18208d4283a82fde49b9a29' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\mall\\index.html',
      1 => 1499918948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9115ad5638d90b729-73647174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5638dc05357_07166401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5638dc05357_07166401')) {function content_5ad5638dc05357_07166401($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adv')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.adv.php';
if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_block_KT')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.KT.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
.mall_banner{width:100%;max-width:1920px;margin: 0 auto;height: 395px;position: relative;border-top: 2px solid #ff4100;}
.mall_banner_top{width: 100%;height: 100%;}
.mall_banner_top img{  width: 100%;}
.mall_top{position: absolute;width: 192px;background: #2b2b2b;box-shadow: 8px 0 7px -3px rgba(0,0,0,.3);height: 397px;border: none;}
.mall_top_show{width: 168px;height: 56px;background:none;}
.mall_top_show p{color:#fff !important;}
.mall_top_show p:hover{color:rgb(51, 51, 51) !important;}
.mall_top .mall_cate ul li:hover,.mall_top .mall_cate ul li span:hover,.cate1:hover span{background:#4a4a4a !important;color:#fff;}
.mall_top .mall_cate ul li span,{line-height:39.5px;}
.marqueen{ position: absolute;background: #FFF;z-index: 11; width: 210px;right: 73px;height: 397px; top: -2px;}
</style>
	<div class="mb20 index_banner">
		<div style='width: 1200px; margin: 0px auto; min-width: 1200px;'>
			<div class="mall_top"><?php echo $_smarty_tpl->getSubTemplate ("mall/block/mall_cate.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
		</div>
		<div class="mall_banner">
			<div class="marqueen">
				<?php echo smarty_function_adv(array('id'=>"39",'name'=>"商城首页banner右边广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

			</div>
			<div class="mall_banner_top">
				<script type="text/javascript">
				 window.onload=function(){
				 var wrap=document.getElementById('wrap'),
				 pic=document.getElementById('pic').getElementsByTagName("li"),
				 list=document.getElementById('list').getElementsByTagName('li'),
				 index=0,
				 timer=null;
				  // 定义并调用自动播放函数
				 timer = setInterval(autoPlay, 5000);
				  // 鼠标划过整个容器时停止自动播放
				 wrap.onmouseover = function () {
				 clearInterval(timer);
				 }
				  // 鼠标离开整个容器时继续播放至下一张
				 wrap.onmouseout = function () {
				 timer = setInterval(autoPlay, 5000);
				 }
				 // 遍历所有数字导航实现划过切换至对应的图片
				 for (var i = 0; i < list.length; i++) {
				 list[i].onmouseover = function () {
				 clearInterval(timer);
				 index = this.innerText - 1;
				 changePic(index);
				 };
				 };
				  function autoPlay () {
				 if (++index >= pic.length) index = 0;
				 changePic(index);
				 }
				  // 定义图片切换函数
				 function changePic (curIndex) {
				 for (var i = 0; i < pic.length; ++i) {
				 pic[i].style.display = "none";
				 list[i].className = "";
				 }
				 pic[curIndex].style.display = "block";
				 list[curIndex].className = "on";
				 }
				  };
				  </script> 
				<div class="wrap" id='wrap'>
					<?php echo smarty_function_adv(array('id'=>"11",'name'=>"商城首页轮转广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

					 <ol id="list">
					 <li class="on">1</li>
					 <li>2</li>
					 <li>3</li>
					 <li>4</li>
					 <li>5</li>
					 </ol>
				</div>
			</div>
			<div style='width: 1200px; margin: 0px auto; min-width: 1200px;'>
				<div class="mall_banner_bottom ">
					<div class="mall_banner_bt_lt lt">					
						<div class="mall_banner_bt_lt_ul"><?php echo smarty_function_adv(array('id'=>"12",'name'=>"商城首页轮转下方图片广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
					</div>
					<div class="mall_banner_bt_rt rt" style='width: 187px;'>
						<h3>招商入驻</h3>
						<p><a href="<?php echo smarty_function_link(array('ctl'=>'passport'),$_smarty_tpl);?>
" class="btn btn_sub_tuan">申请商家入驻</a></p>
						<p><a href="<?php echo smarty_function_link(array('ctl'=>'passport'),$_smarty_tpl);?>
">登录商家管理中心</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="cl"></div>
	</div>
<div class="mainwd">
	<!--banner内容开始-->

	<!--banner内容结束-->
	<!--商品分类内容开始-->
	<div class="mb20 mall_list">
		<h2><span class="lt">1F建材基础</span><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product'),$_smarty_tpl);?>
" class="rt">更多>></a>
		</h2>
		<div class="cl"></div>
		<div class="mall_box area">
			<div class="lt" ><?php echo smarty_function_adv(array('id'=>"13",'name'=>"商城首页1F基础建材",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

            <?php echo smarty_function_adv(array('id'=>"21",'name'=>"商城首页基础建材图片广告2",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

            </div>
			<ul class="line_type mall_ul lt">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"31",'name'=>"商城首页1F基础建材",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"31",'name'=>"商城首页1F基础建材",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a href="<{if $item.link}><{$item.link}><{else}><{link ctl='mall/product:detail' arg0=$item.producdt_id arg1='1'}><{/if}>" class="pic"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" /></a>
					<p class="sp"><b><a href="<{$item.link}>"><{$item.ext.shop.name}>【<{$item.title}>】</a></b></p>
					<p class="price"><b class="fontcl2">￥<{$item.price}></b><span>￥<{$item.market_price}></span></p>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"31",'name'=>"商城首页1F基础建材",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<div class="cl"></div>
		</div>
	</div>
	<div class="mb20 mall_list">
		<h2><span class="lt">2F软装配饰</span><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product'),$_smarty_tpl);?>
" class="rt">更多>></a>
		</h2>
		<div class="cl"></div>
		<div class="mall_box area">
			<div class="lt"><?php echo smarty_function_adv(array('id'=>"14",'name'=>"商城首页2F软装配饰",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

            <?php echo smarty_function_adv(array('id'=>"22",'name'=>"商城首页2F软装配饰2",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

            </div>
			<ul class="line_type mall_ul lt">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"32",'name'=>"商城首页2F软装配饰",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"32",'name'=>"商城首页2F软装配饰",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a href="<{if $item.link}><{$item.link}><{else}><{link ctl='mall/product:detail' arg0=$item.producdt_id arg1=1}><{/if}>" class="pic"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
					<p class="sp"><b><a href="<{$item.link}>"><{$item.ext.shop.name}>【<{$item.title}>】</a></b></p>
					<p class="price"><b class="fontcl2">￥<{$item.price}></b><span>￥<{$item.market_price}></span></p>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"32",'name'=>"商城首页2F软装配饰",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<div class="cl"></div>
		</div>
	</div>
	<div class="mb20 mall_list">
		<h2><span class="lt">3F家具</span><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product'),$_smarty_tpl);?>
" class="rt">更多>></a>
		</h2>
		<div class="cl"></div>
		<div class="mall_box area">
			<div class="lt"><?php echo smarty_function_adv(array('id'=>"15",'name'=>"商城首页3F家具",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
<?php echo smarty_function_adv(array('id'=>"23",'name'=>"商城首页3F家具2",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
			<ul class="line_type mall_ul lt">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"33",'name'=>"商城首页3F家具",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"33",'name'=>"商城首页3F家具",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a href="<{if $item.link}><{$item.link}><{else}><{link ctl='mall/product:detail' arg0=$item.producdt_id arg1=1}><{/if}>" class="pic"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
					<p class="sp"><b><a href="<{$item.link}>"><{$item.ext.shop.name}>【<{$item.title}>】</a></b></p>
					<p class="price"><b class="fontcl2">￥<{$item.price}></b><span>￥<{$item.market_price}></span></p>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"33",'name'=>"商城首页3F家具",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<div class="cl"></div>
		</div>
	</div>
	<div class="mb20 mall_list">
		<h2><span class="lt">4F家用电器</span><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product'),$_smarty_tpl);?>
" class="rt">更多>></a>
		</h2>
		<div class="cl"></div>
		<div class="mall_box area">
			<div class="lt"><?php echo smarty_function_adv(array('id'=>"16",'name'=>"商城首页4F家用电器",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
<?php echo smarty_function_adv(array('id'=>"24",'name'=>"商城首页4F家用电器2",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
			<ul class="line_type mall_ul lt">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"34",'name'=>"商城首页4F家用电器",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"34",'name'=>"商城首页4F家用电器",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a href="<{if $item.link}><{$item.link}><{else}><{link ctl='mall/product:detail' arg0=$item.producdt_id arg1=1}><{/if}>" class="pic"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
					<p class="sp"><b><a href="<{$item.link}>"><{$item.ext.shop.name}>【<{$item.title}>】</a></b></p>
					<p class="price"><b class="fontcl2">￥<{$item.price}></b><span>￥<{$item.market_price}></span></p>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"34",'name'=>"商城首页4F家用电器",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<div class="cl"></div>
		</div>
	</div>
	<!--商品分类内容结束-->
</div>
<!--底部内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("mall/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>