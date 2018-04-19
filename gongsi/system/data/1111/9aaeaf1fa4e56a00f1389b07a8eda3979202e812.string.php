<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:16:56
         compiled from "9aaeaf1fa4e56a00f1389b07a8eda3979202e812" */ ?>
<?php /*%%SmartyHeaderCode:60255acb0558336c46-17037180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9aaeaf1fa4e56a00f1389b07a8eda3979202e812' => 
    array (
      0 => '9aaeaf1fa4e56a00f1389b07a8eda3979202e812',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '60255acb0558336c46-17037180',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pager' => 0,
    'CONFIG' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5acb05583e4ef0_92857389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb05583e4ef0_92857389')) {function content_5acb05583e4ef0_92857389($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?>
				<li>
					<span>工地名称：<a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
					</span><span>承接公司：<a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['ext']['company']['name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['ext']['company']['company_url'];?>
"><font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['ext']['company']['name'];?>
</font></a>
					</span><span>进度：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['status_title'];?>
</font></span>
					<div class="main_5f_hidden">
						<a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" class="lt"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" /></a>
						<div class="main_5f_hidden_lt lt">
							<p class="title"><span>工地名称：<a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><b  class="fontcl1"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</b></a>
								</span><span>承接公司：<?php if ($_smarty_tpl->tpl_vars['item']->value['ext']['company']){?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['ext']['company']['company_url'];?>
" class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['ext']['company']['name'];?>
</a>
								<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
<?php }?></span></p>
							<p class="bz"><?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['ext']['status_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?><a><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
</a>
								<?php } ?></p>
							<div class="bzhou bzou_<?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
"></div>
						</div>
						<div class="main_5f_hidden_rt rt">
							<a mini-load="我要参观"  href="<?php echo smarty_function_link(array('ctl'=>'site:yuyue','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" class="btn btn_sub_big">我要参观</a>
							<p>最后更新时间：<?php echo date('m-d',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</p>
						</div>
					</div>
				</li>
				<?php }} ?>