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

                            @foreach ($items ?? [] as $key => $item)
                                {{-- @dd($item->order_details) --}}

                                @php
                                    $total_delivered = $total_pending = $total_cancelled = 0;
                                    foreach ($item->order_details as $key => $detail) {
                                        if ($detail->order->status == 'completed') {
                                            $total_delivered += $detail->order->total_amount;
                                        }
                                        if ($detail->order->status == 'pending') {
                                            $total_pending += $detail->order->total_amount;
                                        }
                                        if ($detail->order->status == 'cancel') {
                                            $total_cancelled += $detail->order->total_amount;
                                        }
                                        // $total_delivered += $detail->order->where('status', 'completed')->sum('total_amount');
                                        // $total_pending += $detail->order->where('status', 'pending')->sum('total_amount');
                                        // $total_cancelled += $detail->order->where('status', 'cancel')->sum('total_amount');
                                    }
                                    
                                    $grand_total_delivered += $total_delivered;
                                    $grand_total_pending += $total_pending;
                                    $grand_total_cancelled += $total_cancelled;
                                    
                                    $grand_total_profit += $total_profit = $total_delivered - ($total_pending + $total_cancelled) > 0 ? $total_delivered - ($total_pending + $total_cancelled) : 0;
                                    
                                @endphp

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->order_details->last()->order->order_date }}</td>
                                    <td>{{ $total_delivered }}</td>
                                    <td>{{ $total_pending }}</td>
                                    <td>{{ $total_cancelled }}</td>
                                    <td>{{ $total_profit }}</td>


                                </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th colspan="3">
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
