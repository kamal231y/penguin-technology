<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogModel extends Model
{

    use SoftDeletes;

    protected $table="blog";
    public $timestamps = true;


}