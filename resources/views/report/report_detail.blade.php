@extends('layout.layout')
@section('content')
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                <div class="border-head">
                    <h3>Detail</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-panel col-lg-12">
                <div class="pull-right">
{{--                    <a onclick="window.open('{{url('/printInOut').'/'.$link}}')" class="btn btn-warning"><i--}}
{{--                            class="fa fa-print"></i> Print</a>--}}
                    <button class="btn btn-primary" onclick="window.history.back()"><i class="fa fa-arrow-left"></i>
                        Back
                    </button>
                </div>
                <br><br><br>
                <table id="report-table"
                       class="display table table-hover table-bordered table-striped table-condensed table-responsive dataTable">
                    <thead>
                    <tr class="bg-primary">
                        <th class="text-center" width="10px">#</th>
                        <th class="text-center" width="150px">Tanggal</th>
                        <th class="text-center" colspan="3">Deskripsi</th>
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
                            <td>{{$trans->item}}</td>
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
