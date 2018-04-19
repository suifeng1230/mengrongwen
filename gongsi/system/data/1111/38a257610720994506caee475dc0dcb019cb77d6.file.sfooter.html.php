<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:02:23
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\block\sfooter.html" */ ?>
<?php /*%%SmartyHeaderCode:129765ac42b6d2f47a7-69304981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38a257610720994506caee475dc0dcb019cb77d6' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\block\\sfooter.html',
      1 => 1499756917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129765ac42b6d2f47a7-69304981',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42b6d336e33_44482299',
  'variables' => 
  array (
    'request' => 0,
    'CONFIG' => 0,
    'pager' => 0,
    'COUNT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42b6d336e33_44482299')) {function content_5ac42b6d336e33_44482299($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
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
</script>

<div class="photo_bottom photo_bottom02" style="left:0px;display: block;">
  <div class="photo_bg"></div>
  <div class="w1220">
    <div class="new_version" href="javasrcpit:;">
      <a href="" target=''><img src="/themes/dibu.png"/></a>
    </div>
    <form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'base'),$_smarty_tpl);?>
" method="post" mini-form='tenders_tzx' id="tenders-tzx">
      <input type="hidden" name="data[from]" value="TZX" />
      <ul>
        <li class="title_ti">立省半年工资，已有<font class="fontcl1"><?php echo $_smarty_tpl->tpl_vars['COUNT']->value['tenders']*3+$_smarty_tpl->tpl_vars['COUNT']->value['tenders'];?>
</font>人获得了实惠</li>
        <li>
          <div class="form-item">
            <input class="name" name="data[contact]" type="text" value="" placeholder="请输入您的姓名">
			<input class="intel" name="data[mobile]" type="text" value="" placeholder="请输入您的手机号码">
          </div>
        </li>
        <li class="marbott_0">
          <div class="form-item">
      			<select name="data[budget_id]" class="ys">
        			<?php echo smarty_function_widget(array('id'=>"tenders/setting",'type'=>"budget"),$_smarty_tpl);?>

      			</select>
            <input class="mj" name="data[house_mj]" type="text" value="" placeholder="装修面积"><label style="">㎡</label>
          </div>
          <div>
            <input type="hidden" name="data[comment]" value="招标来源于：网页底部浮动条" />
            <input type="submit" class="order-btn photo_btn" cookies="mei_kai" value="免费领取">
          </div>
        </li>
      </ul>
    </form>
    <div class="renma"> 扫微信，更划算<br>
      <img src="<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['weixinqr']){?><?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['weixinqr'];?>
<?php }else{ ?>/themes/default/static/images/weixin.jpg<?php }?>" width="100" height="100"> </div>
    <div class="photo_cosle"></div>
  </div>
</div>
<div class="photo_bottom_kai"></div>
<script  type="text/javascript">
$(function(){
    $(window).scroll(function(){
        var scrollTop = document.documentElement.scrollTop || document.body.scrollTop ;
        if(scrollTop > height){
            $(".photo_bottom02").show();
        }else{
            $(".photo_bottom02").hide();
			$(".photo_bottom_kai").css({'left':'-160px'});
        }
    });
    $(".photo_bottom_kai").css({'left':'-160px'});
    $(".photo_cosle").click(function(){
        $(".photo_bottom").animate({'left':'-100%','display':'none'},800,function(){
           $(".photo_bottom_kai").animate({'left':'0'},200);
         });
    })
    $(".photo_bottom_kai").click(function(){
        $(".photo_bottom_kai").animate({'left':'-160px'},200,function(){
              $(".photo_bottom").animate({'left':'0','display':'block'},800);
          });
    })
})
</script><?php }} ?>