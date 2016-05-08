@extends('admin.master')
@section('page-container')
    <section class="page-container">

        <div class="page-content container-fluid">
            <div class="widget">
                <div class="widget-heading">
                    <h3 class="widget-title">Order Detail</h3>
                </div>
                <div class="widget-body">
                    <dl class="dl-horizontal">
                        @if($order->sender_name != '')
                            <dt>Nama Pengirim :</dt>
                            <dd>{{$order->sender_name }}</dd>
                        @endif
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
                    <table id="order-list" cellspacing="0" width="100%" class="table table-hover dt-responsive nowrap">
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
                            <tr>
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
                        <h3>Member Belum Konfirmasi Pembayaran</h3>
                    @elseif($order->is_paid == 0 && $order->confirms->count() > 0)
                        <h3>Sudah Konfirmasi</h3>
                        <a href="/admin/order/{{$order->id}}/confirm" class="btn btn-info">Validasi</a>
                    @elseif($order->is_paid == 1 && $order->shipping_status == 'wait')
                        <form class="form-inline" action="/admin/order/{{$order->id}}" role="form" method="post">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="email">Nomer Resi:</label>
                                <input type="text" class="form-control" id="resi" name="resi">
                            </div>
                            <button type="submit" class="btn btn-info">Update</button>
                        </form>
                    @elseif($order->shipping_status == 'shipping')
                        <h3>Proses Pengiriman</h3>
                    @elseif($order->shipping_status == 'shipped')
                        <h3>Terkirim</h3>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection