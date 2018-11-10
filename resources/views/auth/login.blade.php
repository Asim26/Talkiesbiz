@extends('layouts.login_layout')

@section('content')
<body id="login-page-body">
<div class="container">
    <div class="row">
        <div class="Absolute-Center is-Responsive">
           <!--<div id="logo-container"></div>-->
              <h1 id="login-and-signup-title">Sign in</h1>

                <div class="col-sm-12 col-md-10 col-md-offset-1 mar-auto">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="username" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="forget-pas"><a href="{{ route('password.request') }}">Forgot Password</a></div>

                     
                        <div class="form-group">
                            
                                <button type="submit" class="btn btn-def btn-block" id="btn-login-form">
                                    {{ __('Login') }}
                                </button>

                            </div>
                            <div class="form-group text-center">
            <p class="sign-up-line">Don't have account? <a href="{{url('/register')}}">Signup</a></p>
          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
