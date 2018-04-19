<?php /* Smarty version Smarty-3.1.8, created on 2018-04-18 16:08:04
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\mobile\ucenter\index.html" */ ?>
<?php /*%%SmartyHeaderCode:146975ad6fce43f3593-96219043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '164543d6102dea20ac9d0c8a94fe1ea156aed674' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\mobile\\ucenter\\index.html',
      1 => 1500629536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146975ad6fce43f3593-96219043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MEMBER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad6fce453f658_48474946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad6fce453f658_48474946')) {function content_5ad6fce453f658_48474946($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["tpl_page_title"] = new Smarty_variable("管理中心首页", null, 0);?>
<?php $_smarty_tpl->tpl_vars["tpl_page_title"] = new Smarty_variable("管理中心首页", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pading admin_banner">
	<img src="/themes/default/mobile/static/images/adminBg.jpg" class="bg" />
	<div class="admin_intro">
		<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['face'];?>
" class="lt" />
		<div class="lt">
		<p><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
</p>
		<p>账户类型：<u><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['from_title'];?>
</u> </p>
		<p>我的金币：<u><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['gold'];?>
</u></p>
		</div>
	</div>
</div>
<div class="pding">
<h1>管理中心</h1>
<ul class="admin_menu">
	<li>
		<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/ucenter:info'),$_smarty_tpl);?>
">
			<span class="lt">基本信息</span><span class="rt">></span>
			<p class="cl"></p>
		</a>
	</li>
	<li>
		<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/ucenter:passwd'),$_smarty_tpl);?>
">
			<span class="lt">修改密码</span><span class="rt">></span>
			<p class="cl"></p>
		</a>
	</li>
	<li>
		<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/ucenter:mail'),$_smarty_tpl);?>
">
			<span class="lt">修改邮箱</span><span class="rt">></span>
			<p class="cl"></p>
		</a>
	</li>
	<li>
		<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/ucenter/yuyue:yuyue'),$_smarty_tpl);?>
">
			<span class="lt">我的预约</span><span class="rt">></span>
			<p class="cl"></p>
		</a>
	</li>
    
    <li>
		<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/ucenter/sign:sign'),$_smarty_tpl);?>
">
			<span class="lt">我的报名</span><span class="rt">></span>
			<p class="cl"></p>
		</a>
	</li>
	<li>
		<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/ucenter/tenders:tenders'),$_smarty_tpl);?>
">
			<span class="lt">招标管理</span><span class="rt">></span>
			<p class="cl"></p>
		</a>
	</li>
     <li>
        <a href="<?php echo smarty_function_link(array('ctl'=>'mobile/ucenter/order:orders'),$_smarty_tpl);?>
">
            <span class="lt">我的订单</span><span class="rt">></span>
            <p class="cl"></p>
        </a>
    </li>
     
      <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='company'){?>
      	<li>
            <a href="<?php echo smarty_function_link(array('ctl'=>'mobile/ucenter/company:youhuiSign'),$_smarty_tpl);?>
">
                <span class="lt">优惠信息报名</span><span class="rt">></span>
                <p class="cl"></p>
            </a>
        </li>
     <!--   <li>
            <a href="<?php echo smarty_function_link(array('ctl'=>'mobile/ucenter/company:zxb'),$_smarty_tpl);?>
">
                <span class="lt">装修保管理</span><span class="rt">></span>
                <p class="cl"></p>
            </a>
        </li>   -->
     <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='shop'){?>
      	
        <li>
            <a href="<?php echo smarty_function_link(array('ctl'=>'mobile/ucenter/order:shop_order'),$_smarty_tpl);?>
">
                <span class="lt">商品订单</span><span class="rt">></span>
                <p class="cl"></p>
            </a>
        </li>
        <li>
            <a href="<?php echo smarty_function_link(array('ctl'=>'mobile/ucenter/coupon:coupon_list'),$_smarty_tpl);?>
">
                <span class="lt">优惠劵下载日记</span><span class="rt">></span>
                <p class="cl"></p>
            </a>
        </li>
     <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['from']!='member'){?>
      	<li>
            <a href="<?php echo smarty_function_link(array('ctl'=>'mobile/ucenter:appointment'),$_smarty_tpl);?>
">
                <span class="lt">预约管理</span><span class="rt">></span>
                <p class="cl"></p>
            </a>
        </li>
      <?php }?>
      
      <li>
        <a class="btn subbtn_full" href="<?php echo smarty_function_link(array('ctl'=>'mobile/passport:loginout'),$_smarty_tpl);?>
">
            <span style="color:#FFF">退出登录</span>
        </a>
    </li>
</ul>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>