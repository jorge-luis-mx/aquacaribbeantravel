@extends('layouts.app')

@section('metas')
    <meta name="description" content="" />
    <meta name="keywords" content="" />

@endsection

@section('content')    
    
    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{asset('assets/images/banners/about-us.png')}});">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">About Us</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

    <!-- about-us starts -->
    <section class="about-us pt-6" style="background-image:url(images/background_pattern.png); background-position:bottom right;">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 ps-4">
                        <div class="about-content text-center text-lg-start">
                            <!-- <h4 class="theme d-inline-block mb-0">ABOUT US</h4> -->
                            <h2 class="border-b mb-2 pb-1">IN AQUA CARIBBEAN TRAVEL</h2>
                            <p class="border-b mb-2 pb-2">
                                we are as passionate about travel as you are. With years of experience in the travel industry, we have created a team of experts dedicated
                                to making every trip unforgettable. Our commitment to excellence and customer satisfaction
                                makes us your number one choice for all your travel needs.
                            </p>
                            <h4 class="theme d-inline-block mb-0">Reliable Experience</h4>
                            <p class="border-b mb-2 pb-2">With years of experience in the travel industry, you can trust in us to make your
                                 traveldreams come true.</p>
                            <h4 class="theme d-inline-block mb-0">Top notch customer service</h4> 
                            <P class="theme d-inline-block mb-0">Our team is available 24 hours all 7 days a week, to assist all concerns and needs.</P>
                            <h4 class="theme d-inline-block mb-0">Competitive rates</h4> 
                            <P class="theme d-inline-block mb-0">We offer competitive rates and exclusive offers so you can enjoy your trip to the most without breaking the bank.</P>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 pe-4">
                        <div class="about-image" style="animation:none; background:transparent;">
                            <img src="{{asset('assets/images/aqua-travel-1.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- Counter -->
                        <!-- <div class="counter-main w-75 float-start z-index3 position-relative">
                            <div class="counter p-4 pb-0 box-shadow bg-white rounded mt-minus">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">20</h2>
                                                <span class="m-0">Years Experiences</span>
                                            </div>
                                        </div>    
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">530</h2>
                                                <span class="m-0">Tour Packages</span>
                                            </div>
                                        </div>    
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">850</h2>
                                                <span class="m-0">Happy Customers</span>
                                            </div>
                                        </div>    
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">320</h2>
                                                <span class="m-0">Award Winning</span>
                                            </div>
                                        </div>    
                                    </div>


                                </div>
                            </div> 
                        </div> -->
                        <!-- End Counter -->
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
    </section>
    <!-- about-us ends -->
    
@endsection