@extends('admin.layouts.app')

@section('title','招聘信息设置')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">招聘信息设置</h3>
                    <a href="javascript:;" class="btn btn-info pull-right" data-toggle="modal" data-target="#_create"><i class="fa fa-plus" aria-hidden="true"></i> 添加</a>
                </div>
                <div class="box-body">
                    <table id="resourceTable" class="table table-bordered table-striped dataTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>名称</th>
                            <th>薪资</th>
                            <th>启用状态</th>
                            <th>创建时间</th>
                            <th>最后一次修改时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($works as $work)
                            <tr>
                                <td>{{ $work->id }}</td>
                                <td>{{ $work->name }}</td>
                                <td>{{ $work->price }}</td>
                                <td><span class="label label-info">启用</span></td>
                                <td>{{ $work->created_at }}</td>
                                <td>{{ $work->updated_at }}</td>
                                <td>
                                    <a href="javascript:;" data-toggle="modal" data-target="#_edit{{ $work->id }}"
                                       class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 编辑</a>
                                    <a href="/admin/work/destroy/{{ $work->id }}"
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
    @include('admin.work.create_form',['_formId' => '_create'])
    @foreach($works as $work)
        @include('admin.work.edit_form',['_formId' => '_edit'.$work->id,'work' => $work])
    @endforeach
@stop

@section('js')
    @include('admin.layouts.dataTable')
@stop