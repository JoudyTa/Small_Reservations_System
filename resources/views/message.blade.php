@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>Well Done!</h1>
            <p class="lead">Your information has been submitted successfully</p>
            <p class="lead">You will receive in coming day invitation email with instructions from RS4IT to book your
                flight.</p>
            <hr class="my-4">
            <p>If You want to submit another form click on Submit Form.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('multi_step_form') }}" role="button">Submit Form</a>
        </div>
    </div>
@endsection
