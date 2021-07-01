<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaksin extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_pasien',
        'nama_lengkap',
        'tanggal_lahir',
        'no_handphone',
        'email',
        'lokasi_pemeriksaan'
    ];    
}
