@extends('backend.master')

@section('css')
    <style>
        @media print {
            .print-none {
                display: none;
            }

            #print {
                display: block
            }
        }

    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title print-none">Orders</h4>
                    <!-- Invoice Header -->
                    <div id="print" style="padding: 0 10px;margin-bottom:20px">
                        <div class="row">


                            <!-- panel title -->
                            <h6 style="width: 100%;text-align: center;margin-top: 15px;">
                                <b style="padding: 10px 20px; border-radius: 10px; color: #000; border:1px solid #ddd;">
                                    Order Invoice
                                </b>
                            </h6>



                            <hr>


                            <!-- Customer Info Right side -->
                            <div class="customerInfo" style="width: 50%;float: left;">

                                <p class="patient"><b>Invoice No : </b>
                                    #{{ $order->id }}
                                </p>

                                <p class="patient"><b>Name : </b>
                                    {{ optional($order->user)->name }}
                                </p>
                                <p class="patient"><b>Mobile : </b>
                                    {{ optional($order->user)->mobile }}
                                </p>
                                <p class="patient"><b>Delivery Address : </b>
                                    {{ optional($order)->delivery_address }}
                                </p>


                            </div>

                            <!-- Customer Info Left side -->
                            <div class="customerInfo" style="width: 50%; float: right;">
                                <p class="text-right"><b> Date : </b>
                                    {{ $order->order_date }}
                                </p>
                            </div>

                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Menu</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th class="text-right">Total Price</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($order->details as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ optional($item->menu)->name }}</td>
                                        <td>{{ optional($item->item)->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->unit_price }}</td>
                                        <td class="text-right">{{ $item->total_price }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5" class="text-right no-border">
                                        Amount :</td>
                                    <td style="text-align: right">{{ $order->amount }} &#x09F3;</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-right no-border">
                                        Discount :</td>
                                    <td style="text-align: right">{{ $order->discount }} &#x09F3;</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-right no-border">
                                        Vat :</td>
                                    <td style="text-align: right">{{ $order->vat }} &#x09F3;</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-right no-border">
                                        Total Amount :</td>
                                    <td style="text-align: right">{{ $order->total_amount }} &#x09F3;</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>



                    <div class="row print-none" style="float: right;margin-top:10px">
                        <div>
                            <button class="btn btn-danger" onclick="window.print()">
                                <i class="fa fa-print"></i> Print
                            </button>
                        </div>
                        <div class="col-sm-1 col-sm-offset-11">
                            @if ($order->status != 'completed')
                                <a href="#" data-target="#exampleModalCenter{{ $order->id }}" data-toggle="modal"
                                    class="btn btn-xs btn-info">
                                    {{ $order->status }}
                                </a>
                            @else
                                <span class="badge badge-success">
                                    {{ $order->status }}
                                </span>
                            @endif
                        </div>


                        @php
                            $item = $order;
                        @endphp
                        @include('backend.orders.update-modal')
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
