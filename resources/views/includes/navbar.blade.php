<div class="container">
    <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a data-scroll href="{{ route('home') }}" class="navbar-brand"><img src="{{asset('img/logo-sekolah.jpg')}}" class="img-circle" alt="Logo"></a>
        

    </div>

<!-- Main Nav -->
<div class="navbar-collapse collapse navbar-primary" role="navigation">
    <ul class="nav navbar-nav navbar-left">
        <li class="active"><a href="{{route('home')}}"><span class="fa fa-home" aria-hidden="true"></span> BERANDA</a></li>
        <li><a href="{{route('pengumuman')}}"><span class="fa fa-address-card-o" aria-hidden="true"></span> PENGUMUMAN</a></li>
        <li><a href="{{route('pendaftar')}}"><span class="fa fa-pencil" aria-hidden="true"></span> PENDAFTARAN</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-info-circle" aria-hidden="true"></span> INFORMASI <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{route('prosedur')}}" target="_blank">Prosedur</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{route('jadwal')}}" target="_blank">Jadwal</a></li>
            </ul>
        </li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
        @guest
            <!-- Tambahkan link login jika belum login -->
            <li>
                <a href="{{ route('login') }}">
                    <span class="fa fa-key" aria-hidden="true"></span> LOGIN
                </a>
            </li>
        @else
            <!-- Tampilkan dropdown jika sudah login -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="fa fa-user" aria-hidden="true"></span> {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- Tambahkan menu logout atau menu lainnya jika diinginkan -->
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    
                    @if (Auth::user()->is_admin === 1)
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    @endif<!-- Form untuk logout menggunakan metode POST -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <!-- Tambahan menu lainnya -->
                </ul>
            </li>
        @endguest
    </ul>
    
</div>

</div>