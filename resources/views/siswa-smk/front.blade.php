@extends('adminlte::page')

@section('title')
Register Siswa SMK
@endsection


@section('content_header')
<h2>Register Siswa SMK</h2>

@if(session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif

@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <form method="POST" role="form" enctype="multipart/form-data">
                @csrf

                <div id="form">
                    @include('siswa-smk.form2')
                </div>

                <div id="review" class="d-none">
                    @include('siswa-smk.review')
                </div>

            </form>
        </div>
    </div>
</section>
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
            <strong>Email:</strong>
            ${$("[name=siswa_email]").val() ? $("[name=siswa_email]").val() : '-'}
        </div>
`
        $("#info-siswa").html(siswa)

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

        var pondok = `
        <div class="form-group">
            <strong>Pondok Pilihan:</strong>
            ${$("[name=pondok_pilihan]").val() ? $("[name=pondok_pilihan]").val() : '-'}
        </div>
        `

        $("#info-pondok").html(pondok)

    })

    $("#btn-edit").click(function() {
        $("#form").removeClass("d-none")
        $("#review").addClass("d-none")
    })
</script>

@endsection


@section('js')

<script>
    $(".custom-file-input").change(function(e) {
        $(".custom-file-label").html($(this)[0].files[0].name)
    })
</script>

@endsection