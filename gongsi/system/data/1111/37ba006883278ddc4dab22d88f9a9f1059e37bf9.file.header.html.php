<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 15:42:39
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\company\block\header.html" */ ?>
<?php /*%%SmartyHeaderCode:36915ac481ef6260d3-47491365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37ba006883278ddc4dab22d88f9a9f1059e37bf9' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\company\\block\\header.html',
      1 => 1506593492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36915ac481ef6260d3-47491365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'company' => 0,
    'css' => 0,
    'CONFIG' => 0,
    'v' => 0,
    'k' => 0,
    'mobile_url' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac481ef7febc4_16640931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac481ef7febc4_16640931')) {function content_5ac481ef7febc4_16640931($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_qq')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.qq.php';
if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="/themes/default/company/style/default/style.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/jquery.qrcode.min.js"></script>
<?php if ($_smarty_tpl->tpl_vars['company']->value['skin_cfg']){?><?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['company']->value['skin_cfg']['css']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value){
$_smarty_tpl->tpl_vars['css']->_loop = true;
?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
"/><?php } ?><?php }?>
<!--装修公司头部开始-->
<div class="company_top">
	<div class="subwd">
		<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" class="lt pic" />
		<div class="company_top_lt lt">
			<h1><a href="<?php echo $_smarty_tpl->tpl_vars['company']->value['company_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['company']->value['verify_name']==2){?>
				<span class="com_rz_ico ico_list"></span>
                <?php }elseif($_smarty_tpl->tpl_vars['company']->value['verify_name']==1){?>
                <span class="ps_rz_ico ico_list"></span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['company']->value['is_vip']){?><span class="tuiguang_ico ico_list"></span><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['company']->value['xiaobao']){?><span class="bz_metals"><?php echo $_smarty_tpl->tpl_vars['company']->value['xiaobao'];?>
元<font class="ico_list"></font></span><?php }?>
            </h1>
			<h2>
				<span><font class="com_ico com_tel"></font><?php echo $_smarty_tpl->tpl_vars['company']->value['show_phone'];?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['company']->value['group']['show_phone']&&$_smarty_tpl->tpl_vars['company']->value['mobile']){?><span><font class="com_ico com_phone"></font><?php echo $_smarty_tpl->tpl_vars['company']->value['mobile'];?>
</span><?php }?>
				<span class=""><?php echo smarty_modifier_qq($_smarty_tpl->tpl_vars['company']->value['show_qq']);?>
</span>
			</h2>
		</div>
		<div class="company_top_rt pingfen_bar rt">
			<p class="title">综合评价：<?php echo $_smarty_tpl->tpl_vars['company']->value['avg_score'];?>
</p>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONFIG']->value['score']['company']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->index++;
?><?php if ($_smarty_tpl->tpl_vars['v']->index>2){?><?php break 1?><?php }?>
			<p><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
：<span class="bar probar_gray"><span class="bar probar_color bar2" style="width:<?php echo $_smarty_tpl->tpl_vars['company']->value['avg_scores'][$_smarty_tpl->tpl_vars['k']->value]*20;?>
%"></span></span><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['company']->value['avg_scores'][$_smarty_tpl->tpl_vars['k']->value]);?>
</p>
			<?php } ?>
			<div id="QRimg" class="code" style="" val="<?php echo $_smarty_tpl->tpl_vars['mobile_url']->value;?>
">
			<p>手机扫码</p>
			</div>
		</div>
		<div class="cl"></div>
	</div>
</div>
<div class="company_nav mb10">
	<div class="subwd">
		<ul class="lt hoverno">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['company']->value['company_url'];?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='detail'){?> class="current"<?php }?>>首页</a></li>
			<?php if ($_smarty_tpl->tpl_vars['company']->value['domain']==''){?>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:about','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='about'){?> class="current"<?php }?>>企业介绍</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:team','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='team'){?> class="current"<?php }?>>设计团队</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:cases','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='cases'){?> class="current"<?php }?>>装修案例</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:site','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='site'){?> class="current"<?php }?>>在建工地</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:youhui','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='youhui'){?> class="current"<?php }?>>优惠信息</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:news','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='news'){?> class="current"<?php }?>>企业新闻</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:comment','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='comment'){?> class="current"<?php }?>>业主评价</a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['company']->value['domain']){?>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:company-about','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='about'){?> class="current"<?php }?>>企业介绍</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:company-team','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='team'){?> class="current"<?php }?>>设计团队</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:company-cases','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='cases'){?> class="current"<?php }?>>装修案例</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:company-site','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='site'){?> class="current"<?php }?>>在建工地</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:company-youhui','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='youhui'){?> class="current"<?php }?>>优惠信息</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:company-news','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='news'){?> class="current"<?php }?>>企业新闻</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:company-comment','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='comment'){?> class="current"<?php }?>>业主评价</a></li>
		<?php }?>
		</ul>
		<div class="rt company_nav_rt"><p>信誉：<?php echo $_smarty_tpl->tpl_vars['company']->value['score'];?>
</p></div>
		<div class="cl"></div>
	</div>
</div>
<script type="text/javascript">
(function(){
	$("#QRimg").qrcode({width:80,height:80,correctLevel:0,text:"<?php echo $_smarty_tpl->tpl_vars['mobile_url']->value;?>
"}); 
	})(window.KT, window.jQuery);
</script><?php }} ?>