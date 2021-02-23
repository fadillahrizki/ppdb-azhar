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
        .custom-file-input:lang(en)~.custom-file-label::after {
            content: "Upload";
        }
        .loading-overlay {
            width: 100%;
            height: 100%;
            background-color: rgba(255,255,255,0.2);
            position: fixed;
            overflow: hidden;
            z-index: 2;
        }
        
        .loader{
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('http://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Phi_fenomeni.gif/50px-Phi_fenomeni.gif') 50% 50% no-repeat rgba(0,0,0,0.5);
        
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
    <div class="loading-overlay" style="display:none;">
        <div class="loader"></div>
    </div>
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
    <script>
    $('form').submit(e => {
        // event.preventDefault()
        showOverlay()
        // return false;
    })
    function showOverlay()
    {
        $('.loading-overlay').css('display','block')
    }
    </script>


    @yield('js')

</body>

</html>