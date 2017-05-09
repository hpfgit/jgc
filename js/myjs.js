/**
 * Created by Administrator on 2017/3/16.
 */
//导航条悬停
$(function(){
	$('.nav-list').each(function (index,value) {
 $(value).hover(function () {
 $(this).css('background', '#000000')
 },function () {
 $(this).css('background', '#ca0b1d')
 });
 });
//下拉菜单
$('.li-bg').hover(function () {
    $('.other-page').show()
},function () {
    $('.other-page').hide()
})
$('.goods-item .goods-list').hover(function () {
    $(this).css({'background-color':'#ca0b1d'}).children('.side-list').show().end().find('.goods-name').css({'color':'#fff','border-width':'0'});
},function () {
    $(this).css({'background-color':'#fff'}).children('.side-list').hide().end().find('.goods-name').css({'color':'#000','border-bottom': '1px solid #eee'});
});

$('.side-list a').hover(function () {
    $(this).css({'font-weight':'bold'})
},function () {
    $(this).css({'font-weight':'normal'})
});

//底部轮播图
var ulLeft = $('.news-goods-item').position().left;
var interLeft,interRight;
function leftRun() {
    interLeft = setInterval(function (){
        $('.news-goods-item').animate({'left':'-=240'},function () {
            $('.news-goods-list').first().appendTo($('.news-goods-item'));
            $('.news-goods-item').css('left',ulLeft);
        });
    },1500);
}
function rightRun() {
    interRight = setInterval(function () {
        $('.news-goods-item').animate({'left':'+=240'},function () {
            $('.news-goods-list').last().prependTo($('.news-goods-item'));
            $('.news-goods-item').css('left',ulLeft);
        })
    },1500)
}
leftRun();
$('.news-goods-wrap').bind('mouseover',function () {
    clearInterval(interLeft);
    $('.left-btn').show();
    $('.right-btn').show();
});
$('.left-btn').click(function () {
    $('.news-goods-item').animate({'left':'-=240'},function () {
        $('.news-goods-list').first().appendTo($('.news-goods-item'));
        $('.news-goods-item').css('left',ulLeft);
    });
});
$('.right-btn').click(function () {
    $('.news-goods-item').animate({'left':'+=240'},function () {
        $('.news-goods-list').last().prependTo($('.news-goods-item'));
        $('.news-goods-item').css('left',ulLeft);
    })
});
$('.news-goods-wrap').bind('mouseout',function () {
    leftRun();
    $('.left-btn').hide();
    $('.right-btn').hide();
});
if(navigator.userAgent.indexOf('Trident')>-1){
    $('.panel .right .dlist a img').each(function (index,value) {
        $(value).hover(function () {
            $(this).animate({'width':$(this).width()*1.2,"height":$(this).height()*1.2},200,'swing');
            console.log(1)
        },function () {
            $(this).animate({'width':170,'height':130},200,'swing')
        })
    });
}

/*顶部轮播图*/
var num = 0,interval;
var time = function () {
    interval = setInterval(function () {
        if(num >$('.img-wrap img').length){
            num=0;
        }
        if(num<0){
            num = $('.img-wrap img').length;
        }
        $('.img-wrap img').eq(num).fadeIn().siblings().fadeOut();
        $('.index-wrap span').eq(num).css('background-color','red').siblings().css('background-color','rgb(0,0,0)');
        num++;
    },1500)
};
time();
$('.index-wrap span').each(function (index,value) {
    $(value).hover(function () {
        clearInterval(interval);
        $('.img-wrap img').eq(index).fadeIn().siblings().fadeOut();
        $('.index-wrap span').eq(index).css('background-color','red').siblings().css('background-color','rgb(0,0,0)');
        num = index;
    },function () {
        time();
    },1500)
})
$('.img-warp').hover(function () {
    clearInterval(interval)
},function () {
    time();
},1500);

$('.hot-item .hot-list').each(function (index,value) {
    $(value).hover(function () {
        $('.hot-item .hot-list').eq(index).height(100).children('p.title').hide().end().find('.hot-view').show();
        $('.hot-item .hot-list').eq(index).siblings().height(60).find('.hot-view').hide().end().find('p.title').show();
    })
});
	
	})
