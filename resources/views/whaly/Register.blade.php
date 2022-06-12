@extends('whaly.IndexLayout')


@section('content')

<div class="container" style="margin-top: 7.5%">
    <div class="row">
        <div class="col d-flex flex-row justify-content-center">
            <img src="{{url('Images/Logo.png')}}" style="width: 20%" />
        </div>
    </div>

    <div class="row" style="margin-top: 3%">
        <div class="col-2"> </div>
        <div class="col" style="width: 50%">
            Registeration
        </div>
        <div class="col-2"> </div>
    </div>

    <form method="POST" action="{{ route('Register') }}">
        <div class="row mt-3">
            <div class="col-2"> </div>
            <div class="col">
                <input type="text" class="form-control fontA" placeholder="Name" id="Name" name="Name"
                    value="{{ old('name') }}">

                @error('Name')
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
                <input type="email" class="form-control fontA" placeholder="Email" id="Email" name="Email"
                    value="{{ old('Email') }}">

                @error('Email')
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
                <input type="password" class="form-control fontA" placeholder="Password" id="Password" name="Password">
            </div>

            @error('Password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="col-2"> </div>
        </div>

        <div class="row mt-3">
            <div class="col-2"> </div>
            <div class="col">
                <input type="password" class="form-control fontA" placeholder="Confirm Password" id="CPassword"
                    name="CPassword">
            </div>

            @error('CPassword')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="col-2"> </div>
        </div>

        <div class="row" style="margin-top: 2.5%">
            <div class="col-3"> </div>
            <div class="col-3 d-grid gap-2">
                <button class='btn btn-info btn-block fontA'>
                    {{ __('Register') }}
                </button>
            </div>
            <div class="col-3 d-grid gap-2">


                <a href='{{route("login")}}' class='btn btn-info btn-danger fontA'>
                    Cancel
                </a>
            </div>
            <div class="col-3"> </div>
        </div>

    </form>
</div>

@endsection