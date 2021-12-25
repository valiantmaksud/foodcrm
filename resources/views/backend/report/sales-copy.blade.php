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
                                    <input type="date" name="from" class="form-control" value="{{ request('from') }}">
                                </td>
                                <td>
                                    <input type="date" name="to" class="form-control" value="{{ request('to') }}">
                                </td>
                                <td>
                                    <div class="button-group">
                                        <button class="btn btn-xs btn-success" type="submit">
                                            <i class="fa fa-search"></i> Search
                                        </button>
                                        <a class="btn btn-xs btn-danger" href="{{ request()->url() }}">
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
                                <th>Total Delivered</th>
                                <th>Total Pending</th>
                                <th>Total Cancelled</th>
                                <th>Total Profit</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $grand_total_delivered = 0;
                                $grand_total_pending = 0;
                                $grand_total_cancelled = 0;
                                $grand_total_profit = 0;
                            @endphp

                            @foreach ($sales->groupBy('item_id') ?? [] as $key => $sale)
                                {{-- @dd($sale, $sale->withSum('order')) --}}

                                @php
                                    $grand_total_delivered += $total_delivered = optional($sale)
                                        ->order->where('status', 'completed')
                                        ->sum('total_amount');
                                    $grand_total_pending += $total_pending = optional($sale->order)
                                        ->where('status', 'pending')
                                        ->sum('total_amount');
                                    $grand_total_cancelled += $total_cancelled = optional($sale->order)
                                        ->where('status', 'cancelled')
                                        ->sum('total_amount');
                                    $grand_total_profit += $total_profit = $sale[$key]->unit_price - optional($sale[$key]->item)->item_cost;
                                    
                                @endphp

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ optional($sale[$key]->item)->name }}</td>
                                    <td>{{ optional($sale[$key]->menu)->name }}</td>
                                    <td>{{ optional($sale[$key]->order)->order_date }}</td>
                                    <td>{{ $total_delivered }}</td>
                                    <td>{{ $total_pending }}</td>
                                    <td>{{ $total_cancelled }}</td>
                                    <td>{{ $total_profit }}</td>

                                </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th colspan="4">
                                    Total Summary
                                </th>
                                <th>{{ $grand_total_delivered }}</th>
                                <th>{{ $grand_total_pending }}</th>
                                <th>{{ $grand_total_cancelled }}</th>
                                <th>{{ $grand_total_profit }}</th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>

    </div>
@endsection
