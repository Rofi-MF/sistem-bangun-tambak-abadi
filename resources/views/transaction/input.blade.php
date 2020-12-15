@extends('layout.layout')
@section('content')
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                <div class="border-head">
                    <h3><i class="fa fa-angle-right"></i> Input Transaksi</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-panel">
                <div class="panel-body">
                    <div class="tab-content">
                        <div id="employeeContract" class="tab-pane active">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control text-center textangkatra" id="count" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-round" id="loadInput">Show</button>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group" align="right" id="saldo" style="visibility: hidden">
                                            <p style="padding: 5px;font-size: 26px">Saldo : {{number_format($total[0]->saldo,0,'','.')}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="showInput"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
