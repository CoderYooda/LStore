@extends('admin.layout.auth')

@section('content')
    <div class="py-5 text-center w-100">
        <div class="mx-auto w-xxl w-auto-xs">
            <div class="px-3">
                <div>
                    <a href="#" class="btn btn-block indigo text-white mb-2">
                        <i class="fa fa-facebook float-left"></i>
                        Sign in with Facebook
                    </a>
                    <a href="#" class="btn btn-block red text-white">
                        <i class="fa fa-google-plus float-left"></i>
                        Sign in with Google+
                    </a>
                </div>
                <div class="my-3 text-sm">
                    OR
                </div>
                <form name="form">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="password" required>
                    </div>
                    <div class="mb-3">
                        <label class="md-check">
                            <input type="checkbox">
                            <i class="primary"></i> Keep me signed in
                        </label>
                    </div>
                    <button type="submit" class="btn primary">Sign in</button>
                </form>
                <div class="my-4">
                    <a href="forgot-password.html" class="text-primary _600">Forgot password?</a>
                </div>
                <div>
                    Do not have an account?
                    <a href="signup.html" class="text-primary _600">Sign up</a>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
</div>
@endsection
