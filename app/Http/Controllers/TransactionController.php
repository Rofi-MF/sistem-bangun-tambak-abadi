<?php

namespace App\Http\Controllers;


use App\Project;
use App\Transaction;
use App\TransactionDetail;
use App\TypeTransaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use PhpParser\Node\Expr\New_;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\DataTablest;
use Intervention\Image\Facades\Image;
use function Symfony\Component\String\s;

class TransactionController extends Controller
{
    public function test($project, $category, $type, $month, $year)
    {
        $get = new ReportController;
        $data['project'] = Project::find($project);
        $data['month'] = $get->getMonth($month);
        $data['year'] = $year;
        $data['category'] = $category;
        $data['type'] = TypeTransaction::find($type);
        $data['transaction'] = TransactionDetail::select('transactions.date', 'type_transactions.typeName', 'transactions.explanation', 'transaction_details.unit', 'transaction_details.qty', 'transaction_details.price', 'transaction_details.total')
            ->join('transactions', 'transactions.idTransaction', '=', 'transaction_details.idTransaction')
            ->join('type_transactions', 'transactions.idType', '=', 'type_transactions.idType')
            ->where('transactions.idProject', $project)
            ->where('transactions.idType', $type)
            ->whereMonth('transactions.date', $month)
            ->whereYear('transactions.date', $year)->get();
        return view('export.report_in_out', $data);
    }

    public function index()
    {
        $data['total'] = Transaction::select(DB::raw('SUM(`in`) AS `in`,SUM(`out`) AS `out`'))->whereMonth('date', NOW())->whereYear('date', NOW())->get();
        return view('dashboard', $data);
    }

    public function inputTransaction()
    {
        $data['total'] = Transaction::select(DB::raw('(SUM(`in`)-SUM(`out`)) AS saldo'))->get();
        return view('transaction.input', $data);
    }

    public function loadInput(Request $request)
    {
        $project = Project::all();
        $output = '';

        $output .= '<hr>
        <div id="transaction-form">
        <form>
        <input type="hidden" name="_token" value="' . csrf_token() . '">
        <div class="col-md-4">
            <div class="form-group">
                <label>Proyek</label>
                <select class="form-control" id="project" name="project">
                    <option value="">-----</option>';
        foreach ($project as $prj) {
            $output .= '<option value="' . $prj->idProject . '">' . $prj->projectName . '</option>';
        }
        $output .= '</select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Kategori Transaksi</label>
                <select class="form-control" id="category" name="category" onchange="selectTypeTransaction()">
                    <option value="">-----</option>
                    <option value="Masuk">Masuk</option>
                    <option value="Keluar">Keluar</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Tipe Transaksi</label>
                <select class="form-control" id="type" name="type"></select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Tanggal</label>
                <input type="text" class="form-control date-picker" id="date" name="date" readonly>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Keterangan</label>
                <textarea class="form-control" id="explain" name="explain"></textarea>
            </div>
        </div>
        <table width="100%" class=" bg-info table table-responsive table-condensed table-striped table-bordered">
        <thead class="bg-primary">
            <th class="text-center">Nama</th>
            <th class="text-center">Satuan</th>
            <th class="text-center">Nominal</th>
            <th class="text-center">Qty</th>
            <th class="text-center">Sub Total</th>
        </thead>';
        for ($x = 0; $x < $request->count; $x++) {
            $output .= '
        <tr>
            <td width="500px"><input type="text" class="form-control input-sm" id="item' . $x . '" name="item' . $x . '" value=""></td>
            <td width="100px"><input type="text" class="form-control input-sm text-center" id="satuan' . $x . '" name="satuan' . $x . '" value=""></td>
            <td width="200px"><input type="text" class="form-control input-sm text-right textrp nominal" id="nominal' . $x . '" name="nominal' . $x . '" autocomplete="off" oninput="generateTotal(this.value,' . $x . ')" value="0"></td>
            <td width="70px"><input type="text" class="form-control input-sm text-center textangka" id="qty' . $x . '" name="qty' . $x . '" autocomplete="off" oninput="generateTotal(this.value,' . $x . ')" value="0"></td>
            <td width="200px"><input type="text" class="form-control input-sm text-right textrp nominal" id="subTotal' . $x . '" name="subTotal' . $x . '" autocomplete="off" value="0" readonly></td>
        </tr>';
        }
        $output .= '<input type="hidden" value="' . $x . '" name="count" id="count">
        <tr>
            <td colspan="4" class="text-center"><b>Total</b></td>
            <td><input type="text" name="grandTotal" id="grandTotal" class="form-control input-sm text-right" readonly value="0"></td>
        </tr>
        </table><br>
        <table>
        <tr>
            <td><button class="btn btn-primary btn-round" type="submit">Submit</button></td>
        </tr>
        </table>
        </form>
        </div>';
        $output .= '<script>
            $(".date-picker").datepicker({
                format: "yyyy-mm-dd",
                autoclose: true,
            });

            $(".textrp").priceFormat({
                prefix: "",
                centsSeparator: "",
                thousandsSeparator: ".",
                centsLimit: 0
            });

            $(".textangka").priceFormat({
                prefix: "",
                centsSeparator: "",
                thousandsSeparator: "",
                centsLimit: 0
            });

            $("#transaction-form").on("submit", function (e) {
                e.preventDefault();
                var form = $("#transaction-form form");
                vals = form.serialize();

                $.ajax({
                    url: "' . url('/transaction') . '",
                    type: "POST",
                    data: vals,
                    success: function (msg) {
                        if (msg == "kurang") {
                            swal({
                                title: "Maaf Saldo Tidak Mencukupi...",
                                type: "error",
                                timer: "1200"
                            })
                        } else {
                            window.location = window.location;
                            swal({
                                title: "Success",
                                type: "success",
                                timer: "1200"
                            })
                        }
                    },
                    error: function () {
                        swal({
                            title: "Oops Something Wrong...",
                            type: "error",
                            timer: "1200"
                        })
                    }
                });
            });
        </script>';

        return $output;
    }

