<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 10:16:43
         compiled from "de02737eac2fe58c06c21c3b6ead10b919d02c42" */ ?>
<?php /*%%SmartyHeaderCode:44345ac4358b6107b9-27870557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de02737eac2fe58c06c21c3b6ead10b919d02c42' => 
    array (
      0 => 'de02737eac2fe58c06c21c3b6ead10b919d02c42',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '44345ac4358b6107b9-27870557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac4358b624040_65873088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac4358b624040_65873088')) {function content_5ac4358b624040_65873088($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?>
        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'about','arg0'=>$_smarty_tpl->tpl_vars['item']->value['page']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
        <?php }} ?>