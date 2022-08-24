<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BannerImageModel extends Model
{

    use SoftDeletes;

    protected $table="banner_img";
    public $timestamps = true;

}