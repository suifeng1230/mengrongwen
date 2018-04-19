<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 11:25:54
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\index.html" */ ?>
<?php /*%%SmartyHeaderCode:55975ad5501265ee03-55699794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fb5030ed79ee7c4381832892c99d6cf2b742e38' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\index.html',
      1 => 1523935551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55975ad5501265ee03-55699794',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55013282c32_02739035',
  'variables' => 
  array (
    'request' => 0,
    'pager' => 0,
    'MEMBER' => 0,
    'CONFIG' => 0,
    'item' => 0,
    'COUNT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55013282c32_02739035')) {function content_5ad55013282c32_02739035($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adv')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.adv.php';
if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_block_calldata')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_block_KT')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.KT.php';
?><div class='top_bc'><?php echo $_smarty_tpl->getSubTemplate ("block/index-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>.top_bc{background:url(/themes/default/static/images/bc.png) no-repeat;  background-position: center;background-position-y: 200px;}</style>
<div class="banner" style='margin-top:23px;height: 485px;'>
	<?php echo $_smarty_tpl->getSubTemplate ("block/index-mall.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="banner_lt lt">
		<div class="banner_mid_top" style="width:790px;height:340px;overflow:hidden;">
		<?php echo smarty_function_adv(array('id'=>"1",'name'=>"网站首页头部轮转广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
		<div class="banner_lt_b" style=' margin-top: 10px;'>
			<a href="<?php echo smarty_function_link(array('ctl'=>'gs:items'),$_smarty_tpl);?>
" style=' border: none;' ><img src="/themes/default/static/images/banner_b_lt1.jpg" /></a>
			<a href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
" style=' float: right; border: none;'><img src="/themes/default/static/images/banner_b_rt1.jpg" /></a>
		</div>
	</div>
	<style>
	.banner_rt{ width: 198px;height: 374px;margin: -19px 0px;}
	.banner_rt_box{border: 1px solid #F3F3F3;background: #fff; margin-left: -2px;height: 120px;    background: -webkit-gradient(linear,0 0, 50 bottom, from(rgba(255, 231, 166, 0.24)), to(rgb(255, 255, 255)));}
	.banner_rt_box:hover{background: -webkit-gradient(linear,0 0, 50 bottom, from(#FFE7A6), to(rgb(255, 255, 255)));}
	.banner_rt_box a{text-decoration:none;}
	.banner_rt_box p a img{border-radius: 50px;    margin: 0 10px 0px 2px; border: 2px solid #cdae6b;padding: 2px;}
	.memuser{z-index: 11; position: relative;margin-left: 3px;}
	.memlogin{margin-left: 3px;}
	.memuser ul li,.memlogin li{border: 2px solid #F00; width: 75px; margin-left: 12px; float: left;  text-align: center;}
	.memuser ul li a,.memlogin li a{color:red;padding: 0;text-align: center;line-height: 20px;text-decoration:none;}
	.memuser ul li span,.memlogin li span{margin-left: 0;}
	.zxgs{padding: 12px 0px 3px 5px !important;background:#fff;margin-left:-1px;}
	.memlogin li:hover,.memuser ul li:hover{background:#f00;}
	.memuser ul li a:hover,.memlogin li a:hover,.memlogin li:hover a,.memuser ul li:hover a{color:#fff;}
	</style>
	<div class="banner_rt rt">
		<div class='banner_rt_box'>
			<p><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:index'),$_smarty_tpl);?>
" class="lt"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['face'];?>
" width="46" height="46"/></a>
				<div style='padding:2px;'>Hi，<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:index'),$_smarty_tpl);?>
" style='color:red;'><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['MEMBER']->value['realname'],7);?>
</a> 欢迎来到<a><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>！</div></p>
			<div class='memuser'>
				<?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['uid']){?>
				<ul>
					<li>
						<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:index'),$_smarty_tpl);?>
" >个人中心</a>
					</li>
					<?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='company'){?>
					<li>
						<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/company:index'),$_smarty_tpl);?>
" >公司管理</a>
					</li>
					<?php }elseif($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='shop'){?>
					<li>
						<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:index'),$_smarty_tpl);?>
" >商铺管理</a>
					</li>
				<?php }?>
				</ul>
				<?php }else{ ?>
				<div class='memlogin'>
					<li><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'passport'),$_smarty_tpl);?>
" mini-login="login">登录</a></li>
					<li><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'passport:reg'),$_smarty_tpl);?>
">注册</a></li>
				</div>
				<?php }?>
			</div>
		</div>
		<p class='zxgs'><b>装修公司</b>
		<a href="/tenders.html" class="fontcl1 rt" style="margin: 2px 5px 0px 0px;">加入我们</a></p>
		<div class="area index_paih index_bus dz_index_bus dz_index_paih  rt" style='height: 316px;border: none;'>
			<!--banner右边装修公司排行开始-->
			<p class="tit" style='border-bottom: none; background: rgba(110, 101, 104, 0.1);height: 36px;line-height: 36px;margin-top: 4px;'>
			<a href="javascript:;" class="tit1 first">钻石<span>企业</span></a>
				<a href="javascript:;" class="tit1" >白金<span>企业</span></a>
				<a href="javascript:;" class="tit1">铂金<span>企业</span></a>
				<a href="javascript:;" class="tit1">黄金<span>企业</span></a>
				<a href="javascript:;" class="tit1">普通<span>企业</span></a>
			</p>
			<div class="index_paihang dz_index_paihang">
				<ul  style="padding: 6px 15px;">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'group_id'=>11,'order'=>"tenders_num:DESC",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'group_id'=>11,'order'=>"tenders_num:DESC",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li style="line-height: 33px;">
						<a target="_blank" title="<{$item.name}>" href="<{$item.company_url}>" target="_blank" class="lt" style="padding-left: 5px;font-size:14px;white-space:nowrap;overflow:hidden;"><{$item.name|cutstr:15}></a>
						<em class="rt" style="padding-right: 8px;"><{$item.area_name}></em>
					</li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'group_id'=>11,'order'=>"tenders_num:DESC",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
				<ul  style="padding: 6px 15px;">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'group_id'=>10,'order'=>"tenders_num:DESC",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'group_id'=>10,'order'=>"tenders_num:DESC",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li style="line-height: 33px;">
						<a target="_blank" title="<{$item.name}>" href="<{$item.company_url}>" target="_blank" class="lt" style="padding-left: 5px;font-size:14px;white-space:nowrap;overflow:hidden;"><{$item.name|cutstr:15}></a>
						<em class="rt" style="padding-right: 8px;"><{$item.area_name}></em>
					</li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'group_id'=>10,'order'=>"tenders_num:DESC",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
				<ul  style="padding: 6px 15px;">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'group_id'=>9,'order'=>"tenders_num:DESC",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'group_id'=>9,'order'=>"tenders_num:DESC",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li style="line-height: 33px;">
						<a target="_blank" title="<{$item.name}>" href="<{$item.company_url}>" target="_blank" class="lt" style="padding-left: 5px;font-size:14px;white-space:nowrap;overflow:hidden;"><{$item.name|cutstr:15}></a>
						<em class="rt" style="padding-right: 8px;"><{$item.area_name}></em>
					</li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'group_id'=>9,'order'=>"tenders_num:DESC",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
				<ul  style="padding: 6px 15px;">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'group_id'=>5,'order'=>"tenders_num:DESC",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'group_id'=>5,'order'=>"tenders_num:DESC",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li style="line-height: 33px;">
						<a target="_blank" title="<{$item.name}>" href="<{$item.company_url}>" target="_blank" class="lt" style="padding-left: 5px;font-size:14px;white-space:nowrap;overflow:hidden;"><{$item.name|cutstr:15}></a>
						<em class="rt" style="padding-right: 8px;"><{$item.area_name}></em>
					</li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'group_id'=>5,'order'=>"tenders_num:DESC",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
				<ul  style="padding: 6px 15px;">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'group_id'=>4,'order'=>"tenders_num:DESC",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'group_id'=>4,'order'=>"tenders_num:DESC",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li style="line-height: 33px;">
						<a target="_blank" title="<{$item.name}>" href="<{$item.company_url}>" target="_blank" class="lt" style="padding-left: 5px;font-size:14px;white-space:nowrap;overflow:hidden;"><{$item.name|cutstr:15}></a>
						<em class="rt" style="padding-right: 8px;"><{$item.area_name}></em>
					</li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'group_id'=>4,'order'=>"tenders_num:DESC",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>
		</div>
	<!--	<form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save'),$_smarty_tpl);?>
" method="post" mini-form="tender1">
            <input type="hidden" name="data[from]" value="TZX" />
			<table>
				<tr>
					<td><font class="fontcl2">*</font>我的称呼</td>
					<td>
						<input name="data[name]" class="text" type="text"  onfocus="if (this.value == '请填写您的姓名') {this.value = ''};" onblur="if (this.value == '') {this.value = '请填写您的姓名'};"  value="请填写您的姓名" >
					</td>
				</tr>
				<tr>
					<td><font class="fontcl2">*</font>联系电话</td>
					<td>
						<input  name="data[mobile]" type="text"  class="text" onfocus="if (this.value == '请填写你的号码') {this.value = ''};" onblur="if (this.value == '') {this.value = '请填写你的号码'};"  value="请填写你的号码">
					</td>
				</tr>
				<tr>
					<td>装修面积</td>
					<td>
						<input name="data[area]" type="text"  class="short text" >
						<font class="arear">m²</font></td>
				</tr>
				<tr>
					<td>所在地址</td>
					<td>
						<input name="data[addr]" type="text"  value=""  class="text" >
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="点击提交"  class="btn_sub_apply btn">
					</td>
				</tr>
			</table>
		</form>
		<span>现在申请立省<b>20%</b></span> -->
	</div>
</div></div>
<style>
.xsqg{width: 1200px;margin: -30px auto;min-width: 1200px;}
.xsqg_box{}
.xsqg ul{background:#fff;width: 100%; height: 230px; padding: 10px 0;}
.xsqg ul li{width:200px;overflow:hidden;height: 230px;border-right:1px solid #dedede;}
.xsqg ul li a:hover{color:red;text-decoration: none;}
.xsqg ul li img{width:173px;margin: 10px 15px;cursor: pointer;transition: all 0.6s;  }
.xsqg ul li img:hover{transform: scale(1.2); }
.xsqg ul li p{padding: 0 15px;overflow: hidden;line-height: 18px;height: 38px;line-height: 18px;}
.sk_item_shadow{ background: url(/themes/default/static/images/sprite_index@1x.png) no-repeat; height: 20px;    margin: -10px 15px;}
.xsqg_rt{float: left;width: 195px;}
.xsqg .xsqg_rt li img{width: 100%;margin: 0;}
.tim1{width:100%;background: url(/themes/default/static/images/xsqg.png) no-repeat;height: 55px;}
.tim2{float: right;margin-right: 97px;margin-top: 15px;}
.tim2 span{color: red;font-size: 20px;font-weight: bold;width: 36px;height: 32px;text-align: center;float: left;margin-left: 12px;}
</style>
<div class="xsqg">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"35",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"1")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"35",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<div class="tim1">
			<div class='tim2' remaintime1="<{$item.sale_time}>"></div>
		</div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"35",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div >
		<ul>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"35",'name'=>"首页商城热卖商品",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"35",'name'=>"首页商城热卖商品",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li class='lt'>
					<a  href="<{$item.link}>" target="_blank">
						<img src="<{$pager.img}>/<{$item.thumb}>" alt="undefined" style="display: inline;height:115px !important;">
						<div class="sk_item_shadow"></div>
						<p style=' margin-top: 25px;'><{$item.ext.shop.name|cutstr:20}>【<{$item.title|cutstr:60}>】</p>
						<p style=' margin-top: 8px;'><b style='font-size:20px;font-weight:bold;color:red;'>￥<{$item.price}></b><span style='margin-left:4px;text-decoration: line-through;color: #555;'>￥<{$item.market_price}></span></p>
					</a>
				</li>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"35",'name'=>"首页商城热卖商品",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div class='xsqg_rt'><?php echo smarty_function_adv(array('id'=>"33",'name'=>"秒杀",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
		</ul>
	</div>
</div>
<div class="cl"></div>

<div class="mainwd">
	<div class="mb20"></div>	<style>
	.baokuan{background: url(/themes/default/static/images/baokuan.png) no-repeat;height: 676px; width: 1280px; float: right; margin-left: -344px; margin-top: 15px;}
	.baokuan_lt{width:840px;position:relative; margin-left: 264px;}
	.baokuan_lt_top{height:108px;float:left; width: 840px; margin: 15px  0 0 40px;}
	.baokuan_lt_top ul li{float:left;  margin-left: 40px;}
	.baokuan_lt_body{height:435px;width:840px;float:left;margin:0 67px;}
	.baokuan_lt_body ul li{float:left;margin-left: 13px;margin-top: 10px;}
	.bx-wrapper .bx-pager{bottom:16px !important;}
	</style>
	<div class='baokuan'>
		<div class="baokuan_lt">
			<div class='baokuan_lt_top'>
			<?php echo smarty_function_adv(array('id'=>"34",'name'=>"爆款",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

			</div>
			<div class='baokuan_lt_body'>
				<?php echo smarty_function_adv(array('id'=>"35",'name'=>"爆款产品",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

			</div>
		</div>
	</div>
		<!--1F热门案例开始-->
	<div class="mb20">
		<!--<div class="index_area pding index_case  index_lt">
			<h2 class="index_tit"><font class="lt"><b class="fontcl1">1F</b><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
热门案例</font>
				<span class="tit_list hoverno lt"><a>风格</a>
				<a>空间</a>
				<a>别墅</a>
				<a>小户型</a>
				<a>工装</a>
				</span>
				<a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
"  class="rt more">更多</a>
			</h2>
			<ul class="index_case_list">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"4",'name'=>"网站首页1F热门案例-风格",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"4",'name'=>"网站首页1F热门案例-风格",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li<{if $first}> class="first"<{/if}> >
				<div class="opacity_img"><a href="<{$item.link}>">
					<img src="<{$pager.img}>/<{$item.thumb}>"/></a>
					<p class="bg"></p>
					<p class="text"><span class="lt"><{$item.title|cutstr:20}></span><span class="rt"><span class="index_ico like_ico"></span><{$item.likes}></span></p>
				</div>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"4",'name'=>"网站首页1F热门案例-风格",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<ul class="index_case_list ">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"5",'name'=>"网站首页1F热门案例-空间",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"5",'name'=>"网站首页1F热门案例-空间",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li<{if $first}> class="first"<{/if}>>
				<div class="opacity_img"><a href="<{$item.link}>">
					<img src="<{$pager.img}>/<{$item.thumb}>"/></a>
					<p class="bg"></p>
					<p class="text"><span class="lt"><{$item.title|cutstr:20}></span><span class="rt"><span class="index_ico like_ico"></span><{$item.likes}></span></p>
				</div>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"5",'name'=>"网站首页1F热门案例-空间",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<ul class="index_case_list ">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"6",'name'=>"网站首页1F热门案例-别墅",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"6",'name'=>"网站首页1F热门案例-别墅",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li<{if $first}> class="first"<{/if}>>
				<div class="opacity_img"><a href="<{$item.link}>">
					<img src="<{$pager.img}>/<{$item.thumb}>"/></a>
					<p class="bg"></p>
					<p class="text"><span class="lt"><{$item.title|cutstr:20}></span><span class="rt"><span class="index_ico like_ico"></span><{$item.likes}></span></p>
				</div>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"6",'name'=>"网站首页1F热门案例-别墅",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<ul class="index_case_list">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"7",'name'=>"网站首页1F热门案例-小户型",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"7",'name'=>"网站首页1F热门案例-小户型",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li<{if $first}> class="first"<{/if}>>
				<div class="opacity_img"><a href="<{$item.link}>">
					<img src="<{$pager.img}>/<{$item.thumb}>"/></a>
					<p class="bg"></p>
					<p class="text"><span class="lt"><{$item.title|cutstr:20}></span><span class="rt"><span class="index_ico like_ico"></span><{$item.likes}></span></p>
				</div>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"7",'name'=>"网站首页1F热门案例-小户型",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<ul class="index_case_list">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"8",'name'=>"网站首页1F热门案例-工装",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"8",'name'=>"网站首页1F热门案例-工装",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li<{if $first}> class="first"<{/if}>>
				<div class="opacity_img"><a href="<{$item.link}>">
					<img src="<{$pager.img}>/<{$item.thumb}>"/></a>
					<p class="bg"></p>
					<p class="text"><span class="lt"><{$item.title|cutstr:20}></span><span class="rt"><span class="index_ico like_ico"></span><{$item.likes}></span></p>
				</div>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"8",'name'=>"网站首页1F热门案例-工装",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>  -->
			<!--1F热门案例结束-->
		<!--中间最新发布订单开始-->
		<div style='margin:15px 0 5px 0;'><?php echo smarty_function_adv(array('id'=>"36",'name'=>"首页招标ad",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
		<div class="rt index_area index_rt_all index_new_order" style='    background-color: #fff;'>
			<h2 class="index_tit"><font class="lt">最新招标</font><a href="<?php echo smarty_function_link(array('ctl'=>'tenders','http'=>'base'),$_smarty_tpl);?>
" class="fontcl2 rt">我要申请</a></h2>
			<p class="new_order_tit"><span class="long">发布日期</span><span>业主</span><span>风格</span><span>预算</span></p>
			<div class="index_nwod_box to_nwod_box">
				<ul class="index_nwod_list" style="text-align:center;">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"tenders/tenders",'order'=>"dateline",'limit'=>"15")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'order'=>"dateline",'limit'=>"15"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<li><a href="<{link ctl='tenders:detail' arg0=$item.tenders_id}>" target="_blank"><span style="width:30%"><{$item.dateline|format:"m-d"}></span><span><{$item.contact|cutstr:3}></span><span><{$item.style_title}></span><span><{$item.budget_title}></span></a></li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'order'=>"dateline",'limit'=>"15"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>
		</div>
		<div class="cl"></div>
	</div>
	<!--中间最新发布订单结束-->
	<!--案例类型分类开始-->
<!--	<div class="maxwid">
		<div class="index_xgt_gzxgt">
			<ul>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'case/album','arg0'=>$_smarty_tpl->tpl_vars['item']->value['producdt_id_id_id_id'],'arg1'=>42,'arg2'=>0,'arg3'=>0,'arg4'=>1),$_smarty_tpl);?>
" target="_blank"><img src="/themes/default/static/images/index_xgt_gzxgt_img6.jpg" alt="客厅" style="display: inline;"><span>客厅</span></a></li>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'case/album','arg0'=>$_smarty_tpl->tpl_vars['item']->value['producdt_id_id_id_id'],'arg1'=>43,'arg2'=>0,'arg3'=>0,'arg4'=>1),$_smarty_tpl);?>
" target="_blank"><img src="/themes/default/static/images/index_xgt_gzxgt_img8.jpg" alt="卧室" style="display: inline;"><span>卧室</span></a></li>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'case/album','arg0'=>$_smarty_tpl->tpl_vars['item']->value['producdt_id_id_id_id'],'arg1'=>45,'arg2'=>0,'arg3'=>0,'arg4'=>1),$_smarty_tpl);?>
" target="_blank"><img src="/themes/default/static/images/index_xgt_gzxgt_img3.jpg" alt="餐厅" style="display: inline;"><span>餐厅</span></a></li>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'case/album','arg0'=>$_smarty_tpl->tpl_vars['item']->value['producdt_id_id_id_id'],'arg1'=>46,'arg2'=>0,'arg3'=>0,'arg4'=>1),$_smarty_tpl);?>
" target="_blank"><img src="/themes/default/static/images/index_xgt_gzxgt_img4.jpg" alt="厨房" style="display: inline;"><span>厨房</span></a></li>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'case/album','arg0'=>$_smarty_tpl->tpl_vars['item']->value['producdt_id_id_id_id'],'arg1'=>44,'arg2'=>0,'arg3'=>0,'arg4'=>1),$_smarty_tpl);?>
" target="_blank"><img src="/themes/default/static/images/index_xgt_gzxgt_img7.jpg" alt="卫生间" style="display: inline;"><span>卫生间</span></a></li>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'case/album','arg0'=>$_smarty_tpl->tpl_vars['item']->value['producdt_id_id_id_id'],'arg1'=>48,'arg2'=>0,'arg3'=>0,'arg4'=>1),$_smarty_tpl);?>
" target="_blank"><img src="/themes/default/static/images/index_xgt_gzxgt_img1.jpg" alt="阳台" style="display: inline;"><span>阳台</span></a></li>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'case/album','arg0'=>$_smarty_tpl->tpl_vars['item']->value['producdt_id_id_id_id'],'arg1'=>0,'arg2'=>72,'arg3'=>0,'arg4'=>1),$_smarty_tpl);?>
" target="_blank"><img src="/themes/default/static/images/index_xgt_gzxgt_img2.jpg" alt="背景墙" style="display: inline;"><span>背景墙</span></a></li>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'case/album','arg0'=>$_smarty_tpl->tpl_vars['item']->value['producdt_id_id_id_id'],'arg1'=>0,'arg2'=>71,'arg3'=>0,'arg4'=>1),$_smarty_tpl);?>
" target="_blank"><img src="/themes/default/static/images/index_xgt_gzxgt_img5.jpg" alt="吊顶" style="display: inline;"><span>吊顶</span></a></li>
            </ul>
        </div>
    </div>  -->
	<div class="mb20" style=' margin-top: -120px;  float: left;'><?php echo smarty_function_adv(array('id'=>"38",'name'=>"网站首页2F上方条幅广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
	<!--案例类型分类结束-->
	<!--2F商城开始-->
	<div class="index_jjsc" >
		<h2><span class="lt"><b class="fontcl1">2F</b><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
建材商城</span><a href="<?php echo smarty_function_link(array('ctl'=>'mall'),$_smarty_tpl);?>
" class="rt more">更多</a></h2>
        <div class="index_module_header">
			<p class="col_r">
				<a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>$_smarty_tpl->tpl_vars['item']->value['producdt_id_id'],'arg1'=>1,'arg2'=>1),$_smarty_tpl);?>
" target="_blank" >建材城</a>
				<a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>$_smarty_tpl->tpl_vars['item']->value['producdt_id_id'],'arg1'=>2,'arg2'=>1),$_smarty_tpl);?>
" target="_blank" >家具城</a>
				<a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>$_smarty_tpl->tpl_vars['item']->value['producdt_id_id'],'arg1'=>4,'arg2'=>1),$_smarty_tpl);?>
" target="_blank" >软装配饰</a>
				<a href="<?php echo smarty_function_link(array('ctl'=>'mall'),$_smarty_tpl);?>
" target="_blank" >品牌特卖</a>
			</p>
		</div>
        <div class="index_list_buy bg_7f4fad_div mtb20">
            <div class="content clear">
                <div class="sec1">
					<?php echo smarty_function_adv(array('id'=>"5",'name'=>"网站首页2F建材商城左侧图片",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

                    <div class="sec1_div1_box">
                        <div class="sec1_div1 col_l">
                            <h4><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>$_smarty_tpl->tpl_vars['item']->value['producdt_id_id'],'arg1'=>1,'arg2'=>1),$_smarty_tpl);?>
" target="_blank">建材城推荐:</a></h4>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/cate",'parent_id'=>6,'limit'=>"2")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>6,'limit'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

									<a href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><span><{$item.title}></span></a>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>6,'limit'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/cate",'parent_id'=>7,'limit'=>"2")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>7,'limit'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

									<a href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><span><{$item.title}></span></a>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>7,'limit'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/cate",'parent_id'=>8,'limit'=>"2")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>8,'limit'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

									<a href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><span><{$item.title}></span></a>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>8,'limit'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>
                        <div class="sec1_div1 col_r">
                            <h4><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>$_smarty_tpl->tpl_vars['item']->value['producdt_id_id'],'arg1'=>2,'arg2'=>1),$_smarty_tpl);?>
" target="_blank">家具城推荐:</a></h4>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/cate",'parent_id'=>111,'limit'=>"2")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>111,'limit'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

									<a href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><span><{$item.title}></span></a>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>111,'limit'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/cate",'parent_id'=>112,'limit'=>"2")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>112,'limit'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

									<a href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><span><{$item.title}></span></a>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>112,'limit'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/cate",'parent_id'=>113,'limit'=>"2")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>113,'limit'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

									<a href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><span><{$item.title}></span></a>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>113,'limit'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>
                    </div>
                    <div class="sec1_div3">
                        <p>热卖促销： </p>
                        <ul>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"31",'name'=>"首页商城热卖促销",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"2")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"31",'name'=>"首页商城热卖促销",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<li><a href="<{$item.link}>" target="_blank"><span><{$item.name}></span></a></li>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"31",'name'=>"首页商城热卖促销",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</ul>
                    </div>
                </div>
                <div class="sec2 ">
					<?php echo smarty_function_adv(array('id'=>"6",'name'=>"首页商城轮播图banner广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

                </div>
                <div class="sec3">
                    <ul id="mall_recommend_list" class="clear">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"35",'name'=>"首页商城热卖商品",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"4")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"35",'name'=>"首页商城热卖商品",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<li>
								<a class="mall_clickstream" href="<{$item.link}>" target="_blank">
									<img src="<{$pager.img}>/<{$item.thumb}>" width="155" height="120" alt="undefined" style="display: inline;">
									<p><{$item.ext.shop.name}>【<{$item.title}>】</p>
									<p class="f_c_e81a62"><b class="fontcl2">￥<{$item.price}></b><span>￥<{$item.market_price}></span></p>
									<em class="icn_triangle_red_down">热门</em>
								</a>
							</li>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"35",'name'=>"首页商城热卖商品",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
				</div>
            </div>
        </div>
        <div class="index_jc_show">
            <ul class="index_jc_list">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/brand",'order'=>"brand_id:desc",'limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/brand",'order'=>"brand_id:desc",'limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <a href="<{link ctl='mall/product' arg0=$vv.cat_id_id_id_id_id arg1=1 arg2=1 arg6=1}>" target="_blank" rel="nofollow">
						<img class="lazy" src="<{$pager.img}>/<{$item.logo}>" data-original="" width="142" height="50" alt="" style="display: block;">
					</a>
                </li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/brand",'order'=>"brand_id:desc",'limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

             </ul>
        </div>
    </div>
	<div class="mb20"></div>
	<!--2F商城结束-->
	<!--3F推荐装修公司开始-->
	<div class="mb20">
		<div class="index_area pding  index_lt index_1floor">
			<h2 class="index_tit"><span class="lt"><b class="fontcl1">3F</b><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
推荐装修公司</span><a href="<?php echo smarty_function_link(array('ctl'=>'gs'),$_smarty_tpl);?>
" class="rt more">更多</a></h2>
			<li style="float: left; height: 285px; width: 220px;margin-top: 10px;"><?php echo smarty_function_adv(array('id'=>"19",'name'=>"网站首页3F推荐装修公司左侧图片",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</li>
			<ul class="index_company ">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"2",'name'=>"网站首页1F推荐装修公司",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"6")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"2",'name'=>"网站首页1F推荐装修公司",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li <{if $index%3==0}>style="margin-left:4px;"<{/if}>>
					<a target="_blank" href="<{$item.link}>"><img src="<{$pager.img}>/<{$item.logo}>" alt="<{$item.name}>"/></a>
					<p class="text"><span class="lt"><a target="_blank" href="<{$item.link}>"><strong><{$item.name}></strong></a></h4></span></p>
					<p class="rt">口碑值：<font class="fontcl1"><{$item.score}></font></p>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"2",'name'=>"网站首页1F推荐装修公司",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>

    <!--最新签约开始-->
		<div class="index_rtcont area inde_paih dz_index_paih rt">
			<!--3F右边装修公司排行开始-->
			<p class="tat"><a href="javascript:;" class=" first">最新签单榜</a>
				<a href="javascript:;" >最新加入</a>
			</p>
			<div class="inde_paihang dz_inde_paihang">
				<ul class="paihang paihang2">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"tenders_num:DESC",'limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"tenders_num:DESC",'limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li>
						<p class="show"><span class="paihang_num <{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></span><a href="<{$item.company_url}>" target="_blank"><{$item.name}></a></p>
						<div class="dz_paihang">
							<a target="_blank" title="<{$item.name}>" href="<{$item.company_url}>" target="_blank" class="lt"><img src="<{$pager.img}>/<{$item.logo}>" /></a>
							<div class="dz_ph_yuey">
								<span>签单数 <font class="pointcl"><{$item.sign_num}></font></span>
								<a href="<{link ctl='gs:yuyue'  arg0=$item.company_id http='empty'}>" mini-width='500' mini-load="免费预约" class="btn_sub_smler btn">立即预约</a>
							</div>
						</div>
					</li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"tenders_num:DESC",'limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
				<ul class="paihang paihang2">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li>
						<p class="show"><span class="paihang_num <{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></span><a href="<{$item.company_url}>" target="_blank"><{$item.name}></a>
						</p>
						<div class="dz_paihang">
							<a target="_blank" title="<{$item.name}>" href="<{$item.company_url}>" target="_blank" class="lt"><img src="<{$pager.img}>/<{$item.logo}>" /></a>
							<div class="dz_ph_yuey">
								<span>签单数 <font class="pointcl"><{$item.sign_num}></font></span>
								<a href="<{link ctl='gs:yuyue'  arg0=$item.company_id http='empty'}>" mini-width='500' mini-load="免费预约" class="btn_sub_smler btn">立即预约</a>
							</div>
						</div>
					</li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>
			<!--3F右边装修公司排行结束-->
		</div>
    <!--最新签约结束-->
		<div class="cl"></div>
	</div>
	<!--3F推荐装修公司结束 -->
	<div class="mb20"><?php echo smarty_function_adv(array('id'=>"37",'name'=>"网站首页3F-4F中间广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
	<!--4F优秀设计师开始 -->
	<div class="mb20">
		<div class="pding lt index_area sec-design">
			<h2 class="index_tit"><span class="lt"><b class="fontcl1">4F</b><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
优秀设计师</span><a href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
" class="rt more"  target="_blank">更多</a>
			<div class="navbar-menu"><a href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
" title="免费预约设计" class="free-release bzw_popup_05">免费预约设计</a></div></h2>
					<ul class="small-hd">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"orderby:ASC",'limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"orderby:ASC",'limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<li <{if $index%3==0}>style="margin-left:0px;"<{/if}>>
								<a target="_blank" href="<{link ctl='blog' arg0=$item.uid}>" title="<{$item.name}>">
									<img data-original="<{$pager.img}>/<{$item.face}>" alt="<{$item.name}>" src="<{$pager.img}>/<{$item.face}>" class="img" style="display: block;">
									<div class="txt">
										<h6><{$item.name|cutstr:12}></h6>
										<p class="shenfen"><{$item.group_name}></p>
										<p class="num">案例数：<span><{$item.case_num}></span></p>
										<p class="num">预约数：<span><{$item.yuyue_num}></span></p>
										<p class="num">综合评价：<span><{$item.avg_score}></span></p>
										<p class="num-1" target="_blank" href="<{link ctl='designer:yuyue' arg0=$designer.uid http='ajax'}>">委托设计</p>
									</div>
								</a>
							</li>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"orderby:ASC",'limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
			<div class="cl"></div>
		</div>
		<div class="main_3f_rt dz_index_rt hoverno rt">
			<div class="main_3f_rt_cont three_rt_cont1">
				<p class="title">百位在线设计师</p>
				<p class="txt">专业是我们的追求，我们的努力只为提供更好的家装设计，您更舒适的家。</p>
				<a href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
">预约设计</a>
			</div>
			<div class="main_3f_rt_cont three_rt_cont2">
				<p class="title">实时跟踪工地进程</p>
				<p class="txt">专业是我们的追求，我们的努力只为提供更好的家装参考，装出您更舒适的家。</p>
				<a href="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
">参观工地</a>
			</div>
		</div>
		<div class="cl"></div>
	</div>
	<!--4F优秀设计师结束 -->
	<!--5F在建工地开始-->
	<div class="mb20">
		<div class="main_5f_lt dz_index_lt lt" style="height: 0;">
		<h2 class="index_tit"><span class="lt"><b class="fontcl1">5F</b><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
在建工地</span><a href="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
" class="rt more"  target="_blank">更多</a></h2>
			<ul class="jq_pic_opacity">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'home/site','city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>'site_id:desc','limit'=>4)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'home/site','city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>'site_id:desc','limit'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<span>工地名称：<a target="_blank" title="<{$item.title}>" href="<{link ctl='site:detail' arg0=$item.site_id}>"><{$item.title}></a>
					</span><span>承接公司：<a target="_blank" title="<{$item.ext.company.name}>" href="<{$item.ext.company.company_url}>"><font class="fontcl2"><{$item.ext.company.name}></font></a>
					</span><span>进度：<font class="fontcl2"><{$item.status_title}></font></span>
					<div class="main_5f_hidden">
						<a href="<{link ctl='site:detail' arg0=$item.site_id}>" class="lt"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
						<div class="main_5f_hidden_lt lt">
							<p class="title"><span>工地名称：<a href="<{link ctl='site:detail' arg0=$item.site_id}>"><b  class="fontcl1"><{$item.title}></b></a>
								</span><span>承接公司：<{if $item.ext.company}><a href="<{$item.ext.company.company_url}>" class="fontcl2"><{$item.ext.company.name}></a>
								<{else}><{$CONFIG.site.title}><{/if}></span></p>
							<p class="bz"><{foreach $item.ext.status_list as $vv}><a><{$vv}></a>
								<{/foreach}></p>
							<div class="bzhou bzou_<{$item.status}>"></div>
						</div>
						<div class="main_5f_hidden_rt rt">
							<a mini-load="我要参观"  href="<{link ctl='site:yuyue' arg0=$item.site_id}>" class="btn btn_sub_big">我要参观</a>
							<p>最后更新时间：<{date('m-d',$item.dateline)}></p>
						</div>
					</div>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'home/site','city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>'site_id:desc','limit'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
		<div class="main_5f_rt rt">
			<p>查看工地进度详情进一步了解家装流程</p>
			<form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'ajax'),$_smarty_tpl);?>
" method="post" mini-form="tender2" >
				<input type="text" name="data[name]" placeholder="请填写您的姓名" />
				<input type="text"  name="data[mobile]"  placeholder="请填写你的号码" />
				<input  name="data[home_name]" type="text"  placeholder="请填写您要参观的小区" />
				<input  type="submit"  class="form_bt" value="申请免费参观"/>
			</form>
		</div>
		<div class="cl"></div>
	</div>
	<!--5F在建工地结束-->

	<!-------最新招标，最新签约，最新优惠start------>
	<div class="newest mb20">
		<!--最新签约开始-->
		<div class="newest_a lt">
			<h2 class="index_tit"><span class="lt"><b class="fontcl1">6F</b>最新签约</span><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
" class="rt more"  target="_blank">更多</a></h2>
			<ul class="block_type area">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"tenders/tenders",'sign_company_id'=>"gt 0",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"4")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'sign_company_id'=>"gt 0",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


					<li <{if $index==4}>style="border-bottom:none"<{/if}>>
						<p>
							<span class="lt"><a href="<{$item.ext.company.company_url}>" target="_blank" title='<{$item.info.company.name}>' class="tp"><{$item.ext.company.name}></a></span>
							<span class="rt"><a title="<{$item.title}>" href="<{link ctl='tenders:detail' arg0=$item.tenders_id}>" target="_blank" class="rt btn_sub_smler btn">新签约</a></span>
						</p>
						<p>
							<span class="lt"><a href="<{link ctl='home:detail' arg0=$item.home_id_id arg1="1"}>" target="_blank" class="graycl">[<{$item.home_name|default:'--'}>]</a></span>
							<span class="rt name"><{$item.contact|cutstr:3:''}>**</span>
						</p>
					</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'sign_company_id'=>"gt 0",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
		<!--最新签约结束-->
		<!--最新招标订单开始-->
		<div class="newest_b lt">
			<h2 class="index_tit"><span class="lt">团装活动</span><a href="<?php echo smarty_function_link(array('ctl'=>'home:tuan'),$_smarty_tpl);?>
" class="rt more"  target="_blank">更多</a></h2>
				<ul	class="block_type area">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"40",'name'=>"网站首页3F小区团装",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"2")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"40",'name'=>"网站首页3F小区团装",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li style="width: 280px;height: 210px;float: left;border-bottom: none;">
						<div class="opacity_img" >
							<a href="<{$item.link}>"><img src="<{$pager.img}>/<{$item.thumb}>" style="width: 100%;height: 210px;"/></a>
							<p class="bg"></p>
							<p class="text"><span class="index_ico time_ico"></span><font remaintime="<{$item.ltime}>"></font></p>
						</div>
						<div class="index_tuanz_btm">
							<p><b><a href="<{$item.link}>" class="tit"><{$item.title}></a>
								</b></p>
							<p class="colorbg"><span class="lt tit">立省<b class="fontcl2" style="font-size: 16px;">￥<{$item.jieyue}></b>元</span>
							<a href="<{link ctl='home:tuanDetail' arg0=$item.tuan_id}>" target="_blank" class="btn_sub_sm rt btn">立即参团</a>
							</p>
							<p style="padding: 2px 0 0 110px;"><font class="fontcl2"><{$item.sign_num}></font>人已参团</p>
						</div>
					</li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"40",'name'=>"网站首页3F小区团装",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
		</div>
		<!--最新招标订单结束-->
		<!--最新优惠开始-->
		<div class="newest_c rt">
			<h2 class="index_tit"><span class="lt">最新优惠</span><a href="<?php echo smarty_function_link(array('ctl'=>'activity'),$_smarty_tpl);?>
" class="rt more" target="_blank">更多</a></h2>
			<ul class="area pding" >
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/youhui",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/youhui",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<{if $item.status=='process'}>
					<a target="_blank" title='<{$item.title}>' href="<{link ctl='youhui:detail' arg0=$item.youhui_id}>" class="colorBg bg">进行中</a>
					<{elseif $item.status == 'wait'}>
					<a  target="_blank" title='<{$item.title}>' href="<{link ctl='youhui:detail' arg0=$item.youhui_id}>" class="bg">未开始</a>
					<{else}>
					<a target="_blank" title='<{$item.title}>' href="<{link ctl='youhui:detail' arg0=$item.youhui_id}>" class="bg">已结束</a>
					<{/if}>
					<a href="<{link ctl='youhui:detail' arg0=$item.youhui_id}>"  target="_blank"><{$item.title|cutstr:35:''}></a>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/youhui",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
		<!--最新优惠结束-->
		<div class="cl"></div>
	</div>
	<!-------最新招标，最新签约end------->
	<div class="mb20"> <?php echo smarty_function_adv(array('id'=>"20",'name'=>"网站首页7F装修学堂上方",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
	<!--7F装修课堂开始-->
	<div class="mb20 index_area pding">
		<h2 class="index_tit"><span class="lt"><b class="fontcl1">7F</b>装修攻略</span><small>已有 <?php echo $_smarty_tpl->tpl_vars['COUNT']->value['member'];?>
位业主找到灵感</small><a href="<?php echo smarty_function_link(array('ctl'=>'article'),$_smarty_tpl);?>
" class="rt more"  target="_blank">更多</a></h2>
		<div class="class_box" >
			<div class="class_box_top">
				<a href="<?php echo smarty_function_link(array('ctl'=>'diary'),$_smarty_tpl);?>
"><img src="/themes/default/static/images/ketang_pic1.jpg" /></a>
				<span>装修日记</span>
			</div>
			<ul>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"diary/diary",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"diary/diary",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a href="<{link ctl='diary:detail' arg0=$item.diary_id}>"  target="_blank"><{$item.title|cutstr:48}></a>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"diary/diary",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
		<div class="class_box">
			<div class="class_box_top">
				<a href="<?php echo smarty_function_link(array('ctl'=>'ask'),$_smarty_tpl);?>
"><img src="/themes/default/static/images/ketang_pic2.jpg" /></a>
				<span>知识问答</span>
			</div>
			<ul>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"ask/ask",'answer_id'=>'>:0','order'=>"ask_id:desc",'limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"ask/ask",'answer_id'=>'>:0','order'=>"ask_id:desc",'limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a target='_blank' title="<{$item.title}>" href="<{link ctl='ask:detail' arg0=$item.ask_id}>"><{$item.title|cutstr:48}></a>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"ask/ask",'answer_id'=>'>:0','order'=>"ask_id:desc",'limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
		<div class="class_box class_box_last">
			<div class="class_box_top">
				<a href="<?php echo smarty_function_link(array('ctl'=>'article'),$_smarty_tpl);?>
"><img src="/themes/default/static/images/ketang_pic3.jpg"/></a>
				<span>装修课堂</span>
			</div>
			<ul>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/article",'order'=>"article_id:desc",'limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/article",'order'=>"article_id:desc",'limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a href="<{link ctl='article:detail' arg0=$item.article_id}>" target="_blank"><{$item.title|cutstr:48}></a>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/article",'order'=>"article_id:desc",'limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
		<div class="cl"></div>
	</div>
	<!--7F装修课堂结束-->
	<!--友情链接开始-->
	<div class="main_link mb20">
		<div class="index_title"><span class="lt"><b>友情链接</b></span></div>
		 <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'market/links','city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"500")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'market/links','city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"500"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    		<a href="<{$item.link}>"><{$item.title}></a>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'market/links','city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"500"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>
	<!--友情链接结束-->
</div>
<script type="text/javascript">
(function(K, $){
$(document).ready(function(){
	$(".banner_lt_b a").mouseover(function(){
		$(this).addClass("on");
		$(this).siblings().removeClass("on");
		})
	$(".banner_lt_b a").eq(0).mouseover();

	$(".dz_index_paihang ul.paihang li").mouseover(function(){
			$(this).find('p.show').hide();
			$(this).find('.dz_paihang').show();
			$(this).siblings().find('p.show').show();
			$(this).siblings().find('.dz_paihang').hide();
	 });
	$(".dz_index_paihang  ul.paihang li").eq(0).mouseover();
	$(".dz_index_paihang  ul.paihang2 li").eq(0).mouseover();

	$(".dz_inde_paihang ul.paihang li").mouseover(function(){
			$(this).find('p.show').hide();
			$(this).find('.dz_paihang').show();
			$(this).siblings().find('p.show').show();
			$(this).siblings().find('.dz_paihang').hide();
	 });
	$(".dz_inde_paihang  ul.paihang li").eq(0).mouseover();
	$(".dz_inde_paihang  ul.paihang2 li").eq(0).mouseover();

	$(".main_sub_nav_3f a").mouseover(function(){
		 var index = $(this).index();
		 $(".main_sub_nav_3f a").each(function(a){
			 if(a == index){
				 $(this).addClass('on');
				 $(".main_3f_lt .main_3f_myhome").eq(a).show();
			 }else{
				 $(this).removeClass('on');
				  $(".main_3f_lt .main_3f_myhome").eq(a).hide();
			 }
		 });
	});
	$(".main_sub_nav_3f a").eq(0).mouseover();

	$(".main_5f_lt ul li").mouseover(function(){
		 var index = $(this).index();
		 $(".main_5f_lt ul li").each(function(a){
			 if(a == index){
				 $(".main_5f_hidden").eq(a).show();
			 }else{
				$(".main_5f_hidden").eq(a).hide();
			 }
		 });
	});
	$(".main_5f_lt ul li").eq(0).mouseover();
})
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
			var str = myD+"天"+myH+"小时"+myM+"分"+myS+"."+myMS+"秒";
        }else{
			var str = "真遗憾您来晚了，抢购已经结束。";
		}
		obj.html(str);
		$("[remaintime1]").each(function(){
        var obj = $(this);
        var endTime = new Date(parseInt(obj.attr('remaintime1')) * 1000);
        var nowTime = new Date();
        var nMS=endTime.getTime() - nowTime.getTime() + difference;
        var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
        var myH=Math.floor(nMS/(1000*60*60)) % 24;
        var myM=Math.floor(nMS/(1000*60)) % 60;
        var myS=Math.floor(nMS/1000) % 60;
        var myMS=Math.floor(nMS/100) % 10;
        if(myD>= 0){
			var str = "<span>"+myH+"</span><span>"+myM+"</span><span>"+myS+"</span>";
        }else{
			var str = "<span>"+00+"</span><span>"+00+"</span><span>"+00+"</span>";
		}
		obj.html(str);
		});
      });
    }, 100);
});
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>