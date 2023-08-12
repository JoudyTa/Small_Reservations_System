@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>Welcome to RS4IT</h1>
            <p class="lead">We sending this email to you to complete your Saudi VIAS entry and travel requirement</p>
            <hr class="my-4">
            <p>Please click on link below</p>
            <a class="btn btn-primary btn-lg" href="{{ route('multi_step_form') }}" role="button">>Press Here</a>
        </div>
    </div>
@endsection
