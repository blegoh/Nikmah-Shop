@extends('admin.master')
@section('page-container')
    <section class="page-container">

        <div class="page-content container-fluid">
            <h2>Welcome {{ Auth::guard('admin')->user()->name }}</h2>
        </div>
    </section>
@endsection