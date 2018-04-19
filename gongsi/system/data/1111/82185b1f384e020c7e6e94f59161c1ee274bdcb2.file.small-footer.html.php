<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:09:55
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\block\small-footer.html" */ ?>
<?php /*%%SmartyHeaderCode:115155ac433e835a9f6-34106566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82185b1f384e020c7e6e94f59161c1ee274bdcb2' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\block\\small-footer.html',
      1 => 1499756917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115155ac433e835a9f6-34106566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac433e83897f3_27726599',
  'variables' => 
  array (
    'request' => 0,
    'CONFIG' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac433e83897f3_27726599')) {function content_5ac433e83897f3_27726599($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
?><div class="sub_footer">
    <p><?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/article",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'from'=>'about','limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/article",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'from'=>'about','limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<{link ctl='about' arg0=$item.page}>"><{$item.title}></a> <{if !$last}>|<{/if}> <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/article",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'from'=>'about','limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<p>免责声明：本网站部分内容由用户自行上传，如权利人发现存在侵犯其权益情形，请及时与本站联系。</p>
		<p>© 2016 孟荣文建材装饰网 · 保留所有权利.  ICP备案：<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['icp'];?>
</p>
    <p><span class="main_footer_bm_ico index_ico"></span></p>
</div>
<!--底边内容结束-->
<?php echo smarty_function_widget(array('id'=>"public/kefu"),$_smarty_tpl);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/bxslider/jq.bxslider.css" type="text/css" />
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/bxslider/jq.bxslider.min.js"></script>
<script type="text/javascript">
(function(K, $){
$(document).ready(function(){
    $('[bxSlider]').bxSlider({ mode: 'fade',captions: true, auto:true});
});
})(window.KT, window.jQuery);
</script>
<p class="none"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['tongji'];?>
</p>
</body>
</html><?php }} ?>