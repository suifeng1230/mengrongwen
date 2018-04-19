<?php /* Smarty version Smarty-3.1.8, created on 2018-04-19 13:32:01
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\text\text.html" */ ?>
<?php /*%%SmartyHeaderCode:40665ad5a31a0a5bb4-47543688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a94c7787a1f320a162f50e9ab02e31e0e7e30b1c' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\text\\text.html',
      1 => 1524115917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40665ad5a31a0a5bb4-47543688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5a31a1131c0_38035098',
  'variables' => 
  array (
    'pager' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5a31a1131c0_38035098')) {function content_5ad5a31a1131c0_38035098($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<script src="jquery.js"></script>
<body>
<form >
    <input type="hidden" name="account[from]" value="<?php echo $_smarty_tpl->tpl_vars['pager']->value['from'];?>
" id="token" />
    <input type="text" name="username" id="username" value="3"><br>
    <input type="text" name="password" id="pwd" value="1"><br>
    <input type="button" id="text" onclick="t()" value="支付包支付">
</form>



</body>
<script>
    function t()
    {
        var name =$('#username').val();
        var pwd = $('#pwd').val();
        var token = $('#token').val();
        var data = {'name':name,'pwd':pwd,
                    'account[from]':token
        };
        $.post('<?php echo smarty_function_link(array('ctl'=>"index:text2"),$_smarty_tpl);?>
',data,function(msg){
            console.log(msg);
        })
    }
</script>
</html><?php }} ?>