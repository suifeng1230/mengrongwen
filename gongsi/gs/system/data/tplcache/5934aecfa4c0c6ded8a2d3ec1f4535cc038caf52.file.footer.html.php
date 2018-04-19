<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:33:33
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\block\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:985ac42b6d1fe5f9-89809489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5934aecfa4c0c6ded8a2d3ec1f4535cc038caf52' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\block\\footer.html',
      1 => 1496654972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '985ac42b6d1fe5f9-89809489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'qq' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42b6d28b010_32373873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42b6d28b010_32373873')) {function content_5ac42b6d28b010_32373873($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
?>	<div class="main_footer">
	<div class="main_footer_top">
	<style>
.footer-tel .tel{
    color: #bcbcbc;
    font-size: 24px;
}
.footer-tel .work-time{
    font-size: 12px;
    color: #a6a9a8;
    text-align:center;
}
.footer-tel .service_qq{ 
    display: block;
    width: 140px;
    margin: 10px auto;
    line-height: 30px;
    text-align: center;
    background:#{$base-color};
    color:#fff;
}
.footer-tel .service_qq:hover{
    background-color: #{$hover-color};
    color: #fff;
}
.footer-tel .service_qq {
    display: block;
    width: 140px;
    margin: 10px auto;
    line-height: 30px;
    text-align: center;
    background: #ff9c00;
    color: #fff;
}
.footer-tel .service_qq:hover {
    background-color: #ff500b;
    color: #fff;
}
.waps{
	width: 100px;
    background: #545353;
    height: 50px;
    display: inline-block;
    margin-left: 4px;
    border-radius: 3px;
    margin-top: 5px;
    padding-left: 28px;
    line-height: 50px;
	text-align: center;
}
.icon111 {
    background: url(/themes/default/static/images/icon_common_bg.png);
    display: inline-block;
}
.zxbiao111 {
    width: 48px;
    height: 48px;
    background-position: -40px 0px;
}
.footer-m span {
    margin-left: 10px;
    vertical-align: top;
    color: #bcbcbc;
    font-size: 12px;
    line-height: 24px;
    display: inline-block;
}
.footer-m {
    padding: 26px;
    width: 270px;
}
	</style>
		<div class="mainwd">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/cate",'parent_id'=>"2",'limit'=>10)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/cate",'parent_id'=>"2",'limit'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<ul>
				<li><span><{$item.title}></span></li>
				<{calldata mdl='article/article' from="help" hidden="0" cat_id=$item.cat_id}>
				<li><a href="<{$item.link}>"><{$item.title}></a></li>
				<{/calldata}>
			</ul>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/cate",'parent_id'=>"2",'limit'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<ul>
				<li><span>手机客户端</span></li>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>"app"),$_smarty_tpl);?>
" class="index_ico dowload_ico"></a></li>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>"mobile"),$_smarty_tpl);?>
" class="waps">WAP手机站</a></li>
			</ul>

			<div class="footer-m clearfix1 fl" style="float:left;">
		<i class="icon111 zxbiao111"></i><span>【<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
】<br>
		让您的装修更轻松！</span>
	</div>

			<div class="footer-tel fl" style="float:right;">
		<dl>
			<dt class="tel"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</dt>
			<dd class="work-time">周一至周日：9:00--18:00</dd><dd>
			<?php  $_smarty_tpl->tpl_vars['qq'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['qq']->_loop = false;
 $_from = explode(',',$_smarty_tpl->tpl_vars['CONFIG']->value['site']['kfqq']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['qq']->key => $_smarty_tpl->tpl_vars['qq']->value){
$_smarty_tpl->tpl_vars['qq']->_loop = true;
?><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['qq']->value;?>
&site=<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['domain'];?>
&menu=yes" title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" class="service_qq contact-tobosu-qq">联系在线客服</a><?php } ?>
			</dd>
		</dl>
	</div>
		</div>
	</div>
	<div class="cl"></div>
    <?php echo $_smarty_tpl->getSubTemplate ("block/sfooter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<!--底部内容结束-->
<?php echo smarty_function_widget(array('id'=>"public/kefu"),$_smarty_tpl);?>

</body>
</html><?php }} ?>