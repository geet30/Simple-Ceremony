<?php

namespace App\Traits\FinancialReport;

use App\Models\{User, Booking, Locations};

trait Methods
{

    public static function fetch_all_reports($id=null)
    {   
       
        $data = Locations::whereHas('booking')->with(['booking','booking.type_of_ceremony','booking.booking_addons.partner','booking.booking_addons.packages'])->groupby('id');
        return $data;
    }
    public static function fetch_all_location_reports($id){
        $data = Booking::whereHas('location')->with(['type_of_ceremony','booking_addons.partner','booking_addons.packages'])->where('locationId',$id);
        return $data;
    }
   
    public static function searchReportByDate($request)
    {
        
        try{
            $req_page = 1;
            $records = 10;
            $data = self::fetch_all_reports();
            // dd($request->all());
           
            if ($request->has('celebrants') && $request->filled('celebrants')) {           
                $celebrant_id = $request->celebrants;              
                $data = $data->whereHas('booking', (function ($q) use ($celebrant_id) {                   
                    $q->WhereIn('celebrant_id', $celebrant_id);
                    
                }));               
            }
            if ($request->has('ceremonies') && $request->filled('ceremonies')) {           
                $ceremony_type = $request->ceremonies;              
                $data = $data->whereHas('booking', (function ($q) use ($ceremony_type) {                   
                    $q->WhereIn('ceremony_type', $ceremony_type);                   
                }));
                
            }
            
            if ($request->has('partners') && $request->filled('partners')) {           
                $partner_id = $request->partners;              
                $data = $data->whereHas('booking.booking_addons.partner', (function ($q) use ($partner_id) {                   
                    $q->WhereIn('id', $partner_id);
                    
                }));               
            }
            
            if ($request->has('locationId') && $request->filled('locationId')) {
            
                $locationId = $request->locationId;
                $data = $data->WhereIn('id', $locationId);
                
            }
            $end_date = '';
            if($request->filled('search_end_date')){
                $end_date =$request->search_end_date;
            }
            if ($request->filled('search_start_date') && $end_date =='') {
                $start_date =$request->search_start_date;
                // $end_date = date('Y-m-d');
                $data = $data->whereHas('booking', (function ($q) use ($start_date) {
                    $q->whereDate('booking_date','=',$start_date);
                    
                }));                
                          
            }
            if($end_date !=''){
                $start_date =$request->search_start_date;
                
                $data = $data->whereHas('booking', (function ($q) use ($start_date,$end_date) {
                        

                    $q->whereDate('booking_date','>=',$start_date)
                    ->whereDate('booking_date','<=',$end_date);
                    
                })); 
            }
         
            return $data->paginate($records, ['*'], 'page', $req_page);
        }catch (\Exception $ex) {
            dd($ex);
         }
       
        // dd($data->toSql());
       
    }
    public static function searchReportForLocation($request)
    {
        
        try{
            $req_page = 1;
            $records = 10;
            $data = self::fetch_all_location_reports($request->current_url[3]);
            // dd($request->all());
           
            if ($request->has('celebrants') && $request->filled('celebrants')) {           
                $celebrant_id = $request->celebrants;              
                $data = $data->WhereIn('celebrant_id', $celebrant_id);
                              
            }
            if ($request->has('ceremonies') && $request->filled('ceremonies')) {           
                $ceremony_type = $request->ceremonies;              
                $data = $data->WhereIn('ceremony_type', $ceremony_type);                   
               
                
            }
            
            if ($request->has('partners') && $request->filled('partners')) {           
                $partner_id = $request->partners;              
                $data = $data->whereHas('booking_addons.partner', (function ($q) use ($partner_id) {                   
                    $q->WhereIn('id', $partner_id);
                    
                }));               
            }
            
            if ($request->has('locationId') && $request->filled('locationId')) {
            
                $locationId = $request->locationId;
                $data = $data->WhereIn('id', $locationId);
                
            }
            $end_date = '';
            if($request->filled('search_end_date')){
                $end_date =$request->search_end_date;
            }
            if ($request->filled('search_start_date') && $end_date =='') {
                $start_date =$request->search_start_date;
                $data = $data->whereDate('booking_date','=',$start_date);
                               
                          
            }
            if($end_date !=''){
                $start_date =$request->search_start_date;
                
                $data = $data->whereDate('booking_date','>=',$start_date)
                    ->whereDate('booking_date','<=',$end_date);
                  
            }
         
            return $data->paginate($records, ['*'], 'page', $req_page);
        }catch (\Exception $ex) {
            dd($ex);
         }
       
        // dd($data->toSql());
       
    }
  
}
