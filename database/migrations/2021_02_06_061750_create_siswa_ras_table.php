<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaRasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_ras', function (Blueprint $table) {
            $table->id();

            // Siswa 

            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('jenjang')->nullable();

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
            $table->string('siswa_hobi')->nullable();
            $table->string('siswa_cita_cita');
            $table->string('siswa_ukuran_sepatu');
            $table->string('siswa_ukuran_baju');
            $table->string('siswa_berat_badan');
            $table->string('siswa_tinggi_badan');
            $table->string('siswa_transportasi');
            $table->string('siswa_email');
            $table->string('siswa_no_hp');
            // $table->string('siswa_photo');

            $table->string('siswa_status')->nullable();

            // Ayah

            $table->string('ayah_nama_lengkap')->nullable();
            $table->string('ayah_NIK')->nullable();
            $table->string('ayah_tempat')->nullable();
            $table->date('ayah_tanggal_lahir')->nullable();
            $table->string('ayah_agama')->nullable();
            $table->string('ayah_pendidikan_terakhir')->nullable();
            $table->string('ayah_pekerjaan')->nullable();
            $table->string('ayah_penghasilan')->nullable();

            // Ibu

            $table->string('ibu_nama_lengkap')->nullable();
            $table->string('ibu_NIK')->nullable();
            $table->string('ibu_tempat')->nullable();
            $table->date('ibu_tanggal_lahir')->nullable();
            $table->string('ibu_agama')->nullable();
            $table->string('ibu_pendidikan_terakhir')->nullable();
            $table->string('ibu_pekerjaan')->nullable();
            $table->string('ibu_penghasilan')->nullable();

            // Wali

            $table->string("wali_nama_lengkap")->nullable();
            $table->text("wali_alamat_tinggal")->nullable();
            $table->string("wali_pekerjaan")->nullable();

            // Asal Sekolah

            $table->string("asal_nama_sekolah")->nullable();
            $table->text("asal_alamat_sekolah")->nullable();
            $table->string("asal_no_telepon_sekolah")->nullable();

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
        Schema::dropIfExists('siswa_ras');
    }
}
