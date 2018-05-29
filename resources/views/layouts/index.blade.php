<!DOCTYPE html>
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">

<head>

    <!--meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--meta tags ends-->

    <title>Published - Responsive & Interactive Landing Page for Books</title>

    <!--- Links to google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800%7cCardo:400italic%7cMerriweather:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
    <!-- Links to fonts ends -->

    <!-- Bootstrap stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Font Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Popup Images -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">

    <!-- css animation -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">

    <!-- custom stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">

    @yield('styles')

</head>

<!-- 3. body starts -->

<body>

<!-- Start: Preloader section -->
<div id="loader-wrapper">
    <div id="loader"></div>
</div>
<!-- End: Preloader section -->

<!-- 4.Document wrapper starts-->
<main>

    <!-- main header starts-->
    <header id="header">

        <!-- top navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="#">Brand</a> -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#hero">Home<span class="sr-only">(current)</span></a></li>
                        <li><a data-scroll href="#book-trailer">Trailer</a></li>
                        <li><a data-scroll href="#what-you-learn">Learn</a></li>
                        <li><a data-scroll href="#chapters">Chapters</a></li>
                        <li><a data-scroll href="#free-chapter">free chapter</a></li>
                        <li><a data-scroll href="#gallery">gallery</a></li>
                        <li><a data-scroll href="#reviews">reviews</a></li>
                        <li><a data-scroll href="#read-anywhere">read</a></li>
                        <li><a data-scroll href="#bonuses">bonuses</a></li>
                        <li><a data-scroll href="#pricing">pricing</a></li>
                        <li><a data-scroll href="#faq">faq</a></li>
                        <li><a data-scroll href="#author">author</a></li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-->
        </nav>
        <!-- end top navigation -->

    </header>
    <!-- main header ends-->

@yield('content')

    <!-- footer section starts -->
    <footer id="footer" class="footer page">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-6 footer-left">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="footer-link footer-link-1">
                                <h4>Lorem Ipsum Dolor</h4>
                                <ul>
                                    <li><a href="">Lorem Imsum</a></li>
                                    <li><a href="">Sit Amet</a></li>
                                    <li><a href="">Suggest Ipsum</a></li>
                                    <li><a href="">View Dolors</a></li>
                                    <li><a href="">Discuss</a></li>
                                    <li><a href="">Lorem Ipsum</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="footer-link footer-link-2">
                                <h4>Eiusmod tempor</h4>
                                <ul>
                                    <li><a href="">Lorem Imsum</a></li>
                                    <li><a href="">Sit Amet</a></li>
                                    <li><a href="">Suggest Ipsum</a></li>
                                    <li><a href="">View Dolors</a></li>
                                    <li><a href="">Discuss</a></li>
                                    <li><a href="">Lorem Ipsum</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 footer-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <span>© 2016 Made By Wahid LLC. Crafted lovingly in Dhaka, Bangladesh</span>
                </div>
            </div><!-- End: .row -->
        </div><!-- End: .container-->
    </footer>
    <!-- footer section ends -->
</main>
<!-- 4.Document wrapper ends-->


<!-- 5. SCRIPTS -->

<!-- jQuery (necessary for all the plugins) -->
<script src="js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/modernizr-custom.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>

<!-- 5. SCRIPTS ends -->

@yield('scripts')

</body>

</html>

