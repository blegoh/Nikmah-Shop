@extends('master')
@section('content')
    <div id="main-container-home" class="container">
        <div class="row">
            <!-- Sidebar Starts -->
            <div class="col-md-3">
                <!-- Categories Links Starts -->
                <h3 class="side-heading">Categories</h3>
                <div class="list-group categories">
                    @foreach($categories as $category)
                        <a href="/products/category/{{$category->category_id}}" class="list-group-item">
                            <i class="fa fa-chevron-right"></i>
                            {{$category->name}}
                        </a>
                    @endforeach
                </div>
                <!-- Categories Links Ends -->
                <div class="fb-page" data-href="https://www.facebook.com/Nikmah-SHOES-Sepatu-murah-ecer-dan-grosir-947256288679946/?__mref=message_bubble" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
            </div>
            <!-- Sidebar Ends -->
            @yield('primary-content')
        </div>
    </div>
@endsection