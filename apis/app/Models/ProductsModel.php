<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductsModel extends Model
{

    use SoftDeletes;

    protected $table="tour_packages";
    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'categoryId')->where('deleted_at',null);
    }
    
}