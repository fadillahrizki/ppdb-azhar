@extends('layouts.app')

@section('title')
Siswa MA
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
            @if(auth()->user()->hasAnyPermission(['laporan ma','super admin']))
            <button class="btn btn-primary waves-effect waves-light" onclick="window.print()"><i class="fa fa-fw fa-print"></i> Print Laporan</button>
            @endif
            @if(auth()->user()->hasAnyPermission(['tambah ma','super admin']))
            <a href="{{ route('siswa-ma.create') }}" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus mr-1"></i> Tambah Siswa</a>
            @endif
        </div>
    </div>
</div>
<!-- End Breadcrumb-->
@endsection

<div id="print" class="d-none">
    <h2 class="text-center mb-5">Laporan Seluruh Siswa Ma</h2>

    <table class="table table-bordered">
        <thead class="thead">
            <tr>
                <th>No</th>

                <th>Nama Lengkap</th>
                <th>NIK</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswaMas as $siswaMa)
            <tr>
                <td>{{ ++$i }}</td>

                <td>{{ $siswaMa->siswa_nama_lengkap }}</td>
                <td>{{ $siswaMa->siswa_NIK }}</td>
                <td>{{ $siswaMa->siswa_jenis_kelamin }}</td>
                <td>{{ $siswaMa->siswa_email }}</td>
                <td>
                    @if($siswaMa->siswa_status == "lulus")
                    <span class="badge badge-success">{{$siswaMa->siswa_status}}</span>
                    @elseif($siswaMa->siswa_status == "tidak lulus")
                    <span class="badge badge-danger">{{$siswaMa->siswa_status}}</span>
                    @else
                    <span class="badge badge-secondary">belum diketahui</span>
                    @endif
                </td>
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
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                                <th>Status</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach ($siswaMas as $siswaMa)
                            <tr>
                                <td>{{ ++$i }}</td>

                                <td>{{ $siswaMa->siswa_nama_lengkap }}</td>
                                <td>{{ $siswaMa->siswa_NIK }}</td>
                                <td>{{ $siswaMa->siswa_jenis_kelamin }}</td>
                                <td>{{ $siswaMa->siswa_email }}</td>
                                <td>{{ $siswaMa->siswa_status ?? 'Belum Diketahui' }}</td>

                                <td>
                                    @if(auth()->user()->hasAnyPermission(['detail ma','super admin']))
                                    <a class="btn btn-sm btn-primary " href="{{ route('siswa-ma.show',$siswaMa->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                    @endif
                                    @if(auth()->user()->hasAnyPermission(['edit ma','super admin']))
                                    <a class="btn btn-sm btn-success" href="{{ route('siswa-ma.edit',$siswaMa->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                    @endif
                                    @if(auth()->user()->hasAnyPermission(['hapus ma','super admin']))
                                    <form action="{{ route('siswa-ma.destroy',$siswaMa->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                    </form>
                                    @endif
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
    $("table.dt").DataTable()
</script>
@endsection