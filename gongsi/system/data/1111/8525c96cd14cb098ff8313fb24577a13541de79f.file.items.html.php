<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 11:48:37
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\ucenter\product\items.html" */ ?>
<?php /*%%SmartyHeaderCode:160285ac99115e20d71-97547848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8525c96cd14cb098ff8313fb24577a13541de79f' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\ucenter\\product\\items.html',
      1 => 1429266546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160285ac99115e20d71-97547848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac9911600edf7_16496415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac9911600edf7_16496415')) {function content_5ac9911600edf7_16496415($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="ucenter_t">
    <ul><li class="on">商品管理</li></ul>
	<span class="r"><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/product:create'),$_smarty_tpl);?>
" class="pbtn">添加商品</a></span>
</div>
<div class="ucenter_c">
    <table width="100%" border="0" cellspacing="0" class="table">
    <tr>
        <th class="w-80">ID</th><th>商品</th><th>分类</th><th class="w-100">价格</th>
		<th class="w-50">状态</th><th class="w-50">审核</th><th class="w-100">更新时间</th><th class="w-240"></th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td class="left"><label><?php echo $_smarty_tpl->tpl_vars['item']->value['product_id'];?>
<label></td>
        <td><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id']),$_smarty_tpl);?>
" target="_blank"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? '--' : $tmp);?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_title'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['onsale']){?><b class="blue">上架</b><?php }else{ ?><b class="red">下架</b><?php }?></td>
		<td><?php if ($_smarty_tpl->tpl_vars['item']->value['audit']){?><b class="blue">通过</b><?php }else{ ?><b class="red">待审</b><?php }?></td>
		<td><a tips="创建时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline'],'Y-m-d H:i:s');?>
<br />更新时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['lastupdate'],'Y-m-d H:i:s');?>
"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['lastupdate']);?>
</a></td>
        <td>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/product:spec','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id']),$_smarty_tpl);?>
" title="商品规格" class="pbtn">规格</a>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/product:photo','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id']),$_smarty_tpl);?>
" title="相册" class="pbtn">相册</a>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/product:edit','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id']),$_smarty_tpl);?>
" class="pbtn">编辑</a>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/product:delete','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id']),$_smarty_tpl);?>
" mini-act="confirm:您确定要删除该商品"  class="pbtn red">删除</a>
        </td>
    </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
     <tr><td colspan="20"><p class="tips"><span class="notice">没有数据</span></p></td></tr>
    <?php } ?>
    </table>
	<div class="page"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>