@extends('adminlte::page')

@section('title')
{{ $siswaSma->siswa_nama_lengkap ?? 'Show Siswa Sma' }}
@endsection


@section('content_header')
<div class="d-flex justify-content-between align-items-center">
    <h2>{{ $siswaSma->siswa_nama_lengkap ?? 'Show Siswa SMA' }}</h2>

    <a class="btn btn-primary" href="{{ route('siswa-sma.index') }}"> Back</a>
</div>
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-6">

            <div class="mb-3 bg-dark p-3 text-center rounded">
                <img src="{{asset('storage/'.$siswaSma->siswa_photo)}}" alt="{{$siswaSma->siswa_nama_lengkap}}" class="img-thumbnail">
            </div>

            <div class="card">

                <div class="card-body">

                    <h3>Informasi Siswa</h3>

                    <hr>

                    <div id="info-siswa">
                        <div class="form-group">
                            <strong>Nama Lengkap:</strong>
                            {{ $siswaSma->siswa_nama_lengkap ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Nama Panggilan:</strong>
                            {{ $siswaSma->siswa_nama_panggilan ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Nik:</strong>
                            {{ $siswaSma->siswa_NIK ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Jenis Kelamin:</strong>
                            {{ $siswaSma->siswa_jenis_kelamin ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Tempat:</strong>
                            {{ $siswaSma->siswa_tempat ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Tanggal Lahir:</strong>
                            {{ $siswaSma->siswa_tanggal_lahir ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Alamat Tempat Tinggal:</strong>
                            {{ $siswaSma->siswa_alamat_tempat_tinggal ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $siswaSma->siswa_email ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>No Hp:</strong>
                            {{ $siswaSma->siswa_no_hp ?? '-' }}
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
                        {{ $siswaSma->asal_nama_sekolah ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Alamat Sekolah:</strong>
                        {{ $siswaSma->asal_alamat_sekolah ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>No Telepon Sekolah:</strong>
                        {{ $siswaSma->asal_no_telepon_sekolah ?? '-' }}
                    </div>
                </div>

            </div>

            <div class="card card-body">

                <h3>Jurusan</h3>

                <hr>

                <div id="info-jurusan">
                    <div class="form-group">
                        <strong>Jurusan:</strong>
                        {{ $siswaSma->jurusan ?? '-' }}
                    </div>
                </div>

            </div>
        </div>
        <div class="col-6">

            <div class="card card-body">
                <h3>Informasi Ayah Kandung</h3>

                <hr>

                <div id="info-ayah">
                    <div class="form-group">
                        <strong>Nama Lengkap:</strong>
                        {{ $siswaSma->ayah_nama_lengkap ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Nik:</strong>
                        {{ $siswaSma->ayah_NIK ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Tempat:</strong>
                        {{ $siswaSma->ayah_tempat ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Tanggal Lahir:</strong>
                        {{ $siswaSma->ayah_tanggal_lahir ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Agama:</strong>
                        {{ $siswaSma->ayah_agama ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Pendidikan Terakhir:</strong>
                        {{ $siswaSma->ayah_pendidikan_terakhir ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Pekerjaan:</strong>
                        {{ $siswaSma->ayah_pekerjaan ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Penghasilan:</strong>
                        {{ $siswaSma->ayah_penghasilan ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>No Hp:</strong>
                        {{ $siswaSma->ayah_no_hp ?? '-' }}
                    </div>
                </div>

            </div>

            <div class="card card-body">
                <h3>Informasi Ibu Kandung</h3>

                <hr>

                <div id="info-ibu">
                    <div class="form-group">
                        <strong>Nama Lengkap:</strong>
                        {{ $siswaSma->ibu_nama_lengkap ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Nik:</strong>
                        {{ $siswaSma->ibu_NIK ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Tempat:</strong>
                        {{ $siswaSma->ibu_tempat ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Tanggal Lahir:</strong>
                        {{ $siswaSma->ibu_tanggal_lahir ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Agama:</strong>
                        {{ $siswaSma->ibu_agama ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Pendidikan Terakhir:</strong>
                        {{ $siswaSma->ibu_pendidikan_terakhir ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Pekerjaan:</strong>
                        {{ $siswaSma->ibu_pekerjaan ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Penghasilan:</strong>
                        {{ $siswaSma->ibu_penghasilan ?? '-' }}
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection