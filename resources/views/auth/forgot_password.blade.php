@extends('base')

@section('title', 'Forgot Password')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h1 class="text-center text-muted md-5 mt-5">Forgot Password </h1>
            <p class="text-center text-muted md-5 mt-5">  Please enter your address email . we we'll send you a link to reset your password . </p>

            <form method="POST" action="{{route('app_forgot_password')}}">
            @csrf
            @include('alerts.alert-message')


            <label for="email-send" class="form-label mt-5">Email</label>
            <input type="email" name="email-send" id="email-send" class="form-control mb-3 @error('email-error') is-invalid @enderror" placeholder="Your Address Email">
            <div class="d-grid gap-2 mb-5">
                <button class="btn btn-primary  " type="submit">Reset Password</button>

                </div>
                <p class="text-center text-muted">Back to <a href="{{route('login')}}">Login</a> </p>

            </form>

        </div>
    </div>

@endsection
