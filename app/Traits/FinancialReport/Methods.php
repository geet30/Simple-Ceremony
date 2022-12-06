<?php

namespace App\Traits\FinancialReport;

use App\Models\{User, Booking, Locations};

trait Methods
{

    public static function fetch_all_reports($id=null)
    {   
        $data = Locations::whereHas('booking')->with(['booking']);
        if($id !=null){
            $data = $data->where('id',$id);
        }
        
        return $data;
    }  
    public static function createCustomInvoice($data){
        // dd($data->all());
        
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
  
}
