@extends('base')

@section('title', 'login')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h1 class="text-center text-muted md-5">Please Sing In </h1>
                <p class="text-center text-muted md-5">  Your Article Are Waiting </p>

                <form method="POST" action="{{route('login')}}">
                @csrf

                @include('alerts.alert-message')

                @error('email')
                <div class="alert alert-danger text-center" role="alert">
                    {{ $message }}
                </div>


                @enderror

                @error('password')
                <div class="alert alert-danger text-center" role="alert">
                    {{ $message }}
                </div>


                @enderror

                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control mb-3 @error('email') is-invalid @enderror" value="{{old('email')}} "required autocomplete="email" autofocus>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control mb-3 @error('password') is-invalid @enderror" required autocomplete="current-password">


                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="remenber" name="remember" {{old('remember') ? 'checked ': ''}} >
                            <label class="form-check-label" for="flexSwitchCheckDefault">Remember me</label>
                          </div>
                    </div>

                    <div class="col md-6 text-end">
                        <a href="">forgot password ?</a>
                    </div>
                </div>

                <div class="d-grid gap-2">
                <button class="btn btn-primary " type="submit">sign in</button>

                </div>
                <p class="text-center text-muted mt-5">IF YOU NOT REGISTED ? <a href="{{route('register')}}"> Create account</a></p>
                 </form>
            </div>
        </div>
    </div>
@endsection
