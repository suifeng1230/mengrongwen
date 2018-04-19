<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 11:01:33
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\mall\block\mall_cate.html" */ ?>
<?php /*%%SmartyHeaderCode:213935ad5638dc5b268-42711821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97537f0562df9dfcef1e2815ad135767b8cbd89f' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\mall\\block\\mall_cate.html',
      1 => 1499918948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213935ad5638dc5b268-42711821',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5638dcdc101_53447499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5638dcdc101_53447499')) {function content_5ad5638dcdc101_53447499($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
?><style>
.mall_cate{top: 0;}
.mall_cate ul li{height: 77px;width: 191px;border-top: 1px solid #333; border-bottom: 1px solid #252525;border-left: 1px solid #252525;}
.mall_cate ul li span{font-weight:bold;line-height: 38.5px;}
.mall_cate ul li span i{top: 15px;}
.mall_cate ul li .div1{top: 0PX;width:760px;min-height: 365px;border: 1px solid #2B2B2B;border-left:none;border-top:1px solid #2B2B2B;background: #f7f7f7;}
.mall_cate ul li .div1 .bigclass{border-bottom:none;}
.mall_cate ul li .div1 .bigclass a{color: #db3e54;  font-size: 14px;font-weight: bold; border-left: none;}
.mall_cate ul li .div1 .smallclass{margin:0 0 20px 10px; line-height: 10px;    min-height: 44px;}
.mall_cate ul li .div1 .smallclass a{font-size: 10px;float: left;width: auto; letter-spacing: 0.5px;line-height: 14px;color: #888;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;padding: 3px 10px;border: 1px solid #e6e6e6;margin: 0;}
.mall_cate ul li .div1 .smallclass a:hover{background:#db3e54;color:#fff;border: 1px solid #db3e54;}
.mall_cate ul li .div1 .div2{width:100%;float: left;}
.mall_cate ul li .div1 .div2 .div3{width:50%;float: left;}
#icondsj1{width: 6px;height:9px;position: absolute;right: 0; top: -20px;margin-top:-4px;margin: 0;}
</style>
	<div style='position:absolute;'>
		<ul style='width: 149px;overflow: hidden;height: 395px;padding: 0 18px 0 25px;'><?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'shop/cate','limit'=>"5")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'shop/cate','limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li style='float:left;border-bottom: none;padding: 46px 0 0 0; height: 33px;width:100%;overflow:hidden;'>
				<div style='height: 13px;line-height: 13px;overflow: hidden;z-index: 23;position:relative;'>
					<{calldata mdl="shop/cate"  parent_id=$item.cat_id limit='4'}>
						<{calldata mdl="shop/cate" parent_id=$item.cat_id limit='1'}>
								<a  style='margin-right: 3px;color:#fff;height:0;' href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><{$item.title}></a>
							<{/calldata}>
						<{/calldata}>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'shop/cate','limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			</li>
		</ul>
	</div>
<div class="mall_cate">
	<ul>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'shop/cate','limit'=>"5")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'shop/cate','limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<li class="cate1">
			<span><em class="icon<{$iteration}>"></em><{$item.title}><i></i></span>
			<span><em id='icondsj1' class=" icon15"></em></span>
			<div class="div1" style='display: none;'>
				<div class='div2'>
					<{calldata mdl="shop/cate"  parent_id=$item.cat_id}>
						<div class='div3'>
							<div class="bigclass">
								<a href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><{$item.title}></a>
							</div>
							<div class="smallclass">
								<{calldata mdl="shop/cate" parent_id=$item.cat_id}><a href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><{$item.title}></a>
								<{/calldata}>
							</div>
						</div>
					<{/calldata}>
				<!-- <div class='width:25%;float:right;'>
						<{KT id="31" name="商城首页1F基础建材" city_id=$request.city_id order='hot' limit='4'}>
							<a href="<{if $item.link}><{$item.link}><{else}><{link ctl='mall/product:detail' arg0=$item.producdt_id arg1='1'}><{/if}>" class="pic"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg"  width=170;/></a>
							<p class="sp"><b><a href="<{$item.link}>"><{$item.title}></a></b></p>
							<p class="price"><b class="fontcl2">￥<{$item.price}></b><span>￥<{$item.market_price}></span></p>
						<{/KT}>
					</div>  -->
			   </div>
			</div>
		</li>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'shop/cate','limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</ul>
<script>
$(document).ready(function(){
	 $(".mall_cate ul li").mouseover(function(){
		 $(this).find(".cate1").addClass('current');
		 $(this).find(".div1").show();
	 }).mouseleave(function(){
		 $(this).find(".cate1").removeClass('current');
		 $(this).find(".div1").hide();
	 });
 });	
</script>
</div><?php }} ?>