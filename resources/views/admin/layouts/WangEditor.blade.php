<link rel="stylesheet" href="//cdn.bootcss.com/wangeditor/2.1.20/css/wangEditor.min.css">
<script src="//cdn.bootcss.com/wangeditor/2.1.20/js/wangEditor.min.js"></script>
<script type="text/javascript">
    var editor = new wangEditor('wangEditor1');
    editor.config.uploadImgUrl = '/admin/api/fileupload';
    editor.config.uploadParams = {
        _token: '{{ csrf_token() }}',
        user: 'Petard'
    };
    editor.config.uploadHeaders = {
        'Accept': 'text/x-json'
    };
    editor.config.hideLinkImg = true;
    editor.create();
</script>