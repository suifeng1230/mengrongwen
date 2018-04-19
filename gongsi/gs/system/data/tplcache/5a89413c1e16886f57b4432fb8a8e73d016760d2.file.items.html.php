<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:36:51
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\activity\items.html" */ ?>
<?php /*%%SmartyHeaderCode:216555ac42c3370c4f1-29201820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a89413c1e16886f57b4432fb8a8e73d016760d2' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\activity\\items.html',
      1 => 1433483362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216555ac42c3370c4f1-29201820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'cate_list' => 0,
    'item' => 0,
    'pager' => 0,
    'items' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42c33835340_78215677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42c33835340_78215677')) {function content_5ac42c33835340_78215677($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_adv')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.adv.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--面包屑导航开始-->
<div class="main_topnav mb20">
	<div class="mainwd">
		<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>><a href="<?php echo smarty_function_link(array('ctl'=>'activity:items'),$_smarty_tpl);?>
">活动列表</a>
		</p>
	</div>
</div>
<!--面包屑导航结束-->
<div class="mainwd">
	<!--主体左边内容开始-->
	<div class="main_content lt">
		<div class="main_activity_choose hoverno mb10">
     		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'activity:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'arg1'=>1),$_smarty_tpl);?>
"  <?php if ($_smarty_tpl->tpl_vars['pager']->value['cat_id']==$_smarty_tpl->tpl_vars['item']->value['cat_id']){?> class="current"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
<span class="sort_ico     	  ico_list"></span></a>
            <?php } ?>
		</div>
		<div class="area mb20">
			<ul class="block_type main_activity_ul">
            	 <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <li>
                        <div class="main_activity main_list">
                            <a href="<?php echo smarty_function_link(array('ctl'=>'activity:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['activity_id']),$_smarty_tpl);?>
" class="lt pic"  target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" /></a>
                            <div class="main_activity_rt main_list_rt rt">
                                <h1><a href="<?php echo smarty_function_link(array('ctl'=>'activity:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['activity_id']),$_smarty_tpl);?>
"  target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h1>
                                <p>活动时间 ：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['bg_time'],'Y-m-d');?>
</p>
                                <p>结束时间 ： <?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['end_time'],'Y-m-d');?>
</p>
                                <p>活动地点 ： <?php echo $_smarty_tpl->tpl_vars['item']->value['addr'];?>
</p>
                                <p>客服电话 ：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</font></p>
                                <h2><?php if ($_smarty_tpl->tpl_vars['item']->value['end_time']>time()){?><a href="<?php echo smarty_function_link(array('ctl'=>'activity:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['activity_id']),$_smarty_tpl);?>
" class="btn btn_sub_tuan"  target="_blank">我要报名</a><?php }else{ ?>
                                <a  href="<?php echo smarty_function_link(array('ctl'=>'activity:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['activity_id']),$_smarty_tpl);?>
" class="btn btn_over_tuan">报名结束</a>
                                <?php }?><span>报名人数：<b class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['sign_num'];?>
</b>名</span></h2>
                            </div>
                            <div class="cl"></div>
                        </div>
					</li>
                <?php } ?> 
			</ul>
			<?php if ($_smarty_tpl->tpl_vars['pager']->value['pagebar']){?><div class="page hoverno"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div><?php }?>
		</div>
	</div>
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
</div>
<script type="text/javascript">
(function(K, $){
    //活动列表页头部切换
    $(".main_activity_choose a").click(function(){
         $(".main_activity_choose a").siblings().removeClass('current');
         $(this).addClass('current');
    });
})(window.KT, window.jQuery);
</script>            
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>