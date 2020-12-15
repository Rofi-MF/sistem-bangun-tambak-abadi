<?php

namespace App\Exports;

use App\Http\Controllers\ReportController;
use App\Project;
use App\Transaction;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;

class TransactionExport implements FromView
{
    public function __construct(int $year, int $month, int $project)
    {
        $this->year = $year;
        $this->month = $month;
        $this->project = $project;
    }

    public function view(): View
    {
        $get = new ReportController;
        $data['project'] = Project::find($this->project);
        $data['month'] = $get->getMonth($this->month);
        $data['year'] = $this->year;
        $data['transaction'] = Transaction::whereYear('date', $this->year)->whereMonth('date', $this->month)->where('idProject', $this->project)->get();
        $data['total'] = Transaction::select(DB::raw('SUM(`in`) AS `in`,SUM(`out`) AS `out`'))->where('idProject', $this->project)->whereMonth('date', $this->month)->whereYear('date', $this->year)->get();
        return view('export.report', $data);
    }
}
