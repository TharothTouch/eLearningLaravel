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
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search ...">
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
                                <li><a href="/about">About</a></li>
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
                        <h2 class="title">About</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
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

    <!-- ***** About Us Area Start ***** -->
    <section class="uza-about-us-area section-padding-80">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-80">
                        <img src="./img/bg-img/01.png" alt="">
                        <!-- Video Area -->
                        <div class="uza-video-area hi-icon-effect-8">
                            <a href="https://www.youtube.com/watch?v=_2LLXnUdUIc" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="section-heading mb-5">
                        <h2>Our Mission</h2>
                    </div>

                    <div class="about-us-content mb-80">
                        <div class="about-tab-area">
                            <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">CREATION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"> ANALYSIS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">STRATEGY</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Mona Tab Content -->
                        <div class="about-tab-content">
                            <div class="tab-content" id="mona_modelTabContent">
                                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna liquyam erat.</p>
                                        <a href="#" class="btn uza-btn mt-30">Get In Touch</a>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna liquyam erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                                        <a href="#" class="btn uza-btn mt-30">Get In Touch</a>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata. Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                                        <p>sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna liquyam erat.</p>
                                        <a href="#" class="btn uza-btn mt-30">Get In Touch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Background Pattern -->
        <div class="about-bg-pattern">
            <img src="./img/core-img/curve-2.png" alt="">
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Why Choose Us Area Start ***** -->
    <section class="uza-why-choose-us-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Choose Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="choose-us-content mb-80">
                        <div class="section-heading mb-4">
                            <h2>Our Features</h2>
                            <p>We have many features: </p>
                        </div>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                            We have eLibrary and have any kids of the books</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> The forum is the best way to make the communication</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> The user can share the book or important document</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Online learning with our professional teacher</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> We have the news from many website in the world</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> We are Learn new Technology from video</li>
                        </ul>
                    </div>
                </div>
                <!-- Choose Us Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="choose-us-thumbnail mb-80">
                        <img class="w-100" src="img/bg-img/022.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Why Choose Us Area End ***** -->

    <!-- ***** Team Member Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>My Team work</h2>
                        <p>We want to develop this website to be famouse.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Team Member Slides -->
                <div class="team-sildes owl-carousel">

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/018.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>DATABASE DESIGNER</h6>
                            <h4>SERN Mony/h4>
                            <p>Bachelor Degree at Royal university of Phnom Penh in Faculty of Engineering(Information Technology Engineering.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/019.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>DEVELOPER</h6>
                            <h4>MONY Pich</h4>
                            <p>Bachelor Degree at Royal university of Phnom Penh in Faculty of Engineering(Information Technology Engineering.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/20.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>UI/UX DESIGNER</h6>
                            <h4>CHIN Sophal</h4>
                            <p>Bachelor Degree at Royal university of Phnom Penh in Faculty of Engineering(Information Technology Engineering.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/21.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>DESIGNER</h6>
                            <h4>Roger Black</h4>
                            <p>Bachelor Degree at Royal university of Phnom Penh in Faculty of Engineering(Information Technology Engineering.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/18.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>DESIGNER</h6>
                            <h4>Roger Black</h4>
                            <p>Bachelor Degree at Royal university of Phnom Penh in Faculty of Engineering(Information Technology Engineering.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/19.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>SOFTWARE DEVELOPER</h6>
                            <h4>NGIN Hak</h4>
                            <p>Bachelor Degree at Royal university of Phnom Penh in Faculty of Engineering(Information Technology Engineering.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/20.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>UI/UX DESIGNER</h6>
                            <h4>CHIN Sophal</h4>
                            <p>Bachelor Degree at Royal university of Phnom Penh in Faculty of Engineering(Information Technology Engineering.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/18.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>DATABASE DESIGNER</h6>
                            <h4>SERN Mony</h4>
                            <p>Bachelor Degree at Royal university of Phnom Penh in Faculty of Engineering(Information Technology Engineering.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Border -->
        <div class="container">
            <div class="border-line mt-80"></div>
        </div>
    </section>
    <!-- ***** Team Member Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    <div class="uza-cta-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <div class="cta-content mb-80">
                        <h2>Interested in working with us?</h2>
                        <h6>Hit the button below or give us a call!</h6>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="cta-content mb-80">
                        <div class="call-now-btn">
                            <a href="#"><span>Call us:</span> (+855) 61 805 330</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** CTA Area End ***** -->

    <!-- ***** Client Feedback Area Start ***** -->
    <div class="clients-feedback-area section-padding-0-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Testimonial Slides -->
                    <div class="testimonial-slides owl-carousel">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide d-flex align-items-center">
                            <!-- Testimonial Thumbnail -->
                            <div class="testimonial-thumbnail">
                                <img src="./img/bg-img/20.png" alt="">
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-content">
                                <h4>“Colorlib Ltd’s ranking has gone up so much from the great work that your team has done and our brand get organic sales consistently from your efforts. We are happy that the results of your efforts were lasting and profitable.”</h4>
                                <!-- Ratings -->
                                <div class="ratings">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <!-- Author Info -->
                                <div class="author-info">
                                    <h5>CHIN Sophal <span>- UI/UX Designer</span></h5>
                                </div>
                                <!-- Quote Icon -->
                                <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide d-flex align-items-center">
                            <!-- Testimonial Thumbnail -->
                            <div class="testimonial-thumbnail">
                                <img src="./img/bg-img/21.png" alt="">
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-content">
                                <h4>“Colorlib Ltd’s ranking has gone up so much from the great work that your team has done and our brand get organic sales consistently from your efforts. We are happy that the results of your efforts were lasting and profitable.”</h4>
                                <!-- Ratings -->
                                <div class="ratings">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <!-- Author Info -->
                                <div class="author-info">
                                    <h5>MONY Pich <span>- Developer/span></h5>
                                </div>
                                <!-- Quote Icon -->
                                <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide d-flex align-items-center">
                            <!-- Testimonial Thumbnail -->
                            <div class="testimonial-thumbnail">
                                <img src="./img/bg-img/19.png" alt="">
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-content">
                                <h4>“Colorlib Ltd’s ranking has gone up so much from the great work that your team has done and our brand get organic sales consistently from your efforts. We are happy that the results of your efforts were lasting and profitable.”</h4>
                                <!-- Ratings -->
                                <div class="ratings">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <!-- Author Info -->
                                <div class="author-info">
                                    <h5>NGIN Hak <span>- Developer</span></h5>
                                </div>
                                <!-- Quote Icon -->
                                <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Client Feedback Area End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
    <div class="uza-cf-area section-padding-80-0">
        <div class="container">
            <div class="row">

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cf-area d-flex align-items-center mb-80">
                        <h2><span class="counter">12</span></h2>
                        <div class="cf-text">
                            <h6>Projects<br>Completed</h6>
                        </div>
                        <div class="bg-icon"><i class="icon_piechart"></i></div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cf-area d-flex align-items-center mb-80">
                        <h2><span class="counter">5</span></h2>
                        <div class="cf-text">
                            <h6>Happy<br>clients</h6>
                        </div>
                        <div class="bg-icon"><i class="icon_heart_alt"></i></div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cf-area d-flex align-items-center mb-80">
                        <h2><span class="counter">14</span></h2>
                        <div class="cf-text">
                            <h6>WEB<br>awards</h6>
                        </div>
                        <div class="bg-icon"><i class="icon_book_alt"></i></div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cf-area d-flex align-items-center mb-80">
                        <h2><span class="counter">9</span></h2>
                        <div class="cf-text">
                            <h6>Our<br>experts</h6>
                        </div>
                        <div class="bg-icon"><i class="icon_profile"></i></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ***** Cool Facts Area End ***** -->

    <!-- ***** Newsletter Area Start ***** -->
    <section class="uza-newsletter-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Newsletter Content -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="nl-content mb-80">
                        <h2>Subscribe to our Newsletter</h2>
                        <p>Subscribe our newsletter get notification about new updates, etc...</p>
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

