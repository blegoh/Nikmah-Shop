@extends('member.submaster')
@section('primary-content')
        <!-- Primary Content Starts -->
<div class="col-md-9">
    <h2>Order Detail</h2>
    <dl class="dl-horizontal">
        <dt>Nama Penerima :</dt>
        <dd>{{$order->receiver_name}}</dd>
        <dt>Telp Penerima :</dt>
        <dd>{{$order->receiver_phone}}</dd>
        <dt>Kota :</dt>
        <dd>{{$order->city()}}</dd>
        <dt>Alamat :</dt>
        <dd>{{$order->ship_address}}</dd>
        <dt>Ongkir :</dt>
        <dd>{{$order->ongkir}}</dd>
        @if($order->shipping_status != 'wait')
            <dt>Resi :</dt>
            <dd>{{$order->nomer_resi}}</dd>
        @endif
    </dl>
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
    @if($order->is_paid == 0 && $order->confirms->count() == 0)
        <a href="/order/confirm/{{$order->id}}" class="btn btn-info">Konfirmasi Pembayaran</a>
        <br /><br />
    @elseif($order->is_paid == 0 && $order->confirms->count() > 0)
        <h3>Proses Konfirmasi Pembayaran</h3>
    @elseif($order->shipping_status == 'shipping')
        <h3>Proses Pengiriman</h3>
    @elseif($order->shipping_status == 'shipped')
        <h3>Terkirim</h3>
    @endif
</div>
<!-- Primary Content Ends -->
@endsection