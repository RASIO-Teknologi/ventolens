<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class User {
	public static function uploadImage(Request $request, $typeRequest, $storeTo)
    {
        $fileNameWithExt = $request->file($typeRequest)->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $fileExtension = $request->file($typeRequest)->getClientOriginalExtension();
        $fileNameToStore = preg_replace('/\s+/', '-', $fileName) . '-' . time() . '.' . $fileExtension;
        $path = $request->file($typeRequest)->move($storeTo, $fileNameToStore);
        if($fileNameToStore != null) {
            return $fileNameToStore;
        } else {
            return "noimage.png";
        }
    }
}