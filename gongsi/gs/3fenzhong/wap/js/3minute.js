;$(function(){
    var mySwipe = new Swipe($('#slider').get(0), $(".swipe-wrap").get(0),{
        //startSlide:7,
        continuous: false,
        speed: 100,
        callback: function(index, elem) {
            pageControl(index, elem);
        }
    });
    var $slideNav = $('.slide-nav'),
        length = $slideNav.children().length,
        $pageNext = $('.i-page-next'),
        $currentPage = null,
        currentIndex = -1,
        $curNavLi = null;

    var pageControl = function(index, elem){
        var $el = $(elem);

        if(index == currentIndex){
            return false;
        }

        if($currentPage){
            $currentPage.find('h2').removeClass('fadeInLeft');
            $currentPage.find('h3').removeClass('fadeInRight');
            $currentPage.find('.app-btn').removeClass('fadeInBottom');
        }
        $currentPage = $el;
        if($curNavLi){
            $curNavLi.removeClass('active');
        }else{
            $slideNav.find('li').eq(0).removeClass('active');
        }
        $curNavLi = $slideNav.find('li').eq(index).addClass('active');
        currentIndex = index;

        $el.find('h2').addClass('fadeInLeft');
        $el.find('h3').addClass('fadeInRight');
        if(index == 0){
            $el.find('.app-btn').addClass('fadeInBottom');
        }
    };

    pageControl(0, $('.page').get(0));

    //百度分享
    $('img.lazy').each(function(index,el){
       var src = $(this).data('src');

        $(this).attr('src', src);
    });

    window._bd_share_config = {
        common : {
            bdText : '【三分钟学装修】土巴兔三分钟学装修，史上最快速的装修入门指南，告别小白变身达人，现在就开始您的装修之旅吧!',
			bdUrl :'http://m.to8to.com/yezhu/3minute.html'
        },
        share : [{
            "bdSize" : 16
        }]
    };
    with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];

    var _open = window.open;
    window.open = function(url){
        _open.apply(window,[url, '_self']);
    };

    $('.page-share').click(function(){
       var id = $(this).data('target'),
           $el = $('#' + id);

       $el.click();

    });
});

