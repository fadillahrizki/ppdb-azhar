@extends('layouts.app')

@section('title')
Siswa RA
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
            <a href="{{ route('siswa-ra.create') }}" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus mr-1"></i> Tambah Siswa</a>
        </div>
    </div>
</div>
<!-- End Breadcrumb-->
@endsection

@section('content')

@if ($message = Session::get('success'))
<div class="row">
    <div class="col">
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    </div>
</div>
@endif

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="thead">
                            <tr>
                                <th>No</th>

                                <th>Nama Lengkap</th>
                                <th>NIK</th>
                                <th>Email</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswaRas as $siswaRa)
                            <tr>
                                <td>{{ ++$i }}</td>

                                <td>{{ $siswaRa->siswa_nama_lengkap }}</td>
                                <td>{{ $siswaRa->siswa_NIK }}</td>
                                <td>{{ $siswaRa->siswa_email }}</td>

                                <td>
                                    <form action="{{ route('siswa-ra.destroy',$siswaRa->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('siswa-ra.show',$siswaRa->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('siswa-ra.edit',$siswaRa->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {!! $siswaRas->links() !!}
    </div>
</div>
@endsection


@section('js')
<script>
    $("table").DataTable()
</script>
@endsection