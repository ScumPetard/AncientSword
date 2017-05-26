@extends('home.layouts.base')

@section('title','公司简介')

@section('content')
    <div class="title-pulic">
        <div class="tle wow fadeInUp animated">
            <h2>产品中心</h2>
            <p>PRODUCT</p>
        </div>
    </div>
    <!-- -->
    <div class="product-box">
        @foreach($products as $prodct)
            <div class="item wow fadeInUp animated">
                <div class="img">
                    <img src="{{$prodct->preview}}" alt="">
                </div>
                <h2>{{$prodct->name}}</h2>
                <p>{{$prodct->intro}}</p>
                <a href="{{$prodct->link}}" target="_blank">京东渠道  →</a>
            </div>
        @endforeach
        <div class="clear"></div>
    </div>
@stop

