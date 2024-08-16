@extends('layouts.app')

@section('content')

<div class="container">
    <div class="contact-area pd-top-20 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 order-lg-end wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="about-thumb-inner ms-xl-5 p-xl-5 pt-4 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <img class="animate-main-img" src="assets/img/account-protection.png" alt="img">
                        {{-- <img class="main-img m-4" src="assets/img/about/19.png" alt="img"> --}}
                    </div>
                </div>
                <div class="row justify-content-center col-md-6 col-sm-10" style="border: 1px solid rgb(202, 200, 200); padding: 20px; border-radius: 15px;">
                    <div>
                        <div class="section-title text-center">
                            <h2 class="title sub-title" style="font-size: 30px;"> <span>REGISTER</span> Here</h2>
                        </div>
                    </div>
                    <div class="col-lg-6  wow animated center">
                        <div class="section-title mb-0 mt-2 mt-lg-0">
                            <form method="POST" action="{{ route('register') }}" class="mt-0">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single-input-inner style-border">
                                            <label for="Name">Name :</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="single-input-inner style-border">
                                            <label for="Email">Email :</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-input-inner style-border">
                                            <label for="Password">Password :</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="single-input-inner style-border">
                                            <label for="Password">Confirm Password :</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button name="submit" type="submit" class="btn btn-border-gray btn-lg mt-0 btn-custom" style="font-size: 34px; padding: 0px 40px; color: black;" onmouseover="this.style.color='white';" onmouseout="this.style.color='black';">
                                            Register <i class="fa fa-sign-up"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
