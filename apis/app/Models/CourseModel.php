<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseModel extends Model
{

    use SoftDeletes;

    protected $table="courses";
    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo(CourseCategoryModel::class, 'categoryId')->where('deleted_at',null);
    }

    public function course()
    {
        return $this->hasMany(CourseMenuModel::class, 'courseId');
    }

    // public function TeacherProfile()
    // {
    //     return $this->hasMany(CourseMenuModel::class, 'techId');
    // }
    
}