@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Users</h4>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Last Order</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->mobile }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ optional(optional($item->orders)->last())->order_date }}</td>
                                    <td>
                                        <span class="badge badge-{{ $item->status ? 'success' : danger }}">
                                            {{ $item->status ? 'Active' : 'De-active' }}
                                        </span>
                                    </td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <div class="button-group">
                                            <button class="btn btn-xs btn-success">
                                                <i class="fa fa-edit"></i> Edit
                                            </button>
                                            <button class="btn btn-xs btn-danger">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
