@extends('layouts.auth')

@section('content')
    <!-- [ content ] Start -->
    <div class="authentication-wrapper authentication-1 px-4">
        <div class="authentication-inner py-5">

            <!-- [ Logo ] Start -->
            <div class="d-flex justify-content-center align-items-center">
                <div class="ui-w-60">
                    <div class="w-100 position-relative">
                        <img src="assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- [ Logo ] End -->

            <!-- [ Form ] Start -->
            <form class="my-5" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label class="form-label">Your nickname</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                    <div class="clearfix"></div>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Your email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <div class="clearfix"></div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <div class="clearfix"></div>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <div class="clearfix"></div>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-4">Sign Up</button>
                <div class="bg-lightest text-muted small p-2 mt-4">
                    By clicking "Sign Up", you agree to our
                    <a href="javascript:void(0)">terms of service and privacy policy</a>. We’ll occasionally send you account related emails.
                </div>
            </form>
            <!-- [ Form ] End -->

            <div class="text-center text-muted">
                Already have an account?
                <a href="{{route('login')}}">Sign In</a>
            </div>

        </div>
    </div>
    <!-- [ content ] End -->
@endsection
