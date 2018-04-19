<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:21:16
         compiled from "admin:shop/shop/items.html" */ ?>
<?php /*%%SmartyHeaderCode:34275ad55a1c332508-58708655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75f6e93734f7dcbb24623e6fdeaa15630d8acf13' => 
    array (
      0 => 'admin:shop/shop/items.html',
      1 => 1523415485,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '34275ad55a1c332508-58708655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
    'member_list' => 0,
    'city_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55a1c754f76_64577065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55a1c754f76_64577065')) {function content_5ad55a1c754f76_64577065($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right">
                <?php echo smarty_function_link(array('ctl'=>"shop/shop:create",'class'=>"button",'title'=>"添加"),$_smarty_tpl);?>
&nbsp; &nbsp;
                <?php echo smarty_function_link(array('ctl'=>"shop/shop:so",'load'=>"mini:搜索商铺",'width'=>"mini:500",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>

            </td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr>
        <th class="w-100">ID</th><th>商家名称</th><th>用户UID</th><th>城市</th><th>电话</th>
        <th>浏览数</th><th>总评分</th><th>消保</th><th>认证</th><th>审核</th><th>排序</th><th class="w-150">操作</th>
    </tr> 
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['shop_id'];?>
" name="shop_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['shop_id'];?>
<label></td><td><label tips="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</label></td>
        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['uid']){?><a ucard="@<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'];?>
(UID:<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
)</a><?php }else{ ?><em>未认领</em><?php }?></td>
        <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['city_list']->value[$_smarty_tpl->tpl_vars['item']->value['city_id']]['city_name'])===null||$tmp==='' ? '--' : $tmp);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['score'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['xiaobao'];?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['is_vip']){?><b class="blue">旗舰</b>、<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['verify_name']){?><b class="blue">实名</b>、<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['xiaobao']){?><b class="blue">消保</b><?php }?>
        </td>
        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['audit']){?><b class="blue">正常</b><?php }else{ ?><b class="red">待审</b><?php }?></td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['orderby'];?>
</td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['uid']){?>
				<?php echo smarty_function_link(array('ctl'=>"member/member:manager",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'title'=>"管理",'class'=>"button",'target'=>"member"),$_smarty_tpl);?>

			<?php }else{ ?>
				<label title="管理" class="button disabled" tips="未绑定用户" disabled="disabled">管理</label> 
			<?php }?>

            <?php echo smarty_function_link(array('ctl'=>"block/item:push",'arg0'=>'shop','arg1'=>$_smarty_tpl->tpl_vars['item']->value['shop_id'],'title'=>"推送",'load'=>"mini:推送商铺",'class'=>"button"),$_smarty_tpl);?>


            <?php echo smarty_function_link(array('ctl'=>"shop/banner:shop",'args'=>$_smarty_tpl->tpl_vars['item']->value['shop_id'],'iframe'=>(("mini:轮转《").($_smarty_tpl->tpl_vars['item']->value['title'])).("》"),'width'=>"mini:750",'title'=>"轮转",'class'=>"button"),$_smarty_tpl);?>

            <?php echo smarty_function_link(array('ctl'=>"product/product:shop",'arg0'=>$_smarty_tpl->tpl_vars['item']->value['shop_id'],'title'=>"商品",'class'=>"button"),$_smarty_tpl);?>

            <?php if (empty($_smarty_tpl->tpl_vars['item']->value['is_vip'])){?>
             <?php echo smarty_function_link(array('ctl'=>"shop/shop:vip",'act'=>"mini:设为旗舰商铺",'args'=>$_smarty_tpl->tpl_vars['item']->value['shop_id'],'title'=>"设为旗舰商铺",'class'=>"button"),$_smarty_tpl);?>

             <?php }else{ ?>
              <?php echo smarty_function_link(array('ctl'=>"shop/shop:vip",'act'=>"mini:取消旗舰商铺",'args'=>$_smarty_tpl->tpl_vars['item']->value['shop_id'],'title'=>"取消旗舰商铺",'class'=>"button"),$_smarty_tpl);?>

             <?php }?>         
            <?php echo smarty_function_link(array('ctl'=>"shop/shop:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['shop_id'],'title'=>"修改",'class'=>"button"),$_smarty_tpl);?>

            <?php echo smarty_function_link(array('ctl'=>"shop/shop:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['shop_id'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>

        </td>
    </tr>
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
                <?php echo smarty_function_link(array('ctl'=>"shop/shop:delete",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量删除选中的内容吗?",'priv'=>"hide",'value'=>"批量删除"),$_smarty_tpl);?>

                <?php echo smarty_function_link(array('ctl'=>"block/item:batch",'args'=>'shop','type'=>"button",'load'=>"mini:批量推荐商铺",'batch'=>"mini:PRI",'priv'=>"hide",'value'=>"批量推荐"),$_smarty_tpl);?>

                <?php echo smarty_function_link(array('ctl'=>"shop/shop:doaudit",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量审核选中的内容吗?",'priv'=>"hide",'value'=>"批量审核"),$_smarty_tpl);?>

            </td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>