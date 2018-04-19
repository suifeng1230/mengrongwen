<?php /* Smarty version Smarty-3.1.8, created on 2018-04-09 14:16:56
         compiled from "ae857a84ddda2f45ae8632bc87990d1f36c282f3" */ ?>
<?php /*%%SmartyHeaderCode:177305acb0558051630-33568780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae857a84ddda2f45ae8632bc87990d1f36c282f3' => 
    array (
      0 => 'ae857a84ddda2f45ae8632bc87990d1f36c282f3',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '177305acb0558051630-33568780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iteration' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5acb0558092cf4_47944330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb0558092cf4_47944330')) {function content_5acb0558092cf4_47944330($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?>
					<li>
						<p class="show"><span class="paihang_num <?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></p>
						<div class="dz_paihang">
							<a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
" target="_blank" class="lt"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" /></a>
							<div class="dz_ph_yuey">
								<span>签单数 <font class="pointcl"><?php echo $_smarty_tpl->tpl_vars['item']->value['sign_num'];?>
</font></span>
								<a href="<?php echo smarty_function_link(array('ctl'=>'gs:yuyue','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'http'=>'empty'),$_smarty_tpl);?>
" mini-width='500' mini-load="免费预约" class="btn_sub_smler btn">立即预约</a>
							</div>
						</div>
					</li>
					<?php }} ?>