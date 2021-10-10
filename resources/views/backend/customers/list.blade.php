@extends('backend.layout.master')
@section('content')
    <style>
        table.table td a.edit {
            color: #FFC107;
        }
        table.table td a.delete {
            color: #F44336;
        }
    </style>
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="col-sm-6">
                    <h2>Bảng <b>Danh sách khách hàng</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm</span></a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                STT
                            </th>
                            <th>
                                Tên khách hàng
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Địa chỉ
                            </th>
                            <th>
                                SĐT
                            </th>
                            <th>
                                Ngày sinh
                            </th>
                            <th>
                                Lựa chọn
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        @foreach ($customers as $key => $customer)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>
                                    <img {{$customer->image}} class="mr-2" alt="image" src="">
                                    {{$customer->name}}
                                </td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->address}}</td>
                                <td>{{$customer->phone}}</td>
                                <td>{{$customer->date_of_birth}}</td>
                                <td>
                                    <a href="" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>

                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
