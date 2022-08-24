<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    private $helperObject;
    public function __construct(Helpers $helper)
    {
        $this->helperObject = $helper;
    }

    public function login(Request $request, AdminModel $modelObject)
    {
        $inputKeys = ["username" => "required", "password" => "required"];
        $data = $request->all();
        $response = $this->helperObject->validateData($data, $inputKeys);
        if ($response == 1) {
            $object = $modelObject->where('email', $data['username'])->first();
            if (isset($object)) {
                $password = Crypt::decrypt($object->password);
                if($password == $data['password']){
                    return $this->helperObject->sendResponse(true, "success", $object);
                }
                return $this->helperObject->sendResponse(false, "Invalid Credentials");
            } else {
                return $this->helperObject->sendResponse(false, "Invalid Credentials");
            }
        } else {
            return $this->helperObject->sendResponse(false, $response);
        }
    }

    public function changePassword(Request $request)
    {
        $inputKeys = [ "password" => "required", "newPassword" => "required|min:6"];
        $message = ["password.required" => "Password is required","newPassword.required" => "New Password is required"];
        $data = $request->all();
        $response = $this->helperObject->validateData($data, $inputKeys, $message);
        if ($response == 1) {
            $object = AdminModel::first();
            $password = Crypt::decrypt($object->password);
            if($password==$request->password){
                $object->password = Crypt::encrypt($data['newPassword']);
                $object->save();
                return $this->helperObject->sendResponse(true, "Password Changed.", $object);
            }else{
                return $this->helperObject->sendResponse(false, "Please provide correct password.");
            }
        } else {
            return $this->helperObject->sendResponse(false, $response);
        }
    }
}
