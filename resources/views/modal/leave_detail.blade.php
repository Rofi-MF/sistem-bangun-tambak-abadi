<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Leave Detail</h4>
        </div>
        <div class="modal-body">
            <table width="100%" class="table">
                <tr>
                    <td>Employee</td>
                    <td>{{$name}}</td>
                </tr>
                <tr>
                    <td>Type of Leave</td>
                    <td>{{$type}}</td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>{{$date}}</td>
                </tr>
                <tr>
                    <td>Approval By</td>
                    <td>{{$approval}}</td>
                </tr>
                <tr>
                    <td>Explanation</td>
                    <td>{{$explain}}</td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
