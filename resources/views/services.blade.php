@extends('layouts.app')

@section('metas')
    <meta name="description" content="" />
    <meta name="keywords" content="" />

@endsection

@section('content')

    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{asset('assets/images/banners/services.png')}});">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Our Services</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

    <!-- about-us starts -->
    <section class="about-us pb-6 pt-6" style="background-image:url(images/shape4.png); background-position:center;">
        <div class="container">
            
            <div class="section-title mb-6 w-50 mx-auto text-center">
                <!-- <h4 class="mb-1 theme1">Core of The Perfect Tour</h4> -->
                <!-- <h2 class="mb-1"><span class="theme">Services</span></h2> -->
                <p>Our services are tailor made to your needs and plans. Ask our representatives for our current offer!</p>
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
                                    <h4><a href="/contact-us">Accommodations</a></h4>
                                    <p class="mb-2">Regardless of your traveling style, we have the perfect lodging for you. From 
                                    luxurious resorts to cozy condos. We would be able to organize a comfortable and memorable stay.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="fas fa-hiking theme"></i>
                                    </div>
                                    <h4><a href="/contact-us">Packages</a></h4>
                                    <p class="mb-2">Simplify your travel planning with our complete tour packages. From weekend getaways to epic adventures, we've got you covered.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="fas fa-umbrella-beach theme"></i>
                                    </div>
                                    <h4><a href="/contact-us">Tours and excursions</a></h4>
                                    <p class="mb-2">Immerse yourself in local culture and discover the most impressive spots
                                        of each destination with our exciting activities and excursions.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="fas fa-users-cog theme"></i>
                                    </div>
                                    <h4><a href="/contact-us">Tailor made services</a></h4>
                                    <p class="mb-2">Our team of experts is here to help you on each step of the way.From travel advice 
                                    to assistance on emergencies, we are committed to rendering the best service possible.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="description mb-2">
                                    <h4>HOTELS</h4>
                                    <p>Plan your perfect Caribbean getaway with Aqua Caribbean Travel. Explore the
                                    breathtaking hotels and natural wonders of Cancun, Riviera Maya, and Tulum. Whether
                                    you&#39;re traveling as a couple or with your family, we guarantee a fun-filled and unforgettable
                                    experience amidst nature&#39;s beauty.</p>
                                    <p>We offer competitive vacation packages to popular chain hotels such as RIU, Dreams
                                    Resorts, Secrets Resorts, Nickelodeon, Palladium,and many more. With ground
                                    transportation included. Book with confidence knowing that we are certified travel agents
                                    dedicated to providing exceptional service.</p>
                            </div>
                            <div class="description mb-2">
                                    <h4>Packages</h4>
                                    <p>Simplify your travel planning with our complete tour packages. From weekend getaways to epic adventures, we&#39;ve got you covered.</p>
                            </div>
                            <div class="description mb-2">
                                    <h4>Tours</h4>
                                    <p>Here adventure and exploration await you. Immerse yourself in thrilling experiences
                                    guided by experts as you discover the most fascinating destinations.</p>
                            </div>
                            <div class="description mb-2">
                                    <h4>SPECIAL PACKAGES</h4>
                                    <p>Our team of experts is here to help you on each step of the way.
                                    From travel advice to assistance on emergencies, we are committed to rendering the best
                                    service possible.</p>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 mb-2">
                                            <div class="desc-box bg-grey p-4 rounded">
                                                <h5 class="mb-2">Bachelorette Getaways and wolf pack</h5>
                                                <ul>
                                                    <li class="d-block pb-1"><i class="fa fa-circle mr-1" style="font-size: 7px;"></i> Hotel all inclusive or Condo stay</li>
                                                    <li class="d-block pb-1"><i class="fa fa-circle mr-1" style="font-size: 7px;"></i> Dinner</li>
                                                    <li class="d-block pb-1"><i class="fa fa-circle mr-1" style="font-size: 7px;"></i> Welcome kit</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-2">
                                            <div class="desc-box bg-grey p-4 rounded">
                                                <h5 class="mb-2">Groups</h5>
                                                <ul>
                                                    <li class="d-block pb-1"><i class="fa fa-circle mr-1" style="font-size: 7px;"></i> All inclusive packages</li>
                                                    <li class="d-block pb-1"><i class="fa fa-circle mr-1" style="font-size: 7px;"></i> Hotels</li>
                                                    <li class="d-block pb-1"><i class="fa fa-circle mr-1" style="font-size: 7px;"></i> Condos</li>
                                                    <li class="d-block pb-1"><i class="fa fa-circle mr-1" style="font-size: 7px;"></i> Transportation</li>  
                                                    <li class="d-block pb-1"><i class="fa fa-circle mr-1" style="font-size: 7px;"></i> Excursions</li>                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-2">
                                            <div class="desc-box bg-grey p-4 rounded">
                                                <h5 class="mb-2">Graduation trips</h5>
                                                <ul>
                                                    <li class="d-block pb-1"><i class="fa fa-circle mr-1" style="font-size: 7px;"></i> All inclusive packages</li>
                                                    <li class="d-block pb-1"><i class="fa fa-circle mr-1" style="font-size: 7px;"></i> Hotels</li>
                                                    <li class="d-block pb-1"><i class="fa fa-circle mr-1" style="font-size: 7px;"></i> Condos</li>
                                                    <li class="d-block pb-1"><i class="fa fa-circle mr-1" style="font-size: 7px;"></i> Transportation</li>  
                                                    <li class="d-block pb-1"><i class="fa fa-circle mr-1" style="font-size: 7px;"></i> Excursions</li>                                                     
                                                </ul>
                                            </div>
                                        </div>
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

    @endsection