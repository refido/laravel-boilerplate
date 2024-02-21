@extends('layouts.custom')

@section('title', 'Reset Password')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
                <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
                @if (session('status'))
                    <div class="card-header text-center">
                        <h4> {{ session('status') }} </h4>
                    </div>
                @else
                    <div class="card-header text-center">
                        <h4> Create your new password </h4>
                    </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ request()->email }}" name="email" tabindex="1" autofocus>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input id="password" type="password"
                                class="form-control  @error('password') is-invalid @enderror" name="password"
                                tabindex="2">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Password Confirmation</label>
                            <input id="password_confirmation" type="password"
                                class="form-control  @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" tabindex="2">
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group" style="display: none;">
                            <label for="token">Token</label>
                            <input id="token" type="token" class="form-control @error('token') is-invalid @enderror"
                                value="{{ request()->route('token') }}" name="token" tabindex="1" autofocus>
                            @error('token')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Reset Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="simple-footer">
                Copyright &copy; Stisla 2018
            </div>
        </div>
    </div>
@endsection
