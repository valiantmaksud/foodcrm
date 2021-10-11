@extends('frontend.master')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/hotels.css') }}" />
@endsection

@section('content')
    <div class="container mt-4" style="margin-top: 150px !important">
        <h3>Cart Item</h3>

        <div class="row mt-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>SL</td>
                        <td>Item</td>
                        <td>Qty</td>
                        <td>Amount</td>
                        <td>Total Amount</td>
                        <td>Action</td>
                    </tr>
                </thead>
                @php
                    $total = 0;
                @endphp
                <tbody>
                    @forelse ($carts as $item)
                        @php
                            $total += $item->amount * $item->quantity;
                        @endphp
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->item->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->amount }}</td>
                            <td>{{ $item->amount * $item->quantity }}</td>
                            <td>
                                <a href="{{ route('f.carts.destroy', $item->id) }}" class="btn btn-danger btn-sm">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="30">
                                No item found !
                            </td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Total Amount</td>
                        <td>{{ $total }}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="30">
                            @if ($carts->count() > 0)
                                <a href="#order" data-toggle="modal" class="btn btn-success pull-right">Order Now</a>
                            @endif
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="row mt-4">
            <div class="modal fade" id="order" tabindex="-1" role="dialog" aria-labelledby="foodModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header food-header">
                            <h5 class="modal-title">
                                Create Order
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('f.orders.store') }}" method="POST">

                                @csrf
                                <p for="">Total : <b>{{ $total }}</b></p>
                                <p for="">Discount : <b>0</b></p>
                                <p for="">Vat : <b>0</b></p>
                                <div class="form-group">
                                    <input type="text" name="delivery_address" class="form-control"
                                        placeholder="Delivery address..." required>
                                </div>
                                <input type="hidden" name="amount" class="form-control" value="{{ $total }}"
                                    required>

                                <button type="submit" class="btn align-right">
                                    Order Now
                                </button>
                            </form>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
