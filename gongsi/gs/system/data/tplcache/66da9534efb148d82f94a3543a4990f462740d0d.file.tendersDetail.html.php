<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 14:23:17
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\ucenter\member\yuyue\tendersDetail.html" */ ?>
<?php /*%%SmartyHeaderCode:306915ac46f55e42c49-53093894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66da9534efb148d82f94a3543a4990f462740d0d' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\ucenter\\member\\yuyue\\tendersDetail.html',
      1 => 1429266548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306915ac46f55e42c49-53093894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
    'MEMBER' => 0,
    'pager' => 0,
    'look_list' => 0,
    'item' => 0,
    'member_list' => 0,
    'company_list' => 0,
    'designer_list' => 0,
    'mechanic_list' => 0,
    'gz_list' => 0,
    'shop_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac46f56175758_03218227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac46f56175758_03218227')) {function content_5ac46f56175758_03218227($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_modifier_iplocal')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.iplocal.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="ucenter_t">
    <ul><li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:tenders'),$_smarty_tpl);?>
">招标管理</a></li><li class="on">查看招标</li></ul>
</div>
<div class="ucenter_c">
    <table width="100%" border="0" cellspacing="0" class="info">
    <tr><th>标题：</th><td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['title'])===null||$tmp==='' ? '--' : $tmp);?>
</td><th>开始时间：</th><td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['zx_time'])===null||$tmp==='' ? '--' : $tmp);?>
</td>
    </tr>
    <tr><th>面积：</th><td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['house_mj'])===null||$tmp==='' ? '--' : $tmp);?>
</td><th>售价/金币：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['gold'];?>
</td></tr>
    <tr><th>最大投标数：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['max_look'];?>
</td><th>已投标数：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['looks'];?>
</td></tr>
    <tr>
        <th>发布时间：</th><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['dateline']);?>
</td>
        <th>发布IP：</th><td><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['detail']->value['clientip'],6,"***");?>
<?php echo smarty_modifier_iplocal($_smarty_tpl->tpl_vars['detail']->value['clientip']);?>
</td>        
    </tr>
    <tr>
        <th>审核：</th><td><?php if ($_smarty_tpl->tpl_vars['detail']->value['audit']){?><b class="blue">已审核</b><?php }else{ ?><b class="red">待审核</b><?php }?></td>
        <th>签单：</th><td><?php if ($_smarty_tpl->tpl_vars['detail']->value['sign_uid']){?><b class="blue">已签单</b><?php }elseif($_smarty_tpl->tpl_vars['detail']->value['stauts']<0){?><b class="red">已作废</b><?php }elseif($_smarty_tpl->tpl_vars['detail']->value['audit']){?><b class="blue">招标中</b><?php }else{ ?><b class="red">--</b><?php }?></td>
    </tr>
    <tr><th>称呼：</th><td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['MEMBER']->value['uname'] : $tmp);?>
</td><th>电话：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['mobile'];?>
</td></tr>
    <tr><th>地址：</th>
        <td colspan="5"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['city_name'])===null||$tmp==='' ? '--' : $tmp);?>
  <?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['area_name'])===null||$tmp==='' ? '--' : $tmp);?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['addr'])===null||$tmp==='' ? '--' : $tmp);?>
</td>
    </tr>
    <tr><td colspan="10" style="height:5px;"></td></tr>
    <tr><th>招标类型：</th><td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['type_title'])===null||$tmp==='' ? '--' : $tmp);?>
</td><th>喜欢风格：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['style_title'];?>
</td></tr>
    <tr><th>预算范围：</th><td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['budget_title'])===null||$tmp==='' ? '--' : $tmp);?>
</td><th>服务需求：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['service_title'];?>
</td></tr>
    <tr><th>空间户型：</th><td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['house_type_title'])===null||$tmp==='' ? '--' : $tmp);?>
</td><th>装修方式：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['way_title'];?>
</td></tr>
    <?php echo smarty_function_widget(array('id'=>"attr/info",'from'=>$_smarty_tpl->tpl_vars['detail']->value['from_attr_key'],'value'=>$_smarty_tpl->tpl_vars['detail']->value['attrvalues']),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['detail']->value['huxing']){?><tr><th>户型图：</th><td colspan="10"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['huxing'];?>
" photo="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['huxing'];?>
"style="max-width:500px;max-height:500px;"/></td></tr><?php }?>
    <tr><th>备注：</th><td colspan="10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['comment'])===null||$tmp==='' ? '--' : $tmp);?>
</td></tr>
    <?php if (!$_smarty_tpl->tpl_vars['detail']->value['sign_uid']){?>
    <tr><th></th><td colspan="10"><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:tendersEdit','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['tenders_id']),$_smarty_tpl);?>
" class="pbtn">完善招标信息</a></td></tr>
    <?php }?>
    </table>
    <h4 class="tips">已经参于竞标公司</h4>
    <table width="100%" border="0" cellspacing="0" class="table">
    <tr>
        <th class="w-80">ID</th><th>商家</th><th>留言</th><th class="w-150">竞标时间</th><th class="w-100">状态</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['look_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td class="left"><label><?php echo $_smarty_tpl->tpl_vars['item']->value['look_id'];?>
<label></td>
        <td>
        <?php if ($_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['from']=='company'){?>
        公司：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['name'])===null||$tmp==='' ? '--' : $tmp);?>

        <?php }elseif($_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['from']=='designer'){?>
        设计师：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['designer_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['name'])===null||$tmp==='' ? '--' : $tmp);?>

        <?php }elseif($_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['from']=='mechanic'){?>
        技工：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['mechanic_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['name'])===null||$tmp==='' ? '--' : $tmp);?>

        <?php }elseif($_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['from']=='gz'){?>
        工长：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['gz_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['name'])===null||$tmp==='' ? '--' : $tmp);?>

        <?php }elseif($_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['from']=='shop'){?>
        商家：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shop_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['name'])===null||$tmp==='' ? '--' : $tmp);?>

        <?php }?>
        </td>
        <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['content'])===null||$tmp==='' ? '--' : $tmp);?>
</td><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
        <td> 
            <?php if ($_smarty_tpl->tpl_vars['detail']->value['sign_uid']){?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['is_signed']){?><b class="blue">中标</b><?php }else{ ?><b>淘汰</b><?php }?>
            <?php }else{ ?>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:signLook','arg0'=>$_smarty_tpl->tpl_vars['item']->value['look_id']),$_smarty_tpl);?>
" mini-act="设为中标" mini-confrim="确定设置该投标中标" class="pbtn">设为中标</a>
            <?php }?>

        </td>
    </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
     <tr><td colspan="20"><p class="text-align">还没有公司投标</p></td></tr>
    <?php } ?>
    </table>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>