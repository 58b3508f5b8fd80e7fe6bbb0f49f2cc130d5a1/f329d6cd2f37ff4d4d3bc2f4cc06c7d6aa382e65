@extends('layouts.app')
@section('styles')
    <style>
        label {
            font-weight: 600;
            font-size: 15px;
        }

        .form-group {
            margin-left: 8px !important;
        }

        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 8px 14px;
            margin-bottom: 8px;
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

        input::-moz-placeholder {
            color: #999 !important;
        }

        .form-control:focus {
            border-color: #66afe9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
        }

        #registrations {
            padding: 30px;
            margin-top: 30px;
            background: #fff;
            box-shadow: 0 36px 64px 0 rgba(0, 0, 0, .05);
        }

    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="col-sm-12 pricing-box">
                        <div class="section-title">
                            <h2>Reset Password</h2>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="control-label">E-Mail Address</label>


                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                </div>

                                <div class="form-group text-center">

                                        <button type="submit" class="btn btn-primary">
                                            Send Password Reset Link
                                        </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
