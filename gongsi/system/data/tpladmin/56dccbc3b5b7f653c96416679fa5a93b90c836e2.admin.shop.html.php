<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:22:03
         compiled from "admin:product/product/shop.html" */ ?>
<?php /*%%SmartyHeaderCode:307725ad55a4bad2546-08992324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56dccbc3b5b7f653c96416679fa5a93b90c836e2' => 
    array (
      0 => 'admin:product/product/shop.html',
      1 => 1429266516,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '307725ad55a4bad2546-08992324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'shop' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55a4be35911_51506434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55a4be35911_51506434')) {function content_5ad55a4be35911_51506434($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
&nbsp;&nbsp;(商铺:<b class="red"><?php echo $_smarty_tpl->tpl_vars['shop']->value['title'];?>
</b>)</th>
			<td align="right"><?php echo smarty_function_link(array('ctl'=>"product/product:create",'arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'class'=>"button",'title'=>"添加"),$_smarty_tpl);?>
</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr><th class="w-100">ID</th><th>标题</th><th>城市</th><th class="w-50">分类</th><th>品牌</th><th class="w-50">商铺价</th><th class="w-50">运费</th><th>上架</th><th>类型</th><th>热卖</th><th>优惠</th><th>推荐</th><th class="w-50">排序</th><th class="w-50">审核</th><th class="w-100">创建时间</th><th class="w-150">操作</th></tr>    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['product_id'];?>
" name="product_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['product_id'];?>
<label></td>

        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['city_name'];?>
(ID:<?php echo $_smarty_tpl->tpl_vars['item']->value['city_id'];?>
)</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_title'];?>
(ID:<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
)</td>

        <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['brand_title'])===null||$tmp==='' ? '--' : $tmp);?>
(<?php echo $_smarty_tpl->tpl_vars['item']->value['brand_id'];?>
)</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['freight'];?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['onsale']=='Y'){?><b class="blue">是</b><?php }else{ ?><b class="red">否</b><?php }?></td>

        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['sale_type']=='2'){?><b class="red">限时</b><?php }elseif($_smarty_tpl->tpl_vars['item']->value['sale_type']=='1'){?><b class="red">限量</b><?php }else{ ?>普通<?php }?></td>        
        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['sale_remai']){?><b class="blue">是</b><?php }else{ ?><b class="red">否</b><?php }?></td>        
        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['sale_youhui']){?><b class="blue">是</b><?php }else{ ?><b class="red">否</b><?php }?></td>        
        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['sale_tuijian']){?><b class="blue">是</b><?php }else{ ?><b class="red">否</b><?php }?></td>        
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['orderby'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['item']->value['audit']){?>正常<?php }else{ ?><b class="red">待审</b><?php }?></td>
        <td><a tips="创建时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
<br />更新时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['lastupdate']);?>
"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</a></td>    
        
<td>
            <?php echo smarty_function_link(array('ctl'=>"block/item:push",'arg0'=>'product','arg1'=>$_smarty_tpl->tpl_vars['item']->value['product_id'],'title'=>"推送",'load'=>"mini:推送商品",'class'=>"button"),$_smarty_tpl);?>

            <?php echo smarty_function_link(array('ctl'=>"product/photo:product",'args'=>$_smarty_tpl->tpl_vars['item']->value['product_id'],'iframe'=>(("mini:商品《").($_smarty_tpl->tpl_vars['item']->value['title'])).("》"),'width'=>"mini:710",'title'=>"相册",'class'=>"button"),$_smarty_tpl);?>

            <?php echo smarty_function_link(array('ctl'=>"product/product:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['product_id'],'title'=>"修改",'class'=>"button"),$_smarty_tpl);?>

            <?php echo smarty_function_link(array('ctl'=>"product/product:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['product_id'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>
</td></tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
     <tr><td colspan="20"><p class="text-align tip-notice">没有数据</p></td></tr>
    <?php } ?>
    </table>
	</form>
	<div class="page-bar">
		<table>
			<tr>
			<td class="w-100"><label><input type="checkbox" CKA="PRI"/>&nbsp;&nbsp;全选</label></td>
			<td colspan="10" class="left">
                <?php echo smarty_function_link(array('ctl'=>"product/product:delete",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量删除选中的内容吗?",'priv'=>"hide",'value'=>"批量删除"),$_smarty_tpl);?>

                <?php echo smarty_function_link(array('ctl'=>"block/item:batch",'args'=>'product','type'=>"button",'load'=>"mini:批量推荐商品",'batch'=>"mini:PRI",'priv'=>"hide",'value'=>"批量推荐"),$_smarty_tpl);?>

                <?php echo smarty_function_link(array('ctl'=>"product/product:doaudit",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量审核选中的内容吗?",'priv'=>"hide",'value'=>"批量审核"),$_smarty_tpl);?>

             </td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>