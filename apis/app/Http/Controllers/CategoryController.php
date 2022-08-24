<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\Helpers;
use Illuminate\Http\Request;

class CategoryController extends Controller
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

            $modelObject = new CategoryModel();
            if (isset($id)) {
                $modelObject = CategoryModel::where("id", $id)->get();
            }

            $data = $modelObject->get();

            return $this->helperObject->sendResponse(true, "success", $data);
        } catch (\Throwable $th) {
            return $this->helperObject->failedResponse(false, $th->getMessage());
        }
    }

    public function saveData(Request $request)
    {
        try {

            $inputKeys = [
                "bannerFile" => "required_without:id|max:500|file|mimes:png,jpeg,jpg",
                "title" => "required"
            ];

            $itemObject = json_decode($request->itemObject,true);
            $data = $request->all();

            $data = array_merge($data,$itemObject);

            $message = [
                "bannerFile.required" => "Please select an Image.",
                "bannerFile.max" => "File Size Cannot be Greater than 500Kb",
                "bannerFile.file" => "Please a proper format.",
                "title" => "Title is required.",
            ];

            $response = $this->helperObject->validateData($data, $inputKeys, $message);

            if ($response == 1) {
                $itemObject = json_decode($request->itemObject);
                $modelObject = new CategoryModel();
                if (isset($request->id)) {
                    $modelObject = CategoryModel::where("id", $request->id)->first();
                }
                if (isset($request->bannerFile)) {
                    $fileUrl = $this->helperObject->uploadFiles("CategoryImage", $request->bannerFile);
                    $modelObject->image_url = $fileUrl;
                }

                $modelObject->title = $itemObject->title;
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
            CategoryModel::destroy($id);
            return $this->helperObject->sendResponse(true, "Deleted Successfully");
        } catch (\Throwable $th) {
            return $this->helperObject->failedResponse(false, $th->getMessage());
        }
    }
}
