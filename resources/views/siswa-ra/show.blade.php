@extends('layouts.app')

@section('title')
{{ $siswaRa->siswa_nama_lengkap ?? 'Show Siswa RA' }}
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
            <a href="{{ route('siswa-ra.index') }}" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-arrow-left mr-1"></i> Kembali</a>
        </div>
    </div>
</div>
<!-- End Breadcrumb-->
@endsection

@section('content')
<div class="row">

    <div class="col-md-6">

        @if($siswaRa->siswa_status == null)

        <div class="row mb-3">
            <form method="POST" action="{{ route('siswa-ra.luluskan') }}" class="col-6" role="form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$siswaRa->id}}">
                <input type="hidden" name="siswa_status" value="lulus">
                <button class="btn btn-success btn-block">Luluskan</button>
            </form>
            <form method="POST" action="{{ route('siswa-ra.luluskan') }}" class="col-6" role="form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$siswaRa->id}}">
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
                        @if($siswaRa->siswa_status == "lulus")
                        <span class="badge badge-success">{{$siswaRa->siswa_status}}</span>
                        @elseif($siswaRa->siswa_status == "tidak lulus")
                        <span class="badge badge-danger">{{$siswaRa->siswa_status}}</span>
                        @else
                        <span class="badge badge-secondary">belum diketahui</span>
                        @endif
                    </div>
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
@endsection