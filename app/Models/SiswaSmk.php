<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

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
	use Notifiable;

	static $rules = [
		'siswa_nama_lengkap' => 'required',
		'siswa_nama_panggilan' => 'required',
		// 'siswa_NIK' => 'required|unique:siswa_smks',
		'siswa_jenis_kelamin' => 'required',
		'siswa_tempat' => 'required',
		'siswa_tanggal_lahir' => 'required',
		// 'siswa_anak_ke' => 'required',
		// 'siswa_jumlah_saudara' => 'required',
		'siswa_usia' => 'required',
		'siswa_alamat_tempat_tinggal' => 'required',
		'siswa_no_hp' => 'required|unique:siswa_smks',
		'siswa_email' => 'required|unique:siswa_smks',
		// 'siswa_photo' => 'required|mimes:jpeg,jpg,png|max:5120',
		'asal_nama_sekolah' => 'required',
		'asal_alamat_sekolah' => 'required',
		'jurusan_pilihan_pertama' => 'required',
		'jurusan_pilihan_kedua' => 'required',
		'pondok_pilihan' => 'required',
	];

	static $customMessage = [
		// 'siswa_NIK.unique' => 'NIK sudah digunakan',
		'siswa_no_hp.unique' => 'No HP sudah digunakan',
		'siswa_email.unique' => 'Email sudah digunakan',
	];

	protected $perPage = 20;

	/**
	 * Attributes that should be mass-assignable.
	 *
	 * @var array
	 */
	// protected $guarded = [];
	protected $fillable = ['siswa_no_hp','siswa_status',  'siswa_nama_lengkap', 'siswa_nama_panggilan', 'siswa_jenis_kelamin', 'siswa_tempat', 'siswa_tanggal_lahir', 'siswa_usia', 'siswa_alamat_tempat_tinggal', 'siswa_email', 'asal_nama_sekolah', 'asal_alamat_sekolah', 'jurusan_pilihan_pertama', 'jurusan_pilihan_kedua', 'pondok_pilihan'];

	function getNomorAttribute()
	{
		$id = $this->id < 10 ? "0".$this->id : $this->id;
		$tanggal = $this->created_at->format('dmy');
		return "SMK".$id.$tanggal;
	}
}
