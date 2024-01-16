@extends('layouts.main')
@section('title')
    Jadwal | PPDB SD Anugerah
@endsection
@section('content')
<section class="table-jadwal margin-top-100 margin-bottom-100">

    <div class="container">
        <div class="row">

            <h3>Daftar Jadwal</h3>

            <hr>

            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>NO</th>
                    <th>Tanggal</th>
                    <th>Kegiatan</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Senin - Selasa ( 01-02 Februari 2018 )</td>
                    <td>Pendaftaran</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Rabu - Kamis ( 03-04 Februari 2018 )</td>
                    <td>Verifikasi</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Senin, 08 Februari 2018 </td>
                    <td>Ujian Tulis</td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Rabu, 10 Februari 2018 </td>
                    <td>Pengumuman</td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>Kamis - Sabtu ( 11-13 Februari 2018 )</td>
                    <td>Her-registrasi</td>
                </tr>

            </table>

        </div>
    </div>

</section>
@endsection