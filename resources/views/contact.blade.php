@extends('layouts.master')

@section('content')


    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <!-- ***** Top Search Area Start ***** -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Search Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="./img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

<!-- Nav Start -->
<div class="classynav">
    <ul id="nav">
        <li><a href="/">Home</a></li>
        {{-- <li><a href="#">Categories</a>
            <ul class="dropdown">
                <li><a href="./about.html">- About</a></li>
                <li><a href="./services.html">- Services</a></li>
                <li><a href="./portfolio.html">-  Bachelor</a></li>
                <li><a href="./blog.html">- Blog</a></li>
                <li><a href="">- Technology</a></li>
                <li><a href="./contact.html">- Contact</a></li>

            </ul>
        </li> --}}
        <li><a href="/university">University</a>
            {{-- <ul class="dropdown">
                    <li><a href="./index.html">- RUPP</a>
                        <ul class="dropdown">
                            <li><a href="#">- Engineering</a>
                                <ul class="dropdown">
                                <li><a href="#">- Boi Engineering</a></li>
                                <li><a href="#">- IT Engineering</a></li>
                                <li><a href="#">- TE Engineering</a></li>
                            </ul>
                            </li>
                            <li><a href="#">- IT Science</a>
                                <li><a href="#">- Chemistry</a></li>
                                <li><a href="#">- History</a></li>
                                <li><a href="#">- Khmer</a></li>
                                <li><a href="#">- Physic</a></li>
                            </li>
                            <li><a href="#">- IFL</a>
                            <ul class="dropdown">
                                <li><a href="#">- Jpan</a></li>
                                <li><a href="#">- Chiness</a></li>
                                <li><a href="#">- Franch</a></li>
                                <li><a href="#">- English</a></li>
                                <li><a href="#">- Thialand</a></li>
                            </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="./about.html">- ITC</a></li>
                    <li><a href="./services.html">- Western</a></li>
                    <li><a href="./portfolio.html">- Zamon</a></li>
                </ul>
        </li>
        <li><a href="./portfolio.html">Bachelor</a>
            <ul class="dropdown">
                    <li><a href="./index.html">- IT Engineering</a>
                        <ul class="dropdown">
                            <li><a href="#">- Year 1</a></li>
                            <li><a href="#">- Year 2</a>
                                <ul class="dropdown">
                                    <li><a href="#">- Subject 01</a></li>
                                    <li><a href="#">- Subject 02</a></li>
                                    <li><a href="#">- Subject 03</a></li>
                                    <li><a href="#">- Subject 04</a></li>
                                </ul>
                            </li>
                            <li><a href="#">- Year 3</a></li>
                            <li><a href="#">- Year 4</a></li>
                        </ul>
                    </li>
                    <li><a href="./about.html">- Bio Engineering</a>
                        <ul class="dropdown">
                            <li><a href="#">- Year 1</a></li>
                            <li><a href="#">- Year 2</a>
                                <ul class="dropdown">
                                    <li><a href="#">- Subject 01</a></li>
                                    <li><a href="#">- Subject 02</a></li>
                                    <li><a href="#">- Subject 03</a></li>
                                    <li><a href="#">- Subject 04</a></li>
                                </ul>
                            </li>
                            <li><a href="#">- Year 3</a></li>
                            <li><a href="#">- Year 4</a></li>
                        </ul></li>
                    <li><a href="./services.html">- TE Engineering</a>
                        <ul class="dropdown">
                            <li><a href="#">- Year 1</a></li>
                            <li><a href="#">- Year 2</a>
                                <ul class="dropdown">
                                    <li><a href="#">- Subject 01</a></li>
                                    <li><a href="#">- Subject 02</a></li>
                                    <li><a href="#">- Subject 03</a></li>
                                    <li><a href="#">- Subject 04</a></li>
                                </ul>
                            </li>
                            <li><a href="#">- Year 3</a></li>
                            <li><a href="#">- Year 4</a></li>
                        </ul></li>
                </ul>
        </li> --}}
        <li><a href="/eLibrary">eLibrary</a></li>
        {{-- <li><a href="#">NEWS</a>
            <ul class="dropdown">
                <li><a href="./blog.html">- Samby news</a></li>
                <li><a href="./single-blog.html">- Hot news</a></li>
                <li><a href="./blog.html">- RFA</a></li>
                <li><a href="https://www.voanews.com/">- VOA</a></li>
                <li><a href="https://www.bnnbloomberg.ca/bnn-bloomberg-advisor/video/saving-for-retirement-avoiding-tfsa-and-rrsp-traps~1608878">- BNN</a></li>

            </ul>
        </li> --}}
        <li><a href="/contact">Contact</a></li>
    </ul>

    {{-- <!-- Get A Quote -->
    <div class="get-a-quote ml-4 mr-3">
        <a href="#" class="btn uza-btn">Get A Quote</a>
    </div> --}}

    <!-- Login / Register -->
    <div class="login-register-btn mx-3">
        <a href="#">Login <span>/ Register</span></a>
    </div>

    <!-- Search Icon -->
    <div class="search-icon" data-toggle="modal" data-target="#searchModal">
        <i class="icon_search"></i>
    </div>
