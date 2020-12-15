<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $primaryKey = 'idDetail';
    protected $fillable = ['idTransaction','item','unit','qty','price','explanation'];
}
