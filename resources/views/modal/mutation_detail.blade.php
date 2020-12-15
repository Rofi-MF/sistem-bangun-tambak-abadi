<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title"><b>Mutation</b></h4>
        </div>
        <div class="modal-body">
            <div class="form-body">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" value="{{$detail['0']->fullname}}" disabled>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>From</label>
                        <input type="text" class="form-control" value="{{$detail['0']->regionOld}}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$detail['0']->subRegionOld}}"
                               disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$detail['0']->entityOld}}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$detail['0']->brandOld}}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$detail['0']->divisionOld}}"
                               disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$detail['0']->departmentOld}}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$detail['0']->subDepartmentOld}}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$detail['0']->directBossOld}}"
                               disabled>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>From</label>
                        <input type="text" class="form-control" value="{{$detail['0']->region}}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$detail['0']->subRegion}}"
                               disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$detail['0']->entity}}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$detail['0']->brand}}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$detail['0']->division}}"
                               disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$detail['0']->department}}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$detail['0']->subDepartment}}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$detail['0']->directBoss}}"
                               disabled>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Explanation</label>
                        <textarea class="form-control" disabled>{{$detail['0']->explanation}}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Date of Mutation</label>
                        <input type="text" class="form-control date-picker" value="{{$detail['0']->date}}" disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>

