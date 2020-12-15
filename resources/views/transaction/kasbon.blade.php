@extends('layout.layout')
@section('content')
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                <div class="border-head">
                    <h3>Kasbon</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-panel col-lg-12">
                <table id="report-table"
                       class="display table table-hover table-bordered table-striped table-condensed table-responsive dataTable">
                    <thead>
                    <tr class="bg-primary">
                        <th class="text-center" width="10px">#</th>
                        <th class="text-center" width="150px">Tanggal</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">Masuk</th>
                        <th class="text-center">Keluar</th>
                        <th class="text-center" width="100px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transaction as $trans)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="text-center">{{date_format(date_create($trans->date),'d F Y')}}</td>
                            <td>{{$trans->explanation}}</td>
                            <td class="text-right">{{number_format($trans->in,0,',','.')}}</td>
                            <td class="text-right">{{number_format($trans->out,0,',','.')}}</td>
                            <td class="text-center">
                                @if ($trans->in == 0)
                                    <button class="btn btn-info btn-xs" onclick="modalBayar('{{$trans->idTransaction}}','{{number_format($trans->out,0,',','')}}')">Bayar</button>
                                @else
                                    <button class="btn btn-success btn-xs" disabled>Lunas</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="modal fade" id="modal-bayar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <input type="hidden" id="id" name="id" value="">
                    <input type="hidden" id="bayar" name="bayar" value="">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nominal</label>
                            <input type="text" name="nominal" id="nominal" class="form-control textrp text-right">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" onclick="pembayaran()">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
