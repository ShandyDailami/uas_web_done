<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_mahasiswa';

    protected $fillable = [
        'nama_lengkap',
        'nim',
        'no_telpon',
        'tempat_lahir',
        'tanggal_lahir',
        'prodi',
        'angkatan',
        'email',
        'masuk_sebagai',
        'password',
        
    ];

    public function pengajuan()
    {
        return $this->hasOne(Pengajuan::class, 'mahasiswa_id', 'id_mahasiswa');
    }
}