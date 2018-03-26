@extends('layouts.app')
@section('title','Login')
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
            <div class="col-md-6 col-md-offset-3">
                <div class="col-sm-12 pricing-box">
                    <div class="section-title">
                        <h2>Login</h2>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <form class="form-horizontal col-md-10 col-md-offset-1" method="POST"
                              action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Username</label>
                                <input id="name" type="text" class="form-control" name="name"
                                       value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"
                                               name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
