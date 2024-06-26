<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MahasiswaTabel extends Migration
{
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id_mahasiswa');
            $table->string('nama_lengkap');
            $table->string('nim');
            $table->string('no_telpon');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('prodi');
            $table->string('angkatan');
            $table->string('email')->unique();
            $table->string('masuk_sebagai');
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};
