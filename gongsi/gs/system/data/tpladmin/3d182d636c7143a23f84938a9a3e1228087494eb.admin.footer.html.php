<?php /* Smarty version Smarty-3.1.8, created on 2018-04-04 09:33:51
         compiled from "admin:common/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:235655ac42b7f048f66-98524306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d182d636c7143a23f84938a9a3e1228087494eb' => 
    array (
      0 => 'admin:common/footer.html',
      1 => 1432188650,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '235655ac42b7f048f66-98524306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ac42b7f058960_29488059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42b7f058960_29488059')) {function content_5ac42b7f058960_29488059($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['request']->value['MINI']=='load'){?>
<script type="text/javascript">(function(){$(".ui-dialog .ui-dialog-content .page-title").hide();$(".ui-dialog .ui-dialog-content .page-data").css({margin:"0px"});
/* 
$("[date],[datepicker]").datepicker({changeYear:true,showOtherMonths:true,selectOtherMonths:true,dateFormat:"yy-mm-dd",beforeShow: function () {setTimeout(function () {$('#ui-datepicker-div').css("z-index", 115);}, 100);}});
$("[datetime],[timepicker]").datetimepicker({changeYear:true,showOtherMonths:true,selectOtherMonths:true,dateFormat:"yy-mm-dd",timeFormat: "HH:mm:ss",beforeShow: function () {setTimeout(function () {$('#ui-datepicker-div').css("z-index", 115);}, 100);}});
*/
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
/* 
$("[date],[datepicker]").datepicker({changeYear:true,showOtherMonths:true,selectOtherMonths:true,dateFormat:"yy-mm-dd",beforeShow: function () {setTimeout(function () {$('#ui-datepicker-div').css("z-index", 115);}, 100);}});
$("[datetime],[timepicker]").datetimepicker({changeYear:true,showOtherMonths:true,selectOtherMonths:true,dateFormat:"yy-mm-dd",timeFormat: "HH:mm:ss",beforeShow: function () {setTimeout(function () {$('#ui-datepicker-div').css("z-index", 115);}, 100);}});
*/
$("[date],[datepicker]").die("click").live("click", function(){$(this).addClass("Wdate ");WdatePicker({el:this,dateFmt:'yyyy-MM-dd'});});
$("[datetime],[timepicker]").die("click").live("click", function(){$(this).addClass("Wdate ");WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'});});
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
/* 
$("[date],[datepicker]").datepicker({changeYear:true,showOtherMonths:true,selectOtherMonths:true,dateFormat:"yy-mm-dd",beforeShow: function () {setTimeout(function () {$('#ui-datepicker-div').css("z-index", 115);}, 100);}});
$("[datetime],[timepicker]").datetimepicker({changeYear:true,showOtherMonths:true,selectOtherMonths:true,dateFormat:"yy-mm-dd",timeFormat: "HH:mm:ss",beforeShow: function () {setTimeout(function () {$('#ui-datepicker-div').css("z-index", 115);}, 100);}});
*/
$("[date],[datepicker]").die("click").live("click", function(){$(this).addClass("Wdate ");WdatePicker({el:this,dateFmt:'yyyy-MM-dd'});});
$("[datetime],[timepicker]").die("click").live("click", function(){$(this).addClass("Wdate ");WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'});});
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
</body>
</html>
<?php }?><?php }} ?>