<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:38:27
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\block\top-header.html" */ ?>
<?php /*%%SmartyHeaderCode:155095ad5501371a9c9-96413297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb145939ba34a1b21d2eec5e6b3fa8d999549f6b' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\block\\top-header.html',
      1 => 1523927850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155095ad5501371a9c9-96413297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'request' => 0,
    'CONFIG' => 0,
    'COOKIE' => 0,
    'MEMBER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad550139128b6_02887235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad550139128b6_02887235')) {function content_5ad550139128b6_02887235($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><div class="top_nav colorbg">
    <div class="mainwd">
		<p class="lt" style="margin-left: 200px;z-index: 11; position: relative;"><font><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/here.png"><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
</font>
			<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['multi_city']){?><a href="<?php echo smarty_function_link(array('ctl'=>'city','http'=>'www'),$_smarty_tpl);?>
" class="fontcl1">[切换城市]</a><?php }?>
		</p>
        <div class="rt" style="z-index: 11; position: relative;">
            <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['mobile']&&$_smarty_tpl->tpl_vars['CONFIG']->value['mobile']['url']){?>
        	<font class="tpApp"><a href="<?php echo smarty_function_link(array('ctl'=>'app'),$_smarty_tpl);?>
" class="appLink"><span class="phoneIcon"></span>手机版</a>
            <div class="tpApp_box">
            	<div class="lt">
                <img src="/themes/weixin.jpg"/>
                </div>
                <div class="rt">
                	<p><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'app:iphone','http'=>'www'),$_smarty_tpl);?>
" class="btn" >苹果手机客户端</a></p>
                    <p><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'app:android','http'=>'www'),$_smarty_tpl);?>
" class="btn">安卓手机客户端</a></p>
                </div>
                <div class="cl"></div>
            </div>
            </font>|
            <?php }?>
			<a href="<?php echo smarty_function_link(array('ctl'=>'price'),$_smarty_tpl);?>
">在线报价</a>  |
            <a href="<?php echo smarty_function_link(array('ctl'=>'trade/cart'),$_smarty_tpl);?>
"><span class="login_ico shipCar_ico"></span>购物车<?php if ($_smarty_tpl->tpl_vars['COOKIE']->value['CART_NUMBER']){?>(<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['COOKIE']->value['CART_NUMBER'];?>
</font>)<?php }?></a>|
             <font  class="tp_contactus"><a href="javascript:void(0)" class="over ">客户服务<span class="login_ico con_ico"></span></a>
                <div class="tp_contactus_box">
                    <p class="tel">装修热线：<font class="fontcl1"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</font></p>
                    <ul class="tpService">
                        <li>
                            <span class="login_ico tpSer1"></span>
                            <p><a href="<?php echo smarty_function_link(array('ctl'=>"tenders"),$_smarty_tpl);?>
">免费招标</a></p>
                        </li>
                <!--        <li>
                            <span class="login_ico tpSer2"></span>
                            <p><a href="<?php echo smarty_function_link(array('ctl'=>"zxb"),$_smarty_tpl);?>
">装修保</a></p>
                        </li> -->
                        <li>
                            <span class="login_ico tpSer3"></span>
                            <p><a href="<?php echo smarty_function_link(array('ctl'=>'about:about'),$_smarty_tpl);?>
">关于我们</a></p>
                        </li>
                    </ul>
                    <div class="cl"></div>
                    <div class="cont_bt">
                    <img src="<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['weixinqr']){?><?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['weixinqr'];?>
<?php }else{ ?>/themes/default/static/images/weixin.jpg<?php }?>" class="cont_ewm lt"/>
                    <p class="lt bt">扫描二维码  关注官方微信</p>
                    </div>
                </div>
            </font>|
            <font><span class="ico_list in_t_tel_ico"></span>装修热线：<b class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></font>
        </div>
		<div class="rt" style="z-index: 11; position: relative;">
            <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['uid']){?>
            <ul class="top_nav_login hoverno">
                <li>
                    <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:index'),$_smarty_tpl);?>
"><span class="login_ico denglu_ico"></span>个人中心<span class="ico_list login_litico"></span></a>
                    <div class="top_nav_login_son">
                        <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:index'),$_smarty_tpl);?>
">个人中心</a>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/diary:index'),$_smarty_tpl);?>
">装修日记</a>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/ask:index'),$_smarty_tpl);?>
">装修问答</a>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:tenders'),$_smarty_tpl);?>
">我的招标</a>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:company'),$_smarty_tpl);?>
">我的预约</a>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'passport:loginout'),$_smarty_tpl);?>
">退出</a>
                    </div>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='company'){?>
                <li>
                    <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/company:index'),$_smarty_tpl);?>
"><span class="ico_list in_t_s_ico"></span>公司管理<span class="ico_list login_litico"></span></a>
                    <div class="top_nav_login_son">
                        <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/company:info'),$_smarty_tpl);?>
">公司设置</a>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/company/case:index'),$_smarty_tpl);?>
">案例管理</a>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/company/youhui:index'),$_smarty_tpl);?>
">优惠信息</a>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/company/yuyue:company'),$_smarty_tpl);?>
">预约管理</a>
                    </div>
                </li>
                <?php }elseif($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='shop'){?>
                <li>
                    <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:index'),$_smarty_tpl);?>
"><span class="ico_list in_t_s_ico"></span>商铺管理<span class="ico_list login_litico"></span></a>
                    <div class="top_nav_login_son">
                        <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:info'),$_smarty_tpl);?>
">商铺设置</a>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/order:index'),$_smarty_tpl);?>
">订单管理</a>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/yuyue:shop'),$_smarty_tpl);?>
">预约管理</a>
                    </div>
                </li>
            <?php }?>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'passport:loginout'),$_smarty_tpl);?>
">退出</a></li>
            </ul>
            <?php }else{ ?>
            <div>
                <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'passport:index'),$_smarty_tpl);?>
" mini-login="login"><span class="login_ico denglu_ico"></span>登录</a>  |
                <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'passport:reg'),$_smarty_tpl);?>
">注册</a>  |
            </div>
            <?php }?>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    //头部登录后效果
    $(".top_nav_login li").mouseover(function(){
        $(this).find('.top_nav_login_son').show();
    }).mouseout(function(){
        $(this).find('.top_nav_login_son').hide();
    });
     $("font.tpApp ").mouseover(function(){
        $(this).find('a.appLink').addClass('on');
        $('font.tpApp ').find('.tpApp_box').show();
    }).mouseout(function(){
        $(this).find('a.appLink').removeClass('on');
        $('font.tpApp ').find('.tpApp_box').hide();
    });

    $("font.tp_contactus ").mouseover(function(){
        $(this).find('a.over').addClass('on');
        $('font.tp_contactus ').find('.tp_contactus_box').show();
        $('font.tp_contactus ').find('span.con_ico').addClass('con_ico_over');
    }).mouseout(function(){
        $(this).find('a.over').removeClass('on');
        $('font.tp_contactus ').find('.tp_contactus_box').hide();
        $('font.tp_contactus ').find('span.con_ico').removeClass('con_ico_over');
    });
})
</script><?php }} ?>