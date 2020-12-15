@extends('layout.layout')
@section('content')
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                <div class="border-head">
                    <h3>Role Setting</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-panel col-lg-12" id="role-form">
                <form action="{{url('/role')}}" method="post">
                    @csrf
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Role</td>
                            <td><input type="text" name="role" id="role" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <button class="btn btn-info btn-flat" type="submit">Add</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="content-panel col-lg-12">
                <table id="user-table"
                       class="display table table-hover table-bordered table-striped table-condensed table-responsive">
                    <thead>
                    <tr class="bg-primary">
                        <th width="10px">#</th>
                        <th>Role</th>
                        <th>Permission</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($role as $rl)
                        @php($permission = \Spatie\Permission\Models\Role::find($rl->id)->getAllPermissions())
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$rl->name}}</td>
                            <td>
                                @foreach($permission as $perm)
                                    <small>{{$perm->name.','}}</small>
                                @endforeach
                            </td>
                            <td width="100px"><button class="btn btn-xs btn-warning" onclick="rolePermission({{$rl->id}})"><i class="fa fa-gears"></i> Permission</button>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal fade" id="modal-role" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true" data-backdrop="static"></div>
    </section>
@endsection
