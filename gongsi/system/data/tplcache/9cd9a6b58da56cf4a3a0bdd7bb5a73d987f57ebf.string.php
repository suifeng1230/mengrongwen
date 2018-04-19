<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 11:01:33
         compiled from "9cd9a6b58da56cf4a3a0bdd7bb5a73d987f57ebf" */ ?>
<?php /*%%SmartyHeaderCode:59375ad5638deb0d75-36573562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cd9a6b58da56cf4a3a0bdd7bb5a73d987f57ebf' => 
    array (
      0 => '9cd9a6b58da56cf4a3a0bdd7bb5a73d987f57ebf',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '59375ad5638deb0d75-36573562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iteration' => 0,
    'item' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5638df12816_68369046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5638df12816_68369046')) {function content_5ad5638df12816_68369046($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_block_KT')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.KT.php';
?>
		<li class="cate1">
			<span><em class="icon<?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
"></em><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
<i></i></span>
			<span><em id='icondsj1' class=" icon15"></em></span>
			<div class="div1" style='display: none;'>
				<div class='div2'>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/cate",'parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'])); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<div class='div3'>
							<div class="bigclass">
								<a href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><{$item.title}></a>
							</div>
							<div class="smallclass">
								<{calldata mdl="shop/cate" parent_id=$item.cat_id}><a href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><{$item.title}></a>
								<{/calldata}>
							</div>
						</div>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<!-- <div class='width:25%;float:right;'>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"31",'name'=>"商城首页1F基础建材",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>'hot','limit'=>'4')); $_block_repeat=true; echo smarty_block_KT(array('id'=>"31",'name'=>"商城首页1F基础建材",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>'hot','limit'=>'4'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<a href="<{if $item.link}><{$item.link}><{else}><{link ctl='mall/product:detail' arg0=$item.producdt_id arg1='1'}><{/if}>" class="pic"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg"  width=170;/></a>
							<p class="sp"><b><a href="<{$item.link}>"><{$item.title}></a></b></p>
							<p class="price"><b class="fontcl2">￥<{$item.price}></b><span>￥<{$item.market_price}></span></p>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"31",'name'=>"商城首页1F基础建材",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>'hot','limit'=>'4'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>  -->
			   </div>
			</div>
		</li>
	<?php }} ?>