<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:32:38
         compiled from "D:\phpStudy\WWW\gongsi\install\view\protocol.html" */ ?>
<?php /*%%SmartyHeaderCode:176595ac42b361618a5-25678141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c91523c5c730c2b9fe6c66c9d26e9d2d685aba1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\install\\view\\protocol.html',
      1 => 1482996796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176595ac42b361618a5-25678141',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42b361e2749_76494014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42b361e2749_76494014')) {function content_5ac42b361e2749_76494014($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>

<div style="display:block; overflow-y: scroll;height:500px;padding:8px;"><br />
    <div style="text-align:center; font-size:14px;"><strong>许可协议</strong></div>

<p>版权所有&nbsp;(c)&nbsp;2016</p><p><br /></p>  
</div>      
        
        </td>
      </tr>
      <tr>
        <td height="60" align="center"> 
    <form action="index.php" method="get">
        <input name="step" type="hidden" value="check" />
        <input type="button" name="" value="我不同意"  class="step_submit" onclick="location.href='http://www.xiaobihu.org/'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="" value="我同意"  class="step_submit" />
    </form>
        </td>
      </tr>
    </table>    
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>