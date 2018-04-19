<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 11:48:33
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\ucenter\shop\mendian\items.html" */ ?>
<?php /*%%SmartyHeaderCode:35995ac99111d0cd45-09172704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92803b7e1c05ddf13e2b0544abde2efeb506874c' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\ucenter\\shop\\mendian\\items.html',
      1 => 1429266550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35995ac99111d0cd45-09172704',
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
  'unifunc' => 'content_5ac99111ddd591_08726741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac99111ddd591_08726741')) {function content_5ac99111ddd591_08726741($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="ucenter_t">
    <ul><li class="on">门店管理</li></ul>
    <span class="r"><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/mendian:create'),$_smarty_tpl);?>
" class="pbtn">添加门店</a></span>
</div>
<div class="ucenter_c">
    <table width="100%" border="0" cellspacing="0" class="table">
    <tr>
        <th class="w-80">ID</th><th>标题</th><th class="w-100">状态</th><th class="w-150">添加时间</th><th class="w-150">操作</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td class="left"><label><?php echo $_smarty_tpl->tpl_vars['item']->value['mendian_id'];?>
<label></td>
        <td><a href="<?php echo smarty_function_link(array('ctl'=>'mall/mendian:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['mendian_id']),$_smarty_tpl);?>
" target="_blank"></b><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
		<td><?php if ($_smarty_tpl->tpl_vars['item']->value['audit']){?><b class="blue">通过</b><?php }else{ ?><b class="red">待审</b><?php }?></td><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
        <td>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/mendian:edit','arg0'=>$_smarty_tpl->tpl_vars['item']->value['mendian_id']),$_smarty_tpl);?>
"  class="pbtn">修改</a>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/mendian:delete','arg0'=>$_smarty_tpl->tpl_vars['item']->value['mendian_id']),$_smarty_tpl);?>
" mini-act="删除" mini-confirm="确定要删除吗？" class="pbtn red">删除</a>
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