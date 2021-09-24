@extends('frontend.master')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/hotels.css') }}" />
@endsection

@section('content')
    <div class="container mt-4" style="margin-top: 150px !important">
        <h3>Choose your Menu</h3>

        @foreach ($menus->chunk(3) as $items)
            <div class="row mt-4">
                @foreach ($items as $menu)
                    <div class="col-md-4">
                        <a href="{{ route('f.items', ['menu_id' => $menu->id]) }}">
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
                                        {{-- <p class="text-center">Continental Cuisines</p> --}}
                                    </div>
                                    <div class="rate text-center">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star" style="color:gray"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        @endforeach

    </div>
@endsection
