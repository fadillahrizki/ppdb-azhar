@extends('layouts.app')

@section('title')
Register Siswa RA
@endsection

@section('content_header')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">@yield('title')</h4>
    </div>
</div>
<!-- End Breadcrumb-->
@endsection

@section('content')

@if ($message = Session::get('success'))
<div class="row">
    <div class="col">
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    </div>
</div>
@endif

<div class="row">
    <div class="col-md-12">

        @includeif('partials.errors')

        <form method="POST" role="form" enctype="multipart/form-data">
            @csrf

            <div id="form">
                @include('siswa-ra.form2')
            </div>

            <div id="review" class="d-none">
                @include('siswa-ra.review')
            </div>

        </form>
    </div>
</div>
@endsection

@section('js')

<script>
    $("#btn-submit").click(function() {

        $("#form").addClass("d-none")
        $("#review").removeClass("d-none")

        var siswa = `

        <div class="form-group">
            <strong>Nama Lengkap:</strong>
            ${$("[name=siswa_nama_lengkap]").val() ? $("[name=siswa_nama_lengkap]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Nama Panggilan:</strong>
            ${$("[name=siswa_nama_panggilan]").val() ? $("[name=siswa_nama_panggilan]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>NIK:</strong>
            ${$("[name=siswa_NIK]").val() ? $("[name=siswa_NIK]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Jenis Kelamin:</strong>
            ${$("[name=siswa_jenis_kelamin]").val() ? $("[name=siswa_jenis_kelamin]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Tempat Lahir:</strong>
            ${$("[name=siswa_tempat]").val() ? $("[name=siswa_tempat]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Tanggal Lahir:</strong>
            ${$("[name=siswa_tanggal_lahir]").val() ? $("[name=siswa_tanggal_lahir]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Anak Ke:</strong>
            ${$("[name=siswa_anak_ke]").val() ? $("[name=siswa_anak_ke]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Jumlah Saudara:</strong>
            ${$("[name=siswa_jumlah_saudara]").val() ? $("[name=siswa_jumlah_saudara]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Usia:</strong>
            ${$("[name=siswa_usia]").val() ? $("[name=siswa_usia]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Alamat Tempat Tinggal:</strong>
            ${$("[name=siswa_alamat_tempat_tinggal]").val() ? $("[name=siswa_alamat_tempat_tinggal]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Hobi:</strong>
            ${$("[name=siswa_hobi]").val() ? $("[name=siswa_hobi]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Cita Cita:</strong>
            ${$("[name=siswa_cita_cita]").val() ? $("[name=siswa_cita_cita]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Ukuran Sepatu:</strong>
            ${$("[name=siswa_ukuran_sepatu]").val() ? $("[name=siswa_ukuran_sepatu]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Ukuran Baju:</strong>
            ${$("[name=siswa_ukuran_baju]").val() ? $("[name=siswa_ukuran_baju]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Berat Badan:</strong>
            ${$("[name=siswa_berat_badan]").val() ? $("[name=siswa_berat_badan]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Tinggi Badan:</strong>
            ${$("[name=siswa_tinggi_badan]").val() ? $("[name=siswa_tinggi_badan]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Transportasi:</strong>
            ${$("[name=siswa_transportasi]").val() ? $("[name=siswa_transportasi]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Email:</strong>
            ${$("[name=siswa_email]").val() ? $("[name=siswa_email]").val() : '-'}
        </div>
`
        $("#info-siswa").html(siswa)

        var ayah = `
        <div class="form-group">
            <strong>Nama Lengkap:</strong>
            ${$("[name=ayah_nama_lengkap]").val() ? $("[name=ayah_nama_lengkap]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>NIK:</strong>
            ${$("[name=ayah_NIK]").val() ? $("[name=ayah_NIK]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Tempat Lahir:</strong>
            ${$("[name=ayah_tempat]").val() ? $("[name=ayah_tempat]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Tanggal Lahir:</strong>
            ${$("[name=ayah_tanggal_lahir]").val() ? $("[name=ayah_tanggal_lahir]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Agama:</strong>
            ${$("[name=ayah_agama]").val() ? $("[name=ayah_agama]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Pendidikan Terakhir:</strong>
            ${$("[name=ayah_pendidikan_terakhir]").val() ? $("[name=ayah_pendidikan_terakhir]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Pekerjaan:</strong>
            ${$("[name=ayah_pekerjaan]").val() ? $("[name=ayah_pekerjaan]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Penghasilan:</strong>
            ${$("[name=ayah_penghasilan]").val() ? $("[name=ayah_penghasilan]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>No Hp:</strong>
            ${$("[name=ayah_no_hp]").val() ? $("[name=ayah_no_hp]").val() : '-'}
        </div>
        `

        $("#info-ayah").html(ayah)

        var ibu = `
        <div class="form-group">
            <strong>Nama Lengkap:</strong>
            ${$("[name=ibu_nama_lengkap]").val() ? $("[name=ibu_nama_lengkap]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>NIK:</strong>
            ${$("[name=ibu_NIK]").val() ? $("[name=ibu_NIK]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Tempat Lahir:</strong>
            ${$("[name=ibu_tempat]").val() ? $("[name=ibu_tempat]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Tanggal Lahir:</strong>
            ${$("[name=ibu_tanggal_lahir]").val() ? $("[name=ibu_tanggal_lahir]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Agama:</strong>
            ${$("[name=ibu_agama]").val() ? $("[name=ibu_agama]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Pendidikan Terakhir:</strong>
            ${$("[name=ibu_pendidikan_terakhir]").val() ? $("[name=ibu_pendidikan_terakhir]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Pekerjaan:</strong>
            ${$("[name=ibu_pekerjaan]").val() ? $("[name=ibu_pekerjaan]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Penghasilan:</strong>
            ${$("[name=ibu_penghasilan]").val() ? $("[name=ibu_penghasilan]").val() : '-'}
        </div>
        `

        $("#info-ibu").html(ibu)

        var wali = `
        <div class="form-group">
            <strong>Nama Lengkap:</strong>
            ${$("[name=wali_nama_lengkap]").val() ? $("[name=wali_nama_lengkap]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Alamat tinggal:</strong>
            ${$("[name=wali_alamat_tinggal]").val() ? $("[name=wali_alamat_tinggal]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Pekerjaan:</strong>
            ${$("[name=wali_pekerjaan]").val() ? $("[name=wali_pekerjaan]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>No HP:</strong>
            ${$("[name=wali_no_hp]").val() ? $("[name=wali_no_hp]").val() : '-'}
        </div>
        `

        $("#info-wali").html(wali)

        var asal = `
        <div class="form-group">
            <strong>Nama Sekolah:</strong>
            ${$("[name=asal_nama_sekolah]").val() ? $("[name=asal_nama_sekolah]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Alamat sekolah:</strong>
            ${$("[name=asal_alamat_sekolah]").val() ? $("[name=asal_alamat_sekolah]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>No Telepon Sekolah:</strong>
            ${$("[name=asal_no_telepon_sekolah]").val() ? $("[name=asal_no_telepon_sekolah]").val() : '-'}
        </div>
        `

        $("#info-asal").html(asal)

    })

    $("#btn-edit").click(function() {
        $("#form").removeClass("d-none")
        $("#review").addClass("d-none")
    })

    $(".custom-file-input").change(function(e) {
        $(".custom-file-label").html($(this)[0].files[0].name)
    })
</script>

@endsection