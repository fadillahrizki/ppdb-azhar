<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rocker - Bootstrap4 Admin Dashboard Template</title>
    <!--favicon-->
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
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
                        <img src="assets/images/logo-icon.png">
                    </div>
                    <div class="card-title text-uppercase text-center py-3">Sign In</div>
                    <form action="{{ route('login') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="position-relative has-icon-right">
                                <label for="exampleInputEmail" class="sr-only">Email</label>
                                <input type="email" id="exampleInputEmail" name="email" class="form-control form-control-rounded {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Email">
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>

                                @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="position-relative has-icon-right">
                                <label for="exampleInputPassword" class="sr-only">Password</label>
                                <input type="password" id="exampleInputPassword" name="password" class="form-control form-control-rounded  {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password">
                                <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>

                                @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-row mr-0 ml-0">
                            <div class="form-group col-6">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember" name="remember" />
                                    <label for="remember">Remember me</label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Sign In</button>
                    </form>
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