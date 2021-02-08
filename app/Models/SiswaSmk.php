<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SiswaSmk
 *
 * @property $id
 * @property $siswa_nama_lengkap
 * @property $siswa_nama_panggilan
 * @property $siswa_NIK
 * @property $siswa_jenis_kelamin
 * @property $siswa_tempat
 * @property $siswa_tanggal_lahir
 * @property $siswa_anak_ke
 * @property $siswa_jumlah_saudara
 * @property $siswa_usia
 * @property $siswa_alamat_tempat_tinggal
 * @property $siswa_hobi
 * @property $siswa_email
 * @property $asal_nama_sekolah
 * @property $asal_alamat_sekolah
 * @property $asal_no_telepon_sekolah
 * @property $jurusan_pilihan_pertama
 * @property $jurusan_pilihan_kedua
 * @property $pondok_pilihan
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SiswaSmk extends Model
{

	static $rules = [
		'siswa_nama_lengkap' => 'required',
		'siswa_nama_panggilan' => 'required',
		'siswa_NIK' => 'required',
		'siswa_jenis_kelamin' => 'required',
		'siswa_tempat' => 'required',
		'siswa_tanggal_lahir' => 'required',
		'siswa_anak_ke' => 'required',
		'siswa_jumlah_saudara' => 'required',
		'siswa_usia' => 'required',
		'siswa_alamat_tempat_tinggal' => 'required',
		'siswa_hobi' => 'required',
		'siswa_email' => 'required',
		'siswa_photo' => 'required',
		'asal_nama_sekolah' => 'required',
		'asal_alamat_sekolah' => 'required',
		'asal_no_telepon_sekolah' => 'required',
		'jurusan_pilihan_pertama' => 'required',
		'jurusan_pilihan_kedua' => 'required',
		'pondok_pilihan' => 'required',
	];

	protected $perPage = 20;

	/**
	 * Attributes that should be mass-assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['siswa_photo', 'siswa_nama_lengkap', 'siswa_nama_panggilan', 'siswa_NIK', 'siswa_jenis_kelamin', 'siswa_tempat', 'siswa_tanggal_lahir', 'siswa_anak_ke', 'siswa_jumlah_saudara', 'siswa_usia', 'siswa_alamat_tempat_tinggal', 'siswa_hobi', 'siswa_email', 'asal_nama_sekolah', 'asal_alamat_sekolah', 'asal_no_telepon_sekolah', 'jurusan_pilihan_pertama', 'jurusan_pilihan_kedua', 'pondok_pilihan'];
}
