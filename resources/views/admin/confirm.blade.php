@extends('admin.master')
@section('page-container')
    <section class="page-container">

        <div class="page-content container-fluid">
            <div class="widget">
                <div class="widget-heading">
                    <h3 class="widget-title">Validasi Konfirmasi Pembayaran</h3>
                </div>
                <div class="widget-body">
                    <div class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Pengirim:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="email" value="{{$confirm->bank_account_name}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Rekening:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="email" value="{{$confirm->bank_account}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Bank Yang Dituju:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="email" value="{{$confirm->bank->bank_name}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Bukti pembayaran:</label>
                            <div class="col-sm-6">
                                <img src="/images/confirms/{{$confirm->bukti_pembayaran}}" class="image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email"></label>
                            <div class="col-sm-6">
                                <form action="/admin/order/{{$confirm->order_id}}/confirm" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="valid" value="1">
                                    <button class="btn btn-success" type="submit">Valid</button>
                                </form>
                                <br />
                                <form action="/admin/order/{{$confirm->order_id}}/confirm" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="valid" value="0">
                                    <button class="btn btn-danger" type="submit">Invalid</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection