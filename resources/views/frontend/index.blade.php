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
                        <a href="hotelsPage.html"></a><button class="btn btn-orderr" type="submit">Order Now</button></a>
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
                <a href="hotelsPage.html"><button class="btn btn-orderr" type="submit">Order Now</button></a>
            </div>
            <div class="col-md-6">
                <img src="images/testimonial8.jpeg" alt="" />
            </div>
        </div>
    </div>

    <!------carousel-->


    <div class="container testimonial">
        <h1>Testimonials</h1>
        <div class="row">

            <div id="multi-item" class="carousel testimonial-carousel slide carousel-multi-item" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">
                        <div class="col-md-12">
                            <div class="testimonial">

                                <div class="avatar mx-auto">
                                    <img src="images/testimg1.jpg" class="rounded-circle img-fluid">
                                </div>
                                <h4>John Mark</h4>
                                <h6>Tm-Moringa School</h6>
                                </p>Its one of the best apps i have interacted with so far.I highly recommend that everyone
                                should have it.</p>


                            </div>
                        </div>



                    </div>
                    <!--second slide-->
                    <div class="carousel-item">


                        <div class="col-md-12">
                            <div class="testimonial">
                                <div class="avatar mx-auto">
                                    <img src="images/testimg2.jpg" class="rounded-circle img-fluid">
                                </div>

                                <h4>Blake Dabney</h4>
                                <h6>Matatu Owner</h6>
                                </p>If you love food like i do then you should have this app.</p>

                            </div>
                        </div>

                    </div>

                    <!--Third slide-->
                    <div class="carousel-item">
                        <div class="col-md-12">
                            <div class="testimonial">
                                <div class="avatar mx-auto">
                                    <img src="images/testimg3.jpg" class="rounded-circle img-fluid">
                                </div>
                                <h4>Mary Achieng</h4>
                                <h6>Menu Owner</h6>
                                </p>To the busy people like i we only need food where we are.Food Ordering System is the
                                best in deliverying and ordering food online.</p>
                            </div>
                        </div>


                    </div>


                </div>


            </div>


        </div>


    </div>


@endsection
