<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryModel extends Model
{

    use SoftDeletes;

    protected $table="category";
    public $timestamps = true;

    public function category()
    {
        return $this->hasMany(TourPackagesModal::class, 'categoryId');
    }
}