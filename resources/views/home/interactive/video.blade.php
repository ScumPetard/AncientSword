@extends('home.layouts.base')

@section('title','视频中心')

@section('css')
    <style>
        .video-player {
            width:60% !important;
        }
    </style>
@stop

@section('content')
    <div class="title-pulic">
        <div class="tle wow fadeInUp animated">
            <h2>视频中心</h2>
            <p>VIDEO CENTER</p>
        </div>
        <div class="nav wow fadeInUp animated">
            <a href="/interactive/video" class="hover">视频中心</a>
            <a href="/interactive/work">人才招聘</a>
            <a href="/interactive/contact">联系我们</a>
        </div>
    </div>
    <!-- -->
    <div class="video-box">
        @foreach($videos as $video)
            <div class="item wow fadeInUp animated" onclick="videoPlayer(this);" videoid="{{$video->id}}" style="margin-top: 50px;">
                <a href="javascript:void(0)">
                    <img src="/assets/i/video-img.png" alt="">
                    <p>{{$video->name}}<span>更新时间:{{$video->created_at}}</span></p>
                </a>
            </div>
        @endforeach
        <div class="clear"></div>
    </div>
    @foreach($videos as $video)
        <div id="video{{$video->id}}" style="display: none;">
            <video poster="{{$video->preview}}" controls crossorigin>
                <source src="{{$video->filepath}}" type="video/mp4">
            </video>
        </div>
    @endforeach

@stop

@section('js')
    <link rel="stylesheet" href="/player/plyr.css">
    <script src="/player/plyr.js"></script>
    <script src="https://cdn.bootcss.com/layer/3.0.1/layer.min.js"></script>
    <script>
        $('.icon>span').hover(function () {
            $(this).addClass('hinge');
        });
        plyr.setup();
        /**
         * 视频播放
         */
        function videoPlayer(object) {
            var videoid = $(object).attr('videoid');
            var deo = $('#video'+videoid);
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




