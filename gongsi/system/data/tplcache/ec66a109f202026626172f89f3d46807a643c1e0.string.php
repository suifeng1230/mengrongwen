<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 11:01:33
         compiled from "ec66a109f202026626172f89f3d46807a643c1e0" */ ?>
<?php /*%%SmartyHeaderCode:116895ad5638dcfb512-26775888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec66a109f202026626172f89f3d46807a643c1e0' => 
    array (
      0 => 'ec66a109f202026626172f89f3d46807a643c1e0',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '116895ad5638dcfb512-26775888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5638dd22618_16701406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5638dd22618_16701406')) {function content_5ad5638dd22618_16701406($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
?>
			<li style='float:left;border-bottom: none;padding: 46px 0 0 0; height: 33px;width:100%;overflow:hidden;'>
				<div style='height: 13px;line-height: 13px;overflow: hidden;z-index: 23;position:relative;'>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/cate",'parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'limit'=>'4')); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'limit'=>'4'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<{calldata mdl="shop/cate" parent_id=$item.cat_id limit='1'}>
								<a  style='margin-right: 3px;color:#fff;height:0;' href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><{$item.title}></a>
							<{/calldata}>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'limit'=>'4'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }} ?>