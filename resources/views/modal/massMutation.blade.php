<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title"><b>Mutation</b></h4>
        </div>
        <div class="modal-body">
            <div class="form-body">
                <table class="table table-striped table-bordered table-hover bg-info">
                    <thead>
                    <tr>
                        <th class="text-center">NIP</th>
                        <th class="text-center">Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($employee as $emp)
                        <input type="hidden" id="nip" value="{{$emp->nip}}">
                        <input type="hidden" id="entityOld" value="{{$emp->entity}}">
                        <input type="hidden" id="brandOld" value="{{$emp->brand}}">
                        <input type="hidden" id="divisionOld" value="{{$emp->division}}">
                        <input type="hidden" id="departmentOld" value="{{$emp->department}}">
                        <input type="hidden" id="subDepartmentOld" value="{{$emp->subDepartment}}">
                        <input type="hidden" id="regionOld" value="{{$emp->region}}">
                        <input type="hidden" id="directBossOld" value="{{$emp->directBoss}}">
                        <input type="hidden" id="subRegionOld" value="{{$emp->subRegion}}">
                        <tr>
                            <td>{{$emp->nip}}</td>
                            <td>{{$emp->fullname}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="col-md-12">
                    <div class="form-group">
                        <label><b>To</b></label>
                        <select class="form-control" id="regionNew">
                            <option value="">-----</option>
                            @foreach ($region as $reg)
                                <option value="{{$reg->idRegion}}">{{$reg->region}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="subRegionNew"></select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <select class="form-control" id="entityNew">
                            <option value="">-----</option>
                            @foreach ($entity as $ent)
                                <option value="{{$ent->idEntity}}">{{$ent->entity}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <select class="form-control" id="brandNew"></select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="divisionNew"></select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <select class="form-control" id="departmentNew"></select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="subDepartmentNew"></select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group row">
                        <select class="col-md-12 select2" id="directBossNew">
                            <option value="">-----</option>
                            @foreach ($boss as $bs)
                                <option value="{{$bs->nip}}">{{$bs->fullname}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Explanation</label>
                        <textarea class="form-control" id="explanation"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Date of Mutation</label>
                        <input type="text" class="form-control date-picker" id="date" value="">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="massMutationInsert()">Submit</button>
        </div>
    </div>
</div>
<script>
    $('.date-picker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
    });

    $('.select2').select2();

    $('#entityNew').change(function () {
        var entity = $('#entityNew').val();
        $.ajax({
            url: '{{url('/selectBrand') . '/'}}' + entity,
            type: 'GET',
            success: function (msg) {
                $('#brandNew').html(msg);
            }
        })
    });

    $('#brandNew').change(function () {
        var brand = $('#brandNew').val();
        $.ajax({
            url: '{{url('/selectDivision') . '/'}}' + brand,
            type: 'GET',
            success: function (msg) {
                $('#divisionNew').html(msg);
            }
        })
    });

    $('#divisionNew').change(function () {
        var division = $('#divisionNew').val();
        $.ajax({
            url: '{{url('/selectDepartment') . '/'}}' + division,
            type: 'GET',
            success: function (msg) {
                $('#departmentNew').html(msg);
            }
        })
    });

    $('#departmentNew').change(function () {
        var department = $('#departmentNew').val();
        $.ajax({
            url: '{{url('/selectSubDepartment') . '/'}}' + department,
            type: 'GET',
            success: function (msg) {
                $('#subDepartmentNew').html(msg);
            }
        })
    });

    $('#regionNew').change(function () {
        var region = $('#regionNew').val();
        $.ajax({
            url: '{{url('/selectSubRegion') . '/'}}' + region,
            type: 'GET',
            success: function (msg) {
                $('#subRegionNew').html(msg);
            }
        })
    });
</script>
