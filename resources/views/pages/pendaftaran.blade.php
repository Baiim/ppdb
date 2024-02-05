@extends('layouts.main')
@section('title')
    Pendaftaran | PPDB SD Anugerah
@endsection
@section('content')
<section class="form-pendaftaran margin-bottom-100">

    <div class="container">
        <div class="row">
            <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
    
                <h3>Form Pendaftaran</h3>
                <hr>
    
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Lengkap Calon Siswa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="nama_lengkap_murid" placeholder="Nama Lengkap Calon Siswa*">
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat Rumah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="alamat_rumah" placeholder="Masukkan Alamat Rumah*">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="alamat_rumah" placeholder="Masukkan Tempat Lahir*">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" required name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir*">
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-control" required name="jenis_kelamin">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Orang Tua/Wali</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="nama_orang_tua" placeholder="Masukkan Nama Orang Tua/Wali*">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nomor Telepon Orang Tua</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" required name="nomor_telepon" placeholder="Masukkan Nomor Telepon Orang Tua*">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tinggi Badan</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" required name="email" placeholder="Masukkan Tinggi Badan (CM)*">
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Berat Badan</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="asal_sekolah" placeholder="Masukkan Berat Badan (KG)">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Unggah Foto</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="foto" accept="image/*">
                            <small class="form-text text-muted">Unggah foto (format: JPG, JPEG, PNG, maksimal 5MB)</small>
                        </div>
                    </div>
    
                    <button class="btn btn-daftar btn-lg btn-primary">Daftar</button>
    
                </div>
    
            </form>
        </div>
    </div>
    

</section>
@endsection