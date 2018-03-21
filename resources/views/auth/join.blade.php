@php
    $public='';
    if(config('app.env') == 'production')
    $public ='public';
@endphp
@extends('layouts.app')
@section('title', 'Join us')
@section('content')
    <div id="content" class="container">
        <section id="slider" class="welcome-area">
            <div class="welcome-slider-area">
                <div id="welcome-slide-carousel" class="carousel slide carousel-fade" data-ride="carousel"
                     data-interval="5000">
                    <ol class="carousel-indicators">
                        <li data-target="#welcome-slide-carousel" data-slide-to="0" class="active"></li>
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
                    </div>
                </div>
            </div>

            <!-- / END HOMEPAGE DESIGN AREA -->
        </section>
        <div class="col-md-12" style="padding: 35px 0;">
            <div class="col-sm-10 col-sm-offset-1" style="font-size:16px;">
                <div class="section-title">
                    <h2>Our Skill Programme</h2>
                </div>
                <div class="panel panel-info">
                    <div class="panel-body">
                        <p>We aim to groom people to be of help not only to themselves and live an independent life but
                            to
                            also
                            contribute their wealth of experience to the growth and development of the society and the
                            nation at
                            large.</p>
                        <p>Touching Lives Skills offers free training (no tuition fee) on skills and
                            entrepreneurship.</p>
                        <p>The training is designed to provide a platform to effectively train & educate Youths to
                            become
                            self employed. These Skills are:</p>
                        <ul class="list-group">
                            <li class="list-group-item">Accessories production (shoes, bags, beads, etc)</li>
                            <li class="list-group-item">Agricultural production (fish, poultry, pig, cash crops)</li>
                            <li class="list-group-item">Cosmetics production</li>
                            <li class="list-group-item">Fashion and design</li>
                            <li class="list-group-item">Furnitures and interiors</li>
                            <li class="list-group-item">Media and videos production</li>
                            <li class="list-group-item">Metal works</li>
                            <li class="list-group-item">Paint production</li>
                            <li class="list-group-item">Pastries production</li>
                            <li class="list-group-item">Paper production</li>
                            <li class="list-group-item">Programming</li>
                            <li class="list-group-item">Solar panel production</li>
                            <li class="list-group-item">Textile production</li>
                            <li class="list-group-item">Trade and marketing</li>
                        </ul>

                        <p>Registration fee is PNM 0.182 (&#8358;1500) for each skill you wish to enroll in. This will
                            be charged from your account with TLSavings, hence you need to have an account on TLSavings
                            to register for
                            any skill on this platform.</p>
                        <p>The training for each programme lasts for a duration of 24 weeks, and
                            all who wish to enroll on this platform must be of a legal adult age and willing to
                            learn</p>
                        <p><strong>Criteria for empowerment:</strong> Students should basically attend classes,
                            participate in practical, and be successful in all our screening exercises.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 contact-area section-padding">
                <div class="col-sm-12">
                    <div class="section-title white-title">
                        <h2>Want to join?</h2>
                    </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                    <form class="form-horizontal contact-form" method="POST" action="{{ url('/join') }}">
                        {{ csrf_field() }}
                        <div class="col-md-12 text-center">
                            <div class="actions">
                                <input type="submit" class="btn btn-lg btn-contact-bg"
                                       value="Begin now.." title="Click to begin registration">
                            </div>
                        </div>
                    </form>
                    <div class="col-md-12 text-center">
                        or<br>
                        <a href="{{url('join/continue')}}" style="color: #fff;">Complete registration</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function getRegistrations() {
            var data = {
                'id': 1
            };

            $.post('http://tlsavings.dev:8000/api/getTransactions', data, function (result) {
                alert('success');
            }).fail(function () {
                alert('Sorry, an error occurred');
            });
            //'first_name': $("input[name=first_name]").val(),
        }
    </script>
@endsection