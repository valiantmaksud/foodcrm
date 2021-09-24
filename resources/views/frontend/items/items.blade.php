@extends('frontend.master')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/hotels.css') }}" />
@endsection

@section('content')
    <div class="container mt-4" style="margin-top: 150px !important">
        <h3>Choose your Item</h3>

        @foreach ($menu_items->chunk(3) as $items)
            <div class="row mt-4">
                @foreach ($items as $menu)
                    <div class="col-md-4">
                        <div class="card" style="width: 100%">
                            <div class="card-body">
                                <img src="{{ $menu->image ? asset($menu->image) : asset('frontend/images/Beef-Stew-Ugali-1.jpg') }}"
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
        @endforeach

    </div>
@endsection
