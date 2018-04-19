<?php /* Smarty version Smarty-3.1.8, created on 2018-04-08 11:48:20
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\ucenter\shop\base.html" */ ?>
<?php /*%%SmartyHeaderCode:234085ac99104a23e04-57304477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '121b0ae272ad5b5f2cf2d0c8d22e1959c5e3b40b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\ucenter\\shop\\base.html',
      1 => 1429266550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234085ac99104a23e04-57304477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'shop' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac99104b6f844_60687999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac99104b6f844_60687999')) {function content_5ac99104b6f844_60687999($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="ucenter_t">
    <ul>
        <li class="on"><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:base'),$_smarty_tpl);?>
">基本设置</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:info'),$_smarty_tpl);?>
">资料设置</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:seo'),$_smarty_tpl);?>
">SEO设置</a></li>
        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['domain']['shop']){?>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:domain'),$_smarty_tpl);?>
">个性域名</a></li>
        <?php }?>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:gmsm'),$_smarty_tpl);?>
">购买说明</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop/banner:index'),$_smarty_tpl);?>
">轮转广告</a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:skin'),$_smarty_tpl);?>
">店铺模板</a></li>  
    </ul>
</div>
<div class="ucenter_c">
<form action="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:base'),$_smarty_tpl);?>
" mini-form="ucenter" method="post" ENCTYPE="multipart/form-data">
<table cellspacing="0" cellpadding="0" class="form">
   <tr><th>商铺名称：</th><td><?php echo $_smarty_tpl->tpl_vars['shop']->value['title'];?>
</td></tr>
    <tr><th></th><td><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['shop']->value['logo'];?>
" width="200" height="100"/></td></tr>
    <tr>
        <th class="w-100">商铺长方形Logo：</th>
        <td><input type="file" name="shop_logo"  class="input w-200"/><span class="tip-comment" style="inline-block">长方形LOGO，建议尺寸<span class="tip-comment">尺寸大小：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['CONFIG']->value['attach']['shop']['logo'])===null||$tmp==='' ? '200X100' : $tmp);?>
</span>像素</span></td>
    </tr>
    <tr><th></th><td><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['shop']->value['thumb'];?>
" width="200" height="200"/></td></tr>
    <tr>
        <th class="w-100">商铺正方形Logo：</th>
        <td><input type="file" name="shop_thumb"  class="input w-200"/><span class="tip-comment" style="inline-block">长方形LOGO，建议尺寸<?php echo (($tmp = @$_smarty_tpl->tpl_vars['CONFIG']->value['attach']['shop']['thumb'])===null||$tmp==='' ? '200X200' : $tmp);?>
像素</span></td>
    </tr>
    <tr><th></th><td><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['shop']->value['banner'];?>
" width="600" height="100"/></td></tr>
    <tr>
        <th class="w-100">商铺Banner：</th>
        <td><input type="file" name="shop_banner"  class="input w-200"/><span class="tip-comment" style="inline-block">显示在列表中，建议尺寸1000*200像素</span></td>
    </tr>
    <tr><th></th><td><input type="submit" value="提交数据" class="green_btn" /></td></tr>
</table>
</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>