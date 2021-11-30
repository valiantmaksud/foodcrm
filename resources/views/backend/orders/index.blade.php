@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Orders</h4>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>User</th>
                                <th>Delivery Address</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Discount</th>
                                <th>Vat</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ optional($item->user)->name }}</td>
                                    <td>{{ $item->delivery_address }}</td>
                                    <td>{{ $item->order_date }}</td>
                                    <td>{{ $item->amount }}</td>
                                    <td>{{ $item->discount }}</td>
                                    <td>{{ $item->vat }}</td>
                                    <td>{{ $item->total_amount }}</td>
                                    <td>
                                        @if ($item->status != 'completed')
                                            <a href="#" data-target="#exampleModalCenter{{ $item->id }}"
                                                data-toggle="modal" class="btn btn-xs btn-info">
                                                {{ $item->status }}
                                            </a>
                                        @else
                                            <span class="badge badge-success">
                                                {{ $item->status }}
                                            </span>
                                        @endif

                                    </td>
                                    <td>
                                        <div class="button-group">
                                            <a href="{{ route('orders.show', $item->id) }}" class="btn btn-xs btn-info">
                                                <i class="fa fa-eye"></i> View
                                            </a>
                                            <button class="btn btn-xs btn-danger">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </div>
                                    </td>
                                    @include('backend.orders.update-modal')
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
