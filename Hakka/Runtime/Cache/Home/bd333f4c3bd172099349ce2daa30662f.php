<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">

    <title>复城国际T1推荐房源</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/Public/home/font-awesome.min.css"/>
    <script src="/Public/home/jquery-1.10.2.min.js"></script>
    <script src="/Public/home/all.js"></script>
    <style>
        .house-list{
            margin-bottom: 5px;
            background-color: #fff;
        }
        .house-list img{
            max-width: 100%;
            height: auto;
        }
        .house-list strong,.house-txt strong{
            display: block;
            font-weight: normal;
            font-size: 1.5rem;
            color: #505050;
        }
        .house-list p,.house-txt p{
            font-size: 1.4rem;
            color: #afafaf;
            line-height: 22px;
        }
        .house-info{
            padding:8px;
        }
        .house-txt{
            background: url("/Public/home/h_txtbg.png") no-repeat 5px center;
            background-size: 20px;
            padding:5px 0 5px 30px;
        }
        .fx-menu{
            position: fixed;
            bottom: 0;
            right: 0;
            width: 60px;
            text-align: center;
            z-index: 999;
            height: 45px;
        }
        .fx-menu .icon-align-left{
            font-size: 2.4rem;
            position: absolute;
            right: 15px;
            top: 10px;
        }
        .fx-menu ul{
            position: absolute;
            bottom: 50px;
            right: 2px;
            background-color: #fff;
            box-shadow: 0 0 3px #ccc;
            opacity: 0;
            /*display: none;*/
        }
        .fx-menu ul li{
            width: 100px;
            height: 40px;
            line-height: 40px;
            text-align: center;
        }
        .fx-menu ul li a{
            display: block;
            font-size:1.2rem;
        }
        /*选中样式*/
        .active-link{
            background: #A97A45;
            color: #fff;
        }
        .fx-menu ul:after{
            content: '';
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 7px solid #fff;
            position: absolute;
            right: 10px;
        }

        body {
            background-color:#EEEEEE;
        }
    </style>
    <script>
        $(document).ready(function () {
            // console.log($(".house-list").length);
            $(".fx-menu").on('touchstart', function (ev) {
                var state = $(".menu-ul").attr("data-style");
                if (state === "show") {
                    $(".menu-ul").attr({ "data-style": "" });
                    $(this).find(".menu-ul").animate({ "opacity": "1" }, "slow");
                }
                else {
                    $(".menu-ul").attr({ "data-style": "show" });
                    $(this).find(".menu-ul").animate({ "opacity": "0" }, "slow");
                }
                ev.stopPropagation();
            });
        });
    </script>
    <script>
        function ajaxloadMore() {
            var data = { Page: page, s: "<?php echo ($sort); ?>" };
            $.ajax({
                type: 'POST',
                url: '/Home/Recom/lists',
                data: data,
                dataType: 'json',
                success: function (data) {
                    //  console.log(data);
                    scrollWaitHide();
                    if (page > data.PageCount) {

                        $(".nothing").css({ "display": "block" })
                        closeNothing();//3秒后关闭没有更多数据了
                    }
                    else {

                        $(".nothing").css({ "display": "none" })
                        $('.house-main').append(showData(data));
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
    <script src="/Public/home/mustache.min.js"></script>
    <script id="template" type="x-tmpl-mustache">
        {{#DataList}}
           <div class="house-list">
                <a href="/Home/Recom/ation/id/{{{id}}}">
                <img src="{{{img}}}" alt="">
                <div class="house-info">
                    <strong>{{{few}}}层{{{addresses}}}  建筑面积：{{{area}}}  净层高：{{{nettop}}}米</strong>
                    <p>{{{small_rent}}}～{{{large_rent}}}元/平米/天   物业费：{{{cost}}}/平米/月</p>
                </div>
                </a>
           </div>
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



<div class="bk1"></div>
<div class="container">
    <div class="house-main">
        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><div class="house-list">
            <a href="/Home/Recom/ation/id/<?php echo ($list["id"]); ?>" class="load">
                <img src="<?php echo ($list["img"]); ?>" alt=""/>
                <div class="house-info">
                    <strong><?php echo ($list["few"]); ?>层<?php echo ($list["addresses"]); ?>  建筑面积：<?php echo ($list["area"]); ?>  净层高：<?php echo ($list["nettop"]); ?>米</strong>
                    <p><?php echo ($list["small_rent"]); ?>～<?php echo ($list["large_rent"]); ?>/平米/天   物业费：<?php echo ($list["cost"]); ?>/平米/月</p>
                </div>
            </a>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>

    </div>
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
    <div class="nothing" style="display:none">没有数据可加载</div>
</div>
<div class="bk5"></div>
<!--公用底部-->
<a href="/Home/Fct/fct1" class="fx-logo ripplelink  load">
    <i class="icon-double-angle-left"></i>
    <img src="/Public/home/logo.png" alt="" />
</a>
<div class="fx-menu">
    <a href="javascript:;"><i class="icon-align-left"></i></a>
    <ul class="menu-ul" data-style="show">

        <li><a class="load active-link" href="/Home/Recom/index"  >最新推荐(默认)</a></li>
        <li><a class="load " href="/Home/Recom/index/sort/1" >按面积从小到大</a></li>
        <li><a class="load " href="/Home/Recom/index/sort/2"  >按楼层从低到高</a></li>
    </ul>
</div>

<script src="/Public/home/jweixin-1.0.0.js"></script>

<script>
    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: 'wxff4c23cee37378e1', // 必填，公众号的唯一标识
        timestamp: '1512006160', // 必填，生成签名的时间戳
        nonceStr: 'ncxdpyttfzgpqhu', // 必填，生成签名的随机串
        signature: 'a27efa0775a63adb3c8256ed9974cdcc0bac2b7c',// 必填，签名，见附录1
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
                title: '复城国际T1推荐房源',
                desc: '复城国际T1推荐房源',
                link: 'http://fcgj.pthola.cn/house',
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
                title: '复城国际T1推荐房源',
                desc: '复城国际T1推荐房源',
                link: 'http://fcgj.pthola.cn/house',
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