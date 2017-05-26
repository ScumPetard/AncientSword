@extends('admin.layouts.app')

@section('title','新闻')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">编辑新闻</h3>
                </div>
                <form role="form" action="/admin/news/edit/{{$news->id}}" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label>标题</label>
                            <input type="text" class="form-control" value="{{$news->title}}" name="title" required>
                        </div>
                        <div class="form-group">
                            <label>作者</label>
                            <input type="text" class="form-control" value="{{$news->author}}" name="author" required>
                        </div>
                        <div class="form-group">
                            <label>新闻类别</label>
                            <input type="text" class="form-control" value="{{$news->category}}" name="category" required>
                        </div>
                        <div class="form-group">
                            <label>预览图片</label>
                            <input type="file" class="form-control" name="preview">
                            <p class="help-block">如果不想更换图片请勿上传文件</p>
                        </div>
                        <div class="form-group">
                            <label>新闻概要</label>
                            <textarea name="intro"  cols="30" rows="5" class="form-control">{{$news->intro}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>内容</label>
                            <textarea name="content" id="wangEditor1" cols="30" rows="30" class="form-control" required>{{$news->content}}</textarea>
                        </div>
                    </div>
                    <div class="box-footer">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-info">提交</button>
                        <a href="javascript:history.go(-1);" class="btn btn-default">取消</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('js')
    @include('admin.layouts.WangEditor')
@stop