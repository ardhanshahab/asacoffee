@extends('layouts.app')

@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-secondary mr-3">
                                <i class="fa fa-box"></i>
                            </span>
                            <div>
                                {{-- <h5 class="mb-1"><b><a href="#">{{ count($products) }}</a></b></h5> --}}
                                <small class="text-muted">Produk</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-success mr-3">
                                <i class="fa fa-shopping-cart"></i>
                            </span>
                            <div>
                                {{-- <h5 class="mb-1"><b><a href="#">{{ count($orders) }}</a></b></h5> --}}
                                <small class="text-muted">Order</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-danger mr-3">
                                <i class="fas fa-shopping-basket"></i>
                            </span>
                            <div>
                                {{-- <h5 class="mb-1"><b><a href="#">@currency($total)</a></b></h5> --}}
                                <small class="text-muted">Penjualan hari ini</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-warning mr-3">
                                <i class="fas fa-cart-arrow-down"></i>
                            </span>
                            <div>
                                {{-- <h5 class="mb-1"><b><a href="#">{{ $carts }}</a></b></h5> --}}
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
