<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalleryModel extends Model
{

    use SoftDeletes;

    protected $table="gallery";
    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo(GalleryCategoryModel::class, 'categoryId')->where('deleted_at',null);
    }

}