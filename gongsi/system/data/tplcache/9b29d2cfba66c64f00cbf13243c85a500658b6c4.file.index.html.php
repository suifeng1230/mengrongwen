<?php /* Smarty version Smarty-3.1.8, created on 2018-04-17 10:59:54
         compiled from "E:\phpstudy\WWW\gongsi\themes\default\ucenter\member\index.html" */ ?>
<?php /*%%SmartyHeaderCode:168065ad5632a5a9873-97155106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b29d2cfba66c64f00cbf13243c85a500658b6c4' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\gongsi\\themes\\default\\ucenter\\member\\index.html',
      1 => 1523590908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168065ad5632a5a9873-97155106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MEMBER' => 0,
    'tenders_count' => 0,
    'yuyue_company_count' => 0,
    'yuyue_designer_count' => 0,
    'yuyue_mechanic_count' => 0,
    'yuyue_shop_count' => 0,
    'order_count' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ad5632ad98e53_72473896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5632ad98e53_72473896')) {function content_5ad5632ad98e53_72473896($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_modifier_cutstr')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_modifier_iplocal')) include 'E:\\phpstudy\\WWW\\gongsi\\system\\plugins/smarty\\modifier.iplocal.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div style="width:923px;padding:12px;margin:0 auto;">
    <div class="index_rt_top">
        <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:index'),$_smarty_tpl);?>
" class="lt"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['face'];?>
" width="120" height="120"/></a>
        <div class="shop_top_lt lt">
            <p class="title"><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
</p>
            <p>帐户类型： <?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['from_title'];?>
</p>
            <p>邮箱地址：<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/verify:mail'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['mail'];?>
</a><?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['verify_mail']){?>[已认证]<?php }else{ ?>[未认证]<?php }?></p>
            <p>手机号码：<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/verify:mobile'),$_smarty_tpl);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['MEMBER']->value['mobile'])===null||$tmp==='' ? '--' : $tmp);?>
</a><?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['mobile']){?><?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['verify_mobile']){?>[已认证]<?php }else{ ?>[未认证]<?php }?><?php }?></p>

            <p ><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/verify:mobile','arg0'=>($_smarty_tpl->tpl_vars['MEMBER']->value['uid'])),$_smarty_tpl);?>
">签到</a></p>
             
        </div>
        <div class="shop_top_rt personal_top_rt rt">
            <p>注册时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['MEMBER']->value['dateline']);?>
</p>
            <p>最后登录：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['MEMBER']->value['lastlogin']);?>
</p>
            <p>登录地点：<font class="green"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['MEMBER']->value['loginip'],6,"******");?>
</font>(<?php echo smarty_modifier_iplocal($_smarty_tpl->tpl_vars['MEMBER']->value['loginip']);?>
)</p>
            <p>
                <a href="javascript:;"><span onclick="shareToSinaWB(event)">微博</span></a>
                <a href="javascript:;"><span style="padding-left: 5px;" onclick="shareToQzone(event)">QQ空间</span></a>
                
            </p>
           
        </div>
    </div>
    <div class="index_cont_lt lt">
        <div class="index_c_lt">
            <p class="title"><font class="index_c_lt_icon2"></font>交易统计</p>
            <p class="txt">我的预约</p>
            <p class="txt">
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:tenders'),$_smarty_tpl);?>
" class="green">我的招标(<?php echo $_smarty_tpl->tpl_vars['tenders_count']->value;?>
)</a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:company'),$_smarty_tpl);?>
" class="green">预约公司 (<?php echo $_smarty_tpl->tpl_vars['yuyue_company_count']->value;?>
) </a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:designer'),$_smarty_tpl);?>
" class="green">预约设计师 (<?php echo $_smarty_tpl->tpl_vars['yuyue_designer_count']->value;?>
) </a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:mechanic'),$_smarty_tpl);?>
" class="green">预约技工 (<?php echo $_smarty_tpl->tpl_vars['yuyue_mechanic_count']->value;?>
) </a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:shop'),$_smarty_tpl);?>
" class="green">预约商铺 (<?php echo $_smarty_tpl->tpl_vars['yuyue_shop_count']->value;?>
)</a>
            </p> 
            <p class="txt">我的订单</p>
            <p class="txt">
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/order:index','arg0'=>'unpay'),$_smarty_tpl);?>
" class="green">新订单 (<?php echo $_smarty_tpl->tpl_vars['order_count']->value['new'];?>
) </a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/order:index','arg0'=>'unship'),$_smarty_tpl);?>
" class="green">待收货 (<?php echo $_smarty_tpl->tpl_vars['order_count']->value['unship'];?>
)</a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/order:index','arg0'=>'unpay'),$_smarty_tpl);?>
" class="green">待付款 (<?php echo $_smarty_tpl->tpl_vars['order_count']->value['unpay'];?>
)</a>            
            </p>
        </div>
       <!--  <div class="index_c_lt">
            <p class="title"><font class="index_c_lt_icon3"></font>财务信息</p>
            <p class="txt">我的金币余额：<font class="orange"><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['gold'];?>
</font></p>
            <p><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:gold'),$_smarty_tpl);?>
" class="green">在线充值 </a><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:logs'),$_smarty_tpl);?>
" class="green">收支明细</a></p>
        </div> -->
    </div>
    <div class="index_cont_rt rt">
        <div class="index_c_rt">
            <p class="title"><font class="index_c_rt_icon1"></font>公告</p>
            <p class="txt"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['bulletin']['member'];?>
</p>
        </div>
        <div class="index_c_rt">
            <p class="title"><font class="index_c_rt_icon2"></font>平台联系方式</p>
            <p class="txt">客服电话: <font class="green"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</font></p>
            <p>服务时间:9:00-18:00(周一至周日)</p>
        </div>
    </div>

<script type="text/javascript">
var url =window.location.host+"/index.php?passport-reg";

 var _title,_source,_sourceUrl,_pic,_showcount,_desc,_summary,_site,
            _width = 600,
            _height = 600,
            _top = (screen.height-_height)/2,
            _left = (screen.width-_width)/2,
            _url = url +'-'+'<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uid'];?>
',
            _pic = '';
    // 微博
    function shareToSinaWB(event){
        event.preventDefault();
        var _shareUrl = 'http://v.t.sina.com.cn/share/share.php?&appkey=895033136';     //真实的appkey，必选参数
        _shareUrl += '&url='+ encodeURIComponent(_url||document.location);     //参数url设置分享的内容链接|默认当前页location，可选参数
        _shareUrl += '&title=' + encodeURIComponent(_title||document.title);    //参数title设置分享的标题|默认当前页标题，可选参数
        _shareUrl += '&source=' + encodeURIComponent(_source||'');
        _shareUrl += '&sourceUrl=' + encodeURIComponent(_sourceUrl||'');
        _shareUrl += '&content=' + 'utf-8';   //参数content设置页面编码gb2312|utf-8，可选参数
        _shareUrl += '&pic=' + encodeURIComponent(_pic||'');  //参数pic设置图片链接|默认为空，可选参数
        window.open(_shareUrl,'_blank','width='+_width+',height='+_height+',top='+_top+',left='+_left+',toolbar=no,menubar=no,scrollbars=no, resizable=1,location=no,status=0');
    }
    //分享到QQ空间
    function shareToQzone(event){    

        event.preventDefault();
        var _shareUrl = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?';
        _shareUrl += 'url=' + encodeURIComponent(_url||document.location);   //参数url设置分享的内容链接|默认当前页location
        _shareUrl += '&showcount=' + _showcount||0;      //参数showcount是否显示分享总数,显示：'1'，不显示：'0'，默认不显示
        _shareUrl += '&desc=' + encodeURIComponent(_desc||'分享的描述');    //参数desc设置分享的描述，可选参数
     
        _shareUrl += '&title=' + encodeURIComponent(_title||document.title);    //参数title设置分享标题，可选参数
        _shareUrl += '&site=' + encodeURIComponent(_site||'');   //参数site设置分享来源，可选参数
        _shareUrl += '&pics=' + encodeURIComponent(_pic||'');   //参数pics设置分享图片的路径，多张图片以＂|＂隔开，可选参数
        window.open(_shareUrl,'_blank','width='+_width+',height='+_height+',top='+_top+',left='+_left+',toolbar=no,menubar=no,scrollbars=no,resizable=1,location=no,status=0');
    }
</script> 



    <script type="text/javascript">
        function qiandao(){
            $.ajax({
                
                url:'/index.php?ucenter/member/edit1',
                data:{
                    name:1
                },
                type:'post',
                datatype:'json',
                success:function(data){
                    alert(data)
                }
                
            })
          
        }

        function fenxiang(){
            $.ajax({
                
                url:'/index.php?ucenter/member/edit1',
                data:{
                    name:1
                },
                type:'post',
                datatype:'json',
                success:function(data){
                    alert(data)
                }
                
            })
          
        }

    </script>
 </div>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>