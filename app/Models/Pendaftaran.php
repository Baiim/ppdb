<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = [
        'nama_lengkap_murid',
        'alamat_rumah',
        'nomor_telepon',
        'tanggal_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'nama_orang_tua',
        'tinggi_badan',
        'berat_badan',
        'foto',
        'is_verified',
    ];
}
