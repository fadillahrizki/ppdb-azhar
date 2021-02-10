@extends('layouts.app')

@section('title', 'Dashboard')

@section('content_header')
<!-- <h1>Dashboard</h1> -->
@stop

@section('content')
<div class="row mt-3">
    <div class="col-md-2">
        <div class="row">
            <div class="col-md-12 col-sm-6">
                <div class="card border-info border-left-sm">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-info">{{$countSiswaRa}}</h4>
                                <span>Total Siswa RA</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-danger border-left-sm">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-danger">{{$countSiswaMts}}</h4>
                                <span>Total Siswa MTS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-6">
                <div class="card border-success border-left-sm">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-success">{{$countSiswaSmp}}</h4>
                                <span>Total Siswa SMP</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-6">
                <div class="card border-warning border-left-sm">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-warning">{{$countSiswaSma}}</h4>
                                <span>Total Siswa SMA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-6">
                <div class="card border-dark border-left-sm">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-dark">{{$countSiswaMa}}</h4>
                                <span>Total Siswa MA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-6">
                <div class="card border-primary border-left-sm">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-primary">{{$countSiswaSmk}}</h4>
                                <span>Total Siswa SMK</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-primary">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-ra"><i class="icon-people"></i> <span>Siswa RA</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-mts"><i class="icon-people"></i> <span>Siswa MTS</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-smp"><i class="icon-people"></i> <span>Siswa SMP</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-sma"><i class="icon-people"></i> <span>Siswa SMA</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-ma"><i class="icon-people"></i> <span>Siswa MA</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-smk"><i class="icon-people"></i> <span>Siswa SMK</span></a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="tab-ra" class="tab-pane active">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>NIK</th>
                                                <th>EMAIL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!count($siswaRa))

                                            <tr>
                                                <td colspan="3" class="text-center">Tidak ada data!</td>
                                            </tr>

                                            @else

                                            @foreach($siswaRa as $siswa)
                                            <tr>
                                                <td>{{$siswa->siswa_nama_lengkap}}</td>
                                                <td>{{$siswa->siswa_NIK}}</td>
                                                <td>{{$siswa->siswa_email}}</td>
                                            </tr>
                                            @endforeach

                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="tab-mts" class="tab-pane fade">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>NIK</th>
                                                <th>NISN</th>
                                                <th>EMAIL</th>
                                                <th>No Hp</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!count($siswaMts))

                                            <tr>
                                                <td colspan="5" class="text-center">Tidak ada data!</td>
                                            </tr>

                                            @else

                                            @foreach($siswaMts as $siswa)
                                            <tr>
                                                <td>{{$siswa->siswa_nama_lengkap}}</td>
                                                <td>{{$siswa->siswa_NIK}}</td>
                                                <td>{{$siswa->siswa_NISN}}</td>
                                                <td>{{$siswa->siswa_email}}</td>
                                                <td>{{$siswa->siswa_no_hp}}</td>
                                            </tr>
                                            @endforeach

                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="tab-smp" class="tab-pane fade">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>NIK</th>
                                                <th>NISN</th>
                                                <th>EMAIL</th>
                                                <th>No Hp</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!count($siswaSmp))

                                            <tr>
                                                <td colspan="5" class="text-center">Tidak ada data!</td>
                                            </tr>

                                            @else

                                            @foreach($siswaSmp as $siswa)
                                            <tr>
                                                <td>{{$siswa->siswa_nama_lengkap}}</td>
                                                <td>{{$siswa->siswa_NIK}}</td>
                                                <td>{{$siswa->siswa_NISN}}</td>
                                                <td>{{$siswa->siswa_email}}</td>
                                                <td>{{$siswa->siswa_no_hp}}</td>
                                            </tr>
                                            @endforeach

                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="tab-sma" class="tab-pane fade">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>NIK</th>
                                                <th>EMAIL</th>
                                                <th>No Hp</th>
                                                <th>Jurusan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!count($siswaSma))

                                            <tr>
                                                <td colspan="5" class="text-center">Tidak ada data!</td>
                                            </tr>

                                            @else

                                            @foreach($siswaSma as $siswa)
                                            <tr>
                                                <td>{{$siswa->siswa_nama_lengkap}}</td>
                                                <td>{{$siswa->siswa_NIK}}</td>
                                                <td>{{$siswa->siswa_email}}</td>
                                                <td>{{$siswa->siswa_no_hp}}</td>
                                                <td>{{$siswa->siswa_jurusan}}</td>
                                            </tr>
                                            @endforeach

                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="tab-ma" class="tab-pane fade">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>NIK</th>
                                                <th>EMAIL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!count($siswaMa))

                                            <tr>
                                                <td colspan="3" class="text-center">Tidak ada data!</td>
                                            </tr>

                                            @else

                                            @foreach($siswaMa as $siswa)
                                            <tr>
                                                <td>{{$siswa->siswa_nama_lengkap}}</td>
                                                <td>{{$siswa->siswa_NIK}}</td>
                                                <td>{{$siswa->siswa_email}}</td>
                                            </tr>
                                            @endforeach

                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="tab-smk" class="tab-pane fade">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>NIK</th>
                                                <th>EMAIL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!count($siswaSmk))

                                            <tr>
                                                <td colspan="3" class="text-center">Tidak ada data!</td>
                                            </tr>

                                            @else

                                            @foreach($siswaSmk as $siswa)
                                            <tr>
                                                <td>{{$siswa->siswa_nama_lengkap}}</td>
                                                <td>{{$siswa->siswa_NIK}}</td>
                                                <td>{{$siswa->siswa_email}}</td>
                                            </tr>
                                            @endforeach

                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
<!--End Row-->

<div class="row">

</div>
<!--End Row-->
@endsection