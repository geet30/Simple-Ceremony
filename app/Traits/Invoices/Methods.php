<?php

namespace App\Traits\Invoices;

use App\Models\{User, Booking, Invoices,UserBookingAddon};

trait Methods
{

    public static function fetch_all_payments($slug=null,$celebrant_id = null)
    {   
        
       
        $data =   Invoices::with([
            'booking' => function ($query) {
                $query->select( 'id', 'booking_date', 'price', 'first_couple_name', 'second_couple_name', 'status','ceremony_type');
            },
        ]);
       

        // if($slug =='invoice-couple'){

        // }else 
        
        if($slug == 'celebrants-invoice'){  
            $type = config('env.userType.Celebrant');
            $data = $data->where(function ($query) use ($type){
              
                $common_type = config('env.userType.Admin');
                $query->where('user_type', '=', $type)
                      ->orWhere('user_type', '=', $common_type);
            });
            
        } 
        if($celebrant_id != null){
            $data = $data->where('celebrant_id',$celebrant_id);
        }          
   
        return $data;
    } 
    public static function createCustomInvoice($data){
        
        $booking =  Booking::where('id',$data->booking_id)->first();
              
        $invoices_data['user_id']  = $booking->user_id;
        $invoices_data['booking_id']  = $booking->id;
       
        if(isset($data->recipient_name) && !empty($data->recipient_name)){
            $celebrant_details =User::where('id',$data->recipient_name)->with('celebrant')->first();
           
            $invoices_data['celebrant_id']  = $data->recipient_name;
            $invoices_data['recipient_name']  = $celebrant_details->first_name;//celebrant name;
            $invoices_data['abn_number']  =$celebrant_details->abn_number;
            $invoices_data['bank_name']  = $celebrant_details->bank;
            $invoices_data['bank_number']  = $celebrant_details->account_no;
        }

        // $invoices_data['invoice_number']  = 1111666;       
        $invoices_data['amount']  = $booking->price;
        $invoices_data['notes']  = $data->notes;
        
        $invoices_data['status']  = config('ceremonyStatus.status.Booked');
        Invoices::create($invoices_data);
        return true;

    }
    public static function createCelebrantCustomInvoice($data){

        
        $booking =  Booking::where('id',$data->booking_id)->first();
              
        $invoices_data['user_id']  = $booking->user_id;
        $invoices_data['booking_id']  = $booking->id;
       
        // if(isset($data->recipient_name) && !empty($data->recipient_name)){
        $celebrant_details =User::where('id',$booking->celebrant_id)->with('celebrant')->first();
        
        $invoices_data['celebrant_id']  = $booking->celebrant_id;
        $invoices_data['recipient_name']  = $celebrant_details->first_name;//celebrant name;
        $invoices_data['abn_number']  =$celebrant_details->abn_number;
        $invoices_data['bank_name']  = $celebrant_details->bank;
        $invoices_data['bank_number']  = $celebrant_details->account_no;
        // }
     
        $invoices_data['amount']  = $booking->price;
        $invoices_data['notes']  = $data->notes;
        
        $invoices_data['status']  = config('ceremonyStatus.status.Booked');
        Invoices::create($invoices_data);
        return true;

    }
    public static function searchByInvoice($request){
        try{
            $req_page = 1;
            $records = 10;
            $search = $request->search;
            $slug = '';
            if(isset($request->current_url[2]) && !empty($request->current_url[2])){
                $slug = $request->current_url[2];
            }
            $data = self::fetch_all_payments($slug);
            if( $search !=''){
                $data = $data->where(function ($query) use($search) {
                    $query->where('invoice_number', '=', $search);
                });
            }
            return $data->paginate($records, ['*'], 'page', $req_page);
        }catch (\Exception $ex) {
           dd($ex);
        }
        
    }
    public static function searchPaymentsByDate($request)
    {
        // dd($request->all());
        try{
            $req_page = 1;
            $records = 10;
            $slug = '';
            $whereClause = [];
            if(isset($request->current_url[2]) && !empty($request->current_url[2])){
                $slug = $request->current_url[2];
            }
           
           
            $data = self::fetch_all_payments($slug);
            if ($request->has('bookingStatus') && $request->filled('bookingStatus')) {
            
                $status = $request->bookingStatus;
               
                $data = $data->whereHas('booking', (function ($q) use ($status) {
                    
                    $q->WhereIn('status', $status);
                    
                }));
                // $data = $data->whereIn($whereClause);
            }
            else if (($request->has('bookingStatus') && $request->filled('bookingStatus')) && ($request->has('celebrants') && $request->filled('celebrants'))) {
                $input['status']= $request->bookingStatus;
                $input['celebrants']= $request->celebrants;
                
                $data = $data->whereHas('booking', (function ($q) use ($input) {
                    $q->WhereIn('status',$input['status'])
                    ->orWhereIn('celebrant_id',  $input['celebrants']);
                }));
            }
            else if ($request->has('celebrants') && $request->filled('celebrants')) {
                
                $celebrants = $request->celebrants;
                $data = $data->whereHas('booking', (function ($q) use ($celebrants) {
                    
                    $q->WhereIn('celebrant_id', $celebrants);
                    
                }));
            }
            if ($request->has('booking_date') && $request->filled('booking_date')) {
             
                $date = date('Y-m-d', strtotime($request->booking_date));
                $data = $data->whereHas('booking', (function ($q) use ($date) {
    
                    $q->Where('booking_date', 'like', '%' . $date . '%')
                    ->orWhere('created_at', 'like', '%' . $date . '%');
                    
                }));           
            } else {
                $data = $data->orderBy('id', 'DESC');
            }
         
            return $data->paginate($records, ['*'], 'page', $req_page);
        }catch (\Exception $ex) {
            dd($ex);
         }
       
        // dd($data->toSql());
       
    }
    public static function getUserInfo($id=null){
        $getUserInfo =   Booking::with([
            'celebrant_details' => function ($query) {
                $query->select( 'id', 'admin_fee', 'standard_fee','celebrant_id');
            },
        ]);

        if($id != ''){
            $getUserInfo = $getUserInfo->where('id',$id);
        }
        $getUserInfo =$getUserInfo->first();
        return $getUserInfo;
    }
    public static function getRecipientInfo($id=null){
        return User::where('id',$id)->first();
    }
    public static function searchCelebrantInvoices($request)
    {
       
        try{
            $req_page = 1;
            $records = 10;
            $slug = '';
                 
            $data = self::fetch_all_payments($slug);
            if ($request->has('bookingStatus') && $request->filled('bookingStatus')) {
            
                $status = $request->bookingStatus;
               
                $data = $data->whereHas('booking', (function ($q) use ($status) {
                    
                    $q->WhereIn('status', $status);
                    
                }));
            }

            if ($request->has('payment_date') && !empty($request->payment_date) && $request->has('ceremony_date') && !empty($request->ceremony_date)) {
                $date =  $request->booking_date;
                $data = $data->whereHas('booking', (function ($q) use ( $date) {
    
                    $q->where('booking_date', $date);
                    
                })); 
            }else if($request->has('payment_date') && !empty($request->payment_date)){// this needs to be changed when we will have the booking payment made to celebrant
                $date =  $request->booking_date;
                $data = $data->whereHas('booking', (function ($q) use ( $date) {
    
                    $q->where('booking_date', $date);
                    
                })); 
            }
            else if($request->has('ceremony_date') && !empty($request->ceremony_date)){
               
                $date =  $request->booking_date;
                $data = $data->whereHas('booking', (function ($q) use ( $date) {
    
                    $q->where('booking_date', $date);
                    
                })); 
            }        
            
           
         
            return $data->paginate($records, ['*'], 'page', $req_page);
        }catch (\Exception $ex) {
            dd($ex);
         }
       
        // dd($data->toSql());
       
    }  
    public static function getUserInvoices($bookingId){
        return UserBookingAddon::with('packages','packages.user','packages.product')->where('booking_id',$bookingId)->get();
    }
    public static function getUserInvoicesPackage($bookingId,$packageId){
        return UserBookingAddon::with('packages','packages.user','packages.product')->where('booking_id',$bookingId)->where('package_id',$packageId)->first();
    }
    
}
