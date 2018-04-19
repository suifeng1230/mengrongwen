<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:38:27
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\block\sheader.html" */ ?>
<?php /*%%SmartyHeaderCode:182465ad550134efe48-92932771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66424750aa683dcc17663af90724f1577340cb26' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\block\\sheader.html',
      1 => 1523257052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182465ad550134efe48-92932771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo_sub_title' => 0,
    'seo_title' => 0,
    'SEO' => 0,
    'CONFIG' => 0,
    'seo_keywords' => 0,
    'seo_description' => 0,
    'pager' => 0,
    'VER' => 0,
    'request' => 0,
    'tpl_head_append' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad550136dc1b0_40620243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad550136dc1b0_40620243')) {function content_5ad550136dc1b0_40620243($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adv')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.adv.php';
?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if ($_smarty_tpl->tpl_vars['seo_sub_title']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_sub_title']->value;?>
_<?php }?><?php if ($_smarty_tpl->tpl_vars['seo_title']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_title']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['SEO']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
<?php }?></title>
<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['seo_keywords']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_keywords']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['SEO']->value['keywords']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['keywords'];?>
<?php }?>" />
<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['seo_description']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_description']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['SEO']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['description'];?>
<?php }?>" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/ui/j.ui.css?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/style/kt.widget.css?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/style/common.css?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
" type="text/css" />
<link type="text/css" rel="stylesheet" href="/themes/default/static/css/public.css?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
" />
<link type="text/css" rel="stylesheet" href="/themes/default/static/css/style.css?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
" />
<link rel="stylesheet" type="text/css" href="/themes/default/static/css/append.css?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
"/> 
<script type="text/javascript">window.URL={"domain":"<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['domain'];?>
","url":"<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['siteurl'];?>
", "res":"<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
", "img":"<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
","city":"<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['siteurl'];?>
"};window.G={"city":"<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
"};</script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt.j.js?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt.js?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/ui/j.ui.js?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.login.js?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.msgbox.js?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
"></script>
<script type="text/javascript"  src="/themes/default/static/js/scroll.js?<?php echo $_smarty_tpl->tpl_vars['VER']->value;?>
"></script>
<script type="text/javascript">
try {
var urlhash = window.location.hash;
if (!urlhash.match("fromapp")){
if ((navigator.userAgent.match(/(iPhone|iPod|Android|iOS|iPad)/i))){
window.location="http://www.mengrongwen.com/mobile/index.html";
}
}
}
catch(err){
}
</script>
<?php echo $_smarty_tpl->getSubTemplate ("block/css_append.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['tpl_head_append']->value;?>

<style>
.top_ad{background:#e6d740;width:100%;height:82px; display: block;}
.top_ad ul{width:1270px;margin:0 auto;height: 82px;}
</style>
<div class="top_ad" style="" id="js_ads_banner_top">
<?php echo smarty_function_adv(array('id'=>"4",'name'=>"网站首页通栏广告A1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

</div>
<div style="margin: 0px auto; width: 1200px; display: none;" id="js_ads_banner_top_slide">
<ul>
<li><a href="" target=""><img src="/ad/db.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" text="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" width="1200" height="400"></a></li>
</ul>
</div>
<script>
if ($("#js_ads_banner_top_slide").length){
	var $slidebannertop = $("#js_ads_banner_top_slide"),$bannertop = $("#js_ads_banner_top");
	setTimeout(function(){$bannertop.slideUp(1000);$slidebannertop.slideDow(1000);},2500);
	setTimeout(function(){$slidebannertop.slideUp(1000,function (){$bannertop.slideDown(1000);});},8500);
}
</script>
<?php }} ?>