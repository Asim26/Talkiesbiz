@extends('layouts.register_layout')

@section('content')
<body id="login-page-body"> 
<div class="container">
    <div class="row">
        <div class="Absolute-Center-talkibiz is-Responsive takibiz-signup">
            <!--<div id="logo-container"></div>-->
      <h1 id="login-and-signup-title">SIGN UP</h1>
      <div class="col-sm-12 col-md-10 col-md-offset-1 mar-auto">
            
                

                <div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">{{ __('Full Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" placeholder="The Same to be on Banks A/c" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">{{ __('Email') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-4 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-sm-4 col-form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" placeholder="Password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


        <div class="form-group row">
            <label for="become_a" class="col-sm-4 col-form-label">Become a</label>
            <div class="col-sm-8">
                    <select name="user_type">
                      <option>Admin</option>          
                      <option>Seller</option>
                      <option>Reseller</option>
                      <option>Customer</option>            
                    </select>
            </div>
      </div>

      

  <div class="form-group row">
    <div class="col-sm-12">
            <label><input type="checkbox" name="remember"> Agree With <a href="#">Terms & Conditions</a> of Talkiesbiz.com</label>
    </div>
  </div>

                        <div class="form-group">
                            
                                <button type="submit" class="btn btn-def btn-block" id="join-talkibiz">
                                    {{ __('Join Talkisbiz') }}
                                </button>
                            
                        </div>
                    </form>
                
            
        </div>
    </div>
</div>
</body>
@endsection
