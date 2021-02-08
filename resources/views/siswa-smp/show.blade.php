@extends('adminlte::page')

@section('title')
{{ $siswaSmp->siswa_nama_lengkap ?? 'Show Siswa Smp' }}
@endsection


@section('content_header')
<div class="d-flex justify-content-between align-items-center">
    <h2>{{ $siswaSmp->siswa_nama_lengkap ?? 'Show Siswa SMP' }}</h2>

    <a class="btn btn-primary" href="{{ route('siswa-smp.index') }}"> Back</a>
</div>
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-6">


            <div class="mb-3 bg-dark p-3 text-center rounded">
                <img src="{{asset('storage/'.$siswaSmp->siswa_photo)}}" alt="{{$siswaSmp->siswa_nama_lengkap}}" class="img-thumbnail">
            </div>

            <div class="card">

                <div class="card-body">

                    <h3>Informasi Siswa</h3>

                    <hr>

                    <div id="info-siswa">
                        <div class="form-group">
                            <strong>Nama Lengkap:</strong>
                            {{ $siswaSmp->siswa_nama_lengkap ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Nama Panggilan:</strong>
                            {{ $siswaSmp->siswa_nama_panggilan ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Nik:</strong>
                            {{ $siswaSmp->siswa_NIK ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Nisn:</strong>
                            {{ $siswaSmp->siswa_NISN ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Jenis Kelamin:</strong>
                            {{ $siswaSmp->siswa_jenis_kelamin ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Tempat:</strong>
                            {{ $siswaSmp->siswa_tempat ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Tanggal Lahir:</strong>
                            {{ $siswaSmp->siswa_tanggal_lahir ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Alamat Tempat Tinggal:</strong>
                            {{ $siswaSmp->siswa_alamat_tempat_tinggal ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $siswaSmp->siswa_email ?? '-' }}
                        </div>
                        <div class="form-group">
                            <strong>No Hp:</strong>
                            {{ $siswaSmp->siswa_no_hp ?? '-' }}
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
                        {{ $siswaSmp->asal_nama_sekolah ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Alamat Sekolah:</strong>
                        {{ $siswaSmp->asal_alamat_sekolah ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>No Telepon Sekolah:</strong>
                        {{ $siswaSmp->asal_no_telepon_sekolah ?? '-' }}
                    </div>
                </div>

            </div>


            <div class="card card-body">

                <h3>Pilihan Program Kelas</h3>

                <hr>

                <div id="info-kelas">

                    <div class="form-group">
                        <strong>Kelas Pilihan Pertama:</strong>
                        {{ $siswaSmp->kelas_pilihan_pertama ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Kelas Pilihan Kedua:</strong>
                        {{ $siswaSmp->kelas_pilihan_kedua ?? '-' }}
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
                        {{ $siswaSmp->ayah_nama_lengkap ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Agama:</strong>
                        {{ $siswaSmp->ayah_agama ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Pendidikan Terakhir:</strong>
                        {{ $siswaSmp->ayah_pendidikan_terakhir ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Pekerjaan:</strong>
                        {{ $siswaSmp->ayah_pekerjaan ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Penghasilan:</strong>
                        {{ $siswaSmp->ayah_penghasilan ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>No Hp:</strong>
                        {{ $siswaSmp->ayah_no_hp ?? '-' }}
                    </div>
                </div>

            </div>

            <div class="card card-body">
                <h3>Informasi Ibu Kandung</h3>

                <hr>

                <div id="info-ibu">
                    <div class="form-group">
                        <strong>Nama Lengkap:</strong>
                        {{ $siswaSmp->ibu_nama_lengkap ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Agama:</strong>
                        {{ $siswaSmp->ibu_agama ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Pendidikan Terakhir:</strong>
                        {{ $siswaSmp->ibu_pendidikan_terakhir ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Pekerjaan:</strong>
                        {{ $siswaSmp->ibu_pekerjaan ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Penghasilan:</strong>
                        {{ $siswaSmp->ibu_penghasilan ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>No Hp:</strong>
                        {{ $siswaSmp->ibu_no_hp ?? '-' }}
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>
@endsection