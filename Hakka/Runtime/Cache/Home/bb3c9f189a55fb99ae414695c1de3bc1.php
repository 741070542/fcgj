<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">

    <meta charset="utf-8">
    <title>复城国际T1楼书主页</title>
    <link rel="stylesheet" href="/Public/home/swiper.min.css">
    <script src="/Public/home/jquery-1.10.2.min.js"></script>
    <script src="/Public/home/all.js"></script>

    <!-- Demo styles -->
    <style>
        body,html{position:relative;height:100%}.div1 img,.div2 img{width:95%}.div3 img{width:100%}.div1{position:absolute;left:0;top:0;z-index:999}.div2{position:absolute;bottom:0;left:0;overflow:hidden;z-index:999}.div3{position:absolute;bottom:0;right:0;width:38%;z-index:998}@media (min-width:325px) and (max-width:414px){.div-main a{width:75px!important;height:75px!important}.div-main a:nth-child(5){top:80px!important;left:42px!important}.div2 .div-main{left:8%!important;width:240px!important}.div-main a:nth-child(4){position:absolute!important;left:118px!important;top:78px!important}}.div2 .div-main{width:210px;position:absolute;top:45%;left:7%;transform:rotate(45deg);z-index:999;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg)}.div-main a{width:65px;height:65px;display:block;float:left;margin-bottom:2px;border-radius:4px;position:relative;margin-right:2px;color:#fff;font-weight:700}.div-main a:nth-child(5){color:#505050;position:absolute;top:67px;left:40px}.div-main a:nth-child(4){position:absolute;left:106px;top:67px}.div-main a em{font-style:normal;position:absolute;top:20%;left:5%;text-align:center;font-size:12px;margin-right:-50%;transform:translate(-15%,-30%);transform:rotate(-45deg)}.swiper-container{width:100%;height:100%}.swiper-slide{background-position:center;background-size:cover}.menu_bg1{background:url(/Public/home/upload/index01.png) no-repeat center;background-size:100px}.menu_bg2{background:url(/Public/home/upload/index02.png) no-repeat center;background-size:100px}.menu_bg3{background:url(/Public/home/upload/index03.png) no-repeat center;background-size:100px}.menu_bg4{background:url(/Public/home/upload/index04.png) no-repeat center;background-size:100px}.menu_bg5{background:url(/Public/home/upload/index05.png) no-repeat center;background-size:100px}.menu_bg6{background:url(/Public/home/upload/index06.png) no-repeat center;background-size:100px}body{background:url(/Public/home/upload/index_bg.jpg);background-size:cover;animation:slidebg 25s infinite linear backwards}@-webkit-keyframes slidebg{0%{background-position:0 0}50%{background-position:99% 0}100%{background-position:0 0}}@keyframes slidebg{0%{background-position:0 0}50%{background-position:99% 0}100%{background-position:0 0}}.loader-inner2{position:absolute;top:50%;left:50%;z-index:999;display:block;transform:translate(-50%,-100%);width:30%;height:20px}.loader-show{position:fixed;width:100%;height:100%;background:rgba(255,255,255,1);top:0;left:0;z-index:9999}.loader-inner2 img{width:100%}.number-pb{height:3px;background-color:#ddd;margin:15px 0}.number-pb-shown.sun{width:99%;background-image:linear-gradient(to right,#0f1b58,#e0a681,#e5e9bf);-moz-box-shadow:0 0 3px 0 #e5e9bf;-webkit-box-shadow:0 0 3px 0 #e5e9bf;box-shadow:0 0 3px 0 #e5e9bf;height:3px;animation:number-show 3s linear backwards}@keyframes number-show{from{width:1%}to{width:99%}}@-webkit-keyframes number-show{from{width:1%}to{width:99%}}.tel_phone{display:block;width:100px;height:170px;position:absolute;right:0;z-index:9999;bottom:105px}
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta content="email=no" name="format-detection" />
    <meta content="telephone=no" name="format-detection" />
    <link rel="stylesheet" href="/Public/home/all.css" />
</head>
<body>




<div class="loader-show">
    <div class="loader-inner2 line-scale">
        <img src="/Public/home/logo.png" alt="" />
        <div class="number-pb">
            <div class="number-pb-shown sun"></div>

        </div>
    </div>
</div>
<div class="div1">
    <img src="/Public/home/1.png" alt="">
</div>
<div class="div2">
    <img src="/Public/home/2.png" alt="">
    <div class="div-main">
        <a href="/Home/Fct/map" class="menu_bg1 load"></a>
        <a href="/Home/Fct/album" class="menu_bg2 load"></a>
        <a href="/Home/Fct/floo" class="menu_bg3 load"></a>
        <a href="/Home/Fct/message" class="menu_bg4 load"></a>

        <a href="http://720yun.com/t/a2325jf8uni" class="menu_bg6 load"></a>
    </div>
</div>
<div class="div3">
    <img src="/Public/home/right.png" alt="">

</div>
<a class="tel_phone" href="tel:028-85330533"></a>
<script>
    window.onload = function () {
        //全部加载完成！！
        // $(".loader-show").css({ "display": "none" });
        $('.number-pb-shown').css({
            "width": "100%",
            "display":"none"
        })
        $(".loader-show").css({ "display": "none" });
    }
</script>


<script src="/Public/home/jweixin-1.0.0.js"></script>

<script>
    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: 'wxff4c23cee37378e1', // 必填，公众号的唯一标识
        timestamp: '1511922858', // 必填，生成签名的时间戳
        nonceStr: 'azfldgrmtxjjcln', // 必填，生成签名的随机串
        signature: '94bac71ce161c45c8685871c7bfa4eabd391badb',// 必填，签名，见附录1
        jsApiList: [
            'onMenuShareTimeline',
            'onMenuShareAppMessage'
        ]
    });
</script>
<script>
    //判断是否微信客户端
    var ua = navigator.userAgent.toLowerCase();//获取判断用的对象
    if (ua.match(/MicroMessenger/i) == "micromessenger") {
        //监听"分享给朋友",按钮点击，自定义分享内容及分享结果接口
        var p = window.location.port == "" ? "" : ":" + window.location.port
        var url = window.location.protocol + '//' + window.location.host + p;
        wx.ready(function () {
            wx.onMenuShareAppMessage({
                title: '复城国际T楼书主页',
                desc: '复城国际T楼书主页',
                link: 'http://fcgj.pthola.cn/',
                imgUrl: url + '/App_Themes/Public/image/fcgj_share.jpg',
                trigger: function (res) {
                    //不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
                    //alert('用户点击发送给朋友');
                },
                success: function (res) {
                    //alert('已分享');
                },
                cancel: function (res) {
                    //alert('已取消');
                },
                fail: function (res) {
                    //alert(JSON.stringify(res));
                }
            });
            wx.onMenuShareTimeline({
                title: '复城国际T楼书主页',
                desc: '复城国际T楼书主页',
                link: 'http://fcgj.pthola.cn/',
                imgUrl: url + '/App_Themes/Public/image/fcgj_share.jpg',
                trigger: function (res) {
                    // 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
                    //alert('用户点击分享到朋友圈');
                },
                success: function (res) {
                    //alert('已分享');
                },
                cancel: function (res) {
                    //alert('已取消');
                },
                fail: function (res) {
                    //alert(JSON.stringify(res));
                }
            });
            // config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready函数中。
        });
    }
    else {

    }

</script>

<div class="card-loading loader">
    加载中
    <div class="loader-inner ball-beat">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
</body>
</html>