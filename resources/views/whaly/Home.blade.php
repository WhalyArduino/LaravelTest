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
        <div class="col" style="width: 50%; font-size: 150px">
            Home
        </div>
        <div class="col-2"> </div>
    </div>

</div>

@endsection