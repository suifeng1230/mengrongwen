<?php /* Smarty version Smarty-3.1.8, created on 2018-04-18 17:05:56
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\mobile\passport\signup.html" */ ?>
<?php /*%%SmartyHeaderCode:283555ad5e1290ac4f6-02657515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be24ccd7032a8a230a3b29e7e84cb67084eb7e4d' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\mobile\\passport\\signup.html',
      1 => 1524042351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283555ad5e1290ac4f6-02657515',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5e1291cd635_40828813',
  'variables' => 
  array (
    'pager' => 0,
    'fromlist' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5e1291cd635_40828813')) {function content_5ad5e1291cd635_40828813($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["tpl_page_title"] = new Smarty_variable("用户注册", null, 0);?>
<?php $_smarty_tpl->tpl_vars["seo_sub_title"] = new Smarty_variable("会员注册", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pding login_cont">

	<form id="account-form2" class="login-form">
		<input type="hidden" name="account[from]" value="<?php echo $_smarty_tpl->tpl_vars['pager']->value['from'];?>
" />
		<table>
			<tr>
				<td class="title">账户类型</td>
				<td>
					<div class="clearfix">
						<label>
							<select name='data[from]'  class="text full" >
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fromlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
								<?php if ($_smarty_tpl->tpl_vars['key']->value!='mechanic'){?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"  ><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
								<?php }?>
								<?php } ?>
							</select>
						</label>
					</div>
				</td>
			</tr>
			<tr>
				<td class="title">手机号码</td>
				<td class="middle"><p class="input"><input class="input text" name="data[phone]" type="text" id="phone" placeholder="请输入您的手机号码"/></p></td>
				<td><div id="unameTip" style="width:240px;margin-top:-18px;"></div></td>
			</tr>

			<tr>
				<td class="title">验证码</td>
				<td class="middle">
					<p class="input short lt" style="width:105px;"><input class="text short"  style="width:100px;" name="data[code]" type="text" placeholder="请输入验证码"/></p>
					<span id='code'  class="goYz"><a id='show_loading' class="none pointcl">...</a><a login="passport:sendsms" class="pointcl">发送验证码</a></span>
				</td>
			</tr>
			<tr>
				<td></td>
				<td class="middle"><input type="submit" action="<?php echo smarty_function_link(array('ctl'=>'mobile/passport:byphone','arg0'=>'member','http'=>'ajax'),$_smarty_tpl);?>
" mini-submit="#account-form2" class="btn subbtn_full" value="立即注册" /></td>
				<td></td>
			</tr>
		</table>
	</form>
</div>
<script>


        $(document).ready(function(){
            function showmsg(message){
                $("#showErr").show().html(message);
            }
            $("#login-btn").click(function(){

                $.post('<?php echo smarty_function_link(array('ctl'=>"mobile/passport:byphone",'arg0'=>"member"),$_smarty_tpl);?>
',
						$("#login-form").serialize(),
						function(data){
							alert(data);return;
					if(data.error!=0){
                         showmsg(data.message);
                    }else{
//                        window.location=
                    }
                },'json');
            });
        });
    </script>
<script>
$("[verify]").click(function(){
	$($(this).attr("verify")).attr("src", "<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_"+Math.random());
});


$("[login]").click(function(e){
	var link = "<?php echo smarty_function_link(array('ctl'=>'mobile/passport:sendsms','arg0'=>'#phone#','http'=>'ajax'),$_smarty_tpl);?>
";
	var phone = $("#phone").val();
	var last_time = 60;
	var __interval = null;
	$.getJSON(link.replace("#phone#", phone), function(ret){
		if(ret.error){
			Widget.MsgBox.error(ret.message.join(""));
		}else{
			__interval = setInterval(function(){
				last_time --;
				if(last_time >0){
					$("#show_loading").html("重新获取（"+last_time+"）秒").show();
					$("[login]").hide();
				}else{
					clearInterval(__interval);
					last_time = 60;
					$("#show_loading").hide();
					$("[login]").show();
				}
			}, 1000);
		}
	});
});

</script>
<?php echo $_smarty_tpl->getSubTemplate ("mobile/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>