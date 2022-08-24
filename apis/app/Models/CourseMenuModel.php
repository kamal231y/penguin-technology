<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseMenuModel extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','image','title'
    ];
    // we can hide any key in api
    // protected $hidden = [
    //     'rollno'
    // ];  

    protected $table="course-menu";
    public $timestamps = true;
    
    public function course()
    {
        return $this->belongsTo(CourseModel::class, 'courseId')->where('deleted_at',null);
    }

    // public function TeacherProfile()
    // {
    //     return $this->belongsTo(CourseModel::class, 'techId')->where('deleted_at',null);
    // }

    // public function deleteData($data)
    // {
        // $deletedImages = SliderModel::find($data['deletedImageIds']);
        // SliderModel::destroy($data['deletedImageIds']);
        // foreach ($deletedImages as $key => $value) {
        //     $id = explode('&', explode('=', $value->image)[1])[0];
        //     GalleryimageModel::deleteFileFromDrive($id);
        // }
    // }


  


}