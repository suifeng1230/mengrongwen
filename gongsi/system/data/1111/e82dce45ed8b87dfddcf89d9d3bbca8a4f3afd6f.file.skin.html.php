<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 11:47:33
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\ucenter\shop\skin.html" */ ?>
<?php /*%%SmartyHeaderCode:223305ac990d5c31821-46025328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e82dce45ed8b87dfddcf89d9d3bbca8a4f3afd6f' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\ucenter\\shop\\skin.html',
      1 => 1429266550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223305ac990d5c31821-46025328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'group' => 0,
    'skins' => 0,
    'pager' => 0,
    'v' => 0,
    'k' => 0,
    'shop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac990d5d8fe88_43912821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac990d5d8fe88_43912821')) {function content_5ac990d5d8fe88_43912821($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="ucenter_t">
    <ul>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:base'),$_smarty_tpl);?>
" >基本设置</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:info'),$_smarty_tpl);?>
">资料设置</a></li>
        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['domain']['shop']){?>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:domain'),$_smarty_tpl);?>
">个性域名</a></li>
        <?php }?>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:seo'),$_smarty_tpl);?>
">SEO设置</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:gmsm'),$_smarty_tpl);?>
">购买说明</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/banner:index'),$_smarty_tpl);?>
">轮转广告</a></li>
        <li class="on"><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:skin'),$_smarty_tpl);?>
">店铺模板</a></li>  
    </ul>
</div>
<div class="ucenter_c">
<style type="text/css">
.template_list li{float: left;width: 200px; margin:10px; text-align: center;}
</style>    
<?php if ($_smarty_tpl->tpl_vars['group']->value['priv']['allow_skin']<0){?>
<p class="tips"><span class="lock">您是【<b class="red"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
</b>】不能更换模板</span></p>
<?php }?>
<form action="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:skin'),$_smarty_tpl);?>
" mini-form="ucenter" method="post">
<table cellspacing="0" cellpadding="0" class="form">
    <tr>
        <td colspan="2">
            <ul class="template_list">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['skins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <li>
                    <label><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" /><br />
                    <input type="radio" <?php if ($_smarty_tpl->tpl_vars['pager']->value['audit_skin']<0){?>disabled="disabled"<?php }else{ ?>name="skin"<?php }?> <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['shop']->value['skin']){?> checked="checked" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"/><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</label>
                </li>
                <?php } ?>
            </ul>
            <div class="cl"></div>
        </td>
    </tr>
    <tr><th></th><td><?php if ($_smarty_tpl->tpl_vars['group']->value['priv']['allow_skin']<0){?><input type="button" value="没有权限" disabled="disabled" class="mpbtn" /><?php }else{ ?><input type="submit" value="提交数据" class="green_btn" /><?php }?></td></tr>
</table>
</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>