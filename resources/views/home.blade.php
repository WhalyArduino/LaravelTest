@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h5>
                <div class="card">
                    <div class="card-header"> Profile </div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <div class="row mb-3">
                            <div class="col-4 d-flex flex-row justify-content-end">
                                name:
                            </div>
                            <div class="col d-flex flex-row justify-content-start">
                                {{$user['name']}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-4 d-flex flex-row justify-content-end">
                                email:
                            </div>
                            <div class="col d-flex flex-row justify-content-start">
                                {{$user['email']}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-4 d-flex flex-row justify-content-end">
                                username:
                            </div>
                            <div class="col d-flex flex-row justify-content-start">
                                {{$user['username']}}
                            </div>
                        </div>
                    </div>
                </div>
            </h5>
        </div>
    </div>
</div>
@endsection