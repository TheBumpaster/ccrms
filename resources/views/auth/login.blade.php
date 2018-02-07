@extends('auth')

 <!-- <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div> -->


@section('content')
    <div class="content">
        <form class="login-form" action="{{ route('login') }}" method="post">
        {{ csrf_field() }}
        <div class="form-title">
            <span class="form-title">Welcome.</span>
            <span class="form-subtitle">Please login.</span>
        </div>
        @if ($errors->has('password') || $errors->has('email'))
        <div class="alert alert-danger">
            <button class="close" data-close="alert"></button>
            <span>
            Wrong Credentials, try again. </span>
        </div>
        @endif

        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <input class="form-control form-control-solid placeholder-no-fix" id="email" type="email" autocomplete="off" placeholder="example@mail.com" name="mail" required autofocus />
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input id="password" class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary btn-block uppercase">Login</button>
        </div>
        <div class="form-actions">
            <div class="pull-left">
                <label class="rememberme check">
                <input type="checkbox" name="remember" value="1"/>Remember me </label>
            </div>
            <div class="pull-right forget-password-block">
                <a href="{{ route('password.request') }}" id="forget-password" class="forget-password">Forgot Password?</a>
            </div>
        </div>
        <div class="create-account">
            <p>
                <a href="/register" id="register-btn">Create an account</a>
            </p>
        </div>
    </form>
    </div>
@endsection
