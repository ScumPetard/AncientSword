@extends('home.layouts.base')

@section('title','公司简介')

@section('css')
    <style>
        .backgo {
            background-color: #FF4351;
            border-color: #FF4351;
            color: #fff;
            font-weight: 300;
            font-size: 16px;
            text-decoration: none;
            line-height: 40px;
            height: 40px;
            padding: 0 40px;
            margin: 0;
            display: inline-block;
            border: none;
        }
    </style>
@stop

@section('content')
    <div class="title-pulic">
        <div class="tle wow fadeInUp animated">
            <h2>新闻中心</h2>
            <p>NEWS CENTER</p>
        </div>
        <div class="nav wow fadeInUp animated">
            <a href="/about/about">公司简介</a>
            <a href="/about/honor">企业荣誉</a>
            <a href="/about/news" class="hover">新闻中心</a>
        </div>
    </div>
    <!-- -->
    <div class="news-box">
        <div class="news-content">
            <div class="item wow fadeInUp animated">
                <div class="tel">
                    <i></i>{{$news->title}}
                </div>
                <div class="txt">
                    <div class="author">
                        <span>作者：{{$news->author}}</span><span>时间：{{$news->created_at}}</span><span>新闻分类 : {{$news->category}}</span>
                    </div>
                    <img src="{{$news->preview}}" alt="">
                    <p>{{$news->intro}}</p>
                    <div style="width: 100%">
                        {!! $news->content !!}
                    </div>
                    <div style="width: 100%;text-align: center;">
                        <a href="/about/news" class="backgo">返回新闻中心</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-up wow fadeInUp animated">
            <div class="tle">
                <h2>最新文章</h2>
                <span></span>
            </div>
            <div class="txt">
                @foreach($hots as $hot)
                    <div class="item">
                        <a href="/about/news-detail/{{$hot->id}}">
                            <h2>{{$hot->title}}</h2>
                            <p>{{$hot->created_at}}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="clear"></div>
    </div>
@stop




