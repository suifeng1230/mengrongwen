<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 09:41:45
         compiled from "E:\phpstudy\WWW\gongsi\install\view\check.html" */ ?>
<?php /*%%SmartyHeaderCode:192005ad550d9854652-38704188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aee19e1e9944e29a0aadad1fb164889f397bc3f3' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\install\\view\\check.html',
      1 => 1481276693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192005ad550d9854652-38704188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sysinfo' => 0,
    'check_dirs' => 0,
    'dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad550d9904304_12230555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad550d9904304_12230555')) {function content_5ad550d9904304_12230555($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
	<table width="98%" border="0" align="center" cellpadding="6" cellspacing="0">
      <tr>
        <td bgcolor="#F7FBFC" style=" font-size:13px; padding-left:15px;  "> <strong>服务器信息</strong> </td>
      </tr>
      <tr>
        <td style="line-height:200%;">
		<table>
		<tr>
			<td width="50%">服务器操作系统：<span style="color:#0066CC"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['server_os'];?>
</span></td>
			<td>服务器解译引擎：<span style="color:#0066CC"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['web_server'];?>
</span></td>
		</tr>
		<tr>
			<td>PHP版本：<span style="color:#0066CC"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['php_version'];?>
</span></td>
			<td>上传附件最大值：<span style="color:#0066CC"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['upload_max_filesize'];?>
</td>
		</tr>
		<tr>
			<td>CURL：<?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['curl'];?>
</td>
			<td>GD：<?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['gd_version'];?>
</td>
		</tr>
		</table>
</td>
      </tr>
    </table>
      <table width="98%" border="0" align="center" cellpadding="6" cellspacing="0">
        <tr>
          <td bgcolor="#F7FBFC" style=" font-size:13px; padding-left:15px;  "><strong>目录权限检测</strong> </td>
        </tr>
        <tr>
          <td style="line-height:200%;"><table width="100%" border="0" cellspacing="1" cellpadding="0">
            <tr>
              <td width="33%" align="center"><strong>目录名</strong></td>
              <td width="33%" align="center"><strong>读取权限</strong></td>
              <td align="center"><strong>写入权限</strong></td>
            </tr>
			<?php  $_smarty_tpl->tpl_vars['dir'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dir']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['check_dirs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dir']->key => $_smarty_tpl->tpl_vars['dir']->value){
$_smarty_tpl->tpl_vars['dir']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['dir']->value['dir'];?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['dir']->value['read'];?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['dir']->value['write'];?>
</td>
			</tr>
			<?php } ?>
          </table>
		  </td>
        </tr>
        <tr>
          <td height="55" align="center"  >
		  <form action="index.php" method="get">
			<input name="step" type="hidden" value="config" />
			<input name="" type="button"  class="step_submit" onclick="window.location.href='index.php';" value="上一步" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" name="" value="下一步"  class="step_submit" />
		  </form>
		  </td>
        </tr>
      </table>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>