@extends('frontend.master')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/hotels.css') }}" />
    <style>
        .header {
            background-color: rgb(19, 53, 92);
            color: white;
            padding: 10px
        }

    </style>
@endsection

@section('content')
    <div class="container mt-4" style="margin-top: 150px !important">
        <h3 class="header">Choose your Item</h3>

        @if (session()->has('error'))
            <span class="text-danger">{{ session()->get('error') }}</span>
        @endif

        @forelse ($menu_items->chunk(3) as $items)
            <div class="row mt-4">
                @foreach ($items as $menu)
                    <div class="col-md-4">
                        <div class="card" style="width: 100%">
                            <div class="card-body">
                                <img src="{{ file_exists($menu->image) ? asset($menu->image) : asset('frontend/images/Beef-Stew-Ugali-1.jpg') }}"
                                    alt="hotel1" />
                            </div>
                            <div class="card-footer">
                                <div class="name">
                                    <p class="text-center">{{ $menu->name }}</p>
                                </div>
                                <div class="descrptn">
                                    <p class="text-center">{{ $menu->amount }}</p>
                                </div>
                                <div class="rate text-center">
                                    <button type="button" class="btn btn-xs btn-info btn-rounded" data-toggle="modal"
                                        data-target="#add_cart{{ $menu->id }}">
                                        Order
                                    </button>
                                </div>
                            </div>
                        </div>
                        @include('frontend.items.cart-modal')
                    </div>
                @endforeach

            </div>
        @empty
            <div class="row mt-4">
                <strong class="text-danger" style="font-size: 22px">No Item Found !</strong>
            </div>
        @endforelse

    </div>
@endsection


@section('js')
    <script>
        function cart(object, amount, type) {
            let qty = parseInt($(object).closest('.modal-footer').find('.item_qty').text());

            if (type == 'decrease') {
                if (qty > 1) {
                    qty = qty - 1;
                }
            } else {
                qty = qty + 1
            }

            $('.item_qty').text(parseInt(qty))
            amount = amount * qty;

            $(object).closest('.modal-footer').find('.amount').text(amount)
            $(object).closest('.modal-footer').find('.item_quantity').val(qty)
        }
    </script>
@endsection
