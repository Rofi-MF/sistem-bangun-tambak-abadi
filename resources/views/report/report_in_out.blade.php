@extends('layout.layout')
@section('content')
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                <div class="border-head">
                    <h3>Laporan @if($category == 'Masuk') Pemasukan - {{$type}} @elseif($category == 'Keluar')
                            Pengeluaran - {{$type}} @else Pemasukan & Pengeluaran @endif @if($idProject != 'all')
                            - {{$project}} @endif</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-panel col-lg-12">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="project">Proyek</label>
                        <select name="project" id="project" class="form-control input-sm">
                            <option value="{{$idProject}}">{{$project}}</option>
                            @foreach($listProject as $prj)
                                <option value="{{$prj->idProject}}">{{$prj->projectName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="project">Kategori</label>
                        <select name="category" id="category" class="form-control input-sm"
                                onchange="selectTypeTransaction()">
                            <option value="{{$valCategory}}">{{$category}}</option>
                            <option value="Masuk">Masuk</option>
                            <option value="Keluar">Keluar</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label>Tipe Transaksi</label>
                        <select class="form-control input-sm" id="type" name="type">
                            <option value="{{$idType}}">{{$type}}</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="month">Bulan</label>
                        <select name="month" id="month" class="form-control input-sm">
                            <option value="{{$month}}">{{$monthArr[$month]}}</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Augustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="form-group">
                        <label for="year">Tahun</label>
                        <select name="year" id="year" class="form-control input-sm">
                            <option value="{{$year}}">{{$year}}</option>
                            @for($x = 2020; $x <= date("Y"); $x++)
                                <option value="{{$x}}">{{$x}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <br>
                <div class="col-lg-2">
                    <table>
                        <tr>
                            <td>
                                <button class="btn btn-primary" onclick="showReportInOutByProject()">Show</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
            <div class="content-panel col-lg-12">
                @if($idProject != 'all')
                    <div class="pull-right">
                        <a href="{{url('/exportInOut').'/'.$link}}" class="btn btn-success"><i
                                class="fa fa-download"></i> Excel</a>
                        <a onclick="window.open('{{url('/printInOut').'/'.$link}}')" class="btn btn-warning"><i
                                class="fa fa-print"></i> Print</a>
                    </div>
                    <br><br><br>
                @endif
                <table id="report-table"
                       class="display table table-hover table-bordered table-striped table-condensed table-responsive dataTable">
                    <thead>
                    <tr class="bg-primary">
                        <th class="text-center" width="10px">#</th>
                        <th class="text-center" width="150px">Tanggal</th>
                        <th class="text-center" colspan="2">Deskripsi</th>
                        <th class="text-center">Satuan</th>
                        <th class="text-center">Qty</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transaction as $trans)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="text-center">{{date_format(date_create($trans->date),'d F Y')}}</td>
                            <td>{{$trans->typeName}}</td>
                            <td>{{$trans->explanation}}</td>
                            <td class="text-center">{{$trans->unit}}</td>
                            <td class="text-center">{{$trans->qty}}</td>
                            <td class="text-right">{{number_format($trans->price,0,',','.')}}</td>
                            <td class="text-right">{{number_format($trans->total,0,',','.')}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
