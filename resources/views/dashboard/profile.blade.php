@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Hi, {{ auth()->user()->name }}!</h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="../assets/img/avatar/avatar-1.png"
                                class="rounded-circle profile-widget-picture">
                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Posts</div>
                                    <div class="profile-widget-item-value">187</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Followers</div>
                                    <div class="profile-widget-item-value">6,8K</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Following</div>
                                    <div class="profile-widget-item-value">2,1K</div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-widget-description">
                            <div class="profile-widget-name">{{ auth()->user()->name }}<div
                                    class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div> Web Developer
                                </div>
                            </div>
                            {{ auth()->user()->bio }}</b>.
                        </div>
                        <div class="card-footer text-center">
                            <div class="font-weight-bold mb-2">Follow {{ auth()->user()->name }} On</div>
                            <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon btn-github mr-1">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon btn-instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form method="POST" action="{{ route('user-profile-information.update') }}"
                            class="needs-validation" novalidate="">
                            @method('PUT')
                            @csrf
                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="name">Name</label>
                                        <input type="text"
                                            class="form-control @error('name', 'updateProfileInformation') is-invalid @enderror"
                                            id="name" name="name" value="{{ old('name', auth()->user()->name) }}">
                                        @error('name', 'updateProfileInformation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-7 col-12">
                                        <label for="email">Email</label>
                                        <input type="email"
                                            class="form-control @error('email', 'updateProfileInformation') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email', auth()->user()->email) }}">
                                        @error('email', 'updateProfileInformation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-5 col-12">
                                        <label for="phone">Phone</label>
                                        <input type="tel"
                                            class="form-control @error('phone', 'updateProfileInformation') is-invalid @enderror"
                                            id="phone" name="phone" value="{{ old('phone', auth()->user()->phone) }}">
                                        @error('phone', 'updateProfileInformation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="bio">Bio</label>
                                        <textarea class="form-control @error('bio', 'updateProfileInformation') is-invalid @enderror summernote-simple"
                                            id="bio" name="bio">{{ old('bio', auth()->user()->bio) }}</textarea>
                                        @error('bio', 'updateProfileInformation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" type="submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <form method="POST" action="{{ route('user-password.update') }}" class="needs-validation"
                            novalidate="">
                            @method('PUT')
                            @csrf
                            <div class="card-header">
                                <h4>Edit Password</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="current_password">Current Password</label>
                                        <input id="current_password" type="password"
                                            class="form-control  @error('current_password', 'updatePassword') is-invalid @enderror"
                                            name="current_password" tabindex="2">
                                        @error('current_password', 'updatePassword')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="password">New Password</label>
                                        <input id="password" type="password"
                                            class="form-control  @error('password', 'updatePassword') is-invalid @enderror"
                                            name="password" tabindex="2">
                                        @error('password', 'updatePassword')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="password_confirmation">Password Confirmation</label>
                                        <input id="password_confirmation" type="password"
                                            class="form-control  @error('password_confirmation', 'updatePassword') is-invalid @enderror"
                                            name="password_confirmation" tabindex="2">
                                        @error('password_confirmation', 'updatePassword')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary" type="submit">Change Password</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('CustomCss')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css">
@endpush

@push('CustomJs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.js"></script>
@endpush
