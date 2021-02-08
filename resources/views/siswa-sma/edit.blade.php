@extends('adminlte::page')

@section('title')
Update Siswa SMA
@endsection


@section('content_header')
<h2>Update Siswa SMA</h2>
@endsection


@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <form method="POST" action="{{ route('siswa-sma.update', $siswaSma->id) }}" role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('siswa-sma.form')

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