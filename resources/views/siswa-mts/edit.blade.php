@extends('layouts.app')

@section('title')
Update Siswa MTS
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
    <div class="col-md-12">

        @includeif('partials.errors')

        <div class="card card-default">
            <div class="card-header">
                <span class="card-title">Update Siswa Mt</span>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('siswa-mts.update', $siswaMt->id) }}" role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf

                    @include('siswa-mts.form')

                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')

<script>
    $(".custom-file-input").change(function(e) {
        $(".custom-file-label").html($(this)[0].files[0].name)
    })
</script>

@endsection