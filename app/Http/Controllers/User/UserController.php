<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\{User,Addons,Booking,UserBookingAddon,BookingPayments,Locations};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth,Hash}; 
use Cookie;
use Validator;
use Illuminate\Support\Carbon;
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
            $user_id = Auth::user()->id;
            $booking=Booking::marriages()->where('user_id',$user_id)->first();          
            $bookingId =  Booking::whereUserId($user_id)->pluck('id')->first();
            $locations = Locations::all();
            if(isset($request->session_id) && !empty($request->session_id)){
                $cart = json_decode(Cookie::get('myCart'));  

                $addtoBookingAddon =  Booking::addtoBookingAddon($cart, $bookingId);
                $savePaymentDetail = Booking::savePaymentDetail($request->session_id, $user_id,$bookingId);
                BookingPayments::where('booking_id',$bookingId)->update(['payment_type' =>2]);
                $cookie = Cookie::queue(Cookie::forget('myCart'));
            }
            if(isset($request->reschedule_session_id) && !empty($request->reschedule_session_id)){
                // $savePaymentDetail = Booking::savePaymentDetail($request->reschedule_session_id, $user_id,$bookingId);
                // BookingPayments::where('booking_id',$bookingId)->update(['payment_type' =>3]);
            }       
            $addons = UserBookingAddon::with('packages','packages.user','packages.product')->where('booking_id',$bookingId)->get();
            return view('user.overview.index',compact(['addons','booking','locations']));
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
            // dd($data);
            
            return view('user.overview.addons.package-view',compact(['data','addonid']));
           
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }   
    }  
    /**  
     * location detail 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function locationDetail($id){
        // echo $id;die;
        try{
            
            $data = Addons::productPackages()->where('id',$id)->first();
            $addonid = $data->product_id;
            
            return view('user.overview.location.details',compact(['data','addonid']));
           
           
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
    /**
     * Show Invitation
     *
     * @return \Illuminate\Http\Response
     */
    
    public function getInvitation(){ 
        try{
            $user_id =Auth::user()->id;
            $data = Booking::with('location')->where('user_id',$user_id)->first();
            // dd($data);
           
            return view('user.overview.invitation',compact(['data','user_id']));
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }
    }
    /**
     * Get Payment page
     *
     * @return \Illuminate\Http\Response
     */
    
    public function getPay($id=null){ 
        try{
            $user_id =Auth::user()->id;
            $data = array();
            return view('user.overview.pay',compact(['data','user_id']));
        }catch (\Exception $e) {
            dd($e);
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }
    }
    /**
     * Post Payment
     *
     * @return \Illuminate\Http\Response
     */
    
    public function postPay(Request $request){ 
        try{
            if (Cookie::get('myCart')) {
                $cart = json_decode(Cookie::get('myCart'));  
                $total_fee = 0;
            
                foreach($cart as $package){
                    $total_fee += round($package->price,0);
                }
                $DOMAIN = config('env.WEBSITE');
                $success_url = $DOMAIN . '/user/overview?session_id={CHECKOUT_SESSION_ID}';
                $cancel_url = $DOMAIN . '/payment-cancel';
                $send_paramter = [
                    'name' => "cart Payment",
                    'price' => $total_fee,
                    'img' => asset('/images/loader.svg')
                    // 'img' => 'http://simpleceremoniesacc.crebos.online/images/loader.svg'
                ];
                return Booking::stripePayment($send_paramter,$success_url,$cancel_url);
              
            }
        }catch (\Exception $e) {
            dd($e);
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
        }
    }  
    
      /**
     * Get Reschedule Info
     *
     * @return \Illuminate\Http\Response
     */
    
    public function getRescheduleInfo(Request $request){
        // dd($request->all());
        try {
            $getReschedulelocationInfo = Booking::getRescheduleInfo($request->id);
            $user_id = Auth::user()->id;
            $booking=Booking::marriages()->where('user_id',$user_id)->where('status','!=',8)->first();
            $bookingDate = new \DateTime($booking->booking_date);
            $price = 0;

            if (33 - ((new \Carbon\Carbon($bookingDate, 'UTC'))->diffInDays()) < 0) {
                //"The date is older than 33 days";
                $bookedlocationId =  Booking::whereUserId($user_id)->pluck('locationId')->where('status','!=',8)->first(); 
                $getbookedLocationInfo = Booking::getRescheduleInfo($bookedlocationId); 
                $price = abs($getReschedulelocationInfo - $getbookedLocationInfo);
                
            } else{
                $price = $getReschedulelocationInfo;// date is less than 32 days
            }
            
            // $booking=Booking::marriages()->where('user_id',$user_id)->where('status','!=',8)->first();  
            // $bookingId =  Booking::whereUserId($user_id)->pluck('id')->where('status','!=',8)->first();  // will be used on reschedule post    
           

            if (!empty($getReschedulelocationInfo)) {
                return $this->successResponse($price, 'data found successfully.');
            }
            return response()->json(['status' => false, "message" => 'something went wrong']);
        } catch (\Exception $ex) {
            dd($ex);
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }

    
      /**
     * Get Reschedule Info
     *
     * @return \Illuminate\Http\Response
     */
    
    public function getReschedulePay(Request $request){
        try{
            // dd($request->all());
            // $input = $request->except('_token');         
            // $input['enquiry_date'] = date('Y-m-d');
            $user_id =Auth::user()->id;
            $data = $request->all();
            return view('user.overview.reschedule-pay',compact(['data','user_id']));
        }catch (\Exception $e) {
            dd($e);
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }
    }
       /**
     * Reschedule Payment
     *
     * @return \Illuminate\Http\Response
     */
    
    public function reschedulePay(Request $request){ 
        try{
            
            
            $data = unserialize($request->data);
            dd($data);
            $total_fee = $data['location_fee'] + $data['reschedule_fee'];
            // dd($total_fee);
            $DOMAIN = config('env.WEBSITE');
            $success_url = $DOMAIN . '/user/overview?reschedule_session_id={CHECKOUT_SESSION_ID}';
            $cancel_url = $DOMAIN . '/payment-cancel';
            $send_paramter = [
                'name' => "Reschedule Payment",
                'price' => $total_fee,
                'img' => asset('/images/loader.svg')
            ];
            return Booking::stripePayment($send_paramter,$success_url,$cancel_url);
              
            
        }catch (\Exception $e) {
            dd($e);
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
        }
    } 
    public function userCreatePassword(Request $request)
    {
        try {
           
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);
            if($validator->fails()) {
                return \Redirect::back()->withErrors($validator);
            }
            $user = User::where('email',$request->email)->first();
            // dd($user);
            if($user){
                if ($request->has('password')) {
                    $input['password'] = Hash::make($request->password);
                }
                User::where('id', $user->id)->update($input);
                return redirect('login')->with('message', 'Password created successfully'); 
            }
            return \Redirect::back()->withErrors(['msg' => 'Email Does not exist']);
              
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }   
    } 
    

}
?>