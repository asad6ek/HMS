<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('img/1.2.png')}}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="{{asset('js/html5shiv.min.js')}}"></script>

</head>
<body>
<div class="preloader">
    <div class="wrapper-triangle">
        <div class="pen">
            <div class="line-triangle">
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
            </div>
            <div class="line-triangle">
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
            </div>
            <div class="line-triangle">
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
            </div>
        </div>
    </div>
</div>
<div class="page">
    <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-inner-outer">
                    <div class="rd-navbar-inner">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel navbar-dark">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle navbar-dark" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand">
                                <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp"> <a class="brand" href="{{url('#')}}">
                                   H_M_S
                                </a></span></h3>

                            </div>
                        </div>

                        <div class="rd-navbar-right rd-navbar-nav-wrap">
                            <div class="rd-navbar-aside">
                                <ul class="rd-navbar-contacts-2">
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                            <div class="unit-body"><a class="phone" href="tel:#">+998 (99) 424-65-54</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                            <div class="unit-body"><a class="address" href="#">TATU UF </a></div>
                                        </div>
                                    </li>
                                </ul>
                                <br>

                                <ul class="rd-navbar-contacts-2">
                                    <li>
                                      @if(isset(Auth::user()->id))
                                              <a class="brand icon mdi mdi-account-off" href="{{ route('logout') }}"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>

                                        @else    <a class="brand icon mdi mdi-account-network" href="{{url('/login')}}">Login</a>
                                          @endif
                                    </li>

                                </ul>
                            </div>
                            <div class="rd-navbar-main">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="#">{{__('Bosh Menyu')}}</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">About us</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Typography</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Contacts</a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">


        <div class="swiper-wrapper text-sm-left">

            <div class="swiper-slide context-dark" data-slide-bg="images/slide-1-1920x753.jpg">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-auto col-md-auto  offset-lg-1 offset-xxl-0">

                                <h1 class="oh swiper-title">
                                    <span class="d-lg-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">
                                        H_M_S
                                    </span>
                                </h1>

                                <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="300">
                                   Birinchi Laravelda yozgan web saytim
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="swiper-slide context-dark" data-slide-bg="images/slide-2-1920x753.jpg">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-lg-12 offset-lg-1 offset-xxl-0">
                                <h1 class="oh swiper-title">
                                    <span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0">
                                        MVC
                                    </span>
                                </h1>

                                <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="300">
                                    mvc
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Swiper Pagination-->
        <div class="swiper-pagination" data-bullet-custom="true"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev">
            <div class="preview">
                <div class="preview__img"></div>
            </div>
            <div class="swiper-button-arrow"></div>
        </div>
        <div class="swiper-button-next">
            <div class="swiper-button-arrow"></div>
            <div class="preview">
                <div class="preview__img"></div>
            </div>
        </div>
    </section>

    <!-- What We Offer-->
    <section class="section section-md bg-default">
        <div class="container">
            <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Our Menu</span></h3>
            <div class="row row-md row-30">
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Services Terri-->
                        <article class="services-terri wow slideInUp">
                            <div class="services-terri-figure"><img src="{{asset('img/920.jpg')}}" alt="" width="370" height="278"/>
                            </div>

                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Services Terri-->
                        <article class="services-terri wow slideInDown">
                            <div class="services-terri-figure"><img src="{{asset('images/menu-2-370x278.jpg')}}" alt="" width="370" height="278"/>
                            </div>



                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Services Terri-->
                        <article class="services-terri wow slideInUp">
                            <div class="services-terri-figure"><img src="{{asset('images/menu-3-370x278.jpg')}}" alt="" width="370" height="278"/>
                            </div>

                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Services Terri-->
                        <article class="services-terri wow slideInDown">
                            <div class="services-terri-figure"><img src="{{asset('images/menu-4-370x278.jpg')}}" alt="" width="370" height="278"/>
                            </div>

                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Services Terri-->
                        <article class="services-terri wow slideInUp">
                            <div class="services-terri-figure"><img src="images/menu-5-370x278.jpg" alt="" width="370" height="278"/>
                            </div>

                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Services Terri-->
                        <article class="services-terri wow slideInDown">
                            <div class="services-terri-figure"><img src="images/menu-6-370x278.jpg" alt="" width="370" height="278"/>
                            </div>

                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section CTA-->
    <section class="primary-overlay section parallax-container" data-parallax-img="images/bg-3.jpg">
        <div class="parallax-content section-xl context-dark text-md-left">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-8 col-md-7 col-lg-5">
                        <div class="cta-modern">
                            <h3 class="cta-modern-title wow fadeInRight">Best atmosphere</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <p class="cta-modern-text oh-desktop" data-wow-delay=".1s"><span class="cta-modern-decor wow slideInLeft"></span><span class="d-inline-block wow slideInDown">Ben Smith, Founder</span></p><a class="button button-md button-secondary-2 button-winona wow fadeInUp" href="#" data-wow-delay=".2s">View Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Shop-->
    <section class="section section-lg bg-default offset-2">
        <div class="container">
            <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Lorem ipsum dolor</span></h3>
            <div class="row row-lg row-30">
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- Product-->
                    <article class="product wow fadeInLeft" data-wow-delay=".15s">
                        <div class="product-figure"><img src="images/product-1-161x162.png" alt="" width="161" height="162"/>
                        </div>
                        <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star text-gray-13"></span>
                        </div>
                        <h6 class="product-title">Lorem ipsum dolor</h6>
                        <div class="product-price-wrap">
                            <div class="product-price">$24.00</div>
                        </div>
                        <div class="product-button">
                            <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="#">Add to cart</a></div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- Product-->
                    <article class="product wow fadeInLeft" data-wow-delay=".1s">
                        <div class="product-figure"><img src="images/product-2-161x162.png" alt="" width="161" height="162"/>
                        </div>
                        <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                        </div>
                        <h6 class="product-title">Lorem ipsum dolor</h6>
                        <div class="product-price-wrap">
                            <div class="product-price">$24.00</div>
                        </div>
                        <div class="product-button">
                            <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="#">Add to cart</a></div>
                        </div><span class="product-badge product-badge-new">New</span>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- Product-->
                    <article class="product wow fadeInLeft" data-wow-delay=".05s">
                        <div class="product-figure"><img src="images/product-3-161x162.png" alt="" width="161" height="162"/>
                        </div>
                        <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star text-gray-13"></span>
                        </div>
                        <h6 class="product-title">Lorem ipsum dolor</h6>
                        <div class="product-price-wrap">
                            <div class="product-price">$24.00</div>
                        </div>
                        <div class="product-button">
                            <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="#">Add to cart</a></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Section CTA-->
    <section class="primary-overlay section parallax-container" data-parallax-img="images/bg-4.jpg">
        <div class="parallax-content section-xxl context-dark text-md-left">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-9 col-md-7 col-lg-5">
                        <div class="cta-modern">
                            <h3 class="cta-modern-title cta-modern-title-2 oh-desktop"><span class="d-inline-block wow fadeInLeft">Lorem ipsum dolor</span></h3>
                            <p class="cta-modern-text cta-modern-text-2 oh-desktop" data-wow-delay=".1s"><span class="cta-modern-decor cta-modern-decor-2 wow slideInLeft"></span><span class="d-inline-block wow slideInUp">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor</span></p><a class="button button-lg button-secondary button-winona wow fadeInRight" href="contacts.html" data-wow-delay=".2s">contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Offer-->
    <section class="section section-xl bg-default">
        <div class="container">
            <h3 class="wow fadeInLeft">What People Say</h3>
        </div>
        <div class="container container-style-1">
            <div class="owl-carousel owl-style-12" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-xl-margin="45" data-autoplay="true" data-nav="true" data-center="true" data-smart-speed="400">
                <!-- Quote Tara-->
                <article class="quote-tara">
                    <div class="quote-tara-caption">
                        <div class="quote-tara-text">
                            <p class="q">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="quote-tara-figure"><img src="images/user-6-115x115.jpg" alt="" width="115" height="115"/>
                        </div>
                    </div>
                    <h6 class="quote-tara-author">Ashley Fitzgerald</h6>
                    <div class="quote-tara-status">Client</div>
                </article>
                <!-- Quote Tara-->
                <article class="quote-tara">
                    <div class="quote-tara-caption">
                        <div class="quote-tara-text">
                            <p class="q">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="quote-tara-figure"><img src="images/user-8-115x115.jpg" alt="" width="115" height="115"/>
                        </div>
                    </div>
                    <h6 class="quote-tara-author">Stephanie Williams</h6>
                    <div class="quote-tara-status">Client</div>
                </article>
                <!-- Quote Tara-->
                <article class="quote-tara">
                    <div class="quote-tara-caption">
                        <div class="quote-tara-text">
                            <p class="q">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="quote-tara-figure"><img src="images/user-7-115x115.jpg" alt="" width="115" height="115"/>
                        </div>
                    </div>
                    <h6 class="quote-tara-author">Bill Johnson</h6>
                    <div class="quote-tara-status">Client</div>
                </article>
                <!-- Quote Tara-->
                <article class="quote-tara">
                    <div class="quote-tara-caption">
                        <div class="quote-tara-text">
                            <p class="q">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="quote-tara-figure"><img src="images/user-9-115x115.jpg" alt="" width="115" height="115"/>
                        </div>
                    </div>
                    <h6 class="quote-tara-author">Aaron Wilson</h6>
                    <div class="quote-tara-status">Client</div>
                </article>
            </div>
        </div>
    </section>



    <!-- Tell-->
    <section class="section section-sm section-first bg-default">
        <div class="container">
            <h3 class="heading-3">Book your Table</h3>
            <form class="rd-form rd-mailform form-style-1" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-20 gutters-20">
                    <div class="col-md-6 col-lg-4 oh-desktop">
                        <div class="form-wrap wow slideInDown">
                            <input class="form-input" id="contact-your-name-6" type="text" name="name" data-constraints="@Required">
                            <label class="form-label" for="contact-your-name-6">Your Name*</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 oh-desktop">
                        <div class="form-wrap wow slideInUp">
                            <input class="form-input" id="contact-email-6" type="email" name="email" data-constraints="@Email @Required">
                            <label class="form-label" for="contact-email-6">Your E-mail*</label>
                        </div>
                    </div>
                    <div class="col-lg-4 oh-desktop">
                        <div class="form-wrap wow slideInDown">
                            <!--Select 2-->
                            <select class="form-input" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                <option value="1">Select a Service</option>
                                <option value="2">Dine-In</option>
                                <option value="3">Carry-Out</option>
                                <option value="4">Event Catering</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap wow fadeIn">
                            <label class="form-label" for="contact-message-6">Message</label>
                            <textarea class="form-input textarea-lg" id="contact-message-6" name="message" data-constraints="@Required"></textarea>
                        </div>
                    </div>
                </div>
                <div class="group-custom-1 group-middle oh-desktop">
                    <button class="button button-lg button-primary button-winona wow fadeInRight" type="submit">Send message</button>
                    <!-- Quote Classic-->

                </div>
            </form>
        </div>
    </section>

    <!-- Section Services  Last section-->


    <!-- Page Footer-->
    <footer class="section footer-modern context-dark footer-modern-2">
       <div class="footer-modern-line-3">
            <div class="container">
                <div class="row row-10 justify-content-between">
                    <div class="col-md-6"><span>TATU UF  </span></div>
                    <div class="col-md-auto">
                        <!-- Rights-->
                        <p class="rights"><span class="copyright-year"></span><span></span><span>.&nbsp;</span><span>AlgoSoft</span>&copy;&nbsp;<span> &nbsp;<a href="#">HospitalMenegmentSystem</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="{{asset('js/core.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<!-- coded by Himic-->
</body>
</html>
