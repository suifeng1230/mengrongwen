<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 17:15:34
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\mobile\index.html" */ ?>
<?php /*%%SmartyHeaderCode:280385ac497b670e4d1-41772257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3289a68d3ce680f33f9e897f68350cfd14132ccb' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\mobile\\index.html',
      1 => 1482119406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280385ac497b670e4d1-41772257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac497b6837318_26541738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac497b6837318_26541738')) {function content_5ac497b6837318_26541738($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adv')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.adv.php';
if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_block_KT')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\block.KT.php';
?><?php $_smarty_tpl->tpl_vars["is_index_home"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="banner">
	<?php echo smarty_function_adv(array('id'=>"17",'name'=>"手机版首页轮播广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>

</div>
<div class="pding">
	<div class="nav">
		<ul>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'mobile/case'),$_smarty_tpl);?>
"><span class="index_ico index_ico1"></span>
				<p>效果图</p>
				</a>
			</li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'mobile/article'),$_smarty_tpl);?>
"><span class="index_ico index_ico2"></span>
				<p>学装修</p>
				</a>
			</li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'mobile/designer'),$_smarty_tpl);?>
"><span class="index_ico index_ico3"></span>
				<p>设计师</p>
				</a>
			</li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'mobile/gz'),$_smarty_tpl);?>
"><span class="index_ico index_ico4"></span>
				<p>找工长</p>
				</a>
			</li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'mobile/company'),$_smarty_tpl);?>
"><span class="index_ico index_ico5"></span>
				<p>装修公司</p>
				</a>
			</li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'mobile/tenders'),$_smarty_tpl);?>
"><span class="index_ico index_ico6"></span>
				<p>我要装修</p>
				</a>
			</li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'mobile/zxb'),$_smarty_tpl);?>
"><span class="index_ico index_ico7"></span>
				<p>装修宝</p>
				</a>
			</li>
			<li><a href="#" id="dt-hd-nav"><span class="index_ico index_ico11"></span>
				<p>更多</p>
				</a>
			</li>
			<div class="cl"></div>
		</ul>
	</div>
</div>
<div class="mb10">
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
</div>

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