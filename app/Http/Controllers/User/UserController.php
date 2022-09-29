<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\{User,Addons,Booking,UserBookingAddon};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
class UserController extends Controller
{

   /**  
     * index 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        try{
            
            $booking = Booking::marriages()->where('user_id',Auth::user()->id)->first();
           

            $bookingId =  Booking::whereUserId(Auth::user()->id)->pluck('id')->first();
            $addons = UserBookingAddon::with('packages','packages.user')->where('booking_id',$bookingId)->get();
            // booking_addons
            // dd($addons);
            return view('user.overview.index',compact(['addons','booking']));
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }        
       
    }
    /**  
     * addons
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addons(Request $request){
        try{
            $addons = Addons::products()->get()->toArray();
            return view('user.addons.listing',compact(['addons']));
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }          
    }
    /**  
     * addon detail 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addonDetail($id){
        try{
            
            $data = Addons::products()->where('id',$id)->first();
            
            return view('user.addons.details',compact(['data','id']));
           
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }   
    }
    
       /**  
     * package detail 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function packageDetail($id){
        try{
            
            $data = Addons::productPackages()->where('id',$id)->first();
            $addonid = $data->product_id;
            
            return view('user.overview.addons.package-view',compact(['data','addonid']));
           
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }   
    }
     /**
     * Show User Package Gallery
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery($id,$addonid){       
        try{
            $data = Addons::packageGallery($id)->first()->toArray();
            return view('user.addons.package-gallery',compact(['data','addonid']));
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }
    }
}
?>