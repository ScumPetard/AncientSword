<div class="modal fade" id="{{ $_formId }}">
    <div class="modal-dialog martop10">
        <form role="form" action="/admin/work/edit/{{$work->id}}" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">编辑招聘信息</h4>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <label>招聘信息名称</label>
                            <input type="text" name="name" value="{{$work->name}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>薪资</label>
                            <input type="text" name="price" value="{{$work->price}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>职位描述</label>
                            <textarea name="intro" cols="30" class="form-control"  rows="3">{{$work->intro}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    {{ csrf_field() }}
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-info">提交</button>
                </div>
            </div>
        </form>
    </div>
</div>