// 在线客服
$(function ()
{

    var name = window.location.host;
    //默认搜狗
    var tel = "400-8957-626"; //400-1199-301
    var qq = "97028868";
    var site = "www.400301.com";
    var sqId = "7568590";
    if (name.indexOf("4000308") > -1)//好搜
    {
        tel = "400-8868-220";
        qq = "1515636868";
        site = "www.4000308.com";
        sqId = "9775703";
    }
    if (name.indexOf("400309") > -1)//搜狗
    {
        tel = "400-8767-268";
        qq = "915900649";
        site = "www.400309.com";
        sqId = "8182592";
    }
    var lefft = ($(window).width() - 800) / 2;
    var ttop = ($(window).height() - 600) / 2;
    var tophtml = "<div id=\"izl_rmenu\" class=\"izl-rmenu\"><a href=\"http://" + site + "/OnlinePay.htm\" class=\"btn btn-jzjg\"></a><a href=\"http://" + site + "/News/detail/164.htm\" class=\"btn btn-jzlc\"></a><a class=\"btn btn-qq\" href=\"tencent://message/?uin=" + qq + "&Site=" + site + "&Menu=yes\"></a><a href=\"javascript:void(0);\" onclick=\"javascript:window.open('http://p.qiao.baidu.com//im/index?siteid=" + sqId + "&ucid=11028115', 'newwindow','toolbar=no,scrollbars=yes,resizable=no,top=" + ttop + ",left=" + lefft + ",width=800,height=600');\" class=\"btn btn-wx\"></a><div class=\"btn btn-phone\"><div class=\"phone\">" + tel + "</div></div><div class=\"btn btn-top\"></div></div>";
    //var tophtml = "";
    $("#top").html(tophtml);
    $("#izl_rmenu").each(function ()
    {
        $(this).find(".btn-wx").mouseenter(function ()
        {
            $(this).find(".pic").fadeIn("fast");
        });
        $(this).find(".btn-wx").mouseleave(function ()
        {
            $(this).find(".pic").fadeOut("fast");
        });
        $(this).find(".btn-phone").mouseenter(function ()
        {
            $(this).find(".phone").fadeIn("fast");
        });
        $(this).find(".btn-phone").mouseleave(function ()
        {
            $(this).find(".phone").fadeOut("fast");
        });
        $(this).find(".btn-qq").mouseenter(function ()
        {
            $(this).find(".qq").fadeIn("fast");
        });
        $(this).find(".btn-qq").mouseleave(function ()
        {
            $(this).find(".qq").fadeOut("fast");
        });
        $(this).find(".btn-top").click(function ()
        {
            $("html, body").animate({
                "scroll-top": 0
            }, "fast");
        });
    });
    var lastRmenuStatus = false;
    $(window).scroll(function ()
    {//bug
        var _top = $(window).scrollTop();
        if (_top > 200)
        {
            $("#izl_rmenu").data("expanded", true);
        } else
        {
            $("#izl_rmenu").data("expanded", false);
        }
        if ($("#izl_rmenu").data("expanded") != lastRmenuStatus)
        {
            lastRmenuStatus = $("#izl_rmenu").data("expanded");
            if (lastRmenuStatus)
            {
                $("#izl_rmenu .btn-top").slideDown();
            } else
            {
                $("#izl_rmenu .btn-top").slideUp();
            }
        }
    });
});
//百度商桥

var Iurl = window.location.host;
//var Nurlurl = window.location.href.toLocaleLowerCase();
//if (Nurlurl.indexOf("/onlinepay.htm") == -1)
//{
if (Iurl.indexOf("400301") > -1)//搜狗
{
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://"); document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F0910897d1ab8d5ae4bb9d27a64b2a340' type='text/javascript'%3E%3C/script%3E"))
}
if (Iurl.indexOf("4000308") > -1)//好搜
{
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F49a73ccbf2ca27fa6e3c9db0d838419f' type='text/javascript'%3E%3C/script%3E"))
}
if (Iurl.indexOf("400309") > -1)//百度
{
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://"); document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F87ad809cd09b67c863b7557803effd61' type='text/javascript'%3E%3C/script%3E"))
}
//}
//百度统计

