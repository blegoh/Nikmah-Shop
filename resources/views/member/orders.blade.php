@extends('member.submaster')
@section('primary-content')
        <!-- Primary Content Starts -->
<div class="col-md-9">
    <h2>My Orders</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Order ID</th>
            <th>Nama Penerima</th>
            <th>Kota Tujuan</th>
            <th>Tanggal</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr class="info">
                <td>{{$order->id}}</td>
                <td>{{$order->receiver_name}}</td>
                <td>{{$order->city}}</td>
                <td>{{$order->order_date}}</td>
                <td><a href="/order/{{$order->id}}" class="btn btn-info">More</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<!-- Primary Content Ends -->
@endsection