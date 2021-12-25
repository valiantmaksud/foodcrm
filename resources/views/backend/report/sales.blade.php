@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sale Report</h4>

                    <form action="">
                        <table class="table table-bordered">
                            <tr>
                                <td>Item</td>
                                <td>From</td>
                                <td>To</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="item_name" value="{{ request('item_name') }}"
                                        class="form-control">
                                </td>
                                <td>
                                    <input type="date" name="from" class="form-control">
                                </td>
                                <td>
                                    <input type="date" name="to" class="form-control">
                                </td>
                                <td>
                                    <div class="button-group">
                                        <button class="btn btn-xs btn-success" type="submit">
                                            <i class="fa fa-search"></i> Search
                                        </button>
                                        <a class="btn btn-xs btn-danger" href="{{ request()->url() }}"
                                            data-toggle="modal">
                                            <i class="fa fa-refresh"></i> Refresh
                                        </a>
                                    </div>
                                </td>
                            </tr>

                        </table>
                    </form>

                    <hr>


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

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
