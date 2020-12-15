<?php

namespace App\Http\Controllers;


use App\Exports\TransactionDetailExport;
use App\Exports\TransactionExport;
use App\Project;
use App\Transaction;
use App\TransactionDetail;
use App\TypeTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Maatwebsite\Excel\Facades\Excel;
use PhpParser\Node\Expr\New_;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\DataTablest;
use Intervention\Image\Facades\Image;
use function Symfony\Component\String\s;

class ReportController extends Controller
{
    public function index($project = '', $month = '', $year = '')
    {
        $data['listProject'] = Project::all();
        $data['monthArr'] = array('01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Augustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');
        if ($project == 'all' || $project == '') {
            $data['idProject'] = 'all';
            $data['project'] = '-----';
            if ($month != '' && $year != '') {
                $data['month'] = $month;
                $data['year'] = $year;
            } else {
                $data['month'] = date('m');
                $data['year'] = date('Y');
            }
            $data['transaction'] = Transaction::join('type_transactions', 'transactions.idType', '=', 'type_transactions.idType')->whereMonth('date', $data['month'])->whereYear('date', $data['year'])->get();
            $data['total'] = Transaction::select(DB::raw('SUM(`in`) AS `in`,SUM(`out`) AS `out`'))->whereMonth('date', $data['month'])->whereYear('date', $data['year'])->get();
            $data['link'] = $data['idProject'] . '/' . $data['month'] . '/' . $data['year'];
        } else {
            $getProject = Project::find($project);
            $data['idProject'] = $getProject->idProject;
            $data['project'] = $getProject->projectName;
            $data['month'] = $month;
            $data['year'] = $year;
            $data['transaction'] = Transaction::join('type_transactions', 'transactions.idType', '=', 'type_transactions.idType')->where('idProject', $project)->whereMonth('date', $data['month'])->whereYear('date', $data['year'])->get();
            $data['total'] = Transaction::select(DB::raw('SUM(`in`) AS `in`,SUM(`out`) AS `out`'))->where('idProject', $project)->whereMonth('date', $data['month'])->whereYear('date', $data['year'])->get();
            $data['link'] = $data['idProject'] . '/' . $data['month'] . '/' . $data['year'];
        }
        return view('report.report', $data);
    }

    public function reportDetail($id)
    {
        $data['transaction'] = TransactionDetail::select('transactions.date', 'type_transactions.typeName', 'transactions.explanation', 'transaction_details.item', 'transaction_details.unit', 'transaction_details.qty', 'transaction_details.price', 'transaction_details.total')->join('transactions', 'transactions.idTransaction', '=', 'transaction_details.idTransaction')->join('type_transactions', 'transactions.idType', '=', 'type_transactions.idType')->where('transaction_details.idTransaction', decrypt($id))->get();
        return view('report.report_detail', $data);
    }

    public function exportKeseluruhan($project, $month, $year)
    {
        $prj = Project::find($project);
        return Excel::download(new TransactionExport($year, $month, $project), 'report_keseluruhan_' . $prj->projectName . '_' . $this->getMonth($month) . '_' . $year . '.xls');
    }

    public function printKeseluruhan($project, $month, $year)
    {
        $data['transaction'] = Transaction::join('type_transactions', 'transactions.idType', '=', 'type_transactions.idType')->whereYear('date', $year)->whereMonth('date', $month)->where('idProject', $project)->get();
        $data['total'] = Transaction::select(DB::raw('SUM(`in`) AS `in`,SUM(`out`) AS `out`'))->where('idProject', $project)->whereMonth('date', $month)->whereYear('date', $year)->get();
        $data['project'] = Project::find($project);
        $data['month'] = $this->getMonth($month);
        $data['year'] = $year;
        return view('print.report', $data);
    }

