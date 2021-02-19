@extends('layouts.app')

@section('title')
Siswa SMP
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
            @if(auth()->user()->hasAnyPermission(['laporan smp','super admin']))
            <button class="btn btn-primary waves-effect waves-light" onclick="window.print()"><i class="fa fa-fw fa-print"></i> Print Laporan</button>
            @endif
            @if(auth()->user()->hasAnyPermission(['tambah smp','super admin']))
            <a href="{{ route('siswa-smp.create') }}" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus mr-1"></i> Tambah Siswa</a>
            @endif
        </div>
    </div>
</div>
<!-- End Breadcrumb-->
@endsection



@section('content')
<div id="print" class="d-none">
    <h2 class="text-center mb-5">Laporan Seluruh Siswa Smp</h2>

    <table class="table table-bordered">
        <thead class="thead">
            <tr>
                <th>No</th>

                <th>Nama Lengkap</th>
                <th>NIK</th>
                <th>NISN</th>
                <th>Email</th>
                <th>No Hp</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswaSmps as $siswaSmp)
            <tr>
                <td>{{ ++$i }}</td>

                <td>{{ $siswaSmp->siswa_nama_lengkap }}</td>
                <td>{{ $siswaSmp->siswa_NIK }}</td>
                <td>{{ $siswaSmp->siswa_NISN }}</td>
                <td>{{ $siswaSmp->siswa_email }}</td>
                <td>{{ $siswaSmp->siswa_no_hp }}</td>
                <td>
                    @if($siswaSmp->siswa_status == "lulus")
                    <span class="badge badge-success">{{$siswaSmp->siswa_status}}</span>
                    @elseif($siswaSmp->siswa_status == "tidak lulus")
                    <span class="badge badge-danger">{{$siswaSmp->siswa_status}}</span>
                    @else
                    <span class="badge badge-secondary">belum diketahui</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

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
                                <th>NISN</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th>Status</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($siswaSmps as $siswaSmp)
                            <tr>
                                <td>{{ ++$i }}</td>

                                <td>{{ $siswaSmp->siswa_nama_lengkap }}</td>
                                <td>{{ $siswaSmp->siswa_NIK }}</td>
                                <td>{{ $siswaSmp->siswa_NISN }}</td>
                                <td>{{ $siswaSmp->siswa_email }}</td>
                                <td>{{ $siswaSmp->siswa_no_hp }}</td>
                                <td>{{ $siswaSmp->siswa_status ?? 'Belum Diketahui' }}</td>

                                <td>
                                    @if(auth()->user()->hasAnyPermission(['detail smp','super admin']))
                                    <a class="btn btn-sm btn-primary " href="{{ route('siswa-smp.show',$siswaSmp->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                    @endif
                                    @if(auth()->user()->hasAnyPermission(['edit smp','super admin']))
                                    <a class="btn btn-sm btn-success" href="{{ route('siswa-smp.edit',$siswaSmp->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                    @endif
                                    @if(auth()->user()->hasAnyPermission(['hapus smp','super admin']))
                                    <form action="{{ route('siswa-smp.destroy',$siswaSmp->id) }}" method="POST">
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
    $("table.dt").dataTable()
</script>
@endsection