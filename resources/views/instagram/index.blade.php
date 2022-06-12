@extends('layouts.instagram')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 offset-2">
            <img class="rounded-circle img-fluid p-5"
                src="https://drive.google.com/uc?export=view&id=1yp_YPG0e4sMGrv_tTsGsRG99_-yES6SH">
        </div>
        <div class="col-5 py-5 px-4">
            <div class="row mt-3 mb-2">
                <h3> {{$user['username']}} </h3>
            </div>

            <div class="row mb-2" style="width: 70%">
                <h6 class="d-flex justify-content-between">
                    <div class="col">
                        posts
                    </div>
                    <div class="col">
                        followers
                    </div>
                    <div class="col">
                        following
                    </div>
                </h6>
            </div>

            <div class="row">
                <h5>
                    <div>
                        <strong> {{$user->profile['title']}} </strong>
                    </div>
                    <div>
                        {{$user->profile['description']}}
                    </div>
                    <a href="{{$user->profile['url']}}" class="link-dark">
                        {{$user->profile['url']}}
                    </a>

                </h5>
            </div>

        </div>
    </div>

    <div class="row row d-flex flex-row justify-content-center mb-3">

        <div class="col-2 d-grid rounded-pill">
            <a href="{{route('instagram.create')}}" class="btn btn-info btn-fluid">
                Add Post
            </a>
        </div>


    </div>

    <div class="row d-flex flex-row justify-content-center">
        <div class="d-flex" style="width:65%">
            <div class="col-4">
                <img class="w-100 p-2"
                    src="https://drive.google.com/uc?export=view&id=1yp_YPG0e4sMGrv_tTsGsRG99_-yES6SH">
            </div>

            <div class="col-4">
                <img class="w-100 p-2"
                    src="https://drive.google.com/uc?export=view&id=1yp_YPG0e4sMGrv_tTsGsRG99_-yES6SH">
            </div>

            <div class="col-4">
                <img class="w-100 p-2"
                    src="https://drive.google.com/uc?export=view&id=1yp_YPG0e4sMGrv_tTsGsRG99_-yES6SH">
            </div>
        </div>
    </div>


</div>
@endsection