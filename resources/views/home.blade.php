@php
    $public='';
    if(config('app.env') == 'production')
    $public ='public';
@endphp
@extends('layouts.app')
@section('styles')
    <style>
        .form-group{
            float: left;
            margin-left: 0 !important;
        }
        .single-team p {
            font-size: 12px;
            line-height: 12px;
        }

        .our-services {
            font-size: 13px;
            text-align: justify;
            padding-right: 13px;
        }

        .our-services .modal-header {
            text-align: center;
            margin-top: 8px;
            color: #ffffff;
            background-color: #61A4DB;
            border-radius: 6px;
        }

        .our-services button {
            color: #ffffff;
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
                                                    <h2>To advance the nascency of men and women who will come into their dignity and pride to fulfill love’s dream.</h2>
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
                                                    <h2>To give lives eminence and build a peaceful and prosperous world with love.</h2>
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
                                                    <h3>Our Purpose</h3>
                                                    <h2>To bring them into their dignity and pride.</h2>
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
                        <h2>Services we provide</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-service">
                        <i class="fa fa-camera"></i>
                        <h4>skills and business training</h4>
                        <p>We engage our trainees on business and entrepreneurial training program thereby grooming them
                            to become successful in business</p>
                        <a href="#" data-toggle="modal" data-target="#skills-business">learn more</a>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-service">
                        <i class="fa fa-laptop"></i>
                        <h4>empowerment</h4>
                        <p>To encourage the expansion, growth and economic base of our trainees with reference to those
                            who already have existing businesses</p>
                        <a href="#" data-toggle="modal" data-target="#empowerment">learn more</a>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-service">
                        <i class="fa fa-hospital-o"></i>
                        <h4>free health services</h4>
                        <p>Touching lives signature is clearly demonstrated in the health sector in every community were
                            our presence is felt.</p>
                        <a href="#" data-toggle="modal" data-target="#health-services">learn more</a>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-service">
                        <i class="fa fa-cloud-download"></i>
                        <h4>business consultancy</h4>
                        <p>Touching lives team of business consultants assist trainees achieve efficiency and
                            effectiveness in their businesses.</p>
                        <a href="#" data-toggle="modal" data-target="#business-consultancy">learn more</a>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1s">
                    <div class="single-service">
                        <i class="fa fa-line-chart"></i>
                        <h4>micro finance services</h4>
                        <p>Our Micro-Credit Bank offers interest free loans to various category of business owners to
                            assist in growing and expanding their businesses</p>
                        <a href="#" data-toggle="modal" data-target="#micro-credit">learn more</a>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="single-service">
                        <i class="fa fa-legal"></i>
                        <h4>free legal services</h4>
                        <p>TLS legal service department is equipped with well trained and highly experienced legal
                            experts. We offer free legal services.</p>
                        <a href="#" data-toggle="modal" data-target="#legal-services">learn more</a>
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
                <div class="col-md-12" style="display: table;">
                    <div class="col-md-4 col-sm-10">
                        <div class="single-team">
                            <img src="{{asset($public.'/jpg/ceo.jpg')}}" alt="">
                            <h4>Gospel Christian</h4>
                            <h6 class="text-muted">Chief Executive Officer</h6>
                            <p>A preacher and Pastor of a Believers Loveworld Inc Church branch AKA
                                Christ Embassy. A motivational speaker who has pioneered over 30 successful projects and
                                humanitarian services. The Managing Director of Gr8 Coins
                                Ltd, The Chief Executive Officer of Klinkings Ltd. A business Consultant and a team
                                builder.</p>
                        </div>
                    </div>
                    <!-- / END SINGLE TEAM DESIGN AREA -->
                    <!-- START SINGLE TEAM DESIGN AREA -->
                    <div class="col-md-4 col-sm-10">
                        <div class="single-team">
                            <img src="{{asset($public.'/jpg/governor.jpg')}}" alt="">
                            <h4>Elisha Wealth</h4>
                            <h6 class="text-muted">Governor/Executive Director</h6>
                            <p>A preacher and Pastor of a branch of Believers Loveworld Inc. (Christ Embassy).
                                A business Man, Business consultant and Managing Director of Praesto Technologies Ltd.
                                Also skilled in Programming and a passionate musician. Networking and fibre optics,
                                Computer
                                Music Production and graphics designs.</p>
                        </div>
                    </div>
                    <!-- / END SINGLE TEAM DESIGN AREA -->
                    <!-- START SINGLE TEAM DESIGN AREA -->
                    <div class="col-md-4 col-sm-10">
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
                </div>
                <div style="display: table;">
                    <!-- START SINGLE TEAM DESIGN AREA -->
                    <div class="col-md-4 col-sm-10">
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
                    <div class="col-md-4 col-sm-10">
                        <div class="single-team">
                            <img src="{{asset($public.'/jpg/directorhealth.jpg')}}" alt="">
                            <h4>dorcas linus</h4>
                            <h6 class="text-muted">Director of Health</h6>
                            <p>The Managing Director Cheryl Health care and Maternity.
                                Having a track record of over 35years of no loss or casualty of patients during child
                                birth or treatment in her clinic.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-10">
                        <div class="single-team">
                            <img src="{{asset($public.'/jpg/secretary.jpg')}}" alt="">
                            <h4>Blessing Linus Effiong</h4>
                            <h6 class="text-muted">Secretary General</h6>
                            <p>A cosmetologist, make up artist and Designer.
                                The Managing Director of Eddyz Ltd.</p>
                        </div>
                    </div>
                    <!-- / END SINGLE TEAM DESIGN AREA -->

                </div>
                <div style="display: table;">
                    <div class="col-md-3 col-sm-10">
                        <div class="single-team">
                            <h4>Etim Peter Bassey</h4>
                            <h6 class="text-muted">Director of Skills and Development</h6>
                            <p>An electronic specialist. The manager and head of technical operations ALAWNY GLOBAL
                                TECHNOLOGIES (A.K.A. solar solutions centre). Designs and constructs solar panels and
                                inverters, Industrial and domestic electrical installations and maintenance, computer
                                networking, car repairs and maintenance</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-10">
                        <div class="single-team">
                            <h4>Rowland Obot</h4>
                            <h6 class="text-muted">Director of Investment</h6>
                            <p>The managing Director of Solutions Park Integrated Services Ltd.
                                Skills: A Petroleum Engineer.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-10">
                        <div class="single-team">
                            <h4>Richard Cornelius Banigo</h4>
                            <h6 class="text-muted">Director Special Duties</h6>
                            <p>A Decorator, Paint Producer and Designer.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-10">
                        <div class="single-team">
                            <h4>Francis Bassey Etim</h4>
                            <h6 class="text-muted">Director Human Resource</h6>
                            <p>A business consultant and Chief Executive/Managing director of Equidius Technologies
                                Limited. He is a cryptocurrency expert with a wealth of knowledge in cryptocurrencies
                                exchange, trading, mining, set up and operation of cryptocurrencies masternodes.</p>
                        </div>
                    </div>
                </div>

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
                        <p>Our aim is to reach out to the poor population with skills and empowerment for development,
                            hence fulfilling the vision of the United nations development Program UNDP.</p>
                        <a href="{{url('join')}}" class="read-more">get started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END GET STARTED DESIGN AREA -->
    {{--

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
    --}}

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
                        <li data-filter=".commissioning">Opening Day</li>
                        <li data-filter=".inauguration">Graduation</li>
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
                            <h2>Graduation</h2>
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
                            <h2>Graduation</h2>
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
                            <h2>Graduation</h2>
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
                            <h2>Graduation</h2>
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
                            <h2>Graduation</h2>
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
                            <h2>Graduation</h2>
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
                            <h2>Interview</h2>
                            <p>Staff photos</p>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END START WORK DESIGN AREA -->

    {{--<!-- PROJECT COMPLETE DESIGN AREA -->
    <section class="project-complete-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-10">
                    <div class="single-project-complete">
                        <i class="fa fa-bar-chart"></i>
                        <h2 class="counter-num">1200</h2>
                        <h6 class="text-muted">project complete</h6>
                    </div>
                </div>
                <div class="col-md-4 col-sm-10">
                    <div class="single-project-complete">
                        <i class="fa fa-users"></i>
                        <h2 class="counter-num">1000</h2>
                        <h6 class="text-muted">Happy Clients</h6>
                    </div>
                </div>
                <div class="col-md-4 col-sm-10">
                    <div class="single-project-complete">
                        <i class="fa fa-clone"></i>
                        <h2 class="counter-num">56090</h2>
                        <h6 class="text-muted">Line Of Coding</h6>
                    </div>
                </div>
                <div class="col-md-4 col-sm-10">
                    <div class="single-project-complete">
                        <i class="fa fa-graduation-cap"></i>
                        <h2 class="counter-num">31</h2>
                        <h6 class="text-muted">Awwards Won</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END PROJECT COMPLETE DESIGN AREA -->--}}

    {{--<!-- START TESTIMONIAL DESIGN AREA -->
    <section id="testimonial" class="testimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Testimonials</h2>
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
    <!-- / END TESTIMONIAL DESIGN AREA -->--}}

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
                        <a href="{{url('/join')}}" class="read-more">Join Now</a>
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
                            {{ csrf_field() }}
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

    <div id="skills-business" class="modal fade our-services" role="dialog">
        <div class="modal-dialog modal-dialog-popout">

            <!-- Modal content-->
            <div class="modal-content col-md-12">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Skills and business training</h4>
                </div>
                <div class="col-md-12 modal-body" id="registerModalContent">
                    <p>In line with our major focus which is that of improving the standard of living of the people.
                        Touching lives of train the people in various field of human empowerment and trade ranging from
                        Accessories, Agriculture(Fish farming/ Poultry) Cosmetology which encompasses makeup, Hair
                        dressing,
                        Clothing and Textile, Media, Pastries, Paint production, Paper production, Solar panel
                        production,
                        Web design and Programming.</p>
                    <p>We also engage our trainees on business and entrepreneurial training program thereby grooming
                        them
                        to become successful in business.</p>
                    <p>The primary aim is to groom the people to be of help not only to themselves and live an
                        independent
                        life but to also contribute their wealth of experience to the growth and development of the
                        society
                        and the nation at large.</p>
                </div>
            </div>

        </div>
    </div>
    <div id="empowerment" class="modal fade our-services" role="dialog">
        <div class="modal-dialog modal-dialog-slideleft">

            <!-- Modal content-->
            <div class="modal-content col-md-12">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Empowerment</h4>
                </div>
                <div class="col-md-12 modal-body" id="registerModalContent">
                    <p>To encourage the expansion, growth and economic base of our trainees with reference to those who
                        already have existing businesses, Touching lives gives grants to such persons to inject into
                        their
                        businesses.</p>
                    <p>This however is made possible after our ILO's have inspected such businesses, assess their
                        performance and commitment on the part of the business owner and made recommendation for
                        financial
                        assistance to be extended to the business.</p>
                    <p>For those who do not have any business of their own, after the entrepreneurial training coupled
                        with
                        the choice of the skill the trainee decided to embark on, Financial assistance in form of
                        grants/interest Free loans is also extended to them to commence or start up their business or
                        trade.
                        In order to ensure that our beneficiaries utilizes the funds for the purpose it was given ILO's
                        are
                        always on ground to closely monitor and assist them to make a success out of their
                        businesses.</p>
                </div>
            </div>

        </div>
    </div>
    <div id="health-services" class="modal fade our-services" role="dialog">
        <div class="modal-dialog modal-dialog-fromright">

            <!-- Modal content-->
            <div class="modal-content col-md-12">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Free Health Services</h4>
                </div>
                <div class="col-md-12 modal-body" id="registerModalContent">
                    <p>Touching lives signature is clearly demonstrated in the health sector in every community were our
                        presence is felt. Our Organization has made significant and substantial investment in the
                        promotion
                        of healthy living and provision of free health services. Our deliberate commitment in this
                        sector is
                        in line with our philosophy "A Healthy People are A Happy People".</p>
                    <p>Our commitment in seeking good health for all cut across all classes of people.</p>
                    <p>Hence, our free health Care are easily accessible by the pregnant women, nursing mothers,
                        children
                        including the men and the Elderly. Under Free health services, Touching lives also provides
                        services
                        such as free eye test, free surgery, counselling, free drugs, health materials etc.</p>
                    <p>Touching lives health care service is fashioned at par with world class medical services with the
                        best practice and standard.</p>
                    <p>With our team of experts we also organise free health talks for communities, organizations and
                        bodies as well as mount campaigns for sustainable healthy living.</p>
                    <p>Our health centers are equipped with state of the art facilities with an array of sound, trusted
                        and
                        tested medical practitioners which includes, doctors, pharmacists, nurses, laboratory
                        scientists,
                        experts in ICT as well as qualified consultants and specialists.
                        Interestingly, this covers both primary and secondary health care system.</p>
                </div>
            </div>

        </div>
    </div>
    <div id="business-consultancy" class="modal fade our-services" role="dialog">
        <div class="modal-dialog modal-dialog-slideup">

            <!-- Modal content-->
            <div class="modal-content col-md-12">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Business Consultancy</h4>
                </div>
                <div class="col-md-12 modal-body" id="registerModalContent">
                    <p>Our team of experts in the field of businesses are always at hand to train the people on how they
                        can make success in their businesses, achieve maximum profit. Touching lives team of business
                        consultants assist trainees achieve efficiency and effectiveness in their businesses.</p>
                </div>
            </div>

        </div>
    </div>
    <div id="micro-credit" class="modal fade our-services" role="dialog">
        <div class="modal-dialog modal-dialog-slideright">

            <!-- Modal content-->
            <div class="modal-content col-md-12">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Micro-credit Bank</h4>
                </div>
                <div class="col-md-12 modal-body" id="registerModalContent">
                    <p>In line with the objective of Touching lives as it pertains to raising the economic status of the
                        people, our Micro-Credit Bank offers interest free loans to various category of business owners
                        to
                        assist in growing and expanding their businesses. TLS main credit scheme also promote the spirit
                        of
                        cooperation among members thereby encouraging the development of co-operatives within its area
                        of
                        operation.</p>
                    <p>The micro credit bank known as TLS savings is developed in a manner where its policies and
                        programmes is formulated to enhance the socio-economic growth of the society as well as the
                        members
                        well-being.</p>
                </div>
            </div>

        </div>
    </div>
    <div id="legal-services" class="modal fade our-services" role="dialog">
        <div class="modal-dialog modal-dialog-fromleft">

            <!-- Modal content-->
            <div class="modal-content col-md-12">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Legal Services</h4>
                </div>
                <div class="col-md-12 modal-body" id="registerModalContent">
                    <p>TLS legal service department is equipped with well trained and highly experienced legal
                        experts.</p>
                    <p>Our dedicated team of Lawyers offer free legal services.</p>
                    <p>In order to spread our legal service to those at the grass root level our legal team partners
                        with
                        civil society groups and international agencies thereby gaining wider spread.
                        Through our legal services, our humane posture, fairness and justice for all is clearly
                        showcased.</p>
                    <p>TLS legal services can be accessed by the less privilege, the indigent those whose rights have
                        been
                        adversely affected and their freedom infringed upon. Interested persons wishing to have access
                        to
                        these services can either visit our office for a one-on-one contact or lodge a formal complaint
                        detailing the matter at stake and requesting our intervention and also we attend to legal
                        services
                        based on referrals.</p>
                </div>
            </div>

        </div>
    </div>
@endsection
