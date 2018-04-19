<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 14:14:10
         compiled from "admin:weixin/coupon/items.html" */ ?>
<?php /*%%SmartyHeaderCode:294815ac46d3241bd75-35474673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a26965a27da4138cf0fc5ad032310906be897d7' => 
    array (
      0 => 'admin:weixin/coupon/items.html',
      1 => 1432188650,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '294815ac46d3241bd75-35474673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac46d324e6fa3_08485490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac46d324e6fa3_08485490')) {function content_5ac46d324e6fa3_08485490($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"><?php echo smarty_function_link(array('ctl'=>"weixin/coupon:create",'class'=>"button",'title'=>"添加"),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;<?php echo smarty_function_link(array('ctl'=>"weixin/coupon:so",'load'=>"mini:搜索内容",'width'=>"mini:500",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>
</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr><th class="w-100">优惠券</th><th class="w-50">微信号</th><th>标题</th><th>封面图片</th><th class="w-100">发布时间</th><th class="w-100">结束时间</th><th class="w-50">优惠券数量</th><th class="w-50">每人最多允许获取次数</th><th class="w-50">已领取数</th><th class="w-50">已使用</th><th class="w-50">浏览量</th><th>粉丝状态</th><th class="w-150">操作</th></tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr><td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['coupon_id'];?>
" name="coupon_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['coupon_id'];?>
<label></td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['wx_id'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
<td><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
" class="wh-50" /></td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['stime'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['ltime'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['num'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['max_count'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['down_count'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['use_count'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['follower_condtion'];?>
</td>
<td><?php echo smarty_function_link(array('ctl'=>"weixin/couponsn:items",'args'=>$_smarty_tpl->tpl_vars['item']->value['coupon_id'],'title'=>"成员",'class'=>"button"),$_smarty_tpl);?>
<?php echo smarty_function_link(array('ctl'=>"weixin/coupon:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['coupon_id'],'title'=>"修改",'class'=>"button"),$_smarty_tpl);?>
<?php echo smarty_function_link(array('ctl'=>"weixin/coupon:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['coupon_id'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>
</td></tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
     <tr><td colspan="20"><p class="text-align tip-notice">没有数据</p></td></tr>
    <?php } ?>
    </table>
	</form>
	<div class="page-bar">
		
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>