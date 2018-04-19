<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 14:20:41
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\ucenter\member\info.html" */ ?>
<?php /*%%SmartyHeaderCode:1345ac9b4b90c0115-32603573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4769719583ab8285f1af0689790be93f768fc7b1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\ucenter\\member\\info.html',
      1 => 1429266548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1345ac9b4b90c0115-32603573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MEMBER' => 0,
    'from_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac9b4b92eb183_77590338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac9b4b92eb183_77590338')) {function content_5ac9b4b92eb183_77590338($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_html_options')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\libs\\smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_YMD')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.YMD.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="ucenter_t">
	<ul>
		<li class="on"><a>基本信息</a></li>
		<li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:passwd'),$_smarty_tpl);?>
">修改密码</a></li>
		<li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:mail'),$_smarty_tpl);?>
">更换邮箱</a></li>
		<li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:face'),$_smarty_tpl);?>
">修改头像</a></li>
	</ul>
</div>
<div class="ucenter_c">
<form id="account-form">
   <table cellspacing="0" cellpadding="0" class="form">
		<tr><th>用户名：</th><td><b class="blue"><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
</b></td></tr>
		<tr>
            <th><i class="pink">*</i>邮箱：</th><td><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['mail'];?>
 
            <span style="margin-left:20px;">
			<?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['verify_mail']){?>
				<b class="blue">已验证</b>
			<?php }else{ ?>
				<b class="red">未验证</b>&nbsp;&nbsp;&nbsp;<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/verify:mail'),$_smarty_tpl);?>
" class="pbtn">立即验证</a>
			<?php }?>
			</span>
            </td>
        </tr>
		<tr><th>手机：</th><td>
			<?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['verify_mobile']){?><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['mobile'];?>
<?php }else{ ?><input type="text" name="account[mobile]" value="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['mobile'];?>
" class="input"><?php }?>
            <span style="margin-left:20px;">
			<?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['verify_mobile']){?>
				<b class="blue">已验证</b>
			<?php }elseif($_smarty_tpl->tpl_vars['MEMBER']->value['mobile']){?>
			<b class="red">未验证</b>&nbsp;&nbsp;&nbsp;<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/verify:mobile'),$_smarty_tpl);?>
" class="pbtn">立即验证</a>
			<?php }?>
			</span>
            </td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='member'){?>
        <tr>
            <th>类型：</th>
            <td>
                <select name="account[from]" class="select w-150"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['from_list']->value,'selected'=>"member"),$_smarty_tpl);?>
</select>
                业主可以选择更换用户类型！更换后不能变更回来！
            </td>
        </tr>
        <?php }?>        
        <tr><th>真实姓名：</th><td><input type="text" name="account[realname]" class="input"  value="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['realname'];?>
"/></td></tr>
		<tr><th>生日：</th><td><?php echo smarty_function_YMD(array('Y'=>$_smarty_tpl->tpl_vars['MEMBER']->value['Y'],'M'=>$_smarty_tpl->tpl_vars['MEMBER']->value['M'],'D'=>$_smarty_tpl->tpl_vars['MEMBER']->value['D'],'name'=>"account",'class'=>"select"),$_smarty_tpl);?>
</td></tr>  
		<tr><th>城市：</th><td><select name="account[city_id]" class="select w-100"><?php echo smarty_function_widget(array('id'=>"data/city",'value'=>$_smarty_tpl->tpl_vars['MEMBER']->value['city_id']),$_smarty_tpl);?>
</select></td></tr>  
        <tr><th></th><td><input action="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:info'),$_smarty_tpl);?>
" mini-submit="#account-form" type="button" value="提交数据" class="green_btn" /></td></tr>
   </table>
</form>
</div>
<!--//右面下开始-->
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>