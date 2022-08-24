<?php

namespace App\Http\Controllers;

use App\Models\BannerImageModel;
use App\Models\Helpers;
use Illuminate\Http\Request;

class BannerImageController extends Controller
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

            $modelObject = new BannerImageModel();
            if (isset($id)) {
                $modelObject = BannerImageModel::where("id", $id)->get();
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
                "bannerFile" => "required_without:id|max:100|file|mimes:png,jpeg,jpg"
            ];

            $data = $request->all();

            $message = [
                "bannerFile.required" => "Please select an Image.",
                "bannerFile.max" => "File Size Cannot be Greater than 100Kb",
                "bannerFile.file" => "Please a proper format."
            ];

            $response = $this->helperObject->validateData($data, $inputKeys, $message);

            if ($response == 1) {

                $modelObject = new BannerImageModel();
                if (isset($request->id)) {
                    $modelObject = BannerImageModel::where("id", $request->id)->first();
                }

                $fileUrl = $this->helperObject->uploadFiles("Banner-Img", $request->bannerFile);
                $modelObject->image_url = $fileUrl;

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
            BannerImageModel::destroy($id);
            return $this->helperObject->sendResponse(true, "success");
        } catch (\Throwable $th) {
            return $this->helperObject->failedResponse(false, $th->getMessage());
        }
    }
}
