@extends('layouts.main')
@section('title')
    Login | PPDB SMK Negeri 1 Cikarang
@endsection
@section('content')
<section class="login margin-bottom-50">
    <div class="container">
        <div class="row">
            <div class="card card-container">
                <img class="profile-img-card" src="img/login-img.png" alt="img-login">
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin" method="POST" action="{{ route('login') }}">
                    @csrf
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                </form>
                <p class="text-center">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
            </div>
        </div>
    </div>
</section>

@endsection