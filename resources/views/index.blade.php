<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Comport</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/animate-3.7.0.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-4.7.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flat-icon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-4.1.3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <div class="preloader">
        <div class="spinner"></div>
    </div>


    <header class="header-area main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="index.html">home</a></li>
                            <li><a href="about.html">about us</a></li>
                            <li><a href="job-category.html">category</a></li>
                            <li><a href="index.html#">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-home.html">Blog Home</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">contact</a></li>
                            <li><a href="index.html#">pages</a>
                                <ul class="sub-menu">
                                    <li><a href="job-search.html">Job Search</a></li>
                                    <li><a href="job-single.html">Job Single</a></li>
                                    <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                    <li><a href="elements.html">Elements</a></li>
                                </ul>
                            </li>
                            <li class="menu-btn">
                                <a href="index.html#" class="login">log in</a>
                                <a href="index.html#" class="template-btn">sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="banner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-0">
                    <div class="banner-bg"></div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="banner-text">
                        <h1>find your dream <span>job</span> with comport</h1>
                        <p class="py-3">Wherein herb beginning. Moved after gathering. Sea hi crate fowl man replenish
                            place divided likeness herb one two lnetn Winged moving saw, may over.</p>
                        <a href="index.html#" class="secondary-btn">explore now<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="search-area">
        <div class="search-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="index.html#" class="d-md-flex justify-content-between">
                            <select>
                                <option value="1">All Category</option>
                                <option value="2">Part Time</option>
                                <option value="3">Full Time</option>
                                <option value="4">Remote</option>
                                <option value="5">Office Job</option>
                            </select>
                            <select>
                                <option value="1">Select Location</option>
                                <option value="2">Dhaka</option>
                                <option value="3">Rajshahi</option>
                                <option value="4">Barishal</option>
                                <option value="5">Noakhali</option>
                            </select>
                            <input type="text" placeholder="Search Keyword" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Search Keyword'" required>
                            <button type="submit" class="template-btn">find job</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="feature-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feature mb-4 mb-lg-0">
                        <h4>UX/UI Designer</h4>
                        <p class="py-3">There spirit beginning bearing the open at own every give appear in third you
                            sawe two boys</p>
                        <a href="index.html#" class="secondary-btn">explore now<span class="flaticon-next"></span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature mb-4 mb-lg-0">
                        <h4>web Designer</h4>
                        <p class="py-3">There spirit beginning bearing the open at own every give appear in third you
                            sawe two boys</p>
                        <a href="index.html#" class="secondary-btn">explore now<span class="flaticon-next"></span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <h4>Accounting and Finance</h4>
                        <p class="py-3">There spirit beginning bearing the open at own every give appear in third you
                            sawe two boys</p>
                        <a href="index.html#" class="secondary-btn">explore now<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="category-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>Find job by category</h2>
                        <p>Open lesser winged midst wherein may morning</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">
                        <img src="assets/images/cat1.png" alt="category">
                        <h4>accounting & Finance</h4>
                        <h5>250 open job</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">
                        <img src="assets/images/cat2.png" alt="category">
                        <h4>production & operation</h4>
                        <h5>250 open job</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">
                        <img src="assets/images/cat3.png" alt="category">
                        <h4>telecommunication</h4>
                        <h5>250 open job</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">
                        <img src="assets/images/cat4.png" alt="category">
                        <h4>garments & textile</h4>
                        <h5>250 open job</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4 mb-lg-0">
                        <img src="assets/images/cat5.png" alt="category">
                        <h4>marketing and sales</h4>
                        <h5>250 open job</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4 mb-lg-0">
                        <img src="assets/images/cat6.png" alt="category">
                        <h4>engineer & architech</h4>
                        <h5>250 open job</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4 mb-md-0">
                        <img src="assets/images/cat7.png" alt="category">
                        <h4>design & crative</h4>
                        <h5>250 open job</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center">
                        <img src="assets/images/cat8.png" alt="category">
                        <h4>customer support</h4>
                        <h5>250 open job</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="jobs-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jobs-title">
                        <h2>Browse recent jobs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="jobs-tab tab-item">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="index.html#recent"
                                    role="tab" aria-controls="home" aria-selected="true">recent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="index.html#full-time"
                                    role="tab" aria-controls="profile" aria-selected="false">full time</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="index.html#part-time"
                                    role="tab" aria-controls="part-time" aria-selected="false">part time</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab2" data-toggle="tab" href="index.html#intern"
                                    role="tab" aria-controls="intern" aria-selected="false">intern</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="recent" role="tabpanel" aria-labelledby="home-tab">
                            <div class="single-job mb-4 d-lg-flex justify-content-between">
                                <div class="job-text">
                                    <h4>Assistant Executive - Production/ Quality Control</h4>
                                    <ul class="mt-4">
                                        <li class="mb-3">
                                            <h5><i class="fa fa-map-marker"></i> new yourk, USA</h5>
                                        </li>
                                        <li class="mb-3">
                                            <h5><i class="fa fa-pie-chart"></i> Applied Chemistry & Chemical Engineering
                                                / Chemistry</h5>
                                        </li>
                                        <li>
                                            <h5><i class="fa fa-clock-o"></i> Deadline Deadline: Dec 11, 2018</h5>
                                        </li>
                                    </ul>
                                </div>
                                <div class="job-img align-self-center">
                                    <img src="assets/images/job1.png" alt="job">
                                </div>
                                <div class="job-btn align-self-center">
                                    <a href="index.html#" class="third-btn job-btn1">full time</a>
                                    <a href="index.html#" class="third-btn">apply</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="full-time" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="single-job mb-4 d-lg-flex justify-content-between">
                                <div class="job-text">
                                    <h4>Asst. Manager, Production (Woven Dyeing)</h4>
                                    <ul class="mt-4">
                                        <li class="mb-3">
                                            <h5><i class="fa fa-map-marker"></i> new yourk, USA</h5>
                                        </li>
                                        <li class="mb-3">
                                            <h5><i class="fa fa-pie-chart"></i> Applied Chemistry & Chemical Engineering
                                                / Chemistry</h5>
                                        </li>
                                        <li>
                                            <h5><i class="fa fa-clock-o"></i> Deadline Deadline: Dec 11, 2018</h5>
                                        </li>
                                    </ul>
                                </div>
                                <div class="job-img align-self-center">
                                    <img src="assets/images/job2.png" alt="job">
                                </div>
                                <div class="job-btn align-self-center">
                                    <a href="index.html#" class="third-btn job-btn2">full time</a>
                                    <a href="index.html#" class="third-btn">apply</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="part-time" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="single-job mb-4 d-lg-flex justify-content-between">
                                <div class="job-text">
                                    <h4>Deputy Manager/ Assistant Manager - Footwear</h4>
                                    <ul class="mt-4">
                                        <li class="mb-3">
                                            <h5><i class="fa fa-map-marker"></i> new yourk, USA</h5>
                                        </li>
                                        <li class="mb-3">
                                            <h5><i class="fa fa-pie-chart"></i> Applied Chemistry & Chemical Engineering
                                                / Chemistry</h5>
                                        </li>
                                        <li>
                                            <h5><i class="fa fa-clock-o"></i> Deadline Deadline: Dec 11, 2018</h5>
                                        </li>
                                    </ul>
                                </div>
                                <div class="job-img align-self-center">
                                    <img src="assets/images/job3.png" alt="job">
                                </div>
                                <div class="job-btn align-self-center">
                                    <a href="index.html#" class="third-btn job-btn3">full time</a>
                                    <a href="index.html#" class="third-btn">apply</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="intern" role="tabpanel" aria-labelledby="contact-tab2s">
                            <div class="single-job mb-4 d-lg-flex justify-content-between">
                                <div class="job-text">
                                    <h4>R&D Manager (Technical Lab Department)</h4>
                                    <ul class="mt-4">
                                        <li class="mb-3">
                                            <h5><i class="fa fa-map-marker"></i> new yourk, USA</h5>
                                        </li>
                                        <li class="mb-3">
                                            <h5><i class="fa fa-pie-chart"></i> Applied Chemistry & Chemical Engineering
                                                / Chemistry</h5>
                                        </li>
                                        <li>
                                            <h5><i class="fa fa-clock-o"></i> Deadline Deadline: Dec 11, 2018</h5>
                                        </li>
                                    </ul>
                                </div>
                                <div class="job-img align-self-center">
                                    <img src="assets/images/job4.png" alt="job">
                                </div>
                                <div class="job-btn align-self-center">
                                    <a href="index.html#" class="third-btn job-btn4">full time</a>
                                    <a href="index.html#" class="third-btn">apply</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="more-job-btn mt-5 text-center">
                <a href="index.html#" class="template-btn">more job post</a>
            </div>
        </div>
    </section>


    <section class="newsletter-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>Get job information daily</h2>
                        <p>Subscribe to our newsletter and get a coupon code!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="index.html#">
                        <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Your email here'" required>
                        <button type="submit" class="template-btn">subscribe now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section class="employee-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>Happy employee</h2>
                        <p>Open lesser winged midst wherein may morning</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="employee-slider owl-carousel">
                        <div class="single-slide d-sm-flex">
                            <div class="slide-img employee1">
                                <div class="hover-state">
                                    <div class="hover-text text-center">
                                        <h3>david aron</h3>
                                        <h5>Facebook</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-text align-self-center">
                                <i class="fa fa-quote-left"></i>
                                <p>Appear, called day. Sixth two after eve moved called winged very heaven two lights
                                    let all third gathered.</p>
                            </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="slide-img employee2">
                                <div class="hover-state">
                                    <div class="hover-text text-center">
                                        <h3>david aron</h3>
                                        <h5>Twitter</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-text align-self-center">
                                <i class="fa fa-quote-left"></i>
                                <p>Appear, called day. Sixth two after eve moved called winged very heaven two lights
                                    let all third gathered.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="blog" class="news-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>Company latest news</h2>
                        <p>Open lesser winged midst wherein may morning</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-news mb-5 mb-lg-0">
                        <div class="news-img news-img1"></div>
                        <div class="news-tag">
                            <ul class="my-4">
                                <li>
                                    <h5><i class="fa fa-calendar-o"></i> 20th sep, 2018</h5>
                                </li>
                                <li class="separator mx-2"><span></span></li>
                                <li>
                                    <h5><i class="fa fa-folder-open-o"></i> company</h5>
                                </li>
                            </ul>
                        </div>
                        <div class="news-title">
                            <h4><a href="index.html#">Lime recalls electric scooters over battery fire.</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news mb-5 mb-lg-0">
                        <div class="news-img news-img2"></div>
                        <div class="news-tag">
                            <ul class="my-4">
                                <li>
                                    <h5><i class="fa fa-calendar-o"></i> 18th sep, 2018</h5>
                                </li>
                                <li class="separator mx-2"><span></span></li>
                                <li>
                                    <h5><i class="fa fa-folder-open-o"></i> company</h5>
                                </li>
                            </ul>
                        </div>
                        <div class="news-title">
                            <h4><a href="index.html#">Apple resorts to promo deals trade to boost</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <div class="news-img news-img3"></div>
                        <div class="news-tag">
                            <ul class="my-4">
                                <li>
                                    <h5><i class="fa fa-calendar-o"></i> 25th sep, 2018</h5>
                                </li>
                                <li class="separator mx-2"><span></span></li>
                                <li>
                                    <h5><i class="fa fa-folder-open-o"></i> company</h5>
                                </li>
                            </ul>
                        </div>
                        <div class="news-title">
                            <h4><a href="index.html#">Lime recalls electric scooters over battery fire.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="download-area section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="download-text">
                        <h2>Download the app your mobile today</h2>
                        <p class="py-3">Light earth also land can't. May you midst shall lights blessed in lights Have
                            gathered image morning blessed grass him. Appear female rule all seas she'd winged</p>
                        <div class="download-button d-sm-flex flex-row justify-content-start">
                            <div class="download-btn mb-3 mb-sm-0 flex-row d-flex">
                                <i class="fa fa-apple" aria-hidden="true"></i>
                                <a href="index.html#">
                                    <p>
                                        <span>Available</span> <br>
                                        on App Store
                                    </p>
                                </a>
                            </div>
                            <div class="download-btn dark flex-row d-flex">
                                <i class="fa fa-android" aria-hidden="true"></i>
                                <a href="index.html#">
                                    <p>
                                        <span>Available</span> <br>
                                        on Play Store
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-0">
                    <div class="download-img"></div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer-area section-padding">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-3">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">top products</h3>
                            <ul>
                                <li class="mb-2"><a href="index.html#">managed website</a></li>
                                <li class="mb-2"><a href="index.html#">managed reputation</a></li>
                                <li class="mb-2"><a href="index.html#">power tools</a></li>
                                <li><a href="index.html#">marketing service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">newsletter</h3>
                            <p class="mb-4">You can trust us. we only send promo offers, not a single.</p>
                            <form action="index.html#">
                                <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Your email here'" required>
                                <button type="submit" class="template-btn">subscribe now</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 offset-xl-1 col-lg-3">
                        <div class="single-widge-home">
                            <h3 class="mb-4">instagram feed</h3>
                            <div class="feed">
                                <img src="assets/images/feed1.jpg" alt="feed">
                                <img src="assets/images/feed2.jpg" alt="feed">
                                <img src="assets/images/feed3.jpg" alt="feed">
                                <img src="assets/images/feed4.jpg" alt="feed">
                                <img src="assets/images/feed5.jpg" alt="feed">
                                <img src="assets/images/feed6.jpg" alt="feed">
                                <img src="assets/images/feed7.jpg" alt="feed">
                                <img src="assets/images/feed8.jpg" alt="feed">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <span>
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>

                        </span>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="index.html#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="index.html#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="index.html#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="assets/js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"81116082f8570db7","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>