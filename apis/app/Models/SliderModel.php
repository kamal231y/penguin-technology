<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
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

    protected $table="home_slider";
    public $timestamps = true;
    // public function image(){
    //     return $this->hasMany(GalleryimageModel::class,"img_id","id");
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