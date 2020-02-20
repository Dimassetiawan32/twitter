@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="" id="" class="form-control bg-light" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="" id="" class="form-control bg-light" placeholder="Password">
                                </div>
                            </div>
                            </div>                            
                                @if (Route::has('password.request')) 
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>                           
                                @endif
                            <div class="py-3">                            
                                <div class="form-group">
                                    <div class="col-md-6">
                                    <div class="py-3">
                                        <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                        </button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
                <div class="card-header border-0">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('images/logo.png')}}" width="10%" height="10%" class="" alt="" style="margin-top: -35px;">
                            </div>  
                            <div class="py-3">
                                <h3 class="text-muted text-center" >She what's happening in <br> the world right now</h3>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <a href="http://twitter.com/account/access?flow=signup">
                                                <h5 class="font-weight-bold">Join Twitter Today.</h5>
                                            </a>
                                        </div>
                                    </div>
                                <div class="py-3">
                                    <div class="form-group row mb-10">
                                        <div class="col-md-12">
                                            <div class="row justify-content-center">
                                                <button type="submit" class="btn btn-primary col-md-11" >
                                                    {{ __('Sign Up') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <div class="py-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--                 <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
