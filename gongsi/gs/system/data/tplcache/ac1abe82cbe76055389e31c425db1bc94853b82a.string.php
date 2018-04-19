<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 16:56:25
         compiled from "ac1abe82cbe76055389e31c425db1bc94853b82a" */ ?>
<?php /*%%SmartyHeaderCode:311855ac4933931b9f9-29671562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac1abe82cbe76055389e31c425db1bc94853b82a' => 
    array (
      0 => 'ac1abe82cbe76055389e31c425db1bc94853b82a',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '311855ac4933931b9f9-29671562',
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
  'unifunc' => 'content_5ac49339336f76_84271370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac49339336f76_84271370')) {function content_5ac49339336f76_84271370($_smarty_tpl) {?>
                    <li>
                        <div class="opacity_img">
                             <a class="fancybox-button1" rel="fancybox-button1" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" /></a>
                            <p class="bg"></p>
                            <p class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
                        </div>
                    </li>
                    <?php }} ?>