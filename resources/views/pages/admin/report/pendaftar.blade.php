<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Data Pendaftar</title>
    <style>
        /* Styling untuk tata letak laporan */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Laporan Data Pendaftar</h1>
    <table>
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
                <td>{{$item->nama_lengkap_murid}}</td>
                <td>{{$item->alamat_rumah}}</td>
                <td>{{$item->nama_orang_tua}}</td>
                <td>{{$item->nomor_telepon}}</td>
                <td>{{$item->tanggal_lahir}}</td>
                <td>{{$item->tempat_lahir}}</td>
                <td>{{$item->jenis_kelamin}}</td>
                <td>{{$item->berat_badan}} KG</td>
                <td>{{$item->tinggi_badan}} CM</td>
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
</body>
</html>
