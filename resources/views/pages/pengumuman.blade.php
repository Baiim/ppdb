@extends('layouts.main')
@section('title')
    Pengumuman | PPDB SD Anugerah
@endsection
@section('content')
<section class="table-peserta margin-top-100 margin-bottom-100">

    <div class="container">
        <div class="row">

            <h3>Data Peserta</h3>

            <hr>

            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Nama Orang Tua</th>
                        <th>Email</th>
                        <th>Asal Sekolah</th>
                        <th>Status Verifikasi</th>
                    </tr>
                </thead>
                @foreach ($pendaftarans as $index => $item)
                <tbody>
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{$item->nama_lengkap_murid}}</td>
                        <td>{{$item->alamat_rumah}}</td>
                        <td>{{$item->nomor_telepon}}</td>
                        <td>{{$item->tanggal_lahir}}</td>
                        <td>{{$item->jenis_kelamin}}</td>
                        <td>{{$item->nama_orang_tua}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->asal_sekolah}}</td>
                        <td>
                            @if($item->is_verified === 1)
                                <span class="verified">Sudah Diverifikasi</span>
                            @else
                                <span class="unverified">Belum Diverifikasi</span>
                            @endif
                        </td>
                    <tr>
                </tbody>
                @endforeach
            </table>

        </div>
    </div>

</section>
@endsection