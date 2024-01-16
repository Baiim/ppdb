<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function toggleVerification()
    {
        // Toggle status verifikasi (0 menjadi 1, 1 menjadi 0)
        $this->is_verified = !$this->is_verified;
        $this->save(); // Simpan perubahan ke dalam database

        return $this; // Mengembalikan objek Item setelah perubahan
    }
}
