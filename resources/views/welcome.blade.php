<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="css/app.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('layout.navbar')
@include('layout.sidemenu')

@include('sections.hero')
@include('sections.about-me')
@include('sections.skills')
@include('sections.resume')
<!--====================================================================
                           Start Section Process
   =====================================================================-->

<!--====================================================================
                        End Section Process
=====================================================================-->

<section class="process pt-100 pb-70">
    <div class="container">
        <div class="row">

            <div class="col-lg-10">
                <div class="section-title">
                    <div class="row ">
                        <div class="col-lg-5">
                            <!-- Title Of Section Center -->
                            <div class="section-title-left">
                                <h2>My Process</h2>
                                <div class="line"><span><i class="fas fa-angle-double-right"></i> 04.</span></div>
                                <h3>How I Working Process</h3>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <p>I Have A Passion For Creating Challenging, Intuitive And Beautiful Products, My Design
                                Process Is Very Hands-On And Visual.</p>
                        </div>

                    </div>


                </div>

            </div>


            <div class="col-lg-3 col-md-6">
                <div class="process-box">
                    <span>Search</span>
                    <h4>Research & Plan </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor.</p>
                    <div class="number-process">01.</div>
                </div>

            </div>


            <div class="col-lg-3 col-md-6">
                <div class="process-box">
                    <span>Sketch</span>
                    <h4>Prototyping</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor.</p>
                    <div class="number-process">02.</div>
                </div>

            </div>


            <div class="col-lg-3 col-md-6">
                <div class="process-box">
                    <span>Create</span>
                    <h4>Design Layout</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor.</p>
                    <div class="number-process">03.</div>
                </div>

            </div>


            <div class="col-lg-3 col-md-6">
                <div class="process-box">
                    <span>Launch</span>
                    <h4>Test & Launch</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor.</p>
                    <div class="number-process">04.</div>
                </div>

            </div>


        </div>
    </div>
</section>

<!--====================================================================
                         Start Section Services
 =====================================================================-->
<section id="service" class="services pt-100 pb-70">
    <!--========== My Services Info ==========-->
    <div class="container">

        <div class="row">


            <div class="col-lg-10">
                <div class="section-title">
                    <div class="row ">
                        <div class="col-lg-5">
                            <!-- Title Of Section Center -->
                            <div class="section-title-left">
                                <h2>My Services</h2>
                                <div class="line"><span><i class="fas fa-angle-double-right"></i> 05.</span></div>
                                <h3>What Love I Do</h3>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <p>I Have A Passion For Creating Challenging, Intuitive And Beautiful Products, My Design
                                Process Is Very Hands-On And Visual.</p>
                        </div>

                    </div>


                </div>

            </div>


            <!-- Services Items Column -->
            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <div class="box-overlay"></div>
                    <div class="icon-services">
                        <span><i class="icon icon-basic-lightbulb"></i></span>
                    </div>
                    <h4>Idea sharing</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut
                        labore dolore magna.</p>
                    <span class="number-bg">01.</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <div class="box-overlay"></div>
                    <div class="icon-services">
                        <span><i class="icon icon-basic-laptop"></i></span>
                    </div>
                    <h4>UI/UX Design </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut
                        labore dolore magna.</p>
                    <span class="number-bg">02.</span>
                </div>
            </div>


            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <div class="box-overlay"></div>
                    <div class="icon-services">
                        <span><i class="icon icon-basic-postcard"></i></span>
                    </div>
                    <h4>Layout Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut
                        labore dolore magna.</p>
                    <span class="number-bg">03.</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <div class="box-overlay"></div>
                    <div class="icon-services">
                        <span><i class="icon icon-basic-flag1"></i></span>
                    </div>
                    <h4>Branding</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut
                        labore dolore magna.</p>
                    <span class="number-bg">04.</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <div class="box-overlay"></div>
                    <div class="icon-services">
                        <span><i class="icon icon-basic-globe"></i></span>
                    </div>
                    <h4>SEO Optimized</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut
                        labore dolore magna.</p>
                    <span class="number-bg">05.</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <div class="box-overlay"></div>
                    <div class="icon-services">
                        <span><i class="icon icon-basic-headset"></i></span>
                    </div>
                    <h4>Fast Support</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut
                        labore dolore magna.</p>
                    <span class="number-bg">06.</span>
                </div>
            </div>

        </div>
    </div>