    public function inout($project = '', $category = '', $type = '', $month = '', $year = '')
    {
        $data['listProject'] = Project::all();
        $data['monthArr'] = array('01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Augustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');
        if ($project == 'all' || $project == '') {
            $data['idProject'] = 'all';
            $data['project'] = '-----';
            $data['valCategory'] = '';
            $data['category'] = '-----';
            $data['idType'] = '';
            $data['type'] = '-----';
            if ($month != '' && $year != '') {
                $data['month'] = $month;
                $data['year'] = $year;
            } else {
                $data['month'] = date('m');
                $data['year'] = date('Y');
            }
            $data['transaction'] = TransactionDetail::select('transactions.date', 'type_transactions.typeName', 'transactions.explanation', 'transaction_details.unit', 'transaction_details.qty', 'transaction_details.price', 'transaction_details.total')->join('transactions', 'transactions.idTransaction', '=', 'transaction_details.idTransaction')->join('type_transactions', 'transactions.idType', '=', 'type_transactions.idType')->whereMonth('transactions.date', $data['month'])->whereYear('transactions.date', $data['year'])->get();
            $data['link'] = $data['idProject'] . '/' . $data['category'] . '/' . $data['idType'] . '/' . $data['month'] . '/' . $data['year'];
        } else {
            $getProject = Project::find($project);
            $getType = TypeTransaction::find($type);
            $data['idProject'] = $getProject->idProject;
            $data['project'] = $getProject->projectName;
            $data['valCategory'] = $category;
            $data['category'] = $category;
            $data['idType'] = $getType->idType;
            $data['type'] = $getType->typeName;
            $data['month'] = $month;
            $data['year'] = $year;
            $data['transaction'] = TransactionDetail::select('transactions.date', 'type_transactions.typeName', 'transactions.explanation', 'transaction_details.unit', 'transaction_details.qty', 'transaction_details.price', 'transaction_details.total')->join('transactions', 'transactions.idTransaction', '=', 'transaction_details.idTransaction')->join('type_transactions', 'transactions.idType', '=', 'type_transactions.idType')->where('transactions.idProject', $project)->where('transactions.idType', $type)->whereMonth('transactions.date', $data['month'])->whereYear('transactions.date', $data['year'])->get();
            $data['link'] = $data['idProject'] . '/' . $data['category'] . '/' . $data['idType'] . '/' . $data['month'] . '/' . $data['year'];
        }
        return view('report.report_in_out', $data);
    }

    public function exportInOut($project, $category, $type, $month, $year)
    {
        $prj = Project::find($project);
        $typeTrans = TypeTransaction::find($type);
        return Excel::download(new TransactionDetailExport($year, $month, $project, $type, $category), 'report_' . $typeTrans->typeName . '_' . $prj->projectName . '_' . $this->getMonth($month) . '_' . $year . '.xls');
    }

    public function printInOut($project, $category, $type, $month, $year)
    {
        $data['transaction'] = TransactionDetail::select('transactions.date', 'type_transactions.typeName', 'transactions.explanation', 'transaction_details.unit', 'transaction_details.qty', 'transaction_details.price', 'transaction_details.total')->join('transactions', 'transactions.idTransaction', '=', 'transaction_details.idTransaction')->join('type_transactions', 'transactions.idType', '=', 'type_transactions.idType')->where('transactions.idProject', $project)->where('transactions.idType', $type)->whereMonth('transactions.date', $month)->whereYear('transactions.date', $year)->get();
        $data['project'] = Project::find($project);
        $data['category'] = $category;
        $data['type'] = TypeTransaction::find($type);
        $data['month'] = $this->getMonth($month);
        $data['year'] = $year;
        return view('print.report_in_out', $data);
    }

    public function getMonth($bulan)
    {
        switch ($bulan) {
            case '01':
                return "Januari";
                break;
            case '02':
                return "Februari";
                break;
            case '03':
                return "Maret";
                break;
            case '04':
                return "April";
                break;
            case '05':
                return "Mei";
                break;
            case '06':
                return "Juni";
                break;
            case '07':
                return "Juli";
                break;
            case '08':
                return "Agustus";
                break;
            case '09':
                return "September";
                break;
            case '10':
                return "Oktober";
                break;
            case '11':
                return "November";
                break;
            case '12':
                return "Desember";
                break;
        }
    }
}
