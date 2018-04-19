<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 11:48:31
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\ucenter\shop\news\items.html" */ ?>
<?php /*%%SmartyHeaderCode:305745ac9910fc7ec80-10056075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43091026cb5a9c1158e6b34a55330c1edf61c17e' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\ucenter\\shop\\news\\items.html',
      1 => 1433483364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305745ac9910fc7ec80-10056075',
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
  'unifunc' => 'content_5ac9910fd51aa7_55002383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac9910fd51aa7_55002383')) {function content_5ac9910fd51aa7_55002383($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="ucenter_t">
    <ul><li class="on">商铺资讯</li></ul>
    <span class="r"><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/news:create'),$_smarty_tpl);?>
" class="pbtn">添加资讯</a></span>
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
        <td class="left"><label><?php echo $_smarty_tpl->tpl_vars['item']->value['news_id'];?>
<label></td>
        <td><a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop/newsdetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['news_id']),$_smarty_tpl);?>
" target="_blank"></b><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
		<td><?php if ($_smarty_tpl->tpl_vars['item']->value['audit']){?><b class="blue">通过</b><?php }else{ ?><b class="red">待审</b><?php }?></td><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
        <td>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/news:edit','arg0'=>$_smarty_tpl->tpl_vars['item']->value['news_id']),$_smarty_tpl);?>
"  class="pbtn">修改</a>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/news:delete','arg0'=>$_smarty_tpl->tpl_vars['item']->value['news_id']),$_smarty_tpl);?>
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