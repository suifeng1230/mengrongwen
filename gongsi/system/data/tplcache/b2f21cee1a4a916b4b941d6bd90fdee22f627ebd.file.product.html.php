<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 11:01:04
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\shop\product.html" */ ?>
<?php /*%%SmartyHeaderCode:35305ad56370870852-34268746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2f21cee1a4a916b4b941d6bd90fdee22f627ebd' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\shop\\product.html',
      1 => 1498880017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35305ad56370870852-34268746',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop' => 0,
    'pager' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad56370a6c5c4_93070094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad56370a6c5c4_93070094')) {function content_5ad56370a6c5c4_93070094($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_block_calldata')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
?><?php $_smarty_tpl->tpl_vars["seo_sub_title"] = new Smarty_variable("商品列表", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['skin_theme']->value)."/shop/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!--左边主体内容开始-->
	<div class="rt shop_rt">
		<div class="mb10 area pding mall_option hoverno">
            <a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop:product','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'arg1'=>0,'arg2'=>1),$_smarty_tpl);?>
"<?php if (!$_smarty_tpl->tpl_vars['pager']->value['vcat_id']){?>  class="current"<?php }?>>全部</a>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/vcate",'shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'])); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/vcate",'shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<{link ctl='mall/shop:product' arg0=$shop.shop_id arg1=$item.vcat_id arg2=1}>"<{if $item.vcat_id==$pager.vcat_id}>  class="current"<{/if}>><{$item.title}></a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/vcate",'shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<div class="area pding mb20">
			<p class="sub_shop_tit mb10"><b>商品列表</b></p>
			<ul class="mall_ul line_type shop_list">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <li>
                    <a href="<?php echo smarty_function_link(array('ctl'=>'mall/product:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id'],'arg1'=>1),$_smarty_tpl);?>
" class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" /></a>
                    <p><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id'],'arg1'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></p>
                    <p class="price"><b class="fontcl2">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</b><span>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['market_price'];?>
</span></p>
                </li>
                <?php } ?>
            </ul>
			<div class="cl"></div>
			<?php if ($_smarty_tpl->tpl_vars['pager']->value['pagebar']){?><div class="page hoverno"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div><?php }?>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("shop/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>