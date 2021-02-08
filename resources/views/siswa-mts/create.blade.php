@extends('adminlte::page')

@section('title')
Tambah Siswa MTS
@endsection


@section('content_header')
<h2>Tambah Siswa MTS</h2>
@endsection


@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <form method="POST" action="{{ route('siswa-mts.store') }}" role="form" enctype="multipart/form-data">
                @csrf

                @include('siswa-mts.form')

            </form>
        </div>
    </div>
</section>
@endsection


@section('js')

<script>
    $(".custom-file-input").change(function(e) {
        $(".custom-file-label").html($(this)[0].files[0].name)
    })
</script>

@endsection