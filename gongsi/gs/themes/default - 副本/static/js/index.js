$(document).ready(function(){
//首页banner左边切换
$(".index_banner_lt p.index_banner_tit a").mouseover(function(){
    var index=$(this).index();
         $(".index_banner_lt p.index_banner_tit a").each(function(a){   
            if(a == index){
                $(this).addClass('current');
                $('.index_banner_lt').find('.index_menu_list').eq(a).show();
            }
            else{
                 $(this).removeClass('current');
                 $('.index_banner_lt').find('.index_menu_list').eq(a).hide();
             }
        })                 
   });                 
$(".index_banner_lt p.index_banner_tit a").eq(0).mouseover();
 
 
 
//首页热门案例切换
$('ul.index_case_list li').mouseover(function(){
    $('ul.index_case_list li').siblings().find('p').hide();
    $(this).find('p').show();            
});
 $(".index_case h2.index_tit span.tit_list a").mouseover(function(){
    var index=$(this).index();
         $(".index_case h2.index_tit span.tit_list a").each(function(a){    
            if(a == index){
                $(this).addClass('current');
                $('.index_case').find('ul.index_case_list').eq(a).show();
            }
            else{
                 $(this).removeClass('current');
                 $('.index_case').find('.index_case_list').eq(a).hide();
             }
         })                
     });                   
$(".index_case h2.index_tit span.tit_list a").eq(0).mouseover();

//首页最新订单文字无缝滚动效果
$(function(){
    $("div.index_nwod_box").myScroll({
        speed:40, //数值越大，速度越慢
        rowHeight:40 //li的高度
    });
});

//首页在建工地切换
$(".index_site li").mouseover(function(){
    $('.index_site li').find('.index_site_hover').hide();
    $(this).find('.index_site_hover').show();
    $(".index_site li").css('background','#f8f8f8');
    $(this).css('background','#fff');
    $('.index_site li').find('.index_site_list').show();
    $(this).find('.index_site_list').hide();
});
$(".index_site li").eq(0).mouseover();

//首页装修公司排行
$(".index_paih p.tit a").mouseover(function(){
    var index=$(this).index();
         $(".index_paih p.tit a").each(function(a){ 
            if(a == index){
                $(this).addClass('current');
                $('.index_paih .index_paihang').find('ul').eq(a).show();
            }
            else{
                 $(this).removeClass('current');
                 $('.index_paih .index_paihang').find('ul').eq(a).hide();
             }
         })                
     });                   
$(".index_paih p.tit a").eq(0).mouseover(); 



});

function setTab(name,cursel){
	cursel_0=cursel;
	for(var i=1; i<=links_len; i++){
		var menu = document.getElementById(name+i);
		var menudiv = document.getElementById("con_"+name+"_"+i);
		if(i==cursel){
			menu.className="on";
			menudiv.style.display="block";
		}
		else{
			menu.className="";
			menudiv.style.display="none";
		}
	}
}
function Next(){                                                        
	cursel_0++;
	if (cursel_0>links_len)cursel_0=1
	setTab(name_0,cursel_0);
} 
var name_0='one';
var cursel_0=1;
var links_len,iIntervalId;
onload=function(){
	var links = document.getElementById("index_gs").getElementsByTagName('li')
	links_len=links.length;
	for(var i=0; i<links_len; i++){
		links[i].onmouseover=function(){
			clearInterval(iIntervalId);
		}
	}
	document.getElementById("con_"+name_0+"_"+links_len).parentNode.onmouseover=function(){
		clearInterval(iIntervalId);
	}
}