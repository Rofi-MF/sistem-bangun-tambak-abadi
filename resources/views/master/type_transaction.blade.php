@extends('layout.layout')
@section('content')
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                <div class="border-head">
                    <h3>Master Tipe Transaksi</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-panel col-lg-12" id="typeTransaction-form">
                <form action="{{url('/typeTransaction')}}" method="post">
                    @csrf
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Kategori</td>
                            <td>
                                <select name="category" id="category" class="form-control">
                                    <option value="">-----</option>
                                    <option value="Masuk">Masuk</option>
                                    <option value="Keluar">Keluar</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Tipe Transaksi</td>
                            <td><input type="text" name="typeName" id="typeName" class="form-control"/>
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
                <table id="typeTransaction-table"
                       class="display table table-hover table-bordered table-striped table-condensed table-responsive dataTable">
                    <thead>
                    <tr class="bg-primary">
                        <th width="10px">#</th>
                        <th>Kategori</th>
                        <th>Nama Tipe Transaksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($typeTransaction as $type)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$type->category}}</td>
                            <td>{{$type->typeName}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
