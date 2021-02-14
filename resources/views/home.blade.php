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
                <div class="card bg-pattern-primary">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-white">{{$countSiswaRa}}</h4>
                                <span class="text-white">Total Siswa RA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-6">
                <div class="card bg-pattern-danger">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-white">{{$countSiswaMts}}</h4>
                                <span class="text-white">Total Siswa MTS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-6">
                <div class="card bg-pattern-success">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-white">{{$countSiswaSmp}}</h4>
                                <span class="text-white">Total Siswa SMP</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-6">
                <div class="card bg-pattern-warning">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-white">{{$countSiswaSma}}</h4>
                                <span class="text-white">Total Siswa SMA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-6">
                <div class="card bg-pattern-dark">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-white">{{$countSiswaMa}}</h4>
                                <span class="text-white">Total Siswa MA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-6">
                <div class="card bg-pattern-info">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-white">{{$countSiswaSmk}}</h4>
                                <span class="text-white">Total Siswa SMK</span>
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
                    <div class="card-body ">
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
                        <div class="tab-content ">
                            <div id="tab-ra" class="tab-pane active">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>NIK</th>
                                                <th>EMAIL</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!count($siswaRa))

                                            <tr>
                                                <td colspan="4" class="text-center">Tidak ada data!</td>
                                            </tr>

                                            @else

                                            @foreach($siswaRa as $siswa)
                                            <tr>
                                                <td>{{$siswa->siswa_nama_lengkap}}</td>
                                                <td>{{$siswa->siswa_NIK}}</td>
                                                <td>{{$siswa->siswa_email}}</td>
                                                <td>{{$siswa->siswa_status}}</td>
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
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!count($siswaMts))

                                            <tr>
                                                <td colspan="6" class="text-center">Tidak ada data!</td>
                                            </tr>

                                            @else

                                            @foreach($siswaMts as $siswa)
                                            <tr>
                                                <td>{{$siswa->siswa_nama_lengkap}}</td>
                                                <td>{{$siswa->siswa_NIK}}</td>
                                                <td>{{$siswa->siswa_NISN}}</td>
                                                <td>{{$siswa->siswa_email}}</td>
                                                <td>{{$siswa->siswa_no_hp}}</td>
                                                <td>{{$siswa->siswa_status}}</td>
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
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!count($siswaSmp))

                                            <tr>
                                                <td colspan="6" class="text-center">Tidak ada data!</td>
                                            </tr>

                                            @else

                                            @foreach($siswaSmp as $siswa)
                                            <tr>
                                                <td>{{$siswa->siswa_nama_lengkap}}</td>
                                                <td>{{$siswa->siswa_NIK}}</td>
                                                <td>{{$siswa->siswa_NISN}}</td>
                                                <td>{{$siswa->siswa_email}}</td>
                                                <td>{{$siswa->siswa_no_hp}}</td>
                                                <td>{{$siswa->siswa_status}}</td>
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
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!count($siswaSma))

                                            <tr>
                                                <td colspan="6" class="text-center">Tidak ada data!</td>
                                            </tr>

                                            @else

                                            @foreach($siswaSma as $siswa)
                                            <tr>
                                                <td>{{$siswa->siswa_nama_lengkap}}</td>
                                                <td>{{$siswa->siswa_NIK}}</td>
                                                <td>{{$siswa->siswa_email}}</td>
                                                <td>{{$siswa->siswa_no_hp}}</td>
                                                <td>{{$siswa->siswa_jurusan}}</td>
                                                <td>{{$siswa->siswa_status}}</td>
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
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!count($siswaMa))

                                            <tr>
                                                <td colspan="4" class="text-center">Tidak ada data!</td>
                                            </tr>

                                            @else

                                            @foreach($siswaMa as $siswa)
                                            <tr>
                                                <td>{{$siswa->siswa_nama_lengkap}}</td>
                                                <td>{{$siswa->siswa_NIK}}</td>
                                                <td>{{$siswa->siswa_email}}</td>
                                                <td>{{$siswa->siswa_status}}</td>
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
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!count($siswaSmk))

                                            <tr>
                                                <td colspan="4" class="text-center">Tidak ada data!</td>
                                            </tr>

                                            @else

                                            @foreach($siswaSmk as $siswa)
                                            <tr>
                                                <td>{{$siswa->siswa_nama_lengkap}}</td>
                                                <td>{{$siswa->siswa_NIK}}</td>
                                                <td>{{$siswa->siswa_email}}</td>
                                                <td>{{$siswa->siswa_status}}</td>
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