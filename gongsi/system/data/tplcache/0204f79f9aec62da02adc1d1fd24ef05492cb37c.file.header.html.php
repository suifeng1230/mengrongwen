<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 11:01:04
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\/shop/block/header.html" */ ?>
<?php /*%%SmartyHeaderCode:131945ad56370a87b59-62604702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0204f79f9aec62da02adc1d1fd24ef05492cb37c' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\/shop/block/header.html',
      1 => 1438155714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131945ad56370a87b59-62604702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'shop' => 0,
    'CONFIG' => 0,
    'request' => 0,
    'mobile_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad56370db0590_69598757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad56370db0590_69598757')) {function content_5ad56370db0590_69598757($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_shoprank')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.shoprank.php';
if (!is_callable('smarty_modifier_qq')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.qq.php';
if (!is_callable('smarty_modifier_format')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_block_calldata')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_block_KT')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.KT.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="/themes/default/shop/style/default/style.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/jquery.qrcode.min.js"></script>
<?php if ($_smarty_tpl->tpl_vars['shop']->value['skin_cfg']){?><?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shop']->value['skin_cfg']['css']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value){
$_smarty_tpl->tpl_vars['css']->_loop = true;
?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
"/><?php } ?><?php }?>
<!--面包屑导航开始-->
<div class="mb10 subwd sub_topnav">
	<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
		&gt;<a href="<?php echo smarty_function_link(array('ctl'=>'mall/index'),$_smarty_tpl);?>
">商城</a>&gt;<a href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['shop_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['shop']->value['name'];?>
</a>
	</p>
</div>
<!--面包屑导航结束-->
<div class="subwd">
	<!--头部导航开始-->
	<div class="shop_banner"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['shop']->value['banner'];?>
" /></div>
	<div class="shop_nav mb10 hoverno">
		<ul class="lt">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['shop_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='index'){?>class="current"<?php }?>>商铺首页</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop:info','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'shop'=>$_smarty_tpl->tpl_vars['shop']->value),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='info'){?>class="current"<?php }?>>商家介绍</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop:product','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'shop'=>$_smarty_tpl->tpl_vars['shop']->value),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='product'){?>class="current"<?php }?>>所有产品</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop:coupon','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'shop'=>$_smarty_tpl->tpl_vars['shop']->value),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='coupon'){?>class="current"<?php }?>>优惠券</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop:news','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'shop'=>$_smarty_tpl->tpl_vars['shop']->value),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='news'){?>class="current"<?php }?>>活动资讯</a></li>
			<?php if ($_smarty_tpl->tpl_vars['shop']->value['group']['priv']['allow_mendian']>-1){?><li><a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop:mendian','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'shop'=>$_smarty_tpl->tpl_vars['shop']->value),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='mendian'){?>class="current"<?php }?>>门店展示</a></li><?php }?>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop:comment','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'shop'=>$_smarty_tpl->tpl_vars['shop']->value),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='comment'){?>class="current"<?php }?>>口碑点评</a></li>
			<li></li>
		</ul>
		<div class="rt"><div class="coDe">
			<div class="pic">[ 手机扫码 ]<img src="/themes/default/static/images/codeico.jpg" /></div>
			<div class="show" id="QRimg" style="padding:5px;background-color:#fff;height:80px;" val="<?php echo $_smarty_tpl->tpl_vars['mobile_url']->value;?>
"></div>
			</div></div>
		<div class="cl"></div>
	</div>
	<!--头部导航结束-->
	<!--左边主体内容开始-->
	<div class="lt shop_lt">
		<div class="shop_intro area mb10">
			<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['shop']->value['thumb'];?>
" class="pic"/>
			<p class="tit"><?php echo $_smarty_tpl->tpl_vars['shop']->value['name'];?>
</p>
			<p>口碑：<?php echo $_smarty_tpl->tpl_vars['shop']->value['score'];?>
</p>
			<p>信誉：<?php echo smarty_modifier_shoprank($_smarty_tpl->tpl_vars['shop']->value['credit']);?>
</p>
			<p>电话：<?php echo $_smarty_tpl->tpl_vars['shop']->value['show_phone'];?>
</p>
			<p>客服：<br /><?php echo smarty_modifier_qq($_smarty_tpl->tpl_vars['shop']->value['show_qq']);?>
</p>
			<p>关注数 : <font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['shop']->value['views'];?>
</font></p>
			<p>入驻时间 : <?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['shop']->value['dateline'],"Y-m-d");?>
</p>
			
		</div>
		<div class="mb10 area">
			<h3 class="side_tit">商品分类</h3>
			<ul class="shop_fenlei pding">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'shop/vcate','shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'limit'=>30)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'shop/vcate','shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'limit'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li><a href="<{link ctl='mall/shop:product' arg0=$shop.shop_id arg1=$item.vcat_id arg2=1 shop=$shop}>" class="lt"><{$item.title}></a><span class="rt">&gt;</span></li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'shop/vcate','shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'limit'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                             
			</ul>
		</div>
		<div class="mb20 area">
			<h3 class="side_tit">热门排行</h3>
			<ul class="mall_ul side_mall_ul side_shop_ul pding">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"36",'name'=>"商家店铺热卖商品",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"36",'name'=>"商家店铺热卖商品",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li>
				<a href="<{$item.link}>" class="pic"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
				<p><b><a href="<{$item.ext.shop.shop_url}>" class="tit"><{$item.ext.shop.name}></a></b></p>
				<p><a href="<{$item.link}>"><{$item.name}></a></p>
				<p class="price"><b class="fontcl2">￥<{$item.price}></b><span>￥<{$item.market_price}></span></p>
			</li>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"36",'name'=>"商家店铺热卖商品",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
	</div>
	<!--左边主体内容结束-->
<script>
$(".coDe ").mouseover(function(){
	$(this).find(".show").show();
	}).mouseleave(function(){
	$(this).find(".show").hide();
});
(function(){
	$("#QRimg").qrcode({width:80,height:80,correctLevel:0,text:"<?php echo $_smarty_tpl->tpl_vars['mobile_url']->value;?>
"}); 
	})(window.KT, window.jQuery);
</script><?php }} ?>