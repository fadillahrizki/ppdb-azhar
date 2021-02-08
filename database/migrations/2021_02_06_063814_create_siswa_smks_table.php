<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaSmksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_smks', function (Blueprint $table) {
            $table->id();

            // Siswa 

            $table->string('siswa_nama_lengkap');
            $table->string('siswa_nama_panggilan');
            $table->string('siswa_NIK');
            $table->string('siswa_jenis_kelamin');
            $table->string('siswa_tempat');
            $table->date('siswa_tanggal_lahir');
            $table->string('siswa_anak_ke');
            $table->string('siswa_jumlah_saudara');
            $table->integer('siswa_usia');
            $table->text('siswa_alamat_tempat_tinggal');
            $table->string('siswa_hobi');
            $table->string('siswa_email');
            $table->string('siswa_photo');

            // Asal Sekolah

            $table->string("asal_nama_sekolah");
            $table->text("asal_alamat_sekolah");
            $table->string("asal_no_telepon_sekolah");

            // Jurusan

            $table->string("jurusan_pilihan_pertama");
            $table->string("jurusan_pilihan_kedua");

            // Pondok

            $table->string('pondok_pilihan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa_smks');
    }
}
