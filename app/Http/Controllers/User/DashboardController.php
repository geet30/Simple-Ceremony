<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\{Locations,Addons,PartnerProducts,User,PartnerPackages,Booking};
use Illuminate\Http\Request;
use View;
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
            // dd($bookingId);
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
    public function downloadUserInvoices($id) {
        $data =   Invoices::with([
            'booking' => function ($query) {
                $query->select( 'id', 'booking_date', 'price', 'first_couple_name', 'second_couple_name', 'status','ceremony_type');
            },
        ])->where('id',$id)->first();
     
    
        $pdf = PDF::loadView('pages.pdf.invoice',  ['data' => $data]);
        return $pdf->download('invoice.pdf');
    }
    
}