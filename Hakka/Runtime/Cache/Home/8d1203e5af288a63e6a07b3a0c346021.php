<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">
    
    <meta charset="utf-8">
    <title>T1租赁中心-复城国际T1写真</title>
    <link rel="stylesheet" href="/Public/home/swiper.min.css">
    <style>
       body,html{position:relative;height:100%;background-color:#000}.swiper-container{width:100%;height:300px;margin-left:auto;margin-right:auto}.swiper-slide{position:relative;width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.gallery-top{height:80%;width:100%}.gallery-thumbs{height:20%;box-sizing:border-box;padding:10px 0}.gallery-thumbs .swiper-slide{width:25%;height:100%;opacity:.4}.gallery-thumbs .swiper-slide-active{opacity:1}.swiper-slide img{max-width:100%}
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta content="email=no" name="format-detection" />
    <meta content="telephone=no" name="format-detection" />
    <link rel="stylesheet" href="/Public/home/all.css" />
</head>
<body>
   
    
    
    <!-- Swiper -->
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
                <img data-src="<?php echo ($list["img"]); ?>" class="swiper-lazy">
                 <div class="swiper-lazy-preloader"></div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper">
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><div class="swiper-slide" style="background-image:url('<?php echo ($list["img"]); ?>')"></div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <script src="/Public/home/swiper-3.3.1.min.js"></script>
    <script>
        window.onload = function () {
            var galleryTop = new Swiper(".gallery-top", {
                nextButton: ".swiper-button-next",
                prevButton: ".swiper-button-prev",
                paginationClickable:true,
               // spaceBetween: 10,
                preloadImages: false,
                lazyLoading: true
            });
            var galleryThumbs = new Swiper(".gallery-thumbs", {
                spaceBetween: 10,
                centeredSlides: true,
                slidesPerView: "auto",
                touchRatio: 0.2,
                slideToClickedSlide: true
            });
            galleryTop.params.control = galleryThumbs;
            galleryThumbs.params.control = galleryTop
        };

    </script>

<script src="/Public/home/jweixin-1.0.0.js"></script>

<script>
    wx.config({ debug: false, appId: "wxff4c23cee37378e1", timestamp: "1511946097", nonceStr: "rcqjmoflvkogwgi", signature: "8c621591c08486c3a415d176c33133c23994a394", jsApiList: ["onMenuShareTimeline", "onMenuShareAppMessage"] });
</script>
<script>
    var ua = navigator.userAgent.toLowerCase(); if (ua.match(/MicroMessenger/i) == "micromessenger") { var p = window.location.port == "" ? "" : ":" + window.location.port; var url = window.location.protocol + "//" + window.location.host + p; wx.ready(function () { wx.onMenuShareAppMessage({ title: 'T1租赁中心-复城国际T1写真', desc: 'T1租赁中心-复城国际T1写真', link: "http://fcgj.pthola.cn/photo?id=11&type=T1租赁中心", imgUrl: url + 'images/2016021717364581321319.jpg ', trigger: function (res) { }, success: function (res) { }, cancel: function (res) { }, fail: function (res) { } }); wx.onMenuShareTimeline({ title: 'T1租赁中心-复城国际T1写真', desc: 'T1租赁中心-复城国际T1写真', link: "http://fcgj.pthola.cn/photo?id=11&type=T1租赁中心", imgUrl: url + 'images/2016021717364581321319.jpg', trigger: function (res) { }, success: function (res) { }, cancel: function (res) { }, fail: function (res) { } }) }) } else { };
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