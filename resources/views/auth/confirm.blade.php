@php
    $public='';
    if(config('app.env') == 'production')
    $public ='public';
@endphp
@extends('layouts.app')
@section('styles')
    <style>
        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 8px 14px;
            font-size: 14px;
            text-align: center;
            line-height: 18px;
            color: #575757;
            background-color: #fff;
            background-image: none;
            background-clip: padding-box;
            border: 1px solid #9aa6b6;
            border-radius: .25rem;
            transition: border-color ease-in-out .15s;
        }

        .form-material > .form-control {
            padding-left: 0;
            padding-right: 0;
            border-color: transparent;
            border-radius: 0;
            background-color: transparent;
            box-shadow: 0 1px 0 #9aa6b6;
            transition: box-shadow .3s ease-out;
        }
    </style>
@endsection
@section('content')
    <div id="content" class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 panel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-center" style="padding-bottom: 32px;">
                                    <img src="{{asset($public.'/png/step-counter.png')}}"
                                         style="width:230px;margin-top:20px;">
                                </div>
                                <div class="section-title">
                                    <h2>Confirm transaction</h2>
                                </div>
                                <p>Welcome {{session('user')->first_name.' '.session('user')->last_name}}. You will
                                    be charged #{{session('amount')}}, and we need you to confirm this transaction.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 pricing-box">
                                <div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                                    <form class="form-horizontal" method="POST" action="{{ url('/join/form') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                            <div class="form-material">
                                                <label for="amount">Amount</label>
                                                <input id="amount" type="number" class="form-control" name="amount"
                                                       value="{{ session('amount') }}" required placeholder="amount"
                                                       readonly>

                                                @if ($errors->has('amount'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('pin') ? ' has-error' : '' }}">
                                            <div class="form-material">
                                                <label for="pin">Pin</label>
                                                <input id="pin" type="password" class="form-control" name="pin"
                                                       placeholder="Enter Pin" maxlength="4" required>
                                                @if ($errors->has('pin'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('pin') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function charge(id, type) {
            var data = {
                'id': id,
                'type': type,
            };
            $.post('/admin/edit/viewuser', data, function (result) {
                $('#user').html(result.html);
                $('#user-modal').modal('show');
            }).fail(function () {
                alert('Sorry, an error occurred');
            });
            //'first_name': $("input[name=first_name]").val(),
        }
    </script>
@endsection