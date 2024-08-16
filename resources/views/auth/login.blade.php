@extends('layouts.app')

@section('content')
<div class="container">
    <div class="contact-area pd-top-80 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 order-lg-end wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="about-thumb-inner ms-xl-5 p-xl-5 pt-4 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <img class="animate-main-img" src="assets/img/user-access.png" alt="img">
                        {{-- <img class="main-img m-4" src="assets/img/user-access.png" alt="img"> --}}
                    </div>
                </div>

                <div class="row justify-content-center col-md-6 col-sm-10 order-lg-first wow animated fadeInRight" style="border: 1px solid rgb(202, 200, 200); padding: 20px; border-radius: 15px;" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div>
                        <div class="section-title text-center">
                            <h2 class="title sub-title" style="font-size: 30px;"> <span>LOGIN</span> Here</h2>
                        </div>
                    </div>
                    <div class="col-lg-6  wow animated center">
                        <div class="section-title mb-0 mt-5 mt-lg-0">
                            <form method="POST" action="{{ route('login') }}" class="mt-4">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single-input-inner style-border">
                                            <label for="Email">Email</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-input-inner style-border">
                                            <label for="Password">Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button name="submit" type="submit" class="btn btn-border-gray btn-lg mt-0 btn-custom" style="font-size: 34px; padding: 0px 40px; color: black;" onmouseover="this.style.color='white';" onmouseout="this.style.color='black';">
                                            Login <i class="fa fa-sign-in"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="pd-top-90">

                </div>
            </div>
        </div>
    </div>
</div>
    {{-- <div class="section-title mb-0 mt-5 mt-lg-0">
        <h6 class="sub-title">GET IN TOUCH</h6>
        <h2 class="title">Your Business To <span>Growth</span> Please Touch ?</h2>
        <p class="content">For your car we will do everything  advice design in us repairs and maintenance. We are the some preferred.</p>
        <form class="mt-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-input-inner style-border">
                        <input type="text" placeholder="Name Here">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-input-inner style-border">
                        <input type="text" placeholder="Contact Here">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-input-inner style-border">
                        <input type="text" placeholder="Email Here">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-input-inner style-border">
                        <textarea placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <a class="btn btn-border-gray mt-0" href="#">Contact Us <svg class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fa fa-plus"></i> Font Awesome fontawesome.com --></a>
                </div>
            </div>
        </form>
    </div> --}}

{{-- <div class="login-section pd-top-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h6 class="sub-title">Bienvenue</h6>
                    <h2 class="title">Connectez-vous à votre <span>Compte</span></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-form">
                    <form action="/login" method="POST">
                        <div class="form-group">
                            <label for="email">Adresse Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de Passe</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Se Connecter</button>
                        </div>
                        <div class="form-group text-center">
                            <a href="/forgot-password" class="forgot-password">Mot de passe oublié ?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
