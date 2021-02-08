@extends('adminlte::page')

@section('title')
Siswa SMP
@endsection

@section('content_header')
<div class="d-flex justify-content-between align-items-center">
    <h2>Siswa SMP</h2>

    <a href="{{ route('siswa-smp.create') }}" class="btn btn-primary btn-sm" data-placement="left">
        {{ __('Create New') }}
    </a>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Nama Lengkap</th>
                                    <th>NIK</th>
                                    <th>NISN</th>
                                    <th>Email</th>
                                    <th>No Hp</th>

                                    <th></th>
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
                                        <form action="{{ route('siswa-smp.destroy',$siswaSmp->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('siswa-smp.show',$siswaSmp->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('siswa-smp.edit',$siswaSmp->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
            {!! $siswaSmps->links() !!}
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $("table").dataTable()
</script>
@endsection