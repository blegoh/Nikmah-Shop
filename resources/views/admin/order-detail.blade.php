@extends('admin.master')
@section('page-container')
    <section class="page-container">

        <div class="page-content container-fluid">
            <div class="widget">
                <div class="widget-heading">
                    <h3 class="widget-title">Order List</h3>
                </div>
                <div class="widget-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="txtOrderID">Order ID</label>
                                    <input id="txtOrderID" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlStatus">Order Status</label>
                                    <select id="ddlStatus" class="form-control">
                                        <option value="*"></option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="txtOrderID">Order ID</label>
                                    <input id="txtOrderID" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="mb-15 btn btn-outline btn-success">Filter</button>
                    </form>
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
                        @foreach($orders as $order)
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
                </div>
            </div>
        </div>
    </section>
@endsection