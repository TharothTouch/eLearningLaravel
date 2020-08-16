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
                                <li><a href="/contact">Contact</a></li>
                            </ul>

                            <!-- Get A Quote -->
                            {{-- <div class="get-a-quote ml-4 mr-3">
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
                        <h2 class="title">Bachelor Degree</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
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

    <!-- ****** Gallery Area Start ****** -->
    <section class="uza-portfolio-area section-padding-80">

        <!-- Portfolio Menu -->
        <div class="portfolio-menu text-center mb-80">
            <button class="btn active" data-filter="*">All Subjects</button>
            <button class="btn" data-filter=".ux-ui-design">Year 1</button>
            <button class="btn" data-filter=".market-analytics">Year 2</button>
            <button class="btn" data-filter=".marketing-social">Year 3</button>
            <button class="btn" data-filter=".marketing-social">Year 4</button>
            <button class="btn" data-filter=".marketing-social">Master Degree</button>
        </div>

        <div class="container-fluid">
            <div class="row uza-portfolio">

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item ux-ui-design">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/3.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>UX/UI Design</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/9.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Market Analytics</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item ux-ui-design">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/5.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>UX/UI Design</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/6.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Market Analytics</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics">
                        <div class="single-portfolio-slide">
                            <img src="./img/bg-img/6.jpg" alt="">
                            <!-- Overlay Effect -->
                            <div class="overlay-effect">
                                <h4>Market Analytics</h4>
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                            </div>
                            <!-- View More -->
                            <div class="view-more-btn">
                                <a href="#"><i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>


                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item ux-ui-design">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/10.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>UX/UI Design</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/11.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Market Analytics</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marketing-social">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/12.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Marketing Social</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marketing-social">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/4.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Marketing Social</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-12 text-center mt-30">
                    <a href="#" class="btn uza-btn btn-3">View More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Gallery Area End ****** -->

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

    @endsection
