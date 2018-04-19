<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:16:56
         compiled from "bbc64e6413067baba70b9b3a975f94cba73899cb" */ ?>
<?php /*%%SmartyHeaderCode:295825acb05584bf598-58299416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbc64e6413067baba70b9b3a975f94cba73899cb' => 
    array (
      0 => 'bbc64e6413067baba70b9b3a975f94cba73899cb',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '295825acb05584bf598-58299416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5acb05584f2d80_86510068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb05584f2d80_86510068')) {function content_5acb05584f2d80_86510068($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?>
					<li style="width: 280px;height: 210px;float: left;border-bottom: none;">
						<div class="opacity_img" >
							<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" style="width: 100%;height: 210px;"/></a>
							<p class="bg"></p>
							<p class="text"><span class="index_ico time_ico"></span><font remaintime="<?php echo $_smarty_tpl->tpl_vars['item']->value['ltime'];?>
"></font></p>
						</div>
						<div class="index_tuanz_btm">
							<p><b><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" class="tit"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
								</b></p>
							<p class="colorbg"><span class="lt tit">立省<b class="fontcl2" style="font-size: 16px;">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['jieyue'];?>
</b>元</span>
							<a href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id']),$_smarty_tpl);?>
" target="_blank" class="btn_sub_sm rt btn">立即参团</a>
							</p>
							<p style="padding: 2px 0 0 110px;"><font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['sign_num'];?>
</font>人已参团</p>
						</div>
					</li>
					<?php }} ?>