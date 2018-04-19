<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 11:01:33
         compiled from "235930b450ec4da4f51891351510ca06248a8bfb" */ ?>
<?php /*%%SmartyHeaderCode:232895ad5638dd35ea4-10934742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '235930b450ec4da4f51891351510ca06248a8bfb' => 
    array (
      0 => '235930b450ec4da4f51891351510ca06248a8bfb',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '232895ad5638dd35ea4-10934742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5638dd5cfa3_28651184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5638dd5cfa3_28651184')) {function content_5ad5638dd5cfa3_28651184($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/cate",'parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'limit'=>'1')); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'limit'=>'1'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<a  style='margin-right: 3px;color:#fff;height:0;' href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><{$item.title}></a>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'limit'=>'1'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }} ?>