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
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-bodsy">
                        <div class="row">
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title mb-0">Total Revenue</h4>
                                            <p class="font-weight-semibold mb-0">+1.37%</p>
                                        </div>
                                        <h3 class="font-weight-medium mb-4">184.42K</h3>
                                    </div>
                                    <canvas class="mt-n4" height="90" id="total-revenue"></canva>
                                </div>
                            </div>
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title mb-0">Transaction</h4>
                                            <p class="font-weight-semibold mb-0">-2.87%</p>
                                        </div>
                                        <h3 class="font-weight-medium">147.7K</h3>
                                    </div>
                                    <canvas class="mt-n3" height="90" id="total-transaction"></canva>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <div class="wrapper">
                            <h4 class="card-title mb-0">Net Profit Margin</h4>
                            <p>Started collecting data from February 2019</p>
                            <div class="mb-4" id="net-profit-legend"></div>
                        </div>
                        <canvas class="my-auto mx-auto" height="250" id="net-profit"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
