@extends('layouts.app-front')

@section('title')
Register Siswa MA
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
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <div class="alert-icon">
                <i class="icon-check"></i>
            </div>
            <div class="alert-message">
                <span><strong>Success!</strong> {{$message}}</span>
            </div>
        </div>
    </div>
</div>
@endif

@if ($message = Session::get('failed'))
<div class="row">
    <div class="col">
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <div class="alert-icon">
                <i class="icon-check"></i>
            </div>
            <div class="alert-message">
                <span><strong>Failed!</strong> {{$message}}</span>
            </div>
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
                @include('siswa-ma.form2')
            </div>

            <div id="review" class="d-none">
                @include('siswa-ma.review')
            </div>

        </form>
    </div>
</div>
@endsection

@section('js')

<script>
    $(".custom-file-input").change(function(e) {
        $(".custom-file-label").html($(this)[0].files[0].name)
    })

    $("#btn-submit").click(function() {

        console.log('yo')

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
            <strong>Tempat Lahir</strong>
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
            <strong>Tempat Lahir</strong>
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
        <div class="form-group">
            <strong>No Hp:</strong>
            ${$("[name=ibu_no_hp]").val() ? $("[name=ibu_no_hp]").val() : '-'}
        </div>
        `

        $("#info-ibu").html(ibu)

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

        var jurusan = `
        <div class="form-group">
            <strong>Jurusan Pilihan Pertama:</strong>
            ${$("[name=jurusan_pilihan_pertama]").val() ? $("[name=jurusan_pilihan_pertama]").val() : '-'}
        </div>
        <div class="form-group">
            <strong>Jurusan Pilihan Kedua:</strong>
            ${$("[name=jurusan_pilihan_kedua]").val() ? $("[name=jurusan_pilihan_kedua]").val() : '-'}
        </div>
        `

        $("#info-jurusan").html(jurusan)

    })

    $("#btn-edit").click(function() {
        $("#form").removeClass("d-none")
        $("#review").addClass("d-none")
    })
</script>

@endsection