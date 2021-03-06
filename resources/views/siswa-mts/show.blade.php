@extends('layouts.app')

@section('title')
{{ $siswaMts->siswa_nama_lengkap ?? 'Show Siswa Mt' }}
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
            <a href="{{ route('siswa-mts.index') }}" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-arrow-left mr-1"></i> Kembali</a>
        </div>
    </div>
</div>
<!-- End Breadcrumb-->
@endsection

@section('content')
<div class="row">
    <div class="col-6">

        @if($siswaMts->siswa_status == null)

        <div class="row mb-3">
            <form method="POST" action="{{ route('siswa-mts.luluskan') }}" class="col-6" role="form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$siswaMts->id}}">
                <input type="hidden" name="siswa_status" value="lulus">
                <button class="btn btn-success btn-block">Luluskan</button>
            </form>
            <form method="POST" action="{{ route('siswa-mts.luluskan') }}" class="col-6" role="form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$siswaMts->id}}">
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
                        @if($siswaMts->siswa_status == "lulus")
                        <span class="badge badge-success">{{$siswaMts->siswa_status}}</span>
                        @elseif($siswaMts->siswa_status == "tidak lulus")
                        <span class="badge badge-danger">{{$siswaMts->siswa_status}}</span>
                        @else
                        <span class="badge badge-secondary">belum diketahui</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <strong>Nama Lengkap:</strong>
                        {{ $siswaMts->siswa_nama_lengkap ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Nama Panggilan:</strong>
                        {{ $siswaMts->siswa_nama_panggilan ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Nisn:</strong>
                        {{ $siswaMts->siswa_NISN ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Jenis Kelamin:</strong>
                        {{ $siswaMts->siswa_jenis_kelamin ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Tempat:</strong>
                        {{ $siswaMts->siswa_tempat ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Tanggal Lahir:</strong>
                        {{ $siswaMts->siswa_tanggal_lahir ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Alamat Tempat Tinggal:</strong>
                        {{ $siswaMts->siswa_alamat_tempat_tinggal ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $siswaMts->siswa_email ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>No Hp:</strong>
                        {{ $siswaMts->siswa_no_hp ?? '-' }}
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
                    {{ $siswaMts->asal_nama_sekolah ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Alamat Sekolah:</strong>
                    {{ $siswaMts->asal_alamat_sekolah ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>No Telepon Sekolah:</strong>
                    {{ $siswaMts->asal_no_telepon_sekolah ?? '-' }}
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
                    {{ $siswaMts->ayah_nama_lengkap ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Agama:</strong>
                    {{ $siswaMts->ayah_agama ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Pendidikan Terakhir:</strong>
                    {{ $siswaMts->ayah_pendidikan_terakhir ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Pekerjaan:</strong>
                    {{ $siswaMts->ayah_pekerjaan ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Penghasilan:</strong>
                    {{ $siswaMts->ayah_penghasilan ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>No Hp:</strong>
                    {{ $siswaMts->ayah_no_hp ?? '-' }}
                </div>

            </div>

        </div>

        <div class="card card-body">
            <h3>Informasi Ibu Kandung</h3>

            <hr>

            <div id="info-ibu">
                <div class="form-group">
                    <strong>Nama Lengkap:</strong>
                    {{ $siswaMts->ibu_nama_lengkap ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Agama:</strong>
                    {{ $siswaMts->ibu_agama ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Pendidikan Terakhir:</strong>
                    {{ $siswaMts->ibu_pendidikan_terakhir ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Pekerjaan:</strong>
                    {{ $siswaMts->ibu_pekerjaan ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Penghasilan:</strong>
                    {{ $siswaMts->ibu_penghasilan ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>No Hp:</strong>
                    {{ $siswaMts->ibu_no_hp ?? '-' }}
                </div>
            </div>

        </div>

    </div>
</div>
@endsection