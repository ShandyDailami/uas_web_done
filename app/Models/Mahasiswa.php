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
        'no_telpon',
        'email',
        'masuk_sebagai',
        'password',
    ];

    public function pengajuan()
    {
        return $this->hasOne(Pengajuan::class, 'mahasiswa_id', 'id_mahasiswa');
    }
}