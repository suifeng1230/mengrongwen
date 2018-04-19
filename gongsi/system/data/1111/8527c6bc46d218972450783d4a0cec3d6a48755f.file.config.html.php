<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:32:47
         compiled from "D:\phpStudy\WWW\gongsi\install\view\config.html" */ ?>
<?php /*%%SmartyHeaderCode:148585ac42b3f7050a6-50241288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8527c6bc46d218972450783d4a0cec3d6a48755f' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\install\\view\\config.html',
      1 => 1482996652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148585ac42b3f7050a6-50241288',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42b3f73fa33_15357559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42b3f73fa33_15357559')) {function content_5ac42b3f73fa33_15357559($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<iframe name="miniframe" style="display:none;"></iframe>
	<form action="index.php?step=install" onsubmit="check_install();" method="post">
	<table width="98%" border="0" align="center" cellpadding="6" cellspacing="0">
      <tr>
        <td bgcolor="#F7FBFC" style=" font-size:13px; padding-left:15px;  "> <strong>授权信息</strong> </td>
      </tr>
      <tr>
        <td style="line-height:200%;display:none">
			<table width="100%" border="0" cellspacing="3" cellpadding="0">
			  <tr>
				<td width="17%" align="right">授权域名：</td>
				<td width="83%"><input name="auth[domain]" type="text" value=""  class="input" />&nbsp;&nbsp;(不含有www)--不必填写</td>
			  </tr>
			  <tr>
				<td width="17%" align="right">授权码：</td>
				<td width="83%"><input name="auth[key]" type="text" value=""  class="input" />&nbsp;&nbsp;(购买时得到的32位的字符串)--不必填写</td>
			  </tr>
			</table>
		</td>
      </tr>
    </table>
	<table width="98%" border="0" align="center" cellpadding="6" cellspacing="0">
      <tr>
        <td bgcolor="#F7FBFC" style=" font-size:13px; padding-left:15px;  "> <strong>数据库配置</strong> </td>
      </tr>
      <tr>
        <td style="line-height:200%;">
			<table width="100%" border="0" cellspacing="3" cellpadding="0">
			  <tr>
				<td width="17%" align="right">数据库主机：</td>
				<td width="83%"><input name="db[host]" type="text" value="localhost"  class="input" /></td>
			  </tr>
			  <tr>
				<td width="17%" align="right">数据库端口号：</td>
				<td width="83%"><input name="db[port]" type="text" value="3306"  class="input" /></td>
			  </tr>
			  <tr>
				<td align="right">数据库用户名：</td>
				<td><input name="db[uname]" type="text" value="root" class="input" /></td>
			  </tr>
			  <tr>
				<td align="right">数据库密码：</td>
				<td><input name="db[passwd]" type="text" class="input" /></td>
			  </tr>
						<tr>
				<td align="right">数据库名称：</td>
				<td><input name="db[name]" type="text" class="input" /></td>
			  </tr>
			  <tr>
				<td align="right">数据表前缀：</td>
				<td><input name="db[tablepre]" type="text" value="jh_"  class="input" /></td>
			  </tr>
			</table>
		</td>
      </tr>
    </table>
      <table width="98%" border="0" align="center" cellpadding="6" cellspacing="0">
        <tr>
          <td bgcolor="#F7FBFC" style=" font-size:13px; padding-left:15px;  "><strong>管理员账号</strong> </td>
        </tr>
        <tr>
          <td style="line-height:200%;"><table width="100%" border="0" cellspacing="3" cellpadding="0">
            <tr>
              <td width="17%" align="right">管理员姓名：</td>
              <td width="83%"><input name="admin[uname]" type="text"  value="ijianghu" class="input" /></td>
            </tr>
            <tr>
              <td align="right">登录密码：</td>
              <td><input name="admin[passwd]" type="text" value="ijianghu" class="input" /></td>
            </tr>
            <tr>
              <td align="right">电子邮箱：</td>
              <td><input name="admin[mail]" type="text" value="ijianghu@qq.com" class="input" /></td>
            </tr>
            <tr>
                <td align="right" valign="top">演示数据：</td>
                <td>
                    <label><input name="initdemo" type="checkbox" value="1" />安装演示数据</label>
                </td>
            </tr> 
          </table></td>
        </tr>
        <tr>
		<td height="55" align="center"  >
			<input name="" type="button"  class="step_submit" onclick="window.location.href='index.php?step=check';" value="上一步" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
			<input type="submit" name="" value="下一步"  class="step_submit"/>		 
		  </td>
        </tr>
      </table>
	   </form>
<script type="text/javascript">
function check_install(){
	Widget.MsgBox.load('正在安装系统...', 60000);
	return true;
}
</script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>