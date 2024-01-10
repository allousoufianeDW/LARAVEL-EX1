@extends('base')

@section('title', 'Forgot Password')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h1 class="text-center text-muted md-5 mt-5">Change  Password </h1>
            <p class="text-center text-muted md-5 mt-5">  Please enter your new Password . </p>

            <form method="POST" action="{{route('app_change_password',['token'=>$activation_token])}}">
            @csrf
            @include('alerts.alert-message')


            <label for="new-password" class="form-label mt-5">New Password</label>
            <input type="password" name="new-password" id="new-password" class="form-control mb-3 @error('password-error-confirm') is-invalid @enderror @error('password-error') is-invalid @enderror" placeholder="Enter New Password > = 8 characters">

            <label for="new-password-confirm" class="form-label mt-1">New Password Comfirmation</label>
            <input type="password" name="new-password-confirm" id="new-password-confirm" class="form-control mb-3 @error('password-error-confirm') is-invalid @enderror" placeholder="Enter The some Password">







            <div class="d-grid gap-2 mb-5">
                <button class="btn btn-primary  " type="submit">New Password</button>

                </div>
                <p class="text-center text-muted">Back to <a href="{{route('login')}}">Login</a> </p>

            </form>

        </div>
    </div>

@endsection
