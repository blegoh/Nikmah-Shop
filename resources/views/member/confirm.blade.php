@extends('member.submaster')
@section('css')
    <link href="/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
@endsection
@section('primary-content')
        <!-- Primary Content Starts -->
<div class="col-md-9">
    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Nomor Rekening:</label>
            <div class="col-sm-6">
                <input type="text" name="rekening" class="form-control" id="email" placeholder="Nomor Rekening" >
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Atas Nama:</label>
            <div class="col-sm-6">
                <input type="text" name="name" class="form-control" id="email" placeholder="Atas Nama" >
            </div>
        </div>
        <div class="form-group">
            <label for="bank" class="col-sm-2 control-label">Bank Yang Dituju :</label>
            <div class="col-sm-6">
                <select name="bank" class="form-control" id="kab">
                    <option>- Pilih Bank Yang Dituju -</option>
                    @foreach($banks as $bank)
                        <option value="{{$bank->id}}">{{$bank->bank_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Bukti Pembayaran:</label>
            <div class="col-sm-6">
                <input id="input-id" name="photo" type="file" class="file" data-preview-file-type="text">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Konfirmasi</button>
            </div>
        </div>
    </form>
</div>
<!-- Primary Content Ends -->
@endsection
@section('js')
    <script src="/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
    <script src="/js/fileinput.min.js" type="text/javascript"></script>
    <script>
        $("#input-id").fileinput({'showUpload':false, 'previewFileType':'any'});
    </script>
@endsection