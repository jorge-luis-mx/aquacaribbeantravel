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
                    <h1 class="mb-3">{{$tour->name}}</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$tour->name}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

    
    <!-- top Destination starts -->
    <section class="trending pt-6 pb-0 bg-lgrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <div id="highlight">
                            <!-- <div class="description-images mb-4">
                                <img src="{{asset('assets/images/trending/trending-large.jpg')}}" alt="" class="w-100 rounded">
                            </div> -->

                            @switch($tour->slug)
                                @case('chichen-itza')
                                    @include('components.chichenitza-components')
                                    @break
                                @case('holbox')
                                    @include('components.holbox-components')
                                    @break
                                @case('snorkeling-isla-mujeres')
                                    @include('components.snorkeling-components')
                                    @break
                                @case('tulum-cenotes')
                                    @include('components.tulum-components')
                                    @break
                                @case('xcaret')
                                    @include('components.xcaret-components')
                                    @break
                                @case('coco-bongo')
                                    @include('components.bongo-components')
                                    @break
                                @case('over-flight')
                                    @include('components.flight-components')
                                    @break
                                @case('xelha')
                                    @include('components.xelha-components')
                                    @break
                                @case('xenses')
                                    @include('components.xenses-components')
                                    @break
                                @case('xoximilco')
                                    @include('components.xoximilco-components')
                                    @break
                                @case('xplor')
                                    @include('components.xplor-components')
                                    @break
                                @default
                                    @include('components.default-component')
                            @endswitch

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ps-lg-4">
                    <div class="sidebar-sticky sticky1">
                        <div class="tabs-navbar bg-lgrey mb-4 bordernone rounded overflow-hidden">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <ul id="tabs" class="nav nav-tabs bordernone mb-0">
                                        <li class="active">
                                            <a data-toggle="tab" href="#highlight" class="rounded box-shadow mb-2 border-all">Highlight</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#iternary" class="rounded box-shadow mb-2 border-all">Iternary</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#single-map" class="rounded box-shadow mb-2 border-all">Map</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#single-review" class="rounded box-shadow mb-2 border-all">Reviews</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#single-comments" class="rounded box-shadow mb-2 border-all">Comments</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#single-add-review"  class="rounded box-shadow mb-2 border-all">Add Reviews</a>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top Destination ends -->
@endsection