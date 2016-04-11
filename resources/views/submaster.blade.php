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
                        <a href="#" class="list-group-item">
                            <i class="fa fa-chevron-right"></i>
                            {{$category->name}}
                        </a>
                    @endforeach
                </div>
                <!-- Categories Links Ends -->
                <!-- Special Products Starts -->
                <h3 class="side-heading">Suppliers</h3>
                <ul class="side-products-list">
                    @foreach($suppliers as $supplier)
                        <a href="#" class="list-group-item">
                            <i class="fa fa-chevron-right"></i>
                            {{$supplier->name}}
                        </a>
                        @endforeach
                                <!-- Special Product #5 Ends -->
                </ul>
                <!-- Special Products Ends -->
            </div>
            <!-- Sidebar Ends -->
            @yield('primary-content')
        </div>
    </div>
@endsection