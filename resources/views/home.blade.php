    
@extends('layouts.app')

@section('metas')
    <meta name="description" content="" />
    <meta name="keywords" content="" />

@endsection

@section('content')

    <!-- banner starts -->
    <section class="banner overflow-hidden">
        <div class="slider top50">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image:url(https://images.unsplash.com/photo-1610565094701-ddfce4af14b5?q=80&w=1385&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)"></div>
                            <div class="swiper-content">
                                <div class="entry-meta mb-2">
                                    <!-- <h5 class="entry-category mb-0 white">Amazing Places</h5> -->
                                </div>
                                <h1 class="mb-2"><a href="#" class="white">Lorem ipsum dolor sit </a></h1>
                                <p class="white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                <a href="/contact-us" class="nir-btn-black">Contact Us</a>
                            </div>
                            <div class="dot-overlay"></div>
                        </div> 
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image:url(https://images.unsplash.com/photo-1616423841125-8307665a0469?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)"></div>
                            <div class="swiper-content">
                                <div class="entry-meta mb-2">
                                    <!-- <h5 class="entry-category mb-0 white">Explore Travel</h5> -->
                                </div>
                                <h1 class="mb-2"><a href="#" class="white">Lorem ipsum dolor sit</a></h1>
                                <p class="white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                <div class="slider-button d-flex justify-content-center">
                                    <a href="/contact-us" class="nir-btn-black">Contact Us</a>
                                </div>
                            </div>
                            <div class="dot-overlay"></div>
                        </div> 
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner">
                           <div class="slide-image" style="background-image:url(https://images.unsplash.com/photo-1552074284-5e88ef1aef18?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)"></div>
                           <div class="swiper-content">
                                <div class="entry-meta mb-2">
                                    <!-- <h5 class="entry-category mb-0 white">Road To Travel</h5> -->
                                </div>
                                <h1 class="mb-2"><a href="#" class="white">Lorem ipsum dolor sit </a></h1>
                                <p class="white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                <a href="/contact-us" class="nir-btn-black">Contact Us</a>
                            </div>
                            <div class="dot-overlay"></div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>
    <!-- banner ends -->

    <!-- about-us starts -->
    <section class="about-us pb-6 pt-10">
        <div class="container">
            
            <div class="section-title mb-6 w-50 mx-auto text-center">
                <!-- <h4 class="mb-1 theme1">Lorem, ipsum dolor.</h4> -->
                <h2 class="mb-1">Our<span class="theme"> Services</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>

            <!-- why us starts -->
            <div class="why-us">
                <div class="why-us-box">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="fas fa-bed theme"></i>
                                    </div>
                                    <h4><a>Alojamiento</a></h4>
                                    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="fas fa-hiking theme"></i>
                                    </div>
                                    <h4><a>Paquetes Turísticos</a></h4>
                                    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="fas fa-umbrella-beach theme"></i>
                                    </div>
                                    <h4><a>Actividades y Excursiones</a></h4>
                                    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="fas fa-users-cog theme"></i>
                                    </div>
                                    <h4><a>Servicios Personalizados</a></h4>
                                    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- why us ends -->
        </div>
        <div class="white-overlay"></div>
    </section>
    <!-- about-us ends -->

    <!-- top Destination starts -->
    <section class="trending pb-0 pt-6">
        <div class="container">
            <div class="section-title mb-6 w-50 mx-auto text-center">
                <!-- <h4 class="mb-1 theme1">Top Destinations</h4> -->
                <h2 class="mb-1">Explore <span class="theme"> Destinations</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="row align-items-center">
                @foreach ($destinations as $index => $item)
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item1">
                        <div class="trend-image position-relative rounded">
                            <img src="{{ asset('assets/images/destination/'. $item->img) }}" alt="image">
                            <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                <div class="trend-content-title">
                                    <h3 class="mb-0 white fs-5">{{$item->name}}</h3>
                                </div>
                            </div>
                            <!-- <a href="#"> -->
                                <div class="color-overlay"></div>
                            <!-- </a> -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- top Destination ends -->


    <!-- best tour Starts -->
    <section class="trending bg-grey pt-17 pb-6">
        <div class="section-shape top-0" style="background-image: url({{asset('assets/images/shape8.png')}});"></div>
        <div class="container">
            <div class="row align-items-center justify-content-between mb-6 ">
                <div class="col-lg-7">
                    <div class="section-title text-center text-lg-start">
                        <!-- <h4 class="mb-1 theme1">Top Pick</h4> -->
                        <h2 class="mb-1"><span class="theme">Tours  Experiencias</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                <div class="col-lg-5">  
                </div>
            </div>
            <div class="trend-box">
                <div class="row item-slider">
                    @foreach ($tours as $index => $tour)
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item rounded box-shadow bg-white">
                            <div class="trend-image position-relative">
                                <img src="{{asset('assets/images/trending/trending2.jpg')}}" alt="image">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <h3 class="mb-1"><a href="tour/{{$tour->slug}}">{{$tour->name}}</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(5)</span>
                                </div>
                                <p class=" border-b pb-2 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> $170.00</span> | Per person</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>  

        </div>
    </section>
    <!-- best tour Ends -->

    <!-- Last Minute Deal Starts -->
    <section class="trending pb-9">
        <div class="container">
            <div class="section-title mb-6 w-75 mx-auto text-center">
                <!-- <h4 class="mb-1 theme1">Top Deals</h4> -->
                <!-- <h2 class="mb-1"><span class="theme">Lorem, ipsum dolor</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p> -->
            </div>  
            <div class="trend-box">
                <div class="row">
                    <div class="col-lg-3 mb-4">
                        <div class="trend-item1 rounded box-shadow bg-white">
                            <div class="trend-image position-relative">
                                <img src="{{asset('https://images.unsplash.com/photo-1605581813258-076a6654a37f?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')}}" alt="image" class="">
                                <div class="trend-content1 p-4">
                                    <h3 class="mb-1 white"><span  class="white">Experiencia Confiable:</span></h3>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author d-flex align-items-center">
                                            <p class="mb-0 white">Con años de experiencia en la industria, puedes confiar en nosotros para hacer realidad tus sueños de viaje.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="trend-item1 rounded box-shadow bg-white">
                            <div class="trend-image position-relative">
                                <img src="{{asset('https://images.pexels.com/photos/7968285/pexels-photo-7968285.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')}}" alt="image" class="">
                                <div class="trend-content1 p-4">
                                    <h3 class="mb-1 white"><span  class="white">Atención al Cliente de Primera Clase:</span></h3>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author d-flex align-items-center">
                                            <p class="mb-0 white">Nuestro equipo está disponible las 24 horas del día, los 7 días de la semana, para atender todas tus necesidades y preocupaciones.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="trend-item1 rounded box-shadow">
                            <div class="trend-image position-relative">
                                <img src="{{asset('https://plus.unsplash.com/premium_photo-1676517030737-5ac484676ea7?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')}}" alt="image" class="">
                                <div class="trend-content1 p-4">
                                    <h3 class="mb-1 white"><span  class="white">Precios Competitivos:</span></h3>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author d-flex align-items-center">
                                            <p class="mb-0 white">Competitivas y promociones exclusivas para que puedas disfrutar de tus viajes al máximo sin romper el banco.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="trend-item1 rounded box-shadow">
                            <div class="trend-image position-relative">
                                <img src="{{asset('https://images.pexels.com/photos/14380137/pexels-photo-14380137.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')}}" alt="image" class="">
                                <div class="trend-content1 p-4">

                                    <h3 class="mb-1 white"><span  class="white">Compromiso con la Calidad:</span></h3>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author d-flex align-items-center">
                                            <p class="mb-0 white">Nos asociamos con proveedores de confianza para garan5zar la calidad y la seguridad en cada aspecto de tu viaje.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>    
        </div>
    </section>
    <!-- Last Minute Deal Ends -->

    <!-- testimonial starts -->
    <section class="testimonial pt-10 pb-20"  style="background-image: url(https://images.unsplash.com/photo-1533443144047-ea8a81e83e68?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);">   
        <div class="container">
            <div class="testimonial-in">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="section-title">
                            <!-- <h4 class="mb-1 theme1">Our Testimonails</h4> -->
                            <h2 class="mb-1 white">Reviews</h2>
                            <p class="mb-0 white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row about-slider">
                            <div class="col-sm-4 item">
                                <div class="testimonial-item1">
                                    <div class="details d-flex">
                                        <i class="fa fa-quote-left fs-1 mb-0"></i>
                                        <div class="author-content ms-4">
                                            <p class="mb-4 white fs-5 fw-normal">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                                            <div class="rating-main d-flex align-items-center pb-2">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                            </div>
                                            <div class="author-info d-flex align-items-center">
                                                <img src="{{asset('assets/images/testimonial/img1.jpg')}}" alt="">
                                                <div class="author-title ms-3">
                                                    <h5 class="m-0 theme1">Jorge.</h5>
                                                    <span class="white">Gomez</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 item">
                                <div class="testimonial-item1">
                                    <div class="details d-flex">
                                        <i class="fa fa-quote-left fs-1 mb-0"></i>
                                        <div class="author-content ms-4">
                                            <p class="mb-4 white fs-5 fw-normal">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                                            <div class="rating-main d-flex align-items-center pb-2">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                            </div>
                                            <div class="author-info d-flex align-items-center">
                                                <img src="{{asset('assets/images/testimonial/img2.jpg')}}" alt="">
                                                <div class="author-title ms-3">
                                                    <h5 class="m-0 theme1">Jorge</h5>
                                                    <span class="white">Lorem, ipsum.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 item">
                                <div class="testimonial-item1">
                                    <div class="details d-flex">
                                        <i class="fa fa-quote-left fs-1 mb-0"></i>
                                        <div class="author-content ms-4">
                                            <p class="mb-4 white fs-5 fw-normal">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                                            <div class="author-info d-flex align-items-center">
                                                <img src="{{asset('assets/images/testimonial/img3.jpg')}}" alt="">
                                                <div class="author-title ms-3">
                                                    <h5 class="m-0 theme1">Jorge</h5>
                                                    <span class="white">Lorem, ipsum.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 

        <div class="dot-overlay"></div>   
    </section>
    <!-- testimonial Ends -->

    <!-- offer Packages Starts -->
    <section class="trending trend-packages pt-0 pb-0 z-index3">
        <div class="container">
            <div class="trend-box mt-minus">
                <div class="row review-slider1 mx-0">
                    @foreach ($tours as $index => $tour)
                    <div class="col-lg-6 px-2">
                        <div class="trend-full bg-white rounded box-shadow overflow-hidden">
                            <div class="row m-0">
                                <div class="col-lg-5 col-md-4 ps-md-0">
                                   <div class="trend-item2">
                                        <a href="tour-list.html" style="background-image: url(images/trending/trending1.jpg);"></a>
                                         <div class="color-overlay"></div>
                                    </div> 
                                </div>
                                <div class="col-lg-7 col-md-8">
                                    <div class="trend-content py-3 position-relative">
                                        <h3 class="mb-1"><a href="tour/{{$tour->slug}}">{{$tour->name}}</a></h3>
                                        <div class="rating-main d-flex align-items-center pb-2">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                                        <div class="trend-meta border-b pb-2 mb-2">
                                            <div class="entry-author theme">
                                                <!-- <i class="icon-calendar"></i> -->
                                                <!-- <span> 9 Days Tours</span> -->
                                            </div>
                                        </div>
                                        <div class="entry-meta">
                                            <div class="entry-author d-flex align-items-center">
                                                <p class="mb-0"><span class="theme fw-bold fs-5"> $170.00</span> | Per person</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                    <!-- <div class="col-lg-6 px-2">
                        <div class="trend-full bg-white rounded box-shadow overflow-hidden">
                            <div class="row m-0">
                                <div class="col-lg-5 col-md-4 ps-md-0">
                                   <div class="trend-item2">
                                        <a href="tour-list.html" style="background-image: url(images/trending/trending2.jpg);"></a>
                                         
                                         <div class="color-overlay"></div>
                                    </div> 
                                </div>
                                <div class="col-lg-7 col-md-8">
                                    <div class="trend-content py-3 position-relative">
                                      
                                        <h3 class="mb-1"><a href="tour-grid.html">Chichenitza</a></h3>
                                        <div class="rating-main d-flex align-items-center pb-2">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                            <span class="ms-2">(18)</span>
                                        </div>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                                        <div class="trend-meta border-b pb-2 mb-2">
                                            <div class="entry-author theme">
                                                <i class="icon-calendar"></i>
                                                <span> 7 Days Tours</span>
                                            </div>
                                        </div>
                                        <div class="entry-meta">
                                            <div class="entry-author d-flex align-items-center">
                                                <p class="mb-0"><span class="theme fw-bold fs-5"> $210.00</span> | Per person</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 px-2">
                        <div class="trend-full bg-white rounded box-shadow overflow-hidden">
                            <div class="row m-0">
                                <div class="col-lg-5 col-md-4 ps-md-0">
                                   <div class="trend-item2">
                                        <a href="tour-list.html" style="background-image: url(images/trending/trending3.jpg);"></a>
                                       
                                         <div class="color-overlay"></div>
                                    </div> 
                                </div>
                                <div class="col-lg-7 col-md-8">
                                    <div class="trend-content py-3 position-relative">
                                        
                                        <h3 class="mb-1"><a href="tour-grid.html">Norway Lake</a></h3>
                                        <div class="rating-main d-flex align-items-center pb-2">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                            <span class="ms-2">(17)</span>
                                        </div>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                                        <div class="trend-meta border-b pb-2 mb-2">
                                            <div class="entry-author theme">
                                                <i class="icon-calendar"></i>
                                                <span> 6 Days Tours</span>
                                            </div>
                                        </div>
                                        <div class="entry-meta">
                                            <div class="entry-author d-flex align-items-center">
                                                <p class="mb-0"><span class="theme fw-bold fs-5"> $185.00</span> | Per person</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 px-2">
                        <div class="trend-full bg-white rounded box-shadow overflow-hidden">
                            <div class="row m-0">
                                <div class="col-lg-5 col-md-4 ps-md-0">
                                   <div class="trend-item2">
                                        <a href="tour-list.html" style="background-image: url(images/trending/trending4.jpg);"></a>
                                        
                                         <div class="color-overlay"></div>
                                    </div> 
                                </div>
                                <div class="col-lg-7 col-md-8">
                                    <div class="trend-content py-3 position-relative">
                                        
                                        <h3 class="mb-1"><a href="tour-grid.html">Hurawalhi Island</a></h3>
                                        <div class="rating-main d-flex align-items-center pb-2">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                            <span class="ms-2">(32)</span>
                                        </div>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                                        <div class="trend-meta border-b pb-2 mb-2">
                                            <div class="entry-author theme">
                                                <i class="icon-calendar"></i>
                                                <span> 4 Days Tours</span>
                                            </div>
                                        </div>
                                        <div class="entry-meta">
                                            <div class="entry-author d-flex align-items-center">
                                                <p class="mb-0"><span class="theme fw-bold fs-5"> $260.00</span> | Per person</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div> 

        </div>
    </section>
    <!-- offer Packages Ends -->

    @include('components.galery')

    <!-- our teams starts -->
    <section class="our-team pb-0">
        <div class="container">
              
            <div class="section-title mb-6 w-75 mx-auto text-center">
                <!-- <h4 class="mb-1 theme1">Tour Guides</h4> -->
                <h2 class="mb-1">Meet Our <span class="theme">Excellent Guides</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>  
            <div class="team-main">
                <div class="row shop-slider">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list rounded">
                            <div class="team-image">
                                <img src="{{asset('assets/images/team/guia-tours.jpg')}}" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-theme">
                               <h4 class="mb-0 white">Jorge  Gomez</h4>
                                <!-- <p class="mb-0 white">Senior Agent</p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list rounded">
                            <div class="team-image">
                                <img src="{{asset('assets/images/team/img2.jpg')}}" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-theme">
                               <h4 class="mb-0 white">Jorge  Gomez</h4>
                                <!-- <p class="mb-0 white">Head Officer</p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list rounded">
                            <div class="team-image">
                                <img src="{{asset('assets/images/team/img4.jpg')}}" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-theme">
                               <h4 class="mb-0 white">Jorge  Gomez</h4>
                                <!-- <p class="mb-0 white">Supervisor</p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list rounded">
                            <div class="team-image">
                                <img src="{{asset('assets/images/team/img3.jpg')}}" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-theme">
                               <h4 class="mb-0 white">Jorge  Gomez</h4>
                                <!-- <p class="mb-0 white">Quality Assurance</p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list rounded">
                            <div class="team-image">
                                <img src="{{asset('assets/images/team/img4.jpg')}}" alt="team">
                            </div>
                            <div class="team-content text-center bg-theme p-3">
                               <h4 class="mb-0 white">Jorge  Gomez</h4>
                                <!-- <p class="mb-0 white">Asst. Manager</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our teams Ends -->


    @endsection