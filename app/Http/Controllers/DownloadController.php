<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use View;

class DownloadController extends Controller
{
    /**
     * download the specified file in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\download  $booking
     * @return \Illuminate\Http\Response
    * */
   
    public function downloadDocument($file_name) {
        $file_path = public_path('uploads/documents/user/'.$file_name);
        return response()->download($file_path);
    }
    public function viewDocument($file_name) {
        $file_path = public_path('uploads/documents/user/'.$file_name);
        return response()->file($file_path);
    }  
}