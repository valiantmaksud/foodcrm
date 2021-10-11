@extends('frontend.master')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/hotels.css') }}" />
@endsection

@section('content')
    <div class="container mt-4" style="margin-top: 150px !important">
        <h3>Orders</h3>

        <div class="row mt-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>SL</td>
                        <td>Delivery address</td>
                        <td>Amount</td>
                        <td>Total amount</td>
                        <td>Order date</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->delivery_address }}</td>
                            <td>{{ $item->amount }}</td>
                            <td>{{ $item->total_amount }}</td>
                            <td>{{ $item->order_date }}</td>
                            <td>{{ $item->status }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="30">
                                No orders found!
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
@endsection
