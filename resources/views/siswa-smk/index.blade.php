@extends('layouts.app')

@section('title')
Siswa SMK
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
            @if(auth()->user()->hasAnyPermission(['laporan smk','super admin']))
            <button class="btn btn-primary waves-effect waves-light" onclick="window.print()"><i class="fa fa-fw fa-print"></i> Print Laporan</button>
            @endif
            <a href="{{route('export','smk')}}" class="btn btn-success waves-effect waves-light" ><i class="fa fa-fw fa-file"></i> Export</a>
            @if(auth()->user()->hasAnyPermission(['tambah smk','super admin']))
            <a href="{{ route('siswa-smk.create') }}" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus mr-1"></i> Tambah Siswa</a>
            @endif
        </div>
    </div>
</div>
<!-- End Breadcrumb-->
@endsection

@section('print-section')
<div id="print" class="d-none">
    <h2 class="text-center mb-5">Laporan Seluruh Siswa Smk</h2>

    <table class="table table-bordered">
        <thead class="thead">
            <tr>
                <th>No</th>

                <th>No. Pendaftaran</th>
                <th>Nama Lengkap</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswaSmks as $siswaSmk)
            <tr>
                <td>{{ ++$i }}</td>

                <td>{{ $siswaSmk->nomor }}</td>
                <td>{{ $siswaSmk->siswa_nama_lengkap }}</td>
                <td>{{$siswaSmk->siswa_status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
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
    <div class="col-sm-12">
        <div class="card">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table dt table-striped table-hover">
                        <thead class="thead">
                            <tr>
                                <th>No</th>

                                <th>No. Pendaftaran</th>
                                <th>Nama Lengkap</th>
                                <th>Status</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($siswaSmks as $siswaSmk)
                            <tr>
                                <td>{{ ++$i }}</td>

                                <td>{{ $siswaSmk->nomor }}</td>
                                <td>{{ $siswaSmk->siswa_nama_lengkap }}</td>
                                <td>{{ $siswaSmk->siswa_status ?? 'Belum Diketahui' }}</td>

                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Aksi
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a class="dropdown-item" href="{{ url()->to('download/smk/'.$siswaSmk->id) }}"><i class="fa fa-fw fa-download"></i> Download PDF</a>
                                            </li>
                                            @if(auth()->user()->hasAnyPermission(['detail smk','super admin']))
                                            <li>
                                            <a class="dropdown-item" href="{{ route('siswa-smk.show',$siswaSmk->id) }}"><i class="fa fa-fw fa-eye"></i> Lihat</a>
                                            </li>
                                            @endif
                                            @if(auth()->user()->hasAnyPermission(['edit smk','super admin']))
                                            <li>
                                            <a class="dropdown-item" href="{{ route('siswa-smk.edit',$siswaSmk->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                            </li>
                                            @endif
                                            @if(auth()->user()->hasAnyPermission(['hapus smk','super admin']))
                                            <li>
                                            <a href="javascript:void(0)" class="dropdown-item" onclick="delete_{{$siswaSmk->id}}.submit()"><i class="fa fa-fw fa-trash"></i> Hapus</a>
                                            <form action="{{ route('siswa-smk.destroy',$siswaSmk->id) }}" name="delete_{{$siswaSmk->id}}" method="POST" style="display:none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                </td>
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
    $("table.dt").dataTable()
</script>
@endsection