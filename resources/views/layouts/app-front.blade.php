<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PPDB Al Azhar - @yield('title','Home')</title>
    <!--favicon-->
    <link rel="icon" href="@yield('icon-jenjang')" type="image/x-icon">
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

    <!--Data Tables -->
    <link href="{{asset('assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <style>
        .front-bg {
            background-image: url({{asset('assets/images/boy-01.svg')}});
            background-position: top right;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        @media only screen and (max-width: 575px) {
            .front-bg {
                background-image: none;
            }
            .logo-text { display: none; }
        }

    </style>
</head>

<body>

    <!-- Start wrapper-->
    <div id="wrapper" class="toggled">

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top gradient-scooter">
                <div class="navbar-nav mr-auto align-items-center">
                    <a href="javascript:void(0)">
                        <img src="@yield('icon-jenjang')" class="logo-icon" alt="logo icon">
                        <h5 class="logo-text">@yield('title','PPDB AL AZHAR')</h5>
                    </a>
                </div>
                {{-- <ul class="navbar-nav mr-auto align-items-center">
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
                </ul> --}}
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid front-bg">

                <!--Start Content-->

                @yield('content_header')

                <div class="row">
                    <div class="col-12 col-sm-7">
                        @yield('content')
                    </div>
                    <div class="col-12 col-sm-5">
                    </div>
                </div>


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
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
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