<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title"><b>Mutation</b></h4>
        </div>
        <div class="modal-body">
            <div class="form-body">
                <input type="hidden" id="nip" value="{{$employee['0']->nip}}">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" value="{{$employee['0']->fullname}}" disabled>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>From</label>
                        <input type="text" id="regionOld" class="form-control" value="{{$employee['0']->region}}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" id="subRegionOld" class="form-control" value="{{$employee['0']->subRegion}}"
                               disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" id="entityOld" class="form-control" value="{{$employee['0']->entity}}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" id="brandOld" class="form-control" value="{{$employee['0']->brand}}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" id="divisionOld" class="form-control" value="{{$employee['0']->division}}"
                               disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" id="departmentOld" class="form-control"
                               value="{{$employee['0']->department}}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" id="subDepartmentOld" class="form-control"
                               value="{{$employee['0']->subDepartment}}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" id="directBossOld" class="form-control"
                               value="{{$employee['0']->directBoss}}"
                               disabled>
                    </div>
                </div>
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
            <button type="button" class="btn btn-primary" onclick="mutationInsert()">Submit</button>
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