</div>
<!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="./img/core-img/curve-5.png" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <section class="uza-contact-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Contact Form -->
                <div class="col-12 col-lg-8">
                    <div class="uza-contact-form mb-80">
                        <div class="contact-heading mb-50">
                            <h4>Thank you for your interest. <br>Please fill out the form below to inquire about our work in Digital.</h4>
                        </div>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="full-name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control mb-30" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="full-name" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="email" placeholder="Organization">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control mb-30" name="message" rows="8" cols="80" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn uza-btn btn-3 mt-15">Contact Us</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Single Contact Card -->
                <div class="col-12 col-lg-3">
                    <div class="contact-sidebar-area mb-80">
                        <!-- Single Sidebar Area -->
                        <div class="single-contact-card mb-50">
                            <h4>Contact Us</h4>
                            <h3>(+65) 1234 5678</h3>
                            <h6>hello.colorlib@gmail.com</h6>
                            <h6>Mon - Fri: 9:00 - 19:00 <br>Closed on Weekends</h6>
                        </div>

                        <!-- Single Sidebar Area -->
                        <div class="single-contact-card mb-50">
                            <h4>London</h4>
                            <h3>(+65) 2222 5678</h3>
                            <h6>49 Charing Cross Rd, London, UK <br>hello.colorlib@gmail.com</h6>
                        </div>

                        <!-- Single Sidebar Area -->
                        <div class="single-contact-card mb-50">
                            <h4>New York</h4>
                            <h3>(+65) 6666 5678</h3>
                            <h6>40 Baria Sreet 13/2 NY City, US <br>hello.colorlib@gmail.com</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Google Maps -->
                <div class="col-12">
                    <div class="google-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11956.9355465873!2d24.0768412544878!3d56.9550599906977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfb0e5073ded%3A0x400cfcd68f2fe30!2z4Kaw4Ka_4KaX4Ka-LCDgprLgp43gpq_gpr7gpp_gp43gpq3gpr_gpoY!5e0!3m2!1sbn!2sbd!4v1543911160102" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Area End ***** -->

    <!-- ***** Newsletter Area Start ***** -->
    <section class="uza-newsletter-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Newsletter Content -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="nl-content mb-80">
                        <h2>Subscribe to our Newsletter</h2>
                        <p>Subscribe our newsletter gor get notification about new updates, etc...</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="nl-form mb-80">
                        <form action="#" method="post">
                            <input type="email" name="nl-email" value="" placeholder="Your Email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Border Bottom -->
            <div class="border-line"></div>
        </div>
    </section>
    <!-- ***** Newsletter Area End ***** -->


@endsection
