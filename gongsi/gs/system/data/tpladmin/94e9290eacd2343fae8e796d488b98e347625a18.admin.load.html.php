<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 18:24:15
         compiled from "admin:page/load.html" */ ?>
<?php /*%%SmartyHeaderCode:238105ac4a7cf2a7152-50307474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94e9290eacd2343fae8e796d488b98e347625a18' => 
    array (
      0 => 'admin:page/load.html',
      1 => 1430882490,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '238105ac4a7cf2a7152-50307474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac4a7cf2f14e8_46861291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac4a7cf2f14e8_46861291')) {function content_5ac4a7cf2f14e8_46861291($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-clew" style="width:500px;">
	<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
		<tr>
			<td class="b" align="center">
				<p class="s-15"></p>
				<p style="color:#FF3300;"><?php echo $_smarty_tpl->tpl_vars['pager']->value['title'];?>
</p>
				<p style="text-align: center"><img src="./images/clew-load.gif" /></p>
			</td>
		</tr>
		<tr>
			<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['link'];?>
" class="red">如没有跳转,点击这里立即跳转</a>
				<p class="s-15"></p>
			</td>
		</tr>
	</table>            
</div>
<script type="text/javascript">setTimeout(function(){window.location.href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['link'];?>
";},<?php echo $_smarty_tpl->tpl_vars['pager']->value['timer'];?>
*1000);</script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>