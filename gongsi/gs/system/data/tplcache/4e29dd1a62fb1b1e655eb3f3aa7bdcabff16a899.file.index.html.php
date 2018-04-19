<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 11:48:46
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\ucenter\shop\index.html" */ ?>
<?php /*%%SmartyHeaderCode:247415ac9911e5e1e27-94259602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e29dd1a62fb1b1e655eb3f3aa7bdcabff16a899' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\ucenter\\shop\\index.html',
      1 => 1429266550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247415ac9911e5e1e27-94259602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop' => 0,
    'pager' => 0,
    'order_count' => 0,
    'yueyue_count' => 0,
    'coupon_download_count' => 0,
    'coupons' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac9911e7c8f87_99225875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac9911e7c8f87_99225875')) {function content_5ac9911e7c8f87_99225875($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_shoprank')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.shoprank.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div style="width:923px;padding:12px;margin:0 auto;">
    <div class="index_rt_top">
        <a href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['shop_url'];?>
" class="lt" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['shop']->value['logo'];?>
" width="200" height="100"/></a>
        <div class="shop_top_lt lt">
            <p class="title"><?php echo $_smarty_tpl->tpl_vars['shop']->value['name'];?>
</p>
			<p>店铺名称：<a href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['shop_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['shop']->value['title'];?>
</a></p>
			<p class="taobao_credit"><span class="block_lt" style="width:60px;">店铺信誉：</span><span class="rank_<?php echo smarty_modifier_shoprank($_smarty_tpl->tpl_vars['shop']->value['credit'],true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['shop']->value['credit'];?>
"></span></p>
            <p>店铺地址：<?php echo $_smarty_tpl->tpl_vars['shop']->value['city_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['shop']->value['area_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['shop']->value['addr'];?>
</p>
        </div>
        <div class="shop_top_rt lt">
            <p>店铺评分</p>
            <p><span class="starswx"><em style="width:<?php echo $_smarty_tpl->tpl_vars['shop']->value['avg_score']*20;?>
%;"></em></span><span></span><span class="block_lt"><?php echo $_smarty_tpl->tpl_vars['shop']->value['avg_score'];?>
分</span></p>
            <p>创店时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['shop']->value['dateline'],"Y-m-d");?>
</p>
        </div>
		<div class="shop_top_rt_fresh rt">
		<p class="refresh"><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:refresh','http'=>'ajax'),$_smarty_tpl);?>
" mini-load="刷新排名"  mini-width="400">刷新排名</a><span>最新刷新时间为：<br /><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['shop']->value['flushtime']);?>
</span></p>
		</div>
    </div>
    <div class="index_cont_lt lt">
        <div class="index_c_lt">
            <p class="title"><font class="index_c_lt_icon1"></font>店铺统计</p>
            <p class="txt">您需要关注的情况</p>
            <p class="txt">
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/order:index'),$_smarty_tpl);?>
" class="green">商铺订单(<?php echo $_smarty_tpl->tpl_vars['order_count']->value['count'];?>
)</a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/yuyue:shop'),$_smarty_tpl);?>
" class="green">商铺预约(<?php echo $_smarty_tpl->tpl_vars['yueyue_count']->value;?>
)</a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/coupon:downloads'),$_smarty_tpl);?>
" class="green">优惠券下载(<?php echo $_smarty_tpl->tpl_vars['coupon_download_count']->value;?>
)</a>
            </p>         
            <p class="txt">
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/product:index'),$_smarty_tpl);?>
">商品数(<?php echo $_smarty_tpl->tpl_vars['shop']->value['products'];?>
)</a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/comment:shop'),$_smarty_tpl);?>
">评论数(<?php echo $_smarty_tpl->tpl_vars['shop']->value['comments'];?>
)</a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/coupon:index'),$_smarty_tpl);?>
">优惠券(<?php echo $_smarty_tpl->tpl_vars['coupons']->value;?>
)</a>
            </p>             
        </div>
        <div class="index_c_lt">
            <p class="title"><font class="index_c_lt_icon2"></font>交易统计</p>
            <p class="txt">您需要关注的情况</p>
            <p class="txt">
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/order:index','arg0'=>'unpay'),$_smarty_tpl);?>
" class="green">新订单 (<?php echo $_smarty_tpl->tpl_vars['order_count']->value['new'];?>
) </a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/order:index','arg0'=>'unship'),$_smarty_tpl);?>
" class="green">待发货 (<?php echo $_smarty_tpl->tpl_vars['order_count']->value['unship'];?>
)</a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/order:index','arg0'=>'unpay'),$_smarty_tpl);?>
" class="green">待付款 (<?php echo $_smarty_tpl->tpl_vars['order_count']->value['unpay'];?>
)</a>
            </p>
            <p class="txt">
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/order:index','arg0'=>'payed'),$_smarty_tpl);?>
">近期售出 (<?php echo $_smarty_tpl->tpl_vars['order_count']->value['unship'];?>
)</a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/order:index','arg0'=>'finish'),$_smarty_tpl);?>
">已经完成 (<?php echo $_smarty_tpl->tpl_vars['order_count']->value['finish'];?>
)</a>
            </p>
        </div>
        <div class="index_c_lt">
            <p class="title"><font class="index_c_lt_icon3"></font>财务信息</p>
            <p class="txt">我的账户余额：<font class="orange">￥<?php echo $_smarty_tpl->tpl_vars['shop']->value['money'];?>
 元</font></p>
            <p class="txt">
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/money:shop','arg0'=>'out'),$_smarty_tpl);?>
" class="green">提现 </a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/money:shop'),$_smarty_tpl);?>
" class="green">出入明细</a></p>
        </div>
    </div>
    <div class="index_cont_rt rt">
        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['bulletin']['shop']){?>
        <div class="index_c_rt">
            <p class="title"><font class="index_c_rt_icon1"></font>公告</p>
            <p class="txt"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['bulletin']['shop'];?>
</p>
        </div>
        <?php }?>
        <div class="index_c_rt">
            <p class="title"><font class="index_c_rt_icon2"></font>平台联系方式</p>
            <p class="txt">客服电话: <font class="green"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</font></p>
            <p>服务时间:9:00-18:00(周一至周日)</p>          
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>