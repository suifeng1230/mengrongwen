<?php /* Smarty version Smarty-3.1.8, created on 2018-04-18 16:54:31
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\mobile\ucenter\info.html" */ ?>
<?php /*%%SmartyHeaderCode:319125ad707c714d368-33390378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ea7781eea1cd5bf2d02302fd1daecfea2641928' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\mobile\\ucenter\\info.html',
      1 => 1500629536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319125ad707c714d368-33390378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MEMBER' => 0,
    'fromlist' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad707c72faec9_17508536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad707c72faec9_17508536')) {function content_5ad707c72faec9_17508536($_smarty_tpl) {?><?php if (!is_callable('smarty_function_YMD')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.YMD.php';
if (!is_callable('smarty_function_widget')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["tpl_page_title"] = new Smarty_variable("用户信息页", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pding admin_cont">
	<form id='login-form'>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td class="title">姓名</td>
				<td > <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['verify_name']){?><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
  <font class="yz_color">已验证</font>
                <?php }else{ ?><input type="text" name="account[uname]" value="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
" class="text"/> <?php }?></td>
			</tr>
			<tr>
				<td class="title">手机</td>
				<td > <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['verify_mobile']){?><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['mobile'];?>
  <font class="yz_color">已验证</font>
                <?php }else{ ?><input type="text" name="account[mobile]" value="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['mobile'];?>
" class="text"/> <?php }?>
                </td>
			</tr>
			<tr>
				<td class="title">邮箱</td>
				<td><?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['verify_mail']){?><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['mail'];?>
<font class="yz_color">已验证</font>
                <?php }else{ ?><input type="text" name="account[mail]" value="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['mail'];?>
" class="text"/><?php }?></td>
			</tr>
			<tr>
				<td class="title">性别</td>
				<td>
                 <label><input type="radio" name="account[gender]" value="man" <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['gender']=='man'){?>checked="checked"<?php }?>/>&nbsp;男&nbsp;</label>
                 <label><input type="radio" name="account[gender]" value="womain" <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['gender']=='woman'){?>checked="checked"<?php }?>/>&nbsp;女&nbsp;&nbsp;</label>
				</td>
			</tr>
             <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='member'){?>
                <tr><td class="title">类型：</td>
                    <td>
                        <select class="text" name="account[from]">

                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fromlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> 
                            <?php if ($_smarty_tpl->tpl_vars['key']->value!='mechanic'){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['from']==$_smarty_tpl->tpl_vars['key']->value){?>selected="selected"<?php }?>  ><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
                            <?php }?>
                            <?php } ?>
                        </select>
                        业主可以选择更换用户类型！更换后不能变更回来！
                    </td>
                </tr>
                <?php }?>
			<tr>
				<td class="title">生日</td>
				<td >
                <?php echo smarty_function_YMD(array('Y'=>$_smarty_tpl->tpl_vars['MEMBER']->value['Y'],'M'=>$_smarty_tpl->tpl_vars['MEMBER']->value['M'],'D'=>$_smarty_tpl->tpl_vars['MEMBER']->value['D'],'name'=>"account",'class'=>"text third"),$_smarty_tpl);?>

					
				</td>
			</tr>
			<tr>
				<td class="title">城市</td>
				<td>
				<div class="clearfix">
		<label>
                <select name="account[city_id]" class="text full"><option value="0">选择城市</option><?php echo smarty_function_widget(array('id'=>"data/city",'value'=>$_smarty_tpl->tpl_vars['MEMBER']->value['city_id']),$_smarty_tpl);?>
</select>
				</label>
		</div>
				</td>
			</tr>
		</table>
		<input type="button" id='login-btn' class="btn subbtn_full" value="修改信息" />
	</form>
</div>

<script>
        $(document).ready(function() {
            function showmsg(message) {
                $("#showErr").show();$("#showTxt").html(message);
            }
            $("#login-btn").click(function() {
                $.post('<?php echo smarty_function_link(array('ctl'=>"mobile/ucenter:info"),$_smarty_tpl);?>
', $("#login-form").serialize(), function(data) {
                    if (data.error) {
                        showmsg(data.message);
                    } else {
                        window.location = "<?php echo smarty_function_link(array('ctl'=>'mobile/ucenter:info'),$_smarty_tpl);?>
";
                    }
                }, 'json');
            });

        });
    </script>
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>