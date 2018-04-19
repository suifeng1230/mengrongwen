<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 11:48:29
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\ucenter\shop\seo.html" */ ?>
<?php /*%%SmartyHeaderCode:161055ac9910d1894b9-94882439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '799712ae5de7230a0f509eddac8046d610966831' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\ucenter\\shop\\seo.html',
      1 => 1429266550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161055ac9910d1894b9-94882439',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'group' => 0,
    'shop' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac9910d2e4766_42461380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac9910d2e4766_42461380')) {function content_5ac9910d2e4766_42461380($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
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
        <li class="on"><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:seo'),$_smarty_tpl);?>
">SEO设置</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:gmsm'),$_smarty_tpl);?>
">购买说明</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/banner:index'),$_smarty_tpl);?>
">轮转广告</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:skin'),$_smarty_tpl);?>
">店铺模板</a></li>  
    </ul>
</div>
<div class="ucenter_c">
<?php if ($_smarty_tpl->tpl_vars['group']->value['priv']['allow_seo']<0){?><p class="tips"><span class="lock">你是【<b class="red"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
</b>】不能设置SEO</span></p><?php }?>
<form action="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:seo'),$_smarty_tpl);?>
" mini-form="ucenter" method="post">
<table width="100%" cellspacing="0" cellpadding="0" class="form">
    <tr><th>商铺名称：</th><td><?php echo $_smarty_tpl->tpl_vars['shop']->value['title'];?>
</td></tr>
    <tr><th class="w-100">SEO 标题：</th><td><input type="text" name="data[seo_title]" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['seo_title'];?>
" class="input w-500" <?php if ($_smarty_tpl->tpl_vars['pager']->value['audit_seo']<0){?>disabled="disabled"<?php }?>/></td></tr>
    <tr><th class="w-100">SEO 关键字：</th><td><input type="text" name="data[seo_keywords]" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['seo_keywords'];?>
" class="input w-500" <?php if ($_smarty_tpl->tpl_vars['pager']->value['audit_seo']<0){?>disabled="disabled"<?php }?>/></td></tr>
    <tr><th class="w-100">SEO 描述：</th><td><textarea name="data[seo_description]" class="textarea w-500" <?php if ($_smarty_tpl->tpl_vars['pager']->value['audit_seo']<0){?>disabled="disabled"<?php }?>><?php echo $_smarty_tpl->tpl_vars['shop']->value['seo_description'];?>
</textarea></td></tr>
    <tr><th></th><td><?php if ($_smarty_tpl->tpl_vars['group']->value['priv']['allow_se']<0){?><input type="button" value="没有权限" disabled="disabled" class="mpbtn" /><?php }else{ ?><input type="submit" value="提交数据" class="green_btn" /><?php }?></td></tr>
</table>
</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>