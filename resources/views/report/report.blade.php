@extends('layout.layout')
@section('content')
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                <div class="border-head">
                    <h3>Laporan Keseluruhan @if($idProject != 'all') - {{$project}} @endif</h3>
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
                <div class="col-lg-6">
                    <table>
                        <tr>
                            <td>
                                <button class="btn btn-primary" onclick="showReportByProject()">Show</button>
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
                        <a href="{{url('/exportKeseluruhan').'/'.$link}}" class="btn btn-success"><i
                                class="fa fa-download"></i> Excel</a>
                        <a onclick="window.open('{{url('/printKeseluruhan').'/'.$link}}')" class="btn btn-warning"><i
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
                        <th class="text-center" colspan="3">Deskripsi</th>
                        <th class="text-center">Masuk</th>
                        <th class="text-center">Keluar</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transaction as $trans)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="text-center">{{date_format(date_create($trans->date),'d F Y')}}</td>
                            <td>{{$trans->category}}</td>
                            <td>{{$trans->typeName}}</td>
                            <td>{{$trans->explanation}}</td>
                            <td class="text-right">{{number_format($trans->in,0,',','.')}}</td>
                            <td class="text-right">{{number_format($trans->out,0,',','.')}}</td>
                            <td class="text-center">
                                <button class="btn btn-info btn-xs" onclick="window.location.href='{{url('/reportDetail').'/'.encrypt($trans->idTransaction)}}'"><i class="fa fa-edit"></i> Detail</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tbody>
                    <tr>
                        <td colspan="5" class="text-center"><b>Total</b></td>
                        <td class="text-right"><b>{{number_format($total[0]->in,0,',','.')}}</b></td>
                        <td class="text-right"><b>{{number_format($total[0]->out,0,',','.')}}</b></td>
                        <td rowspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center"><b>Saldo</b></td>
                        <td colspan="2" class="text-right">
                            <b>{{number_format($total[0]->in-$total[0]->out,0,',','.')}}</b>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
