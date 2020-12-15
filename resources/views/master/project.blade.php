@extends('layout.layout')
@section('content')
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                <div class="border-head">
                    <h3>Master Proyek</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-panel col-lg-12" id="project-form">
                <form action="{{url('/project')}}" method="post">
                    @csrf
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Nama Proyek</td>
                            <td><input type="text" name="project" id="project" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>Inisial</td>
                            <td><input type="text" name="inisial" id="inisial" class="form-control" maxlength="3"/>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <button class="btn btn-info btn-flat" type="submit">Submit
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="content-panel col-lg-12">
                <table id="project-table"
                       class="display table table-hover table-bordered table-striped table-condensed table-responsive">
                    <thead>
                    <tr class="bg-primary">
                        <th width="10px">#</th>
                        <th>Nama Proyek</th>
                        <th>Inisial</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($project as $prj)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$prj->projectName}}</td>
                            <td>{{$prj->initial}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
