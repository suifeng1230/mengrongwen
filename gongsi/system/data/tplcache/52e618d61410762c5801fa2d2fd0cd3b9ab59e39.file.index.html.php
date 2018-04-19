<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:10:43
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\mobile\index_pro\index.html" */ ?>
<?php /*%%SmartyHeaderCode:143195ad557a30281f2-85473574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52e618d61410762c5801fa2d2fd0cd3b9ab59e39' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\mobile\\index_pro\\index.html',
      1 => 1500629535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143195ad557a30281f2-85473574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad557a3053171_11851733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad557a3053171_11851733')) {function content_5ad557a3053171_11851733($_smarty_tpl) {?><?php if (!is_callable('smarty_block_KT')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.KT.php';
?><link rel="stylesheet" type="text/css" href="/themes/default/mobile/index_pro/css/base.css"/>
<link rel="stylesheet" type="text/css" href="/themes/default/mobile/index_pro/css/style.css"/> 
<script src="/themes/default/mobile/mobile/index_pro/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<div class="wrapper">
	<ul class="wall">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"35",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"20")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"35",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"20"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li class="article">
				<a target="_blank"  href="<{link ctl='mobile/product:detail' arg1=$item.product_id}>">
				<img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" /></a>
				<p><a href="<{link ctl='mobile/product:detail' arg1=$item.product_id}>" style="font-size:12px;" target="_blank" ><{$item.title}></a></p>
				<p><b class="tit" style="color:#ff4100">￥<{$item.price}></b><small>￥<{$item.market_price}></small></p>
			</li>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"35",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"20"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</ul>
</div>

<script src="/themes/default/mobile/index_pro/js/jaliswall.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function(){
		$('.wall').jaliswall({ item: '.article' });
	});
</script><?php }} ?>