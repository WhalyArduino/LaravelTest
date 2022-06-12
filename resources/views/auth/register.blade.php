@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-1" style='background-color: #6e7db6'>
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mt-3">
                            <div class="col-2"> </div>
                            <div class="col">

                                <input type="text" class="form-control fontA" placeholder="Name" id="name" name="name"
                                    value="{{ old('name') }}">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-2"> </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-2"> </div>
                            <div class="col">
                                <input type="email" class="form-control fontA" placeholder="Email" id="email"
                                name="email" value="{{ old('email') }}">
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                
                            </div>
                            <div class="col-2"> </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-2"> </div>
                            <div class="col">
                                <input type="text" class="form-control fontA" placeholder="Username" id="username"
                                    name="username" value="{{ old('username') }}">

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="col-2"> </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-2"> </div>
                            <div class="col">
                                <input type="password" class="form-control fontA" placeholder="Password" id="password"
                                name="password">
                            </div>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="col-2"> </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-2"> </div>
                            <div class="col">
                                <input type="password" class="form-control fontA" placeholder="Confirm Password"
                                    id="password-confirmation" name="password_confirmation">
                            </div>

                            <div class="col-2"> </div>
                        </div>

                        <div class="row" style="margin-top: 2.5%">
                            <div class="col-3"> </div>
                            <div class="col-6 d-grid gap-2">
                                <button type="submit" class='btn btn-info btn-block fontA'>
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <!-- <div class="col-3 d-grid gap-2">
                                <a href='{{route("login")}}' class='btn btn-info btn-danger fontA'>
                                    Cancel
                                </a>
                            </div> -->
                            <div class="col-3"> </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection