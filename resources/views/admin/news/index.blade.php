@extends('admin.layouts.app')

@section('title','新闻设置')

@section('css')
    <style>
        .img-thumbnail {width: 140px;height: 80px;}
        td {line-height: 80px !important;}
    </style>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">新闻设置</h3>
                    <a href="/admin/news/create" class="btn btn-info pull-right" ><i class="fa fa-plus" aria-hidden="true"></i> 添加</a>
                </div>
                <div class="box-body">
                    <table id="resourceTable" class="table table-bordered table-striped dataTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>略缩图</th>
                            <th>标题</th>
                            <th>作者</th>
                            <th>分类</th>
                            <th>状态</th>
                            <th>创建时间</th>
                            <th>最后一次修改时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($newss as $news)
                            <tr>
                                <td>{{ $news->id }}</td>
                                <td><img src="{{$news->preview}}" class="img-thumbnail"></td>
                                <td>{{ $news->title }}</td>
                                <td>{{ $news->author }}</td>
                                <td>{{ $news->category }}</td>
                                <td><span class="label label-info">启用</span></td>
                                <td>{{ $news->created_at }}</td>
                                <td>{{ $news->updated_at }}</td>
                                <td>
                                    <a href="/admin/news/edit/{{ $news->id }}" class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 编辑</a>
                                    <a href="/admin/news/destroy/{{ $news->id }}" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i> 删除</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    @include('admin.layouts.dataTable')
@stop