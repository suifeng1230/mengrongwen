<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:38:28
         compiled from "86382c37924bfd9094c17f0dc44a711062b52f9f" */ ?>
<?php /*%%SmartyHeaderCode:226045ad55014d31843-29017630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86382c37924bfd9094c17f0dc44a711062b52f9f' => 
    array (
      0 => '86382c37924bfd9094c17f0dc44a711062b52f9f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '226045ad55014d31843-29017630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55014d68353_61088959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55014d68353_61088959')) {function content_5ad55014d68353_61088959($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
?>
			<ul>
				<li><span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span></li>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'article/article','from'=>"help",'hidden'=>"0",'cat_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'])); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'article/article','from'=>"help",'hidden'=>"0",'cat_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li><a href="<{$item.link}>"><{$item.title}></a></li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'article/article','from'=>"help",'hidden'=>"0",'cat_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<?php }} ?>