<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = [
        'nisn_murid',
        'nama_lengkap_murid',
        'alamat_rumah',
        'nomor_telepon',
        'tanggal_lahir',
        'jenis_kelamin',
        'nama_orang_tua',
        'email',
        'asal_sekolah',
        'kelas_diikuti',
        'foto',
        'is_verified',
    ];
}
