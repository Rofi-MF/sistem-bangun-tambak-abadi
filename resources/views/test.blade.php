@extends('layout.layout')
@section('content')
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                <div class="border-head">
                    <h3><i class="fa fa-angle-right"></i> Employee Contract</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-panel">
                <div class="panel-body">
                    <div class="tab-content">
                        <div id="test" class="tab-pane active">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table id="test-table"
                                           class="display table table-hover table-bordered table-striped table-condensed table-responsive dataTable">
                                        <thead>
                                        <tr class="bg-primary">
                                            <th width="10px">#</th>
                                            <th>Employee</th>
                                            <th>Department</th>
                                            <th>Status</th>
                                            <th>Contract Number</th>
                                            <th>Beginning of the Contract</th>
                                            <th>End of Contract</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($employee as $emp)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$emp->nip}}<br><strong>{{$emp->fullname}}</strong></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <br>
                                    Halaman : {{ $employee->currentPage() }} <br/>
                                    Jumlah Data : {{ $employee->total() }} <br/>
                                    Data Per Halaman : {{ $employee->perPage() }} <br/>
                                    {{$employee->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--Modal Create Contract--}}
        <div class="modal fade" id="modal-create-contract" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true" data-backdrop="static"></div>
    </section>
@endsection
