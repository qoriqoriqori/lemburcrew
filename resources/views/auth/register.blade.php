@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1 class="text-center my-4" style="font-weight: bold">Registrasi<span style="color: #EA9A00"> Akun</span></h1>
            <div class="card shadow">
                <div class="card-body my-3">
                    <form  method="POST" action="{{ route('register') }}">
                        @csrf

                            <div class="col-md-6  offset-md-3">
                                <label for="name" class=" col-form-label ">{{ __('Nama') }}</label>
                                <input id="name" type="text" class="form-control mb-1 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 offset-md-3 ">
                                <label for="email" class=" col-form-label ">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control mb-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 offset-md-3">
                                <label for="password" class=" col-form-label ">{{ __('Kata Sandi') }}</label>
                                <input id="password" type="password" class="form-control mb-1 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 offset-md-3">
                                <label for="password-confirm" class=" col-form-label ">{{ __('Konfirmasi Kata Sandi') }}</label>
                                <input id="password-confirm" type="password" class="form-control mb-4" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn w-100 text-white mt-6" style="background-color: #EA9A00;">
                                    {{ __('Register') }}
                                </button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection