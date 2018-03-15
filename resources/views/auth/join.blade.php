@php
    $public='';
    if(config('app.env') == 'production')
    $public ='public';
@endphp
@extends('layouts.app')
@section('title', 'Join us')
@section('content')
    <div id="content" class="container">
        <div class="col-md-12">
            <div class="col-sm-12 contact-area section-padding">
                <div class="col-sm-12">
                    <div class="section-title white-title">
                        <h2>Want to join us</h2>
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
            var data ={
                'id':1
            };

            $.post('http://tlsavings.dev:8000/api/getTransactions', data, function (result) {
                alert('success');
            }).fail(function(){
                alert('Sorry, an error occurred');
            });
            //'first_name': $("input[name=first_name]").val(),
        }
    </script>
@endsection