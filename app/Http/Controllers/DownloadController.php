<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use View;
use PDF;
use App\Models\{User, Invoices};

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
    public function downloadInvoices($id) {
        // echo $id;die;
        $data =   Invoices::with([
            'booking' => function ($query) {
                $query->select( 'id', 'booking_date', 'price', 'first_couple_name', 'second_couple_name', 'status');
            },
        ])->where('id',$id)->get()->toArray();
        $pdf = PDF::loadView('pages.pdf.invoice', $data);
        return $pdf->download('invoice.pdf');
    }
}