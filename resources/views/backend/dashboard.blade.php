@extends('backend.master')
@section('content')
    <div class="content-wrapper">

        <!-- Page Title Header Ends-->
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">

                                <div class="d-flex">
                                    <div class="wrapper">
                                        <h3 class="mb-0 font-weight-semibold">{{ $today_order }}</h3>
                                        <h5 class="mb-0 font-weight-medium text-primary">Today Sale</h5>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                                <div class="d-flex">
                                    <div class="wrapper">
                                        <h3 class="mb-0 font-weight-semibold">{{ $yesterday_order }}</h3>
                                        <h5 class="mb-0 font-weight-medium text-primary">Yesterday Sale</h5>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                                <div class="d-flex">
                                    <div class="wrapper">
                                        <h3 class="mb-0 font-weight-semibold">{{ $today_profit }}</h3>
                                        <h5 class="mb-0 font-weight-medium text-primary">Today Profit</h5>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                                <div class="d-flex">
                                    <div class="wrapper">
                                        <h3 class="mb-0 font-weight-semibold">{{ $yesterday_profit }}</h3>
                                        <h5 class="mb-0 font-weight-medium text-primary">Yesterday Profit</h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        Recent 10 Orders
                        <a href="{{ route('report.sales') }}" style="float: right;text-align:left">View Sale Report</a>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Item</th>
                                        <th>Menu</th>
                                        <th>Date</th>
                                        <th>Item Price</th>
                                        <th>Quantity</th>
                                        <th>Total Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sales ?? [] as $sale)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ optional($sale->item)->name }}</td>
                                            <td>{{ optional($sale->menu)->name }}</td>
                                            <td>{{ optional($sale->order)->order_date }}</td>
                                            <td>{{ $sale->unit_price }}</td>
                                            <td>{{ $sale->quantity }}</td>
                                            <td>{{ $sale->total_price }}</td>


                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
