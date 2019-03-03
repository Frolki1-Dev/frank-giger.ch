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
@include('sections.portfolio')
@include('sections.testimonials')


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
                                <div class="line"><span><i class="fas fa-angle-double-right"></i> 06.</span></div>
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
