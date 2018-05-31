@extends('layouts.index')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha18/css/tempusdominus-bootstrap-4.min.css" />

    <style class="">

        #booking {
            padding: 0% 15%;
        }

        .form-group {
            padding-left: 10%;
        }

        select.form-control {
            width: auto;
        }
        input.form-control {
            width: 50% !important;
        }

        textarea.form-control {
            width: 50% !important;
        }

        input#vreme {
            width: 100% !important;
        }

        #booking label {
            color: yellow;
        }
        .dropdown-menu {
            width: 190% !important;
        }

        .bootstrap-datetimepicker-widget .timepicker-hour, .bootstrap-datetimepicker-widget .timepicker-minute, .bootstrap-datetimepicker-widget .timepicker-second {
            color: black;
        }
        .bootstrap-datetimepicker-widget table td {
            color: black;
        }
        .table>thead>tr>th {
            color:black;
        }
    </style>

@endsection

@section('content')

    <!-- Hero section starts-->
    <section id="hero" class="hero page">
        <div class="details">
            <div class="container-custom group">
                <div class="package wow fadeInUp">
                    <!-- viewport -->
                    <div id="items">
                        <!-- cube -->
                        <div id="front" class="front">
                            <img src="images/book/book-front-large.png" alt='published-img'>
                        </div>

                        <div class="side">
                        </div>

                        <div id="back" class="back">
                            <img src="images/book/book-back-large.png" alt='published-img'>
                        </div>
                    </div>
                </div>
                <div class="book-buttons">
                    <button class="flip-book book-button wow fadeInLeft" data-wow-delay="0.3s">
                        <i class="fa fa-exchange flip-icon"></i>
                        <span>flip to back</span>
                    </button>

                    <div class="enlarge wow fadeInLeft" data-wow-delay="0.6s">
                        <a class="front-img popup" href="images/book/book-front-large.png" data-effect="mfp-move-horizontal"></a>
                        <a class="back-img popup" href="images/book/book-back-large.png" data-effect="mfp-move-horizontal"></a>
                        <button class="book-button">
                            <i class="fa fa-expand"></i>
                            <span>enlarge</span>
                        </button>
                    </div>

                    <!-- look inside button -->
                    <ul id="inline-popups" class="look-inside wow fadeInLeft" data-wow-delay="0.9s">
                        <li>
                            <i class="fa fa-search-plus"></i>
                            <a href="#test-popup" data-effect="mfp-move-horizontal">look inside</a></li>
                    </ul>

                    <!-- Look Inside Content -->
                    <div id="test-popup" class="white-popup mfp-with-anim mfp-hide">
                        <div class="popup-header">
                            <span class="popup-title">Podcast 101 |</span><span> Master The Art of Conversation and Business</span>
                        </div>
                        <div class="white-popup-inner">
                            <div class="book-wrapper text-center">
                                <div class="popup-book-page">
                                    <img src="images/book/book-front-large.png" class="img-responsive" alt='published-img'>
                                </div>
                                <div class="popup-book-page">
                                    <img src="images/book/page1.jpg" class="img-responsive look-inside-page" alt='published-img'>
                                </div>
                                <div class="popup-book-page">
                                    <img src="images/book/page1.jpg" class="img-responsive look-inside-page" alt='published-img'>
                                </div>
                                <div class="popup-book-page">
                                    <img src="images/book/book-back-large.png" class="img-responsive" alt='published-img'>
                                </div>
                            </div>
                        </div>
                    </div>




                    <button id="playpausebtn" class="listen book-button wow fadeInLeft" tabindex="0" data-trigger="focus" data-toggle="popover" data-placement="bottom" data-content="You can put your audible book excerpt here" data-wow-delay="1.2s">
                        <i class="fa fa-play-circle-o"></i>
                        <span>Listen</span>
                    </button>
                </div>



                <div class="features clearfix wow fadeInUp" data-wow-delay="0.3s">

                    <h1 class="text-center">Podcast 101</h1>
                    <blockquote>
                        We specialize in airport taxi transfers to and from Podgorica Airport with the accent on a courteous, professional and personal service at affordable prices. 24  hours a day, 7 days a week.
                        You will get the cheapest possible price for your transportation from Podgorica airport, and most importantly, regular, licensed taxi. Reservations are not charged , just the actual transfer.

                    </blockquote>

                    <a data-scroll href="#what-you-learn" class="buy-now btn btn-block custom-button">order your copy</a>

                </div>
            </div><!-- End: .container-custom -->
        </div><!-- End: .details -->
    </section>
    <!-- Hero section ends-->

    {{--Thank you message after successful booking --}}

    @if(session('message'))

        <div style='position:fixed;top:60%;left:56%;font-weight:bold;font-size: 14px;' id='taxibooked'>{{session('message')}} <h3 class="" style="color: #30ff50;">You booked your vehicle !!</h3></div>



    @endif

    <!-- as seen on section starts-->
    <section id="as-seen-on" class="as-seen-on page">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">This book has been featured on</h3>
                </div>
                <div class="col-md-12">
                    <ul class="row">
                        <li class="col-xs-6 col-sm-4 col-md-2 as-seen-img"><img src="http://placehold.it/102X84" alt='published-img' class="img-responsive" width="80"></li>
                        <li class="col-xs-6 col-sm-4 col-md-2 as-seen-img"><img src="http://placehold.it/102X84" alt='published-img' class="img-responsive" width="80"></li>
                        <li class="col-xs-6 col-sm-4 col-md-2 as-seen-img"><img src="http://placehold.it/102X84" alt='published-img' class="img-responsive" width="80"></li>
                        <li class="col-xs-6 col-sm-4 col-md-2 as-seen-img"><img src="http://placehold.it/102X84" alt='published-img' class="img-responsive" width="80"></li>
                        <li class="col-xs-6 col-sm-4 col-md-2 as-seen-img"><img src="http://placehold.it/102X84" alt='published-img' class="img-responsive" width="80"></li>
                        <li class="col-xs-6 col-sm-4 col-md-2 as-seen-img"><img src="http://placehold.it/102X84" alt='published-img' class="img-responsive" width="80"></li>
                    </ul>
                </div>
            </div><!-- End: .row -->
        </div><!-- End: .row --><!-- End: .container-->
    </section>
    <!-- as seen on section ends -->

    <!-- book trailer -->
    <section id="book-trailer" class="book-trailer page">
        <div class="container">
            <div class="trailer-text text-center">
                <a class="popup-vimeo wow fadeInUp" href="//vimeo.com/45830194">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                            <g>
                                <path fill="#fff" stroke="none" stroke-width="2" stroke-miterlimit="10" d="M53.92,10.081
                                                    c12.107,12.105,12.107,31.732,0,43.838c-12.106,12.108-31.734,12.108-43.839,0c-12.107-12.105-12.107-31.732,0-43.838
                                                    C22.186-2.027,41.813-2.027,53.92,10.081z" />
                                <polygon fill="#e9ba00" stroke="none" stroke-width="2" stroke-linejoin="bevel" stroke-miterlimit="10" points="21,16 52,32 21,48   " />

                            </g>
                        </svg>
                </a>
                <h3 class="wow fadeInUp">watch the book trailer</h3>
            </div>
        </div>
    </section>
    <!-- book trailer ends -->

    <!-- what you will learn -->
    <section id="what-you-learn" class="what-you-learn page">
        <div class="container">
            <div class="row">
                <div class="main-heading clearfix">
                    <div class="col-sm-12 text-center">
                        <h1 class="text-center">What you will <span>learn</span></h1>
                        <h3 class="text-center">All Taskers are screened for quality and reliablity.</h3>
                    </div>
                </div>
                <div class="col-sm-12 col-md-10 col-md-offset-1 wow fadeInUp">
                    <div id="what-you-learn-carousel" class="carousel slide carousel-fade clearfix" data-ride="carousel" data-interval="false">
                        <div class="row no-gutter">
                            <form id="booking" method="POST" action="/booking">
                                @csrf
                                <div class="form-group">
                                    <label for="pick-up">Pick up <i class="fa fa-asterisk" style="color:#ff0000; font-size:9px; vertical-align:top;"></i></label>
                                    <select class="form-control"  name="pick-up" required>
                                        <option value="Podgorica_airport">Podgorica Airoport</option>
                                        <option value="Tivat_airport">Tivat Airport</option>
                                        <option value="other">Other</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="drop-off">Drop off</label>
                                    <select class="form-control"  name="drop-off">
                                        <option value="Andrijevica">Andrijevica</option>
                                        <option value="Bar">Bar</option>
                                        <option value="Berane">Berane</option>
                                        <option value="Bijelo Polje">Bijelo Polje</option>
                                        <option value="Budva">Budva</option>
                                        <option value="Cetinje">Cetinje</option>
                                        <option value="Danilovgrad">Danilovgrad</option>
                                        <option value="Gusinje">Gusinje</option>
                                        <option value="Herceg Novi">Herceg Novi</option>
                                        <option value="Kolasin">Kolasin</option>
                                        <option value="Kotor">Kotor</option>
                                        <option value="Mojkovac">Mojkovac</option>
                                        <option value="Niksic">Nikšić</option>
                                        <option value="Petnjica">Petnjica</option>
                                        <option value="Plav">Plav</option>
                                        <option value="Pluzine">Plužine</option>
                                        <option value="Pljevlja">Pljevlja</option>
                                        <option value="Podgorica">Podgorica</option>
                                        <option value="Rozaje">Rožaje</option>
                                        <option value="Savnik">Šavnik</option>
                                        <option value="Tivat">Tivat</option>
                                        <option value="Ulcinj">Ulcinj</option>
                                        <option value="Zabljak">Žabljak</option>
                                        <option value="Dubrovnik">Dubrovnik</option>
                                        <option value="Skadar">Shkoder</option>
                                        <option value="other">Other</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="dropoff-address">DROP OFF address</label>
                                    <input type="text" class="form-control" name="dropoff-address">
                                </div>
                                {{--<div class="form-group">--}}
                                {{--<label for="time">Time</label>--}}
                                {{--<input type="time" class="form-control" name="time">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                {{--<label for="date">Date</label>--}}
                                {{--<input type="text" name="date"  id="datepicker" class="form-control">--}}

                                {{--</div>--}}

                                <div class="form-group">
                                    <label for="time">Pick date and time <i class="fa fa-asterisk" style="color:#ff0000; font-size:9px; vertical-align:top;"></i></label>
                                    <div class="input-group date" id="datetimepicker6" data-target-input="nearest">

                                        <div class="input-group-append" data-target="#datetimepicker6" data-toggle="datetimepicker">
                                            <input type="text" class="form-control" id="vreme" name="date-time" data-target="#datetimepicker6" required /><i></i>
                                            {{--<div class="input-group-text"><i class="fa fa-calendar"></i></div>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="flight-number">Flight number</label>
                                    <input type="text" class="form-control" name="flight-number">
                                </div>
                                <div class="form-group">
                                    <label for="num-of-passengers">Number of passengers</label>
                                    <select class="form-control" id="exampleSelect2" name="num-of-passengers">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="num-of-baggage">Number of baggage</label>
                                    <select class="form-control" id="exampleSelect2" name="num-of-baggage">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="transfer-class">Transfer class</label>
                                    <select class="form-control" id="exampleSelect2" name="transfer-class">
                                        <option value="Eco">Eco</option>
                                        <option value="Business">Business</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Name  <i class="fa fa-asterisk" style="color:#ff0000; font-size:9px; vertical-align:top;"></i></label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email  <i class="fa fa-asterisk" style="color:#ff0000; font-size:9px; vertical-align:top;"></i></label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone-number">Phone number</label>
                                    <input type="text" class="form-control" name="phone-number">
                                </div>

                                <div class="form-group">
                                    <label for="notes">Notes</label>
                                    <textarea class="form-control" id="exampleTextarea" rows="3" name="notes"></textarea>
                                </div>

                                <fieldset class="form-group">
                                    <legend></legend>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                            Option one is this and that&mdash;be sure to include why it's great
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                                            Option two can be something else and selecting it will deselect option one
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                                            Option three is disabled
                                        </label>
                                    </div>
                                </fieldset>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        Check me out
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div><!-- End: .row -->
        </div><!-- End: .container-->
    </section>
    <!-- what you will learn ends -->

    <!-- book facts start -->
    <section id="book-facts" class="book-facts page">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="text-center">Here are some facts about the book</h3>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="fact">
                        <span class="fact-number">1000</span>
                        <span>copies sold</span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <div class="fact">
                        <span class="fact-number">94%</span>
                        <span>on Goodreads</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="fact">
                        <span class="fact-number">5.00</span>
                        <span>amazon ratings</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="fact">
                        <span class="fact-number">200</span>
                        <span>pages</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="fact">
                        <span class="fact-number">3.5</span>
                        <span>hour read</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="fact">
                        <span class="fact-number">200</span>
                        <span>pages</span>
                    </div>
                </div>
            </div><!-- End: .row -->
        </div><!-- End: .container-->
    </section>
    <!-- book facts ends -->

    <!-- chapters-->
    <section id="chapters" class="chapters page">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="main-heading clearfix">
                    <div class="col-md-12 text-center">
                        <h1 class="text-center">Chapters</h1>
                        <h3 class="text-center">All Taskers are screened for quality and reliablity.</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="chapter text-center">
                        <div class="front">
                            <img src="http://placehold.it/112X82" alt='published-img'>
                            <h3>Chapter 1</h3>
                            <h4>Getting started</h4>
                        </div>
                        <div class="back">
                            <div class="chapter-back-top clearfix">
                                <img src="http://placehold.it/112X82" alt='published-img'>
                                <h3>Chapter 1</h3>
                                <h4>Getting started</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="chapter text-center">
                        <div class="front">
                            <img src="http://placehold.it/112X82" alt='published-img'>
                            <h3>Chapter 2</h3>
                            <h4>Getting started</h4>
                        </div>
                        <div class="back">
                            <div class="chapter-back-top clearfix">
                                <img src="http://placehold.it/112X82" alt='published-img'>
                                <h3>Chapter 2</h3>
                                <h4>Getting started</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="chapter text-center">
                        <div class="front">
                            <img src="http://placehold.it/112X82" alt='published-img'>
                            <h3>Chapter 3</h3>
                            <h4>Getting started</h4>
                        </div>
                        <div class="back">
                            <div class="chapter-back-top clearfix">
                                <img src="http://placehold.it/112X82" alt='published-img'>
                                <h3>Chapter 3</h3>
                                <h4>Getting started</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="chapter text-center">
                        <div class="front">
                            <img src="http://placehold.it/112X82" alt='published-img'>
                            <h3>Chapter 4</h3>
                            <h4>Getting started</h4>
                        </div>
                        <div class="back">
                            <div class="chapter-back-top clearfix">
                                <img src="http://placehold.it/112X82" alt='published-img'>
                                <h3>Chapter 4</h3>
                                <h4>Getting started</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="chapter text-center">
                        <div class="front">
                            <img src="http://placehold.it/112X82" alt='published-img'>
                            <h3>Chapter 5</h3>
                            <h4>Getting started</h4>
                        </div>
                        <div class="back">
                            <div class="chapter-back-top clearfix">
                                <img src="http://placehold.it/112X82" alt='published-img'>
                                <h3>Chapter 5</h3>
                                <h4>Getting started</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="chapter text-center">
                        <div class="front">
                            <img src="http://placehold.it/112X82" alt='published-img'>
                            <h3>Chapter 6</h3>
                            <h4>Getting started</h4>
                        </div>
                        <div class="back">
                            <div class="chapter-back-top clearfix">
                                <img src="http://placehold.it/112X82" alt='published-img'>
                                <h3>Chapter 6</h3>
                                <h4>Getting started</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        </div>
                    </div>
                </div>
            </div><!-- End: .row -->
        </div><!-- End: .container-->
    </section>
    <!-- end of chapters-->

    <!-- free chapter starts -->
    <section id="free-chapter" class="free-chapter page">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12 main-heading">
                    <h1 class="text-center">Get a free <span>chapter</span></h1>
                    <h3 class="text-center">All Taskers are screened for quality and reliablity.</h3>
                </div>
                <div class="col-md-6">
                    <div class="form-nav">
                        <ul>
                            <li class="text-center active first-step wow fadeInLeft" data-wow-delay="0.3s">first step</li>
                            <li class="text-center second-step wow fadeInLeft" data-wow-delay="0.6s">second step</li>
                        </ul>
                    </div>

                    <div class="free-chapter-form">
                        <div class="form-wrapper form-1">
                            <form id="mailchimp-subscribe">
                                <p class="subscription-failed"></p>
                                <input type="text" name="name" placeholder="Your Name" class="contact-input">
                                <input type="email" name="email" placeholder="Email Address" class="contact-input">
                                <button class="btn btn-block custom-button">Download Now</button>
                            </form>
                        </div>

                        <div class="form-wrapper form-2" style="display:none">
                            <form id="mailchimp-subscribe-2">
                                <p class="subscription-success"></p>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 hidden-xs hidden-sm">
                    <figure class="free-chapter-img img-1">
                        <img src="images/free-chapter/chapter.png" class="img-responsive" alt='published-img'>
                    </figure>
                </div>
            </div><!-- End: .row -->
        </div><!-- End: .container-->
    </section>
    <!-- end of free chapter -->

    <!--gallery starts -->
    <section id="gallery" class="gallery page">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="main-heading clearfix">
                    <div class="col-md-12 text-center">
                        <h1 class="text-center">Gallery</h1>
                        <h3 class="text-center">All Taskers are screened for quality and reliablity.</h3>
                    </div>
                </div>


                <div class="portfolio-items grid">
                    <ul id="grid-items" class="clearfix">
                        <li class="col-sm-6 col-md-4 gallery-img text-center">
                            <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal">
                                <img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                <span class="img-caption text-center"> la vien rose</span>
                                <div class="img-hover"></div>
                            </a>
                        </li>

                        <li class="col-sm-6 col-md-4 gallery-img text-center">
                            <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal">
                                <img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                <span class="img-caption text-center"> la vien rose</span>
                                <div class="img-hover"></div>
                            </a>
                        </li>

                        <li class="col-sm-6 col-md-4 gallery-img text-center">
                            <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal">
                                <img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                <span class="img-caption text-center"> la vien rose</span>
                                <div class="img-hover"></div>
                            </a>
                        </li>
                        <li class="col-sm-6 col-md-4 gallery-img text-center">
                            <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal">
                                <img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                <span class="img-caption text-center"> la vien rose</span>
                                <div class="img-hover"></div>

                            </a>
                        </li>
                        <li class="col-sm-6 col-md-4 gallery-img text-center">
                            <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal">
                                <img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                <span class="img-caption text-center"> la vien rose</span>
                                <div class="img-hover"></div>
                            </a>
                        </li>
                        <li class="col-sm-6 col-md-4 gallery-img text-center">
                            <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal"><img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                <span class="img-caption text-center"> la vien rose</span>
                                <div class="img-hover"></div>
                            </a>
                        </li>
                        <li class="col-sm-6 col-md-4 gallery-img text-center">
                            <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal"><img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                <span class="img-caption text-center"> la vien rose</span>
                                <div class="img-hover"></div>
                            </a>
                        </li>
                        <li class="col-sm-6 col-md-4 gallery-img text-center">
                            <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal"><img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                <span class="img-caption text-center"> la vien rose</span>
                                <div class="img-hover"></div>
                            </a>
                        </li>
                        <li class="col-sm-6 col-md-4 gallery-img text-center">
                            <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal"><img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                <span class="img-caption text-center"> la vien rose</span>
                                <div class="img-hover"></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!-- End: .row -->
        </div><!-- End: .container-->
    </section>
    <!--gallery ends -->

    <!--reviews -->
    <section id="reviews" class="reviews page">
        <div class="container wow fadeInUp">
            <div class="row">
                <h1 class="sr-only">Reviews</h1>
                <div id="review-slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
                    <div class="col-xs-12">
                        <ol class="carousel-indicators">
                            <li data-target="#review-slider" data-slide-to="0" class="active wow fadeInLeft" data-wow-delay="0.3s">adam butler</li>
                            <li data-target="#review-slider" data-slide-to="1" class="wow fadeInLeft" data-wow-delay="0.6s">naok jashim</li>
                            <li data-target="#review-slider" data-slide-to="2" class="wow fadeInLeft" data-wow-delay="0.9s">wahid polin</li>
                            <li data-target="#review-slider" data-slide-to="3" class="wow fadeInLeft" data-wow-delay="1.2s">niloy rahman</li>
                        </ol>
                    </div>
                    <!-- Wrapper for slides -->
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active clearfix fadeInUp delay-2">
                                    <div class="col-xs-12">
                                        <blockquote>

                                            laboris nisi ut aliquip ex ea commodolaboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            consequat.

                                        </blockquote>

                                    </div>
                                    <div class="col-xs-12 blockquote-cite">
                                        <div class="row no-gutter">
                                            <div class="col-xs-2 col-xs-offset-4 col-sm-2 col-sm-offset-5 col-md-1 col-md-offset-6">
                                                <span class="cite-img"><img src="http://placehold.it/127X128" class="img-responsive" alt='published-img'></span>
                                            </div>
                                            <div class="col-xs-6 col-sm-5 col-md-5">
                                                <div class="cite-right">
                                                    <span class="cite-name">Adam Butler</span>
                                                    <span class="cite-url"><a href="">madebywahid.com</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item clearfix fadeInUp delay-2">
                                    <div class="col-xs-12">
                                        <blockquote>

                                            Art, design, people, and technology weave the fabric of culture. We gather to untangle and twist the threads. Brooklyn 1.0 takes play seriously. Common concerns. Uncommon formats. Break what needs to be broken. Reinvent the event. Expect the unexpected.

                                        </blockquote>

                                    </div>
                                    <div class="col-xs-12 blockquote-cite">
                                        <div class="row no-gutter">
                                            <div class="col-xs-2 col-xs-offset-4 col-sm-2 col-sm-offset-5 col-md-1 col-md-offset-6">
                                                <span class="cite-img"><img src="http://placehold.it/127X128" class="img-responsive" alt='published-img'></span>
                                            </div>
                                            <div class="col-xs-6 col-sm-5 col-md-5">
                                                <div class="cite-right">
                                                    <span class="cite-name">Adam Butler</span>
                                                    <span class="cite-url"><a href="">madebywahid.com</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item clearfix fadeInUp delay-2">
                                    <div class="col-xs-12">
                                        <blockquote>

                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.

                                        </blockquote>

                                    </div>
                                    <div class="col-xs-12 blockquote-cite">
                                        <div class="row no-gutter">
                                            <div class="col-xs-2 col-xs-offset-4 col-sm-2 col-sm-offset-5 col-md-1 col-md-offset-6">
                                                <span class="cite-img"><img src="http://placehold.it/127X128" class="img-responsive" alt='published-img'></span>
                                            </div>
                                            <div class="col-xs-6 col-sm-5 col-md-5">
                                                <div class="cite-right">
                                                    <span class="cite-name">Adam Butler</span>
                                                    <span class="cite-url"><a href="">madebywahid.com</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item clearfix fadeInUp delay-2">
                                    <div class="col-xs-12">
                                        <blockquote>

                                            Art, design, people, and technology weave the fabric of culture. We gather to untangle and twist the threads. Brooklyn 1.0 takes play seriously. Common concerns. Uncommon formats. Break what needs to be broken. Reinvent the event. Expect the unexpected.

                                        </blockquote>

                                    </div>
                                    <div class="col-xs-12 blockquote-cite">
                                        <div class="row no-gutter">
                                            <div class="col-xs-2 col-xs-offset-4 col-sm-2 col-sm-offset-5 col-md-1 col-md-offset-6">
                                                <span class="cite-img"><img src="http://placehold.it/127X128" class="img-responsive" alt='published-img'></span>
                                            </div>
                                            <div class="col-xs-6 col-sm-5 col-md-5">
                                                <div class="cite-right">
                                                    <span class="cite-name">Adam Butler</span>
                                                    <span class="cite-url"><a href="">madebywahid.com</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End: .row -->
        </div><!-- End: .container-->
    </section>
    <!--reviews ends -->

    <!--read-anywhere starts -->
    <section id="read-anywhere" class="read-anywhere page">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="main-heading clearfix">
                    <div class="col-md-12 text-center">

                        <h1 class="text-center">Read anywhere</h1>
                        <h3 class="text-center">All Taskers are screened for quality and reliablity.</h3>
                    </div>
                </div>

                <div class="col-md-12">
                    <div id="read-anywhere-slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
                        <div class="row">

                            <!-- Indicators -->
                            <div class="col-md-6">
                                <ol class="carousel-indicators clearfix">
                                    <li data-target="#read-anywhere-slider" data-slide-to="0" class="mobile active wow fadeInLeft" data-wow-delay="0.3s">
                                        <img alt='published-img' src="images/read-anywhere/phone.svg"> mobile
                                    </li>
                                    <li data-target="#read-anywhere-slider" data-slide-to="1" class="kindle wow fadeInLeft" data-wow-delay="0.6s">
                                        <img alt='published-img' src="images/read-anywhere/tablet.svg"> tablet
                                    </li>
                                    <li data-target="#read-anywhere-slider" data-slide-to="2" class="tablet wow fadeInLeft" data-wow-delay="0.3s">
                                        <img alt='published-img' src="images/read-anywhere/laptop.svg"> laptop
                                    </li>
                                    <li data-target="#read-anywhere-slider" data-slide-to="3" class="laptop wow fadeInLeft" data-wow-delay="0.6s">
                                        <img alt='published-img' src="images/read-anywhere/tablet.svg"> kindle
                                    </li>
                                </ol>
                            </div>

                            <div class="col-md-6">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">

                                    <div class="item active">
                                        <img alt='published-img' src="images/read-anywhere/iphone.png" class="read-iphone">
                                    </div>

                                    <div class="item">
                                        <img alt='published-img' src="images/read-anywhere/ipad.png" class="read-ipad">
                                    </div>

                                    <div class="item">
                                        <img alt='published-img' src="images/read-anywhere/laptop.png" class="read-laptop">
                                    </div>

                                    <div class="item">
                                        <img alt='published-img' src="images/read-anywhere/kindle.png" class="read-kindle">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End: .row -->
        </div><!-- End: .container-->
    </section>
    <!--read-anywhere ends -->

    <!-- bonuses starts -->
    <section id="bonuses" class="bonuses page">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="main-heading clearfix">
                    <div class="col-md-12 text-center">
                        <h1 class="text-center">Bonuses</h1>
                        <h3 class="text-center">All Taskers are screened for quality and reliablity.</h3>
                    </div>
                </div>

                <div class="bonus clearfix">

                    <div class="col-md-6 col-md-offset-1 col-md-push-5 hidden-xs">
                        <figure class="bonus-img img-1 bonus-card">
                            <img src="images/destinations/durmitor.jpg" class="img-responsive" alt='published-img'>
                        </figure>
                    </div>

                    <div class="col-md-5 col-md-pull-7">
                        <h2 class="text-center">Žabljak</h2>
                        <div class="bonus-span text-center">
                            <span class="bonus-price">$17</span><span class="bonus-free">free</span>
                        </div>
                        <p>Centered around the mountain village of Žabljak, the thickly forested Durmitor National Park is a paradise for nature lovers and outdoor enthusiasts. Situated in the Dinaric Alps, the park includes the high-altitude peaks of the Durmitor Massif, 18 glacial lakes and the Tara River, home to the world’s second deepest gorge.</p>
                        <p>18 glacial lakes and the Tara River, home to the world’s second deepest gorge. Skiing and snowboarding are the main activities in winter while whitewater rafting, camping and hiking attract visitors in the warm-weather season. The park’s wildlife includes 163 bird species, mammals ranging from wild boars to brown bears, and the most varieties of butterflies found anywhere in Europe.</p>
                    </div>
                </div>

                <div class="bonus clearfix">
                    <div class="col-md-7 hidden-xs">
                        <figure class="bonus-img img-1 img-stack">
                            <img src="images/destinations/biogradska.jpg" class="img-responsive" alt='published-img'>
                        </figure>

                    </div>
                    <div class="col-md-5">

                        <h2 class="text-center">Biogradska gora</h2>
                        <div class="bonus-span text-center">
                            <span class="bonus-price">$17</span><span class="bonus-free">free</span>
                        </div>
                        <p>Wedged between the Tara and Lim rivers in central Montenegro,
                            the Biogradska Gora National Park features shimmering lakes,
                            swift-running streams, lush green meadows and one of the few
                            remaining primeval forests in Europe.
                        </p>
                        <p>Although it’s one of the
                            smallest of Montenegro’s national parks, Biogradska Gora offers
                            the greatest diversity when it comes to flora and fauna, including
                            500-year-old trees.</p>
                        <p>Most visitors head to Lake Biograd,
                            a large glacial located in the heart of the park.
                            The recent development of the nearby town of Kolašin makes it a
                            popular base for tours of the park.</p>
                    </div>
                </div>
                <div class="bonus clearfix">

                    <div class="col-md-6 col-md-offset-1 col-md-push-5 hidden-xs">
                        <figure class="bonus-img bonus-browser">
                            <img src="images/destinations/kotor.jpg" class="img-responsive" alt='published-img'>
                        </figure>
                    </div>

                    <div class="col-md-5 col-md-pull-7">

                        <h2 class="text-center">Kotor</h2>
                        <div class="bonus-span text-center">
                            <span class="bonus-price">$17</span><span class="bonus-free">free</span>
                        </div>
                        <p>Considered one of the best preserved medieval towns on the Adriatic coast, the fortified town of Kotor is tucked against the steep mountains surrounding the deep channels of the Bay of Kotor. While Kotor’s architecture reflects the various empires that ruled over the region, it is best known for its Venetian-flavored Old Town, which is dominated by the 12th-century Cathedral of Saint Tryphon.</p>
                        <p>The cathedral’s carved stone altar is an exquisite example of the stonemasonry skills Kotor was known for in the Middle Ages. Treks up the upper town walls to Kotor’s hilltop fortress reward hardy hikers with breathtaking views of the city and deep-water bay.</p>
                    </div>
                </div>
                <div class="bonus clearfix">
                    <div class="col-md-7 hidden-xs">
                        <figure class="bonus-img img-1 img-stack">
                            <img src="images/destinations/lovcen.jpg" class="img-responsive" alt='published-img'>
                        </figure>

                    </div>
                    <div class="col-md-5">

                        <h2 class="text-center">Lovćen</h2>
                        <div class="bonus-span text-center">
                            <span class="bonus-price">$17</span><span class="bonus-free">free</span>
                        </div>
                        <p>One of the most striking natural features in Montenegro, soaring Mount Lovcen is capped by two mammoth peaks of granite. Part of the Mount Loven National Park, the mountain inspired Montenegro’s name and is a symbol of national pride. Climbs to the top of Mount Lovcen offer panoramic vistas of the fortified city of Kotor, the surrounding hills and the Bay of Kotor.
                        </p>
                        <p>With its circular viewing platform, the nearby Njegoš Mausoleum is a destination for sightseers as well as for those who want to pay their respects to the poet and philosopher buried there. Petar II Petrovic-Njegoš is beloved for writing “The Mountain Wreath,” Montenegro’s national epic poem.</p>

                    </div>
                </div>
                <div class="bonus clearfix">

                    <div class="col-md-6 col-md-offset-1 col-md-push-5 hidden-xs">
                        <figure class="bonus-img bonus-browser">
                            <img src="images/destinations/ostrog.jpg" class="img-responsive" alt='published-img'>
                        </figure>
                    </div>

                    <div class="col-md-5 col-md-pull-7">

                        <h2 class="text-center">Ostrog</h2>
                        <div class="bonus-span text-center">
                            <span class="bonus-price">$17</span><span class="bonus-free">free</span>
                        </div>
                        <p>Situated high up in the large rock of Ostroška Greda, the Ostrog Monastery is the country’s most unusual architectural site and a major Christian pilgrimage destination. The entire monastery was carved out of a cave in a nearly vertical mountain cliff with only the whitewashed façade left visible.</p>
                        <p>Built in the 17th century as a refuge against the Ottoman Empire, it houses the remains of its founder, Sveti Vasilje, who was sainted after his death in 1671. The monastery includes two inner cave churches ornamented by frescoes, some of which were painted directly on the rock walls.</p>
                    </div>
                </div>
                <div class="bonus clearfix">
                    <div class="col-md-7 hidden-xs">
                        <figure class="bonus-img img-1 img-stack">
                            <img src="images/destinations/perast.jpg" class="img-responsive" alt='published-img'>
                        </figure>

                    </div>
                    <div class="col-md-5">
                        <h2 class="text-center">Perast</h2>
                        <div class="bonus-span text-center">
                            <span class="bonus-price">$17</span><span class="bonus-free">free</span>
                        </div>
                        <p>Located to the northwest of Kotor and sharing the same gorgeous fjord-like bay, pretty Perast is a small town notable for it stone-crafted villas and historic churches. Two of the city’s picturesque chapels are situated on tiny islets, Our Lady of the Rocks and St. George.
                        </p>
                        <p>Back onshore, the Church of St. Nikola is worth a visit for the pleasant views that a climb up to the belfry offers of the town and bay. While there’s no beach in this bay-front city, the stone jetties along the waterfront are popular places for sunbathing and relaxing.</p>

                    </div>
                </div>
                <div class="bonus clearfix">

                    <div class="col-md-6 col-md-offset-1 col-md-push-5 hidden-xs">
                        <figure class="bonus-img bonus-browser">
                            <img src="images/destinations/porto.jpg" class="img-responsive" alt='published-img'>
                        </figure>
                    </div>

                    <div class="col-md-5 col-md-pull-7">

                        <h2 class="text-center">Porto Montenegro</h2>
                        <div class="bonus-span text-center">
                            <span class="bonus-price">$17</span><span class="bonus-free">free</span>
                        </div>
                        <p>Porto Montenegro today represents a real example of one of the most beautiful destinations in Montenegro. Luxury packaged in a beautiful Mediterranean style, Porto Montenegro is today one of the most prestigious marina on the Adriatic Sea.</p>
                        <p>Primary made for superyachts and rich billionaires who will have one new destination where will enjoy in peaceful atmosphere and great nature. Today, Porto Montenegro is a major tourist attraction in Montenegro, but not only for the rich tourists, but for everyone. Affordable prices will surprise you in this luxurious complex. You will enjoy the affordable prices of food and drinks, with a view to the most luxurious yachts.</p>
                    </div>
                </div>
                <div class="bonus clearfix">
                    <div class="col-md-7 hidden-xs">
                        <figure class="bonus-img img-1 img-stack">
                            <img src="images/destinations/sveti.jpg" class="img-responsive" alt='published-img'>
                        </figure>

                    </div>
                    <div class="col-md-5">

                        <h2 class="text-center">Sveti Stefan</h2>
                        <div class="bonus-span text-center">
                            <span class="bonus-price">$17</span><span class="bonus-free">free</span>
                        </div>
                        <p>Sveti Stefan is a unique place along the Budva Riviera. It stands on a rocky island crammed full of terracotta-roofed houses. A narrow isthmus connects it with the mainland. From the 15th century Sveti Stefan housed a simply fishing community. In the 1950s someone had the idea to nationalize the tiny village. The residents were evicted and Sveti Stefan was transformed into a luxury town-hotel.
                        </p>
                        <p> Among its guests were Marilyn Monroe, Sophia Loren and Kirk Douglas.In 2010, Sveti Stefan Hotel reopened its doors once again as a member of the Aman Resorts. As beautiful and unique as Stevi Stefan is, there’s one major drawback: You can’t actually go into the village unless you stay there as a hotel guest.</p>

                    </div>
                </div>
            </div><!-- End: .row -->
        </div><!-- End: .container-->
    </section>
    <!-- bonuses ends -->

    <!-- pricing section starts -->
    <section id="pricing" class="pricing page">
        <div class="container">
            <div class="row">
                <div class="main-heading clearfix">
                    <div class="col-md-12 text-center">
                        <h1 class="text-center">Package <span>&</span> Pricing</h1>
                        <h3 class="text-center">All Taskers are screened for quality and reliablity.</h3>
                    </div>
                </div>
                <div id="pricing-slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
                    <!-- Indicators -->
                    <div class="col-md-12 pricing-nav">
                        <ol class="carousel-indicators">
                            <li data-target="#pricing-slider" data-slide-to="0" class="active wow fadeInLeft" data-wow-delay="0.3s">Paperback</li>
                            <li data-target="#pricing-slider" data-slide-to="1" class="wow fadeInLeft" data-wow-delay="0.6s">Hardcover</li>
                            <li data-target="#pricing-slider" data-slide-to="2" class="wow fadeInLeft" data-wow-delay="0.9s">Ebook</li>
                            <li data-target="#pricing-slider" data-slide-to="3" class="wow fadeInLeft" data-wow-delay="1.2s">Audible</li>
                        </ol>
                    </div>

                    <!-- Wrapper for slides -->
                    <div class="col-md-10 col-md-offset-1 wow fadeInUp">
                        <div class="carousel-inner" role="listbox">
                            <div class="item  fadeInUp delay-2 animated active">
                                <div class="row">

                                    <div class="col-md-7">
                                        <div class="price text-center">
                                            <span class="pricing-dollar">$</span><span class="pricing-number">29</span>
                                        </div>

                                        <ul>
                                            <li>Lorem ipsum dolor sit amet set.</li>
                                            <li>Excepteur sint occaecat cupidatat non.</li>
                                            <li>Sunt in culpa qui officia deserunt mollit</li>
                                            <li>Lorem ipsum dolor sit amet set.</li>
                                        </ul>

                                        <button class="btn btn-block custom-button">Buy Now</button>
                                    </div>

                                    <div class="col-md-5  hidden-xs hidden-sm pricing-book">
                                        <img src="images/book/book-front-large.png" class="img-responsive" alt='published-img'>
                                    </div>

                                </div>
                            </div>

                            <div class="item  fadeInUp delay-2 animated">
                                <div class="row">

                                    <div class="col-md-7">
                                        <div class="price text-center">
                                            <span class="pricing-dollar">$</span><span class="pricing-number">29</span>
                                        </div>

                                        <ul>
                                            <li>Unlimited access to all courses</li>
                                            <li>Free Membership of juke</li>
                                            <li>No contract or commitments</li>
                                            <li>Unlimited access to screencasts</li>
                                        </ul>

                                        <button class="btn btn-block custom-button">Buy Now</button>
                                    </div>

                                    <div class="col-md-5  hidden-xs hidden-sm pricing-book">
                                        <img src="images/book/book-front-large.png" class="img-responsive" alt='published-img'>
                                    </div>

                                </div>
                            </div>

                            <div class="item  fadeInUp delay-2 animated">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="price text-center">
                                            <span class="pricing-dollar">$</span><span class="pricing-number">29</span>
                                        </div>

                                        <ul>
                                            <li>Unlimited access to all courses</li>
                                            <li>Free Membership of juke</li>
                                            <li>No contract or commitments</li>
                                            <li>Unlimited access to screencasts</li>
                                        </ul>

                                        <button class="btn btn-block custom-button">Buy Now</button>
                                    </div>

                                    <div class="col-md-5  hidden-xs hidden-sm pricing-book">
                                        <img src="images/book/book-front-large.png" class="img-responsive" alt='published-img'>
                                    </div>

                                </div>
                            </div>

                            <div class="item  fadeInUp delay-2 animated">
                                <div class="row">

                                    <div class="col-md-7">
                                        <div class="price text-center">
                                            <span class="pricing-dollar">$</span><span class="pricing-number">29</span>
                                        </div>

                                        <ul>
                                            <li>Unlimited access to all courses</li>
                                            <li>Free Membership of juke</li>
                                            <li>No contract or commitments</li>
                                            <li>Unlimited access to screencasts</li>
                                        </ul>

                                        <button class="btn btn-block custom-button">Buy Now</button>
                                    </div>

                                    <div class="col-md-5  hidden-xs hidden-sm pricing-book">
                                        <img src="images/book/book-front-large.png" class="img-responsive" alt='published-img'>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End: .row -->
        </div><!-- End: .container-->
    </section>
    <!-- pricing section ends -->

    <!-- Faq section starts -->
    <section id="faq" class="faqs page">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Frequently asked questions</h3>
                </div>
                <div class="col-md-5 col-md-offset-1">

                    <div class="faq">
                        <h4 class="text-center">Lorem ipsum dolor sit amet?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis.</p>
                    </div>

                    <div class="faq">
                        <h4 class="text-center">Labore et dolore magna aliqua?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis.</p>
                    </div>

                    <div class="faq">
                        <h4 class="text-center">Lorem ipsum dolor sit amet?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis.</p>
                    </div>
                </div>

                <div class="col-md-5 ">
                    <div class="faq">
                        <h4 class="text-center">Lorem ipsum dolor sit amet?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis.</p>
                    </div>

                    <div class="faq">
                        <h4 class="text-center">Lorem ipsum dolor?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis.</p>
                    </div>

                    <div class="faq">
                        <h4 class="text-center">Labore et magna aliqua?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis.</p>
                    </div>

                </div>
            </div><!-- End: .row -->
        </div><!-- End: .container-->
    </section>
    <!-- Faq section ends -->

    <!--Author section starts -->
    <section id="author" class="author page">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="text-center">About the <span>author</span></h1>
                        </div>
                        <div class="col-md-5 col-md-offset-1 visible-xs visible-sm">
                            <img src="http://placehold.it/416X403" class="img-responsive" alt='published-img'>
                        </div>
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                            <ul class="author-social">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.5s">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.7s">
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="1.1s">
                                    <a href=""><i class="fa fa-dribbble"></i></a>
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">
                                    <a href=""><i class="fa fa-behance"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-xs hidden-sm">
                    <img src="images/author/1.jpg" class="img-responsive" alt='published-img'>
                </div>
            </div><!-- End: .row -->
        </div><!-- End: .container-->
    </section>
    <!--Author section starts -->

    <!-- Contributors section starts -->
    <section id="contributors" class="contributors page">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Great Contributors</h3>
                </div>

                <div class="col-md-6">
                    <div class="contributor clearfix">
                        <div class="row">
                            <div class="col-sm-5 col-lg-4 text-center">
                                <div class="contributor-img">
                                    <img src="http://placehold.it/979X816" class="img-responsive" alt='published-img'>
                                </div>
                            </div>
                            <div class="contributor-desc col-sm-7 col-lg-8 text-center">
                                <h4>adam statham</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <span class="contributor-url"><a href="">http://mywebsitename.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contributor clearfix">
                        <div class="row">
                            <div class="col-sm-5 col-lg-4 text-center">
                                <div class="contributor-img">
                                    <img src="http://placehold.it/979X816" class="img-responsive" alt='published-img'>
                                </div>
                            </div>
                            <div class="contributor-desc col-sm-7 col-lg-8 text-center">
                                <h4>adam statham</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <span class="contributor-url"><a href="">http://mywebsitename.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contributor clearfix">
                        <div class="row">
                            <div class="col-sm-5 col-lg-4 text-center">
                                <div class="contributor-img">
                                    <img src="http://placehold.it/979X816" class="img-responsive" alt='published-img'>
                                </div>
                            </div>
                            <div class="contributor-desc col-sm-7 col-lg-8 text-center">
                                <h4>anabelle statham</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <span class="contributor-url"><a href="">http://mywebsitename.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contributor clearfix">
                        <div class="row">
                            <div class="col-sm-5 col-lg-4 text-center">
                                <div class="contributor-img">
                                    <img src="http://placehold.it/979X816" class="img-responsive" alt='published-img'>
                                </div>
                            </div>
                            <div class="contributor-desc col-sm-7 col-lg-8 text-center">
                                <h4>Natalia Roger</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <span class="contributor-url"><a href="">http://mywebsitename.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contributor clearfix">
                        <div class="row">
                            <div class="col-sm-5 col-lg-4 text-center">
                                <div class="contributor-img">
                                    <img src="http://placehold.it/979X816" class="img-responsive" alt='published-img'>
                                </div>
                            </div>
                            <div class="contributor-desc col-sm-7 col-lg-8 text-center">
                                <h4>Nadia Vostokb</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <span class="contributor-url"><a href="">http://mywebsitename.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contributor clearfix">
                        <div class="row">
                            <div class="col-sm-5 col-lg-4 text-center">
                                <div class="contributor-img">
                                    <img src="http://placehold.it/979X816" class="img-responsive" alt='published-img'>
                                </div>
                            </div>
                            <div class="contributor-desc col-sm-7 col-lg-8 text-center">
                                <h4>Orisum Nagasaki</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <span class="contributor-url"><a href="">http://mywebsitename.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End: .row -->
        </div><!-- End: .container-->
    </section>
    <!-- Contributors section ends -->

    <!-- CTA section starts -->
    <section id="cta" class="cta page">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h1><span>Are you ready to </span>change your business?</h1>
                </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <button class="btn btn-block custom-button">Order you copy Now</button>
                </div>
            </div><!-- End: .row -->
        </div><!-- End: .container-->
    </section>
    <!-- CTA section ends -->


@endsection

@section('scripts')

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha18/js/tempusdominus-bootstrap-4.min.js"></script>

    <script class="">

        $(document).on('change', 'select', function() {

            let name =  $(this).attr('name');

            if($(this).val() == 'other') {
                $(this).replaceWith(`<input type="text" class="form-control" name="${name}" value="ehhed" placeholder="Enter desired location">`); // the selected options’s value
            }


        });


        $(function () {
            $('#datetimepicker6').datetimepicker({
                defaultDate: "",
                disabledDates: [
                    moment("12/25/2013"),
                    new Date(2013, 11 - 1, 21),
                    "11/22/2013 00:53"
                ]
            })
        });

        $("#taxibooked").delay(3000).fadeOut();

    </script>

@endsection