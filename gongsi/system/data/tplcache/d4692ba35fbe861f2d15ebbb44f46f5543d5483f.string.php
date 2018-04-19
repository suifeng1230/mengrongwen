<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 11:01:33
         compiled from "d4692ba35fbe861f2d15ebbb44f46f5543d5483f" */ ?>
<?php /*%%SmartyHeaderCode:28505ad5638df29f10-92645921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4692ba35fbe861f2d15ebbb44f46f5543d5483f' => 
    array (
      0 => 'd4692ba35fbe861f2d15ebbb44f46f5543d5483f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '28505ad5638df29f10-92645921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5638e02e025_25485786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5638e02e025_25485786')) {function content_5ad5638e02e025_25485786($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_block_calldata')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
?>
						<div class='div3'>
							<div class="bigclass">
								<a href="<?php echo smarty_function_link(array('ctl'=>"mall/product",'arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'arg1'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
							</div>
							<div class="smallclass">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/cate",'parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'])); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<{link ctl="mall/product" arg0=$item.cat_id arg1=1}>"><{$item.title}></a>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/cate",'parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</div>
						</div>
					<?php }} ?>