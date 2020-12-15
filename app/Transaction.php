<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Transaction extends Model
{
    protected $primaryKey = 'idTransaction';
    protected $keyType = 'string';
    protected $fillable = ['idTransaction','idProject','idCategory','idType','date','in','out','explanation'];

    public function getTransCode(){
        $combination = date("Ymd");
        $no = Transaction::select(DB::raw('COUNT(idTransaction) AS urut'))
            ->where('idTransaction', 'LIKE', $combination . '%')
            ->first();

        if ($no->urut == 0) {
            $zero = '000';
            $sequence = '1';
        } elseif ($no->urut < 9) {
            $zero = '000';
            $sequence = $no->urut + 1;
        } elseif ($no->urut < 99) {
            $zero = '00';
            $sequence = $no->urut + 1;
        } elseif ($no->urut < 999) {
            $zero = '0';
            $sequence = $no->urut + 1;
        } elseif ($no->urut < 9999) {
            $zero = '';
            $sequence = $no->urut + 1;
        }
        return $code = "$combination$zero$sequence";
    }
}
