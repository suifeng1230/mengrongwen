<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:33:33
         compiled from "widget:public/kefu.html" */ ?>
<?php /*%%SmartyHeaderCode:98355ac42b6d3717c5-50086027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7c6f063a2cf3c3137aee3a7db515e9913c4e874' => 
    array (
      0 => 'widget:public/kefu.html',
      1 => 1422091039,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '98355ac42b6d3717c5-50086027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'qq' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42b6d3ac150_01264073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42b6d3ac150_01264073')) {function content_5ac42b6d3ac150_01264073($_smarty_tpl) {?><div class="rightNav">
    <ul>
        <li>
            <div class="show">
                <span class="ico icoQq"></span>
                <p>在线客服</p>
            </div>
            <div kefu='qq' class="hidden">
                <div class="hidden_cont hiddenQq">
                    <span class="span_ab"></span>
                    <p class="title">在线咨询</p>
                    <?php  $_smarty_tpl->tpl_vars['qq'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['qq']->_loop = false;
 $_from = explode(',',$_smarty_tpl->tpl_vars['CONFIG']->value['site']['kfqq']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['qq']->key => $_smarty_tpl->tpl_vars['qq']->value){
$_smarty_tpl->tpl_vars['qq']->_loop = true;
?><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['qq']->value;?>
&site=<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['domain'];?>
&menu=yes" title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" class="ico_list qq_ico"></a><?php } ?>
                    <p>服务时间：</p>
                    <p>9:00--18:00</p>
                </div>
            </div>
        </li>
        <li>
            <div class="show">
                <span class="ico icoWx"></span>
                <p>官方微信</p>
            </div>
            <div kefu='wx' class="hidden">
                <div class="hidden_cont hiddenWx">
                    <span class="span_ab"></span>
                    <img src="<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['weixinqr']){?><?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['weixinqr'];?>
<?php }else{ ?>%THEME%/static/images/weixin.jpg<?php }?>" width="86" height="86"/>
                    <p class="title">微信扫一扫</p>
                </div>
            </div>
        </li>
        <li>
            <div class="show">
                <span class="ico icoTel"></span>
                <p>联系电话</p>
            </div>
            <div kefu='tel' class="hidden">
                <div class="hidden_cont hiddenTel">
                    <span class="span_ab"></span>
                    <p><b class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></p>
                </div>
            </div>
        </li>
        <li class="re_top">
            <div class="show">
                <span class="ico icoTop"></span>
                <p>返回顶部</p>
            </div>
        </li>
    </ul>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $(".rightNav ul li").mouseenter(function(){
        $(this).find(".show").addClass('current');
        $(this).find("[kefu]").stop(true,true).fadeIn();
    }).mouseleave(function(){
        $(this).find(".show").removeClass('current');
        $(this).find("[kefu]").stop(true,true).fadeOut();
    });
    $(".rightNav ul li [kefu]").mouseenter(function(){
        $(this).show();
        $(this).prev("li").addClass("current");
    }).mouseleave(function(){
        $(this).stop(true).fadeOut();
        $(this).prev("li").removeClass("current");
    });     
    $('.rightNav li.re_top').click(function(event) {
        $('html,body').animate({
            scrollTop: 0
        }, 200);
        return false;
    }); 
});
</script><?php }} ?>