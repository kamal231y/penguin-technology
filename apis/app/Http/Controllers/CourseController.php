<?php

namespace App\Http\Controllers;

use App\Models\CourseModel;
use App\Models\Helpers;
use Illuminate\Http\Request;
use DateTime;

class CourseController extends Controller
{
    private $helperObject;
    public function __construct(Helpers $helper)
    {
        $this->helperObject = $helper;
    }

    public function getData(Request $request)
    {
        try {

            $id = $request->header('id');
            $categoryId = $request->header('categoryId');
            // $techId = $request->header('techId');

            $data = CourseModel::with(['category'])->where(function ($query) use ($id,$categoryId) {
                if (isset($id) && $id!='') {
                    $query->where('id', $id);
                }
                if (isset($categoryId)  && $categoryId!='') {
                    $query->where('categoryId', $categoryId);
                }
                // if (isset($techId)  && $techId!='') {
                //     $query->where('techId', $techId);
                // }
            })->get();

            return $this->helperObject->sendResponse(true, "success", $data);
        } catch (\Throwable $th) {
            return $this->helperObject->failedResponse(false, $th->getMessage());
        }
    }
    
    public function getSingleData(Request $request)
    {
        try {

            $destName = $request->header('id');

            $data = CourseModel::with('category')->where(function ($query) use ($destName) {
                if(isset($destName) && $destName!=''){
                    $destName = str_replace("-"," ",$destName);
                        $query->whereRaw('lower(title) like (?)' , ["%{$destName}%"]);
                    $query->where('title',$destName);
                }
                if (isset($destName)) {
                    // $modelObject = MediaPressModel::where("id", $id)->get();
                    $query->where('title', $destName);
                }
            })->get();
            
            return $this->helperObject->sendResponse(true, "success", $data);
        } catch (\Throwable $th) {
            return $this->helperObject->failedResponse(false, $th->getMessage());
        }
    }

    public function getSingleDataAdmin(Request $request)
    {
        try {

            $id = $request->header('id');

            $data = CourseModel::with('category')->where(function ($query) use ($id) {
                if (isset($id)) {
                    // $modelObject = MediaPressModel::where("id", $id)->get();
                    $query->where('id', $id);
                }
            })->get();
            
            return $this->helperObject->sendResponse(true, "success", $data);
        } catch (\Throwable $th) {
            return $this->helperObject->failedResponse(false, $th->getMessage());
        }
    }
    
    public function saveData(Request $request)
    {
        try {

            $inputKeys = [
                "packageFile" => "required_without:id|max:1000|file|mimes:png,jpeg,jpg",
                "categoryId" => "required",
                // "techId" => "required",
                "title" => "required",
                "description" => "required",
            ];

            $itemObject = json_decode($request->itemObject,true);
            $data = $request->all();

            $data = array_merge($data,$itemObject);

            $message = [
                "packageFile.required" => "Please select an Image.",
                "packageFile.file" => "Please a proper format.",
                "packageFile.max" => "File Size Cannot be Greater than 100Kb",
                "categoryId" => "Cartegory ID is required.",
                // "techId" => "Techer ID is required.",
                "title" => "Title is required.",
                "description" => "Description is required.",
            ];

            $response = $this->helperObject->validateData($data, $inputKeys, $message);

            if ($response == 1) {
                $fromDate = date('Y-m-d', strtotime($data['fromDate']));
                $itemObject = json_decode($request->itemObject);

                $modelObject = new CourseModel();
                if (isset($request->id)) {
                    $modelObject = CourseModel::where("id", $request->id)->first();
                }else{
                    $fromDate =  date('Y-m-d', strtotime($fromDate . ' +1 day'));
                }

                if (isset($request->packageFile)) {

                    $fileUrl = $this->helperObject->uploadFiles("Course", $request->packageFile);
                    $modelObject->image_url = $fileUrl;
                }

                $modelObject->title = $itemObject->title;
                // $modelObject->amt = $itemObject->amt;
                $modelObject->link = $itemObject->link;
                $modelObject->duration = $itemObject->duration;
                $modelObject->fromDate = $fromDate;
                $modelObject->categoryId = $request['categoryId'];
                // $modelObject->techId = $request['techId'];
                $modelObject->description = $request['description'];
                $modelObject->save();

                return $this->helperObject->sendResponse(true, "Data Submitted Successfully", $modelObject);
            } else {
                return $this->helperObject->sendResponse(false, $response);
            }
        } catch (\Throwable $th) {
            return $this->helperObject->failedResponse(false, $th->getMessage());
        }
    }

    public function deleteData(Request $request, $id)
    {
        try {
            CourseModel::destroy($id);
            return $this->helperObject->sendResponse(true, "Deleted Successfully");
        } catch (\Throwable $th) {
            return $this->helperObject->failedResponse(false, $th->getMessage());
        }
    }
}
