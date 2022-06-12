@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style='background-color: #6e7db6'>
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row d-flex flex-row justify-content-center mt-3">
                            <div class="col-8">
                                <input type="text" class="form-control fontA" placeholder="Email" id="email"
                                    name="email" value="{{ old('email') }}">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row d-flex flex-row justify-content-center mt-3">
                            <div class="col-8">
                                <input type="Password" class="form-control fontA" placeholder="Password" id="password"
                                    name="password" value="{{ old('password') }}">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-8 offset-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 2.5%">
                            <div class="col-6 offset-3 d-grid gap-2">
                                <button type="submit" class='btn btn-info btn-block fontA'>
                                    Login
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link link-dark" href="{{ route('password.request') }}">
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