<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 17:34:42
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\home\block\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:182315ac49339381315-67364997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c9445780ac426e76bdd2254d815c2c5506ed744' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\home\\block\\footer.html',
      1 => 1522834360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182315ac49339381315-67364997',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac493393cb6a6_94720386',
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac493393cb6a6_94720386')) {function content_5ac493393cb6a6_94720386($_smarty_tpl) {?><?php if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_adv')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.adv.php';
?><!--主体右边内容开始-->
<div class="side_content rt">
    <?php echo smarty_function_widget(array('id'=>"tenders/fast",'title'=>"免费装修设计",'from'=>"TSJ"),$_smarty_tpl);?>

    <!-- widget  -->
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
<!--底边内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>