@extends('member.submaster')
@section('primary-content')
        <!-- Primary Content Starts -->
<div class="col-md-9">
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Nama:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter email" value="{{$member->name}}">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Update</button>
            </div>
        </div>
    </form>
</div>
<!-- Primary Content Ends -->
@endsection