</section>
<!--====================================================================
                        End Section Services
=====================================================================-->


<!--====================================================================
                         Start Section Portfolio
 =====================================================================-->
<section id="portfolio" class="portfolio pt-100 pb-70">
    <div class="container">
        <div class="row">


            <div class="col-lg-10">
                <div class="section-title">
                    <div class="row ">
                        <div class="col-lg-5">
                            <!-- Title Of Section Center -->
                            <div class="section-title-left">
                                <h2>My Portfolio</h2>
                                <div class="line"><span><i class="fas fa-angle-double-right"></i> 06.</span></div>
                                <h3>Let's See My Work</h3>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <p>I Have A Passion For Creating Challenging, Intuitive And Beautiful Products, My Design
                                Process Is Very Hands-On And Visual.</p>
                        </div>

                    </div>


                </div>
                <div class="filter-group">
                    <!-- Control List -->
                    <ul id="control" class="list-control">
                        <li class="active" data-filter="all">All</li>
                        <li data-filter="1">Web Desing</li>
                        <li data-filter="2">Graphic Desing</li>
                        <li data-filter="3">Branding</li>
                    </ul>
                </div>
            </div>


        </div>


        <!-- End Row 1 Column -->
        <!-- Start Row 2 Column -->
        <div id="filtr-container" class="row">


            <!-- Column Image -->
            <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-sort="value">
                <div class="my-work">
                    <div class="image">
                        <img class="img-fliud" src="http://placehold.it/600x500" alt="my-work">
                        <a class="overlay" href="http://placehold.it/600x500">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                        </a>
                    </div>

                    <div class="footer-work">
                        <h4>Free Mockup</h4>
                        <div class="content-work">Web Design, Branding</div>
                    </div>

                </div>
            </div>


            <!-- Column Image -->
            <div class="col-md-6 col-lg-4 filtr-item" data-category="3" data-sort="value">
                <div class="my-work">
                    <div class="image">
                        <img class="img-fliud" src="http://placehold.it/600x500" alt="my-work">
                        <a class="overlay" href="http://placehold.it/600x500">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                        </a>
                    </div>

                    <div class="footer-work">
                        <h4>Bag Mockup</h4>
                        <div class="content-work">Web Design, Branding</div>
                    </div>

                </div>
            </div>


            <!-- Column Image -->
            <div class="col-md-6 col-lg-4 filtr-item" data-category="2" data-sort="value">
                <div class="my-work">
                    <div class="image">
                        <img class="img-fliud" src="http://placehold.it/600x500" alt="my-work">
                        <a class="overlay" href="http://placehold.it/600x500">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                        </a>
                    </div>

                    <div class="footer-work">
                        <h4>Plastic Pouch</h4>
                        <div class="content-work">Graphic Desing</div>
                    </div>
                </div>
            </div>

            <!-- Column Image -->
            <div class="col-md-6 col-lg-4 filtr-item" data-category="3" data-sort="value">
                <div class="my-work">

                    <div class="image">
                        <img class="img-fliud" src="http://placehold.it/600x500" alt="my-work">
                        <a class="overlay" href="http://placehold.it/600x500">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                        </a>
                    </div>

                    <div class="footer-work">
                        <h4>Mockup Shopping</h4>
                        <div class="content-work">Graphic Desing</div>
                    </div>
                </div>
            </div>
            <!-- Column Image -->
            <div class="col-md-6 col-lg-4 filtr-item" data-category="2" data-sort="value">
                <div class="my-work">
                    <div class="image">
                        <img class="img-fliud" src="http://placehold.it/600x500" alt="my-work">
                        <a class="overlay" href="http://placehold.it/600x500">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                        </a>
                    </div>

                    <div class="footer-work">
                        <h4>Smart Design</h4>
                        <div class="content-work">Web Design</div>
                    </div>
                </div>
            </div>

            <!-- Column Image -->
            <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-sort="value">
                <div class="my-work">
                    <div class="image">
                        <img class="img-fliud" src="http://placehold.it/600x500" alt="my-work">
                        <a class="overlay" href="http://placehold.it/600x500">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                        </a>
                    </div>

                    <div class="footer-work">
                        <h4>Lap El Tag</h4>
                        <div class="content-work">Branding</div>
                    </div>

                </div>
            </div>

        </div>


    </div>
