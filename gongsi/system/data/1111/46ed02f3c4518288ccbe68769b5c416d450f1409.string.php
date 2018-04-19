<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 17:15:34
         compiled from "46ed02f3c4518288ccbe68769b5c416d450f1409" */ ?>
<?php /*%%SmartyHeaderCode:245475ac497b69f8708-01614790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46ed02f3c4518288ccbe68769b5c416d450f1409' => 
    array (
      0 => '46ed02f3c4518288ccbe68769b5c416d450f1409',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '245475ac497b69f8708-01614790',
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
  'unifunc' => 'content_5ac497b6a0fe05_07573917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac497b6a0fe05_07573917')) {function content_5ac497b6a0fe05_07573917($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?>
		<li>
			<a href="<?php echo smarty_function_link(array('ctl'=>'mobile/youhui:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
">
			<div class="index_youhui opacity_img">
				<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
" />
				<p class="bg"></p>
				<p class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
			</div>
			</a>
		</li>
		<?php }} ?>