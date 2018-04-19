<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 15:42:52
         compiled from "375b22eee18307ac2fa97cb15e1337525baf910c" */ ?>
<?php /*%%SmartyHeaderCode:112835ac481fcc14ab9-89326679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '375b22eee18307ac2fa97cb15e1337525baf910c' => 
    array (
      0 => '375b22eee18307ac2fa97cb15e1337525baf910c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '112835ac481fcc14ab9-89326679',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iteration' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac481fcc3bbc9_32285950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac481fcc3bbc9_32285950')) {function content_5ac481fcc3bbc9_32285950($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
?>
			<li>
				<span class="lt"><font class="paihang_num<?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</font><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],35);?>
</a>
				</span>
				<span class="rt">已投标：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['tenders_num'];?>
</font></span>
			</li>
			<?php }} ?>