</section>
<!--====================================================================
                            End Section Portfolio
=====================================================================-->


<!--====================================================================
                           Start Testimonials
   =====================================================================-->
<section id="testimonials" class="testimonials ptb-100">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">


            <div class="col-lg-10">
                <div class="section-title">
                    <div class="row ">
                        <div class="col-lg-5">
                            <!-- Title Of Section Center -->
                            <div class="section-title-left">
                                <h2>My Cleints</h2>
                                <div class="line"><span><i class="fas fa-angle-double-right"></i> 07.</span></div>
                                <h3>What Cleints Say</h3>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <p>I Have A Passion For Creating Challenging, Intuitive And Beautiful Products, My Design
                                Process Is Very Hands-On And Visual.</p>
                        </div>

                    </div>


                </div>
            </div>


            <div class="col-12">
                <!--Testimonials Item -->
                <div class="owl-carousel testimonial">

                    <!-- New Item -->
                    <div class="testmonail-item">
                        <div class="owl-item">
                            <div class="testmonail-box">

                                <ul class="list-stars">
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                </ul>

                                <div class="inner-test">
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry consectetur adipisicing elit et dolore magna aliqua Lorem.</p>

                                </div>

                                <div class="clearfix"></div>
                                <!-- Testmonail Image -->
                                <div class="client-img">
                                    <img src="http://placehold.it/100x100" alt="Client">
                                </div>
                                <div class="author-details">
                                    <h6> Rabie Elkheir </h6>
                                    <span>Envato Market</span>
                                </div>

                                <div class="quote-icon">
                                    <i class="fas fa-quote-left fa-2x"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- New Item -->
                    <div class="testmonail-item">
                        <div class="owl-item">
                            <div class="testmonail-box">

                                <ul class="list-stars">
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                </ul>

                                <div class="inner-test">
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry consectetur adipisicing elit et dolore magna aliqua Lorem.</p>

                                </div>

                                <div class="clearfix"></div>
                                <!-- Testmonail Image -->
                                <div class="client-img">
                                    <img src="http://placehold.it/100x100" alt="Client">
                                </div>
                                <div class="author-details">
                                    <h6> Khaoula Bella </h6>
                                    <span>Envato Market</span>
                                </div>

                                <div class="quote-icon">
                                    <i class="fas fa-quote-left fa-2x"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- New Item -->
                    <div class="testmonail-item">
                        <div class="owl-item">
                            <div class="testmonail-box">

                                <ul class="list-stars">
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                </ul>

                                <div class="inner-test">
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry consectetur adipisicing elit et dolore magna aliqua Lorem.</p>

                                </div>

                                <div class="clearfix"></div>
                                <!-- Testmonail Image -->
                                <div class="client-img">
                                    <img src="http://placehold.it/100x100" alt="Client">
                                </div>
                                <div class="author-details">
                                    <h6> Ahamed Nada </h6>
                                    <span>Envato Market</span>
                                </div>

                                <div class="quote-icon">
                                    <i class="fas fa-quote-left fa-2x"></i>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- New Item -->
                    <div class="testmonail-item">
                        <div class="owl-item">
                            <div class="testmonail-box">

                                <ul class="list-stars">
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                    <li><i class="fas fa-star fa-2x"></i></li>
                                </ul>

                                <div class="inner-test">
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry consectetur adipisicing elit et dolore magna aliqua Lorem.</p>

                                </div>

                                <div class="clearfix"></div>
                                <!-- Testmonail Image -->
                                <div class="client-img">
                                    <img src="http://placehold.it/100x100" alt="Client">
                                </div>
                                <div class="author-details">
                                    <h6>Mahmoud Alalla</h6>
                                    <span>Envato Market</span>
                                </div>

                                <div class="quote-icon">
                                    <i class="fas fa-quote-left fa-2x"></i>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!--====================================================================
                        End Testimonials
