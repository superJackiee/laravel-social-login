<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Lawn Express</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="assets/images/icon.png">
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic" rel="stylesheet" type="text/css">
        <!--Bootstrap-->
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        <!--font Awesome-->
        <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
        <!--slider-->
        <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css">
        <!--PrettyPhoto-->
        <link href="{{ asset('assets/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">
        <!--main file-->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <!--Responsive file-->
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="page-wrapper">
            <!-- Preloader -->
            <div class="preloader"></div>
            <!--Start Header-->
            <header>
                <div class="top_bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-7">
                                <p><i class="fa fa-phone"></i>+92 368 4569200</p>
                                <p><i class="fa fa-envelope"></i>info@domain.com</p>
                            </div>
                            @if (Route::has('login'))
                            <div class="col-sm-12 col-md-12 col-lg-5 text-right">                            
                            @auth
                                <a href="{{ url('/home') }}" class="top_btn">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="top_btn">Sign In</a>
                                <div class="social_icons">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            @endauth
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="header_bottom home1">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/images/logo.png" alt="img" /></a>
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-7 col-lg-7 text-right">
                                <nav>
                                    <ul>
                                        <li class="dropdown">
                                            <a href="index.html" class="active dropdown-toggle" data-toggle="dropdown">Home</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index2.html">Home Two</a></li>
                                                <li><a href="index3.html">Home Three</a></li>
                                                <li><a href="index4.html">Home Four</a></li>
                                                <li><a href="index5.html">Home Five</a></li>
                                                <li><a href="shop.html">Home shop</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="about.html" data-toggle="dropdown" class=" dropdown-toggle">About</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                                <li><a href="testimonials.html">Testimonials</a></li>
                                                <li><a href="price.html">Price</a></li>
                                                <li><a href="faq.html">FAQ's</a></li>
                                                <li><a href="error.html">Error 404</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="services.html" data-toggle="dropdown" class=" dropdown-toggle">Services</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="services-2.html">Services style 2</a></li>
                                                <li><a href="services_detail.html">Services Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="3-column-gallery.html" class="">Our Works</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="3-column-gallery.html">3 Column Gallery</a></li>
                                                <li><a href="full-width-gallery.html">Full width Gallery</a></li>
                                                <li><a href="project_detail.html">Gallery Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="shop.html">Store</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="shop.html">Prducts</a></li>
                                                <li><a href="products-details.html">Product Details</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="blog.html" data-toggle="dropdown" class=" dropdown-toggle">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single.html">Blog Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-sm-12 col-md-9 col-lg-2 col-xs-12 responsive_center">
                                <div class="cart_info">
                                    <a href="cart.html"><img src="assets/images/cart.png" alt="img" /> <span>3</span></a>
                                </div>
                                <form action="#">
                                    <input type="text" placeholder="search" />
                                    <input type="submit" value="" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--End Header-->
            <!--Responsive Nav-->
            <div class="responsive_button">
                <p>Home</p>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""><i class="fa fa-bars"></i></span>
                </button>
            </div>
            <div class="responsive_nav collapse navbar-collapse" id="navbarToggleExternalContent">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home One</a></li>
                    <li><a href="index2.html">Home Two</a></li>
                    <li><a href="index3.html">Home Three</a></li>
                    <li><a href="index4.html">Home Four</a></li>
                    <li><a href="index5.html">Home Five</a></li>
                    <li><a href="shop.html">Home shop</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="team-details.html">Team Details</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="price.html">Price</a></li>
                    <li><a href="faq.html">FAQ's</a></li>
                    <li><a href="error.html">Error 404</a></li>
                    <li><a href="coming-soon.html">Coming Soon</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="services-2.html">Services style 2</a></li>
                    <li><a href="services_detail.html">Services Detail</a></li>
                    <li><a href="3-column-gallery.html">3 Column Gallery</a></li>
                    <li><a href="full-width-gallery.html">Full width Gallery</a></li>
                    <li><a href="project_detail.html">Gallery Detail</a></li>
                    <li><a href="shop.html">Prducts</a></li>
                    <li><a href="products-details.html">Product Details</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="single.html">Blog Detail</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
        <!--Responsive Nav-->
        <!--Start Slider-->
        <div class="main_slider owl-carousel owl-theme seaction_margin">
            <div class="item">
                <img src="https://via.placeholder.com/1920x860" alt="img" />
                <div class="slide_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <h3>Using the latest technologies in landscaping</h3>
                                <h1>We are the best lawn care <br />
                                    maintenance company </h1>
                                <a href="about.html" class="button">Learn More</a> <a href="https://themeforest.net/item/lawnexpress-lawn-mowing-gardening-landscaping-farming-and-florist-html5-responsive-template/20152910?s_rank=1" class="button">purchase theme</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="https://via.placeholder.com/1920x860" alt="img" />
                <div class="slide_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <h3>Using the latest technologies in landscaping</h3>
                                <h1>We are the best lawn care <br />
                                    maintenance companies</h1>
                                <a href="about.html" class="button">Learn More</a> <a href="https://themeforest.net/item/lawnexpress-lawn-mowing-gardening-landscaping-farming-and-florist-html5-responsive-template/20152910?s_rank=1" class="button">purchase theme</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="https://via.placeholder.com/1920x860" alt="img" />
                <div class="slide_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <h3>Using the latest technologies in landscaping</h3>
                                <h1>We are the best lawn care <br />
                                    maintenance companies</h1>
                                <a href="about.html" class="button">Learn More</a> <a href="https://themeforest.net/item/lawnexpress-lawn-mowing-gardening-landscaping-farming-and-florist-html5-responsive-template/20152910?s_rank=1" class="button">purchase theme</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Slider-->
        <!--Start About-->
        <div class="about seaction_margin">
            <div class="container">
                <div class="heading_wrap animated fades">
                    <div class="icon_bar"></div>
                    <h2 class="heading_a">About <span>Lawn express</span></h2>
                    <h5 class="heading_small">Lorem ipsum dolor sit amet consectetur adipisicing elit sed ipsum eiusmod tempor <br />
                        incididunt utsmat labore et dolore magna aliqua.
                    </h5>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <div class="icon_box animated fades">
                            <img src="assets/images/icons/top_icon1.png" alt="img" />
                            <h4>Cerfified Workers</h4>
                        </div>
                        <div class="icon_box animated fades">
                            <img src="assets/images/icons/top_icon3.png" alt="img" />
                            <h4>Honest & Realiable</h4>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 content about_content animated fades">
                        <p>Ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt sed laboret dolore magna aliquat enim ad minim veniam nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        <p>Duis aute irure dolor reprehenderit voluptate velit esse cillum dolore fugiat nula pariatur. Excepteur sint occaecat cupidatat non proidentera sunt culpa officia deserunt mollit anim est laborum. Sed perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam ipsa.</p>
                        <a href="#" class="button brdr">What we offers</a>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="icon_box animated fades">
                            <img src="assets/images/icons/top_icon2.png" alt="img" />
                            <h4>10+ Years Expertise</h4>
                        </div>
                        <div class="icon_box animated fades">
                            <img src="assets/images/icons/top_icon4.png" alt="img" />
                            <h4>24h Free Helpline</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End About-->
        <!--Start Services-->
        <div class="services_wrap seaction_margin">
            <div class="container">
                <div class="heading_wrap animated slide">
                    <div class="icon_bar"></div>
                    <h2 class="heading_a">Our <span>Services</span></h2>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 animated slide">
                        <div class="service">
                            <img src="https://via.placeholder.com/555x235" alt="img" />
                            <div class="service_content">
                                <div class="row">
                                    <div class="col-sm-2 col-md-2 icon">
                                        <img src="assets/images/icons/icon1.png" class="icon_one" alt="img" />
                                        <img src="assets/images/icons/iconh1.png" class="icon_one icon_two" alt="img" />
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                        <h3>Landscape Caring</h3>
                                        <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                        </p>
                                        <a href="services.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 animated slide">
                        <div class="service">
                            <img src="https://via.placeholder.com/555x235" alt="img" />
                            <div class="service_content">
                                <div class="row">
                                    <div class="col-sm-2 col-md-2 icon">
                                        <img src="assets/images/icons/icon2.png" class="icon_one" alt="img" />
                                        <img src="assets/images/icons/iconh2.png" class="icon_one icon_two" alt="img" />
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                        <h3>Watering Gardens</h3>
                                        <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                        </p>
                                        <a href="services.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 animated slide">
                        <div class="service">
                            <img src="https://via.placeholder.com/555x235" alt="img" />
                            <div class="service_content">
                                <div class="row">
                                    <div class="col-sm-2 col-md-2 icon">
                                        <img src="assets/images/icons/icon3.png" class="icon_one" alt="img" />
                                        <img src="assets/images/icons/iconh3.png" class="icon_one icon_two" alt="img" />
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                        <h3>New Trees Planting</h3>
                                        <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                        </p>
                                        <a href="services.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 animated slide">
                        <div class="service">
                            <img src="https://via.placeholder.com/555x235" alt="img" />
                            <div class="service_content">
                                <div class="row">
                                    <div class="col-sm-2 col-md-2 icon">
                                        <img src="assets/images/icons/icon4.png" class="icon_one" alt="img" />
                                        <img src="assets/images/icons/iconh4.png" class="icon_one icon_two" alt="img" />
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                        <h3>Rubbbish Cleanup</h3>
                                        <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                        </p>
                                        <a href="services.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 animated slide">
                        <div class="service">
                            <img src="https://via.placeholder.com/555x235" alt="img" />
                            <div class="service_content">
                                <div class="row">
                                    <div class="col-sm-2 col-md-2 icon">
                                        <img src="assets/images/icons/icon5.png" class="icon_one" alt="img" />
                                        <img src="assets/images/icons/iconh5.png" class="icon_one icon_two" alt="img" />
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                        <h3>Lawn Moving</h3>
                                        <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                        </p>
                                        <a href="services.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 animated slide">
                        <div class="service">
                            <img src="https://via.placeholder.com/555x235" alt="img" />
                            <div class="service_content">
                                <div class="row">
                                    <div class="col-sm-2 col-md-2 icon">
                                        <img src="assets/images/icons/icon6.png" class="icon_one" alt="img" />
                                        <img src="assets/images/icons/iconh6.png" class="icon_one icon_two" alt="img" />
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                        <h3>Design & Planning</h3>
                                        <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                        </p>
                                        <a href="services.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Services-->
        <!--Start project-->
        <div class="project_wrap seaction_margin animated fades">
            <div class="container">
                <div class="heading_wrap">
                    <div class="icon_bar"></div>
                    <h2 class="heading_a">projects <span>Gallery</span></h2>
                </div>
                <div class="my-selector" data-option-key="filter">
                    <a href="#filter" data-option-value="*" class="selected">Show All Projects</a>
                    <a href="#filter" data-option-value=".lawn_care">Lawn Care</a>
                    <a href="#filter" data-option-value=".gardening">Gardening</a>
                    <a href="#filter" data-option-value=".cleanup">Rubbish Cleanup</a>
                    <a href="#filter" data-option-value=".planting">Planting</a>
                </div>
                <ul id="project-eliment" class="row da-thumbs">
                    <li class="col-sm-12 col-md-4 item cleanup lawn_care">
                        <div class="item_inner">
                            <img src="https://via.placeholder.com/384x325" alt="img" />
                            <div class="overlay">
                                <a href="https://via.placeholder.com/384x325" class="zoom"><i class="fa fa-search"></i></a>
                                <h5><a href="#">Lawn Worker</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-12 col-md-4 item gardening planting">
                        <div class="item_inner">
                            <img src="https://via.placeholder.com/384x325" alt="img" />
                            <div class="overlay">
                                <a href="https://via.placeholder.com/384x325" class="zoom"><i class="fa fa-search"></i></a>
                                <h5><a href="#">Lawn Worker</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-12 col-md-4 item cleanup planting">
                        <div class="item_inner">
                            <img src="https://via.placeholder.com/384x325" alt="img" />
                            <div class="overlay">
                                <a href="https://via.placeholder.com/384x325" class="zoom"><i class="fa fa-search"></i></a>
                                <h5><a href="#">Lawn Worker</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-12 col-md-4 item cleanup planting">
                        <div class="item_inner">
                            <img src="https://via.placeholder.com/384x325" alt="img" />
                            <div class="overlay">
                                <a href="https://via.placeholder.com/384x325" class="zoom"><i class="fa fa-search"></i></a>
                                <h5><a href="#">Lawn Worker</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-12 col-md-4 item cleanup gardening ">
                        <div class="item_inner">
                            <img src="https://via.placeholder.com/384x325" alt="img" />
                            <div class="overlay">
                                <a href="https://via.placeholder.com/384x325" class="zoom"><i class="fa fa-search"></i></a>
                                <h5><a href="#">Lawn Worker</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-12 col-md-4 item cleanup planting">
                        <div class="item_inner">
                            <img src="https://via.placeholder.com/384x325" alt="img" />
                            <div class="overlay">
                                <a href="https://via.placeholder.com/384x325" class="zoom"><i class="fa fa-search"></i></a>
                                <h5><a href="#">Lawn Worker</a></h5>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--End project-->
        <!--Start Quote-->
        <div class="qoute_wrap seaction_margin  animated entrance">
            <div class="layer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-3"></div>
                        <div class="col-sm-12 col-md-8 col-lg-6">
                            <div class="qoute">
                                <div class="heading_wrap">
                                    <div class="icon_bar"></div>
                                    <h2 class="heading_a">Get Instant Quote</h2>
                                </div>
                                <form action="process.php" method="post" id="quote_form" class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" placeholder="Name" class="form-control" name="user_name" />
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" name="user_phone" placeholder="Phone no." class="form-control" />
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="email" name="user_email" placeholder="Email" class="form-control" />
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <select class="form-control">
                                            <option value="">Service Required</option>
                                            <option value="">Service Required</option>
                                            <option value="">Service Required</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" name="lawn_area" placeholder="Lawn Area (Sq Ft)" class="form-control" />
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" name="price" placeholder="$0.00" class="form-control" />
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <textarea name="message_box" placeholder="How can we help?" class="form-control"></textarea>
                                    </div>
                                    <div class="col-sm-4 col-md-4">
                                        <input type="submit" class="button" value="get estimate" name="get" id="get_quote" />
                                    </div>
                                    <div class="col-sm-8 col-md-8 text-right">
                                        <p>OR Call Us: <strong>(01) 321 668 297</strong></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Quote-->
        <!--Start Testimonials -->
        <div class="testimonials_wrap  animated slide">
            <div class="testimonials_inner">
                <div class="container">
                    <div class="heading_wrap">
                        <div class="icon_bar"></div>
                        <h2 class="heading_a">What <span>clients say</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <a href="#" class="left"><i class="fa fa-long-arrow-left"></i></a>
                            <a href="#" class="right"><i class="fa fa-long-arrow-right"></i></a>
                            <div class="testi_slider">
                                <div class="slide">
                                    <p>Enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderite voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sind occaecat cupidatat non proident sunt culpa officia.
                                    </p>
                                    <div class="user_botom">
                                        <img src="https://via.placeholder.com/56x56" alt="img" />
                                        <span> Kenn Thomson <cite>Garden Owner</cite></span>
                                    </div>
                                </div>
                                <div class="slide">
                                    <p>Enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderite voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sind occaecat cupidatat non proident sunt culpa officia.
                                    </p>
                                    <div class="user_botom">
                                        <img src="https://via.placeholder.com/56x56" alt="img" />
                                        <span> Kenn Thomson <cite>Garden Owner</cite></span>
                                    </div>
                                </div>
                                <div class="slide">
                                    <p>Enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderite voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sind occaecat cupidatat non proident sunt culpa officia.
                                    </p>
                                    <div class="user_botom">
                                        <img src="https://via.placeholder.com/56x56" alt="img" />
                                        <span> Kenn Thomson <cite>Garden Owner</cite></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-5">
                            <div class="testi_img">
                                <img src="https://via.placeholder.com/813x636" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Testimonials -->
        <!--Start Tools -->
        <div class="tools_wrap seaction_margin">
            <div class="container">
                <div class="heading_wrap animated slide">
                    <div class="icon_bar"></div>
                    <h2 class="heading_a">shop <span>lawn tools</span></h2>
                    <h5 class="heading_small">We recommend some very useful garden & lawn related tools you can buy online</h5>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-3 animated slide">
                        <div class="tool">
                            <figure>
                                <a href="#"><img src="https://via.placeholder.com/263x250" alt="img" /></a>
                            </figure>
                            <div class="detail">
                                <h5><a href="#">Electric Mover</a></h5>
                                <span class="prc">$250.50</span>
                                <a href="cart.html"><i class="fa fa-shopping-basket"></i> add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 animated slide">
                        <div class="tool">
                            <figure>
                                <a href="#"><img src="https://via.placeholder.com/263x250" alt="img" /></a>
                            </figure>
                            <div class="detail">
                                <h5><a href="#">Electric Mover</a></h5>
                                <span class="prc">$250.50</span>
                                <a href="cart.html"><i class="fa fa-shopping-basket"></i> add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 animated slide">
                        <div class="tool">
                            <figure>
                                <a href="#"><img src="https://via.placeholder.com/263x250" alt="img" /></a>
                            </figure>
                            <div class="detail">
                                <h5><a href="#">Electric Mover</a></h5>
                                <span class="prc">$250.50</span>
                                <a href="cart.html"><i class="fa fa-shopping-basket"></i> add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 animated slide">
                        <div class="tool">
                            <figure>
                                <a href="#"><img src="https://via.placeholder.com/263x250" alt="img" /></a>
                            </figure>
                            <div class="detail">
                                <h5><a href="#">Electric Mover</a></h5>
                                <span class="prc">$250.50</span>
                                <a href="cart.html"><i class="fa fa-shopping-basket"></i> add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Tools -->
        <!--Start News -->
        <div class="news_wrap seaction_margin">
            <div class="container">
                <div class="heading_wrap">
                    <div class="icon_bar"></div>
                    <h2 class="heading_a">Our <span>News blog</span></h2>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 animated slide">
                        <div class="news">
                            <figure>
                                <a href="#"><img src="https://via.placeholder.com/360x300" alt="img"></a>
                                <span class="date">25 <cite>April</cite></span>
                            </figure>
                            <div class="content">
                                <h5>clients, case-study</h5>
                                <h3><a href="#">Dolor sit amet adipis slcin elit sed
                                        eiusmod temp incididunt</a></h3>
                                <a href="services.html">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 animated slide">
                        <div class="news">
                            <figure>
                                <a href="#"><img src="https://via.placeholder.com/360x300" alt="img"></a>
                                <span class="date">25 <cite>April</cite></span>
                            </figure>
                            <div class="content">
                                <h5>clients, case-study</h5>
                                <h3><a href="#">Dolor sit amet adipis slcin elit sed
                                        eiusmod temp incididunt</a></h3>
                                <a href="services.html">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 animated slide">
                        <div class="news">
                            <figure>
                                <a href="#"><img src="https://via.placeholder.com/360x300" alt="img"></a>
                                <span class="date">25 <cite>April</cite></span>
                            </figure>
                            <div class="content">
                                <h5>clients, case-study</h5>
                                <h3><a href="#">Dolor sit amet adipis slcin elit sed
                                        eiusmod temp incididunt</a></h3>
                                <a href="services.html">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End News -->
        <!--Start Call to Action -->
        <div class="call_action  animated hatch">
            <div class="action_layer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h4>liked our services & interested in hiring us?</h4>
                            <p>
                                Magna aliqua ut enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip
                                <br /> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="contact.html" class="button brdr">get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Call to Action -->
        <!--Start Footer -->
        <div class="footer_bottom">
            <div class="footer_inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 animated slide">
                            <div class="footer_widget">
                                <a href="#"><img src="assets/images/white_logo.png" alt="img"></a>
                                <p>Adipisicing elit sed do eiusmod tempor incidunt labore et dolore magna aliqua enim minim ven quis nostu exercitation ullamco.
                                </p>
                                <hr>
                                <p><i class="fa fa-map-marker"></i>Brooks St. 71, Washington DC, USA</p>
                                <p><i class=" fa fa-phone"></i>Toll Free; (01) 321 668 297</p>
                                <p><i class="fa fa-envelope"></i>info@lawnexpress.com</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 animated slide">
                            <div class="footer_widget">
                                <h5>Quick Links</h5>
                                <ul>
                                    <li><a href="index.html">Home Page</a></li>
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="services.html">Our Services</a></li>
                                    <li><a href="project_detail.html">The Projects</a></li>
                                    <li><a href="shop.html">Shop Online</a></li>
                                    <li><a href="blog.html">Our News</a></li>
                                    <li><a href="contact.html">Get in Touch</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 animated slide">
                            <div class="footer_widget">
                                <h5>Working Hours</h5>
                                <address>
                                    <p><span>We are open 6 Days a week.</span></p>
                                    <p>Monday to Friday : 9 am - 5 pm</p>
                                    <p>Saturday : 10 am - 4 pm</p>
                                    <p>Sunday : By Appointment Only</p>
                                </address>
                                <address>
                                    <p>We are also close on Bank </p>
                                    <p>& Calender Holidays.</p>
                                </address>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 animated slide">
                            <div class="footer_widget">
                                <h5>Contact Us</h5>
                                <p>Magna aliqua ut enim veniam quis nostrud exercitation sed.
                                </p>
                                <div class="news_letter">
                                    <p class="success" id="success" style="display:none; color: blue; text-decoration: underline; font-size: 14px;"></p>
                                    <p class="error" id="error" style="display:none; color: red; text-decoration: underline; font-size: 14px;"></p>
                                    <form action="process.php" method="post" id="newsletter_form">
                                        <input type="text" placeholder="Newsletter sign up" name="newletter_email" id="newletter_email" />
                                        <input type="submit" id="subcribe" class="button" value="subscribe now" name="subcribe">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container animated slide">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <p>Copyrights 2018 <strong>LAWN EXPRESS</strong> • All Rights Reserved.</p>
                    </div>
                    <div class="col-md-4 col-sm-12 text-right">
                        <div class="social_icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        <!-- jQuery -->
        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- Jquery Ui -->
        <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
        <!-- Slider -->
        <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
        <!-- Isotope -->
        <script src="{{ asset('assets/js/isotope-docs.min.js') }}"></script>
        <!-- PrettyPhoto -->
        <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
        <!-- Parallax -->
        <script src="{{ asset('assets/js/jquery.parallax.js') }}"></script>
        <!-- Slider -->
        <script src="{{ asset('assets/js/jquery.cycle.all.js') }}"></script>
        <!-- Appear -->
        <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
        <!-- Custom -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>

        
    </body>
</html>
