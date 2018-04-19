<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 10:16:43
         compiled from "D:\phpStudy\WWW\gongsi\themes\default\ucenter\block\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:168615ac4358b5a31a6-20445301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a85f263a507f9c6b2aa22d0808577cb2403df295' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\gongsi\\themes\\default\\ucenter\\block\\footer.html',
      1 => 1519617215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168615ac4358b5a31a6-20445301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac4358b5d1fb1_55903828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac4358b5d1fb1_55903828')) {function content_5ac4358b5d1fb1_55903828($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\gongsi\\system\\plugins/smarty\\block.calldata.php';
?>		</div>
        <div class="cl"></div>
	</div>
	<div class="cl"></div>
	<div class="footer">
		<p>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'article/article','from'=>'about','city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>'article_id:ASC','limit'=>10)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'article/article','from'=>'about','city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>'article_id:ASC','limit'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <a target="_blank" title="<{$item.title}>" href="<{link ctl='about' arg0=$item.page}>"><{$item.title}></a>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'article/article','from'=>'about','city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>'article_id:ASC','limit'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
    
        </p>
        <p>Copyright © 2018 <a href="http://www.xiaobihu.cc" target="_blank">博虎网络出品</a>, All rights reserved. 技术支持：<a href="http://www.xiaobihu.cc" target="_blank">www.xiaobihu.cc</a></p>
	</div>
</div>
<script type="text/javascript">
(function(K, $){
$("[date],[datepicker]").datepicker({changeYear:true,showOtherMonths:true,selectOtherMonths:true,dateFormat:"yy-mm-dd",beforeShow: function () {setTimeout(function () {$('#ui-datepicker-div').css("z-index", 15);}, 100);}});    
$("[map-marker]").die("click").live("click", function(e){
    e.stopPropagation();e.preventDefault();
    var input = $(this).attr("map-marker").split(",");
    var point = {lng:"", lat:""};
    if(input.length < 2){
        var d = $(input[0]).val().split(",");
        point.lng = d[0];
        point.lat = d[1];
    }else{
        point.lng = $(input[0]).val();
        point.lat = $(input[1]).val();
    }
    Widget.BMap.Marker(point, function(ret){
        if(input.length < 2){
            $(input[0]).val(ret.lng+","+ret.lat);
        }else{
            $(input[0]).val(ret.lng);
            $(input[1]).val(ret.lat);
        }
    });
});
$("[mini-select]").die("click").live("click", function(e){
    e.stopPropagation(); e.preventDefault();
    var a = $(this).attr("mini-select").split("/");
    var elm = a[0].split(",");
    var multi = a[1] || 'N';
    var city_id = a[2] || 0;
    var title = a[3] || ($(this).attr("title") || "请选择");
    var link = $(this).attr("action") || $(this).attr("href");
    var width = $(this).attr("mini-width") || 500;
    if(link.indexOf("?")<0){
        link += "?city_id="+city_id;
    }else{
        link += "&city_id="+city_id;
    }
    Widget.Dialog.Select(link, multi, function(ret){
        if(multi == 'Y'){
            var itemIds = [], itemNames = [];
            for(var i=0; i<ret.length; i++){
                itemIds.push(ret[i][0]);
                itemNames.push(ret[i][1].title)
            }
            $(elm[0]).val(itemIds.join(","));
            if(elm.length > 1){
                $(elm[1]).val(itemNames.join(","));
            }
        }else{
            $(elm[0]).val(ret[0]);
            if(elm.length > 1){
                $(elm[1]).val(ret[1].title);
            }
        }
    }, {title:title,width:width});
});

})(window.KT, window.jQuery);
$(document).ready(function(){
    var r_height = $("#ucenter_right_lay").height();
    if($("#ucenter_left_lay").height() < r_height){
        $("#ucenter_left_lay").height(r_height);
    }
});
</script>


<?php if ($_smarty_tpl->tpl_vars['request']->value['MINI']=='load'){?>
<script type="text/javascript">(function(){$(".ui-dialog .ui-dialog-content .page-title").hide();$(".ui-dialog .ui-dialog-content .page-data").css({margin:"0px"});
$("[date],[datepicker]").datepicker({changeYear:true,showOtherMonths:true,selectOtherMonths:true,dateFormat:"yy-mm-dd",beforeShow: function () {setTimeout(function () {$('#ui-datepicker-div').css("z-index", 15);}, 100);}});
$("[datetime],[timepicker]").datetimepicker({changeYear:true,showOtherMonths:true,selectOtherMonths:true,dateFormat:"yy-mm-dd",timeFormat: "HH:mm:ss",beforeShow: function () {setTimeout(function () {$('#ui-datepicker-div').css("z-index", 15);}, 100);}});
})(window.KT, window.jQuery);</script>
<?php }elseif($_smarty_tpl->tpl_vars['request']->value['MINI']=='LoadIframe'){?>
<script type="text/javascript">
(function(T, $){
$(":checkbox[CKA]").die("click").live("click",function(){
    var $cks = $(":checkbox[CK='"+$(this).attr("CKA")+"']");;
    if($(this).attr("checked")){
        $cks.each(function(){$(this).attr("checked",true);});
    }else{
        $cks.each(function(){$(this).attr("checked",false);});
    }
});
$(".page-title").hide();$(".page-data").css({margin:"0px"});
$("[date],[datepicker]").datepicker({changeYear:true,showOtherMonths:true,selectOtherMonths:true,dateFormat:"yy-mm-dd",beforeShow: function () {setTimeout(function () {$('#ui-datepicker-div').css("z-index", 15);}, 100);}});
$("[datetime],[timepicker]").datetimepicker({changeYear:true,showOtherMonths:true,selectOtherMonths:true,dateFormat:"yy-mm-dd",timeFormat: "HH:mm:ss",beforeShow: function () {setTimeout(function () {$('#ui-datepicker-div').css("z-index", 15);}, 100);}});
window.parent.Widget.MsgBox.hide();
if(typeof(window.parent.Dialog_Iframe) == 'object'){
    window.parent.Dialog_Iframe.dialog({height: $("body").height()+50});
}else{

}
})(window.KT, window.jQuery);
</script>
</body>
</html>
<?php }else{ ?>
<p class="s-50"></p>
<script type="text/javascript">
(function(T, $){
$("[date],[datepicker]").datepicker({changeYear:true,showOtherMonths:true,selectOtherMonths:true,dateFormat:"yy-mm-dd",beforeShow: function () {setTimeout(function () {$('#ui-datepicker-div').css("z-index", 15);}, 100);}});
$("[datetime],[timepicker]").datetimepicker({changeYear:true,showOtherMonths:true,selectOtherMonths:true,dateFormat:"yy-mm-dd",timeFormat: "HH:mm:ss",beforeShow: function () {setTimeout(function () {$('#ui-datepicker-div').css("z-index", 15);}, 100);}});
	$(":checkbox[CKA]").die("click").live("click",function(){
		var $cks = $(":checkbox[CK='"+$(this).attr("CKA")+"']");;
		if($(this).attr("checked")){
			$cks.each(function(){$(this).attr("checked",true);});
		}else{
			$cks.each(function(){$(this).attr("checked",false);});
		}
	});
	if (window.parent == window){
		$(".page-data").css({margin:"45px 10px 10px 10px"});
	}
})(window.KT, window.jQuery);
</script>
<?php }?>
</body>
</html><?php }} ?>