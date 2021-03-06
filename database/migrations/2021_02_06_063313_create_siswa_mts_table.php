<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaMtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_mts', function (Blueprint $table) {
            $table->id();

            // Siswa 

            $table->string('username')->nullable();
            $table->string('password')->nullable();

            $table->string('siswa_nama_lengkap');
            $table->string('siswa_nama_panggilan');
            // $table->string('siswa_NIK');
            $table->string('siswa_NISN');
            $table->string('siswa_jenis_kelamin');
            $table->string('siswa_tempat');
            $table->date('siswa_tanggal_lahir');
            $table->text('siswa_alamat_tempat_tinggal');
            $table->string('siswa_email');
            $table->string('siswa_no_hp');
            // $table->string('siswa_photo');

            $table->string('siswa_status')->nullable();

            // Ayah

            $table->string('ayah_nama_lengkap')->nullable();
            $table->string('ayah_agama')->nullable();
            $table->string('ayah_pendidikan_terakhir')->nullable();
            $table->string('ayah_pekerjaan')->nullable();
            $table->string('ayah_penghasilan')->nullable();

            // Ibu

            $table->string('ibu_nama_lengkap')->nullable();
            $table->string('ibu_agama')->nullable();
            $table->string('ibu_pendidikan_terakhir')->nullable();
            $table->string('ibu_pekerjaan')->nullable();
            $table->string('ibu_penghasilan')->nullable();
            $table->string('ibu_no_hp')->nullable();

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
        Schema::dropIfExists('siswa_mts');
    }
}
