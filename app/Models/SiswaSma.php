<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SiswaSma
 *
 * @property $id
 * @property $siswa_nama_lengkap
 * @property $siswa_nama_panggilan
 * @property $siswa_NIK
 * @property $siswa_jenis_kelamin
 * @property $siswa_tempat
 * @property $siswa_tanggal_lahir
 * @property $siswa_alamat_tempat_tinggal
 * @property $siswa_email
 * @property $siswa_no_hp
 * @property $ayah_nama_lengkap
 * @property $ayah_NIK
 * @property $ayah_tempat
 * @property $ayah_tanggal_lahir
 * @property $ayah_agama
 * @property $ayah_pendidikan_terakhir
 * @property $ayah_pekerjaan
 * @property $ayah_penghasilan
 * @property $ayah_no_hp
 * @property $ibu_nama_lengkap
 * @property $ibu_NIK
 * @property $ibu_tempat
 * @property $ibu_tanggal_lahir
 * @property $ibu_agama
 * @property $ibu_pendidikan_terakhir
 * @property $ibu_pekerjaan
 * @property $ibu_penghasilan
 * @property $asal_nama_sekolah
 * @property $asal_alamat_sekolah
 * @property $asal_no_telepon_sekolah
 * @property $jurusan
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SiswaSma extends Model
{

	static $rules = [
		'siswa_nama_lengkap' => 'required',
		'siswa_nama_panggilan' => 'required',
		'siswa_NIK' => 'required',
		'siswa_jenis_kelamin' => 'required',
		'siswa_tempat' => 'required',
		'siswa_tanggal_lahir' => 'required',
		'siswa_alamat_tempat_tinggal' => 'required',
		'siswa_email' => 'required',
		'siswa_no_hp' => 'required',
		'siswa_photo' => 'required',
		'asal_nama_sekolah' => 'required',
		'asal_alamat_sekolah' => 'required',
		'asal_no_telepon_sekolah' => 'required',
		'jurusan' => 'required',
	];

	protected $perPage = 20;

	/**
	 * Attributes that should be mass-assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['siswa_photo', 'siswa_nama_lengkap', 'siswa_nama_panggilan', 'siswa_NIK', 'siswa_jenis_kelamin', 'siswa_tempat', 'siswa_tanggal_lahir', 'siswa_alamat_tempat_tinggal', 'siswa_email', 'siswa_no_hp', 'ayah_nama_lengkap', 'ayah_NIK', 'ayah_tempat', 'ayah_tanggal_lahir', 'ayah_agama', 'ayah_pendidikan_terakhir', 'ayah_pekerjaan', 'ayah_penghasilan', 'ayah_no_hp', 'ibu_nama_lengkap', 'ibu_NIK', 'ibu_tempat', 'ibu_tanggal_lahir', 'ibu_agama', 'ibu_pendidikan_terakhir', 'ibu_pekerjaan', 'ibu_penghasilan', 'asal_nama_sekolah', 'asal_alamat_sekolah', 'asal_no_telepon_sekolah', 'jurusan'];
}
