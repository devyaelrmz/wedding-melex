<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Wedding &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
        <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
        <meta name="author" content="FREEHTML5.CO" />

        <!-- 
        //////////////////////////////////////////////////////

        FREE HTML5 TEMPLATE 
        DESIGNED & DEVELOPED by FREEHTML5.CO
            
        Website: 		http://freehtml5.co/
        Email: 			info@freehtml5.co
        Twitter: 		http://twitter.com/fh5co
        Facebook: 		https://www.facebook.com/fh5co

        //////////////////////////////////////////////////////
        -->

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
        
        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="css/icomoon.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!-- Owl Carousel  -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <!-- Theme style  -->
        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

        <style>
            #eac-container-autocomplete-search ul {
                border-radius: 0 0 10px 10px;
                background: rgba(0, 0, 0, 0.2);
                list-style: none;
            }
            
            #eac-container-autocomplete-search ul li {
                color: #FFF;
            }

            .swal2-container {
                background-size: contain !important;
            }

            .swal2-modal {
                background-size: cover !important;
            }
            
            .btn-text-lg {
                font-size: 1.5rem !important;
            }

            * {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}

#grad1 {
    background-color: : #9C27B0;
    background-image: linear-gradient(120deg, #FF4081, #81D4FA)
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;
    position: relative
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E
}

#msform input,
#msform textarea {
    padding: 0px 8px 4px 8px;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 2px solid skyblue;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: skyblue;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button:hover,
#msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
}

select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px
}

select.list-dt:focus {
    border-bottom: 2px solid skyblue
}

.card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #000000
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 25%;
    float: left;
    position: relative
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f023"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: skyblue
}

.radio-group {
    position: relative;
    margin-bottom: 25px
}

.radio {
    display: inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
}

.radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
}

