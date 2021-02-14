@extends('layouts.app')

@section('title')
{{ $siswaSma->siswa_nama_lengkap ?? 'Show Siswa Sma' }}
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
            <a href="{{ route('siswa-sma.index') }}" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-arrow-left mr-1"></i> Kembali</a>
        </div>
    </div>
</div>
<!-- End Breadcrumb-->
@endsection

@section('content')
<div class="row">
    <div class="col-6">

        <div class="mb-3 gradient-scooter p-3 text-center rounded">
            <img src="{{asset('storage/'.$siswaSma->siswa_photo)}}" alt="{{$siswaSma->siswa_nama_lengkap}}" class="img-thumbnail img-profile">
        </div>

        @if($siswaSma->siswa_status == null)

        <div class="row mb-3">
            <form method="POST" action="{{ route('siswa-sma.luluskan') }}" class="col-6" role="form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$siswaSma->id}}">
                <input type="hidden" name="siswa_status" value="lulus">
                <button class="btn btn-success btn-block">Luluskan</button>
            </form>
            <form method="POST" action="{{ route('siswa-sma.luluskan') }}" class="col-6" role="form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$siswaSma->id}}">
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
                        @if($siswaSma->siswa_status == "lulus")
                        <span class="badge badge-success">{{$siswaSma->siswa_status}}</span>
                        @elseif($siswaSma->siswa_status == "tidak lulus")
                        <span class="badge badge-danger">{{$siswaSma->siswa_status}}</span>
                        @else
                        <span class="badge badge-secondary">belum diketahui</span>
                        @endif
                    </div>
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
@endsection