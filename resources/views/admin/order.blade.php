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
                  <th>Order ID</th>
                  <th>Member</th>
                  <th>Status</th>
                  <th class="text-right">Total</th>
                  <th class="text-center">Date Added</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($orders as $order)
                  <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->member->name}}</td>
                    <td>
                      @if($order->is_paid == 0 && $order->confirms->count() == 0 )
                        <span class="label label-danger">Belum Konfirmasi</span>
                      @elseif($order->is_paid == 0 && $order->confirms->count() > 0)
                        <span class="label label-warning">Sudah Konfirmasi</span>
                      @elseif($order->is_paid == 1 && $order->shipping_status == 'wait' )
                        <span class="label label-info">Terkonfirmasi</span>
                      @elseif($order->shipping_status == 'shipping')
                        <span class="label label-info">Pengiriman</span>
                      @elseif($order->shipping_status == 'shipped')
                        <span class="label label-success">Terkirim</span>
                      @endif
                    </td>
                    <td class="text-right">{{$order->details->sum('total') + $order->ongkir}}</td>
                    <td class="text-center">{{$order->created_at}}</td>
                    <td class="text-center">
                      <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                        <a href="/admin/order/{{$order->id}}">
                          <button type="button" class="btn btn-outline btn-primary"><i class="ti-eye"></i></button>
                        </a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
@endsection