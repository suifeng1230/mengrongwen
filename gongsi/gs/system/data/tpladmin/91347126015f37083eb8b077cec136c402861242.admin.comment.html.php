<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 10:31:14
         compiled from "admin:config/comment.html" */ ?>
<?php /*%%SmartyHeaderCode:115665ac438f2c42745-63223926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91347126015f37083eb8b077cec136c402861242' => 
    array (
      0 => 'admin:config/comment.html',
      1 => 1429266518,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '115665ac438f2c42745-63223926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac438f2cc7461_85396518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac438f2cc7461_85396518')) {function content_5ac438f2cc7461_85396518($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"></td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
<h4 class="tip-notice">评论设置</h4>
<form action="?system/config-access.html" mini-form="config-form" method="post" >
<input type="hidden" name="K" value="comment" />
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr><th>文章模块：</th>
    <td><select name="config[article_type]">
            <option value="closed" <?php if ($_smarty_tpl->tpl_vars['config']->value['article_type']=='closed'){?>selected<?php }?>>关闭评论</option>
            <option value="comment" <?php if ($_smarty_tpl->tpl_vars['config']->value['article_type']=='comment'){?>selected<?php }?>>站内评论</option>
            <option value="sns" <?php if ($_smarty_tpl->tpl_vars['config']->value['article_type']=='sns'){?>selected<?php }?>>社会化评论框</option>
        </select>
    </td>
</tr>
<tr><th>装修案例：</th>
    <td><select name="config[case_type]">
            <option value="closed" <?php if ($_smarty_tpl->tpl_vars['config']->value['case_type']=='closed'){?>selected<?php }?>>关闭评论</option>
            <option value="comment" <?php if ($_smarty_tpl->tpl_vars['config']->value['case_type']=='comment'){?>selected<?php }?>>站内评论</option>
            <option value="sns" <?php if ($_smarty_tpl->tpl_vars['config']->value['case_type']=='sns'){?>selected<?php }?>>社会化评论框</option>
        </select>
    </td>
</tr>
<tr><th>装修日记：</th>
    <td><select name="config[diary_type]">
            <option value="closed" <?php if ($_smarty_tpl->tpl_vars['config']->value['diary_type']=='closed'){?>selected<?php }?>>关闭评论</option>
            <option value="comment" <?php if ($_smarty_tpl->tpl_vars['config']->value['diary_type']=='comment'){?>selected<?php }?>>站内评论</option>
            <option value="sns" <?php if ($_smarty_tpl->tpl_vars['config']->value['diary_type']=='sns'){?>selected<?php }?>>社会化评论框</option>
        </select>
    </td>
</tr>
<tr><th>社会化评论框：</th><td>
        <textarea name="config[snscomment]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['snscomment'];?>
</textarea><br />
        <p class="tip-comment" >影响有：文章评论、装修案例、装修日记</p>
        <p class="tip-comment" >目前支持:
            <b style="font-weight:bold;color:red;"> 
            <a href="http://duoshuo.com/" target="_blank">多说</a>、
            <a href="http://www.ujian.cc/" target="_blank">友言</a>、
            <a href="http://changyan.sohu.com/" target="_blank">畅言</a>、
            <a href="http://open.weibo.com/widget/comments.php" target="_blank">微博</a>
        </b>
        </p>
    </td>
</tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form>
</div>
<script type="text/javascript">
(function(K, $){
    $("input[name='config[closed]']").on('click', function(){
        if($(this).val() == 1){
            $("#tr_closed_reason").show();
        }else{
            $("#tr_closed_reason").hide();
        }
    });
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>