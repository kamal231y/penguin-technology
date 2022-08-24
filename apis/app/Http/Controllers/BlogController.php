<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use App\Models\Helpers;
use Illuminate\Http\Request;

class BlogController extends Controller
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

            $modelObject = new BlogModel();
            if (isset($id)) {
                $modelObject = BlogModel::where("id", $id)->get();
            }

            $data = $modelObject->get();

            return $this->helperObject->sendResponse(true, "success", $data);
        } catch (\Throwable $th) {
            return $this->helperObject->failedResponse(false, $th->getMessage());
        }
    }
    public function getSingleData(Request $request)
    {
        try {

            $id = $request->header('id');

            $data = BlogModel::where(function ($query) use ($id) {
                if (isset($id)) {
                    // $modelObject = BlogModel::where("id", $id)->get();
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
                "title" => "required",
                "name" => "required",
                "description" => "required",
                "shortDescription" => "required",
            ];

            $itemObject = json_decode($request->itemObject,true);
            $data = $request->all();

            $data = array_merge($data,$itemObject);

            $message = [
                "packageFile.required" => "Please select an Image.",
                "packageFile.file" => "Please a proper format.",
                "packageFile.max" => "File Size Cannot be Greater than 1MB",
                "title" => "Title is required.",
                "name" => "Name is required.",
                "description" => "Description is required.",
                "shortDescription" => "Short Description is required.",
            ];

            $response = $this->helperObject->validateData($data, $inputKeys, $message);

            if ($response == 1) {

                $itemObject = json_decode($request->itemObject);

                $modelObject = new BlogModel();
                if (isset($request->id)) {
                    $modelObject = BlogModel::where("id", $request->id)->first();
                }

                if (isset($request->packageFile)) {

                    $fileUrl = $this->helperObject->uploadFiles("blog", $request->packageFile);
                    $modelObject->image_url = $fileUrl;
                }

                $modelObject->title = $itemObject->title;
                $modelObject->name = $itemObject->name;
                $modelObject->shortDescription = $request['shortDescription'];
                $modelObject->description = $request['description'];
                $modelObject->save();

                return $this->helperObject->sendResponse(true, "success", $modelObject);
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
            BlogModel::destroy($id);
            return $this->helperObject->sendResponse(true, "success");
        } catch (\Throwable $th) {
            return $this->helperObject->failedResponse(false, $th->getMessage());
        }
    }
}
