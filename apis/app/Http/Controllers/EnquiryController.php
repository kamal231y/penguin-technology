<?php

namespace App\Http\Controllers;

use App\Models\Helpers;
use Illuminate\Http\Request;
use App\Mail\EnquiryMail;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $helperObject;
    public function __construct(Helpers $helper)
    {
        $this->helperObject = $helper;
    }

    public function sendEmail(Request $request)
    {
        try {
            $data = $request->all();
            $data['subject'] = "Enquiry";
            Mail::to(env("ADMIN_EMAIL"))->send(new EnquiryMail($data));
            return $this->helperObject->sendResponse(true, "success");
        } catch (\Throwable $th) {
            return $this->helperObject->sendResponse(false, $th->getMessage());
        }
    }
}