@extends('layouts.app')

@section('title')
{{ $siswaMa->siswa_nama_lengkap ?? 'Show Siswa MA' }}
@endsection


@section('content_header')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">@yield('title')</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </div>
    <div class="col-sm-3">
        <div class="btn-group float-sm-right">
            <a href="{{ route('siswa-ma.index') }}" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-arrow-left mr-1"></i> Kembali</a>
        </div>
    </div>
</div>
<!-- End Breadcrumb-->
@endsection

@section('content')
<div class="row">
    <div class="col-6">

        <div class="mb-3 gradient-scooter p-3 text-center rounded">
            <img src="{{asset('storage/'.$siswaMa->siswa_photo)}}" alt="{{$siswaMa->siswa_nama_lengkap}}" class="img-thumbnail img-profile">
        </div>

        @if($siswaMa->siswa_status == null)

        <div class="row mb-3">
            <form method="POST" action="{{ route('siswa-ma.luluskan') }}" class="col-6" role="form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$siswaMa->id}}">
                <input type="hidden" name="siswa_status" value="lulus">
                <button class="btn btn-success btn-block">Luluskan</button>
            </form>
            <form method="POST" action="{{ route('siswa-ma.luluskan') }}" class="col-6" role="form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$siswaMa->id}}">
                <input type="hidden" name="siswa_status" value="tidak lulus">
                <button class="btn btn-danger btn-block">Tidak Luluskan</button>
            </form>

        </div>

        @endif

        <div class="card">

            <div class="card-body">

                <h3>Informasi Siswa</h3>

                <hr>

                <div id="info-siswa">
                    <div class="form-group">
                        <strong>Status :</strong>
                        <span id="siswa_status"></span>
                        @if($siswaMa->siswa_status == "lulus")
                        <span class="badge badge-success">{{$siswaMa->siswa_status}}</span>
                        @elseif($siswaMa->siswa_status == "tidak lulus")
                        <span class="badge badge-danger">{{$siswaMa->siswa_status}}</span>
                        @else
                        <span class="badge badge-secondary">belum diketahui</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <strong>Nama Lengkap:</strong>
                        {{ $siswaMa->siswa_nama_lengkap ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Nama Panggilan:</strong>
                        {{ $siswaMa->siswa_nama_panggilan ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Nik:</strong>
                        {{ $siswaMa->siswa_NIK ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Jenis Kelamin:</strong>
                        {{ $siswaMa->siswa_jenis_kelamin ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Tempat:</strong>
                        {{ $siswaMa->siswa_tempat ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Tanggal Lahir:</strong>
                        {{ $siswaMa->siswa_tanggal_lahir ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Anak Ke:</strong>
                        {{ $siswaMa->siswa_anak_ke ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Jumlah Saudara:</strong>
                        {{ $siswaMa->siswa_jumlah_saudara ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Usia:</strong>
                        {{ $siswaMa->siswa_usia ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Alamat Tempat Tinggal:</strong>
                        {{ $siswaMa->siswa_alamat_tempat_tinggal ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Hobi:</strong>
                        {{ $siswaMa->siswa_hobi ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $siswaMa->siswa_email ?? '-' }}
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
                    {{ $siswaMa->asal_nama_sekolah ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Alamat Sekolah:</strong>
                    {{ $siswaMa->asal_alamat_sekolah ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>No Telepon Sekolah:</strong>
                    {{ $siswaMa->asal_no_telepon_sekolah ?? '-' }}
                </div>
            </div>

        </div>


        <div class="card card-body">

            <h3>Jurusan</h3>

            <hr>

            <div id="info-jurusan">
                <div class="form-group">
                    <strong>Jurusan Pilihan Pertama:</strong>
                    {{ $siswaMa->jurusan_pilihan_pertama ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Jurusan Pilihan Kedua:</strong>
                    {{ $siswaMa->jurusan_pilihan_kedua ?? '-' }}
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
                    {{ $siswaMa->ayah_nama_lengkap ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Nik:</strong>
                    {{ $siswaMa->ayah_NIK ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Tempat:</strong>
                    {{ $siswaMa->ayah_tempat ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Tanggal Lahir:</strong>
                    {{ $siswaMa->ayah_tanggal_lahir ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Agama:</strong>
                    {{ $siswaMa->ayah_agama ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Pendidikan Terakhir:</strong>
                    {{ $siswaMa->ayah_pendidikan_terakhir ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Pekerjaan:</strong>
                    {{ $siswaMa->ayah_pekerjaan ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Penghasilan:</strong>
                    {{ $siswaMa->ayah_penghasilan ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>No Hp:</strong>
                    {{ $siswaMa->ayah_no_hp ?? '-' }}
                </div>
            </div>

        </div>

        <div class="card card-body">
            <h3>Informasi Ibu Kandung</h3>

            <hr>

            <div id="info-ibu">

                <div class="form-group">
                    <strong>Nama Lengkap:</strong>
                    {{ $siswaMa->ibu_nama_lengkap ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Nik:</strong>
                    {{ $siswaMa->ibu_NIK ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Tempat:</strong>
                    {{ $siswaMa->ibu_tempat ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Tanggal Lahir:</strong>
                    {{ $siswaMa->ibu_tanggal_lahir ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Agama:</strong>
                    {{ $siswaMa->ibu_agama ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Pendidikan Terakhir:</strong>
                    {{ $siswaMa->ibu_pendidikan_terakhir ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Pekerjaan:</strong>
                    {{ $siswaMa->ibu_pekerjaan ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Penghasilan:</strong>
                    {{ $siswaMa->ibu_penghasilan ?? '-' }}
                </div>
            </div>

        </div>


    </div>
</div>
@endsection