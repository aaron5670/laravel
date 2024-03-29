<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href="{{ asset('fonts/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('fonts/elegant-fonts.css') }}" rel="stylesheet" type="text/css">

    <script src="//kit.fontawesome.com/ee8a994cdf.js"></script>

    <link href="//fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic" rel="stylesheet"
          type="text/css">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

    <title>Accommodo - Laravel</title>

</head>

<body>
<div class="page-wrapper">
    <div id="page-header">
        <header>
            <div class="container">
                <div class="secondary-nav">
                    <div class="nav-trigger"><a data-toggle="collapse" href="#secondary-nav" aria-expanded="false"
                                                aria-controls="secondary-nav"><i class="fa fa-user"></i></a></div>
                    <div id="secondary-nav">
                        <nav>
                            <div class="left opacity-60">
                                <a href=""><i class="fa fa-phone"></i>+1 781-903-1047</a>
                                <a href="mailto:hello@example.com"><i class="fa fa-envelope"></i>hello@example.com</a>
                            </div>
                            <!--end left-->
                            <div class="right">
                                <div class="element">
                                    <select>
                                        <option>$</option>
                                        <option>€</option>
                                    </select>
                                </div>
                                <!--end element-->
                                <div class="element">
                                    <a href="#tab-sign-in" data-toggle="modal" data-tab="true"
                                       data-target="#sign-in-register-modal">Sign In</a>
                                </div>
                                <!--end element-->
                                <div class="element">
                                    <a href="#tab-register" data-toggle="modal" data-tab="true"
                                       data-target="#sign-in-register-modal">Register</a>
                                </div>
                                <!--end element-->
                                <div class="element">
                                    <select>
                                        <option>EN</option>
                                        <option>DE</option>
                                        <option>RU</option>
                                        <option>ES</option>
                                    </select>
                                </div>
                                <!--end element-->
                            </div>
                            <!--end right-->
                        </nav>
                    </div>
                </div>
                <!--end secondary-nav-->
            </div>
            <!--end container-->
            <hr>
            <div class="container">
                <div class="primary-nav">
                    <div class="left">
                        <a href="/" id="brand"><img src="img/logo.png" alt=""></a>
                        <a class="nav-trigger" data-toggle="collapse" href="#primary-nav" aria-expanded="false"
                           aria-controls="primary-nav"><i class="fa fa-navicon"></i></a>
                    </div>
                    <!--end left-->
                    <div class="right">
                        <nav id="primary-nav">
                            <ul>
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li>
                                    <a href="#" class="has-child">Listing</a>
                                    <ul class="child-nav">
                                        <li><a href="listing">List Listing</a></li>
                                        <li><a href="listing-matrix.html">Matrix Listing</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="has-child">Pages</a>
                                    <ul class="child-nav">
                                        <li><a href="404.html">404</a></li>
                                        <li>
                                            <a href="#" class="has-child">Admin</a>
                                            <ul class="child-nav">
                                                <li><a href="edit.html">Edit Accommodation</a></li>
                                                <li><a href="my-accommodations.html">My Accommodations</a></li>
                                                <li><a href="profile.html">Profile</a></li>
                                                <li><a href="reservations.html">Reservations</a></li>
                                                <li><a href="reviews.html">Reviews</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="detail.html">Accommodation Detail</a></li>
                                        <li><a href="become-an-affiliate.html">Become an Affiliate</a></li>
                                        <li>
                                            <a href="#" class="has-child">Blog</a>
                                            <ul class="child-nav">
                                                <li><a href="blog.html">Blog Listing</a></li>
                                                <li><a href="blog-detail.html">Blog Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="grid.html">Grid</a></li>
                                        <li><a href="sticky-footer.html">Sticky Footer</a></li>
                                        <li><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li class="submit"><a href="submit.html"><span>Submit</span><i data-toggle="tooltip"
                                                                                               data-placement="top"
                                                                                               title="Submit"><img
                                                    src="img/plus.png" alt=""></i></a></li>
                            </ul>
                        </nav>
                        <!--end nav-->
                    </div>
                    <!--end right-->
                </div>
                <!--end primary-nav-->
            </div>
            <!--end container-->
        </header>
        <!--end header-->
    </div>
    <!--end page-header-->

    <div id="page-content">
        <div class="hero-section" data-height="600">
            <form id="form-hero">
                <div class="hero-inner">
                    <div class="hero-wrapper">
                        <div class="caption">
                            <div class="inner">
                                <div class="container">
                                    <h1 class="center">Find Your Best Holiday</h1>
                                    <div class="row no-gutters">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label class="label-on-input"
                                                       for="address-autocomplete">Location</label>
                                                <input type="text" class="form-control" id="address-autocomplete"
                                                       name="location" placeholder="Enter Location or Place Name">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <label class="label-on-input" for="form-check-in">Check In</label>
                                                <input type="text" class="form-control date" id="form-check-in"
                                                       name="nights" placeholder="Check In Date">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <label class="label-on-input" for="form-nights">Nights</label>
                                                <input type="number" class="form-control" id="form-nights" name="nights"
                                                       placeholder="Nights">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="favorite-search">
                                        <span>Favorite Searches</span>
                                        <a href="">Bourges</a>
                                        <a href="">Orléans</a>
                                        <a href="">Rouen</a>
                                        <a href="">Toulouse</a>
                                    </div>
                                    <!--end favorite-searches-->
                                </div>
                                <!--end container-->
                                <div class="bg-transfer"><img src="img/bg-hero.jpg" alt=""></div>
                                <!--end bg-transfer-->
                            </div>
                            <!--end inner-->
                        </div>
                        <!--end caption-->
                        <div class="options">
                            <div class="container">
                                <div class="wrapper">
                                    <h2>Further Options</h2>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-7">
                                            <ul class="checkboxes inline list-unstyled">
                                                <li><label><input type="checkbox" name="hotel">Hotel</label></li>
                                                <li><label><input type="checkbox" name="apartment">Apartment</label>
                                                </li>
                                                <li><label><input type="checkbox" name="breakfast-only">Breakfast
                                                        Only</label></li>
                                                <li><label><input type="checkbox" name="spa-wellness">Spa &
                                                        Wellness</label></li>
                                                <li><label><input type="checkbox" name="ski-center">Ski Center</label>
                                                </li>
                                                <li><label><input type="checkbox" name="cottage">Cottage</label></li>
                                                <li><label><input type="checkbox" name="hostel">Hostel</label></li>
                                                <li><label><input type="checkbox" name="boat">Boat</label></li>
                                            </ul>
                                            <!--end checkboxes-->
                                        </div>
                                        <!--end col-md-8-->
                                        <div class="col-md-4 col-sm-5">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Rate (per Night)</label>
                                                        <select class="form-control framed white">
                                                            <option value="">$0 - $100</option>
                                                            <option value="">$100 - $200</option>
                                                            <option value="">$200+</option>
                                                        </select>
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-6-->
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Star Rating</label>
                                                        <select class="form-control framed white">
                                                            <option value="">1</option>
                                                            <option value="">2</option>
                                                            <option value="">3</option>
                                                            <option value="">4</option>
                                                            <option value="">5</option>
                                                        </select>
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-6-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end col-md-4-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end wrapper-->
                            </div>
                            <!--end container-->
                        </div>
                        <!--end options-->
                    </div>
                    <!--end hero-wrapper-->
                    <div id="options-hidden" class="collapse">
                        <div class="container">
                            <div class="wrapper">
                                <h2>Facilities</h2>
                                <div class="row">
                                    <div class="col-md-8 col-sm-6">
                                        <ul class="checkboxes inline">
                                            <li><label><input type="checkbox" name="wi-fi">Wi-fi</label></li>
                                            <li><label><input type="checkbox" name="free-parking">Free Parking</label>
                                            </li>
                                            <li><label><input type="checkbox" name="airport">Airport Shuttle</label>
                                            </li>
                                            <li><label><input type="checkbox" name="family-rooms">Family Rooms</label>
                                            </li>
                                            <li><label><input type="checkbox" name="pets">Pets Allowed</label></li>
                                            <li><label><input type="checkbox" name="restaurant">Restaurant</label></li>
                                            <li><label><input type="checkbox" name="indoor-pool">Indoor Pool</label>
                                            </li>
                                            <li><label><input type="checkbox" name="brakfast-only">Breakfast
                                                    Only</label></li>
                                        </ul>
                                        <!--end checkboxes-->
                                    </div>
                                    <!--end col-md-8-->
                                    <div class="col-md-4"></div>
                                    <!--end col-md-4-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end wrapper-->
                        </div>
                        <!--end container-->
                    </div>
                </div>
                <!--end hero-inner-->
                <div class="plate">
                    <a data-toggle="collapse" href="#options-hidden" aria-expanded="false"
                       aria-controls="options-hidden">View Further Options</a>
                </div>
                <!--end plate-->
            </form>
            <!--end form-->
            <div class="map-wrapper">
                <div class="plate white">
                    <a href="#" data-switch="#form-hero">Show Map</a>
                </div>
                <!--end plate-->
                <div id="map-item" class="map height-100"></div>
                <!--<img src="img/map.jpg" alt="">-->
            </div>
        </div>
        <!--end hero-section-->

        <div class="block">
            <div class="container">
                <div class="title">
                    <h2>Top Accommodations</h2>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29"
                             data-id="1">
                            <div class="item-wrapper">
                                <div class="image">
                                    <div class="mark-circle description" data-toggle="tooltip" data-placement="right"
                                         title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. ">
                                        <i class="fa fa-question"></i></div>
                                    <div class="mark-circle map" data-toggle="tooltip" data-placement="right"
                                         title="Show on map"><i class="fa fa-map-marker"></i></div>
                                    <div class="mark-circle top" data-toggle="tooltip" data-placement="right"
                                         title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="img/items/01.jpg" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/02.jpg">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/03.jpg">
                                        </div>
                                    </a>
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                                <!--end image-->
                                <div class="description">
                                    <div class="meta">
                                        <span><i class="fa fa-star"></i>8.9</span>
                                        <span><i class="fa fa-bed"></i>365</span>
                                    </div>
                                    <div class="info">
                                        <figure class="label label-info">Hotel</figure>
                                        <a href="detail.html"><h3>Spring Hotel</h3></a>
                                        <figure class="location">Montenegro</figure>
                                    </div>
                                </div>
                                <!--end description-->
                                <div class="map-item">
                                    <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                    <div class="map-wrapper"></div>
                                </div>
                                <!--end map-item-->
                            </div>
                        </div>
                        <!--end item-->
                    </div>
                    <!--col-md-3-->
                    <div class="col-md-3 col-sm-6">
                        <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29"
                             data-id="2">
                            <div class="item-wrapper">
                                <div class="image">
                                    <div class="mark-circle description" data-toggle="tooltip" data-placement="right"
                                         title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. ">
                                        <i class="fa fa-question"></i></div>
                                    <div class="mark-circle map" data-toggle="tooltip" data-placement="right"
                                         title="Show on map"><i class="fa fa-map-marker"></i></div>
                                    <div class="mark-circle top" data-toggle="tooltip" data-placement="right"
                                         title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="img/items/02.jpg" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/01.jpg">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/03.jpg">
                                        </div>
                                    </a>
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                                <!--end image-->
                                <div class="description">
                                    <div class="meta">
                                        <span><i class="fa fa-star"></i>9.3</span>
                                        <span><i class="fa fa-bed"></i>148</span>
                                    </div>
                                    <div class="info">
                                        <figure class="label label-info">Apartment</figure>
                                        <a href="detail.html"><h3>Mountain Paradise</h3></a>
                                        <figure class="location">Austria</figure>
                                    </div>
                                </div>
                                <!--end description-->
                                <div class="map-item">
                                    <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                    <div class="map-wrapper"></div>
                                </div>
                                <!--end map-item-->
                            </div>
                        </div>
                        <!--end item-->
                    </div>
                    <!--col-md-3-->
                    <div class="col-md-3 col-sm-6">
                        <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29"
                             data-id="3">
                            <div class="item-wrapper">
                                <div class="image">
                                    <div class="mark-circle description" data-toggle="tooltip" data-placement="right"
                                         title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. ">
                                        <i class="fa fa-question"></i></div>
                                    <div class="mark-circle map" data-toggle="tooltip" data-placement="right"
                                         title="Show on map"><i class="fa fa-map-marker"></i></div>
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="img/items/03.jpg" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/01.jpg">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/04.jpg">
                                        </div>
                                    </a>
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                                <!--end image-->
                                <div class="description">
                                    <div class="meta">
                                        <span><i class="fa fa-star"></i>9.8</span>
                                        <span><i class="fa fa-bed"></i>70</span>
                                    </div>
                                    <div class="info">
                                        <figure class="label label-info">Spa & Hotel</figure>
                                        <a href="detail.html"><h3>Twin Oaks Resort</h3></a>
                                        <figure class="location">Australia</figure>
                                    </div>
                                </div>
                                <!--end description-->
                                <div class="map-item">
                                    <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                    <div class="map-wrapper"></div>
                                </div>
                                <!--end map-item-->
                            </div>
                        </div>
                        <!--end item-->
                    </div>
                    <!--col-md-3-->
                    <div class="col-md-3 col-sm-6">
                        <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29"
                             data-id="4">
                            <div class="item-wrapper">
                                <div class="image">
                                    <div class="mark-circle description" data-toggle="tooltip" data-placement="right"
                                         title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. ">
                                        <i class="fa fa-question"></i></div>
                                    <div class="mark-circle map" data-toggle="tooltip" data-placement="right"
                                         title="Show on map"><i class="fa fa-map-marker"></i></div>
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="img/items/04.jpg" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/01.jpg">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/05.jpg">
                                        </div>
                                    </a>
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                                <!--end image-->
                                <div class="description">
                                    <div class="meta">
                                        <span><i class="fa fa-star"></i>9.1</span>
                                        <span><i class="fa fa-bed"></i>58</span>
                                    </div>
                                    <div class="info">
                                        <figure class="label label-info">Villa</figure>
                                        <a href="detail.html"><h3>Sunrise Sanctum </h3></a>
                                        <figure class="location">Switzerland</figure>
                                    </div>
                                </div>
                                <!--end description-->
                                <div class="map-item">
                                    <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                    <div class="map-wrapper"></div>
                                </div>
                                <!--end map-item-->
                            </div>
                        </div>
                        <!--end item-->
                    </div>
                    <!--col-md-3-->
                    <div class="col-md-6 col-sm-12">
                        <a href="#" class="advertising-banner equal-height">
                            <span class="banner-badge">Advertising</span>
                            <img src="img/ad-banner-01.jpg" alt="">
                        </a>
                    </div>
                    <!--end col-md-6-->
                    <div class="col-md-3 col-sm-6">
                        <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29"
                             data-id="5">
                            <div class="item-wrapper">
                                <div class="image">
                                    <div class="mark-circle description" data-toggle="tooltip" data-placement="right"
                                         title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. ">
                                        <i class="fa fa-question"></i></div>
                                    <div class="mark-circle map" data-toggle="tooltip" data-placement="right"
                                         title="Show on map"><i class="fa fa-map-marker"></i></div>
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="img/items/05.jpg" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/01.jpg">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/02.jpg">
                                        </div>
                                    </a>
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                                <!--end image-->
                                <div class="description">
                                    <div class="meta">
                                        <span><i class="fa fa-star"></i>9.6</span>
                                        <span><i class="fa fa-bed"></i>38</span>
                                    </div>
                                    <div class="info">
                                        <figure class="label label-info">Cottage</figure>
                                        <a href="detail.html"><h3>Primal Court Resort</h3></a>
                                        <figure class="location">France</figure>
                                    </div>
                                </div>
                                <!--end description-->
                                <div class="map-item">
                                    <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                    <div class="map-wrapper"></div>
                                </div>
                                <!--end map-item-->
                            </div>
                        </div>
                        <!--end item-->
                    </div>
                    <!--col-md-3-->
                    <div class="col-md-3 col-sm-6">
                        <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29"
                             data-id="6">
                            <div class="item-wrapper">
                                <div class="image">
                                    <div class="mark-circle description" data-toggle="tooltip" data-placement="right"
                                         title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. ">
                                        <i class="fa fa-question"></i></div>
                                    <div class="mark-circle map" data-toggle="tooltip" data-placement="right"
                                         title="Show on map"><i class="fa fa-map-marker"></i></div>
                                    <div class="mark-circle top" data-toggle="tooltip" data-placement="right"
                                         title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="img/items/06.jpg" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/04.jpg">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/03.jpg">
                                        </div>
                                    </a>
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                                <!--end image-->
                                <div class="description">
                                    <div class="meta">
                                        <span><i class="fa fa-star"></i>8.9</span>
                                        <span><i class="fa fa-bed"></i>250</span>
                                    </div>
                                    <div class="info">
                                        <figure class="label label-info">Spa & Wellness</figure>
                                        <a href="detail.html"><h3>Celestial Hotel & Spa</h3></a>
                                        <figure class="location">Norway</figure>
                                    </div>
                                </div>
                                <!--end description-->
                                <div class="map-item">
                                    <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                    <div class="map-wrapper"></div>
                                </div>
                                <!--end map-item-->
                            </div>
                        </div>
                        <!--end item-->
                    </div>
                    <!--col-md-3-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <div class="block">
            <div class="container">
                <div class="title">
                    <h2 class="pull-left">Recent Accommodations</h2>
                </div>
                <!--end title-->
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <a href="detail.html" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">Hotel</figure>
                                            <aside>
                                                <h3>Celestial Hotel & Spa</h3>
                                                <figure class="location">Norway</figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <img src="img/items/01.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-star"></i>8.9</span>
                                            <span><i class="fa fa-bed"></i>250</span>
                                        </div>
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-6">
                                <a href="detail.html" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">Apartment</figure>
                                            <aside>
                                                <h3>Spring Hotel</h3>
                                                <figure class="location">Austria</figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <img src="img/items/05.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-star"></i>8.2</span>
                                            <span><i class="fa fa-bed"></i>82</span>
                                        </div>
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-6">
                                <a href="detail.html" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">Cottage</figure>
                                            <aside>
                                                <h3>Rose Brook Resort</h3>
                                                <figure class="location">France</figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <img src="img/items/07.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-star"></i>9.4</span>
                                            <span><i class="fa fa-bed"></i>348</span>
                                        </div>
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-6">
                                <a href="detail.html" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">Hotel</figure>
                                            <aside>
                                                <h3>Secret Angel Hotel</h3>
                                                <figure class="location">Switzerland</figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <img src="img/items/08.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-star"></i>9.8</span>
                                            <span><i class="fa fa-bed"></i>37</span>
                                        </div>
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <!--end col-md-3-->

                            <div class="col-md-3 col-sm-6">
                                <a href="detail.html" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">Hotel</figure>
                                            <aside>
                                                <h3>Mountain Paradise</h3>
                                                <figure class="location">Norway</figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <img src="img/items/03.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-star"></i>8.9</span>
                                            <span><i class="fa fa-bed"></i>250</span>
                                        </div>
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-6">
                                <a href="detail.html" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">Apartment</figure>
                                            <aside>
                                                <h3>Twin Oaks Resort</h3>
                                                <figure class="location">Austria</figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <img src="img/items/02.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-star"></i>8.2</span>
                                            <span><i class="fa fa-bed"></i>82</span>
                                        </div>
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-6">
                                <a href="detail.html" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">Cottage</figure>
                                            <aside>
                                                <h3>Sunrise Sanctum</h3>
                                                <figure class="location">France</figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <img src="img/items/04.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-star"></i>9.4</span>
                                            <span><i class="fa fa-bed"></i>348</span>
                                        </div>
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-6">
                                <a href="detail.html" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">Hotel</figure>
                                            <aside>
                                                <h3>Primal Court Resort</h3>
                                                <figure class="location">Switzerland</figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <img src="img/items/06.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-star"></i>9.8</span>
                                            <span><i class="fa fa-bed"></i>37</span>
                                        </div>
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <!--end col-md-3-->
                        </div>
                        <!--end row-->
                        <a href="listing" class="pull-right">View All</a>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <a href="#" class="advertising-banner">
                            <img src="img/ad-banner-02.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="feature">
                            <aside class="circle">
                                <i class="icon_house_alt"></i>
                            </aside>
                            <figure>
                                <h3>200+ Accommodations</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere
                                    mattis.
                                    Donec id nulla nisl.
                                </p>
                            </figure>
                        </div>
                        <!--end feature-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature">
                            <aside class="circle">
                                <i class="icon_box-checked"></i>
                            </aside>
                            <figure>
                                <h3>Easy Booking System</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere
                                    mattis.
                                    Donec id nulla nisl.
                                </p>
                            </figure>
                        </div>
                        <!--end feature-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature">
                            <aside class="circle">
                                <i class="icon_headphones"></i>
                            </aside>
                            <figure>
                                <h3>Great Support</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere
                                    mattis.
                                    Donec id nulla nisl.
                                </p>
                            </figure>
                        </div>
                        <!--end feature-->
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
            <div class="space"></div>
        </div>
        <!--end block-->

        <div class="block">
            <div class="container">
                <div class="title">
                    <h2 class="center">Tip For a Trip</h2>
                </div>
                <!--end title-->
                <div class="gallery-carousel">
                    <div class="gallery-item">
                        <a href="blog-detail.html">
                            <div class="image"><img src="img/items/tip-01.jpg" alt=""></div>
                        </a>
                        <div class="description">
                            <a href="blog-detail.html"><h3>Silver Peak Resort</h3></a>
                            <figure>Austria</figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere
                                mattis. Donec </p>
                            <a href="blog-detail.html" class="btn btn-default btn-small btn-framed btn-rounded">More</a>
                        </div>
                    </div>
                    <!--end gallery-item-->
                    <div class="gallery-item">
                        <a href="blog-detail.html">
                            <div class="image"><img src="img/items/tip-02.jpg" alt=""></div>
                        </a>
                        <div class="description">
                            <a href="blog-detail.html"><h3>Silver Peak Resort</h3></a>
                            <figure>Austria</figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere
                                mattis. Donec </p>
                            <a href="blog-detail.html" class="btn btn-default btn-small btn-framed btn-rounded">More</a>
                        </div>
                    </div>
                    <!--end gallery-item-->
                    <div class="gallery-item">
                        <a href="blog-detail.html">
                            <div class="image"><img src="img/items/tip-03.jpg" alt=""></div>
                        </a>
                        <div class="description">
                            <a href="blog-detail.html"><h3>Silver Peak Resort</h3></a>
                            <figure>Austria</figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere
                                mattis. Donec </p>
                            <a href="blog-detail.html" class="btn btn-default btn-small btn-framed btn-rounded">More</a>
                        </div>
                    </div>
                    <!--end gallery-item-->
                    <div class="gallery-item">
                        <a href="blog-detail.html">
                            <div class="image"><img src="img/items/tip-01.jpg" alt=""></div>
                        </a>
                        <div class="description">
                            <a href="blog-detail.html"><h3>Silver Peak Resort</h3></a>
                            <figure>Austria</figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere
                                mattis. Donec </p>
                            <a href="blog-detail.html" class="btn btn-default btn-small btn-framed btn-rounded">More</a>
                        </div>
                    </div>
                    <!--end gallery-item-->
                    <div class="gallery-item">
                        <a href="blog-detail.html">
                            <div class="image"><img src="img/items/tip-02.jpg" alt=""></div>
                        </a>
                        <div class="description">
                            <a href="blog-detail.html"><h3>Silver Peak Resort</h3></a>
                            <figure>Austria</figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere
                                mattis. Donec </p>
                            <a href="blog-detail.html" class="btn btn-default btn-small btn-framed btn-rounded">More</a>
                        </div>
                    </div>
                    <!--end gallery-item-->
                    <div class="gallery-item">
                        <a href="blog-detail.html">
                            <div class="image"><img src="img/items/tip-03.jpg" alt=""></div>
                        </a>
                        <div class="description">
                            <a href="blog-detail.html"><h3>Silver Peak Resort</h3></a>
                            <figure>Austria</figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere
                                mattis. Donec </p>
                            <a href="blog-detail.html" class="btn btn-default btn-small btn-framed btn-rounded">More</a>
                        </div>
                    </div>
                    <!--end gallery-item-->
                </div>
                <!--end gallery-carousel-->
            </div>
            <!--end container-->
            <div class="bg opacity-30">
                <img src="img/bg-map.jpg" alt="">
            </div>
        </div>
        <!--end block-->

        <div class="container">
            <div class="block">
                <form class="marketing-form">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="form-group-inline vertical-align-middle no-margin">
                                <div class="form-group">
                                    <h3 class="font-color-white no-margin"> Save up to 50% off your next trip</h3>
                                    <p class="font-color-white no-margin">Secret Deals – for our subscribers only</p>
                                </div>
                                <div class="form-group width-50">
                                    <input type="email" class="form-control input-dark" name="location"
                                           placeholder="Your email">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="bg color default"></div>
            </div>
        </div>
        <!--end block-->

        <div class="block">
            <div class="container">
                <div class="title">
                    <h2>Our Picks</h2>
                </div>
                <!--end title-->
                <div class="grid masonry">
                    <div class="grid-item">
                        <a href="#">
                            <h3>Switzerland</h3>
                            <img src="img/items/pick-01.jpg" alt="">
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="#">
                            <h3>Prague</h3>
                            <img src="img/items/pick-02.jpg" alt="">
                        </a>
                    </div>
                    <div class="grid-item grid-item--width2">
                        <a href="#">
                            <h3>Norway</h3>
                            <img src="img/items/pick-03.jpg" alt="">
                        </a>
                    </div>
                    <div class="grid-item grid-item--width2">
                        <a href="#">
                            <h3>Machu Picchu</h3>
                            <img src="img/items/pick-04.jpg" alt="">
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="#">
                            <h3>Tuscany</h3>
                            <img src="img/items/pick-05.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--end block-->

        <div class="block">
            <div class="container">
                <div class="title">
                    <h2>Favorite Destinations</h2>
                </div>
                <!--end title-->
                <ul class="list-links">
                    <li><a href="#">Tenerife<span>23</span></a></li>
                    <li><a href="#">Al Madinah<span>12</span></a></li>
                    <li><a href="#">Koh Samui<span>76</span></a></li>
                    <li><a href="#">Cotswolds<span>52</span></a></li>
                    <li><a href="#">Lake District<span>63</span></a></li>
                    <li><a href="#">Cornwall<span>15</span></a></li>
                    <li><a href="#">Algarve<span>19</span></a></li>
                    <li><a href="#">Ibiza<span>90</span></a></li>
                    <li><a href="#">New Forest<span>57</span></a></li>
                    <li><a href="#">Phuket Province<span>82</span></a></li>
                    <li><a href="#">Loch Lomond<span>24</span></a></li>
                    <li><a href="#">Gran Canaria<span>23</span></a></li>
                    <li><a href="#">Majorca<span>33</span></a></li>
                    <li><a href="#">Isle of Wight<span>74</span></a></li>
                    <li><a href="#">Jersey<span>51</span></a></li>
                    <li><a href="#">Isle of Man<span>23</span></a></li>
                    <li><a href="#">Santoríni<span>36</span></a></li>
                    <li><a href="#">Mykonos<span>55</span></a></li>
                    <li><a href="#">Lanzarote<span>78</span></a></li>
                    <li><a href="#">Bali<span>17</span></a></li>
                </ul>
                <!--end list-links-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <div class="container">
            <div class="block">
                <div class="title">
                    <h2>Reviews</h2>
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="review-single">
                                <a href="detail.html#reviews"><h3>White Doe Inn</h3></a>
                                <figure class="location">Austria</figure>
                                <div class="rating"><i class="fa fa-star"></i>8.9</div>
                                <p>Donec bibendum at neque pellentesque viverra. Fusce rhoncus elementum commodo.
                                    In ac nibh nec turpis finibus eleme
                                </p>
                                <a href="detail.html#reviews" class="link icon">Full Review<i
                                            class="arrow_right"></i></a>
                            </div>
                            <!--end review-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="review-single">
                                <a href="detail.html#reviews"><h3>Mountain Valley Motel</h3></a>
                                <figure class="location">Scotland</figure>
                                <div class="rating"><i class="fa fa-star"></i>9.3</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae odio ac dui
                                    fermentum tempus. Phasellus sit amet
                                </p>
                                <a href="detail.html#reviews" class="link icon">Full Review<i
                                            class="arrow_right"></i></a>
                            </div>
                            <!--end review-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="review-single">
                                <a href="detail.html#reviews"><h3>Camp Shoresh</h3></a>
                                <figure class="location">France</figure>
                                <div class="rating"><i class="fa fa-star"></i>9.6</div>
                                <p>Sed posuere nunc sit amet arcu rutrum porttitor. Quisque ut ante lacus. Fusce a
                                    lacus fermentum ante iaculis convallis
                                </p>
                                <a href="detail.html#reviews" class="link icon">Full Review<i
                                            class="arrow_right"></i></a>
                            </div>
                            <!--end review-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="review-single">
                                <a href="detail.html#reviews"><h3>Primal Court Resort</h3></a>
                                <figure class="location">Switzerland</figure>
                                <div class="rating"><i class="fa fa-star"></i>9.4</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae odio ac dui
                                    fermentum tempus.
                                </p>
                                <a href="detail.html#reviews" class="link icon">Full Review<i
                                            class="arrow_right"></i></a>
                            </div>
                            <!--end review-->
                        </div>
                        <!--end col-md-3-->
                    </div>
                    <!--end row-->
                </div>
                <!--end title-->
                <div class="bg color white"></div>
            </div>
            <!--end container-->
        </div>
        <!--end block-->
    </div>
    <!--end page-content-->

    <footer id="page-footer">
        <div class="row-one">
            <div class="container">
                <div class="logos">
                    <div class="logo">
                        <a href="#"><img src="img/logo-1.png" alt=""></a>
                    </div>
                    <!--/ .logo-->
                    <div class="logo">
                        <a href="#"><img src="img/logo-2.png" alt=""></a>
                    </div>
                    <!--/ .logo-->
                    <div class="logo">
                        <a href="#"><img src="img/logo-3.png" alt=""></a>
                    </div>
                    <!--/ .logo-->
                    <div class="logo">
                        <a href="#"><img src="img/logo-4.png" alt=""></a>
                    </div>
                    <!--/ .logo-->
                    <div class="logo">
                        <a href="#"><img src="img/logo-5.png" alt=""></a>
                    </div>
                    <!--/ .logo-->
                </div>
                <!--/ .logos-->
            </div>
        </div>
        <!--end row-one-->
        <div class="row-two clearfix">
            <div class="container">
                <div class="copyright pull-left">(C) 2016 Your Company, All Rights Reserved</div>
                <div class="footer-nav pull-right">
                    <a href="/">Home</a>
                    <a href="about-us.html">About Us</a>
                    <a href="listing">Listing</a>
                    <a href="contact-us.html">Contact Us</a>
                </div>
            </div>
            <div class="bg-transfer"><img src="img/footer-bg.jpg" alt=""></div>
        </div>
        <!--end row-two-->
    </footer>
    <!--end page-footer-->
</div>
<!--end page-wrapper-->
<a href="#page-header" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>


<script type="text/javascript" src="{{ asset('js/jquery-2.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/infobox.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/markerclusterer_packed.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/richmarker-compiled.js') }}"></script>
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/icheck.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/maps.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

<!--[if lte IE 9]>
<script src="{{ asset('js/ie.js') }}"></script>
<![endif]-->

<script>
    var _latitude = 48.47292127;
    var _longitude = 4.28672791;
    var element = "map-item";
    var useAjax = true;
    bigMap(_latitude, _longitude, element, useAjax);
</script>
</body>
