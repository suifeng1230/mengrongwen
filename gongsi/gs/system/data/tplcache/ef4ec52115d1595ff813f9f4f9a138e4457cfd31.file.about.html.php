<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 15:42:52
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\company\about.html" */ ?>
<?php /*%%SmartyHeaderCode:11015ac481fc9901a4-67965625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef4ec52115d1595ff813f9f4f9a138e4457cfd31' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\company\\about.html',
      1 => 1429266538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11015ac481fc9901a4-67965625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'photo_list' => 0,
    'v' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac481fcb16c07_73660485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac481fcb16c07_73660485')) {function content_5ac481fcb16c07_73660485($_smarty_tpl) {?><?php if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
?><?php $_smarty_tpl->tpl_vars["seo_sub_title"] = new Smarty_variable("公司简介", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("company/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--装修公司头部结束-->
<div class="subwd">
	<?php echo $_smarty_tpl->getSubTemplate ("company/block/info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="mb20 company_rt rt area ">
		<div class="pding">
			<h3 class="sub_com_title"><b>企业简介</b></h3>
			<div class="sub_com_contro">
                <div><?php if ($_smarty_tpl->tpl_vars['company']->value['video']){?><embed src="<?php echo $_smarty_tpl->tpl_vars['company']->value['video'];?>
" quality="high" width="720" height="480" align="middle" allowScriptAccess="always" allowFullScreen="true" mode="transparent" type="application/x-shockwave-flash"></embed><?php }?></div><?php echo $_smarty_tpl->tpl_vars['company']->value['info'];?>

            </div>
			<h3 class="sub_com_title"><b>企业资质</b></h3>
			<div class="sub_com_contro">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photo_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['type']==1){?>
				<div class="zizhi_box"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" /><p class="tit"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</p></div>
                <?php }?>
                <?php } ?>
				<div class="cl"></div>
			</div>
			<h3 class="sub_com_title"><b>企业荣誉</b></h3>
			<div class="sub_com_contro">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photo_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['type']==2){?>
				<div class="zizhi_box"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" /><p class="tit"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</p></div>
                <?php }?>
                <?php } ?>
				<div class="cl"></div>
			</div>
			<h3 class="sub_com_title"><b>联系我们</b></h3>
			<div class="sub_com_contro">
				<p>公   司：<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</p>
				<p>电   话：<?php echo $_smarty_tpl->tpl_vars['company']->value['show_phone'];?>
</p>
				<p>Q   Q：<?php echo $_smarty_tpl->tpl_vars['company']->value['show_qq'];?>
</p>
				<p>地  址:<?php echo $_smarty_tpl->tpl_vars['company']->value['addr'];?>
</p>
                <?php if ($_smarty_tpl->tpl_vars['company']->value['lng']&&$_smarty_tpl->tpl_vars['company']->value['lat']){?>
				<div style="height:400px;width:100%"><?php echo smarty_function_widget(array('id'=>"data/mapmarker",'lng'=>$_smarty_tpl->tpl_vars['company']->value['lng'],'lat'=>$_smarty_tpl->tpl_vars['company']->value['lat']),$_smarty_tpl);?>
</div>
                <?php }?>
			</div>
		</div>
	</div>
	<div class="cl"></div>
</div>
<!--底边内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("company/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>