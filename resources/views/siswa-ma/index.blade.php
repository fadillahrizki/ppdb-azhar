@extends('adminlte::page')

@section('title')
Siswa MA
@endsection


@section('content_header')
<div class="d-flex justify-content-between align-items-center">
    <h2>Siswa MA</h2>

    <a href="{{ route('siswa-ma.create') }}" class="btn btn-primary btn-sm" data-placement="left">
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
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswaMas as $siswaMa)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $siswaMa->siswa_nama_lengkap }}</td>
                                    <td>{{ $siswaMa->siswa_NIK }}</td>
                                    <td>{{ $siswaMa->siswa_email }}</td>


                                    <td>
                                        <form action="{{ route('siswa-ma.destroy',$siswaMa->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('siswa-ma.show',$siswaMa->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('siswa-ma.edit',$siswaMa->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
            {!! $siswaMas->links() !!}
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $("table").dataTable()
</script>
@endsection