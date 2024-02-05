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
                                <th>Nama Calon Siswa</th>
                                <th>Alamat Rumah</th>
                                <th>Nama Orang Tua</th>
                                <th>Nomor Telepon Orang Tua</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Berat Badan</th>
                                <th>Tinggi Badan</th>
                                <th>Status Verifikasi</th>
                            </tr>
                        </thead>
                        @foreach ($pendaftar as $index => $item)
                            <tbody>
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_lengkap_murid }}</td>
                                    <td>{{ $item->alamat_rumah }}</td>
                                    <td>{{ $item->nama_orang_tua }}</td>
                                    <td>{{ $item->nomor_telepon }}</td>
                                    <td>{{ $item->tanggal_lahir }}</td>
                                    <td>{{ $item->tempat_lahir }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->berat_badan }} KG</td>
                                    <td>{{ $item->tinggi_badan }} CM</td>
                                    <td>
                                        @if ($item->is_verified === 1)
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
        </div>

    </div>
@endsection
