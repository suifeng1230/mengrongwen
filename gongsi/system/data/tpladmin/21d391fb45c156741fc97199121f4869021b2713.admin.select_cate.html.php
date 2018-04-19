<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:22:14
         compiled from "admin:product/product/select_cate.html" */ ?>
<?php /*%%SmartyHeaderCode:297235ad55a56e053e3-75907835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21d391fb45c156741fc97199121f4869021b2713' => 
    array (
      0 => 'admin:product/product/select_cate.html',
      1 => 1429266516,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '297235ad55a56e053e3-75907835',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'COOKIE' => 0,
    'shop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad55a56ef3894_23667943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad55a56ef3894_23667943')) {function content_5ad55a56ef3894_23667943($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
 选择商品分类 </th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"product/product:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
    <style type="text/css">.J_cate_select{height:200px;min-width:150px;}</style>
    <table width="100%" border="0" cellspacing="0" class="table-data form">
        <tr>
            <td colspan="10"><input type="hidden" name="cat_id" value="0" id="J_cate_id"/>                
                <select class="J_cate_select mgr10" size="12" data-pids="<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['pager']->value['cat_pids'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['COOKIE']->value['LAST_product_pids'] : $tmp))===null||$tmp==='' ? '' : $tmp);?>
" data-pid="0" data-uri="?shop/cate-children-#pid#.html"></select>
            </td>
        </tr>
        <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom"><input type="button" class="bt-big" id="select_cate_btn" value="选择分类" /></td></tr>
    </table>
</div>
<script type="text/javascript">
(function(K, $){
    $('.J_cate_select').cate_select({attrs:"size=12",first_option:false,top_option:null});
    $("#select_cate_btn").click(function(){
        <?php if ($_smarty_tpl->tpl_vars['pager']->value['type']=='edit'){?>
        var link = "?product/product-edit-<?php echo $_smarty_tpl->tpl_vars['pager']->value['product_id'];?>
-#cat_id#.html";
        <?php }else{ ?>
        var link = "?product/product-create-<?php echo $_smarty_tpl->tpl_vars['shop']->value['shop_id'];?>
-#cat_id#.html";
        <?php }?>
        var cat_id = parseInt($("#J_cate_id").val(), 10);
        if(cat_id > 0){
            window.location = link.replace("#cat_id#", cat_id);
        }else{
            Widget.MsgBox.error("请选择商品分类");
        }
    });
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>