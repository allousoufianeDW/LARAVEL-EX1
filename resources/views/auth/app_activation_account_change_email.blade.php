@extends('base')

@section('title', 'Activation Account Change Email')

@section('content')

<div class="container">



    <div class="row">
        <div class="col-md-4 mt-5 mx-auto">
            <h1 class="text-center text-muted mb-3 mt-5">Account Activation Change Email </h1>

            <form method="POST" action="{{route('app_activation_account_change_email',['token'=> $token])}}">
                @csrf
                @include('alerts.alert-message')

                <div class="mb-3">
                    <label for="new-email" class="form-label">New Email Address</label>
                    <input type="email" class="form-control @if (Session::has('danger')) is-invalid @endif " name="new-email" id="new-email" value="@if (Session::has('new-email')){{Session::get('new-email')}}@endif" placeholder="Enter Your New Email Address"  required>

                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" class="btn btn-primary">Change</button>
                        </div>


                </div>


            </form>
        </div>
    </div>
</div>




@endsection
