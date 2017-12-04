<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">

    <title>复城国际T1生活配套</title>
    <link rel="stylesheet" href="/Public/home/font-awesome.min.css"/>
    <script src="/Public/home/jquery-1.10.2.min.js"></script>
    <script src="/Public/home/all.js"></script>

    <style>
        body{
            background:#eee;
        }
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
        .title-active{
            background:#A97A45;
            color:#fff;
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
        .company-list ul li img{
            float:left;
            width: 45%;
            margin-right: 10px;
        }
        .company-list ul li:after{
            content: '';
            clear: both;
            display: block;
        }
        .company-list ul li{
            margin-bottom: 10px;
            padding: 10px;
            background-color: #fff;
        }
        .company-list ul li .c-list-info{
            overflow: hidden;
            /*float: left;*/
        }
        .company-list ul li h3{
            font-size: 1.4rem;
            color: #505050;
            margin-bottom: 5px;
        }
        .company-list ul li p{
            font-size: 1.2rem;
            line-height: 15px;
            color: #afafaf;
        }
        .fx-logo-new {
            position: fixed;
            height: 50px;
            width: 100%;
            left: 0;
            top: 0;
            line-height: 50px;
            text-align: center;
            background: #fff;
            z-index: 99;
        }
        .fx-logo-new img {
            width: 115px;
            padding-top: 5px;
        }
        .title {
            height: 50px;
            line-height: 50px;
            background-color: #EFEFEF;
            position: fixed;
            top: 50px;
            left: 0;
            width: 100%;
            z-index: 99;
        }
        .title ol {
            text-align: center;
            width: 100%;
        }
        .title ol:after{
            content:"";
            display:block;
            clear:both;
        }
        .title ol li {
            font-size: 12px;
            width: 16.666666666666668%;
            /*float: left;*/
            display: inline-block;
        }
        .title ol li a {
            color: #555;
            border-radius: 4px;
            border: 1px solid #555555;
            padding: 5px 10px;
            text-decoration: none;
        }
        .title ol li a.title-active {
            background-color: #E7284E;
            color: #fff;
            border: 1px solid transparent;
        }
        .company-list{
            margin-top:100px;
        }
    </style>

    <script>
        $(document).ready(function(){
            $(".fx-menu").on('click', function (ev) {
                var state=$(".menu-ul").attr("data-style");
                if(state==="show"){
                    $(".menu-ul").attr({"data-style":""});
                    $(this).find(".menu-ul").animate({"opacity":"1"},"slow");
                }
                else{
                    $(".menu-ul").attr({"data-style":"show"});
                    $(this).find(".menu-ul").animate({"opacity":"0"},"slow");
                }
                //ev.preventDefault();
                ev.stopPropagation();
            });
        });
    </script>
    <script src="/Public/home/mustache.min.js"></script>
    <script>
        function ajaxloadMore() {
            var data = { Page: page, s: "" };
            $.ajax({
                type: 'POST',
                url: '/Home/Life/lists/clid/<?php echo ($clid); ?>',
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
                        $('.company-list').find("ul").append(showData(data));
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
                <a href="/Home/Life/ation/id={{{id}}}">
                <img src="{{{img}}}" alt="">
                <div class="c-list-info">
                    <h3>{{{title}}}</h3>
                    <p>{{{address}}}</p>
                    <p>人均：{{{consumption}}}</p>
                    <p>电话：{{{phone}}}</p>
                </div>
                </a>
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



<div class="fx-logo-new">
    <img src="/Public/home/logo.png" alt="">
</div>
<div class="title">
    <ol>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li><a href="/Home/Life/index/clid/<?php echo ($list["id"]); ?>" <?php if(($clid) == $list['id']): ?>class="title-active load"<?php endif; ?>><?php echo ($list["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ol>
</div>
<div class="container">
    <div class="company-list">
        <ul>
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lists): $mod = ($i % 2 );++$i;?><li>
                <a class="load" href="/Home/Life/ation/id/<?php echo ($lists["id"]); ?>">
                    <img src="<?php echo ($lists["img"]); ?>" alt=""/>
                    <div class="c-list-info">
                        <h3 class="diandian"><?php echo ($lists["title"]); ?></h3>
                        <p><?php echo ($lists["address"]); ?></p>
                        <p>人均：<?php echo ($lists["consumption"]); ?></p>
                        <p>电话：<?php echo ($lists["phone"]); ?></p>
                    </div>
                </a>
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

<!--公用底部-->



<script src="/Public/home/jweixin-1.0.0.js"></script>

<script>
    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: 'wxff4c23cee37378e1', // 必填，公众号的唯一标识
        timestamp: '1512022010', // 必填，生成签名的时间戳
        nonceStr: 'ueihjyowlrvlzpo', // 必填，生成签名的随机串
        signature: '7170fa27363a30269fb6d85029f99c8f2aad99bd',// 必填，签名，见附录1
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
                title: '复城国际T1生活配套',
                desc: '复城国际T1生活配套',
                link: 'http://fcgj.pthola.cn/community',
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
                title: '复城国际T1生活配套',
                desc: '复城国际T1生活配套',
                link: 'http://fcgj.pthola.cn/community',
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