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
                                            <p class="font-weight-semibold mb-0">0</p>
                                        </div>
                                        <h3 class="font-weight-medium mb-4">0</h3>
                                    </div>
                                    <canvas class="mt-n4" height="90" id="total-revenue"></canva>
                                </div>
                            </div>
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title mb-0">Transaction</h4>
                                            <p class="font-weight-semibold mb-0">0</p>
                                        </div>
                                        <h3 class="font-weight-medium">0</h3>
                                    </div>
                                    <canvas class="mt-n3" height="90" id="total-transaction"></canva>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
