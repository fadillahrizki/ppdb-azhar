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
            <a href="{{ route('siswa-smk.create') }}" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus mr-1"></i> Tambah Siswa</a>
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
                            @foreach ($siswaSmks as $siswaSmk)
                            <tr>
                                <td>{{ ++$i }}</td>

                                <td>{{ $siswaSmk->siswa_nama_lengkap }}</td>
                                <td>{{ $siswaSmk->siswa_NIK }}</td>
                                <td>{{ $siswaSmk->siswa_email }}</td>

                                <td>
                                    <form action="{{ route('siswa-smk.destroy',$siswaSmk->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('siswa-smk.show',$siswaSmk->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('siswa-smk.edit',$siswaSmk->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
        {!! $siswaSmks->links() !!}
    </div>
</div>
@endsection

@section('js')
<script>
    $("table").dataTable()
</script>
@endsection