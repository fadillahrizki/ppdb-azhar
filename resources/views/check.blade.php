<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PPDB Al Azhar - Cek Pendaftaran</title>
    <!--favicon-->
    <link rel="icon" href="{{asset('assets/images/'.strtoupper($jenjang).'.png')}}" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet" />

</head>

<body>
    <!-- Start wrapper-->
    <div id="wrapper">
        <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
            <div class="card-body">
                <div class="card-content p-2">
                    <div class="text-center">
                        <img src="{{asset('assets/images/'.strtoupper($jenjang).'.png')}}" width="100px">
                    </div>
                    <div class="text-uppercase text-center py-3">
                        <p>Form Cek Pendaftaran</p>
                        <form action="">
                            <div class="form-group">
                                <label for="">Nomor Pendaftaran</label>
                                <input type="text" name="nomor" class="form-control form-control-rounded">
                            </div>
                            <button class="btn btn-primary  shadow-primary btn-round btn-block waves-effect waves-light">Cek</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->
    </div>
    <!--wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

</body>

</html>