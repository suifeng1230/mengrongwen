<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:16:56
         compiled from "a8690fc30b9acc25f41087342590ce951fd763fd" */ ?>
<?php /*%%SmartyHeaderCode:129445acb05581941e9-16109712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8690fc30b9acc25f41087342590ce951fd763fd' => 
    array (
      0 => 'a8690fc30b9acc25f41087342590ce951fd763fd',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '129445acb05581941e9-16109712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
    'item' => 0,
    'pager' => 0,
    'designer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5acb05581fd569_21476417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb05581fd569_21476417')) {function content_5acb05581fd569_21476417($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
							<li <?php if ($_smarty_tpl->tpl_vars['index']->value%3==0){?>style="margin-left:0px;"<?php }?>>
								<a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
									<img data-original="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face'];?>
" class="img" style="display: block;">
									<div class="txt">
										<h6><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],12);?>
</h6>
										<p class="shenfen"><?php echo $_smarty_tpl->tpl_vars['item']->value['group_name'];?>
</p>
										<p class="num">案例数：<span><?php echo $_smarty_tpl->tpl_vars['item']->value['case_num'];?>
</span></p>
										<p class="num">预约数：<span><?php echo $_smarty_tpl->tpl_vars['item']->value['yuyue_num'];?>
</span></p>
										<p class="num">综合评价：<span><?php echo $_smarty_tpl->tpl_vars['item']->value['avg_score'];?>
</span></p>
										<p class="num-1" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'designer:yuyue','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid'],'http'=>'ajax'),$_smarty_tpl);?>
">委托设计</p>
									</div>
								</a>
							</li>
						<?php }} ?>