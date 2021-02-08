@extends('adminlte::page')

@section('title')
Update Siswa MTS
@endsection


@section('content_header')
<h2>Update Siswa MTS</h2>
@endsection

@section('content')
<section class="content container-fluid">
    <div class="">
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
</section>
@endsection


@section('js')

<script>
    $(".custom-file-input").change(function(e) {
        $(".custom-file-label").html($(this)[0].files[0].name)
    })
</script>

@endsection