@extends('layouts.app')

@section('title', 'Dashboard')

@section('content_header')
<!-- <h1>Dashboard</h1> -->
@stop

@section('content')
<div class="row mt-3">
    <div class="col-12 col-lg-4 col-xl-2">
        <div class="card border-info border-left-sm">
            <div class="card-body">
                <div class="media">
                    <div class="media-body text-left">
                        <h4 class="text-info">{{$siswaRa}}</h4>
                        <span>Total Siswa RA</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xl-2">
        <div class="card border-danger border-left-sm">
            <div class="card-body">
                <div class="media">
                    <div class="media-body text-left">
                        <h4 class="text-danger">{{$siswaMts}}</h4>
                        <span>Total Siswa MTS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xl-2">
        <div class="card border-success border-left-sm">
            <div class="card-body">
                <div class="media">
                    <div class="media-body text-left">
                        <h4 class="text-success">{{$siswaSmp}}</h4>
                        <span>Total Siswa SMP</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xl-2">
        <div class="card border-warning border-left-sm">
            <div class="card-body">
                <div class="media">
                    <div class="media-body text-left">
                        <h4 class="text-warning">{{$siswaSma}}</h4>
                        <span>Total Siswa SMA</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xl-2">
        <div class="card border-dark border-left-sm">
            <div class="card-body">
                <div class="media">
                    <div class="media-body text-left">
                        <h4 class="text-dark">{{$siswaMa}}</h4>
                        <span>Total Siswa MA</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xl-2">
        <div class="card border-primary border-left-sm">
            <div class="card-body">
                <div class="media">
                    <div class="media-body text-left">
                        <h4 class="text-primary">{{$siswaSmk}}</h4>
                        <span>Total Siswa SMK</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Row-->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-0">
                Recent Orders
                <div class="card-action">
                    <div class="dropdown">
                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                            <i class="icon-options"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void();">Action</a>
                            <a class="dropdown-item" href="javascript:void();">Another action</a>
                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Photo</th>
                            <th>Product ID</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Shipping</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Iphone 5</td>
                            <td><img src="https://via.placeholder.com/1000x903" class="product-img" alt="product img"></td>
                            <td>#9405822</td>
                            <td><span class="badge gradient-quepal text-white shadow">Paid</span></td>
                            <td>$ 1250.00</td>
                            <td>03 Aug 2017</td>
                            <td>
                                <div class="progress shadow" style="height: 6px;">
                                    <div class="progress-bar gradient-quepal" role="progressbar" style="width: 100%"></div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Earphone GL</td>
                            <td><img src="https://via.placeholder.com/1000x903" class="product-img" alt="product img"></td>
                            <td>#9405820</td>
                            <td><span class="badge gradient-blooker text-white shadow">Pending</span></td>
                            <td>$ 1500.00</td>
                            <td>03 Aug 2017</td>
                            <td>
                                <div class="progress shadow" style="height: 6px;">
                                    <div class="progress-bar gradient-blooker" role="progressbar" style="width: 60%"></div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>HD Hand Camera</td>
                            <td><img src="https://via.placeholder.com/1000x903" class="product-img" alt="product img"></td>
                            <td>#9405830</td>
                            <td><span class="badge gradient-bloody text-white shadow">Failed</span></td>
                            <td>$ 1400.00</td>
                            <td>03 Aug 2017</td>
                            <td>
                                <div class="progress shadow" style="height: 6px;">
                                    <div class="progress-bar gradient-bloody" role="progressbar" style="width: 70%"></div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Clasic Shoes</td>
                            <td><img src="https://via.placeholder.com/1000x903" class="product-img" alt="product img"></td>
                            <td>#9405825</td>
                            <td><span class="badge gradient-quepal text-white shadow">Paid</span></td>
                            <td>$ 1200.00</td>
                            <td>03 Aug 2017</td>
                            <td>
                                <div class="progress shadow" style="height: 6px;">
                                    <div class="progress-bar gradient-quepal" role="progressbar" style="width: 100%"></div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Hand Watch</td>
                            <td><img src="https://via.placeholder.com/1000x903" class="product-img" alt="product img"></td>
                            <td>#9405840</td>
                            <td><span class="badge gradient-bloody text-white shadow">Failed</span></td>
                            <td>$ 1800.00</td>
                            <td>03 Aug 2017</td>
                            <td>
                                <div class="progress shadow" style="height: 6px;">
                                    <div class="progress-bar gradient-bloody" role="progressbar" style="width: 40%"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--End Row-->
@stop