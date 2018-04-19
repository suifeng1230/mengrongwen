<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 14:37:23
         compiled from "admin:tools/database/backlist.html" */ ?>
<?php /*%%SmartyHeaderCode:284465ad5962331f387-14657552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1efc4f2a941000a78780d23109bd04c4a3fb81de' => 
    array (
      0 => 'admin:tools/database/backlist.html',
      1 => 1429266514,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '284465ad5962331f387-14657552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad596234404c1_08052794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad596234404c1_08052794')) {function content_5ad596234404c1_08052794($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
        <tr>
            <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
            <th><label class="left">数据库管理</label>
            <div class="item-menu">
                <a href="?tools/database-index.html">备份</a>
                <a href="?tools/database-backlist.html" class="on">还原</a>
                <a href="?tools/database-optimize.html">优化</a>
            </div>  
            </td>
            <td align="left"></td>
            <td width="15"></td>
        </tr>
    </table>
</div>
<div class="page-data">	
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr>
		<th>备份名</th><th class="w-200">备份时间</th><th class="w-200">备份大小</th><th class="w-150">操作</th>
	</tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
		<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['time'],"Y-m-d H:i:s");?>
</td><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['size'],"size");?>
</td>
		<td>
			<?php echo smarty_function_link(array('ctl'=>"tools/database:restore",'args'=>$_smarty_tpl->tpl_vars['item']->value['name'],'title'=>"还原",'confirm'=>"mini:确定要还原该备份吗？",'class'=>"button"),$_smarty_tpl);?>

			<?php echo smarty_function_link(array('ctl'=>"tools/database:backdel",'args'=>$_smarty_tpl->tpl_vars['item']->value['name'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除该备份吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>

		</td>
	</tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
     <tr><td colspan="20"><p class="text-align tip-notice">没有数据</p></td></tr>
    <?php } ?>
    </table>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>