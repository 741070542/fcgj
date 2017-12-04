<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">

    <title>复城国际T1租赁顾问</title>
    <link rel="stylesheet" href="/Public/home/font-awesome.min.css"/>
    <script src="/Public/home/jquery-1.10.2.min.js"></script>
    <script src="/Public/home/all.js"></script>
    <style>
        .lease-ul li:after{
            content: '';
            display: block;
            clear: both;
        }
        .lease-ul li{
            background-color: #fff;
            margin-bottom: 10px;
            position: relative;
            padding: 5px;
        }
        .lease-ul li img{
            float: left;
            width: 80px;
            height: 80px;
            border-radius: 100%;
            margin-right: 10px;
        }
        .lease-ul li .lease-txt{
            overflow: hidden;
            vertical-align: middle;
            line-height: 25px;
            /*padding: 10px 20px 0 0;*/
        }
        .link-phone{
            position: absolute;
            right: 0;
            top:35px;
            font-size: 2.8rem;
            color: #987C50;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            z-index: 99;
        }
        .lease-txt h3{
            color: #505050;
            font-size: 1.6rem;
        }
        .lease-txt p{
            color: #afafaf;
            font-size: 1.4rem;
            overflow : hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        body {
            background: #EEEEEE;
        }
    </style>
    <script src="/Public/home/mustache.min.js"></script>
    <script>
        function ajaxloadMore() {
            var data = { Page: page, s: "" };
            $.ajax({
                type: 'POST',
                url: '/Home/Lease/lists',
                data: data,
                dataType: 'json',
                success: function (data) {
                    // console.log(data);
                    scrollWaitHide();
                    if (page > data.PageCount) {
                        $(".nothing").css({ "display": "block" })
                        closeNothing();//3秒后关闭没有更多数据了
                    }
                    else {
                        $(".nothing").css({ "display": "none" })
                        $('.lease-ul').append(showData(data));
                        page++;
                        on = true;
                    }
                },
                error: function (data) {

                }
            })

        }
        //data
        function showData(data) {
            var template = $('#template').html();
            var renderhtml = Mustache.render(template, data);
            return renderhtml;
        }
        $(function () {
            $(window).bind("scroll", function () {
                var self = $(this);
                var scrollTop = $(this).scrollTop();
                var scrollHeight = $(document).height();
                var winHeight = $(this).height();
                if (scrollTop + winHeight >= scrollHeight) {
                    var h = scrollTop + $(".spinner").height() + 20;
                    if (on) {
                        scrollWaitShow();
                        self.scrollTop(h);
                        on = false;
                        ajaxloadMore();
                    }
                }
            })

        });
    </script>
    <script id="template" type="x-tmpl-mustache">
        {{#DataList}}
            <li>
                <a href="/Home/Lease/lists/id/{{{id}}}">
                    <img src="{{{img}}}" alt="">
                    <div class="lease-txt">
                        <h3>{{{name}}}</h3>
                        <p>{{{content}}}</p>
                        <p>{{{age}}}</p>
                    </div>
                </a>
                <a href="tel:{{{phone}}}" class="link-phone"><i class="icon-phone"></i></a>
            </li>
        {{/DataList}}
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta content="email=no" name="format-detection" />
    <meta content="telephone=no" name="format-detection" />
    <link rel="stylesheet" href="/Public/home/all.css" />
</head>
<body>



<!--租赁顾问-->
<div class="bk1"></div>
<div class="container">
    <div class="lease-main">
        <ul class="lease-ul">
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li>
                <a class="load" href="/Home/Lease/ation/id/<?php echo ($list["id"]); ?>">
                    <img src="<?php echo ($list["img"]); ?>" alt=""/>
                    <div class="lease-txt">
                        <h3><?php echo ($list["name"]); ?></h3>
                        <p><?php echo ($list["content"]); ?></p>
                        <p><?php echo ($list["age"]); ?></p>
                    </div>
                </a>
                <a href="tel:<?php echo ($list["phone"]); ?>" class="link-phone"><i class="icon-phone"></i></a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
        <div class="nothing" style="display:none">没有数据可加载</div>
    </div>

</div>
<div class="bk5"></div>
<!--公用底部-->
<a href="/Home/Fct/fct1" class="fx-logo ripplelink  load">
    <i class="icon-double-angle-left"></i>
    <img src="/Public/home/logo.png" alt="" />
</a>


<script src="/Public/home/jweixin-1.0.0.js"></script>

<script>
    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: 'wxff4c23cee37378e1', // 必填，公众号的唯一标识
        timestamp: '1511948621', // 必填，生成签名的时间戳
        nonceStr: 'bcpgbmfsdnedsqn', // 必填，生成签名的随机串
        signature: '349523bd53db7cf6c666e8dd2e10fb1cf4d0b641',// 必填，签名，见附录1
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
                title: '复城国际T1租赁顾问',
                desc: '复城国际T1租赁顾问',
                link: 'http://fcgj.pthola.cn/lease',
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
                title: '复城国际T1租赁顾问',
                desc: '复城国际T1租赁顾问',
                link: 'http://fcgj.pthola.cn/lease',
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