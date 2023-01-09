<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\{Locations,Addons,PartnerProducts,User,PartnerPackages,Booking};
use Illuminate\Http\Request;
use View;
use PDF;
use Illuminate\Support\Facades\Auth; 
use App\Traits\Invoices\{Methods as InvoicesMethod};
class DashboardController extends Controller
{

    /**  
     * invoices 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function invoices(Request $request){
        try{
            $user_id = Auth::user()->id;
            $bookingId =  booking::whereUserId($user_id)->where('status','!=',8)->pluck('id')->first();
            
            $data  = InvoicesMethod::getUserInvoices($bookingId);
            // dd($data);
            return view('user.invoices.all-invoices',compact(['data']));
            
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }               
    }
   /**  
     * download user invoices 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function downloadUserInvoices($bookingId,$package_id) {
       
        $data  = InvoicesMethod::getUserInvoicesPackage($bookingId,$package_id);   
        $pdf = PDF::loadView('pages.pdf.user-tax-invoice',  ['data' => $data]);
        return $pdf->download('invoice.pdf');
    }
    
}