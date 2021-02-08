@extends('adminlte::page')

@section('title')
{{ $siswaRa->siswa_nama_lengkap ?? 'Show Siswa RA' }}
@endsection

@section('content_header')
<div class="d-flex justify-content-between align-items-center">
    <h2>{{ $siswaRa->siswa_nama_lengkap ?? 'Show Siswa RA' }}</h2>

    <a class="btn btn-primary" href="{{ route('siswa-ra.index') }}"> Back</a>
</div>
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">

        <div class="col-md-6">

            <div class="mb-3 bg-dark p-3 text-center rounded">
                <img src="{{asset('storage/'.$siswaRa->siswa_photo)}}" alt="{{$siswaRa->siswa_nama_lengkap}}" class="img-thumbnail">
            </div>

            <div class="card">

                <div class="card-body">

                    <h3>Informasi Siswa</h3>

                    <hr>

                    <div id="info-siswa">
                        <div class="form-group">
                            <strong>Nama Lengkap:</strong>
                            <span id="siswa_nama_lengkap"></span>
                            {{ $siswaRa->siswa_nama_lengkap ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Nama Panggilan:</strong>
                            {{ $siswaRa->siswa_nama_panggilan ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>NIK:</strong>
                            {{ $siswaRa->siswa_NIK ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Jenis Kelamin:</strong>
                            {{ $siswaRa->siswa_jenis_kelamin ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Tempat:</strong>
                            {{ $siswaRa->siswa_tempat ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Tanggal Lahir:</strong>
                            {{ $siswaRa->siswa_tanggal_lahir ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Anak Ke:</strong>
                            {{ $siswaRa->siswa_anak_ke ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Jumlah Saudara:</strong>
                            {{ $siswaRa->siswa_jumlah_saudara ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Usia:</strong>
                            {{ $siswaRa->siswa_usia ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Alamat Tempat Tinggal:</strong>
                            {{ $siswaRa->siswa_alamat_tempat_tinggal ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Hobi:</strong>
                            {{ $siswaRa->siswa_hobi ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Cita Cita:</strong>
                            {{ $siswaRa->siswa_cita_cita ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Ukuran Sepatu:</strong>
                            {{ $siswaRa->siswa_ukuran_sepatu ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Ukuran Baju:</strong>
                            {{ $siswaRa->siswa_ukuran_baju ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Berat Badan:</strong>
                            {{ $siswaRa->siswa_berat_badan ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Tinggi Badan:</strong>
                            {{ $siswaRa->siswa_tinggi_badan ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Transportasi:</strong>
                            {{ $siswaRa->siswa_transportasi ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $siswaRa->siswa_email ?? '-' }}
                        </div>
                    </div>

                </div>
            </div>

            <div class="card card-body">

                <h3>Asal Sekolah</h3>

                <hr>

                <div id="info-asal">
                    <div class="form-group">
                        <strong>Nama Sekolah:</strong>
                        {{ $siswaRa->asal_nama_sekolah ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Alamat Sekolah:</strong>
                        {{ $siswaRa->asal_alamat_sekolah ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>No Telepon Sekolah:</strong>
                        {{ $siswaRa->asal_no_telepon_sekolah ?? '-' }}
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-body">
                <h3>Informasi Ayah Kandung</h3>

                <hr>

                <div id="info-ayah">
                    <div class="form-group">
                        <strong>Nama Lengkap:</strong>
                        {{ $siswaRa->ayah_nama_lengkap ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>NIK:</strong>
                        {{ $siswaRa->ayah_NIK ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Tempat:</strong>
                        {{ $siswaRa->ayah_tempat ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Tanggal Lahir:</strong>
                        {{ $siswaRa->ayah_tanggal_lahir ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Agama:</strong>
                        {{ $siswaRa->ayah_agama ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Pendidikan Terakhir:</strong>
                        {{ $siswaRa->ayah_pendidikan_terakhir ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Pekerjaan:</strong>
                        {{ $siswaRa->ayah_pekerjaan ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Penghasilan:</strong>
                        {{ $siswaRa->ayah_penghasilan ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>No Hp:</strong>
                        {{ $siswaRa->ayah_no_hp ?? '-' }}
                    </div>
                </div>

            </div>

            <div class="card card-body">
                <h3>Informasi Ibu Kandung</h3>

                <hr>

                <div id="info-ibu">
                    <div class="form-group">
                        <strong>Nama Lengkap:</strong>
                        {{ $siswaRa->ibu_nama_lengkap ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>NIK:</strong>
                        {{ $siswaRa->ibu_NIK ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Tempat:</strong>
                        {{ $siswaRa->ibu_tempat ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Tanggal Lahir:</strong>
                        {{ $siswaRa->ibu_tanggal_lahir ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Agama:</strong>
                        {{ $siswaRa->ibu_agama ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Pendidikan Terakhir:</strong>
                        {{ $siswaRa->ibu_pendidikan_terakhir ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Pekerjaan:</strong>
                        {{ $siswaRa->ibu_pekerjaan ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Penghasilan:</strong>
                        {{ $siswaRa->ibu_penghasilan ?? '-' }}
                    </div>
                </div>

            </div>

            <div class="card card-body">
                <h3>Informasi Wali</h3>

                <hr>

                <div id="info-wali">
                    <div class="form-group">
                        <strong>Nama Lengkap:</strong>
                        {{ $siswaRa->wali_nama_Lengkap ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Alamat Tinggal:</strong>
                        {{ $siswaRa->wali_alamat_tinggal ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Pekerjaan:</strong>
                        {{ $siswaRa->wali_pekerjaan ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>No Hp:</strong>
                        {{ $siswaRa->wali_no_hp ?? '-' }}
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection