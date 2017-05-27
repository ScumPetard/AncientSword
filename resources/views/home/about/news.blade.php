@extends('home.layouts.base')

@section('title','新闻中心')

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
            @foreach($news as $new)
                <a href="/about/news-detail/{{$new->id}}">
                    <div class="item wow fadeInUp animated">
                        <div class="tel">
                            <i></i>{{$new->title}}
                        </div>
                        <div class="txt">
                            <div class="author">
                                <span>作者：{{$new->author}}</span><span>时间：{{$new->created_at}}</span><span>新闻分类 : {{$new->category}}</span>
                            </div>
                            <img src="{{$new->preview}}" alt="">
                            <p>{{$new->intro}}</p>
                        </div>
                    </div>
                </a>
            @endforeach

            <div class="page wow fadeInUp animated">
                {!! $news->render() !!}
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




