@extends('admin.layouts.app')

@section('title','轮播图设置')

@section('css')
    <style>
        .img-thumbnail {width: 150px;height: 80px;}
        td {line-height: 80px !important;}
    </style>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">轮播图设置</h3>
                    <a href="javascript:;" class="btn btn-info pull-right" data-toggle="modal" data-target="#_create"><i class="fa fa-plus" aria-hidden="true"></i> 添加</a>
                </div>
                <div class="box-body">
                    <table id="resourceTable" class="table table-bordered table-striped dataTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>略缩图</th>
                            <th>名称</th>
                            <th>链接地址</th>
                            <th>启用状态</th>
                            <th>排序</th>
                            <th>创建时间</th>
                            <th>最后一次修改时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($banners as $banner)
                            <tr>
                                <td>{{ $banner->id }}</td>
                                <td><img src="{{$banner->url}}" class="img-thumbnail"></td>
                                <td>{{ $banner->name }}</td>
                                <td>{{ $banner->link }}</td>
                                <td><span class="label label-info">启用</span></td>
                                <td>{{ $banner->sort }}</td>
                                <td>{{ $banner->created_at }}</td>
                                <td>{{ $banner->updated_at }}</td>
                                <td>
                                    <a href="javascript:;" data-toggle="modal" data-target="#_edit{{ $banner->id }}"
                                       class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 编辑</a>
                                    <a href="/admin/banner/destroy/{{ $banner->id }}"
                                       class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i> 删除</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.banner.create_form',['_formId' => '_create'])
    @foreach($banners as $banner)
        @include('admin.banner.edit_form',['_formId' => '_edit'.$banner->id,'banner' => $banner])
    @endforeach
@stop

@section('js')
    @include('admin.layouts.dataTable')
@stop