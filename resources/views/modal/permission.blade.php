<div class="modal-dialog">
    <div class="modal-content">
        <input type="hidden" id="id" name="id" value="">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Permission</h4>
        </div>
        <div class="modal-body">
            <form>
                <input type="hidden" name="idUser" id="idUser" value="{{$id}}">
                <div>
                    <table>
                        <tr>
                            <td><h4><b>Revoke Permission</b></h4></td>
                        </tr>
                    </table>
                </div>
                <br>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Type</th>
                        <th width="10px">Check</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($permissionActive) == 0)
                        <tr>
                            <td colspan="2" align="center">No Data</td>
                        </tr>
                    @else
                        @foreach ($permissionActive as $row)
                            <tr class="odd gradeX">
                                <td>{{$row->name}}</td>
                                <td align="center"><input type="checkbox" class="input-small" id="permissionRevoke"
                                                          value="{{$row->name}}"></td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <table border="1" width="100%">
                    <tr>
                        <td></td>
                    </tr>
                </table>
                <br>
                <div>
                    <table>
                        <tr>
                            <td><h4><b>Give Permission</b></h4></td>
                        </tr>
                    </table>
                </div>
                <br>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Permission</th>
                        <th width="10px">Check</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($permissionNotActive) == 0)
                        <tr>
                            <td colspan="2" align="center">No Data</td>
                        </tr>
                    @else
                        @foreach ($permissionNotActive as $raw)
                            <tr class="odd gradeX">
                                <td>{{$raw->name}}</td>
                                <td align="center"><input type="checkbox" class="input-small" id="permissionGive"
                                                          value="{{$raw->name}}"></td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="givePermission()">Give</button>
            <button type="button" class="btn btn-danger" onclick="revokePermission()">Revoke</button>
        </div>
    </div>
</div>
