<?php

namespace App\Exports;

use App\Http\Controllers\ReportController;
use App\Project;
use App\TransactionDetail;
use App\TypeTransaction;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TransactionDetailExport implements FromView
{
    public function __construct(int $year, int $month, int $project, int $type, string $category)
    {
        $this->year = $year;
        $this->month = $month;
        $this->project = $project;
        $this->type = $type;
        $this->category = $category;
    }

    public function view(): View
    {
        $get = new ReportController;
        $data['project'] = Project::find($this->project);
        $data['month'] = $get->getMonth($this->month);
        $data['year'] = $this->year;
        $data['category'] = $this->category;
        $data['type'] = TypeTransaction::find($this->type);
        $data['transaction'] = TransactionDetail::select('transactions.date','type_transactions.typeName','transactions.explanation','transaction_details.unit','transaction_details.qty','transaction_details.price','transaction_details.total')->join('transactions','transactions.idTransaction','=','transaction_details.idTransaction')->join('type_transactions', 'transactions.idType', '=', 'type_transactions.idType')->where('transactions.idProject', $this->project)->where('transactions.idType', $this->type)->whereMonth('transactions.date', $this->month)->whereYear('transactions.date', $this->year)->get();
        return view('export.report_in_out', $data);
    }
}
