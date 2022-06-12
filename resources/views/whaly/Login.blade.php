@extends('whaly.IndexLayout')


@section('content')

<div class="container" style="margin-top: 10%">
    <div class="row">
        <div class="col d-flex flex-row justify-content-center">
            <img src="{{url('Images/Logo.png')}}" style="width: 20%" />
        </div>
    </div>

    <div class="row" style="margin-top: 3%">
        <div class="col-2"> </div>
        <div class="col" style="width: 50%">
            Login to your Account
        </div>
        <div class="col-2"> </div>
    </div>

    <form>
        <div class="row mt-2">
            <div class="col-2"> </div>
            <div class="col">
                <input type="text" class="form-control fontA" placeholder="Username" name="username">
            </div>
            <div class="col-2"> </div>
        </div>

        <div class="row mt-3">
            <div class="col-2"> </div>
            <div class="col">
                <input type="password" class="form-control fontA" placeholder="Password">
            </div>
            <div class="col-2"> </div>
        </div>

        <div class="row" style="margin-top: 2.5%">
            <div class="col-3"> </div>
            <div class="col d-grid gap-2">
                <a href='{{route("Register")}}' class='btn btn-info btn-block fontA'>
                    Login
                </a>
            </div>
            <div class="col-3"> </div>
        </div>

        <div class="row fontA" style="margin-top: 0.5%">
            <div class="col-3"> </div>
            <div class="col d-flex flex-row justify-content-center">
                <a href='{{route("Register")}}' class='link-dark'>
                    Register
                </a>
            </div>
            <div class="col-3"> </div>
        </div>
    </form>
</div>

@endsection