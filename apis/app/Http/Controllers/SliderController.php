<?php

namespace App\Http\Controllers;

use App\Models\SliderModel;
use App\Models\Helpers;
use Illuminate\Http\Request;

class SliderController extends Controller
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

            $modelObject = new SliderModel();
            if (isset($id)) {
                $modelObject = SliderModel::where("id", $id)->get();
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
            ];

            $itemObject = json_decode($request->itemObject,true);
            $data = $request->all();

            $data = array_merge($data,$itemObject);

            $message = [
                "packageFile.required" => "Please select an Image.",
                "packageFile.file" => "Please a proper format.",
                "packageFile.max" => "File Size Cannot be Greater than 1MB",
                "title" => "Title is required.",
            ];

            $response = $this->helperObject->validateData($data, $inputKeys, $message);

            if ($response == 1) {

                $itemObject = json_decode($request->itemObject);

                $modelObject = new SliderModel();
                if (isset($request->id)) {
                    $modelObject = SliderModel::where("id", $request->id)->first();
                }

                if (isset($request->packageFile)) {

                    $fileUrl = $this->helperObject->uploadFiles("Slider", $request->packageFile);
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
            SliderModel::destroy($id);
            return $this->helperObject->sendResponse(true, "Deleted Successfully");
        } catch (\Throwable $th) {
            return $this->helperObject->failedResponse(false, $th->getMessage());
        }
    }
}
