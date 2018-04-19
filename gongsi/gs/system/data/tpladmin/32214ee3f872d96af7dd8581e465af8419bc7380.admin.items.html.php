<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 10:30:16
         compiled from "admin:system/theme/items.html" */ ?>
<?php /*%%SmartyHeaderCode:145125ac438b8dfe8d1-91387951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32214ee3f872d96af7dd8581e465af8419bc7380' => 
    array (
      0 => 'admin:system/theme/items.html',
      1 => 1492147270,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '145125ac438b8dfe8d1-91387951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'themes' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac438b8f2f420_04695718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac438b8f2f420_04695718')) {function content_5ac438b8f2f420_04695718($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
        <tr>
            <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
            <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th><td align="right"></td><td width="15"></td>
        </tr>
    </table>
</div>
<div class="page-data"> 
    <form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr><th class="w-100">ID</th><th class="w-100">预览图</th><th class="w-150">模板</th><th class="w-150">名称</th><th>作者</th><th class="w-100">默认</th><th class="w-150">操作</th></tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td><label><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['theme_id']){?> value="<?php echo $_smarty_tpl->tpl_vars['item']->value['theme_id'];?>
" name="theme_id[]" CK="PRI"<?php }else{ ?>disabled="disabled"<?php }?>/><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['theme_id'])===null||$tmp==='' ? "new" : $tmp);?>
<label></td>
        <td><img src="../themes/<?php echo $_smarty_tpl->tpl_vars['item']->value['theme'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
"  photo="../themes/<?php echo $_smarty_tpl->tpl_vars['item']->value['theme'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" class="wh-50"/></td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['theme'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['site'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>
</a></td>
        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['default']){?><b class="red">是</b><?php }else{ ?>否<?php }?></td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['default']){?>
                <?php echo smarty_function_link(array('ctl'=>"system/theme:detail",'arg0'=>$_smarty_tpl->tpl_vars['item']->value['theme_id'],'title'=>"管理",'class'=>"button"),$_smarty_tpl);?>

            <?php }elseif($_smarty_tpl->tpl_vars['item']->value['theme_id']){?>
                <?php echo smarty_function_link(array('ctl'=>"system/theme:detail",'arg0'=>$_smarty_tpl->tpl_vars['item']->value['theme_id'],'title'=>"管理",'class'=>"button"),$_smarty_tpl);?>

                <?php echo smarty_function_link(array('ctl'=>"system/theme:uninstall",'args'=>$_smarty_tpl->tpl_vars['item']->value['theme_id'],'act'=>"mini:confirm:您确定要卸载该模板",'title'=>"卸载",'class'=>"button"),$_smarty_tpl);?>

                <?php echo smarty_function_link(array('ctl'=>"system/theme:setdefault",'args'=>$_smarty_tpl->tpl_vars['item']->value['theme_id'],'title'=>"设为默认",'act'=>"mini:设置默认模板",'class'=>"button"),$_smarty_tpl);?>

            <?php }else{ ?>
                <?php echo smarty_function_link(array('ctl'=>"system/theme:install",'args'=>$_smarty_tpl->tpl_vars['item']->value['theme'],'act'=>"mini:安装模板",'title'=>"安装",'class'=>"button"),$_smarty_tpl);?>

            <?php }?>
        </td>
    </tr>
    <?php } ?>
    </table>
    </form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>