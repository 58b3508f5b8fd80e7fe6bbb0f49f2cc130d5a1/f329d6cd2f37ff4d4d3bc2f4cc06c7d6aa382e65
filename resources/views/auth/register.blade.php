@extends('layouts.app')
@section('styles')
    <style>
        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 8px 14px;
            font-size: 14px;
            line-height: 18px;
            color: #575757;
            background-color: #fff;
            background-image: none;
            background-clip: padding-box;
            border: 1px solid #dcdfe3;
            border-radius: .25rem;
            transition: border-color ease-in-out .15s;
        }

        .form-material > .form-control {
            padding-left: 0;
            padding-right: 0;
            border-color: transparent;
            border-radius: 0;
            background-color: transparent;
            box-shadow: 0 1px 0 #dcdfe3;
            transition: box-shadow .3s ease-out;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 panel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="section-title">
                                    <h2>join</h2>
                                </div>
                            </div>
                        </div>
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="form-material">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required placeholder="Email">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="form-material">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password"
                                           placeholder="Password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
