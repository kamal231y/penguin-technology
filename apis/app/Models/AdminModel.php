<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminModel extends Model
{

    use SoftDeletes;

    protected $table="admin";
    public $timestamps = true;

}