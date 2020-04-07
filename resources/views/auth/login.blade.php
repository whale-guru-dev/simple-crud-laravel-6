@extends('layouts.auth')

@section('content')
    <div class="authentication-wrapper authentication-1 px-4">
        <div class="authentication-inner py-5">

            <!-- [ Logo ] Start -->
            <div class="d-flex justify-content-center align-items-center">
                <div class="ui-w-60">
                    <div class="w-100 position-relative">
                        <img src="assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- [ Logo ] End -->

            <!-- [ Form ] Start -->
            <form class="my-5" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <div class="clearfix"></div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label d-flex justify-content-between align-items-end">
                        <span>Password</span>
                        <a href="" class="d-block small">Forgot password?</a>
                    </label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    <div class="clearfix"></div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="d-flex justify-content-between align-items-center m-0">
                    <label class="custom-control custom-checkbox m-0">
                        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="custom-control-label">Remember me</span>
                    </label>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
            </form>
            <!-- [ Form ] End -->

            <div class="text-center text-muted">
                Don't have an account yet?
                <a href="{{route('register')}}">Sign Up</a>
            </div>

        </div>
    </div>
    <!-- [ content ] End -->
@endsection
