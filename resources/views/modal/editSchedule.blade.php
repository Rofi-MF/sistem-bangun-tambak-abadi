<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Edit Schedule</h4>
        </div>
        <div class="modal-body">
            <div id="valid"></div>
            <div class="form-group">
                <table width="100%" class="table">
                    <tr>
                        <td>Employees</td>
                        <td><input type="hidden" name="id" id="id"
                                   value="{{$schedule['0']->idSchedule}}"/><strong>{{strtoupper($schedule['0']->fullname)}}</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td><input type="text" name="date" id="date" value="{{$schedule['0']->date}}"
                                   style="padding:5px; border:solid 1px #CCCCCC; width:100px; text-align:center; background-color:#CCCCCC;"
                                   readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>Check In</td>
                        <td><input type="text" class="timepicker-24" id="checkInEdit" value="{{$schedule['0']->checkIn}}"
                                   style="padding:5px; border:solid 1px #CCCCCC; width:70px; text-align:center;"/></td>
                    </tr>
                    <tr>
                        <td>Check Out</td>
                        <td><input type="text" class="timepicker-24" id="checkOutEdit" value="{{$schedule['0']->checkOut}}"
                                   style="padding:5px; border:solid 1px #CCCCCC; width:70px; text-align:center;"/></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><select name="statusEdit" id="statusEdit"
                                    style="padding:5px; border:solid 1px #CCCCCC; width:100px;">
                                <option value="">---</option>
                                <option value="Present">Present</option>
                                <option value="Off">Off</option>
                            </select></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="updateSchedule()">Submit</button>
        </div>
    </div>
</div>
<script>
    $(".timepicker-24").timepicker({
        autoclose: true,
        showMeridian: false,
        defaultTime: '0:00'
    });
</script>
