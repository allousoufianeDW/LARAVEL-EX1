@extends('base')

@section('title', 'Activation Account')

@section('content')


<div class="container">



    <div class="row">
        <div class="col-md-4 mx-auto">

            <h1 class="text-center text-muted md-5">Account Activation  </h1>







            <form method="POST" action="{{route('app_activation_code',['token'=> $token])}}">
                @csrf
                                @include('alerts.alert-message')
                <div class="md-3">
                <label for="activation-code" class="form-label">Activation Code</label>
                <input type="text" class="form-control @if (Session::has('danger')) is-invalid @endif " name="activation-code" id="activation-code" value="@if (Session::has('activation-code')){{Session::get('activation-code')}}@endif" required>
                 </div>


                <div class="row mb-3">
                    <div class="col-md-6">
                        <a href="{{route('app_activation_account_change_email', ['token' => $token])}}">Change Your Email Address</a>

                    </div>
                    <div class="col-md-6 text-end">
                        <a href="{{route ('app_resend_activation_code',['token' => $token])}}">Resend Activation Code</a>

                    </div>
                </div>
                <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Activate</button>
                </div>

            </form>


        </div>
    </div>

</div>
















@endsection
