<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:10:42
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\mobile\block\header.html" */ ?>
<?php /*%%SmartyHeaderCode:311325ad557a2bdc297-77608095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15106e590e43136a32ca9b38067a90fd6b403292' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\mobile\\block\\header.html',
      1 => 1500963765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311325ad557a2bdc297-77608095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_index_home' => 0,
    'pager' => 0,
    'CONFIG' => 0,
    'request' => 0,
    'tpl_page_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad557a2d3fa79_47359201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad557a2d3fa79_47359201')) {function content_5ad557a2d3fa79_47359201($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><!doctype html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/sheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
	<iframe id="miniframe" name="miniframe" style="display:none;"></iframe>
	<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
	<div class="top nowrap">
		<div class="sub_top">
			<img style="float: left; width: 91px;margin: 4px;" src="/themes/default/mobile/static/images/logo.png">
			<?php if (!$_smarty_tpl->tpl_vars['is_index_home']->value){?>
			<a href="<?php if ($_smarty_tpl->tpl_vars['pager']->value['backurl']){?><?php echo $_smarty_tpl->tpl_vars['pager']->value['backurl'];?>
<?php }else{ ?><?php echo smarty_function_link(array('ctl'=>'mobile/index'),$_smarty_tpl);?>
<?php }?>" class="lt app_ico top_lt"></a>
			<?php }elseif($_smarty_tpl->tpl_vars['CONFIG']->value['site']['multi_city']){?>
			<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/city'),$_smarty_tpl);?>
" style="float:right;font-size:14px;line-height:42px;color:#fff;margin-right: 10px;">
				<span class="city_icon"></span><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
切换</a>
				<?php }?>
				<div class="ser_box">
					<div class="ser_inp">
						<a href='/mobile/so.html'><input type="text" name="kw" class="ser_input" placeholder="请输入搜索的关键字" value="<?php echo $_smarty_tpl->tpl_vars['pager']->value['sokw'];?>
"  x-webkit-speech speech/></a>
						<a href='/mobile/so.html'><input type="submit"  value=""  class="ser_input1"/></a>
					</div>

					<div class='top_rt1'>
					
					<div class="bdsharebuttonbox"><a href="#" data-cmd="more"></a>
					</div>
					</div>
					<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
				</div>
				<style>
					.top_rt1 img{width: 22px;}
					.top_rt1{float:right;line-height:46px;color:#fff;margin-right: 12px;margin-top: -26px;width: 22px;height: 46px;display:block;}
					.ser_inp{margin-right: 45px;top: 4px; height: 38px;}
					.top{height: 46px;box-shadow: 0px 1px 5px rgba(0,0,0,0.15);right: 0;}
					.ser_box{height: 46px;line-height: 46px;}
					.ser_input{height:100%; font-size: 14px;left: 15px;padding: 0;line-height: 38px;}
					.ser_input1{height: 32px;top: 3px;}
					.top_lt{display: none;}
					.top_rt1 .share{background: url(/themes/default/mobile/static/images/share.png) no-repeat !important; )}
					.bdshare-button-style1-24 a, .bdshare-button-style1-24 .bds_more{background-image: url(/themes/default/mobile/static/images/share.png);     background-size: 100%;margin-top: -2px;height: 26px;}
				</style>
				
	<!--  <?php if (!$_smarty_tpl->tpl_vars['is_index_home']->value){?>
		<a href="<?php if ($_smarty_tpl->tpl_vars['pager']->value['backurl']){?><?php echo $_smarty_tpl->tpl_vars['pager']->value['backurl'];?>
<?php }else{ ?><?php echo smarty_function_link(array('ctl'=>'mobile/index'),$_smarty_tpl);?>
<?php }?>" class="lt app_ico top_lt"></a>
        <?php }elseif($_smarty_tpl->tpl_vars['CONFIG']->value['site']['multi_city']){?>
		<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/city'),$_smarty_tpl);?>
" class="lt city_link"><span class="app_ico city_ico"></span><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
切换</a>
        <?php }?>
		<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['tpl_page_title']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['pager']->value['title'] : $tmp))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['CONFIG']->value['mobile']['title'] : $tmp);?>

        <p class="rt"><a href="<?php echo smarty_function_link(array('ctl'=>'mobile/ucenter/index'),$_smarty_tpl);?>
" class="app_ico login_ico"></a>
        <?php if (!$_smarty_tpl->tpl_vars['is_index_home']->value){?><a href="#" class="app_ico top_rt" id="dt-hd-nav"></a><?php }?>
		</p>
		<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 -->
	</div>
</div>
<div class="content">
<?php }} ?>