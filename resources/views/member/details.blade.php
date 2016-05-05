@extends('member.submaster')
@section('primary-content')
        <!-- Primary Content Starts -->
<div class="col-md-9">
    <h2>Order Detail</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Nama</th>
            <th>Foto</th>
            <th>Jumlah</th>
            <th>Berat</th>
            <th>Harga</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order->details as $detail)
            <tr class="info">
                <td>{{$detail->product()->name}}</td>
                <td><img src="{{$detail->product()->photo}}" width="50px"></td>
                <td>{{$detail->quantity}}</td>
                <td>{{$detail->weight}}</td>
                <td>{{$detail->unit_price}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<!-- Primary Content Ends -->
@endsection