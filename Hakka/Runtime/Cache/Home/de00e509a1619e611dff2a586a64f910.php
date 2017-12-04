<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">
    
    <meta charset="utf-8">
    <title>复城国际T1租赁预约</title>
    <link rel="stylesheet" href="/Public/home/font-awesome.min.css">
     <script src="/Public/home/jquery-1.10.2.min.js"></script>
    <script src="/Public/home/all.js"></script>
    <style>
        .container{padding-left:15px!important;padding-right:15px!important;}
        .top_img{text-align:center;margin-bottom:25px;}
        .top_img img{width:60%;}
        .m_form input,.m_form textarea{border:1px solid #A87846!important;resize:none;}
        .btn-zu {background: #a97a45;color: #fff;width: 100%;}
        input::-webkit-input-placeholder,textarea::-webkit-input-placeholder{color:#A87846;}
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta content="email=no" name="format-detection" />
    <meta content="telephone=no" name="format-detection" />
    <link rel="stylesheet" href="/Public/home/all.css" />
</head>
<body>
   
    
    <div class="container">
        <div class="bk3"></div>
        <div class="top_img">
            <img src="/Public/home/slidetitle.png" alt="">
        </div>
        <form id="form" onsubmit="return false;">
        <div class="m_form">
            <div class="control">
                <input type="text" name="n" class="form-control" placeholder="姓名" value="">
             </div>
            <div class="control">
                 <input type="text" name="p" class="form-control" placeholder="电话" value="">
             </div>
            <div class="control">
                <textarea name="c" class="form-control"  cols="" rows="3"></textarea>
             </div>
            <div class="control">
                <input type="submit" style="border:0;" class="btn btn-zu" value="预约看房">
            </div>
            <div class="control">
               <a href="tel:028-85330533" class="btn btn-zu">一键呼叫租赁顾问</a>
             </div>
        </div>
            </form>
    </div>
    <div class="bk5"></div>
<!--公用底部-->
    <a href="/Home/Fct/fct1" class="fx-logo ripplelink  load">
        <i class="icon-double-angle-left"></i>
        <img src="/Public/home/logo.png" alt="" />
    </a>
    <script src="/Public/layer/2.4/layer.js"></script>
    <script>
        $(document).ready(function () {
            $("#form").submit(function () {
                var data = $('#form').serialize();
                var reg = /^1\d{10}$/;
                var p = $('#form').find('input[name="p"]');
                var n = $('#form').find('input[name="n"]');
                var c = $('#form').find('textarea[name="c"]');
                if (n.val() == "") {
//                  alert('请输入姓名!');
                    parent.layer.msg("请输入姓名",{icon: 2,time:1000});
                    n.focus();
                    return;
                } else if (!reg.test(p.val())) {
//                  alert('请输入11位的手机号!');
                    parent.layer.msg("请输入11位的手机号!",{icon: 2,time:1000});
                    p.focus();
                    return;
                }
                $.ajax({
                    type: 'POST',
                    url: '/Home/Fct/order',
                    data: data,
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        var arr = eval(data);
                        if(data == 200){
                            parent.layer.msg("提交成功",{icon: 1,time:1000});
                            document.getElementById('form').reset();
                        }
                        if(data == 400){
                            parent.layer.msg("提交失败",{icon: 2,time:1000});
                        }
                    },
                });
            });
               
        })
    </script>
    

<script src="/Public/home/jweixin-1.0.0.js"></script>

<script>
    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: 'wxff4c23cee37378e1', // 必填，公众号的唯一标识
        timestamp: '1511924969', // 必填，生成签名的时间戳
        nonceStr: 'udwxzppwnrytocg', // 必填，生成签名的随机串
        signature: '63f2d7022de80fb4d305d8a8c59834001923ba92',// 必填，签名，见附录1
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
                    title: '复城国际T1租赁预约',
                    desc: '复城国际T1租赁预约',
                    link: 'http://fcgj.pthola.cn/message',
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
                title: '复城国际T1租赁预约',
                desc: '复城国际T1租赁预约',
                link: 'http://fcgj.pthola.cn/message',
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