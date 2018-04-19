<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 15:44:08
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\block\mini-footer.html" */ ?>
<?php /*%%SmartyHeaderCode:288305ac48248c6fe06-63199519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22bc939b859694ffdabbc408dfd06a5a1003c83c' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\block\\mini-footer.html',
      1 => 1429266542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288305ac48248c6fe06-63199519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac48248c83686_14480956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac48248c83686_14480956')) {function content_5ac48248c83686_14480956($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['request']->value['MINI']!='load'){?>
<?php if ($_smarty_tpl->tpl_vars['request']->value['MINI']=='LoadIframe'){?>
<script type="text/javascript">window.parent.Widget.MsgBox.hide();if(typeof(window.parent.Dialog_Iframe) == 'object'){window.parent.Dialog_Iframe.dialog({height: $("body").height()+60});}</script>
<?php }?>
        </div>
    </body>
</html>
<?php }?><?php }} ?>