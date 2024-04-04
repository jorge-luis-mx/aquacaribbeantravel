<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="csrf_token" data-csrf_token="{{ csrf_token() }}">
    @yield('metas')

    <title>Aquacaribbeantravel</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/logo.png')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="{{asset('build/assets/style-DbYOpgoN.css')}}" rel="stylesheet" type="text/css">
    
    <!--Plugin CSS-->
    <link href="{{asset('assets/css/plugin.css')}}" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/fonts/line-icons.css')}}" type="text/css">

</head>

<body>

    <!-- header starts -->
    <header class="main_header_area">
        <div class="header-content py-1 bg-theme">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="links">
                    <ul>
                        <li><a href="#" class="white"><i class="icon-phone white"></i>  + 52 (998) 6090002</a></li>
                        <li><a href="#" class="white"><i class="icon-phone white"></i>  + 1 (305) 6868380</a></li>
                        <li><a href="#" class="white"><i class="fab fa-whatsapp"></i> 998 3396618</a></li>
                    </ul>
                </div>
                <div class="links float-right">
                    <ul>  
                        <li><a href="https://www.instagram.com/aquacaribbeantravel?igsh=M2s0ZWg5a3RoYnFy" target="_blank" class="white"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.tiktok.com/@aquacaribbeantravel?_t=8kpMVRgyp4X&_r=1" target="_blank" class="white"><i class="fab fa-tiktok" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=61556738166552&mibextid=LQQJ4d" target="_blank" class="white"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Navigation Bar -->
        <div class="header_menu" id="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="/">
                                <img src="{{asset('assets/images/logo.png')}}" alt="image">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">

                                <li><a href="/">Home</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/about-us">About Us</a></li>
                                <li><a href="/contact-us">Contact Us</a></li>

                                
                            </ul>
                        </div><!-- /.navbar-collapse -->     
                        <div class="register-login d-flex align-items-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="me-3">
                               
                            </a>
                            
                        </div> 

                        <div id="slicknav-mobile"></div>
                    </div>
                </div><!-- /.container-fluid --> 
            </nav>
        </div>
        <!-- Navigation Bar Ends -->
    </header>
    <!-- header ends -->


    @yield('content')

    <!-- footer starts -->
    <footer class="pt-10 pb-4">
        <div class="appWhatsapp">
            <a href="https://api.whatsapp.com/send?phone=529983396618&text=Could%20you%20help%20me%20with%20a%20reservation?" 
                title="Whatsapp" alt="Whatsapp" target="_blank">
                <img src="{{asset('assets/images/whatsapp.webp')}}" title="imagen de whatsapp" alt="imagen de whatsapp">
            </a>
        </div>
        <!-- Instagram ends -->
        <div class="footer-upper pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 pe-4">
                        <div class="footer-about">
                            <img src="{{asset('assets/images/logo-aqua-caribbean.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">Quick link</h3>
                            <ul>
                                <li><a href="/about-us">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">Contact Us</h3>
                            <ul>
                                <li class="white"> + 52 (998) 6090002</li>
                                <li class="white"> + 1 (305) 6868380</li>
                                <li class="white">Carr. a Aeropuerto Cancún, 77500 Cancún, Q.R.</li>
                                <li class="white"> info@aquacaribbeantravel.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">Attention</h3>
                            <div class="newsletter-form ">
                                <p class="mb-3">Attention hours from 7:00 AM to 11:00 PM Monday to Sunday</p>
                                <!-- <form action="#" method="get" accept-charset="utf-8" class="border-0 d-flex align-items-center">
                                    <input type="text" placeholder="Email Address">
                                    <button class="nir-btn ms-2">Subscribe</button>
                                </form> -->
                            </div> 
                        </div>  
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                <div class="copyright-inner rounded p-3 d-md-flex align-items-center justify-content-between">
                    <div class="copyright-text">
                        <p class="m-0 white">2024 Aquacaribbeantravel. All rights reserved.</p>
                    </div>
                    <div class="social-links">
                        <ul>  
                            <li><a href="https://www.instagram.com/aquacaribbeantravel?igsh=M2s0ZWg5a3RoYnFy" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.tiktok.com/@aquacaribbeantravel?_t=8kpMVRgyp4X&_r=1" target="_blank"><i class="fab fa-tiktok" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=61556738166552&mibextid=LQQJ4d" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>    
            </div>
        </div>
    </footer>
    <!-- footer ends -->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/65f46e1f8d261e1b5f6dff78/1hp1csag2';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/particles.js')}}"></script>
    <script src="{{asset('assets/js/particlerun.js')}}"></script>
    <script src="{{asset('assets/js/plugin.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/custom-swiper.js')}}"></script>
    <script src="{{asset('assets/js/custom-nav.js')}}"></script>
    <script src="{{asset('assets/custom.js?v=1') }}"></script>
    @yield('scripts')

</body>
</html>