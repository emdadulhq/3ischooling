@extends('3i_school.layouts.master')

@section('title')
Contact
@stop

@section('content')

       <!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="sc-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('3i_school') }}/assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Contact Us</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.php">Home ></a>
                        </li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Contact Section Start -->
            <div class="contact-page-section pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row contact-address-section">
                        <div class="col-lg-4 lg-pl-0 md-mb-30">
                            <div class="contact-info contact-address">
                                <div class="icon-part sky-color">
                                    <i class="flaticon flaticon-call"></i>
                                </div>
                                <div class="content-part">
                                    <h5 class="info-subtitle">Call Us</h5>
                                    <ul class="contact-list">
                                        <li><span>Phone: </span><a href="tel:+880 1973-080878">+880 1973-080878</a></li>
                                        <li><span>Tell: </span><a href="tel:+(88)02000000">+(88)02000000</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="contact-info contact-mail">
                                <div class="icon-part">
                                    <i class="flaticon flaticon-mail"></i>
                                </div>
                                <div class="content-part">
                                    <h5 class="info-subtitle">Email Now</h5>
                                    <ul class="contact-list">
                                        <li><span>Email: </span><a href="mailto:info@3ischooling.com">info@3ischooling.com</a></li>
                                        <li><span>Office: </span><a href="mailto:hr@3ischooling.com">hr@3ischooling.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-4 lg-pr-0">
                            <div class="contact-info contact-phone">
                                <div class="icon-part yellow-color">
                                    <i class="flaticon flaticon-maps-and-flags"></i>
                                </div>
                                <div class="content-part">
                                    <h5 class="info-subtitle">Office Location</h5>
                                    <div class="address-des">
                                        Uttara, Dhaka, Bangladesh.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 md-mb-30">
                            <div class="contact-map">
                               <iframe src="https://maps.google.com/maps?q=mirpur%20stadium&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-7 pl-30 md-pl-15">
                            <div class="sc-quick-contact new-style">
                                <div class="inner-part mb-40">
                                    <h2 class="title mb-15">Send A Massage</h2>
                                    <p>Excepteur sint occaecat cupidatat non</p>
                                </div>
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="http://softcoders.net/demo/html/edula/mailer.php">
                                    <div class="row">
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="">
                                        </div>
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone" required="">
                                        </div>
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required="">
                                        </div>

                                        <div class="col-lg-12 mb-30">
                                            <textarea class="from-control" id="message" name="message" placeholder=" Message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input class="btn-send" type="submit" value="Submit Now">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Section End -->

        </div>
        <!-- Main content End -->

@stop
