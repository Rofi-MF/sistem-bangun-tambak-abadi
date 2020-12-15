<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Renew Contract</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <table width="100%" class="table">
                    <tr>
                        <td>NIP</td>
                        <td><input type="text" name="nip" id="nip" class="form-control"
                                   value="{{$employee['0']->nip}}" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="fullname" id="fullname" class="form-control"
                                   value="{{$employee['0']->fullname}}" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>Type of Contract</td>
                        <td>
                            <select name="contract" id="contract" class="form-control">
                                <option value=""></option>
                                @foreach ($contract as $con)
                                    <option value="{{$con->contract.':'.$con->contract}}">{{$con->contract}}
                                    </option>
                                @endforeach
                                '</select>
                        </td>
                    </tr>
                    <tr>
                        <td> Period</td>
                        <td><select name="period" id="period" class="form-control">
                                <option value=""> ---</option>
                                <option value="1 Bulan"> 1 Month</option>
                                <option value="3 Bulan"> 3 Month</option>
                                <option value="6 Bulan"> 6 Month</option>
                                <option value="1 Tahun"> 1 Year</option>
                                <option value="2 Tahun"> 2 Year</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td> Start Date of the Contract</td>
                        <td><input type="text" name="dateBegin" id="dateBegin" placeholder="yyyy-mm-dd"
                                   class="form-control date-picker"
                                   style="text-align:center; width:120px" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td> Salary</td>
                        <td><input type="text" class="form-control input-sm" id="salary"
                                   value="{{$salary}}"></td>
                    </tr>
                    @if ($allowance != null)
                        @foreach ($allowance as $all)
                            <tr>
                                <td>{{$all->allowance}}</td>
                                <td><input type="hidden" id="idAllowance" value="{{$all->idAllowanceRoutine}}"><input
                                        type="text" id="nomAllowance" class="form-control"
                                        value="{{number_format($all->nominal, 0, ',', '')}}"></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>No Allowance</td>
                        </tr>
                    @endif
                    <tr>
                        <td colspan="2">
                            <span class="help-block"> Note : To add allowance please add to employee details</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"> Schedule</td>
                    </tr>
                    @if ($schedule != null)
                        @foreach ($schedule as $sch)
                            <tr>
                                <td>{{$sch->day}}</td>
                                <td>{{$sch->checkIn.' - '.$sch->checkOut}}</td>
                            </tr>
                        @endforeach
                    @else
                        @for ($x = 0; $x < count($day); $x++)
                            $dx = $day[$x];
                            <tr>
                                <td>{{$dx}}</td>
                                <td>00:00:00 - 00:00:00</td>
                            </tr>
                        @endfor
                    @endif
                    <tr>
                        <td colspan="2">
                            <span class="help-block"> Note : To change is on the schedule menu</span>
                        </td>
                    </tr>
                    <tr>
                        <td> Direct Boss</td>
                        <td><input type="text" class="form-control" id="boss"
                                   value="{{$directBoss['fullname']}}" readonly></td>
                    </tr>
                    <tr>
                        <td> Created By</td>
                        <td>
                            <select name="firstParty" id="firstParty" class="form-control select">
                                <option value=""> -----</option>
                                @foreach ($hr as $row)
                                    <option value="{{$row->nip}}">{{$row->fullname}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
            <button type="button" class="btn btn-primary" onclick="contractSubmit()"> Submit</button>
        </div>
    </div>
</div>
<script>
    $(".date-picker").datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
    });
</script>
