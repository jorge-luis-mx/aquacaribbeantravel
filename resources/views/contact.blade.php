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
                    <h1 class="mb-3">Contact Us</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

    <!-- contact starts -->
    <section class="contact-main pt-6 pb-60">
        <div class="container">
            <div class="contact-info-main mt-0">
                <div class="row">
                    <div class="col-lg-10 col-offset-lg-1 mx-auto">
                        <div class="contact-info bg-white">
                            <div class="contact-info-title text-center mb-4 px-5">
                                <h3 class="mb-1">INFORMATION CONTACT US</h3>
                                <p class="mb-0">Sagittis posuere id nam quis vestibulum vestibulum a facilisi at elit hendrerit scelerisque sodales nam dis orci.</p>
                            </div>
                            <div class="contact-info-content row mb-1">
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                        <div class="info-icon mb-2">
                                            <i class="fa fa-map-marker-alt theme"></i>
                                        </div>
                                        <div class="info-content">
                                            <h3>Office Location</h3>
                                            <p class="m-0">Cancun Quintana Roo</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                        <div class="info-icon mb-2">
                                            <i class="fa fa-phone theme"></i>
                                        </div>
                                        <div class="info-content">
                                            <h3>Phone Number</h3>
                                            <p class="m-0"> + 52 (998) 6090002</p>
                                            <p class="m-0">  1 (305) 6868380</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mb-4">
                                    <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                        <div class="info-icon mb-2">
                                            <i class="fa fa-envelope theme"></i>
                                        </div>
                                        <div class="info-content ps-4">
                                            <h3>Email Address</h3>
                                            <p class="m-0">info@aquacaribbeantravel.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="contact-form1" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="map rounded overflow-hiddenb rounded mb-md-4">
                                            <div style="width: 100%">
                                                <!-- <iframe height="500" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> -->
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.5192510126394!2d-86.8406419256897!3d21.17152208286164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x61569430c30292e1%3A0x13a0f0272d957ecf!2sDevsCUN!5e0!3m2!1ses-419!2smx!4v1710223843014!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        
                                        <div id="contactform-error-msg"></div>
                                        
                                        <form id="frmCntct"  method="post" onsubmit="sendForm(event)">
                                            <div class="form-group mb-2">
                                                <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="email" name="email"  class="form-control" id="email" placeholder="Email">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
                                            </div>
                                            <div class="textarea mb-2">
                                                <textarea name="message" placeholder="Message"></textarea>
                                            </div>
                                            <div class="comment-btn text-center">
                                                <input type="submit" class="nir-btn" id="submit2" value="Send Message">
                                            </div>
                                            <div id="sended_email" class="d-none">
                                                <img src="{{ asset('assets/img/success.svg') }}" alt="" width="15%">
                                                <h5 class="mt-2">Correo enviado....</h5>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact Ends -->

@endsection
@section('scripts')
    <script>
        async function sendForm(e){
            e.preventDefault();

            const data = general.getDataForm("#frmCntct");
            const response = await general.execRequest('/contact-send-emails',data,'POST');

            if (response.success) {
                $("#frmCntct").addClass('d-none');
                $("#frmCntct")[0].reset();
                $("#sended_email").removeClass('d-none');

                setTimeout(function () {
                    $("#frmCntct").removeClass('d-none');
                    $("#sended_email").addClass('d-none');
                },3000)
            }else{
                const errors = response.hasOwnProperty('errors')? response.errors : {};
                for(var i in errors){
                    $("#"+ i).focus().css('border-color','red');
                }
            }

            var title = (response.success)? response.message : 'Errores';
            var errors = general.processResponseRequest(response);
            const type_alert = (response.success)? 'success' : 'error';
            general.showAlert(title, errors, type_alert);
        }


    </script>
@endsection