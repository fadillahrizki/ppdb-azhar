<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * Class SiswaRa
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
 * @property $siswa_cita_cita
 * @property $siswa_ukuran_sepatu
 * @property $siswa_ukuran_baju
 * @property $siswa_berat_badan
 * @property $siswa_tinggi_badan
 * @property $siswa_transportasi
 * @property $siswa_email
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
 * @property $wali_nama_Lengkap
 * @property $wali_alamat_tinggal
 * @property $wali_pekerjaan
 * @property $wali_no_hp
 * @property $asal_nama_sekolah
 * @property $asal_alamat_sekolah
 * @property $asal_no_telepon_sekolah
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SiswaRa extends Model
{
	use Notifiable;

	static $rules = [
		'siswa_nama_lengkap' => 'required',
		'siswa_nama_panggilan' => 'required',
		'siswa_NIK' => 'required|unique:siswa_ras',
		'siswa_jenis_kelamin' => 'required',
		'siswa_tempat' => 'required',
		'siswa_tanggal_lahir' => 'required',
		'siswa_anak_ke' => 'required',
		'siswa_jumlah_saudara' => 'required',
		'siswa_usia' => 'required',
		'siswa_alamat_tempat_tinggal' => 'required',
		'siswa_hobi' => 'required',
		'siswa_cita_cita' => 'required',
		'siswa_ukuran_sepatu' => 'required',
		'siswa_ukuran_baju' => 'required',
		'siswa_berat_badan' => 'required',
		'siswa_tinggi_badan' => 'required',
		'siswa_transportasi' => 'required',
		'siswa_no_hp' => 'required|unique:siswa_ras',
		'siswa_email' => 'required|unique:siswa_ras',
		'asal_nama_sekolah' => 'required',
		'asal_alamat_sekolah' => 'required',
		'asal_no_telepon_sekolah' => 'required',
	];

	static $customMessage = [
		'siswa_NIK.unique' => 'NIK sudah digunakan',
		'siswa_no_hp.unique' => 'No HP sudah digunakan',
		'siswa_email.unique' => 'Email sudah digunakan',
	];

	protected $perPage = 20;

	/**
	 * Attributes that should be mass-assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['siswa_nama_lengkap', 'siswa_status', 'siswa_photo', 'siswa_nama_panggilan', 'siswa_NIK', 'siswa_jenis_kelamin', 'siswa_tempat', 'siswa_tanggal_lahir', 'siswa_anak_ke', 'siswa_jumlah_saudara', 'siswa_usia', 'siswa_alamat_tempat_tinggal', 'siswa_hobi', 'siswa_cita_cita', 'siswa_ukuran_sepatu', 'siswa_ukuran_baju', 'siswa_berat_badan', 'siswa_tinggi_badan', 'siswa_transportasi', 'siswa_email', 'ayah_nama_lengkap', 'ayah_NIK', 'ayah_tempat', 'ayah_tanggal_lahir', 'ayah_agama', 'ayah_pendidikan_terakhir', 'ayah_pekerjaan', 'ayah_penghasilan', 'ibu_nama_lengkap', 'ibu_NIK', 'ibu_tempat', 'ibu_tanggal_lahir', 'ibu_agama', 'ibu_pendidikan_terakhir', 'ibu_pekerjaan', 'ibu_penghasilan', 'wali_nama_Lengkap', 'wali_alamat_tinggal', 'wali_pekerjaan', 'asal_nama_sekolah', 'asal_alamat_sekolah', 'asal_no_telepon_sekolah'];

	function getNomorAttribute()
	{
		$id = $this->id < 10 ? "0".$this->id : $this->id;
		$tanggal = $this->created_at->format('dmy');
		return "RA.".$id.$tanggal;
	}
}
