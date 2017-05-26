@extends('admin.layouts.app')

@section('title','产品设置')

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
                    <h3 class="box-title">产品设置</h3>
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
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><img src="{{$product->preview}}" class="img-thumbnail"></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->link }}</td>
                                <td><span class="label label-info">启用</span></td>
                                <td>{{ $product->sort }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>{{ $product->updated_at }}</td>
                                <td>
                                    <a href="javascript:;" data-toggle="modal" data-target="#_edit{{ $product->id }}"
                                       class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 编辑</a>
                                    <a href="/admin/product/destroy/{{ $product->id }}"
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
    @include('admin.product.create_form',['_formId' => '_create'])
    @foreach($products as $product)
        @include('admin.product.edit_form',['_formId' => '_edit'.$product->id,'product' => $product])
    @endforeach
@stop

@section('js')
    @include('admin.layouts.dataTable')
@stop