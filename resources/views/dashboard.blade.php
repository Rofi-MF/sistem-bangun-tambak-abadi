@extends('layout.layout')
@section('content')
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                <h2>Selamat Datang, {{Auth()->user()->name}}</h2>
                <hr>
                <div class="row mt">
                    <!-- SERVER STATUS PANELS -->
                    <div class="col-md-4 col-sm-4 mb">
                        <div class="grey-panel">
                            <div class="grey-header">
                                <h5>MASUK</h5>
                            </div>
                            <div class="row">
                                <h2>Rp. {{number_format($total[0]->in,0,',','.')}}</h2>
                            </div>
                        </div>
                        <!-- /grey-panel -->
                    </div>
                    <!-- /col-md-4-->
                    <div class="col-md-4 col-sm-4 mb">
                        <div class="darkblue-panel">
                            <div class="darkblue-header">
                                <h5>KELUAR</h5>
                            </div>
                            <div class="row">
                                <h2 style="color: white">Rp. {{number_format($total[0]->out,0,',','.')}}</h2>
                            </div>
                        </div>
                        <!--  /darkblue panel -->
                    </div>
                    <!-- /col-md-4 -->
                    <div class="col-md-4 col-sm-4 mb">
                        <!-- REVENUE PANEL -->
                        <div class="green-panel">
                            <div class="green-header">
                                <h5>SALDO</h5>
                            </div>
                            <div class="row">
                                <h2 style="color: white">Rp. {{number_format($total[0]->in-$total[0]->out,0,',','.')}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <h4>{{date('F Y')}}</h4>--}}
            </div>
        </div>
        <div style="padding-bottom: 270px"></div>
    </section>
@endsection
