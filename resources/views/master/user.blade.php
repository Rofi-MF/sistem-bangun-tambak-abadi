@extends('layout.layout')
@section('content')
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                <div class="border-head">
                    <h3>Master User</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-panel col-lg-12" id="user-form">
                <form action="{{url('/user')}}" method="post">
                    @csrf
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name" id="name" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" id="email" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username" id="username" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" id="password" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td width="250px">Role</td>
                            <td>
                                <select name="role" id="role" class="form-control">
                                    <option value="">-----</option>
                                    @foreach($role as $rl)
                                        <option
                                            value="{{$rl->name}}">{{$rl->name}}</option>
                                    @endforeach
                                </select>
                            </td>
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
                       class="display table table-hover table-bordered table-striped table-condensed table-responsive dataTable">
                    <thead>
                    <tr class="bg-primary">
                        <th width="10px">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Permission</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $usr)
                        @php($permission = \App\User::find($usr->id)->getAllPermissions())
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$usr->name_user}}</td>
                            <td>{{$usr->email}}</td>
                            <td>{{$usr->username}}</td>
                            @role('admin')
                            <td>
                                <select name="roleChange" id="roleChange" class="form-control" onchange="changeRole({{$usr->id}})">
                                    <option value="{{$usr->name}}">{{$usr->name}}</option>
                                    @foreach($role as $rl)
                                        <option
                                            value="{{$rl->name}}">{{$rl->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            @else
                            <td>{{$usr->name}}</td>
                            @endrole
                            <td>
                                @foreach($permission as $perm)
                                    <small>{{$perm->name.','}}</small>
                                @endforeach
                            </td>
                            <td width="250px">
                                <button class="btn btn-xs btn-success"><i class="fa fa-edit"></i> Edit</button>
                                <button class="btn btn-xs btn-warning" onclick="permission({{$usr->role_id,$usr->id}})"><i class="fa fa-gears"></i> Permission</button>
                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal fade" id="modal-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true" data-backdrop="static"></div>
    </section>
@endsection
