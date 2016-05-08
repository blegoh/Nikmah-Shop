@extends('admin.master')
@section('page-container')
    <section class="page-container">

        <div class="page-content container-fluid">
            <div class="widget">
                <div class="widget-heading">
                    <h3 class="widget-title">Member List</h3>
                </div>
                <div class="widget-body">
                    <table id="order-list" cellspacing="0" width="100%" class="table table-hover dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>Member ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Telp</th>
                            <th>Kota</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($members as $member)
                            <tr>
                                <td>{{$member->id}}</td>
                                <td>{{$member->name}}</td>
                                <td>{{$member->user->email}}</td>
                                <td>{{$member->phone}}</td>
                                <td>{{$member->city()}}</td>
                                <td class="text-center">
                                    <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-outline btn-primary"><i class="ti-eye"></i></button>
                                        <button type="button" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button>
                                        <button type="button" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
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