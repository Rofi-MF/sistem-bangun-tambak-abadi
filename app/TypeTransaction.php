<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeTransaction extends Model
{
    protected $primaryKey = 'idType';
    protected $fillable = ['typeName','category'];
}
