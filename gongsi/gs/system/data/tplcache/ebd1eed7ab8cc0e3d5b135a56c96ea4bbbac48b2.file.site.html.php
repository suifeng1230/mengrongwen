<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 15:43:01
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\company\site.html" */ ?>
<?php /*%%SmartyHeaderCode:285405ac48205302546-75147616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebd1eed7ab8cc0e3d5b135a56c96ea4bbbac48b2' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\company\\site.html',
      1 => 1429266538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285405ac48205302546-75147616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac4820539aae7_56679455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac4820539aae7_56679455')) {function content_5ac4820539aae7_56679455($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["seo_sub_title"] = new Smarty_variable("在建工地", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("company/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--装修公司头部结束-->
<div class="subwd">
	<div class="mb20">
		<h3><b>在建工地</b></a></h3>
		<div class="area">
			<ul class="block_type ">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<li>
					<div class="main_site main_list">
						<a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" class="lt pic"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" /></a>
						<div class="main_site_rt main_list_rt rt">
							<h3><p class="lt"><b><a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></b></p></h3>
							<div class="main_site_rt_top">
								<div class="lt">
									<p><span class="ico_list fengge_ico"></span>价格：<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
万元</p>
									<p><span class="ico_list company_ico"></span>小区：<?php echo $_smarty_tpl->tpl_vars['item']->value['home_name'];?>
</p>
								</div>
								<a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" class="btn_sub_sm btn rt">我要参观</a>
							</div>
							<div class="cl"></div>
							<div class="site_step">
								<p class="step bar"><span class="bar step_color step<?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
"></span></p>
								<p><span class="step">开工大吉</span><span class="step">水电改造</span><span class="step">泥瓦阶段</span><span class="step">木工阶段</span><span class="step">油漆阶段</span><span class="step">安装阶段</span><span class="step">验收完成</span></p>
							</div>
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
</div>
<!--底边内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("company/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>