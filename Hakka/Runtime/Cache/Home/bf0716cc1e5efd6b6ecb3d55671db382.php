<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">


    <title>关于复星-复城国际T1咨询</title>
    <link rel="stylesheet" href="/Public/home/font-awesome.min.css" />
    <script src="/Public/home/jquery-1.10.2.min.js"></script>
    <script src="/Public/home/all.js"></script>
    <style>
        .ins-main h1 {
            font-size: 2.4rem;
        }

        .p-list {
            font-size: 1.4rem;
            color: #bdbdbd;
        }

        .p-list span {
            padding-right: 10px;
        }

        .new-p p {
            font-size: 1.6rem;
            color: #505050;
            line-height: 25px;
            margin: 5px 0;
        }

        .share-main {
            text-align: center;
            margin: 20px 0 10px;
        }
        .a-share a {
            width: 50%;
            float: left;
            text-align: center;
            display: block;
            padding: 10% 0;
        }
        .share{
            background:url("/Public/home/share.png") no-repeat center;
            background-size: 30%;
            color: #526d7a;
        }
        .a-s-zan {
            background: url("/Public/home/heart.png") no-repeat center;
            background-size: 30%;
            color: #f6412c;
        }

        .share img, .zan img {
            width: 40%;
            height: auto;
            vertical-align: middle;
        }

        .re-title {
            position: relative;
            height: 40px;
            line-height: 40px;
            font-size: 1.5rem;
            color: #505050;
        }

        .re-title:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 1px;
            background-color: #505050;
            top: 20px;
            left: 4.5em;
        }

        .new-recom ul li {
            height: 40px;
            margin: 20px 0;
        }

        .new-recom ul li p {
            font-size: 1.4rem;
            color: #505050;
            margin-bottom: 5px;
        }
        .new-recom ul li p a {text-overflow:ellipsis;white-space:nowrap;overflow:hidden;display:block;}
        .new-recom ul li span {
            font-size: 1.3rem;
            color: #bdbdbd;
        }
        .share-show {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            display: none;
            padding-top: 10px;
            padding-right: 10px;
            width: 100%;
            height: 100%;
            color: #fff;
            text-align: right;
        }
        .share-show img {
            margin-right: 30px;
            margin-bottom: 10px;
            width: 220px;
        }
        .share-show p {
            text-align: center;
        }
        #close-share {
            position: absolute;
            bottom: 30px;
            left: 50%;
            margin-left: -17px;
            width: 35px;
            height: 35px;
            background: url("/Public/home/closemask.png") no-repeat;
            background-size: 35px;
            color: #fff;
            text-decoration: none;
        }
        .new-p img{
            max-width:100%;
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





<script>
    function great(id) {
        $.ajax({
            type: 'POST',
            url: '/Home/Corr/dz',
            data: { id: id },
            dataType: 'json',
            success: function (data) {
                if (data == "0") {

                } else {

                }
            }
        });
    }
</script>
<script>
    $(document).ready(function () {
        $("#more-share-img").click(function () {
            $(".share-show").fadeIn(300);
            $(".bill-mask").fadeIn(300);
        });
        $("#close-share").click(function () {
            $(".share-show").fadeOut(300);
            $(".bill-mask").fadeOut(300);
        });
        $('.bill-mask').click(function () {
            $('.bill-mask').fadeOut(500, function () {
                $('.bill-show').addClass('bounceOutUp').fadeOut();
            });
        });
        $('.index-erwei').click(function () {
            //className = $(this).attr('class');
            $('.bill-mask').fadeIn(300);
            $('.bill-show').removeAttr("class").addClass('animated bill-show bounceInDown').fadeIn();
        });

        //冒泡
        //$(".a-s-zan").on("touchstart,click", function () {
        //    alert(1);
        //    addMove();
        //});
        $(".a-s-zan").click(function () {
            addMove();
        })
    })
</script>
<!--新闻详情-->

<div class="container" style="overflow:hidden;">
    <div class="ins-main">
        <h1><?php echo ($data["title"]); ?></h1>
        <div class="p-list">
            <span><?php echo ($data["title"]); ?> <i><?php echo date("Y-m-d H:i",$data['addtime']);?></i></span>
            <span>观看量 <i><?php echo ($data["click"]); ?></i></span>
            <span>赞 <i id="dz"><?php echo ($data["zan"]); ?></i></span>
        </div>
    </div>
    <div class="bk1"></div>

    <div class="new-p">
        <?php echo ($data["content"]); ?>
    </div>
    <div class="a-share clearfix">
        <a class="share" id="more-share-img">
        </a>
        <a class="a-s-zan" style="position:relative"  href="javascript:great(<?php echo ($data["id"]); ?>);">
            <span class="tips"></span>
        </a>
    </div>

    <!-- 精彩推荐-->
    <div class="new-recom">
        <p class="re-title">精彩推荐</p>
        <ul>

        </ul>
    </div>
</div>
<!--公用底部-->
<div class="bk5"></div>
<a href="/Home/corr/gywm/id/<?php echo ($data["id"]); ?>" class="fx-logo ripplelink  load">
    <i class="icon-double-angle-left"></i>
    <img src="/Public/home/logo.png" alt="" />
</a>
<!--弹出层-->
<div class="share-show">
    <img src="/Public/home/ArrowWhite.png" alt="Alternate Text">
    <p style="font-size: 1.6rem">分享朋友圈&amp;微信好友</p>
    <a href="javascript:;" id="close-share"></a>
</div>
<div class="bill-mask"></div>



<script src="/Public/home/jweixin-1.0.0.js"></script>
<script>
    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: '<?php echo ($signPackage["appId"]); ?>', // 必填，公众号的唯一标识
        timestamp: '<?php echo ($signPackage["timestamp"]); ?>', // 必填，生成签名的时间戳
        nonceStr: '<?php echo ($signPackage["nonceStr"]); ?>', // 必填，生成签名的随机串
        signature: '<?php echo ($signPackage["signature"]); ?>',// 必填，签名，见附录1
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
                title: '关于复星-复城国际T1咨询',
                desc: '关于复星-复城国际T1咨询',
                link: window.location.href,
                imgUrl: '<?php echo ($data["img"]); ?>',
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
                title: '关于复星-复城国际T1咨询',
                desc: '关于复星-复城国际T1咨询',
                link: window.location.href,
                imgUrl: '<?php echo ($data["img"]); ?>',
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