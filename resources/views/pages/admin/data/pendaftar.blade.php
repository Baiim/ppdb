@extends('layouts.admin')
@section('title')
    Data Pendaftar | PPDB SD Anugerah
@endsection
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><a href="{{ route('cetak.data') }}" class="btn btn-primary">Cetak Data</a></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pendaftar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Nama Orang Tua</th>
                            <th>Asal Sekolah</th>
                            <th>Status Verifikasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($pendaftar as $index => $item)
                    <tbody>
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{$item->nama_lengkap_murid}}</td>
                            <td>{{$item->alamat_rumah}}</td>
                            <td>{{$item->nomor_telepon}}</td>
                            <td>{{$item->tanggal_lahir}}</td>
                            <td>{{$item->jenis_kelamin}}</td>
                            <td>{{$item->nama_orang_tua}}</td>
                            <td>{{$item->asal_sekolah}}</td>
                            <td>
                                @if($item->is_verified === 1)
                                    <span class="verified">Sudah Diverifikasi</span>
                                @else
                                    <span class="unverified">Belum Diverifikasi</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('verifikasi.ubah', ['id' => $item->id]) }}">Ubah Status Verifikasi</a>
                            </td>
                        <tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</div>
@endsection