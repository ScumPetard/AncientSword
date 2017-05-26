@extends('home.layouts.base')

@section('title','公司简介')

@section('content')
    <div class="title-pulic">
        <div class="tle wow fadeInUp animated">
            <h2>走进鸡公嘴</h2>
            <p>ABOUT US</p>
        </div>
        <div class="nav wow fadeInUp animated">
            <a href="/about/about">公司简介</a>
            <a href="/about/honor" class="hover">企业荣誉</a>
            <a href="/about/news" >新闻中心</a>
        </div>
    </div>
    <!-- -->
    <div class="honor-box">
        @foreach($honors as $honor)
            <div class="item wow fadeInUp animated">
                <img src="{{$honor->url}}">
            </div>
        @endforeach
        <div class="clear"></div>
    </div>
@stop




