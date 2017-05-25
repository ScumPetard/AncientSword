<!DOCTYPE html>
<html lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link type="text/css" rel="stylesheet" href="/assets/css/swiper-3.4.2.min.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/app.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/animate.css/3.5.2/animate.min.css">
    <script type="text/javascript" src="/assets/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="/assets/js/base.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/wow/1.1.2/wow.min.js"></script>
    <title>@yield('title')</title>
</head>
@yield('css')
<body>
<div class="header-pulic wow pulse animated">
    <div class="logo">
        <a href="/"><img src="/assets/i/header-logo.png"></a>
    </div>
    <div class="navi">
        <ul>
            <li><a href="/">网站首页</a></li>
            <li><a href="/about/about">公司简介</a></li>
            <li><a href="/product">产品中心</a></li>
            <li><a href="/research/base">生态农业</a></li>
            <li><a href="/about/sales">专营销售</a></li>
            <li><a href="/interactive/video">公司互动</a></li>
        </ul>
        <a href="javascript:void(0)" class="search"></a>
    </div>
</div>
<!-- banner -->
<div class="index-banner swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="/assets/i/index-banner.png"></div>
        <div class="swiper-slide"><img src="/assets/i/index-banner.png"></div>
        <div class="swiper-slide"><img src="/assets/i/index-banner.png"></div>
    </div>
</div>
<!-- banner end -->
    @yield('content')
<!-- footer -->
<div class="footer-pulic wow pulse animated">
    <div class="warpin">
        <div class="text">
            <h2>专营销售</h2>
            <p>订购喜爱的茶，我们会为您送货上门。免费发送，货到即用。</p>
            <a href="javascript:ovid(0)">在线购买 >></a>
        </div>
        <div class="text">
            <h2>前往京东店铺</h2>
            <p>深入了解鸡公嘴茶，我们会为您送货上门。免费发送，货到即用。</p>
            <a href="javascript:ovid(0)">在线购买 >></a>
        </div>
        <div class="code">
            <h2>微信商城</h2>
            <div class="img">
                <img src="/assets/i/footer-code.png">
                扫码关注进入手机端购买更实惠
            </div>
        </div>
        <div class="code">
            <h2>关注我们</h2>
            <div class="img">
                <img src="/assets/i/footer-code.png">
                扫码关注获取更多活动养生资讯
            </div>
        </div>
        <div class="copy">
            © Copyright 2016. 重庆市綦江区古剑山祺茗茶业有限公司.ICP备案：湘ICP备16007095号
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="/assets/js/swiper-3.4.2.min.js"></script>
<script type="text/javascript" src="/assets/js/app.js"></script>
<script type="text/javascript">
    new WOW().init();
</script>
@yield('js')
</html>
