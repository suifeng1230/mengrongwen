<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:36:44
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\mall\block\mall_cate.html" */ ?>
<?php /*%%SmartyHeaderCode:190015ac42c2ca79b46-63261982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c6a5f72adbacc5d7a2da1560dab679381105807' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\mall\\block\\mall_cate.html',
      1 => 1429266536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190015ac42c2ca79b46-63261982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cate_list' => 0,
    'v' => 0,
    'vv' => 0,
    'vvv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42c2cafe862_59184998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42c2cafe862_59184998')) {function content_5ac42c2cafe862_59184998($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?><ul>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <?php if (!$_smarty_tpl->tpl_vars['v']->value['parent_id']){?>
    <li>
        <div class="mall_top_show pding lt">
            <p class="tit"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</p>
            <p><?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['vv']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['vv']->index++;
?><?php if ($_smarty_tpl->tpl_vars['vv']->value['parent_id']==$_smarty_tpl->tpl_vars['v']->value['cat_id']&&$_smarty_tpl->tpl_vars['vv']->index<3){?><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>$_smarty_tpl->tpl_vars['vv']->value['cat_id'],'arg1'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a><?php }?><?php } ?></p>
        </div>
        <div class="mall_top_hidden pding lt">
            <table>
                <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['vv']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['vv']->index++;
?>
                <?php if ($_smarty_tpl->tpl_vars['vv']->value['parent_id']==$_smarty_tpl->tpl_vars['v']->value['cat_id']){?>
                <tr>
                    <td class="tit"><?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
</td>
                    <td><?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value){
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['vvv']->value['parent_id']==$_smarty_tpl->tpl_vars['vv']->value['cat_id']){?><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>$_smarty_tpl->tpl_vars['vvv']->value['cat_id'],'arg1'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['vvv']->value['title'];?>
</a><?php }?><?php } ?></td>
                </tr>
                <?php }?>
                <?php } ?>
            </table>
        </div>
        <div class="cl"></div>
    </li>
    <?php }?>
    <?php } ?>
</ul>
<script>
$(document).ready(function(){
	 $(".mall_top ul li").mouseover(function(){
		 $(this).find(".mall_top_show").addClass('current');
		 $(this).find(".mall_top_show p.tit").css('color','#fe7902');
		 $(this).find(".mall_top_hidden").show();
	 }).mouseleave(function(){
		 $(this).find(".mall_top_show").removeClass('current');
		 $(this).find(".mall_top_show p.tit").css('color','#333');
		 $(this).find(".mall_top_hidden").hide();
	 });
 });	
</script><?php }} ?>