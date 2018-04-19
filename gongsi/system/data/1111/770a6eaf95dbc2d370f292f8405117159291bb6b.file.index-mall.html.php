<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:16:55
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\block\index-mall.html" */ ?>
<?php /*%%SmartyHeaderCode:126405acb05573e48d7-21206386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '770a6eaf95dbc2d370f292f8405117159291bb6b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\block\\index-mall.html',
      1 => 1523254576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126405acb05573e48d7-21206386',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5acb05573f7104_37151310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb05573f7104_37151310')) {function content_5acb05573f7104_37151310($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
?>
			<div class="index_nav_lt" style='    height: 480px;'>
				<div class="inl_name">主题市场111111<i></i></div>
			</div>
<div class="mall_cate">
	<ul>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'shop/cate','limit'=>"5")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'shop/cate','limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	   <li class="cate1">
			<span><em class="icon<{$iteration}>"></em><{$item.title}><i></i></span>
			<div class="div1" style="display: none;">
			   <{calldata mdl="shop/cate" parent_id=$item.cat_id  limit="18"}><div class="bigclass">
					<a href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><{$item.title}></a></div>
					<div class="smallclass">
						<{calldata mdl="shop/cate" parent_id=$item.cat_id  limit="18"}>
							<a href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><{$item.title}></a>
						<{/calldata}>
					</div>
			   <{/calldata}>
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