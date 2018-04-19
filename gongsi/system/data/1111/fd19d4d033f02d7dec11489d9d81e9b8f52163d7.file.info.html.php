<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 15:42:52
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\company\block\info.html" */ ?>
<?php /*%%SmartyHeaderCode:314905ac481fcb3dd06-13011890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd19d4d033f02d7dec11489d9d81e9b8f52163d7' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\company\\block\\info.html',
      1 => 1433483364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314905ac481fcb3dd06-13011890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'company' => 0,
    'CONFIG' => 0,
    'v' => 0,
    'k' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac481fcbe5cb1_20457138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac481fcbe5cb1_20457138')) {function content_5ac481fcbe5cb1_20457138($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_qq')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.qq.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_adv')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.adv.php';
?><div class="company_lt lt">
	<div class="company_lt_intro area mb10">
		<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['company']->value['thumb'];?>
" class="pic"/>
		<p class="tit"><b><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</b></p>
		<p>信誉：<?php echo $_smarty_tpl->tpl_vars['company']->value['score'];?>
</p>
		<p>电话：<?php echo $_smarty_tpl->tpl_vars['company']->value['show_phone'];?>
</p>
		<p>Q Q：<?php echo smarty_modifier_qq($_smarty_tpl->tpl_vars['company']->value['show_qq'],1);?>
</p>
		<div class="pingfen_bar com_pingf">
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
<span class="bar probar_gray"><span class="bar probar_color bar2" style="width:<?php echo $_smarty_tpl->tpl_vars['company']->value['avg_scores'][$_smarty_tpl->tpl_vars['k']->value]*20;?>
%"></span></span><?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['company']->value['avg_scores'][$_smarty_tpl->tpl_vars['k']->value]);?>
</p>
			<?php } ?>
		</div>
	</div>
	<div class="mb10 area">
		<h3 class="side_tit">装修公司排行榜</h3>
		<ul class="pding paihang">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li>
				<span class="lt"><font class="paihang_num<{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></font><a href="<{$item.company_url}>"><{$item.name|cutstr:35}></a>
				</span>
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
				<span class="lt"><font class="paihang_num<{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></font><a href="<{link ctl='blog'  arg0=$item.uid}>"><{$item.name|cutstr:35}></a>
				</span>
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
				<span class="lt"><font class="paihang_num<{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></font><a href="<{link ctl='gz-detail'  arg0=$item.uid}>"><{$item.name|cutstr:35}></a>
				</span>
				<span class="rt">已投标：<font class="fontcl2"><{$item.tenders_num}></font></span>
			</li>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"gz/gz",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</ul>
	</div>
    <div class="mb10 personAd">
        <?php echo smarty_function_adv(array('id'=>"31",'name'=>"设计师右侧招商图片广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

    </div>
</div>
<?php }} ?>