    public function selectTypeTransaction($category)
    {
        $type = TypeTransaction::where('category', $category)->get();

        $output = '';
        $output .= '<option value="">-----</option>';
        foreach ($type as $t) {
            $output .= '<option value="' . $t->idType . '">' . $t->typeName . '</option>';
        }

        return $output;
    }

    public function transactionInsert(Request $request)
    {
        $get = new Transaction();
        $code = $get->getTransCode();
        $data = array();
        $total = Transaction::select(DB::raw('(SUM(`in`)-SUM(`out`)) AS saldo'))->get();
        if ($total[0]->saldo >= $request->grandTotal) {
            if ($request->category == 'Masuk') {
                $in = str_replace('.', '', $request->grandTotal);
                $out = 0;
            } else {
                $in = 0;
                $out = str_replace('.', '', $request->grandTotal);
            }
            $insert = Transaction::create([
                'idTransaction' => $code,
                'idProject' => $request->project,
                'idType' => $request->type,
                'date' => $request->date,
                'in' => $in,
                'out' => $out,
                'explanation' => $request->explain
            ]);

            for ($x = 0; $x < $request->count; $x++) {
                $item = 'item' . $x;
                $satuan = 'satuan' . $x;
                $qty = 'qty' . $x;
                $nominal = 'nominal' . $x;
                $subTotal = 'subTotal' . $x;
                $data[] = array(
                    'idTransaction' => $code,
                    'item' => $request->$item,
                    'unit' => $request->$satuan,
                    'qty' => $request->$qty,
                    'price' => str_replace('.', '', $request->$nominal),
                    'total' => str_replace('.', '', $request->$subTotal),
                    'created_at' => NOW(),
                    'updated_at' => NOW()
                );
            }

            if ($insert) {
                return TransactionDetail::insert($data);
            } else {
                return false;
            }
        } else {
            return 'kurang';
        }
    }

    public function kasbon()
    {
        $data['transaction'] = Transaction::where('idType', '8')->orderBy('in','ASC')->get();
        return view('transaction.kasbon', $data);
    }

    public function kasbonBayar(Request $request)
    {
        $update = Transaction::where('idTransaction',$request->id)
            ->update([
                'in' => str_replace('.', '', $request->nominal)
            ]);

        if ($update) {
            TransactionDetail::create([
                'idTransaction' => $request->id,
                'item' => 'Pembayaran Kasbon No '.$request->id,
                'unit' => '-',
                'qty' => '1',
                'price' => str_replace('.', '', $request->nominal),
                'total' => str_replace('.', '', $request->nominal)
            ]);
        }
    }
}
