<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 11:01:34
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\mall\block\sfooter.html" */ ?>
<?php /*%%SmartyHeaderCode:156255ad5638e644b13-68034560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d06df83c31f3144836fbe983bb913465dd0312f' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\mall\\block\\sfooter.html',
      1 => 1499918948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156255ad5638e644b13-68034560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'CONFIG' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5638e6dd0b5_17754793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5638e6dd0b5_17754793')) {function content_5ad5638e6dd0b5_17754793($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
?><div class="main_footer_bottom">
<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/article",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'from'=>'about','limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/article",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'from'=>'about','limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<{link ctl='about' arg0=$item.page}>"><{$item.title}></a> <{if !$last}>|<{/if}> <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/article",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'from'=>'about','limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<p>免责声明：本网站部分内容由用户自行上传，如权利人发现存在侵犯其权益情形，请及时与本站联系。</p>
		<p>© 2016 <?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
 · 保留所有权利.  ICP备案：<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['icp'];?>
</p>
<p style="none"><?php if ($_smarty_tpl->tpl_vars['request']->value['city']['tongji']){?><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['tongji'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['tongji'];?>
<?php }?></p>
<p><span class="main_footer_bm_ico index_ico"></span></p>
</div>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/bxslider/jq.bxslider.css" type="text/css" />
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/bxslider/jq.bxslider.min.js"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/jquery.lazyload.js"></script>
<script type="text/javascript">
(function(K, $){
$(document).ready(function(){
    $('[bxSlider]').bxSlider({ mode: 'fade',captions: true,auto:true});
    $("img").lazyload({placeholder:"<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/images/grey.gif",failurelimit:10});
});
})(window.KT, window.jQuery);

$(function(){
if(!placeholderSupport()){   // 判断浏览器是否支持 placeholder
    $('[placeholder]').focus(function() {
        var input = $(this);
        if (input.val() == input.attr('placeholder')) {
            input.val('');
            input.removeClass('placeholder');
        }
    }).blur(function() {
        var input = $(this);
        if (input.val() == '' || input.val() == input.attr('placeholder')) {
            input.addClass('placeholder');
            input.val(input.attr('placeholder'));
        }
    }).blur();
};
})
function placeholderSupport() {
    return 'placeholder' in document.createElement('input');
}
</script><?php }} ?>