<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:35:02
         compiled from "93312e3c3481a64c4a88fe720266fc48739d8b40" */ ?>
<?php /*%%SmartyHeaderCode:165965ac42bc6048d49-16352542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93312e3c3481a64c4a88fe720266fc48739d8b40' => 
    array (
      0 => '93312e3c3481a64c4a88fe720266fc48739d8b40',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '165965ac42bc6048d49-16352542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pager' => 0,
    'site_status_list' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42bc60c5d54_25775985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42bc60c5d54_25775985')) {function content_5ac42bc60c5d54_25775985($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
?>
				<li>
					<div class="index_site_list">
						<span>工地名称：<a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></span>
                        <span>面积：<?php echo $_smarty_tpl->tpl_vars['item']->value['house_mj'];?>
平米</span>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['designer_id']){?><span>设计师：<a href="<?php echo smarty_function_link(array('ctl'=>'designer:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['designer_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['designer'];?>
</a></span><?php }?>
						<span>进度：<font class="fontcl2"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['status_title'])===null||$tmp==='' ? '未开工' : $tmp);?>
</font></span>
					</div>
					<div class="index_site_hover">
						<a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" class="lt"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"/></a>
						<div class="rt index_site_mid">
							<p>
                                <span>工地名称：<a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></span>
                                <span>面积：<?php echo $_smarty_tpl->tpl_vars['item']->value['house_mj'];?>
平米</span>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['designer_id']){?><span>设计师：<a href="<?php echo smarty_function_link(array('ctl'=>'designer:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['designer_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['designer'];?>
</a></span><?php }?>
								</span><a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" class="btn_main_big btn">我要参观</a>
							</p>
							<div class="site_step">
								<p class="step bar"><span class="bar step_color step<?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
"></span></p>
								<p><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['site_status_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><span class="step"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span><?php } ?></p>
							</div>
						</div>
					</div>
					<div class="cl"></div>
				</li>
                <?php }} ?>