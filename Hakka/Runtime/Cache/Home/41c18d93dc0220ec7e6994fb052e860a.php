<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">

    <meta charset="utf-8">
    <title>关于复星-复城国际T1咨询</title>
    <link rel="stylesheet" href="/Public/home/font-awesome.min.css" />
    <script src="/Public/home/jquery-1.10.2.min.js"></script>
    <script src="/Public/home/all.js"></script>
    <style>

        body{
            background:#eee;
        }
        ul {
            position: relative;
            width: 100%;
            margin-top:100px;
        }
        ul li {
            /*padding: 25px 20px;*/
            padding:5px;
            background:#fff;
            /*-webkit-transform: translate3d(0, 0, 1px);*/

        }
        .title {
            height: 50px;
            line-height: 50px;
            background-color: #EFEFEF;
            position:fixed;
            top:50px;
            left:0;
            width:100%;
            z-index:99;
        }

        .title ol {
            text-align: center;
            width: 100%;
        }

        .title ol:after {
            content: '';
            display: table;
            clear: both;
        }

        .title ol li {
            font-size: 12px;
            width: 33.33336%;
            float: left;
            display: block;
        }

        .title ol li a {
            color: #555;
            border-radius: 4px;
            border: 1px solid #555555;
            padding: 5px 10px;
            text-decoration: none;
        }

        .helix li img,.example-list li img {
            max-width: 100%;
            height: auto;
        }

        .helix li h3,.example-list li h3 {
            font-size: 14px;
            color: #585858;
            font-weight: bold;
            margin-top: 5px;
        }

        .helix li p,.example-list li p {
            font-size: 12px;
            color: #afafaf;
            line-height: 22px;
        }

        .title ol li a.title-active {
            background-color: #E7284E;
            color: #fff;
            border: 1px solid transparent;
        }
        .fx-logo-new{
            position:fixed;
            height:50px;
            width:100%;
            left:0;
            top:0;
            line-height:50px;
            text-align:center;
            background:#fff;
            z-index:99;
        }
        .fx-logo-new img{
            width: 115px;
            padding-top: 5px;
        }
        .fx-logo-new a{
            font-size: 1.6rem;
            position: absolute;
            left: 5px;
            top: 0;
            width: 45px;
            height: 50px;
            display: block;
            color: #505050;
            text-align: center;
            line-height: 50px;
        }
        .spinner2{
            margin: 10px auto;
            width: 150px;
            text-align: center;
            position: fixed;
            top: 50%;
            left: 50%;
            margin-left: -75px;
            background: rgba(0,0,0,0.8);
            padding: 10px;
            border-radius: 5px;
            margin-top: -40px;
        }
        .nothing2{
            color: #aaa;
            text-align: center;
            font-size: 1.3rem;
            line-height: 30px;
            position: fixed;
            top: 50%;
            background: #000;
            left: 50%;
            margin-left: -45px;
            padding: 5px;
            height:auto;
            border-radius: 5px;
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




<div class="fx-logo-new">

    <img src="/Public/home/logo.png" alt="" />
</div>
<div class="title">
    <ol>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li><a  href="<?php echo U('Home/Corr/tabu',array('id'=>$list['id']));?>" ><?php echo ($list["classname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ol>
</div>
<ul class="example-list curl new-list fly">

    <li>
        <a class="load" href="/Home/Corr/gyfx">
            <h3>关于复星</h3>
            <p>关于复星 2016-01-28</p>

            <img src="/UploadFolder/2016-01-28/2016012817581833899653-600-244.png" />

        </a>
    </li>

</ul>

<script>
    on = true;
</script>


<div class="spinner spinner2" style="margin-left:-75px;">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
</div>
<div class="nothing2" style="display:none">没有数据可加载</div>
<script src="/JS/cms/js/mustache.min.js"></script>
<!--加载更多-->
<script>

    function ajaxloadMore() {
        var data = { Page: page, s: 'gywm_gyfx' };
        $.ajax({
            type: 'POST',
            url: '/new/page',
            data: data,
            dataType: 'json',
            success: function (data) {
                //console.log(data);
                scrollWaitHide();
                if (page > data.PageCount) {
                    $(".nothing2").css({ "display": "block" })
                    closeNothing();//3秒后关闭没有更多数据了
                }
                else {
                    $(".nothing2").css({ "display": "none" })
                    $('.example-list').append(showData(data));
                    page++;
                    on = true;
                }
            },
            error: function (data) {

            }
        })

        function showData(data) {
            var template = $('#template').html();
            var renderhtml = Mustache.render(template, data);
            return renderhtml;
        }
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
    //自动关闭
    function closeNothing() {
        setTimeout(function () {
            var a = $(".nothing2");
            if (a.length > 0) {
                if (a.css("display") == "block") {
                    a.fadeOut(500, function () {
                        a.css({
                            "display": "none"
                        })
                    })
                }
            }
        }, 2600)
    }
</script>

<script id="template" type="x-tmpl-mustache">
    {{#DataList}}
        <li>
           <a href="/newdetail?id={{{id}}}">
           <h3>{{{Title}}}</h3>
           <p>{{{CatetoryName}}} {{{Time}}}</p>
           <img src="{{{TitleIMGA}}}">
           </a>
        </li>
    {{/DataList}}
</script>
<script src="/Public/home/jweixin-1.0.0.js"></script>

<script>
    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: 'wxff4c23cee37378e1', // 必填，公众号的唯一标识
        timestamp: '1511851504', // 必填，生成签名的时间戳
        nonceStr: 'vqyumbxpvarcwyg', // 必填，生成签名的随机串
        signature: '66511646d481062e8d3e19f195d2a5a83a968686',// 必填，签名，见附录1
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
                link: 'http://fcgj.pthola.cn/new?s=gywm_gyfx',
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
                title: '关于复星-复城国际T1咨询',
                desc: '关于复星-复城国际T1咨询',
                link: 'http://fcgj.pthola.cn/new?s=gywm_gyfx',
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