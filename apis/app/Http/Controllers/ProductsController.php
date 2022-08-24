<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use App\Models\Helpers;
use Illuminate\Http\Request;

class ProductsController extends Controller
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

            $data = ProductsModel::with(['category' ])->where(function ($query) use ($id,$categoryId) {
                if (isset($id) && $id!='') {
                    $query->where('id', $id);
                }
                if (isset($categoryId)  && $categoryId!='') {
                    $query->where('categoryId', $categoryId);
                }
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

            $data = ProductsModel::with('category')->where(function ($query) use ($destName) {
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

            $data = ProductsModel::with('category')->where(function ($query) use ($id) {
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
                "categoryId" => "Cartegory Id is required.",
                "title" => "Title is required.",
                "description" => "Description is required.",
            ];

            $response = $this->helperObject->validateData($data, $inputKeys, $message);

            if ($response == 1) {

                $itemObject = json_decode($request->itemObject);

                $modelObject = new ProductsModel();
                if (isset($request->id)) {
                    $modelObject = ProductsModel::where("id", $request->id)->first();
                }

                if (isset($request->packageFile)) {

                    $fileUrl = $this->helperObject->uploadFiles("TourPackage", $request->packageFile);
                    $modelObject->image_url = $fileUrl;
                }

                $modelObject->title = $itemObject->title;
                $modelObject->categoryId = $request['categoryId'];
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
            ProductsModel::destroy($id);
            return $this->helperObject->sendResponse(true, "Deleted Successfully");
        } catch (\Throwable $th) {
            return $this->helperObject->failedResponse(false, $th->getMessage());
        }
    }
}