.fit-image {
    width: 100%;
    object-fit: cover
}
        </style>

        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->

	</head>

    <body>
        <div class="fh5co-loader"></div>
        
        <div id="page">
            <nav class="fh5co-nav" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="fh5co-logo"><a href="index.html">Wedding<strong>.</strong></a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="about.html">Story</a></li>
                                <li class="has-dropdown">
                                    <a href="services.html">Services</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Web Design</a></li>
                                        <li><a href="#">eCommerce</a></li>
                                        <li><a href="#">Branding</a></li>
                                        <li><a href="#">API</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="gallery.html">Gallery</a>
                                    <ul class="dropdown">
                                        <li><a href="#">HTML5</a></li>
                                        <li><a href="#">CSS3</a></li>
                                        <li><a href="#">Sass</a></li>
                                        <li><a href="#">jQuery</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </nav>

            <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="display-t">
                                <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                    <h1>Joefrey &amp; Sheila</h1>
                                    <h2>We Are Getting Married</h2>
                                    <div class="simply-countdown simply-countdown-one"></div>
                                    <p><a href="#" class="btn btn-default btn-sm">Save the date</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- <div id="fh5co-couple">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                            <h2>Hello!</h2>
                            <h3>November 28th, 2016 New York, USA</h3>
                            <p>We invited you to celebrate our wedding</p>
                        </div>
                    </div>
                    <div class="couple-wrap animate-box">
                        <div class="couple-half">
                            <div class="groom">
                                <img src="images/groom.jpg" alt="groom" class="img-responsive">
                            </div>
                            <div class="desc-groom">
                                <h3>Joefrey Mahusay</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                            </div>
                        </div>
                        <p class="heart text-center"><i class="icon-heart2"></i></p>
                        <div class="couple-half">
                            <div class="bride">
                                <img src="images/bride.jpg" alt="groom" class="img-responsive">
                            </div>
                            <div class="desc-bride">
                                <h3>Sheila Mahusay</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/img_bg_3.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                            <span>Our Special Events</span>
                            <h2>Wedding Events</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="display-t">
                            <div class="display-tc">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="col-md-6 col-sm-6 text-center">
                                        <div class="event-wrap animate-box">
                                            <h3>Main Ceremony</h3>
                                            <div class="event-col">
                                                <i class="icon-clock"></i>
                                                <span>4:00 PM</span>
                                                <span>6:00 PM</span>
                                            </div>
                                            <div class="event-col">
                                                <i class="icon-calendar"></i>
                                                <span>Monday 28</span>
                                                <span>November, 2016</span>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 text-center">
                                        <div class="event-wrap animate-box">
                                            <h3>Wedding Party</h3>
                                            <div class="event-col">
                                                <i class="icon-clock"></i>
                                                <span>7:00 PM</span>
                                                <span>12:00 AM</span>
                                            </div>
                                            <div class="event-col">
                                                <i class="icon-calendar"></i>
                                                <span>Monday 28</span>
                                                <span>November, 2016</span>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-couple-story">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                            <span>We Love Each Other</span>
                            <h2>Our Story</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-md-offset-0">
                            <ul class="timeline animate-box">
                                <li class="animate-box">
                                    <div class="timeline-badge" style="background-image:url(images/couple-1.jpg);"></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h3 class="timeline-title">First We Meet</h3>
                                            <span class="date">December 25, 2015</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted animate-box">
                                    <div class="timeline-badge" style="background-image:url(images/couple-2.jpg);"></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h3 class="timeline-title">First Date</h3>
                                            <span class="date">December 28, 2015</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="animate-box">
                                    <div class="timeline-badge" style="background-image:url(images/couple-3.jpg);"></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h3 class="timeline-title">In A Relationship</h3>
                                            <span class="date">January 1, 2016</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-gallery" class="fh5co-section-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                            <span>Our Memories</span>
                            <h2>Wedding Gallery</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                    <div class="row row-bottom-padded-md">
                        <div class="col-md-12">
                            <ul id="fh5co-gallery-list">
                                
                                <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-1.jpg); "> 
                                <a href="images/gallery-1.jpg">
                                    <div class="case-studies-summary">
                                        <span>14 Photos</span>
                                        <h2>Two Glas of Juice</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-2.jpg); ">
                                <a href="#" class="color-2">
                                    <div class="case-studies-summary">
                                        <span>30 Photos</span>
                                        <h2>Timer starts now!</h2>
                                    </div>
                                </a>
                            </li>


                            <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-3.jpg); ">
                                <a href="#" class="color-3">
                                    <div class="case-studies-summary">
                                        <span>90 Photos</span>
                                        <h2>Beautiful sunset</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-4.jpg); ">
                                <a href="#" class="color-4">
                                    <div class="case-studies-summary">
                                        <span>12 Photos</span>
                                        <h2>Company's Conference Room</h2>
                                    </div>
                                </a>
                            </li>

                                <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-5.jpg); ">
                                    <a href="#" class="color-3">
                                        <div class="case-studies-summary">
                                            <span>50 Photos</span>
                                            <h2>Useful baskets</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-6.jpg); ">
                                    <a href="#" class="color-4">
                                        <div class="case-studies-summary">
                                            <span>45 Photos</span>
                                            <h2>Skater man in the road</h2>
                                        </div>
                                    </a>
                                </li>

                                <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-7.jpg); ">
                                    <a href="#" class="color-4">
                                        <div class="case-studies-summary">
                                            <span>35 Photos</span>
                                            <h2>Two Glas of Juice</h2>
                                        </div>
                                    </a>
                                </li>

                                <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-8.jpg); "> 
                                    <a href="#" class="color-5">
                                        <div class="case-studies-summary">
                                            <span>90 Photos</span>
                                            <h2>Timer starts now!</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-9.jpg); ">
                                    <a href="#" class="color-6">
                                        <div class="case-studies-summary">
                                            <span>56 Photos</span>
                                            <h2>Beautiful sunset</h2>
                                        </div>
                                    </a>
                                </li>
                            </ul>		
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url(images/img_bg_5.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="display-t">
                            <div class="display-tc">
                                <div class="col-md-3 col-sm-6 animate-box">
                                    <div class="feature-center">
                                        <span class="icon">
                                            <i class="icon-users"></i>
                                        </span>

                                        <span class="counter js-counter" data-from="0" data-to="500" data-speed="5000" data-refresh-interval="50">1</span>
                                        <span class="counter-label">Estimated Guest</span>

                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 animate-box">
                                    <div class="feature-center">
                                        <span class="icon">
                                            <i class="icon-user"></i>
                                        </span>

                                        <span class="counter js-counter" data-from="0" data-to="1000" data-speed="5000" data-refresh-interval="50">1</span>
                                        <span class="counter-label">We Catter</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 animate-box">
                                    <div class="feature-center">
                                        <span class="icon">
                                            <i class="icon-calendar"></i>
                                        </span>
                                        <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
                                        <span class="counter-label">Events Done</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 animate-box">
                                    <div class="feature-center">
                                        <span class="icon">
                                            <i class="icon-clock"></i>
                                        </span>

                                        <span class="counter js-counter" data-from="0" data-to="2345" data-speed="5000" data-refresh-interval="50">1</span>
                                        <span class="counter-label">Hours Spent</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-testimonial">
                <div class="container">
                    <div class="row">
                        <div class="row animate-box">
                            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                                <span>Best Wishes</span>
                                <h2>Friends Wishes</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box">
                                <div class="wrap-testimony">
                                    <div class="owl-carousel-fullwidth">
                                        <div class="item">
                                            <div class="testimony-slide active text-center">
                                                <figure>
                                                    <img src="images/couple-1.jpg" alt="user">
                                                </figure>
                                                <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                                <blockquote>
                                                    <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics"</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="testimony-slide active text-center">
                                                <figure>
                                                    <img src="images/couple-2.jpg" alt="user">
                                                </figure>
                                                <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                                <blockquote>
                                                    <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, at the coast of the Semantics, a large language ocean."</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="testimony-slide active text-center">
                                                <figure>
                                                    <img src="images/couple-3.jpg" alt="user">
                                                </figure>
                                                <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                                <blockquote>
                                                    <p>"Far far away, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-services" class="fh5co-section-gray">
                <div class="container">
                    
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <h2>We Offer Services</h2>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                                <span class="icon">
                                    <i class="icon-calendar"></i>
                                </span>
                                <div class="feature-copy">
                                    <h3>We Organized Events</h3>
                                    <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                                </div>
                            </div>

                            <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                                <span class="icon">
                                    <i class="icon-image"></i>
                                </span>
                                <div class="feature-copy">
                                    <h3>Photoshoot</h3>
                                    <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                                </div>
                            </div>

                            <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                                <span class="icon">
                                    <i class="icon-video"></i>
                                </span>
                                <div class="feature-copy">
                                    <h3>Video Editing</h3>
                                    <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6 animate-box">
                            <div class="fh5co-video fh5co-bg" style="background-image: url(images/img_bg_3.jpg); ">
                                <a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video2"></i></a>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div> -->

            <div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <h2>Are You Attending?</h2>
                            <p>Please Fill-up the form to notify you that you're attending. Thanks.</p>
                        </div>
                    </div>

                    <div class="row animate-box">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Name</label>

                                    <input type="name" class="form-control" id="autocomplete-search" placeholder="Nombre del titular de la invitación">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer id="fh5co-footer" role="contentinfo">
                <div class="container">

                    <div class="row copyright">
                        <div class="col-md-12 text-center">
                            <p>
                                <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
                                <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
                            </p>
                            <p>
                                <ul class="fh5co-social-icons">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                                </ul>
                            </p>
                        </div>
                    </div>

                </div>
            </footer>
        </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>
        
        <!-- jQuery -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- jQuery Easing -->
        <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Waypoints -->
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <!-- Carousel -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- countTo -->
        <script src="{{ asset('js/jquery.countTo.js') }}"></script>

        <!-- Stellar -->
        <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
        <!-- Magnific Popup -->
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/magnific-popup-options.js') }}"></script>

        <!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
        <script src="{{ asset('js/simplyCountdown.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/jquery.easy-autocomplete.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Main -->
        <script src="{{ asset('js/main.js') }}"></script>
        
        <script src="{{ asset('js/inputmask/jquery.inputmask.js') }}"></script>
        <script src="{{ asset('js/modal.js') }}"></script>

        <script>
            window.CSRF_TOKEN = '{{ csrf_token() }}';

            $("#autocomplete-search").easyAutocomplete({
                url: function(search) {
                return "{{ route('searchForGuests') }}?search=" + search;
                },
                getValue: "titular_invitacion",
                list: {
                    onChooseEvent: function() {
                        var selectedPost = $("#autocomplete-search").getSelectedItemData();
                        var asistent = $("#autocomplete-search").val();

                        var wallpaper = "{{ asset('images/resources/fondo.png') }}"
                        
                        $("#welcomeName").html( asistent );
                        
                        Swal.fire({
                            width: 600,
                            padding: '3em',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            allowEnterKey: false,
                            showClass: {
                                popup: 'animate__animated animate__fadeInDown'
                            },
                            hideClass: {
                                popup: 'animate__animated animate__fadeOutUp'
                            },
                            html: `
                                <div class="col-xs-12" id="contentGral">
                                    <h2>
                                    Hola <br>

                                    <b>${ asistent }</b>
                                    </h2> <br>

                                    <h4>¿Nos acompañarás en nuestra boda?</h4> <br>

                                    <button class="btn" style="background-color: #F14E95; color: white;" onClick="searchAssistance('${ asistent }')">
                                    ¡Por supuesto!
                                    </button>

                                    <button class="btn" style="background-color: #C579E0; color: white;" onClick="assistanceConfirmation(false, '${ asistent }', 0)">
                                    No, lo siento
                                    </button>
                                </div>
                            `,
                            showCloseButton: false,
                            showCancelButton: false,
                            showConfirmButton: false,
                            focusConfirm: false,
                            backdrop: `
                                rgba(0,0,123,0.4)
                                url("{{ asset('images/resources/collage.jpg') }}")
                                center center
                            `
                        });
                    }
                }
            });
        </script>
	</body>
</html>
