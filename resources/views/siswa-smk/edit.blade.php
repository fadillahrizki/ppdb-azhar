@extends('adminlte::page')

@section('title')
Update Siswa Smk
@endsection


@section('content_header')
<h2>Update Siswa SMK</h2>
@endsection

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <form method="POST" action="{{ route('siswa-smk.update', $siswaSmk->id) }}" role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('siswa-smk.form')

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