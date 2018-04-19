<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:38:28
         compiled from "8604ade488e6ff4e69bd23b2283cc69417502c4c" */ ?>
<?php /*%%SmartyHeaderCode:300025ad550148823a4-51587360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8604ade488e6ff4e69bd23b2283cc69417502c4c' => 
    array (
      0 => '8604ade488e6ff4e69bd23b2283cc69417502c4c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '300025ad550148823a4-51587360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5501493dbd7_51498057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5501493dbd7_51498057')) {function content_5ad5501493dbd7_51498057($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>

					<li <?php if ($_smarty_tpl->tpl_vars['index']->value==4){?>style="border-bottom:none"<?php }?>>
						<p>
							<span class="lt"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['ext']['company']['company_url'];?>
" target="_blank" title='<?php echo $_smarty_tpl->tpl_vars['item']->value['info']['company']['name'];?>
' class="tp"><?php echo $_smarty_tpl->tpl_vars['item']->value['ext']['company']['name'];?>
</a></span>
							<span class="rt"><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'tenders:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tenders_id']),$_smarty_tpl);?>
" target="_blank" class="rt btn_sub_smler btn">新签约</a></span>
						</p>
						<p>
							<span class="lt"><a href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['home_id_id'],'arg1'=>"1"),$_smarty_tpl);?>
" target="_blank" class="graycl">[<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['home_name'])===null||$tmp==='' ? '--' : $tmp);?>
]</a></span>
							<span class="rt name"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['contact'],3,'');?>
**</span>
						</p>
					</li>
				<?php }} ?>