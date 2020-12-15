<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $primaryKey = 'idProject';
    protected $fillable = ['projectName','initial'];
}
