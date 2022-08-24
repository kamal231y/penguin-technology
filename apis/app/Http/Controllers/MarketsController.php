<?php

namespace App\Http\Controllers;

use App\Models\MarketsModel;
use App\Models\Helpers;
use Illuminate\Http\Request;

class MarketsController extends Controller
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

            $modelObject = new MarketsModel();
            if (isset($id)) {
                $modelObject = MarketsModel::where("id", $id)->get();
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
                "packageFile" => "required_without:id|max:1000|file|mimes:png,jpeg,jpg",
                "title" => "required",
                "subTitle" => "required",
                "description" => "required",
            ];

            $itemObject = json_decode($request->itemObject,true);
            $data = $request->all();

            $data = array_merge($data,$itemObject);

            $message = [
                "packageFile.required" => "Please select an Image.",
                "packageFile.file" => "Please a proper format.",
                "packageFile.max" => "File Size Cannot be Greater than 1MB",
                "title" => "Title is required.",
                "subTitle" => "Sub Title is required.",
                "description" => "Title is required.",
            ];

            $response = $this->helperObject->validateData($data, $inputKeys, $message);

            if ($response == 1) {

                $itemObject = json_decode($request->itemObject);

                $modelObject = new MarketsModel();
                if (isset($request->id)) {
                    $modelObject = MarketsModel::where("id", $request->id)->first();
                }

                if (isset($request->packageFile)) {

                    $fileUrl = $this->helperObject->uploadFiles("Markets", $request->packageFile);
                    $modelObject->image_url = $fileUrl;
                }

                $modelObject->title = $itemObject->title;
                $modelObject->subTitle = $itemObject->subTitle;
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
            MarketsModel::destroy($id);
            return $this->helperObject->sendResponse(true, "Deleted Successfully");
        } catch (\Throwable $th) {
            return $this->helperObject->failedResponse(false, $th->getMessage());
        }
    }
}