=====================================================================-->

<!--====================================================================
                        Start Section Blog
=====================================================================-->
<section id="blog" class="blog pt-100 pb-70">
    <div class="container">
        <div class="row">


            <div class="col-lg-10">
                <div class="section-title">
                    <div class="row ">
                        <div class="col-lg-5">
                            <!-- Title Of Section Center -->
                            <div class="section-title-left">
                                <h2>My Blog</h2>
                                <div class="line"><span><i class="fas fa-angle-double-right"></i> 08.</span></div>
                                <h3>My Recent Posts</h3>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <p>I Have A Passion For Creating Challenging, Intuitive And Beautiful Products, My Design
                                Process Is Very Hands-On And Visual.</p>
                        </div>

                    </div>


                </div>
            </div>


            <!-- New Item -->
            <div class="col-lg-4">
                <div class="blog-item">
                    <!-- Blog Image -->
                    <div class="blog-img">
                        <a href="blog.html"><img src="http://placehold.it/680x450" alt="blog"></a>

                    </div>
                    <!-- Blog info -->
                    <div class="blog-info">

                        <ul class="date">
                            <li>25 NOV 19</li>
                            <li><a href="#">Markting</a></li>
                        </ul>


                        <div class="title-post">

                            <a href="blog.html"><h5>The Best Sale Marketer Of The Next Year</h5></a>
                        </div>

                        <div class="post-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim Magna...</p>
                        </div>

                        <div class="author">
                            <a href="blog.html" class="link">Read More</a>
                        </div>
                    </div>

                </div>
            </div>


            <!-- New Item -->
            <div class="col-lg-4">
                <div class="blog-item">
                    <!-- Blog Image -->
                    <div class="blog-img">
                        <a href="blog.html"><img src="http://placehold.it/680x450" alt="blog"></a>

                    </div>

                    <!-- Blog info -->
                    <div class="blog-info">

                        <ul class="date">
                            <li>25 NOV 19</li>
                            <li><a href="#">Design</a></li>
                        </ul>


                        <div class="title-post">

                            <a href="blog.html"><h5>How To Make Your Ideas Became True</h5></a>
                        </div>

                        <div class="post-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim Magna...</p>
                        </div>

                        <div class="author">
                            <a href="blog.html" class="link">Read More</a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- New Item -->
            <div class="col-lg-4">
                <div class="blog-item">
                    <!-- Blog Image -->
                    <div class="blog-img">
                        <a href="blog.html"><img src="http://placehold.it/680x450" alt="blog"></a>

                    </div>
                    <!-- Blog info -->
                    <div class="blog-info">

                        <ul class="date">
                            <li>25 NOV 19</li>
                            <li><a href="#">Web</a></li>
                        </ul>


                        <div class="title-post">

                            <a href="blog.html"><h5>What Gets In The Way Of Stategy</h5></a>
                        </div>

                        <div class="post-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim Magna...</p>
                        </div>

                        <div class="author">
                            <a href="blog.html" class="link">Read More</a>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</section>

<!--====================================================================
                        End Section Blog
=====================================================================-->
<!--====================================================================
                        End Section clients
