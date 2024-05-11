@extends('layouts.main')
@section('title')
    Login | PPDB SD Anugerah
@endsection
@section('content')
<section class="login margin-bottom-50" style="background-image: url('img/bg-sekolah.jpg'); background-size: cover;">
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
    <!-- Modal -->
<div class="modal fade" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="welcomeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="welcomeModalLabel">Selamat Datang di PPDB SD Anugerah</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>1. Sebelum mendaftar sebagai calon siswa, calon siswa diharapkan membuat akun Gmail dan password terlebih dahulu.</p>
          <p>2. Klik "Daftar" untuk mengisi nama, email, password, dan konfirmasi password.</p>
          <p>3. Setelah membuat akun, klik "Pendaftaran", lalu isi Form Pendaftaran. Setelah itu, klik "Daftar", sistem secara otomatis akan menyimpan form yang telah diisi.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>
  
</section>
@endsection

@push('script-addon')
<script>
    $(document).ready(function(){
        $('#welcomeModal').modal('show');
    });
</script>
@endpush