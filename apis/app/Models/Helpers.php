<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
class Helpers extends Model
{

    public function sendResponse($status, $msg, $datalist = [], $pages = [], $param_2 = null)
    {
        return response()->json(['status' => $status, 'message' => $msg, 'datalist' => $datalist,"pages"=>$pages]);
    }

    public function failedResponse($status, $msg, $datalist = [])
    {
        return response()->json(['status' => $status, 'message' => $msg, 'datalist' => $datalist],500);
    }

    public function pagination($take, $skip, $totalNumbers, $pageCount)
    {
        $pages = [];
        $last_limit = ceil($totalNumbers / $take);
        $page_limit = $pageCount;
        $reduce = $page_limit - 4;
            $currentPage = ($skip / $take);

        if ($last_limit < $page_limit) {
            for ($i = 1; $i <= $last_limit; $i++) {
                if (!((round($i*$take,-1)-$take) > $totalNumbers)) {                            
                    array_push($pages, $i);
                }
            }
        }

        if ($last_limit >= $page_limit) {

            $startingPage = 0;
            $lastPage = 0;
            $pageDiffrence = $last_limit - $currentPage;
            if ($pageDiffrence < $pageCount && $currentPage >= $pageCount) {
                $startingPage = $currentPage - 3;
                for ($i = $startingPage; $i <= $last_limit; $i++) {
                    if (!((round($i*$take,-1)-$take) > $totalNumbers)) {                            
                        array_push($pages, $i);
                    }
                }
            } else {
                $startingPage = $currentPage - $reduce;
                $lastPage = $currentPage + $reduce;

                if ($currentPage >= ($page_limit - 1) && $pageDiffrence != 1) {
                    for ($i = $startingPage; $i <= $lastPage; $i++) {
                        if (!((round($i*$take,-1)-$take)> $totalNumbers)) {                            
                            array_push($pages, $i);
                        }

                    }
                } else {
                    for ($i = 1; $i <= $page_limit; $i++) {
                        if (!(  (round($i*$take,-1)-$take) > $totalNumbers)) {                            
                            array_push($pages, $i);
                        }
                    }
                }
            }
        }
        return $pages;
    }

    public function uploadFiles($targetDir, $file, $fileName = null)
    {
        Storage::makeDirectory($targetDir); //this function creates a full path directory according to filesystem driver
        if ($fileName == null) {
            $path = $file->store($targetDir); //this will upload the file in given direcory with auto unique generate name
        } else {
            $path = $file->storeAs($targetDir, $fileName); //this is same with store, but accept a file name
        }
        return $path;
    }

    public function validateData($data, $keys, $msg = [])
    {
        $validator = Validator::make($data, $keys, $msg);
        if ($validator->fails()) {
            $messages = $validator->errors();
            return $messages->first();
        } else {
            return 1;
        }
    }

}
