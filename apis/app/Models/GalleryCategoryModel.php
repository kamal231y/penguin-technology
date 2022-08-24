<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalleryCategoryModel extends Model
{

    use SoftDeletes;

    protected $table="gallery_category";
    public $timestamps = true;

    public function category()
    {
        return $this->hasMany(GalleryModel::class, 'categoryId');
    }

}