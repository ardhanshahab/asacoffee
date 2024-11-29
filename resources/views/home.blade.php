@extends('layouts.app')

@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-secondary mx-1">
                                <i class="fa fa-box"></i>
                            </span>
                            <div class="d-flex">
                                {{-- <h4 class="mx-1 text-decorative-none"><b><a href="#">{{ count($products) }}</a></b></h4> --}}
                                <h4 class="mx-1 text-decorative-none"><b><a href="#" class="text-decoration-none">0</a></b></h4>
                                <small class="text-muted">Produk</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-success mx-1">
                                <i class="fa fa-shopping-cart"></i>
                            </span>
                            <div class="d-flex">
                                {{-- <h4 class="mx-1 text-decorative-none"><b><a href="#">{{ count($orders) }}</a></b></h4> --}}
                                <h4 class="mx-1 text-decorative-none"><b><a href="#" class="text-decoration-none">0</a></b></h4>
                                <small class="text-muted">Order</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-danger mx-1">
                                <i class="fas fa-shopping-basket"></i>
                            </span>
                            <div class="d-flex">
                                {{-- <h4 class="mx-1 text-decorative-none"><b><a href="#">@currency($total)</a></b></h4> --}}
                                <h4 class="mx-1 text-decorative-none"><b><a href="#" class="text-decoration-none">0</a></b></h4>
                                <small class="text-muted">Penjualan hari ini</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-warning mx-1">
                                <i class="fas fa-cart-arrow-down"></i>
                            </span>
                            <div class="d-flex">
                                {{-- <h4 class="mx-1 text-decorative-none"><b><a href="#">{{ $carts }}</a></b></h4> --}}
                                <h4 class="mx-1 text-decorative-none"><b><a href="#" class="text-decoration-none">0</a></b></h4>
                                <small class="text-muted">Produk terjual hari ini</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Grafik penjualan</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="min-height: 375px">
                                <canvas id="statisticsChart"></canvas>
                            </div>
                            <div id="myChartLegend"></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection
