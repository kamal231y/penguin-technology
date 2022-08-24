<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategoryModel;
use App\Models\Helpers;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
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

            $modelObject = new GalleryCategoryModel();
            if (isset($id)) {
                $modelObject = GalleryCategoryModel::where("id", $id)->get();
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
                // "packageFile" => "required_without:id|max:100|file|mimes:png,jpeg,jpg",
                "title" => "required",
                // "price" => "required",
            ];

            $itemObject = json_decode($request->itemObject,true);
            $data = $request->all();

            $data = array_merge($data,$itemObject);

            $message = [
                // "packageFile.required" => "Please select an Image.",
                // "packageFile.file" => "Please a proper format.",
                // "packageFile.max" => "File Size Cannot be Greater than 100Kb",
                "title" => "Title is required.",
                // "price" => "Price is required.",
            ];

            $response = $this->helperObject->validateData($data, $inputKeys, $message);

            if ($response == 1) {

                $itemObject = json_decode($request->itemObject);

                $modelObject = new GalleryCategoryModel();
                if (isset($request->id)) {
                    $modelObject = GalleryCategoryModel::where("id", $request->id)->first();
                }

                // if (isset($request->packageFile)) {

                //     $fileUrl = $this->helperObject->uploadFiles("Medical-Package", $request->packageFile);
                //     $modelObject->image_url = $fileUrl;
                // }

                // $modelObject->price = $itemObject->price;
                $modelObject->title = $itemObject->title;
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
            GalleryCategoryModel::destroy($id);
            return $this->helperObject->sendResponse(true, "success");
        } catch (\Throwable $th) {
            return $this->helperObject->failedResponse(false, $th->getMessage());
        }
    }
}
