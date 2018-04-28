@php
    $public='';
    if(App::environment('production'))
    $public ='public';
@endphp
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>
    
    <!-- Css -->
    <link href="{{asset($public.'/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/slick-slider.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/fancybox.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/plugin.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/color.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/style.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/responsive.css')}}" rel="stylesheet">
</head>

<body>
    
    <!-- Wrapper -->
    <div class="{{config('app.name')}}-wrapper">

        <!-- Header -->
        <header id="{{config('app.name')}}-header" class="{{config('app.name')}}-header-one">
            <div class="container">
                <div class="row">
                    <aside class="col-md-2"> <a href="index-2.html" class="{{config('app.name')}}-logo"><img src="{{asset($public.'/png/logo.png')}}" alt=""></a> </aside>
                    <aside class="col-md-6">
                        <nav class="{{config('app.name')}}-navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#{{config('app.name')}}-navbar-collapse-1" aria-expanded="false">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="{{config('app.name')}}-navbar-collapse-1">
                                <ul class="navbar-nav">
                                    <li class="active"><a href="index-2.html">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Demo {{config('app.name')}}</a></li>
                                            <li><a href="https://eyecix.com/html/{{config('app.name')}}-demos/hireright-demo/">Demo Hireright</a></li>
                                            <li><a href="https://eyecix.com/html/{{config('app.name')}}-demos/jobshub-demo/">Demo Jobshub</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="cv-packages.html">CV Packages</a></li>
                                            <li><a href="faq.html">Faq's</a></li>
                                            <li><a href="job-grid-full.html">Job Grid</a></li>
                                            <li><a href="job-grid-with-filters.html">Job Grid W/filter</a></li>
                                            <li><a href="job-listings.html">Job Listings</a></li>
                                            <li><a href="job-detail.html">Job Detail</a></li>
                                            <li><a href="job-packages.html">Job Packages</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">For Candidates</a>
                                        <ul class="sub-menu">
                                            <li><a href="candidate-dashboard-applied-jobs.html">Applied Jobs</a></li>
                                            <li><a href="candidate-dashboard-changed-password.html">Changed Password</a></li>
                                            <li><a href="candidate-dashboard-cv-manager.html">CV Manager</a></li>
                                            <li><a href="candidate-dashboard-job-alert.html">Job Alert</a></li>
                                            <li><a href="candidate-dashboard-profile-seting.html">Profile Setting</a></li>
                                            <li><a href="candidate-dashboard-resume.html">Candidate Resume</a></li>
                                            <li><a href="candidate-dashboard-saved-jobs.html">Saved Jobs</a></li>
                                            <li><a href="candidate-listings.html">Candidate Listings</a></li>
                                            <li><a href="candidate-grid.html">Candidate Grid</a></li>
                                            <li><a href="candidate-detail.html">Candidate Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">For Employers</a>
                                        <ul class="sub-menu">
                                            <li><a href="employer-list.html">Employer List</a></li>
                                            <li><a href="employer-grid.html">Employer Grid</a></li>
                                            <li><a href="employer-detail.html">Employer Detail</a></li>
                                            <li><a href="employer-dashboard-transactions.html">Transactions</a></li>
                                            <li><a href="employer-dashboard-resumes.html">Employer Resumes</a></li>
                                            <li><a href="employer-dashboard-profile-seting.html">Profile Setting</a></li>
                                            <li><a href="employer-dashboard-pkgpayment.html">Package Payment</a></li>
                                            <li><a href="employer-dashboard-packages.html">Packages</a></li>
                                            <li><a href="employer-dashboard-newjob.html">Employer New Job</a></li>
                                            <li><a href="employer-dashboard-manage-jobs.html">Menage Jobs</a></li>
                                            <li><a href="employer-dashboard-confitmation.html">Employer Confitmation</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </div>
                      </nav>
                    </aside>
                    <aside class="col-md-4">
                        <div class="{{config('app.name')}}-right">
                            <ul class="{{config('app.name')}}-user-section">
                                <li><a class="{{config('app.name')}}-color {{config('app.name')}}-open-signin-tab" href="#">Register</a></li>
                                <li><a class="{{config('app.name')}}-color {{config('app.name')}}-open-signup-tab" href="#">Sign in</a></li>
                            </ul>
                            <a href="#" class="{{config('app.name')}}-simple-btn {{config('app.name')}}-bgcolor"><span> <i class="{{config('app.name')}}-icon {{config('app.name')}}-arrows-2"></i> Post Job</span></a>
                        </div>
                    </aside>
                </div>
            </div>
        </header>
        <!-- Header -->
        
        <!-- Banner -->
        <div class="{{config('app.name')}}-banner {{config('app.name')}}-typo-wrap">
            <span class="{{config('app.name')}}-banner-transparent"></span>
            <div class="{{config('app.name')}}-banner-caption">
                <div class="container">
                    <h1>Aim Higher. Reach Farther. Dream Bigger.</h1>
                    <p>A better career is out there. We'll help you find it to use.</p>
                    <form class="{{config('app.name')}}-banner-search">
                        <ul>
                            <li>
                                <input value="Job Title, Keywords, or Company" onblur="if(this.value == '') { this.value ='Job Title, Keywords, or Company'; }" onfocus="if(this.value =='Job Title, Keywords, or Company') { this.value = ''; }" type="text">
                            </li>
                            <li>
                                <input value="City, State or ZIP" onblur="if(this.value == '') { this.value ='City, State or ZIP'; }" onfocus="if(this.value =='City, State or ZIP') { this.value = ''; }" type="text">
                                <i class="{{config('app.name')}}-icon {{config('app.name')}}-location"></i>
                            </li>
                            <li>
                                <div class="{{config('app.name')}}-select-style">
                                    <select>
                                        <option>Categories</option>
                                        <option>Categories</option>
                                        <option>Categories</option>
                                    </select>
                                </div>
                            </li>
                            <li class="{{config('app.name')}}-banner-submit"> <input type="submit" value=""> <i class="{{config('app.name')}}-icon {{config('app.name')}}-search"></i> </li>
                        </ul>
                    </form>
                    <div class="{{config('app.name')}}-banner-btn">
                        <a href="#" class="{{config('app.name')}}-bgcolorhover"><i class="{{config('app.name')}}-icon {{config('app.name')}}-up-arrow"></i> Upload Your Resume</a>
                        <a href="#" class="{{config('app.name')}}-bgcolorhover"><i class="{{config('app.name')}}-icon {{config('app.name')}}-portfolio"></i> Hiring? Post a job for free</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner -->

        <!-- Main Content -->
        <div class="{{config('app.name')}}-main-content">
            
            <!-- Main Section -->
            <div class="{{config('app.name')}}-main-section {{config('app.name')}}-counter-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <!-- Counter -->
                            <div class="{{config('app.name')}}-counter">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <span class="word-counter">123,012</span>
                                        <small>Jobs Added</small>
                                    </li>
                                    <li class="col-md-4">
                                        <span class="word-counter">187,432</span>
                                        <small>Active Resumes</small>
                                    </li>
                                    <li class="col-md-4">
                                        <span class="word-counter">140,312</span>
                                        <small>Positions Matched</small>
                                    </li>
                                </ul>
                            </div>
                            <!-- Counter -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Section -->

            <!-- Main Section -->
            <div class="{{config('app.name')}}-main-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 {{config('app.name')}}-typo-wrap">
                            <!-- Fancy Title -->
                            <section class="{{config('app.name')}}-fancy-title">
                                <h2>Popular Job Categories</h2>
                                <p>A better career is out there. We'll help you find it to use.</p>
                            </section>
                            <!-- Categories -->
                            <div class="categories-list">
                                <ul class="{{config('app.name')}}-row">
                                    <li class="{{config('app.name')}}-column-3">
                                        <i class="{{config('app.name')}}-icon {{config('app.name')}}-engineer"></i>
                                        <a href="#">construction / facilities</a>
                                        <span>(15 Open Vacancies)</span>
                                    </li>
                                    <li class="{{config('app.name')}}-column-3">
                                        <i class="{{config('app.name')}}-icon {{config('app.name')}}-car"></i>
                                        <a href="#">automotive jobs</a>
                                        <span>(12 Open Vacancies)</span>
                                    </li>
                                    <li class="{{config('app.name')}}-column-3">
                                        <i class="{{config('app.name')}}-icon {{config('app.name')}}-accounting"></i>
                                        <a href="#">Accounting / Finance</a>
                                        <span>(8 Open Vacancies)</span>
                                    </li>
                                    <li class="{{config('app.name')}}-column-3">
                                        <i class="{{config('app.name')}}-icon {{config('app.name')}}-hospital"></i>
                                        <a href="#">Health Care</a>
                                        <span>(5 Open Vacancies)</span>
                                    </li>
                                    <li class="{{config('app.name')}}-column-3">
                                        <i class="{{config('app.name')}}-icon {{config('app.name')}}-antenna"></i>
                                        <a href="#">Telecommunications</a>
                                        <span>(7 Open Vacancies)</span>
                                    </li>
                                    <li class="{{config('app.name')}}-column-3">
                                        <i class="{{config('app.name')}}-icon {{config('app.name')}}-books"></i>
                                        <a href="#">education training</a>
                                        <span>(22 Open Vacancies)</span>
                                    </li>
                                    <li class="{{config('app.name')}}-column-3">
                                        <i class="{{config('app.name')}}-icon {{config('app.name')}}-fast-food"></i>
                                        <a href="#">Restaurant / food services</a>
                                        <span>(30 Open Vacancies)</span>
                                    </li>
                                    <li class="{{config('app.name')}}-column-3">
                                        <i class="{{config('app.name')}}-icon {{config('app.name')}}-business"></i>
                                        <a href="#">Sales & Marketing</a>
                                        <span>(40 Open Vacancies)</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="{{config('app.name')}}-plain-btn"> <a href="#">Browse All Categories</a> </div>
                            <!-- Categories -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Section -->

            <!-- Main Section -->
            <div class="{{config('app.name')}}-main-section {{config('app.name')}}-parallex-full">
                <div class="container">
                    <div class="row">

                        <aside class="col-md-6 {{config('app.name')}}-typo-wrap">
                            <div class="{{config('app.name')}}-parallex-text">
                                <h2>Millions of jobs. <br> Find the one that’s right for you.</h2>
                                <p>Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide. The right job is out there.</p>
                                <a href="#" class="{{config('app.name')}}-static-btn {{config('app.name')}}-bgcolor"><span>Search Jobs</span></a>
                            </div>
                        </aside>
                        <aside class="col-md-6 {{config('app.name')}}-typo-wrap"> <div class="{{config('app.name')}}-right"><img src="{{asset($public.'/png/parallex-thumb-1.png')}}" alt=""></div> </aside>

                    </div>
                </div>
            </div>
            <!-- Main Section -->

            <!-- Main Section -->
            <div class="{{config('app.name')}}-main-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 {{config('app.name')}}-typo-wrap">
                            <!-- Fancy Title -->
                            <section class="{{config('app.name')}}-fancy-title">
                                <h2>Featured Jobs Listings</h2>
                                <p>A better career is out there. We'll help you find it to use.</p>
                            </section>
                            <!-- Featured Jobs Listings -->
                            <div class="{{config('app.name')}}-job-listing {{config('app.name')}}-featured-listing">
                                <ul class="{{config('app.name')}}-row">
                                    <li class="{{config('app.name')}}-column-6">
                                        <div class="{{config('app.name')}}-table-layer">
                                            <div class="{{config('app.name')}}-table-row">
                                                <figure><a href="#"><img src="{{asset($public.'/jpg/featured-listing-1.jpg')}}" alt=""></a></figure>
                                                <div class="{{config('app.name')}}-featured-listing-text">
                                                    <h2><a href="#">Dropbox -- UX designer</a></h2>
                                                    <a href="#" class="{{config('app.name')}}-like-list"><i class="{{config('app.name')}}-icon {{config('app.name')}}-heart"></i></a>
                                                    <time datetime="2008-02-14 20:00">September 15, 2017</time>
                                                    <div class="{{config('app.name')}}-featured-listing-options">
                                                        <ul>
                                                            <li><i class="{{config('app.name')}}-icon {{config('app.name')}}-maps-and-flags"></i> <a href="#">Rennes,</a> <a href="#">France</a></li>
                                                            <li><i class="{{config('app.name')}}-icon {{config('app.name')}}-filter-tool-black-shape"></i> <a href="#">Accountancy</a></li>
                                                        </ul>
                                                        <a href="#" class="{{config('app.name')}}-option-btn">Freelance</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="{{config('app.name')}}-column-6">
                                        <div class="{{config('app.name')}}-table-layer">
                                            <div class="{{config('app.name')}}-table-row">
                                                <figure><a href="#"><img src="{{asset($public.'/jpg/featured-listing-2.jpg')}}" alt=""></a></figure>
                                                <div class="{{config('app.name')}}-featured-listing-text">
                                                    <h2><a href="#">Dropbox -- UX designer</a></h2>
                                                    <a href="#" class="{{config('app.name')}}-like-list"><i class="{{config('app.name')}}-icon {{config('app.name')}}-heart"></i></a>
                                                    <time datetime="2008-02-14 20:00">September 15, 2017</time>
                                                    <div class="{{config('app.name')}}-featured-listing-options">
                                                        <ul>
                                                            <li><i class="{{config('app.name')}}-icon {{config('app.name')}}-maps-and-flags"></i> <a href="#">Derry,</a> <a href="#">United Kingdom</a></li>
                                                            <li><i class="{{config('app.name')}}-icon {{config('app.name')}}-filter-tool-black-shape"></i> <a href="#">Automotive</a></li>
                                                        </ul>
                                                        <a href="#" class="{{config('app.name')}}-option-btn {{config('app.name')}}-blue">Full time</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="{{config('app.name')}}-column-6">
                                        <div class="{{config('app.name')}}-table-layer">
                                            <div class="{{config('app.name')}}-table-row">
                                                <figure><a href="#"><img src="{{asset($public.'/jpg/featured-listing-3.jpg')}}" alt=""></a></figure>
                                                <div class="{{config('app.name')}}-featured-listing-text">
                                                    <h2><a href="#">Dropbox -- UX designer</a></h2>
                                                    <a href="#" class="{{config('app.name')}}-like-list"><i class="{{config('app.name')}}-icon {{config('app.name')}}-heart"></i></a>
                                                    <time datetime="2008-02-14 20:00">September 15, 2017</time>
                                                    <div class="{{config('app.name')}}-featured-listing-options">
                                                        <ul>
                                                            <li><i class="{{config('app.name')}}-icon {{config('app.name')}}-maps-and-flags"></i> <a href="#">Aberdeen,</a> <a href="#">United Kingdom</a></li>
                                                            <li><i class="{{config('app.name')}}-icon {{config('app.name')}}-filter-tool-black-shape"></i> <a href="#">Banking</a></li>
                                                        </ul>
                                                        <a href="#" class="{{config('app.name')}}-option-btn {{config('app.name')}}-red">Temporary</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="{{config('app.name')}}-column-6">
                                        <div class="{{config('app.name')}}-table-layer">
                                            <div class="{{config('app.name')}}-table-row">
                                                <figure><a href="#"><img src="{{asset($public.'/jpg/featured-listing-4.jpg')}}" alt=""></a></figure>
                                                <div class="{{config('app.name')}}-featured-listing-text">
                                                    <h2><a href="#">Dropbox -- UX designer</a></h2>
                                                    <a href="#" class="{{config('app.name')}}-like-list"><i class="{{config('app.name')}}-icon {{config('app.name')}}-heart"></i></a>
                                                    <time datetime="2008-02-14 20:00">September 15, 2017</time>
                                                    <div class="{{config('app.name')}}-featured-listing-options">
                                                        <ul>
                                                            <li><i class="{{config('app.name')}}-icon {{config('app.name')}}-maps-and-flags"></i> <a href="#">Saint-Etienne,</a> <a href="#">France</a></li>
                                                            <li><i class="{{config('app.name')}}-icon {{config('app.name')}}-filter-tool-black-shape"></i> <a href="#">Restaurant</a></li>
                                                        </ul>
                                                        <a href="#" class="{{config('app.name')}}-option-btn {{config('app.name')}}-green">Part time</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="{{config('app.name')}}-column-6">
                                        <div class="{{config('app.name')}}-table-layer">
                                            <div class="{{config('app.name')}}-table-row">
                                                <figure><a href="#"><img src="{{asset($public.'/jpg/featured-listing-5.jpg')}}" alt=""></a></figure>
                                                <div class="{{config('app.name')}}-featured-listing-text">
                                                    <h2><a href="#">Dropbox -- UX designer</a></h2>
                                                    <a href="#" class="{{config('app.name')}}-like-list"><i class="{{config('app.name')}}-icon {{config('app.name')}}-heart"></i></a>
                                                    <time datetime="2008-02-14 20:00">September 15, 2017</time>
                                                    <div class="{{config('app.name')}}-featured-listing-options">
                                                        <ul>
                                                            <li><i class="{{config('app.name')}}-icon {{config('app.name')}}-maps-and-flags"></i> <a href="#">London,</a> <a href="#">United Kingdom</a></li>
                                                            <li><i class="{{config('app.name')}}-icon {{config('app.name')}}-filter-tool-black-shape"></i> <a href="#">Real Estate</a></li>
                                                        </ul>
                                                        <a href="#" class="{{config('app.name')}}-option-btn {{config('app.name')}}-blue">Full time</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="{{config('app.name')}}-column-6">
                                        <div class="{{config('app.name')}}-table-layer">
                                            <div class="{{config('app.name')}}-table-row">
                                                <figure><a href="#"><img src="{{asset($public.'/jpg/featured-listing-6.jpg')}}" alt=""></a></figure>
                                                <div class="{{config('app.name')}}-featured-listing-text">
                                                    <h2><a href="#">Dropbox -- UX designer</a></h2>
                                                    <a href="#" class="{{config('app.name')}}-like-list"><i class="{{config('app.name')}}-icon {{config('app.name')}}-heart"></i></a>
                                                    <time datetime="2008-02-14 20:00">September 15, 2017</time>
                                                    <div class="{{config('app.name')}}-featured-listing-options">
                                                        <ul>
                                                            <li><i class="{{config('app.name')}}-icon {{config('app.name')}}-maps-and-flags"></i> <a href="#">Rennes,</a> <a href="#">France</a></li>
                                                            <li><i class="{{config('app.name')}}-icon {{config('app.name')}}-filter-tool-black-shape"></i> <a href="#">Education</a></li>
                                                        </ul>
                                                        <a href="#" class="{{config('app.name')}}-option-btn">Freelance</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Featured Jobs Listings -->
                            <div class="{{config('app.name')}}-plain-btn"> <a href="#">View All Jobs</a> </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Section -->

            <!-- Main Section -->
            <div class="{{config('app.name')}}-main-section {{config('app.name')}}-testimonial-full">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="{{config('app.name')}}-typo-wrap">
                            <div class="{{config('app.name')}}-testimonial-section">
                                <div class="row">
                                    <aside class="col-md-5"> <img src="{{asset($public.'/jpg/testimonial-thumb-1.jpg')}}" alt=""> </aside>
                                    <aside class="col-md-7">
                                        <div class="{{config('app.name')}}-testimonial-slider">
                                            <div class="{{config('app.name')}}-testimonial-slide-layer">
                                                <div class="{{config('app.name')}}-testimonial-wrap">
                                                    <p>I just got a job that I applied for via JobSearch! I used the site all the time during my job hunt.</p>
                                                    <div class="{{config('app.name')}}-testimonial-text">
                                                        <h2>Richard Anderson</h2>
                                                        <span>Nevada, USA</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="{{config('app.name')}}-testimonial-slide-layer">
                                                <div class="{{config('app.name')}}-testimonial-wrap">
                                                    <p>I just got a job that I applied for via JobSearch! I used the site all the time during my job hunt.</p>
                                                    <div class="{{config('app.name')}}-testimonial-text">
                                                        <h2>Richard Anderson</h2>
                                                        <span>Nevada, USA</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Main Section -->

            <!-- Main Section -->
            <div class="{{config('app.name')}}-main-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <!-- Fancy Title -->
                            <section class="{{config('app.name')}}-fancy-title">
                                <h2>From Our Blogs</h2>
                                <p>A better career is out there. We'll help you find it to use.</p>
                            </section>
                            <!-- Blog -->
                            <div class="{{config('app.name')}}-blog {{config('app.name')}}-blog-grid">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <figure><a href="#"><img src="{{asset($public.'/jpg/blog-grid-1.jpg')}}" alt=""></a></figure>
                                        <div class="{{config('app.name')}}-blog-grid-text">
                                            <div class="{{config('app.name')}}-blog-tag"> <a href="#">Culture</a> </div>
                                            <h2><a href="#">Are You Paid Fairly? See Your Market Worth in Seconds</a></h2>
                                            <ul class="{{config('app.name')}}-blog-grid-option">
                                                <li>BY <a href="#" class="{{config('app.name')}}-color">Click mag staff</a></li>
                                                <li><time datetime="2008-02-14 20:00">OCT 6, 2016</time></li>
                                            </ul>
                                            <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est.</p>
                                            <a href="#" class="{{config('app.name')}}-read-more {{config('app.name')}}-bgcolor">Read Articles</a>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <figure><a href="#"><img src="{{asset($public.'/jpg/blog-grid-2.jpg')}}" alt=""></a></figure>
                                        <div class="{{config('app.name')}}-blog-grid-text">
                                            <div class="{{config('app.name')}}-blog-tag"> <a href="#">ENTERTAINMENT</a> </div>
                                            <h2><a href="#">Are You Paid Fairly? See Your Market Worth in Seconds</a></h2>
                                            <ul class="{{config('app.name')}}-blog-grid-option">
                                                <li>BY <a href="#" class="{{config('app.name')}}-color">Click mag staff</a></li>
                                                <li><time datetime="2008-02-14 20:00">OCT 6, 2016</time></li>
                                            </ul>
                                            <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est.</p>
                                            <a href="#" class="{{config('app.name')}}-read-more {{config('app.name')}}-bgcolor">Read Articles</a>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <figure><a href="#"><img src="{{asset($public.'/jpg/blog-grid-3.jpg')}}" alt=""></a></figure>
                                        <div class="{{config('app.name')}}-blog-grid-text">
                                            <div class="{{config('app.name')}}-blog-tag"> <a href="#">Living</a> </div>
                                            <h2><a href="#">Are You Paid Fairly? See Your Market Worth in Seconds</a></h2>
                                            <ul class="{{config('app.name')}}-blog-grid-option">
                                                <li>BY <a href="#" class="{{config('app.name')}}-color">Click mag staff</a></li>
                                                <li><time datetime="2008-02-14 20:00">OCT 6, 2016</time></li>
                                            </ul>
                                            <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est.</p>
                                            <a href="#" class="{{config('app.name')}}-read-more {{config('app.name')}}-bgcolor">Read Articles</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Section -->

            <!-- Main Section -->
            <div class="{{config('app.name')}}-main-section {{config('app.name')}}-parallex-text-full">
                <div class="container">
                    <div class="row">

                        <aside class="col-md-6 {{config('app.name')}}-typo-wrap">
                            <div class="{{config('app.name')}}-parallex-text {{config('app.name')}}-logo-text">
                                <h2>Millions of jobs. <br> Find the one that’s right for you.</h2>
                                <p>Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide. The right job is out there. Use JobSearch to find it.</p>
                                <a href="#" class="{{config('app.name')}}-static-btn {{config('app.name')}}-bgcolor"><span>Search Jobs</span></a>
                            </div>
                        </aside>
                        <aside class="col-md-6 {{config('app.name')}}-typo-wrap"> <div class="{{config('app.name')}}-logo-thumb"><img src="{{asset($public.'/jpg/multiple-logos.jpg')}}" alt=""></div> </aside>

                    </div>
                </div>
            </div>
            <!-- Main Section -->

        </div>
        <!-- Main Content -->
        
        <!-- Footer -->
        <footer id="{{config('app.name')}}-footer" class="{{config('app.name')}}-footer-one">
            <div class="container">
                <!-- Footer Widget -->
                <div class="{{config('app.name')}}-footer-widget">
                    <div class="row">
                        <aside class="widget col-md-4 widget_contact_info">
                            <div class="widget_contact_wrap">
                                <a class="{{config('app.name')}}-footer-logo" href="index-2.html"><img src="{{asset($public.'/png/footer-logo.png')}}" alt=""></a>
                                <p>Sed consequat sapien faus quam bibendum convallis quis in nulla. Pellentesque volutpat odio eget diam cursus semper. Sed coquat sapien faucibus quam.</p>
                                <a href="#" class="{{config('app.name')}}-classic-btn {{config('app.name')}}-bgcolor">Learn more</a>
                            </div>
                        </aside>
                        <aside class="widget col-md-3 widget_nav_manu">
                            <div class="footer-widget-title"><h2>Quick Links</h2></div>
                            <ul>
                                <li><a href="#">Shortcodes</a></li>
                                <li><a href="#">Job Page</a></li>
                                <li><a href="#">Job Page Alternative</a></li>
                                <li><a href="#">Resume Page</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </aside>
                        <aside class="widget col-md-3 widget_nav_manu">
                            <div class="footer-widget-title"><h2>For Candidates</h2></div>
                            <ul>
                                <li><a href="#">Browse Jobs</a></li>
                                <li><a href="#">Browse Categories</a></li>
                                <li><a href="#">Submit Resume</a></li>
                                <li><a href="#">Candidate Dashboard</a></li>
                                <li><a href="#">Job Alerts</a></li>
                                <li><a href="#">My Bookmarks</a></li>
                            </ul>
                        </aside>
                        <aside class="widget col-md-2 widget_nav_manu">
                            <div class="footer-widget-title"><h2>For Employers</h2></div>
                            <ul>
                                <li><a href="#">Browse Candidates</a></li>
                                <li><a href="#">Employer Dashboard</a></li>
                                <li><a href="#">Add Job</a></li>
                                <li><a href="#">Job Packages</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
                <!-- Footer Widget -->
                <!-- CopyRight -->
                <div class="{{config('app.name')}}-copyright">
                    <p>Copyrights © 2018 All Rights Reserved by <a href="#" class="{{config('app.name')}}-color">EyeCix</a></p>
                    <ul class="{{config('app.name')}}-social-network">
                        <li><a href="#" class="{{config('app.name')}}-bgcolorhover fa fa-facebook"></a></li>
                        <li><a href="#" class="{{config('app.name')}}-bgcolorhover fa fa-twitter"></a></li>
                        <li><a href="#" class="{{config('app.name')}}-bgcolorhover fa fa-dribbble"></a></li>
                        <li><a href="#" class="{{config('app.name')}}-bgcolorhover fa fa-linkedin"></a></li>
                        <li><a href="#" class="{{config('app.name')}}-bgcolorhover fa fa-instagram"></a></li>
                    </ul>
                </div>
                <!-- CopyRight -->
            </div>
        </footer>
        <!-- Footer -->

    </div>
    <!-- Wrapper -->

    <!-- ModalLogin Box -->
    <div class="{{config('app.name')}}-modal fade {{config('app.name')}}-typo-wrap" id="JobSearchModalSignup">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">

                <div class="{{config('app.name')}}-modal-title-box">
                    <h2>Login to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
                <form>
                    <div class="{{config('app.name')}}-box-title">
                        <span>Choose your Account Type</span>
                    </div>
                    <div class="{{config('app.name')}}-user-options">
                        <ul>
                            <li class="active">
                                <a href="#">
                                     <i class="{{config('app.name')}}-icon {{config('app.name')}}-user"></i>
                                     <span>Candidate</span>
                                     <small>I want to discover awesome companies.</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                     <i class="{{config('app.name')}}-icon {{config('app.name')}}-building"></i>
                                     <span>Employer</span>
                                     <small>I want to attract the best talent.</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="{{config('app.name')}}-user-form">
                        <ul>
                            <li>
                                <label>Email Address:</label>
                                <input value="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="text">
                                <i class="{{config('app.name')}}-icon {{config('app.name')}}-mail"></i>
                            </li>
                            <li>
                                <label>Password:</label>
                                <input value="Enter Password" onblur="if(this.value == '') { this.value ='Enter Password'; }" onfocus="if(this.value =='Enter Password') { this.value = ''; }" type="text">
                                <i class="{{config('app.name')}}-icon {{config('app.name')}}-multimedia"></i>
                            </li>
                            <li>
                                <input type="submit" value="Sign In">
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="{{config('app.name')}}-user-form-info">
                            <p>Forgot Password? | <a href="#">Sign Up</a></p>
                            <div class="{{config('app.name')}}-checkbox">
                                <input type="checkbox" id="r10" name="rr" />
                                <label for="r10"><span></span> Remember Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="{{config('app.name')}}-box-title {{config('app.name')}}-box-title-sub">
                        <span>Or Sign In With</span>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="{{config('app.name')}}-login-media">
                        <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                        <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with Google</a></li>
                        <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a></li>
                        <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with LinkedIn</a></li>
                    </ul>
                </form>
                
            </div>
        </div>
    </div>
    <!-- Modal Signup Box -->
    <div class="{{config('app.name')}}-modal fade {{config('app.name')}}-typo-wrap" id="JobSearchModalLogin">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">

                <div class="{{config('app.name')}}-modal-title-box">
                    <h2>Signup to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
                <form>
                    <div class="{{config('app.name')}}-box-title">
                        <span>Choose your Account Type</span>
                    </div>
                    <div class="{{config('app.name')}}-user-options">
                        <ul>
                            <li class="active">
                                <a href="#">
                                     <i class="{{config('app.name')}}-icon {{config('app.name')}}-user"></i>
                                     <span>Candidate</span>
                                     <small>I want to discover awesome companies.</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                     <i class="{{config('app.name')}}-icon {{config('app.name')}}-building"></i>
                                     <span>Employer</span>
                                     <small>I want to attract the best talent.</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="{{config('app.name')}}-user-form {{config('app.name')}}-user-form-coltwo">
                        <ul>
                            <li>
                                <label>First Name:</label>
                                <input value="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="{{config('app.name')}}-icon {{config('app.name')}}-user"></i>
                            </li>
                            <li>
                                <label>Last Name:</label>
                                <input value="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="{{config('app.name')}}-icon {{config('app.name')}}-user"></i>
                            </li>
                            <li>
                                <label>Email Address:</label>
                                <input value="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="text">
                                <i class="{{config('app.name')}}-icon {{config('app.name')}}-mail"></i>
                            </li>
                            <li>
                                <label>Phone Number:</label>
                                <input value="Enter Your Phone Number" onblur="if(this.value == '') { this.value ='Enter Your Phone Number'; }" onfocus="if(this.value =='Enter Your Phone Number') { this.value = ''; }" type="text">
                                <i class="{{config('app.name')}}-icon {{config('app.name')}}-technology"></i>
                            </li>
                            <li class="{{config('app.name')}}-user-form-coltwo-full">
                                <label>Categories:</label>
                                <div class="{{config('app.name')}}-profile-select">
                                    <select>
                                        <option>Sales & Marketing</option>
                                        <option>Sales & Marketing</option>
                                    </select>
                                </div>
                            </li>
                            <li class="{{config('app.name')}}-user-form-coltwo-full">
                                <img src="{{asset($public.'/png/login-robot.png')}}" alt="">
                            </li>
                            <li class="{{config('app.name')}}-user-form-coltwo-full">
                                <input type="submit" value="Sign Up">
                            </li>
                        </ul>
                    </div>
                    <div class="{{config('app.name')}}-box-title {{config('app.name')}}-box-title-sub">
                        <span>Or Sign Up With</span>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="{{config('app.name')}}-login-media">
                        <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                        <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with Google</a></li>
                        <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a></li>
                        <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with LinkedIn</a></li>
                    </ul>
                </form>
                
            </div>
        </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset($public.'/js/jquery.js')}}"></script>
    <script src="{{asset($public.'/js/bootstrap.js')}}"></script>
    <script src="{{asset($public.'/js/slick-slider.js')}}"></script>
    <script src="{{asset($public.'/js/counter.js')}}"></script>
    <script src="{{asset($public.'/js/fancybox.pack.js')}}"></script>
    <script src="{{asset($public.'/js/isotope.min.js')}}"></script>
    <script src="{{asset($public.'/js/functions.js')}}"></script>
    <script src="{{asset($public.'/js/functions-2.js')}}"></script>

</body>


<!-- Mirrored from eyecix.com/html/{{config('app.name')}}/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Apr 2018 09:13:25 GMT -->
</html>
