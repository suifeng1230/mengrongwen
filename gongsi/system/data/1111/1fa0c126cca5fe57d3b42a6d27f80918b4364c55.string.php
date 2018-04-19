<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 17:00:02
         compiled from "1fa0c126cca5fe57d3b42a6d27f80918b4364c55" */ ?>
<?php /*%%SmartyHeaderCode:19215ac49412167b44-45616393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fa0c126cca5fe57d3b42a6d27f80918b4364c55' => 
    array (
      0 => '1fa0c126cca5fe57d3b42a6d27f80918b4364c55',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '19215ac49412167b44-45616393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac4941217f253_25358337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac4941217f253_25358337')) {function content_5ac4941217f253_25358337($_smarty_tpl) {?>
                    <li>
                        <div class="opacity_img">
                             <a class="fancybox-button1" rel="fancybox-button1" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" /></a>
                            <p class="bg"></p>
                            <p class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
11111111111</p>
                        </div>
                    </li>
                    <?php }} ?>