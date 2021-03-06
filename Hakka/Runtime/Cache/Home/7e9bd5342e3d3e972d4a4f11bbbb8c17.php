<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">


    <title>丘昊-复城国际T1租赁顾问</title>
    <link rel="stylesheet" href="/Public/home/font-awesome.min.css"/>
    <script src="/Public/home/jquery-1.10.2.min.js"></script>
    <script src="/Public/home/all.js"></script>
    <style>
        .le-detail-main {
            text-align: center;
            padding: 5% 0;
            background-color: #eee;
        }

        .le-img {
            display: inline-block;
            width: 100px;
            height: 100px;
            border: 1px solid #fff;
            border-radius: 50%;
            vertical-align: bottom;
            overflow:hidden;
        }

        .le-img img {
            width: 100%;
        }

        .le-name p {
            font-weight: bold;
            font-size: 1.6rem;
            line-height: 25px;
            padding-top: 10px;
        }

        .le-year-title {
            height: 55px;
            line-height: 55px;
            color: #505050;
            font-size: 1.5rem;
            text-indent: 1em;
            background: #fff url("/Public/home/yearicon.png") no-repeat 10px center;
            background-size: 30px;
            font-weight: bold;
            padding-left: 32px;
            margin-bottom: 10px;
        }

        .le-year-title em, .le-txt em {
            color: #afafaf;
        }

        .le-person {
            background-color: #fff;
            padding: 10px 10px 15px 10px;
            margin-bottom: 10px;
        }

        .le-person h3 {
            line-height: 30px;
            font-size:1.3rem;
        }

        .le-person p {
            color: #afafaf;
            font-size:1.3rem;
        }

        .le-txt {
            height: 55px;
            line-height: 55px;
            color: #505050;
            font-size: 1.5rem;
            background-color: #fff;
            padding: 0 10px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .le-phone {
            display: block;
            text-align: center;
            color: #fff;
            background-color: #E56464;
            font-size: 1.6rem;
            height: 60px;
            line-height: 60px;
        }
        body{
            background:#eee;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta content="email=no" name="format-detection" />
    <meta content="telephone=no" name="format-detection" />
    <link rel="stylesheet" href="/Public/home/all.css" />
</head>
<body>




<div class="le-detail-main">
    <div class="le-img">
        <img src="<?php echo ($info["img"]); ?>" alt="" />
    </div>
    <div class="le-name">
        <p><?php echo ($info["name"]); ?></p>
    </div>
</div>
<div class="le-year-title">
    <?php echo ($info["age"]); ?>
</div>
<!--个人简介-->
<div class="le-person">
    <h3><?php echo ($info["content"]); ?></h3>

</div>
<div class="le-txt">
    个人成绩 <em><?php echo ($info["grade"]); ?></em>
</div>
<a href="tel:<?php echo ($info["phone"]); ?>" class="le-phone">联系电话:<?php echo ($info["phone"]); ?></a>
<div class="bk5"></div>
<!--公用底部-->
<a href="/Home/Lease/lease" class="fx-logo ripplelink  load">
    <i class="icon-double-angle-left"></i>
    <img src="/Public/home/logo.png" alt="" />
</a>


<script src="/Public/home/jweixin-1.0.0.js"></script>

<script>
    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: 'wxff4c23cee37378e1', // 必填，公众号的唯一标识
        timestamp: '1511950529', // 必填，生成签名的时间戳
        nonceStr: 'zyrdwcsyperlbpd', // 必填，生成签名的随机串
        signature: 'f8bcc1cae09279d1dbbd1d108bd6f7178da446a5',// 必填，签名，见附录1
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
                title: '丘昊-复城国际T1租赁顾问',
                desc: '丘昊-复城国际T1租赁顾问',
                link: 'http://fcgj.pthola.cn/ldetail?id=4',
                imgUrl: url + '/UploadFolder/2016-03-22/2016032217493671609742.JPG',
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
                title: '丘昊-复城国际T1租赁顾问',
                desc: '丘昊-复城国际T1租赁顾问',
                link: 'http://fcgj.pthola.cn/ldetail?id=4',
                imgUrl: url + '/UploadFolder/2016-03-22/2016032217493671609742.JPG',
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