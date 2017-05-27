@extends('home.layouts.base')

@section('title','古剑山')

    @section('css')
        <style>
            .video-player {
                width:60% !important;
            }
        </style>
    @stop

@section('content')
    <div class="index-infor">
        <div class="title bounceInLeft animated">
            <h2>古剑山茶</h2>
            <p>茶树种植凤凰山梨树下立体栽培，茶树长势旺盛，茶树喜阴，再加上凤凰山脚两条峡谷，早晚升腾起来的云雾长期滋润，滋养，茶叶含的酶更具活力</p>
        </div>
        <div class="content">
            <div class="item wow fadeInUp animated">
                <div class="img">
                    <div class="hover trans">
                        <a href="/research/base">+</a>
                    </div>
                    <img src="assets/i/infor-img-1.png" alt="">
                    <a href="javascript:void(0)">茶叶基地>></a>
                </div>
                <div class="txt">
                    <h2>茶叶基地</h2>
                    <p>司茶树种植基地位于綦江永新镇罗家村凤凰山，因山上有梨树上万亩，凤凰山又有“梨花山”之名</p>
                </div>
            </div>
            <div class="item wow fadeInUp animated">
                <div class="img">
                    <div class="hover trans"><a href="/research/culture">+</a></div>
                    <img src="assets/i/infor-img-2.png" alt="">
                    <a href="javascript:void(0)">禅茶文化>></a>
                </div>
                <div class="txt">
                    <h2>禅茶文化</h2>
                    <p>“古剑山茶” 作为大众消费的绿茶、花茶、红茶系列产品来尽可能满足市场的需求。</p>
                </div>
            </div>
            <div class="item wow fadeInUp animated">
                <div class="img">
                    <div class="hover trans"><a href="/about/sales">+</a></div>
                    <img src="assets/i/infor-img-3.png" alt="">
                    <a href="javascript:void(0)">专营销售>></a>
                </div>
                <div class="txt">
                    <h2>专营销售</h2>
                    <p>在古剑山建一条手工制茶的体验生产线，让游客感受古剑山茶叶的生产特点和过程，寓教于乐。</p>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="index-honor ">
        <div class="warpin ">
            <div class="video wow fadeInUp animated">
                <img src="assets/i/honor-video.png" onclick="videoPlayer();">
            </div>
            <div class="img wow fadeInUp animated">
                <img src="assets/i/index-honor-img.png" alt="">
            </div>
            <div class="txt wow fadeInUp animated">
                <div class="title">
                    <h2>祺茗茶业有限公司</h2>
                    <p>“三峡杯”等金奖、银奖</p>
                </div>
                <div class="content">
                    <p>
                        重庆市綦江区古剑山祺茗茶业有限公司（原名重庆市奇盛春茶业有限公司）成立于2011年，是集种植.加工，销售为一体的茶叶品牌企业。公司茶树种植基地位于綦江永新镇罗家村凤凰山，因山上有梨树上万亩，凤凰山又有“梨花山”之名。</p>
                    <p>
                        綦江处于贵州和成都两大产茶区中间，历史以来就盛产茶叶，凤凰山的生态环境得天独厚，于古剑山同一山脉为与古剑山后山。因其地形地貌，茶场常年云雾缠绕，适合茶叶生长，“高山云雾出好茶”。所种植和加工的古剑山茶闻名遐迩。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="index-pubilmap ">
        <div class="warpin">
            <div class="title wow zoomInDown animated">
                <h2>古剑山茶·特点</h2>
                <p>品茗讲的是一个心静，当它刚刚进入口中时，味道虽然涩，但当它在缓缓渗入喉咙时，你会感到一种清香的回味，甜甜的，有一种豁然开朗的感觉，慢慢的你就会融入其中，但要切记，喝茶也是会喝醉的...</p>
            </div>
            <div class="icon wow zoomInDown animated">
                <span class="animated"><img src="assets/i/pubil-icon-1.png" alt=""></span>
                <span class="animated"><img src="assets/i/pubil-icon-2.png" alt=""></span>
                <span class="animated"><img src="assets/i/pubil-icon-3.png" alt=""></span>
                <span class="animated"><img src="assets/i/pubil-icon-4.png" alt=""></span>
                <span class="animated"><img src="assets/i/pubil-icon-5.png" alt=""></span>
            </div>
        </div>
    </div>
    <div class="index-newslist">
        @foreach($news as $new)
            <div class="item wow fadeInUp animated">
                <h2>{{$new->title}}</h2>
                <p style="height: 54px;overflow: hidden;">{{$new->intro}}</p>
                <a href="/about/news-detail/{{$new->id}}">Continue Reading →</a>
            </div>
        @endforeach
    </div>

    <div id="video" style="display: none;">
        <video poster="{{$video->preview}}" controls crossorigin>
            <source src="{{$video->filepath}}" type="video/mp4">
        </video>
    </div>
@stop

@section('js')
    <link rel="stylesheet" href="/player/plyr.css">
    <script src="/player/plyr.js"></script>
    <script src="https://cdn.bootcss.com/layer/3.0.1/layer.min.js"></script>
    <script>plyr.setup();</script>
    <script>
        $('.icon>span').hover(function () {
            $(this).addClass('hinge');
        });
        /**
         * 视频播放
         */
        function videoPlayer() {
            var deo = $('#video');
            layer.open({
                type: 1,
                width:500,
                height : 600,
                title: false,
                resize : true,
                closeBtn: 0,
                shadeClose: true,
                skin: 'video-player',
                content: deo
            });
        }

    </script>
@stop

