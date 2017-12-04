<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">
    
    <title>复城国际T1相册</title>
    <link rel="stylesheet" href="/Public/home/font-awesome.min.css" />
    <link rel="stylesheet" href="/Public/home/bounces.css"/>
    <script src="/Public/home/jquery-1.10.2.min.js"></script>
    <script src="/Public/home/all.js"></script>
    <style>
        

        .album-list {
            margin-bottom: 5px;
            position:relative;
            overflow:hidden;
        }
        .album-list a{
            display:block;
        }
        .album-down{
            padding-left:1%;
        }
            .album-down li {
              display: block;
              position: relative;
              float: left;
              width: 32.333333333333336%;
              text-align: center;
              margin-right: 1%;
              margin-bottom: 1%;
            }

                .album-down li:last-child {
                    margin-right: 0;
                }
            .album-down li p{
              position: absolute;
                color: #fff;
                font-size: 1.4rem;
                width: 100%;
                text-align: center;
                bottom: 0;
                height: 30px;
                line-height: 30px;
                background: rgba(0,0,0,0.5);
            }
        .a-return {
            height: 45px;
            display: block;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 0 3px #ccc;
            position: relative;
            margin-top: 10px;
            position:fixed;
            left:0;
            bottom:0;
            width:100%;
        }

            .a-return i.icon-double-angle-left {
                font-size: 30px;
                position: absolute;
                left: 10px;
                top: 5px;
            }
        .img-play{
               background: url(/Public/home/play.png) no-repeat center;
                position: absolute;
                width: 100%;
                height: 100%;
                background-size: 10%;
                top:0;
        }
        .play-p{
            position:absolute;
            bottom:10%;
            left:50%;
            color:#fff;
            font-size:1.4rem;
            transform:translate(-50%,-5%);
            letter-spacing: 5px;
            width: 100%;
            text-align: center;
            text-shadow:0 0 3px#000;
        }
        .b-Praise{text-align:center;margin:10px 0;}
        .b-Praise a {
            display: inline-block;
            background-color: #A87846;
            font-size: 14px;
            color: #fff;
            padding: 4px 10px;
            border-radius: 4px;
        }
        /*.img_roll{
            background:url(/App_Themes/Public/image/360.jpg) no-repeat center;
            padding:18% 0;
             animation:slidebg 25s infinite  linear backwards;
        }*/
            a,button,input,textarea
            {
                -webkit-tap-highlight-color: rgba(0,0,0,0;)
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
   
    
    
    <!---->
    <div class="bk05"></div>
    <div class="container" style="padding:0 5px;">

       
       
        <div class="video">
            <iframe width="100%" height="100%"  src="http://player.youku.com/embed/XMTQ1MzE0MjE4NA==" frameborder=0 allowfullscreen></iframe>
        </div>
        <div class="b-Praise">
            <a href="javascript:;">复城国际T1相册</a> 
         </div>
        
        <ul class="album-down clearfix">
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li>
                <a class="load" href="/Home/Fct/img/id/<?php echo ($list["id"]); ?>">
                    <p><?php echo ($list["name"]); ?></p>
                    <img class="img-Response" src="<?php echo ($list["img"]); ?>" alt="" />
                </a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
        </div>
        <div class="bk5"></div>
<!--公用底部-->
     <a href="/Home/Fct/fct1" class="fx-logo ripplelink  load">
        <i class="icon-double-angle-left"></i>
        <img src="/Public/home/logo.png" alt="" />
    </a>
    <!--refresh loading-->
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
    

<script src="/Public/home/jweixin-1.0.0.js"></script>

<script>
    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: 'wxff4c23cee37378e1', // 必填，公众号的唯一标识
        timestamp: '1511923984', // 必填，生成签名的时间戳
        nonceStr: 'zhtkztirwnzecnr', // 必填，生成签名的随机串
        signature: '1ecf134792acc57b4118acdb63595ee7c66804cc',// 必填，签名，见附录1
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
                title: '复查国际T1相册',
                desc: '复查国际T1相册',
                link: 'http://fcgj.pthola.cn/album',
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
                title: '复查国际T1相册',
                desc: '复查国际T1相册',
                link: 'http://fcgj.pthola.cn/album',
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