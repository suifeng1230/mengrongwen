<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:36:30
         compiled from "fd25f6d83d98ec571d5e4714f08a2e4acb4794b9" */ ?>
<?php /*%%SmartyHeaderCode:103575ac42c1e667742-70450294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd25f6d83d98ec571d5e4714f08a2e4acb4794b9' => 
    array (
      0 => 'fd25f6d83d98ec571d5e4714f08a2e4acb4794b9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '103575ac42c1e667742-70450294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42c1e686b45_95713954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42c1e686b45_95713954')) {function content_5ac42c1e686b45_95713954($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
?>
            <?php if ($_smarty_tpl->tpl_vars['index']->value<3){?>
            <li>
                <h2><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h2>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'article/cate','hidden'=>'0','parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'])); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'article/cate','hidden'=>'0','parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<{if $index<8}><a href="<{link ctl='article:items' arg0=$item.cat_id arg1=1}>" title="<{$item.cat_title}>-<{$item.title}>"><{$item.title|cutstr:5:""}></a><{/if}><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'article/cate','hidden'=>'0','parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </li>
            <?php }?>
            <?php }} ?>