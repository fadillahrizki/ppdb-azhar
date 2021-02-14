@extends('layouts.app')

@section('title')
{{ $siswaSmk->siswa_nama_lengkap ?? 'Show Siswa Smk' }}
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
            <a href="{{ route('siswa-smk.index') }}" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-arrow-left mr-1"></i> Kembali</a>
        </div>
    </div>
</div>
<!-- End Breadcrumb-->
@endsection

@section('content')
<div class="row">
    <div class="col-6">

        <div class="mb-3 gradient-scooter p-3 text-center rounded">
            <img src="{{asset('storage/'.$siswaSmk->siswa_photo)}}" alt="{{$siswaSmk->siswa_nama_lengkap}}" class="img-thumbnail img-profile">
        </div>

        @if($siswaSmk->siswa_status == null)

        <div class="row mb-3">
            <form method="POST" action="{{ route('siswa-smk.luluskan') }}" class="col-6" role="form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$siswaSmk->id}}">
                <input type="hidden" name="siswa_status" value="lulus">
                <button class="btn btn-success btn-block">Luluskan</button>
            </form>
            <form method="POST" action="{{ route('siswa-smk.luluskan') }}" class="col-6" role="form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$siswaSmk->id}}">
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
                        @if($siswaSmk->siswa_status == "lulus")
                        <span class="badge badge-success">{{$siswaSmk->siswa_status}}</span>
                        @elseif($siswaSmk->siswa_status == "tidak lulus")
                        <span class="badge badge-danger">{{$siswaSmk->siswa_status}}</span>
                        @else
                        <span class="badge badge-secondary">belum diketahui</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <strong>Nama Lengkap:</strong>
                        {{ $siswaSmk->siswa_nama_lengkap ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Nama Panggilan:</strong>
                        {{ $siswaSmk->siswa_nama_panggilan ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Nik:</strong>
                        {{ $siswaSmk->siswa_NIK ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Jenis Kelamin:</strong>
                        {{ $siswaSmk->siswa_jenis_kelamin ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Tempat:</strong>
                        {{ $siswaSmk->siswa_tempat ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Tanggal Lahir:</strong>
                        {{ $siswaSmk->siswa_tanggal_lahir ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Anak Ke:</strong>
                        {{ $siswaSmk->siswa_anak_ke ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Jumlah Saudara:</strong>
                        {{ $siswaSmk->siswa_jumlah_saudara ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Usia:</strong>
                        {{ $siswaSmk->siswa_usia ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Alamat Tempat Tinggal:</strong>
                        {{ $siswaSmk->siswa_alamat_tempat_tinggal ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Hobi:</strong>
                        {{ $siswaSmk->siswa_hobi ?? '-' }}
                    </div>
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $siswaSmk->siswa_email ?? '-' }}
                    </div>
                </div>

            </div>
        </div>



    </div>
    <div class="col-6">
        <div class="card card-body">

            <h3>Asal Sekolah</h3>

            <hr>

            <div id="info-asal">

                <div class="form-group">
                    <strong>Nama Sekolah:</strong>
                    {{ $siswaSmk->asal_nama_sekolah ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Alamat Sekolah:</strong>
                    {{ $siswaSmk->asal_alamat_sekolah ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>No Telepon Sekolah:</strong>
                    {{ $siswaSmk->asal_no_telepon_sekolah ?? '-' }}
                </div>
            </div>

        </div>

        <div class="card card-body">

            <h3>Jurusan</h3>

            <hr>

            <div id="info-jurusan">
                <div class="form-group">
                    <strong>Jurusan Pilihan Pertama:</strong>
                    {{ $siswaSmk->jurusan_pilihan_pertama ?? '-' }}
                </div>
                <div class="form-group">
                    <strong>Jurusan Pilihan Kedua:</strong>
                    {{ $siswaSmk->jurusan_pilihan_kedua ?? '-' }}
                </div>
            </div>

        </div>

        <div class="card card-body">

            <h3>Pondok</h3>

            <hr>

            <div id="info-pondok">

                <div class="form-group">
                    <strong>Pondok Pilihan:</strong>
                    {{ $siswaSmk->pondok_pilihan ?? '-' }}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection