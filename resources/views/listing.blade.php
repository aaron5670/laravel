<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aaron van den Berg">


    <link href="{{ asset('fonts/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('fonts/elegant-fonts.css') }}" rel="stylesheet" type="text/css">

    <script src="//kit.fontawesome.com/ee8a994cdf.js"></script>

    <link href="//fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic" rel="stylesheet"
          type="text/css">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

    <title>Accommodo - Listings</title>

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
                                <li><a href="/">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li class="active">
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
                                <li class="submit"><a href="submit.html"><span>Submit</span>
                                        <i data-toggle="tooltip" data-placement="top" title="Submit">
                                            <img src="img/plus.png" alt="">
                                        </i>
                                    </a>
                                </li>
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
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Listing</a></li>
                <li class="active">Detail</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="box filter">
                            <h2>Search</h2>
                            <form id="form-filter" class="labels-uppercase">
                                <div class="form-group">
                                    <label for="form-filter-destination">Destination</label>
                                    <input type="text" class="form-control" id="form-filter-destination"
                                           name="destination" placeholder="Destination">
                                </div>
                                <!--end form-group-->
                                <div class="form-group-inline">
                                    <div class="form-group">
                                        <label for="form-filter-check-in">Check In</label>
                                        <input type="text" class="form-control date" id="form-filter-check-in"
                                               name="check-in" placeholder="Check In">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="form-filter-check-out">Nights</label>
                                        <input type="number" class="form-control" id="form-filter-check-out"
                                               name="check-out" placeholder="2">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-inline-->
                                <div class="center">
                                    <a href="#filter-advanced-search" class="link icon" data-toggle="collapse"
                                       aria-expanded="false" aria-controls="filter-advanced-search">Advanced Search<i
                                                class="fa fa-plus"></i></a>
                                </div>
                                <div class="collapse in" id="filter-advanced-search">
                                    <div class="wrapper">
                                        <h2>Filter<span data-show-after-time="1000" data-container="body"
                                                        data-toggle="popover" data-placement="right"
                                                        title="Try Filters!"
                                                        data-content="Get better results by using filters. Check what you like and what you don't."></span>
                                        </h2>
                                        <section>
                                            <h3>Rate (per night)</h3>
                                            <ul class="checkboxes list-unstyled">
                                                <li><label><input type="checkbox" name="hotel">$0 -
                                                        $50<span>12</span></label></li>
                                                <li><label><input type="checkbox" name="apartment">$50 -
                                                        $100<span>48</span></label></li>
                                                <li><label><input type="checkbox" name="breakfast-only">$150 -
                                                        $150<span>36</span></label></li>
                                                <li><label><input type="checkbox"
                                                                  name="spa-wellness">$150+<span>56</span></label></li>
                                            </ul>
                                            <!--end checkboxes-->
                                        </section>
                                        <!--end section-->
                                        <section>
                                            <h3>Property Type </h3>
                                            <ul class="checkboxes">
                                                <li><label><input type="checkbox" name="hotel">Apartmets<span>67</span></label>
                                                </li>
                                                <li><label><input type="checkbox" name="apartment">Hotels<span>31</span></label>
                                                </li>
                                                <li><label><input type="checkbox"
                                                                  name="breakfast-only">Boats<span>68</span></label>
                                                </li>
                                                <li><label><input type="checkbox"
                                                                  name="spa-wellness">Villas<span>52</span></label></li>
                                            </ul>
                                            <div class="collapse" id="all-property-types">
                                                <ul class="checkboxes">
                                                    <li><label><input type="checkbox" name="ski-center">Ski Center<span>67</span></label>
                                                    </li>
                                                    <li><label><input type="checkbox"
                                                                      name="cottage">Cottage<span>31</span></label></li>
                                                    <li><label><input type="checkbox"
                                                                      name="hostel">Hostel<span>68</span></label></li>
                                                    <li><label><input type="checkbox"
                                                                      name="boat">Boat<span>52</span></label></li>
                                                </ul>
                                            </div>
                                            <!--end checkboxes-->
                                            <a href="#all-property-types" class="link" data-toggle="collapse"
                                               aria-expanded="false" aria-controls="all-property-types">Show all</a>
                                        </section>
                                        <!--end section-->
                                        <section>
                                            <h3>Property Facility</h3>
                                            <ul class="checkboxes no-bottom-margin">
                                                <li><label><input type="checkbox"
                                                                  name="wi-fi">Wi-fi<span>12</span></label></li>
                                                <li><label><input type="checkbox" name="free-parking">Free Parking<span>48</span></label>
                                                </li>
                                                <li><label><input type="checkbox" name="airport">Airport
                                                        Shuttle<span>36</span></label></li>
                                                <li><label><input type="checkbox" name="family-rooms">Family Rooms<span>56</span></label>
                                                </li>
                                            </ul>
                                            <!--end checkboxes-->
                                        </section>
                                        <!--end section-->
                                    </div>
                                    <!--end filter-advanced-search-->
                                </div>
                                <!--end collapse-->
                                <div class="form-group center">
                                    <button type="submit" class="btn btn-primary btn-rounded form-control">Search
                                    </button>
                                </div>
                            </form>
                            <!--end form-filter-->
                        </div>
                        <!--end filter-->
                        <a href="#" class="advertising-banner">
                            <span class="banner-badge">Advertising</span>
                            <img src="img/ad-banner-02.jpg" alt="">
                        </a>
                    </div>
                    <!--end sidebar-->
                </div>
                <div class="col-md-9">
                    <div class="main-content">
                        <div class="title">
                            <h1>Listing</h1>
                            <div class="display-selector">
                                <span>Display:</span>
                                <a href="listing" class="active" data-toggle="tooltip" data-placement="left"
                                   title="Display list"><i class="fa fa-th-list"></i></a>
                                <a href="listing-matrix.html" data-toggle="tooltip" data-placement="left"
                                   title="Display matrix"><i class="fa fa-th"></i></a>
                            </div>
                        </div>
                        <!--end title-->
                        @foreach ($listings as $listing)
                            <div class="item list" data-map-latitude="48.87" data-map-longitude="2.29" data-id="1">
                                <div class="image-wrapper">
                                    <div class="mark-circle description" data-toggle="tooltip" data-placement="right"
                                         title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. ">
                                        <i class="fa fa-question"></i></div>
                                    <div class="mark-circle map" data-toggle="tooltip" data-placement="right"
                                         title="Show on map"><i class="fa fa-map-marker"></i></div>
                                    <div class="mark-circle top" data-toggle="tooltip" data-placement="right"
                                         title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                    <div class="image">
                                        <a href="detail.html" class="wrapper">
                                            <div class="gallery">
                                                <img src="{{ $listing->img1 }}" alt="">
                                                <img src="#" class="owl-lazy" alt="" data-src="{{ $listing->img2 }}">
                                                <img src="#" class="owl-lazy" alt="" data-src="{{ $listing->img3 }}">
                                            </div>
                                        </a>
                                        <div class="map-item">
                                            <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                            <div class="map-wrapper"></div>
                                        </div>
                                        <!--end map-item-->
                                        <div class="owl-navigation"></div>
                                        <!--end owl-navigation-->
                                    </div>
                                </div>
                                <!--end image-->
                                <div class="description">
                                    <div class="meta">
                                        <span><i class="fa fa-star"></i>{{ $listing->stars }}</span>
                                        <span><i class="fa fa-bed"></i>365</span>
                                    </div>
                                    <!--end meta-->
                                    <div class="info">
                                        <a href="detail.html"><h3>{{ $listing->title }}</h3></a>
                                        <figure class="location">Montenegro</figure>
                                        <figure class="label label-info">{{ $listing->type }}</figure>
                                        <figure class="live-info">3 Persons watching now!</figure>
                                        <p>
                                            {{ $listing->description }}
                                        </p>
                                        <div class="price-info">From<span class="price">$32</span><span
                                                    class="appendix">/night</span>
                                        </div>
                                        <a href="detail.html" class="btn btn-rounded btn-default btn-framed btn-small">
                                            View detail</a>
                                    </div>
                                    <!--end info-->
                                </div>
                                <!--end description-->
                            </div>
                    @endforeach
                    <!--end item-->
                        <div class="item list" data-map-latitude="48.87" data-map-longitude="2.29" data-id="2">
                            <div class="image-wrapper">
                                <div class="mark-circle description" data-toggle="tooltip" data-placement="right"
                                     title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. ">
                                    <i class="fa fa-question"></i></div>
                                <div class="mark-circle map" data-toggle="tooltip" data-placement="right"
                                     title="Show on map"><i class="fa fa-map-marker"></i></div>
                                <div class="image">
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="img/items/02.jpg" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/03.jpg">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/04.jpg">
                                        </div>
                                    </a>
                                    <div class="map-item">
                                        <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                        <div class="map-wrapper"></div>
                                    </div>
                                    <!--end map-item-->
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                            </div>
                            <!--end image-->
                            <div class="description">
                                <div class="meta">
                                    <span><i class="fa fa-star"></i>4,5</span>
                                    <span><i class="fa fa-bed"></i>158</span>
                                </div>
                                <!--end meta-->
                                <div class="info">
                                    <a href="detail.html"><h3>Mountain Paradise</h3></a>
                                    <figure class="location">Austria</figure>
                                    <figure class="label label-info">Hotel</figure>
                                    <figure class="label label-danger">1 Room Left!</figure>
                                    <p>
                                        Consectetur adipiscing elit. Vivamus nec augue ac dui sodales euismod.
                                        Suspendisse
                                        at dui sit amet felis commodo dictum. Class aptent taciti sociosqu ad
                                        litora torquent per conubia nostra,
                                    </p>
                                    <div class="price-info">From<span class="price">$64</span><span class="appendix">/night</span>
                                    </div>
                                    <a href="detail.html" class="btn btn-rounded btn-default btn-framed btn-small">View
                                        detail</a>
                                </div>
                                <!--end info-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--end item-->
                        <div class="item list" data-map-latitude="48.87" data-map-longitude="2.29" data-id="3">
                            <div class="image-wrapper">
                                <div class="mark-circle description" data-toggle="tooltip" data-placement="right"
                                     title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. ">
                                    <i class="fa fa-question"></i></div>
                                <div class="mark-circle map" data-toggle="tooltip" data-placement="right"
                                     title="Show on map"><i class="fa fa-map-marker"></i></div>
                                <div class="image">
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="img/items/03.jpg" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/04.jpg">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/05.jpg">
                                        </div>
                                    </a>
                                    <div class="map-item">
                                        <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                        <div class="map-wrapper"></div>
                                    </div>
                                    <!--end map-item-->
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                            </div>
                            <!--end image-->
                            <div class="description">
                                <div class="meta">
                                    <span><i class="fa fa-star"></i>8.9</span>
                                    <span><i class="fa fa-bed"></i>469</span>
                                </div>
                                <!--end meta-->
                                <div class="info">
                                    <a href="detail.html"><h3>Twin Oaks Resort</h3></a>
                                    <figure class="location">Switzerland</figure>
                                    <figure class="label label-info">Hotel</figure>
                                    <p>
                                        Consectetur adipiscing elit. Vivamus nec augue ac dui sodales euismod.
                                        Suspendisse
                                        at dui sit amet felis commodo dictum. Class aptent taciti sociosqu ad
                                        litora torquent per conubia nostra,
                                    </p>
                                    <div class="price-info"><span class="price warning">Sold Out</span></div>
                                    <a href="detail.html" class="btn btn-rounded btn-default btn-framed btn-small">View
                                        detail</a>
                                </div>
                                <!--end info-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--end item-->
                        <div class="item list" data-map-latitude="48.87" data-map-longitude="2.29" data-id="4">
                            <div class="ribbon">
                                <div class="offer-number">20%</div>
                                <figure>Off Today!</figure>
                            </div>
                            <div class="image-wrapper">
                                <div class="mark-circle description" data-toggle="tooltip" data-placement="right"
                                     title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. ">
                                    <i class="fa fa-question"></i></div>
                                <div class="mark-circle map" data-toggle="tooltip" data-placement="right"
                                     title="Show on map"><i class="fa fa-map-marker"></i></div>
                                <div class="mark-circle top" data-toggle="tooltip" data-placement="right"
                                     title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                <div class="image">
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="img/items/04.jpg" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/05.jpg">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/06.jpg">
                                        </div>
                                    </a>
                                    <div class="map-item">
                                        <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                        <div class="map-wrapper"></div>
                                    </div>
                                    <!--end map-item-->
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                            </div>
                            <!--end image-->
                            <div class="description">
                                <div class="meta">
                                    <span><i class="fa fa-star"></i>9.8</span>
                                    <span><i class="fa fa-bed"></i>324</span>
                                </div>
                                <!--end meta-->
                                <div class="info">
                                    <a href="detail.html"><h3>Sunrise Sanctum </h3></a>
                                    <figure class="location">Finland</figure>
                                    <figure class="label label-info">Hotel</figure>
                                    <p>
                                        Consectetur adipiscing elit. Vivamus nec augue ac dui sodales euismod.
                                        Suspendisse
                                        at dui sit amet felis commodo dictum. Class aptent taciti sociosqu ad
                                        litora torquent per conubia nostra,
                                    </p>
                                    <div class="price-info">From<span class="price">$46,90</span><span class="appendix">/night</span>
                                    </div>
                                    <a href="detail.html" class="btn btn-rounded btn-default btn-framed btn-small">View
                                        detail</a>
                                </div>
                                <!--end info-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--end item-->

                        <div class="item list" data-map-latitude="48.87" data-map-longitude="2.29" data-id="5">
                            <div class="image-wrapper">
                                <div class="mark-circle description" data-toggle="tooltip" data-placement="right"
                                     title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. ">
                                    <i class="fa fa-question"></i></div>
                                <div class="mark-circle map" data-toggle="tooltip" data-placement="right"
                                     title="Show on map"><i class="fa fa-map-marker"></i></div>
                                <div class="mark-circle top" data-toggle="tooltip" data-placement="right"
                                     title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                <div class="image">
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="img/items/05.jpg" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/02.jpg">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/03.jpg">
                                        </div>
                                    </a>
                                    <div class="map-item">
                                        <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                        <div class="map-wrapper"></div>
                                    </div>
                                    <!--end map-item-->
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                            </div>
                            <!--end image-->
                            <div class="description">
                                <div class="meta">
                                    <span><i class="fa fa-star"></i>8.9</span>
                                    <span><i class="fa fa-bed"></i>365</span>
                                </div>
                                <!--end meta-->
                                <div class="info">
                                    <a href="detail.html"><h3>Spring Hotel</h3></a>
                                    <figure class="location">Montenegro</figure>
                                    <figure class="label label-info">Hotel</figure>
                                    <figure class="live-info">3 Persons watching now!</figure>
                                    <p>
                                        Consectetur adipiscing elit. Vivamus nec augue ac dui sodales euismod.
                                        Suspendisse
                                        at dui sit amet felis commodo dictum. Class aptent taciti sociosqu ad
                                        litora torquent per conubia nostra,
                                    </p>
                                    <div class="price-info">From<span class="price">$32</span><span class="appendix">/night</span>
                                    </div>
                                    <a href="detail.html" class="btn btn-rounded btn-default btn-framed btn-small">View
                                        detail</a>
                                </div>
                                <!--end info-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--end item-->
                        <div class="item list" data-map-latitude="48.87" data-map-longitude="2.29" data-id="6">
                            <div class="image-wrapper">
                                <div class="mark-circle description" data-toggle="tooltip" data-placement="right"
                                     title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. ">
                                    <i class="fa fa-question"></i></div>
                                <div class="mark-circle map" data-toggle="tooltip" data-placement="right"
                                     title="Show on map"><i class="fa fa-map-marker"></i></div>
                                <div class="image">
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="img/items/06.jpg" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/03.jpg">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/04.jpg">
                                        </div>
                                    </a>
                                    <div class="map-item">
                                        <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                        <div class="map-wrapper"></div>
                                    </div>
                                    <!--end map-item-->
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                            </div>
                            <!--end image-->
                            <div class="description">
                                <div class="meta">
                                    <span><i class="fa fa-star"></i>4,5</span>
                                    <span><i class="fa fa-bed"></i>158</span>
                                </div>
                                <!--end meta-->
                                <div class="info">
                                    <a href="detail.html"><h3>Mountain Paradise</h3></a>
                                    <figure class="location">Austria</figure>
                                    <figure class="label label-info">Hotel</figure>
                                    <figure class="label label-danger">1 Room Left!</figure>
                                    <p>
                                        Consectetur adipiscing elit. Vivamus nec augue ac dui sodales euismod.
                                        Suspendisse
                                        at dui sit amet felis commodo dictum. Class aptent taciti sociosqu ad
                                        litora torquent per conubia nostra,
                                    </p>
                                    <div class="price-info">From<span class="price">$64</span><span class="appendix">/night</span>
                                    </div>
                                    <a href="detail.html" class="btn btn-rounded btn-default btn-framed btn-small">View
                                        detail</a>
                                </div>
                                <!--end info-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--end item-->
                        <div class="item list" data-map-latitude="48.87" data-map-longitude="2.29" data-id="7">
                            <div class="image-wrapper">
                                <div class="mark-circle description" data-toggle="tooltip" data-placement="right"
                                     title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. ">
                                    <i class="fa fa-question"></i></div>
                                <div class="mark-circle map" data-toggle="tooltip" data-placement="right"
                                     title="Show on map"><i class="fa fa-map-marker"></i></div>
                                <div class="image">
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="img/items/07.jpg" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/04.jpg">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/05.jpg">
                                        </div>
                                    </a>
                                    <div class="map-item">
                                        <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                        <div class="map-wrapper"></div>
                                    </div>
                                    <!--end map-item-->
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                            </div>
                            <!--end image-->
                            <div class="description">
                                <div class="meta">
                                    <span><i class="fa fa-star"></i>8.9</span>
                                    <span><i class="fa fa-bed"></i>469</span>
                                </div>
                                <!--end meta-->
                                <div class="info">
                                    <a href="detail.html"><h3>Twin Oaks Resort</h3></a>
                                    <figure class="location">Switzerland</figure>
                                    <figure class="label label-info">Hotel</figure>
                                    <p>
                                        Consectetur adipiscing elit. Vivamus nec augue ac dui sodales euismod.
                                        Suspendisse
                                        at dui sit amet felis commodo dictum. Class aptent taciti sociosqu ad
                                        litora torquent per conubia nostra,
                                    </p>
                                    <div class="price-info"><span class="price warning">Sold Out</span></div>
                                    <a href="detail.html" class="btn btn-rounded btn-default btn-framed btn-small">View
                                        detail</a>
                                </div>
                                <!--end info-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--end item-->
                        <div class="item list" data-map-latitude="48.87" data-map-longitude="2.29" data-id="8">
                            <div class="ribbon">
                                <div class="offer-number">20%</div>
                                <figure>Off Today!</figure>
                            </div>
                            <div class="image-wrapper">
                                <div class="mark-circle description" data-toggle="tooltip" data-placement="right"
                                     title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. ">
                                    <i class="fa fa-question"></i></div>
                                <div class="mark-circle map" data-toggle="tooltip" data-placement="right"
                                     title="Show on map"><i class="fa fa-map-marker"></i></div>
                                <div class="mark-circle top" data-toggle="tooltip" data-placement="right"
                                     title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                <div class="image">
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="img/items/08.jpg" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/05.jpg">
                                            <img src="#" class="owl-lazy" alt="" data-src="img/items/06.jpg">
                                        </div>
                                    </a>
                                    <div class="map-item">
                                        <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                        <div class="map-wrapper"></div>
                                    </div>
                                    <!--end map-item-->
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                            </div>
                            <!--end image-->
                            <div class="description">
                                <div class="meta">
                                    <span><i class="fa fa-star"></i>9.8</span>
                                    <span><i class="fa fa-bed"></i>324</span>
                                </div>
                                <!--end meta-->
                                <div class="info">
                                    <a href="detail.html"><h3>Sunrise Sanctum </h3></a>
                                    <figure class="location">Finland</figure>
                                    <figure class="label label-info">Hotel</figure>
                                    <p>
                                        Consectetur adipiscing elit. Vivamus nec augue ac dui sodales euismod.
                                        Suspendisse
                                        at dui sit amet felis commodo dictum. Class aptent taciti sociosqu ad
                                        litora torquent per conubia nostra,
                                    </p>
                                    <div class="price-info">From<span class="price">$46,90</span><span class="appendix">/night</span>
                                    </div>
                                    <a href="detail.html" class="btn btn-rounded btn-default btn-framed btn-small">View
                                        detail</a>
                                </div>
                                <!--end info-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--end item-->
                        <div class="center">
                            <ul class="pagination">
                                <li class="prev">
                                    <a href="#"><i class="arrow_left"></i></a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li class="next">
                                    <a href="#"><i class="arrow_right"></i></a>
                                </li>
                            </ul>
                            <!-- end pagination-->
                        </div>
                        <!-- end center-->
                    </div>
                    <!--end main-content-->
                </div>
                <!--end col-md-9-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
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

<div class="message-popup featured top-right" data-show-after-time="3000">
    <div class="close"><i class="fa fa-times"></i></div>
    <div class="title">No time for searching?</div>
    <p>Enter your name and email and we will send you the 15 most favorite accommodations.</p>
    <form class="labels-uppercase" id="form-popup">
        <div class="form-group">
            <label for="form-popup-name">Your Name<em>*</em></label>
            <input type="text" class="form-control" id="form-popup-name" name="name" placeholder="Name" required="">
        </div>
        <div class="form-group">
            <label for="form-popup-email">Your Email<em>*</em></label>
            <input type="email" class="form-control" id="form-popup-email" name="email" placeholder="Email" required="">
        </div>
        <div class="form-group pull-right">
            <button type="submit" class="btn btn-white btn-framed btn-rounded">Send Me</button>
        </div>
    </form>
</div>

<script type="text/javascript" src="{{ asset('js/jquery-2.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript" src="{{ asset('js/richmarker-compiled.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/markerwithlabel_packed.js') }}"></script>
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
</body>
