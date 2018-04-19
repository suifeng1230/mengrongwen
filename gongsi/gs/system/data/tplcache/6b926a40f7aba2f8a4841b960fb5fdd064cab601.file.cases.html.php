<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 15:42:58
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\company\cases.html" */ ?>
<?php /*%%SmartyHeaderCode:303195ac4820263dd57-77720546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b926a40f7aba2f8a4841b960fb5fdd064cab601' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\company\\cases.html',
      1 => 1429266538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303195ac4820263dd57-77720546',
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
  'unifunc' => 'content_5ac482026ddff0_81097612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac482026ddff0_81097612')) {function content_5ac482026ddff0_81097612($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["seo_sub_title"] = new Smarty_variable("公司案例", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("company/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--装修公司头部结束-->
<div class="subwd">
	<div class="mb20">
		<h3><b>装修案例</b></a></h3>
        <ul class="com_case">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li>
                <div class="opacity_img">
                    <a href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
" /></a>
                    <a href="<?php echo smarty_function_link(array('ctl'=>'case:yuyue','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" class="yuyue">免费预约设计</a>
                    <p class="bg"></p>
                    <p class="text"><span class="lt"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span><span class="rt"><span class="index_ico like_ico"></span><?php echo $_smarty_tpl->tpl_vars['item']->value['likes'];?>
</span></p>
                </div>
            </li>
            <?php } ?>
        </ul>
        <div class="cl"></div>
        <?php if ($_smarty_tpl->tpl_vars['pager']->value['pagebar']){?><div class="page hoverno"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div><?php }?>
	</div>
</div>
<!--底边内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("company/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>