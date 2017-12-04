<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">



    <title>复城国际T1写字楼09号房-复城国际T1</title>
    <link rel="stylesheet" href="/Public/home/swiper.min.css">
    <link rel="stylesheet" href="/Public/home/font-awesome.min.css"/>
    <link rel="stylesheet" href="/Public/home/bounces.css"/>
    <script src="/Public/home/jquery-1.10.2.min.js"></script>
    <script src="/Public/home/all.js"></script>
    <style>
        html, body {
            position: relative;
            height: 100%;
        }

        #banner {
            position: relative;
            overflow:hidden;
        }

        #banner img {
            max-width: 100%;
            height: auto;
            display: block;
        }
        .swiper-button-next, .swiper-button-prev {
            position: absolute;
            top: 50%;
            width: 15px;
            height: 23px;
            margin-top: -20px;
            z-index: 10;
            cursor: pointer;
            background-size: 15px;
            background-position: center;
            background-repeat: no-repeat;
        }

        .detail-title {
            height: 55px;
            line-height: 55px;
            background-color: #fff;
            color: #505050;
            font-size: 1.4rem;
            text-indent: 1em;
            margin-bottom: 10px;
        }

        .detail-list {
            background-color: #fff;
            margin-bottom: 10px;
            /*display: -webkit-flex;*/
            /*display: -ms-flexbox;*/
            /*display: flex;*/
        }

        .detail-list ul li {
            position: relative;
            /*-webkit-box-flex:1;*/
            /*-webkit-flex:1;*/
            /*flex:1;*/
            float: left;
            padding: 10% 0;
            width: 33.333333333333336%;
            border-right: 1px solid #e6e6e6;
            border-bottom: 1px solid #e6e6e6;
            text-align: center;
            font-size: 1.5rem;

        }

        .detail-list ul li strong {
            color: #505050;
            font-weight: bold;
        }

        .detail-list ul li p {
            color: #c3c3c3;
            line-height: 25px;
        }

        .detail-title span {
            display: inline-block;
            background: url("/Public/home/icon.png") no-repeat left center;
            color: #505050;
            background-size: 25px;
            padding-left: 20px;
            font-weight: bold;
        }

        .detail-title em {
            color: #c3c3c3;
            padding-left: 5px;
        }
        .detail-des{
            background-color: #fff;
        }
        .detail-des h2 {
            font-weight: normal;
            text-align: center;
            font-size: 1.6rem;
            color: #505050;
            height: 35px;
            line-height: 35px;
        }
        .detail-tab a{
            float: left;
            display: block;
            padding: 8% 0;
            width: 33.333333333333336%;
            border-right: 1px solid #EEEEEE;
            text-align: center;
        }
        .detail-tab a:last-child{
            border-right: 0;
        }
        .a1{
            background: url("/Public/home/carGray.png") no-repeat center;
            background-size: 35%;
        }
        .a1.active{
            background-image:url("/Public/home/car.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: 35%;
        }
        .a2{
            background: url("/Public/home/trainGray.png") no-repeat center;
            background-size: 35%;
        }
        .a2.active{
            background-image:url("/Public/home/train.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: 35%;
        }
        .a3{
            background: url("/Public/home/planGray.png") no-repeat center;
            background-size: 35%;
        }
        .a3.active{
            background-image:url("/Public/home/plan.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: 35%;
        }
        .detail-tab{
            margin-bottom: 10px;
        }
        #tabs-container{
            padding: 15px 5px;
            border-top: 1px solid #EEEEEE;
            /*margin-bottom: 10px;*/
        }
        .detail-sub{
            padding: 10px 5px;
        }
        .detail-sub a{
            display: block;
            text-align: center;
            color: #fff;
            background-color: #E56464;
            font-size: 1.6rem;
            height: 60px;
            line-height: 60px;
        }
        .content-slide em{
            font-size: 1.4rem;
            color: #505050;
        }
        .show-form{
            padding: 0 10px;
        }
        .show-top{
            padding: 15% 0;
            background-color: #E56464;
            border-radius: 4px 4px 0 0;
            margin-bottom: 10px;
            color: #fff;
            font-size: 1.8rem;
            font-weight: bold;
        }
        .show-form p{
            line-height: 30px;
            font-size: 1.4rem;
            color: #acacac;
        }
        .btn-sub{
            display: block;
            background-color: #E56464;
            color: #fff;
            width: 100%;
        }
        .btn-tel{
            width: 100%;
            background-color: #34B16C;
            color: #fff;
            text-align: center;
            display: block;
        }
        body {
            background-color: #eee;
        }
        .bill-show{
            top:25px!important;
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




<!--banner-->
<div id="banner">
    <div class="swiper-wrapper">
        <?php if(is_array($img)): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lists): $mod = ($i % 2 );++$i;?><div class="swiper-slide"><img src="<?php echo ($lists["img"]); ?>"/></div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="swiper-pagination swiper-pagination-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
</div>

<div class="detail-title">
    复城国际T1写字楼09号房
</div>
<div class="detail-list">
    <ul class="clearfix">
        <li>
            <strong>业主类型</strong>

            <p>自持物业</p>
        </li>
        <li><strong>物业公司</strong>

            <p>高地物业</p>
        </li>
        <li><strong>物业费</strong>

            <p><?php echo ($info["cost"]); ?>/平米/月</p>
        </li>
        <li><strong>建筑面积</strong>

            <p><?php echo ($info["area"]); ?>平方米</p>
        </li>
        <li><strong>楼层</strong>

            <p><?php echo ($info["few"]); ?></p>
        </li>
        <li><strong>房屋朝向</strong>

            <p><?php echo ($info["toward"]); ?></p>
        </li>
    </ul>
</div>
<!--停车位-->
<div class="detail-title">
    <span>停车位</span><em>地下2层,共718个停车位。</em>
</div>
<!--交通描述-->

<div class="detail-sub">
    <a href="javascript:;">预约看房</a>
</div>
<!--弹出层-->
<div class="bill-show">
    <!-- 关闭-->
    <div class="close-show" style="padding-top:5px;"><i class="icon-remove"></i>
    </div>
    <div class="show-top">
        预约看房
    </div>
    <form id="form" onsubmit="return false;">
        <div class="show-form">
            <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" />
            <div class="control">
                <input type="text" name="n" class="form-control" placeholder="姓名"/>
            </div>
            <div class="control">
                <input type="text" name="p" class="form-control" placeholder="手机号"/>
            </div>
            <div class="control">
                <input type="text" name="c" class="form-control" placeholder="内容"/>
            </div>
            <p>我们销售人员会尽快联系您</p>

            <input type="submit"  class="btn btn-sub" value="提交" />
            <p>或者直接拨打咨询热线</p>
            <a href="tel:028-85330533" class="btn btn-tel">028-85330533</a>
        </div>
    </form>
</div>
<div class="bill-mask"></div>
<div class="bk5"></div>
<!--公用底部-->
<a href="/Home/Recom/index" class="fx-logo ripplelink  load">
    <i class="icon-double-angle-left"></i>
    <img src="/Public/home/logo.png" alt="" />
</a>
<!-- Swiper JS -->
<script src="/Public/home/swiper.min.js"></script>
<script src="/Public/layer/2.4/layer.js"></script>
<script>
    window.onload = function () {
        //        swiper
        var mySwiper2 = new Swiper('#banner', {
            autoplay: 5000,
            visibilityFullFit: true,
            loop: true,
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'

        });
        var tabsSwiper = new Swiper('#tabs-container', {
            speed: 500,
            onSlideChangeStart: function () {
                $(".tabs .active").removeClass('active');
                $(".tabs a").eq(tabsSwiper.activeIndex).addClass('active')
            }
        });
        $(".tabs a").on('touchstart mousedown', function (ev) {
            ev.preventDefault();
            $(".tabs .active").removeClass('active');
            $(this).addClass('active');
            tabsSwiper.slideTo($(this).index());
        });
        $(".tabs a").click(function (e) {
            ev.preventDefault()
        });
        //        开启弹窗
        $('.detail-sub a').on('touchstart', function () {
            //            className = $(this).attr('class');
            $('.bill-mask').fadeIn(300);
            $('.bill-show').removeAttr("class").addClass('animated bill-show bounceInDown').fadeIn();
        });

        //关闭弹窗
        $('.close-show').on('touchstart', function () {
            $('.bill-mask').fadeOut(500, function () {
                $('.bill-show').addClass('bounceOutUp').fadeOut();
            });
        });

        $("#form").submit(function () {
            var data = $('#form').serialize();
            var reg = /^1\d{10}$/;
            var p = $('#form').find('input[name="p"]');
            var n = $('#form').find('input[name="n"]');
            var c = $('#form').find('input[name="c"]');
            if (n.val() == "") {
//                alert('请输入姓名!');
                parent.layer.msg("请输入姓名",{icon: 2,time:1000});
                n.focus();
                return;
            } else if (!reg.test(p.val())) {
//                alert('请输入11位的手机号!');
                parent.layer.msg("请输入11位的手机号!",{icon: 2,time:1000});
                p.focus();
                return;
            }
            $.ajax({
                type: 'POST',
                url: '/Home/Recom/order',
                data: data,
                dataType: 'json',
                success: function (data) {
                    var arr = eval(data);
                    if(data == 200){
                        $('.bill-mask').fadeOut(500, function () {
                            $('.bill-show').addClass('bounceOutUp').fadeOut();
                        });
                        parent.layer.msg("提交成功",{icon: 1,time:1000});
                        document.getElementById('form').reset();
                    }
                    if(data == 400){
                        parent.layer.msg("提交失败",{icon: 2,time:1000});
                    }
                }
            });
        });


    };
</script>


<script src="/Public/home/jweixin-1.0.0.js"></script>

<script>
    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: 'wxff4c23cee37378e1', // 必填，公众号的唯一标识
        timestamp: '1512009965', // 必填，生成签名的时间戳
        nonceStr: 'wmcumnktktmomfv', // 必填，生成签名的随机串
        signature: 'd4c5773d9b2fdb339015ab6d2415ebcde74d1fbb',// 必填，签名，见附录1
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
                title: '复城国际T1写字楼09号房-复城国际T1',
                desc: '复城国际T1写字楼09号房-复城国际T1',
                link: 'http://fcgj.pthola.cn/product?id=9',
                imgUrl: url + '/UploadFolder/2016-03-17/2016031716405099982049.jpg',
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
                title: '复城国际T1写字楼09号房-复城国际T1',
                desc: '复城国际T1写字楼09号房-复城国际T1',
                link: 'http://fcgj.pthola.cn/product?id=9',
                imgUrl: url + '/UploadFolder/2016-03-17/2016031716405099982049.jpg',
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