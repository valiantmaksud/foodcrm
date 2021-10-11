@extends('frontend.master')

@section('content')
    <div class="container-fluid banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption">
                    <h1>Food Ordering System</h1>
                    <h2>Are you hungry?We got you sorted</h2>
                    <p>
                        Order your snacks,fruits and food using Food Ordering System by the click of a
                        button.
                    </p>
                    <center>
                        <a href="{{ route('f.menus') }}" class="text-center">
                            <button class="btn btn-orderr" type="submit">Order
                                Now
                            </button>
                        </a>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <!---about-->
    <div class="spacer"></div>
    <div class="container" id="about">
        <div class="row">
            <div class="col-md-6 about">
                <h1>About Us</h1>
                <p>
                    Let's eat!Everyone loves food and needs it to live.Where else to get
                    some if not Food Ordering System?Dial a deliver now.
                </p>
                <a class="btn btn-orderr" href="{{ route('f.menus') }}">Order Now</a>
            </div>
            <div class="col-md-6">
                <img src="images/testimonial8.jpeg" alt="" />
            </div>
        </div>
    </div>




@endsection
