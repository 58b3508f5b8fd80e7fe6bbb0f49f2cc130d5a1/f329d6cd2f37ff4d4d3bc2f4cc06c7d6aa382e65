@php
    $public='';
    if(config('app.env') == 'production')
    $public ='public';
@endphp
@extends('layouts.app')
@section('styles')
    <style>
        .single-team p {
            font-size: 12px;
            line-height: 12px;
        }
    </style>
@endsection
@section('content')
    <section id="slider" class="welcome-area">
        <div class="welcome-slider-area">
            <div id="welcome-slide-carousel" class="carousel slide carousel-fade" data-ride="carousel"
                 data-interval="5000">
                <ol class="carousel-indicators">
                    <li data-target="#welcome-slide-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#welcome-slide-carousel" data-slide-to="1"></li>
                    <li data-target="#welcome-slide-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="single-slide-item slide-1" data-stellar-background-ratio="0.6">
                            <div class="single-slide-item-table">
                                <div class="single-slide-item-tablecell">
                                    <div class="container">
                                        <div class="row">
                                            <div class="header-text">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <h3>Our Mission</h3>
                                                    <h2>To raise businesses and establish good living.</h2>
                                                    <a class="slide-btn smoth-scroll" href="#about">learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-slide-item slide-2" data-stellar-background-ratio="0.6">
                            <div class="single-slide-item-table">
                                <div class="single-slide-item-tablecell">
                                    <div class="container">
                                        <div class="row">
                                            <div class="header-text">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <h3>Our Vision</h3>
                                                    <h2>To raise a global productive business society.</h2>
                                                    <a class="slide-btn smoth-scroll" href="#about">learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-slide-item slide-3" data-stellar-background-ratio="0.6">
                            <div class="single-slide-item-table">
                                <div class="single-slide-item-tablecell">
                                    <div class="container">
                                        <div class="row">
                                            <div class="header-text">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <h3>What we are.</h3>
                                                    <h2>We are a non-profit, non-govermental organization.</h2>
                                                    <a class="slide-btn smoth-scroll" href="#about">learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left slider-control" href="#welcome-slide-carousel" role="button" data-slide="prev"><i
                                class="fa fa-angle-left"></i></a>
                    <a class="right slider-control" href="#welcome-slide-carousel" role="button" data-slide="next"><i
                                class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>

        <!-- / END HOMEPAGE DESIGN AREA -->
    </section>
    <!-- START ABOUT US DESIGN AREA -->
    <section id="about" class="about-us-area">
        <div class="container">
            <div class="row">
                <!-- START ABOUT US TEXT DESIGN AREA -->
                <div class="col-md-7 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s" data-wow-offset="0">
                    <div class="about-text">
                        <h4>{{config('app.name', 'Touching Lives Skills')}}</h4>
                        <p>Touching Lives skills is a Project of Touching Lives international in Collaboration with the
                            Government of Developing Geographical Areas. Its aim and objectives is to reach out to the
                            poor
                            population with skills and empowerment for development, that way fulfilling the visions of
                            the
                            United nations development Program UNDP.</p>
                        <p>We major on skills basically gear towards production, manufacturing and trade of locally made
                            goods in regions of our reach. such Skills rage from production of Accessories and minor
                            goods
                            in fashion and designs, to paint and paper production, to few areas of Agriculture including
                            Pastoral and crop farming, to electrical like solar panel production, to food production in
                            pastries, make-up and body treat with cosmetology, programming and trades/marketing.</p>
                        {{--<a href="#" class="read-more">Read more</a>--}}
                    </div>
                </div>
                <!-- / END ABOUT US TEXT DESIGN AREA -->

                <div class="col-md-5 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0">
                    <div class="about-image-area">
                        <img src="{{asset($public.'/jpg/why-choose-us.jpg')}}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- / END ABOUT US DESIGN AREA -->

    <!-- START SERVICES DESIGN AREA -->
    <section id="service" class="service-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title white-title text-center">
                        <h2>best service we are providing</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-service">
                        <i class="fa fa-camera"></i>
                        <h4>photography & portrait</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        <a href="#">learn more</a>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-service">
                        <i class="fa fa-laptop"></i>
                        <h4>Web Design & development</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        <a href="#">learn more</a>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-service">
                        <i class="fa fa-bullhorn"></i>
                        <h4>Social media marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        <a href="#">learn more</a>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-service">
                        <i class="fa fa-cloud-download"></i>
                        <h4>website hosting</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        <a href="#">learn more</a>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1s">
                    <div class="single-service">
                        <i class="fa fa-line-chart"></i>
                        <h4>increase website traffic</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        <a href="#">learn more</a>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="single-service">
                        <i class="fa fa-users"></i>
                        <h4>24 hour friendly support</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        <a href="#">learn more</a>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END SERVICES DESIGN AREA -->

    <!-- START TEAM DESIGN AREA -->
    <section id="team" class="team-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Meet our awesome team members</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE TEAM DESIGN AREA -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-team">
                        <img src="{{asset($public.'/jpg/ceo.jpg')}}" alt="">
                        <h4>Gospel Christian</h4>
                        <h6 class="text-muted">CEO/Founder</h6>
                        <p>A preacher and Pastor of a Believers Loveworld Inc Church branch AKA
                            Christ Embassy. A motivational speaker who has pioneered over 30 successful projects and
                            humanitarian services. The Managing Director of Gr8 Coins
                            Ltd, The Chief Executive Officer of Klinkings Ltd. A business Consultant and a team
                            builder.</p>
                    </div>
                </div>
                <!-- / END SINGLE TEAM DESIGN AREA -->
                <!-- START SINGLE TEAM DESIGN AREA -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-team">
                        <img src="{{asset($public.'/jpg/governor.jpg')}}" alt="">
                        <h4>Elisha Wealth</h4>
                        <h6 class="text-muted">Governor/Executive Director</h6>
                        <p>A preacher and Pastor of a branch of Believers Loveworld Inc. (Christ Embassy).
                            A business Man, Business consultant and Managing Director of Praesto Technologies Ltd.
                            Also skilled in Programming and a passionate musician. Networking and fibre optics, Computer
                            Music Production and graphics designs.</p>
                    </div>
                </div>
                <!-- / END SINGLE TEAM DESIGN AREA -->
                <!-- START SINGLE TEAM DESIGN AREA -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-team">
                        <img src="{{asset($public.'/jpg/deputygovernor.jpg')}}" alt="">
                        <h4>pastor linus effiong</h4>
                        <h6 class="text-muted">Deputy Governor</h6>
                        <p>A Pastor of a branch of Assemblies of God Church.
                            The Managing Director of Linae Construction Company Ltd.
                            Skill in Making furniture, wood work, carvings and sculptures.</p>
                    </div>
                </div>
                <!-- / END SINGLE TEAM DESIGN AREA -->
                <!-- START SINGLE TEAM DESIGN AREA -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-team">
                        <img src="{{asset($public.'/jpg/accountant.jpg')}}" alt="">
                        <h4>joyce joseph</h4>
                        <h6 class="text-muted">Accountant General</h6>
                        <p>A Chartered Accountant and Economist. Hair Stylist, a cosmetologist and currently Chief
                            executive officer of Jorhema Styling Ltd.</p>
                    </div>
                </div>
                <!-- / END SINGLE TEAM DESIGN AREA -->
                <!-- START SINGLE TEAM DESIGN AREA -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-team">
                        <img src="{{asset($public.'/jpg/secretary.jpg')}}" alt="">
                        <h4>blessing linus effiong</h4>
                        <h6 class="text-muted">secretary general</h6>
                        <p>A cosmetologist, make up artist and Designer.
                            The Managing Director of Eddyz Ltd.</p>
                    </div>
                </div>
                <!-- / END SINGLE TEAM DESIGN AREA -->
                <!-- START SINGLE TEAM DESIGN AREA -->
            {{--<div class="col-md-3 col-sm-6">
                <div class="single-team">
                    <img src="{{asset($public.'/jpg/01.jpg')}}" alt="">
                    <h4>Arfan hridoy</h4>
                    <h6 class="text-muted">Developer</h6>
                </div>
            </div>
            <!-- / END SINGLE TEAM DESIGN AREA -->
            <!-- START SINGLE TEAM DESIGN AREA -->
            <div class="col-md-3 col-sm-6">
                <div class="single-team">
                    <img src="{{asset($public.'/jpg/02.jpg')}}" alt="">
                    <h4>Tarin rahman</h4>
                    <h6 class="text-muted">Project manager</h6>
                </div>
            </div>
            <!-- / END SINGLE TEAM DESIGN AREA -->
            <!-- START SINGLE TEAM DESIGN AREA -->
            <div class="col-md-3 col-sm-6">
                <div class="single-team">
                    <img src="{{asset($public.'/jpg/06.jpg')}}" alt="">
                    <h4>maria sid</h4>
                    <h6 class="text-muted">programmer</h6>
                </div>
            </div>--}}
            <!-- / END SINGLE TEAM DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END TEAM DESIGN AREA -->

    <!-- GET STARTED DESIGN AREA -->
    <section class="get-started section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="get-text text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                         data-wow-offset="0">
                        <h2>are you ready to get started?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed elit tortor. Quisque
                            bibendum
                            mauris velit, sed tincidunt massa lacinia nec.</p>
                        <a href="#contact" class="read-more">get started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END GET STARTED DESIGN AREA -->

    <!-- START WHY CHOOSE US DESIGN AREA -->
    <section class="why-choose-us-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>why choose us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START WHY CHOOSE US IMAGE DESIGN AREA -->
                <div class="col-md-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0">
                    <div class="why-chosse-image">
                        <img src="{{asset($public.'/jpg/why-choose-us.jpg')}}" alt="">
                    </div>
                </div>
                <!-- / END WHY CHOOSE US IMAGE DESIGN AREA -->
                <!-- START WHY CHOOSE TEXT DESIGN AREA -->
                <div class="col-md-6">
                    <div class="why-choose-text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s</p>
                        <ul>
                            <li><i class="fa fa-check"></i> Bootstrap Latest version</li>
                            <li><i class="fa fa-check"></i>Clean and optimize code for easy</li>
                            <li><i class="fa fa-check"></i>Well documented and organized properly</li>
                            <li><i class="fa fa-check"></i>Lorem Ipsum is simply dummy text of the printing.</li>
                        </ul>
                    </div>
                </div>
                <!-- / END WHY CHOOSE TEXT DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END WHY CHOOSE US DESIGN AREA -->

    <!-- VIDEO BACKGROUND DESIGN AREA -->
    <section class="video-area" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="video-area-text text-center wow bounceIn">
                        <a href="https://www.youtube.com/watch?v=6NC_ODHu5jg" class="video-play mfp-iframe">
                            <i class="fa fa-play"></i>
                        </a>
                        <h2>Watch Our Story</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END VIDEO BACKGROUND DESIGN AREA -->

    <!-- START WORK DESIGN AREA -->
    <section id="gallery" class="work section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>events gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="filters col-md-12">
                    <ul id="filters">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".commissioning">Commissioning</li>
                        <li data-filter=".inauguration">Inauguration</li>
                        <li data-filter=".interview">Interview</li>
                        {{--<li data-filter=".typography">Typography</li>
                        <li data-filter=".web">Web Design</li>--}}
                    </ul>
                </div>
            </div>
            <div class="work-inner">
                <div class="row work-posts grid">
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 web commissioning">
                        <div class="item wow fadeInUp" data-wow-delay=".2s">
                            <a href="{{asset($public.'/jpg/commissioning-1.jpg')}}" class="work-popup">
                                <img src="{{asset($public.'/jpg/commissioning-1.jpg')}}" alt="img18">
                                <div class="img-overlay">
                                    <i class="fa fa-search"></i>
                                </div>
                            </a>
                        </div>
                        <div class="description">
                            <h2>Opening day</h2>
                            <p>Staff photos</p>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 web commissioning">
                        <div class="item wow fadeInUp" data-wow-delay=".2s">
                            <a href="{{asset($public.'/jpg/commissioning-2.jpg')}}" class="work-popup">
                                <img src="{{asset($public.'/jpg/commissioning-2.jpg')}}" alt="img18">
                                <div class="img-overlay">
                                    <i class="fa fa-search"></i>
                                </div>
                            </a>
                        </div>
                        <div class="description">
                            <h2>Opening day</h2>
                            <p>Staff photos</p>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 graphic inauguration">
                        <div class="item wow fadeInUp" data-wow-delay=".4s">
                            <a href="{{asset($public.'/jpg/inauguration-1.jpg')}}" class="work-popup">
                                <img src="{{asset($public.'/jpg/inauguration-1.jpg')}}" alt="img18">
                                <div class="img-overlay">
                                    <i class="fa fa-search"></i>
                                </div>
                            </a>
                        </div>
                        <div class="description">
                            <h2>Opening day</h2>
                            <p>Staff photos</p>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 graphic inauguration">
                        <div class="item wow fadeInUp" data-wow-delay=".4s">
                            <a href="{{asset($public.'/jpg/inauguration-2.jpg')}}" class="work-popup">
                                <img src="{{asset($public.'/jpg/inauguration-2.jpg')}}" alt="img18">
                                <div class="img-overlay">
                                    <i class="fa fa-search"></i>
                                </div>
                            </a>
                        </div>
                        <div class="description">
                            <h2>Opening day</h2>
                            <p>Staff photos</p>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 graphic inauguration">
                        <div class="item wow fadeInUp" data-wow-delay=".4s">
                            <a href="{{asset($public.'/jpg/inauguration-3.jpg')}}" class="work-popup">
                                <img src="{{asset($public.'/jpg/inauguration-3.jpg')}}" alt="img18">
                                <div class="img-overlay">
                                    <i class="fa fa-search"></i>
                                </div>
                            </a>
                        </div>
                        <div class="description">
                            <h2>Opening day</h2>
                            <p>Staff photos</p>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 graphic inauguration">
                        <div class="item wow fadeInUp" data-wow-delay=".4s">
                            <a href="{{asset($public.'/jpg/inauguration-4.jpg')}}" class="work-popup">
                                <img src="{{asset($public.'/jpg/inauguration-4.jpg')}}" alt="img18">
                                <div class="img-overlay">
                                    <i class="fa fa-search"></i>
                                </div>
                            </a>
                        </div>
                        <div class="description">
                            <h2>Opening day</h2>
                            <p>Staff photos</p>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 graphic inauguration">
                        <div class="item wow fadeInUp" data-wow-delay=".4s">
                            <a href="{{asset($public.'/jpg/inauguration-5.jpg')}}" class="work-popup">
                                <img src="{{asset($public.'/jpg/inauguration-5.jpg')}}" alt="img18">
                                <div class="img-overlay">
                                    <i class="fa fa-search"></i>
                                </div>
                            </a>
                        </div>
                        <div class="description">
                            <h2>Opening day</h2>
                            <p>Staff photos</p>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 graphic inauguration">
                        <div class="item wow fadeInUp" data-wow-delay=".4s">
                            <a href="{{asset($public.'/jpg/inauguration-6.jpg')}}" class="work-popup">
                                <img src="{{asset($public.'/jpg/inauguration-6.jpg')}}" alt="img18">
                                <div class="img-overlay">
                                    <i class="fa fa-search"></i>
                                </div>
                            </a>
                        </div>
                        <div class="description">
                            <h2>Opening day</h2>
                            <p>Staff photos</p>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 interview">
                        <div class="item wow fadeInUp" data-wow-delay=".6s">
                            <a href="{{asset($public.'/jpg/interview-1.jpg')}}" class="work-popup">
                                <img src="{{asset($public.'/jpg/interview-1.jpg')}}" alt="img18">
                                <div class="img-overlay">
                                    <i class="fa fa-search"></i>
                                </div>
                            </a>
                        </div>
                        <div class="description">
                            <h2>Opening day</h2>
                            <p>Staff photos</p>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END START WORK DESIGN AREA -->

    <!-- PROJECT COMPLETE DESIGN AREA -->
    <section class="project-complete-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-project-complete">
                        <i class="fa fa-bar-chart"></i>
                        <h2 class="counter-num">1200</h2>
                        <h6 class="text-muted">project complete</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-project-complete">
                        <i class="fa fa-users"></i>
                        <h2 class="counter-num">1000</h2>
                        <h6 class="text-muted">Happy Clients</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-project-complete">
                        <i class="fa fa-clone"></i>
                        <h2 class="counter-num">56090</h2>
                        <h6 class="text-muted">Line Of Coding</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-project-complete">
                        <i class="fa fa-graduation-cap"></i>
                        <h2 class="counter-num">31</h2>
                        <h6 class="text-muted">Awwards Won</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END PROJECT COMPLETE DESIGN AREA -->

    <!-- START TESTIMONIAL DESIGN AREA -->
    <section id="testimonial" class="testimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>our <span>clients</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="testimonial-list">
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial text-center">
                            <img src="{{asset($public.'/jpg/1-2.jpg')}}" class="img-circle" alt="">
                            <h6 class="text-muted">Gospel Christian</h6>
                            <h5>CEO of Touching Lives Skills</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s.</p>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial text-center">
                            <img src="{{asset($public.'/jpg/1-2.jpg')}}" class="img-circle" alt="">
                            <h6 class="text-muted">john doe(Founder)</h6>
                            <h5>CEO of google</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s.</p>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial text-center">
                            <img src="{{asset($public.'/jpg/1-2.jpg')}}" class="img-circle" alt="">
                            <h6 class="text-muted">john doe(Founder)</h6>
                            <h5>CEO of google</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s.</p>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END TESTIMONIAL DESIGN AREA -->

    <!-- START PRICING DESIGN AREA -->
    {{--<section id="pricing" class="pricing-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>our <span>pricing</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE PRICING DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="pricing-box">
                        <div class="pricing-header">
                            <i class="fa fa-usd"></i>
                            <div class="plan-title">
                                <h4>Beginner</h4>
                            </div>
                            <div class="plan-price">
                                <p>$99 <span>/per month</span>
                                </p>
                            </div>
                        </div>
                        <ul class="list-unstyled plan-features">
                            <li>1 GB of space</li>
                            <li>Unlimited traffic</li>
                            <li>Forum access</li>
                            <li>Support at $25/hour</li>
                        </ul>
                        <a class="plan-more" href="#">Choose plan</a>
                    </div>
                </div>
                <!-- / END SINGLE PRICING DESIGN AREA -->
                <!-- START SINGLE PRICING DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="pricing-box">
                        <div class="pricing-header">
                            <i class="fa fa-usd"></i>
                            <div class="plan-title">
                                <h4>standard</h4>
                            </div>
                            <div class="plan-price">
                                <p>$109 <span>/per month</span>
                                </p>
                            </div>
                        </div>
                        <ul class="list-unstyled plan-features">
                            <li>1 GB of space</li>
                            <li>Unlimited traffic</li>
                            <li>Forum access</li>
                            <li>Support at $25/hour</li>
                        </ul>
                        <a class="plan-more" href="#">Choose plan</a>
                    </div>
                </div>
                <!-- / END SINGLE PRICING DESIGN AREA -->
                <!-- START SINGLE PRICING DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="pricing-box">
                        <div class="pricing-header">
                            <i class="fa fa-usd"></i>
                            <div class="plan-title">
                                <h4>advance</h4>
                            </div>
                            <div class="plan-price">
                                <p>$200 <span>/per month</span>
                                </p>
                            </div>
                        </div>
                        <ul class="list-unstyled plan-features">
                            <li>1 GB of space</li>
                            <li>Unlimited traffic</li>
                            <li>Forum access</li>
                            <li>Support at $25/hour</li>
                        </ul>
                        <a class="plan-more" href="#">Choose plan</a>
                    </div>
                </div>
                <!-- / END SINGLE PRICING DESIGN AREA -->
            </div>
        </div>
    </section>--}}
    <!-- / END PRICING DESIGN AREA -->

    <!-- START GET STARTED DESIGN AREA -->
    <section class="get-started section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="get-text text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                         data-wow-offset="0">
                        <h2>so what are you waiting for?</h2>
                        <p>Join our skill training programme</p>
                        <a href="#contact" class="read-more">join now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END GET STARTED DESIGN AREA -->

    <!-- START CONTACT DESIGN AREA -->
    <section id="contact" class="contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title white-title">
                        <h2>contact <span>us</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- START CONTACT FORM DESIGN AREA -->
                    <div class="contact-form">
                        <form id="contact-form" method="post" enctype="multipart/form-data">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="first-name" placeholder="Name"
                                       required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                                       required="required">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" id="subject"
                                       placeholder="Subject">
                            </div>
                            <div class="form-group col-md-12">
                            <textarea rows="6" name="message" class="form-control" id="description"
                                      placeholder="Your Message" required="required"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="actions">
                                    <input type="submit" value="Send message" name="submit" id="submitButton"
                                           class="btn btn-lg btn-contact-bg" title="Submit Your Message!">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- / END CONTACT FORM DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END CONTACT DESIGN AREA -->

    <!-- TART MAP DESIGN AREA -->
    <div id="map"></div>
    <!-- / END MAP DESIGN AREA -->
@endsection