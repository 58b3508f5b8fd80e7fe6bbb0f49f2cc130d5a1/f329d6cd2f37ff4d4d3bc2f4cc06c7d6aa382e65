@php
    $public='';
    if(config('app.env') == 'production')
    $public ='public';
@endphp

        <!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PAGE TITLE -->
    <title>@yield('title', 'Home') | {{ config('app.name', 'Touching Lives Skills') }}</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{asset($public.'/css/bootstrap.min.css')}}">
    <!-- ALL GOOGLE FONTS -->
    <link href="{{asset($public.'/css/css14d1.css?family=Raleway:300,400,500,600,700,800,900')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/css0bf3.css?family=Average:300,400,500,600,700,800,900')}}" rel="stylesheet">
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="{{asset($public.'/css/font-awesome.min.css')}}">
    <!-- OWL CAROSEL CSS -->
    <link rel="stylesheet" href="{{asset($public.'/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset($public.'/css/owl.theme.css')}}">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="{{asset($public.'/css/magnific-popup.css')}}">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="{{asset($public.'/css/animate.min.css')}}">
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="{{asset($public.'/css/style.css')}}">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="{{asset($public.'/css/responsive.css')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
    @yield('styles')
</head>

<body>
<!-- START PRELOADER -->
<div class="preloader">
    <div class="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- / END PRELOADER -->

<!-- START HOMEPAGE DESIGN AREA -->
<header id="home" class="welcome-area">
    <div class="header-top-information-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-top-info-left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> {{config('app.email')}}</li>
                            <li><i class="fa fa-phone"></i>{{config('app.phone')}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="header-top-info-right">
                        <ul class="list-inline text-right">
                            <li>
                                <ul class="header-social">
                                    <li><a href="https://facebook.com/projectproduceabakinitiative/"><i
                                                    class="fa fa-facebook"></i></a>
                                    </li>
                                    {{--     <li><a href="#"><i class="fa fa-twitter"></i></a>
                                         </li>
                                         <li><a href="#"><i class="fa fa-dribbble"></i></a>
                                         </li>
                                         <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                         </li>--}}
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('/join')}}" class="btn btn-sm btn-primary">Join</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- START LOGO DESIGN AREA -->
                    <div class="logo">
                        <a href="{{url('')}}">{{config('app.name', 'Touching Lives Savings')}}</a>
                    </div>
                    <!-- END LOGO DESIGN AREA -->
                </div>
                <div class="col-md-9">
                    <!-- START MENU DESIGN AREA -->
                    <div class="mainmenu">
                        <div class="navbar navbar-nobg">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse"><span
                                            class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                                            class="icon-bar"></span><span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a class="smoth-scroll" href="{{url('')}}">Home
                                            <div class="ripple-wrapper"></div>
                                        </a></li>
                                    <li><a class="smoth-scroll" href="{{url('/#about')}}">about</a></li>
                                    <li><a class="smoth-scroll" href="{{url('/#service')}}">service</a></li>
                                    <li><a class="smoth-scroll" href="{{url('/#team')}}">team</a></li>
                                    <li><a class="smoth-scroll" href="{{url('/#gallery')}}">Gallery</a></li>
                                    <li><a class="smoth-scroll" href="{{url('/#testimonial')}}">testimonial</a></li>
                                    {{--<li><a class="smoth-scroll" href="#pricing">pricing</a></li>--}}
                                    <li><a class="smoth-scroll" href="{{url('/#contact')}}">contact</a></li>
                                    {{--<li><a href="#">Blog </a>--}}
                                    {{--<ul class="sub-menu">--}}
                                    {{--<li class=""><a href="blog.html">Blog Page</a></li>--}}
                                    {{--<li class=""><a href="single-blog.html">Single Blog</a></li>--}}
                                    {{--</ul>--}}
                                    {{--</li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END MENU DESIGN AREA -->
                </div>
            </div>
        </div>
    </div>
</header>
@yield('content')
<!-- START FOOTER TOP DESIGN AREA -->
<section class="footer-top-area section-padding">
    <div class="container">
        <div class="row">
            <!-- START SINGLE FOOTER DESIGN AREA -->
            <div class="col-md-3 col-sm-6">
                <div class="single-footer wow fadeInUp" data-wow-delay=".2s">
                    <h2>about company</h2>
                    <p>We aim is to reach out to the poor population with skills and empowerment for development, hence
                        fulfilling the vision of the
                        United nations development Program UNDP.</p>
                </div>
            </div>
            <!-- / END SINGLE FOOTER DESIGN AREA -->
            <!-- START SINGLE FOOTER DESIGN AREA -->
            <div class="col-md-3 col-sm-6">
                <div class="single-footer wow fadeInUp" data-wow-delay=".4s">
                    <h2>Navigation</h2>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="{{url('/#home')}}">home</a>
                            </li>
                            <li><a href="{{url('/#about')}}">about</a>
                            </li>
                            <li><a href="{{url('/#service')}}">services</a>
                            </li>
                            <li><a href="{{url('/#gallery')}}">gallery</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- / END SINGLE FOOTER DESIGN AREA -->
            <!-- START SINGLE FOOTER DESIGN AREA -->
            <div class="col-md-3 col-sm-6">
                <div class="single-footer wow fadeInUp" data-wow-delay=".6s">
                    <h2>Inquiries</h2>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">faq</a>
                            </li>
                            <li><a href="#">privacy and policy</a>
                            </li>
                            <li><a href="#">guidlines</a>
                            </li>
                            <li><a href="#contact">contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- / END SINGLE FOOTER DESIGN AREA -->
            <!-- START SINGLE FOOTER DESIGN AREA -->
            <div class="col-md-3 col-sm-6">
                <div class="single-footer wow fadeInUp" data-wow-delay=".8s">
                    <h2>social links</h2>
                    <div class="footer-social-link">
                        <ul class="list-inline text-right">
                            <li>
                                <ul>
                                    <li><a href="https://facebook.com/projectproduceabakinitiative/"><i
                                                    class="fa fa-facebook"></i></a>
                                    </li>
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a>
                                    </li>--}}
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('/join')}}" class="btn btn-sm btn-primary">Join</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- / END SINGLE FOOTER DESIGN AREA -->
            <!-- -->
        </div>
    </div>
</section>
<!-- / END FOOTER TOP DESIGN AREA -->

<!-- START FOOTER DESIGN AREA -->
<footer class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="footer-text wow fadeInUp" data-wow-delay=".6s">
                    <p>&copy; copyright {{config('app.name')}} {{date('Y')}} all rights reserved
                        <br>Developed by <a href="{{config('app.designer_url')}}">{{config('app.designer')}}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / END CONTACT DETAILS DESIGN AREA -->

<!-- START SCROOL UP DESIGN AREA -->
<div class="scroll-to-up">
    <div class="scrollup">
        <i class="fa fa-angle-up"></i>
    </div>
</div>
<!-- / END SCROOL UP DESIGN AREA -->

<!-- LATEST JQUERY -->
<script src="{{asset($public.'/js/jquery.min.js')}}"></script>
<!-- BOOTSTRAP JS -->
<script src="{{asset($public.'/js/bootstrap.min.js')}}"></script>
<!-- OWL CAROUSEL JS  -->
<script src="{{asset($public.'/js/owl.carousel.min.js')}}"></script>
<!-- MAGNIFICANT JS -->
<script src="{{asset($public.'/js/jquery.magnific-popup.min.js')}}"></script>
<!-- STEALLER JS -->
<script src="{{asset($public.'/js/jquery.stellar.min.js')}}"></script>
<!-- COUNTER UP JS -->
<script src="{{asset($public.'/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset($public.'/js/jquery.counterup.min.js')}}"></script>
<!-- WOW JS -->
<script src="{{asset($public.'/js/wow.min.js')}}"></script>
<!-- ISOTOP JS -->
<script src="{{asset($public.'/js/isotope.pkgd.js')}}"></script>
<!-- STICKY JS -->
<script src="{{asset($public.'/js/jquery.sticky.js')}}"></script>
<!-- FOEEM JS -->
<script src="{{asset($public.'/js/form-contact.js')}}"></script>
<!-- GOOGLE MAP JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJRdF8oMTWsiE-532dlZINEg-EmRxH0Hc"></script>
<script src="{{asset($public.'/js/gmap3.min.js')}}"></script>
<!-- scripts js -->
<script src="{{asset($public.'/js/scripts.js')}}"></script>
@yield('scripts')

</body>


<!-- Mirrored from wordpressboss.com/tf/mind-demo/index-slider.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Feb 2018 19:57:45 GMT -->
</html>