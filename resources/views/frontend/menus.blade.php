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
        <h3 class="header">Choose your Menu</h3>

        @foreach ($menus->chunk(3) as $items)
            <div class="row mt-4">
                @foreach ($items as $menu)
                    <div class="col-md-4">
                        <a href="{{ route('f.items', ['menu_id' => $menu->id]) }}">
                            <div class="card" style="width: 100%">
                                <div class="card-body">
                                    <img src="{{ file_exists($menu->image) ? asset($menu->image) : asset('frontend/images/Beef-Stew-Ugali-1.jpg') }}"
                                        alt="hotel1" />
                                </div>
                                <div class="card-footer">
                                    <div class="name">
                                        <p class="text-center">{{ $menu->name }}
                                            <sup><small class="badge badge-info">{{ $menu->items_count }}</small></sup>
                                        </p>
                                    </div>
                                    <div class="descrptn">
                                        {{-- <p class="text-center">Continental Cuisines</p> --}}
                                    </div>
                                    {{-- <div class="rate text-center">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star" style="color:gray"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        @endforeach

    </div>
@endsection
