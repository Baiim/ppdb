{{-- @extends('layouts.app')

@section('content')
<div class="container">
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
</div>
@endsection --}}


@extends('layouts.main')
@section('title')
    Register | PPDB SMK Negeri 1 Cikarang
@endsection
@section('content')
<section class="form-pendaftaran margin-bottom-100">

    <div class="container">
        <div class="row">

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h3>Pendaftaran User Baru</h3>

                <hr>

                <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Lengkap</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" required name="name" placeholder="Masukan Nama Lengkap Anda*">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" required name="email" placeholder="Masukan Email Aktif*">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" required name="password" id="password" placeholder="Masukkan Password*">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Konfirmasi Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" required name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi Password*">
                                <span id='message'></span>
                            </div>
                        </div>

                        <button class="btn btn-daftar btn-lg btn-primary">Daftar</button>

                </div>

            </form>

        </div>
    </div>

</section>
@endsection