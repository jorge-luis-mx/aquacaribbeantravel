@extends('layouts.app')

@section('metas')
    <meta name="description" content="" />
    <meta name="keywords" content="" />

@endsection

@section('content')

    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/bg/bg1.jpg);">
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
                <h2 class="mb-1"><span class="theme">Lorem ipsum dolor sit amet</span></h2>
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
                                    <h4><a >Alojamiento</a></h4>
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
                                    <h4><a >Paquetes Turísticos</a></h4>
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
                                    <h4><a >Actividades y Excursiones</a></h4>
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
                                    <h4><a >Servicios Personalizados</a></h4>
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

    @endsection