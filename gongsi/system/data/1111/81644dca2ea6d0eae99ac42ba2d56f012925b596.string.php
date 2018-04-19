<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:16:55
         compiled from "81644dca2ea6d0eae99ac42ba2d56f012925b596" */ ?>
<?php /*%%SmartyHeaderCode:58545acb0557659bc8-96825030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81644dca2ea6d0eae99ac42ba2d56f012925b596' => 
    array (
      0 => '81644dca2ea6d0eae99ac42ba2d56f012925b596',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '58545acb0557659bc8-96825030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5acb0557684b80_48546074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb0557684b80_48546074')) {function content_5acb0557684b80_48546074($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
?><div class="bigclass">
					<a href="<?php echo smarty_function_link(array('ctl'=>"mall/product",'arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'arg1'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></div>
					<div class="smallclass">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/cate",'parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'limit'=>"18")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'limit'=>"18"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<a href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><{$item.title}></a>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'limit'=>"18"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
			   <?php }} ?>