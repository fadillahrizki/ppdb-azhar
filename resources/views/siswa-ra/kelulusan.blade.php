@extends('layouts.app')

@section('title')
Kelulusan Siswa RA
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
            <button class="btn btn-primary waves-effect waves-light" onclick="window.print()"><i class="fa fa-fw fa-print"></i> Print Laporan</button>
        </div>
    </div>
</div>
<!-- End Breadcrumb-->
@endsection

<div id="print">
    <h2 class="text-center mb-5">Laporan Kelulusan Siswa RA</h2>

    <table class="table table-bordered">
        <thead class="thead">
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>NIK</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswaRas as $siswaRa)
            <tr>
                <td>{{ ++$i }}</td>

                <td>{{ $siswaRa->siswa_nama_lengkap }}</td>
                <td>{{ $siswaRa->siswa_NIK }}</td>
                <td>{{ $siswaRa->siswa_email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

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
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table dt table-striped table-hover">
                        <thead class="thead">
                            <tr>
                                <th>No</th>

                                <th>Nama Lengkap</th>
                                <th>NIK</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($siswaRas as $siswaRa)
                            <tr>
                                <td>{{ ++$i }}</td>

                                <td>{{ $siswaRa->siswa_nama_lengkap }}</td>
                                <td>{{ $siswaRa->siswa_NIK }}</td>
                                <td>{{ $siswaRa->siswa_email }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script>
    $("table.dt").DataTable()
</script>
@endsection