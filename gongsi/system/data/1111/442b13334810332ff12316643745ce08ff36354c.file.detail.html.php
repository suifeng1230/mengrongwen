<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 14:22:01
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\site\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:109645ac46f099f3c90-93962642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '442b13334810332ff12316643745ce08ff36354c' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\site\\detail.html',
      1 => 1496371979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109645ac46f099f3c90-93962642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'CONFIG' => 0,
    'site' => 0,
    'mobile_url' => 0,
    'company' => 0,
    'gz' => 0,
    'item' => 0,
    'designer' => 0,
    'items' => 0,
    'status' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac46f09ba94f1_17346507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac46f09ba94f1_17346507')) {function content_5ac46f09ba94f1_17346507($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_adv')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.adv.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/jquery.qrcode.min.js"></script>
<!--面包屑导航开始-->
<div class="mb10 subwd sub_topnav">
	<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
		><a href="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
">在建工地</a>
		><a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['site']->value['site_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['site']->value['title'];?>
</a>
	</p>
</div>
<!--面包屑导航结束-->
<div class="subwd">
	<!--主体左边内容开始-->
	<div class="sub_content lt">
		<div class="mb10 pding area sub_site_top">
			<h1><span class="lt"><?php echo $_smarty_tpl->tpl_vars['site']->value['title'];?>
<div class="coDe">
			<div class="pic"><a id="weixin" href="javascript:;" val="<?php echo $_smarty_tpl->tpl_vars['mobile_url']->value;?>
">[ 手机扫码 ]<img src="/themes/default/static/images/codeico.jpg" /></a></div>
			<div class="show" id="QRimg" style="padding:5px;height:150px;width:150px;" val="<?php echo $_smarty_tpl->tpl_vars['mobile_url']->value;?>
"></div>
			</div></span><a mini-load='我要报名' mini-width='500'  href="<?php echo smarty_function_link(array('ctl'=>'site:yuyue','arg0'=>$_smarty_tpl->tpl_vars['site']->value['site_id']),$_smarty_tpl);?>
" mini-width='500' mini-load="免费预约参观"  class="rt btn btn_main_big">免费预约参观</a>
			</h1>
           		<span>小区名称：<?php echo $_smarty_tpl->tpl_vars['site']->value['home_name'];?>
</span>
			 	<span>面积：<?php echo $_smarty_tpl->tpl_vars['site']->value['house_mj'];?>
平米</span>
                <span>总价：<?php echo $_smarty_tpl->tpl_vars['site']->value['price'];?>
万元</span>
                <span>
                <?php if ($_smarty_tpl->tpl_vars['company']->value){?>
                承接公司：<a href="<?php echo $_smarty_tpl->tpl_vars['company']->value['company_url'];?>
"><font class="fontcl2"> <?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
 </font></a>
                <?php }elseif($_smarty_tpl->tpl_vars['gz']->value){?>
                承接工长：<a href="<?php echo smarty_function_link(array('ctl'=>'gz:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
"><font class="fontcl2"> <?php echo $_smarty_tpl->tpl_vars['gz']->value['name'];?>
 </font></a>
                <?php }elseif($_smarty_tpl->tpl_vars['designer']->value){?>
                承接设计师：<a href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid']),$_smarty_tpl);?>
" ><font class="fontcl2"> <?php echo $_smarty_tpl->tpl_vars['designer']->value['name'];?>
 </font></a>
                <?php }?>
                </span>
			<div class="site_step">
				<p class="step bar"><span class="bar step_color step<?php echo $_smarty_tpl->tpl_vars['site']->value['status'];?>
"></span></p>
				<p><span class="step">开工大吉</span><span class="step">水电改造</span><span class="step">泥瓦阶段</span><span class="step">木工阶段</span><span class="step">油漆阶段</span><span class="step">安装阶段</span><span class="step">验收完成</span></p>
			</div>
		</div>
		<div class="mb20  pding area">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<div class=" mb10">
				<h3><b>[<?php echo $_smarty_tpl->tpl_vars['status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
]</b><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h3>
				<div class="pding sub_site_content"><span class = 'imgs'><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</span></div>
			</div>
            <?php } ?>
		</div>       
	</div>
	<!--主体左边内容结束-->
	<!--主体右边内容开始-->
	<div class="side_content rt">
        <?php echo smarty_function_widget(array('id'=>"tenders/fast",'title'=>"免费装修设计",'from'=>"TSJ"),$_smarty_tpl);?>

		<div class="mb10 area">
			<h3 class="side_tit">装修公司排行榜</h3>
			<ul class="pding paihang">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
                    <span class="lt"><font class="paihang_num<{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></font><a href="<{$item.company_url}>"><{$item.name|cutstr:35}></a></span>
                    <span class="rt">已投标：<font class="fontcl2"><{$item.tenders_num}></font></span>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
        <div class="mb10 area">
			<h3 class="side_tit">设计师排行榜</h3>
			<ul class="pding paihang">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
                    <span class="lt"><font class="paihang_num<{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></font><a href="<{link ctl='blog'  arg0=$item.uid}>"><{$item.name|cutstr:35}></a></span>
                    <span class="rt">已投标：<font class="fontcl2"><{$item.tenders_num}></font></span>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
        <div class="mb10 area">
			<h3 class="side_tit">工长排行榜</h3>
			<ul class="pding paihang">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"gz/gz",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"gz/gz",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
                    <span class="lt"><font class="paihang_num<{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></font><a href="<{link ctl='gz-detail'  arg0=$item.uid}>"><{$item.name|cutstr:35}></a></span>
                    <span class="rt">已投标：<font class="fontcl2"><{$item.tenders_num}></font></span>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"gz/gz",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
		<div class="mb20 "><?php echo smarty_function_adv(array('id'=>"10",'name'=>"全站右侧招商图片广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
	</div>
	<div class="cl"></div>
	<!--主体右边内容结束-->
</div>
<script>
$(".coDe ").mouseover(function(){
	$(this).find(".show").show();
}).mouseleave(function(){
	$(this).find(".show").hide();
});

jQuery(window).load(function () {
	$("#QRimg").qrcode({width:150,height:150,correctLevel:0,text:"<?php echo $_smarty_tpl->tpl_vars['mobile_url']->value;?>
"}); 
	jQuery(".imgs img").each(function () {
    	DrawImage(this, 680, 1000);
    });
});
function DrawImage(ImgD, FitWidth, FitHeight) {
	var image = new Image();
    image.src = ImgD.src;
    if (image.width > 0 && image.height > 0) {
    	if (image.width / image.height >= FitWidth / FitHeight) {
        	if (image.width > FitWidth) {
            	ImgD.width = FitWidth;
                ImgD.height = (image.height * FitWidth) / image.width;
            } else {
                ImgD.width = image.width;
            	ImgD.height = image.height;
            }
        } else {
            if (image.height > FitHeight) {
                ImgD.height = FitHeight;
	            ImgD.width = (image.width * FitHeight) / image.height;
            } else {
                ImgD.width = image.width;
                ImgD.height = image.height;
            }
        }
    }
}
</script>
<!--底边内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>