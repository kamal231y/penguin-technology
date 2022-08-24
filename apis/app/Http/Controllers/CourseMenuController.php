<?php

namespace App\Http\Controllers;

use App\Models\CourseMenuModel;
use App\Models\Helpers;
use Illuminate\Http\Request;

class CourseMenuController extends Controller
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
            $courseId = $request->header('courseId');

            $data = CourseMenuModel::with(['course'])->where(function ($query) use ($id,$courseId) {
                if (isset($id) && $id!='') {
                    $query->where('id', $id);
                }
                if (isset($courseId)  && $courseId!='') {
                    $query->where('courseId', $courseId);
                }
                // if (isset($techId)  && $techId!='') {
                //     $query->where('techId', $techId);
                // }
            })->get();

            // $modelObject = new CourseMenuModel();
            // if (isset($id)) {
            //     $modelObject = CourseMenuModel::where("id", $id)->get();
            // }

            // $data = $modelObject->get();

            return $this->helperObject->sendResponse(true, "success", $data);
        } catch (\Throwable $th) {
            return $this->helperObject->failedResponse(false, $th->getMessage());
        }
    }

    public function saveData(Request $request)
    {
        try {

            $inputKeys = [
                "title" => "required",
                "description" => "required",
                "courseId" => "required",
            ];

            $itemObject = json_decode($request->itemObject,true);
            $data = $request->all();

            $data = array_merge($data,$itemObject);

            $message = [
                "title" => "Title is required.",
                "description" => "Title is required.",
                "courseId" => "Course ID is required.",
            ];

            $response = $this->helperObject->validateData($data, $inputKeys, $message);

            if ($response == 1) {

                $itemObject = json_decode($request->itemObject);

                $modelObject = new CourseMenuModel();
                if (isset($request->id)) {
                    $modelObject = CourseMenuModel::where("id", $request->id)->first();
                }

                $modelObject->title = $itemObject->title;
                $modelObject->courseId = $request['courseId'];
                $modelObject->description = $itemObject->description;
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
            CourseMenuModel::destroy($id);
            return $this->helperObject->sendResponse(true, "Deleted Successfully");
        } catch (\Throwable $th) {
            return $this->helperObject->failedResponse(false, $th->getMessage());
        }
    }
}
