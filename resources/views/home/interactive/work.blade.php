@extends('home.layouts.base')

@section('title','人才招聘')

@section('content')
    <div class="title-pulic">
        <div class="tle wow fadeInUp animated">
            <h2>人才招聘</h2>
            <p>RECRUITMENT</p>
        </div>
        <div class="nav wow fadeInUp animated">
            <a href="/interactive/video">视频中心</a>
            <a href="/interactive/work" class="hover">人才招聘</a>
            <a href="/interactive/contact">联系我们</a>
        </div>
    </div>
    <!-- -->
    <div class="intera-box">
        <div class="tle wow fadeInUp animated">
            公司职位如有中意的请拨打电话： <b>400-4586-7566 </b> 或发送简历到：<b>15885@136.com</b>
        </div>
        <div class="intera-join">
            @foreach($works as $work)
                <div class="item wow fadeInUp animated" style="margin-top: 50px;">
                    <h2>{{$work->name}}</h2>
                    <p>发布时间：{{$work->created_at}} <span>薪资：{{$work->price}}</span></p>
                    <span>职位描述：</span>
                    <div class="txt">
                        {{$work->intro}}
                    </div>
                </div>
            @endforeach
            <div class="clear"></div>
        </div>
    </div>
@stop




