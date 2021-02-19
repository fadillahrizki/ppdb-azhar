<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PPDB Azhar - @yield('title','Home')</title>
    <!--favicon-->
    <link rel="icon" href="{{asset('assets/images/MA.png')}}" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{asset('assets/css/sidebar-menu.css')}}" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />

    <!--Data Tables -->
    <link href="{{asset('assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">

    @yield('css')

</head>

<body>
    @php($user=auth()->user())
    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="/">
                    <img src="{{asset('assets/images/MA.png')}}" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">PPDB Azhar</h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li class="{{Request::is('home') ? 'active' : ''}}">
                    <a href="{{route('home')}}" class="waves-effect">
                        <i class="icon-home"></i> <span>Dashboard</span>
                    </a>
                </li>
                @if($user->hasAnyPermission(['lihat ra','tambah ra','edit ra','hapus ra','detail ra','laporan ra','kelulusan ra','super admin']))
                <li>
                    <a href="#" class="waves-effect">
                        <i class="icon-people"></i> <span>Siswa RA</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        @if($user->hasAnyPermission(['lihat ra','tambah ra','edit ra','hapus ra','detail ra','laporan ra','super admin']))
                        <li><a href="{{route('siswa-ra.index')}}"><i class="fa fa-circle-o"></i> Semua Data</a></li>
                        @endif
                        @if($user->can('kelulusan ra') || $user->can('super admin'))
                        <li><a href="{{route('siswa-ra.kelulusan')}}"><i class="fa fa-circle-o"></i> Data Kelulusan</a></li>
                        @endif
                    </ul>
                </li>
                @endif
                @if($user->hasAnyPermission(['lihat mts','tambah mts','edit mts','hapus mts','detail mts','laporan mts','kelulusan mts','super admin']))
                <li>
                    <a href="#" class="waves-effect">
                        <i class="icon-people"></i> <span>Siswa MTS</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        @if($user->hasAnyPermission(['lihat mts','tambah mts','edit mts','hapus mts','detail mts','laporan mts','super admin']))
                        <li><a href="{{route('siswa-mts.index')}}"><i class="fa fa-circle-o"></i> Semua Data</a></li>
                        @endif
                        @if($user->can('kelulusan mts') || $user->can('super admin'))
                        <li><a href="{{route('siswa-mts.kelulusan')}}"><i class="fa fa-circle-o"></i> Data Kelulusan</a></li>
                        @endif
                    </ul>
                </li>
                @endif
                @if($user->hasAnyPermission(['lihat smp','tambah smp','edit smp','hapus smp','detail smp','laporan smp','kelulusan smp','super admin']))
                <li>
                    <a href="#" class="waves-effect">
                        <i class="icon-people"></i> <span>Siswa SMP</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        @if($user->hasAnyPermission(['lihat smp','tambah smp','edit smp','hapus smp','detail smp','laporan smp','super admin']))
                        <li><a href="{{route('siswa-smp.index')}}"><i class="fa fa-circle-o"></i> Semua Data</a></li>
                        @endif
                        @if($user->can('kelulusan smp') || $user->can('super admin'))
                        <li><a href="{{route('siswa-smp.kelulusan')}}"><i class="fa fa-circle-o"></i> Data Kelulusan</a></li>
                        @endif
                    </ul>
                </li>
                @endif
                @if($user->hasAnyPermission(['lihat sma','tambah sma','edit sma','hapus sma','detail sma','laporan sma','kelulusan sma','super admin']))
                <li>
                    <a href="#" class="waves-effect">
                        <i class="icon-people"></i> <span>Siswa SMA</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        @if($user->hasAnyPermission(['lihat sma','tambah sma','edit sma','hapus sma','detail sma','laporan sma','super admin']))
                        <li><a href="{{route('siswa-sma.index')}}"><i class="fa fa-circle-o"></i> Semua Data</a></li>
                        @endif
                        @if($user->can('kelulusan sma') || $user->can('super admin'))
                        <li><a href="{{route('siswa-sma.kelulusan')}}"><i class="fa fa-circle-o"></i> Data Kelulusan</a></li>
                        @endif
                    </ul>
                </li>
                @endif
                @if($user->hasAnyPermission(['lihat ma','tambah ma','edit ma','hapus ma','detail ma','laporan ma','kelulusan ma','super admin']))
                <li>
                    <a href="#" class="waves-effect">
                        <i class="icon-people"></i> <span>Siswa MA</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        @if($user->hasAnyPermission(['lihat ma','tambah ma','edit ma','hapus ma','detail ma','laporan ma','super admin']))
                        <li><a href="{{route('siswa-ma.index')}}"><i class="fa fa-circle-o"></i> Semua Data</a></li>
                        @endif
                        @if($user->can('kelulusan ma') || $user->can('super admin'))
                        <li><a href="{{route('siswa-ma.kelulusan')}}"><i class="fa fa-circle-o"></i> Data Kelulusan</a></li>
                        @endif
                    </ul>
                </li>
                @endif
                @if($user->hasAnyPermission(['lihat smk','tambah smk','edit smk','hapus smk','detail smk','laporan smk','kelulusan smk','super admin']))
                <li>
                    <a href="#" class="waves-effect">
                        <i class="icon-people"></i> <span>Siswa SMK</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        @if($user->hasAnyPermission(['lihat smk','tambah smk','edit smk','hapus smk','detail smk','laporan smk','super admin']))
                        <li><a href="{{route('siswa-smk.index')}}"><i class="fa fa-circle-o"></i> Semua Data</a></li>
                        @endif
                        @if($user->can('kelulusan smk') || $user->can('super admin'))
                        <li><a href="{{route('siswa-smk.kelulusan')}}"><i class="fa fa-circle-o"></i> Data Kelulusan</a></li>
                        @endif
                    </ul>
                </li>
                @endif
                @if($user->hasAnyPermission(['super admin']))
                <li>
                    <a href="#" class="waves-effect">
                        <i class="icon-people"></i> <span>Pengguna</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i> Semua Data</a></li>
                    </ul>
                </li>
                @endif

            </ul>

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top gradient-scooter">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">{{Auth::user()->name ?? 'Admin'}}</h6>
                                            <p class="user-subtitle">{{Auth::user()->email ?? 'Admin'}}</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @if(config('adminlte.logout_method'))
                                    {{ method_field(config('adminlte.logout_method')) }}
                                    @endif
                                    {{ csrf_field() }}
                                </form>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-dark"><i class="icon-power mr-2"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Content-->

                @yield('content_header')

                @yield('content')

                <!--End Content-->

            </div>
            <!-- End container-fluid-->

        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2021 Development by <a href="https://hosterweb.co.id">Hosterweb</a>
                </div>
            </div>
        </footer>
        <!--End footer-->

    </div>
    <!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- simplebar js -->
    <script src="{{asset('assets/plugins/simplebar/js/simplebar.js')}}"></script>
    <!-- waves effect js -->
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <!-- sidebar-menu js -->
    <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
    <!-- Custom scripts -->
    <script src="{{asset('assets/js/app-script.js')}}"></script>

    <!-- Vector map JavaScript -->
    <script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- Chart js -->
    <script src="{{asset('assets/plugins/Chart.js/Chart.min.js')}}"></script>
    <!-- Index js -->
    <script src="{{asset('assets/js/index.js')}}"></script>


    <!--Data Tables js-->
    <script src="{{asset('assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js')}}"></script>


    @yield('js')

</body>

</html>