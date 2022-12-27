<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use View;
use PDF;
use App\Models\{User, Invoices};
use File;
use PhpOffice\PhpWord\IOFactory;
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
        $ext =File::extension($file_name);
        // dd($ext);
        // dd($file_path);
        // return response()->file($file_path);
        if($ext == 'pdf'){
            $headers = [
                'Content-Type' => 'application/pdf',  
            ];
            
        }
        // else{
        //     $headers = [
        //         'Content-Type' => 'application/docx',  
        //     ];
        // }
        return response()->file($file_path, $headers);
       

        
    }  
    public function downloadInvoices($id) {
        $data =   Invoices::with([
            'booking' => function ($query) {
                $query->select( 'id', 'booking_date', 'price', 'first_couple_name', 'second_couple_name', 'status','ceremony_type');
            },
        ])->where('id',$id)->first();
     
    
        $pdf = PDF::loadView('pages.pdf.invoice',  ['data' => $data]);
        return $pdf->download('invoice.pdf');
    }
}