<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseCategoryModel extends Model
{

    use SoftDeletes;

    protected $table="course-category";
    public $timestamps = true;

    public function category()
    {
        return $this->hasMany(CourseModal::class, 'categoryId');
    }
}