=====================================================================-->
<div class="clients">
    <div class="container content">
        <div class="row">
            <div class="col-12">
                <!--Testimonials Item -->
                <div class="owl-carousel sponsor  owl-loaded">


                    <!-- New Item -->
                    <div class="owl-item">
                        <div class="sponsor-item">
                            <img src="http://placehold.it/100x100" alt="sponsor">
                        </div>
                    </div>


                    <!-- New Item -->
                    <div class="owl-item">
                        <div class="sponsor-item">
                            <img src="http://placehold.it/100x100" alt="sponsor">
                        </div>
                    </div>

                    <!-- New Item -->
                    <div class="owl-item">
                        <div class="sponsor-item">
                            <img src="http://placehold.it/100x100" alt="sponsor">
                        </div>
                    </div>


                    <!-- New Item -->
                    <div class="owl-item">
                        <div class="sponsor-item">
                            <img src="http://placehold.it/100x100" alt="sponsor">
                        </div>
                    </div>


                    <!-- New Item -->
                    <div class="owl-item">
                        <div class="sponsor-item">
                            <img src="http://placehold.it/100x100" alt="sponsor">
                        </div>
                    </div>

                    <!-- New Item -->
                    <div class="owl-item">
                        <div class="sponsor-item">
                            <img src="http://placehold.it/100x100" alt="sponsor">
                        </div>
                    </div>


                </div>

            </div>


        </div>


    </div>

</div>
<!--====================================================================
                        End Section clients
=====================================================================-->


<!--====================================================================
                        Start Section Contact
=====================================================================-->
<section id="contact" class="contact ptb-100">
    <div class="overlay"></div>
    <div class="container">

        <div class="row">

            <div class="col-lg-10">
                <div class="section-title">
                    <div class="row ">
                        <div class="col-lg-5">
                            <!-- Title Of Section Center -->
                            <div class="section-title-left">
                                <h2>Contact Me</h2>
                                <div class="line"><span><i class="fas fa-angle-double-right"></i> 09.</span></div>
                                <h3>Get In Touch</h3>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <p>I Have A Passion For Creating Challenging, Intuitive And Beautiful Products, My Design
                                Process Is Very Hands-On And Visual.</p>
                        </div>

                    </div>


                </div>
            </div>

            <div class="col-lg-4 mb-20">
                <div class="row">

                    <div class="col-md-4 col-lg-12">
                        <div class="contact-item">

                            <div class="inner-contact">
                                <span><i class="fa fa-location-arrow"></i></span>
                            </div>

                            <div class="info-cont">
                                <p>USA - New Yowk </p>
                                <p>15 Street Name Here </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 col-lg-12">
                        <div class="contact-item">

                            <div class="inner-contact">
                                <span><i class="fa fa-envelope"></i></span>
                            </div>

                            <div class="info-cont">
                                <p>Hello@example.com</p>
                                <p>support@yourwebsite.com</p>
                            </div>

                        </div>

                    </div>


                    <div class="col-md-4 col-lg-12">
                        <div class="contact-item">
                            <div class="inner-contact">
                                <span><i class="fa fa-phone"></i></span>
                            </div>
                            <div class="info-cont">
                                <p>00201149912318</p>
                                <p>00201117457354</p>

                            </div>
                        </div>
                    </div>


                </div>

            </div>


            <div class="col-lg-8">

                <form class="form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Name">
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="Email" placeholder="Email">
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="subject">
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea placeholder="Your Message Here "></textarea>
                            </div>
                        </div>
                    </div>


                    <!-- Button Send Message  -->
                    <a href="#" class="btn-one">Send Message</a>
                </form>


            </div>


        </div>
    </div>

</section>

@include('sections.footer')
<!-- Scroll To Top -->
<div class="scroll-up">
    <span class="top-one"><i class="fas fa-angle-double-up"></i></span>
    <span class="top-three"><i class="fas fa-angle-double-up"></i></span>

</div>
<!-- Decoration -->
<div class="page-line">
    <div class="grid-line one"></div>
    <div class="grid-line two"></div>
    <div class="grid-line three"></div>
    <div class="grid-line four"></div>
    <div class="grid-line fifth"></div>
</div>
</body>

<script src="js/app.js"></script>
<script src="js/dependencies.js"></script>
</html>
