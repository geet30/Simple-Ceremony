<?php

namespace App\Traits\Celebrant;

use App\Models\{User,Locations, RequestLocations,Booking,BookingDetailsDocs,BookingDetails,CelebrantLocations,MarriageCertificateNumber};
use Illuminate\Support\Facades\Cache;
use Str;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

trait Methods
{

    static function fetch_all_request_locations(){
        $columns = ['*'];
    
        $locations =   RequestLocations::with([
            'request_location_images' => function($query){               
                $query->select('request_location_id', 'image','id');
            } ,
            'request_location_packages' => function($query){
                $query->select('request_location_id','partner_id','package_id');
            },
            'request_location_advantages'=>function($query){
                $query->select('request_location_id','key_advantages','id');
            },           
            'request_location_criteria'=>function($query){
                $query->select('request_location_id','location_category','id');
            },        
        ]);
    
        $data = $locations->select($columns);
        return $data; 
    }
    ####function to celebrant locations ######
    static function saveCelebrantLocations($locations, $id)
    {
        $checkIfExist = CelebrantLocations::where('celebrant_id', $id)->where('location_id', $locations)->first();
      
        if($checkIfExist == null){
            $loc['celebrant_id'] = $id;
            $loc['location_id'] = $locations;
            CelebrantLocations::create($loc);
      
        return true;
        }
       return false;
           

    }
    static function fetch_locations($id=null,$search=null){
        $columns = ['*'];
        if($search !=''){
            $locations =   RequestLocations::with([
                'request_location_images' => function($query){               
                    $query->select('request_location_id', 'image','id');
                } ,
                'request_location_packages' => function($query){
                    $query->select('request_location_id','partner_id','package_id');
                },
                'request_location_advantages'=>function($query){
                    $query->select('request_location_id','key_advantages','id');
                },           
                'request_location_criteria'=>function($query){
                    $query->select('request_location_id','location_category','id');
                },        
            ])->where(function ($query) use ($search) {
                $query->where('username', 'like', '%' . $search . '%')
                    ->orWhere('name', 'like', '%' . $search . '%')
                    ->orWhere('address', 'like', '%' . $search . '%')
                    ->orWhere('post_code', 'like', '%' . $search . '%')
                    ->orWhere('town', 'like', '%' . $search . '%');
            })->orderBy('id', 'DESC');
        }else{
            $locations =   RequestLocations::with([
                'request_location_images' => function($query){               
                    $query->select('request_location_id', 'image','id');
                } ,
                'request_location_packages' => function($query){
                    $query->select('request_location_id','partner_id','package_id');
                },
                'request_location_advantages'=>function($query){
                    $query->select('request_location_id','key_advantages','id');
                },           
                'request_location_criteria'=>function($query){
                    $query->select('request_location_id','location_category','id');
                },        
            ]);
        }

        if($id!=''){
           $locations = $locations->where('id',$id);
        }
        $data = $locations->select($columns)->where('celebrant_id',Auth::user()->id);
        return $data; 
    }
    public static function fetch_marriages($id=null)
    {

        $data =   Booking::with([
            'user' => function ($query) {
                $query->select('email', 'phone', 'country_code', 'id');
            },
            'location' => function ($query) {
                $query->select('name', 'id', 'price');
            },
            'celebrant' => function ($query) {
                $query->select('first_name', 'id');
            }
        ]);
        if ($id != null) {
            $data = $data->where('id', $id);
        }
        $data = $data->where('celebrant_id',Auth::user()->id);
        return $data;
    }
    public static function searchCelebrantLocationWithStatus($request){
        $req_page = 1;
        $records = 10;
        $locations = self::fetch_locations();     

        if ($request->has('firstOptgroup') && !empty($request->firstOptgroup) && $request->has('secondOptgroup') && !empty($request->secondOptgroup)) {
            $data = $locations->whereIn('status', $request->firstOptgroup)->whereIn('id', $request->secondOptgroup);
        }else if($request->has('firstOptgroup') && !empty($request->firstOptgroup)){
            $id = $request->firstOptgroup;
            $data = $locations->whereIn('status', $id);
        }
        else if($request->has('secondOptgroup') && !empty($request->secondOptgroup)){
            $id = $request->secondOptgroup;
            $data = $locations->whereIn('id', $id);
        }        
        else{
           
            $data =  $locations;
        }
        return $data->paginate($records, ['*'], 'page', $req_page);

       
    } 
    public static function searchCelebrantMarriagesWithStatus($request){
        $req_page = 1;
        $records = 10;
        $marriages = self::fetch_marriages();     
        if ($request->has('status') && $request->filled('status')) {
            $whereClause = [
                ['status', '=', $request->status]
            ];
            $data = $marriages->where($whereClause);
        }
        if ($request->has('firstOptgroup') && !empty($request->firstOptgroup) && $request->has('secondOptgroup') && !empty($request->secondOptgroup)) {
            $data = $marriages->whereIn('status', $request->firstOptgroup)->whereIn('locationId', $request->secondOptgroup);
        }else if($request->has('firstOptgroup') && !empty($request->firstOptgroup)){
            $id = $request->firstOptgroup;
            $data = $marriages->whereIn('status', $id);
        }
        else if($request->has('secondOptgroup') && !empty($request->secondOptgroup)){
            $id = $request->secondOptgroup;
            $data = $marriages->whereIn('locationId', $id);
        }        
        else{
           
            $data =  $marriages;
        }
        return $data->paginate($records, ['*'], 'page', $req_page);

       
    } 
    
    public static function searchCelebrantMarriagesWithDate($request){
        $req_page = 1;
        $records = 10;
        $marriages = self::fetch_marriages();     
       
        if ($request->has('status') && $request->filled('status')) {
            $whereClause = [
                ['status', '=', $request->status]
            ];
            $data = $marriages->where($whereClause);
        }
        if ($request->has('payment_date') && !empty($request->payment_date) && $request->has('ceremony_date') && !empty($request->ceremony_date)) {
            $data = $marriages->where('booking_date', $request->ceremony_date);
        }else if($request->has('payment_date') && !empty($request->payment_date)){// this needs to be changed when we will have the booking payment made to celebrant
         
            $data = $marriages->where('booking_date', $request->booking_date);
        }
        else if($request->has('ceremony_date') && !empty($request->ceremony_date)){
           
            $data = $marriages->where('booking_date', $request->booking_date);
        }        
        else{
           
            $data =  $marriages;
        }
        return $data->paginate($records, ['*'], 'page', $req_page);

       
    } 
    public static function searchByUser($request)
    {
        $req_page = 1;
        $records = 10;
        $search = $request->search;
        $data = self::fetch_marriages();
        if ($request->has('status') && $request->filled('status')) {
            $whereClause = [
                ['status', '=', $request->status]
            ];
            $data = $data->where($whereClause);
        }
        $data = $data->where(function ($query) use($search) {
            $query->where('first_couple_name', 'like', '%' . $search . '%')
                ->orWhere('second_couple_name', 'like', '%' . $search . '%');
        });
        return $data->paginate($records, ['*'], 'page', $req_page);
    }
    public static function marriage_detail($id = null)
    {
        $data =   Booking::with([
            'user' => function ($query) {
                $query->select('email', 'phone', 'country_code', 'id');
            },
            'booking_details_docs' => function ($query) {
                $query->select('id', 'document','booking_id','created_at');
            },
            'booking_details' => function ($query) {
                $query->select('notes','checked','id','booking_id');
            },
            'booking_feedback'=>function ($query) {
                $query->select('feedback','id','booking_id');
            },
            'user.celebrant' => function ($query) {
                $query->select('celebrant_id','admin_fee','standard_fee', 'id');
            },
            'location' => function ($query) {
                $query->select('name', 'id', 'price','address');
            },
            'celebrant' => function ($query) {
                $query->select('first_name', 'id');
            },
            'user_noim' => function ($query) {
                $query->select('*');
            }
        ]);
        if ($id != null) {
            $data = $data->where('id', $id);
        }
      
        return   $data;
    }

    public static function update_booking_docs($request,$id){
        try{
            $input = $request->all();
            $input['booking_id'] = $id;
            if($request->hasFile('file')){
                $input['document'] = uploadFile($request->file, 'uploads/documents/user/');
                $BookingDetailsDocs = BookingDetailsDocs::create($input);
                $data = BookingDetailsDocs::find($BookingDetailsDocs->id);
                $msg = 'Uploaded Successfully';
                return ['status' => true,'message'=>$msg,'data'=>$data]; 
            }
            $msg = 'Something went wrong';
            return ['status' => false,'message'=>$msg]; 
            
           
        }
        catch (\Exception $ex) {
            return ['status' => false,'message'=>$ex->getMessage()]; 
        }
        

    }
    
    public static function update_booking_details($request){
        try{
            // $input = $request->all();
            $input['booking_id'] = $request->booking_id;
            if(isset($request->notes) && !empty($request->notes)){
                $input['notes'] =  $request->notes;
            }
            if(isset($request->checked)){
                $input['checked'] =  $request->checked;
            }
            if(isset($request->booking_id) && !empty( $request->booking_id)){
                
                $data =BookingDetails::where('booking_id','=',$request->booking_id)->first();
                if(!empty($data)){
                    $data = BookingDetails::where('booking_id', $request->booking_id)->update($input);
                }else{
                    BookingDetails::create($input);
                }
                $msg = 'Saved Successfully';
                return ['status' => true,'message'=>$msg]; 
            }
            $msg = 'Something went wrong';
            return ['status' => false,'message'=>$msg];           
        }
        catch (\Exception $ex) {
            return ['status' => false,'message'=>$ex->getMessage()]; 
        }
        

    }
    
    public static function fetch_marriage_certificate_numbers($celebrant_id){
        $marriage_certificate = MarriageCertificateNumber::where('user_id',$celebrant_id)->get();
        $certificate_no = [];
        foreach($marriage_certificate as $result){
           
            $certificate_no[] = $result->certificate_prefix.$result->first_certificate_no.$result->certificate_suffix;
        }
       
        // return $data;
        // $booking_Ids = Booking::with('booking_details')->where('celebrant_id',$celebrant_id)->pluck('id');
       

        // $data =BookingDetails::whereIn('booking_id',$booking_Ids)->whereIn('marriage_certificate_number',$certificate_no);

       

        $data = Booking::with('booking_details')->whereHas('booking_details',function($qr) use ($certificate_no){
            $qr->whereIn('marriage_certificate_number',$certificate_no);
        })->select('id','first_couple_name','second_couple_name')->where('celebrant_id',$celebrant_id);
        
        return $data;

    }

    public static function delete_booking_record($request){
        try{
            if(isset($request->id) && !empty($request->id)){
                $data = BookingDetailsDocs::find($request->id);
                BookingDetailsDocs::where('id', '=', $request->id)->delete();
                if(file_exists(public_path("uploads/documents/user/".$data->document))){
                    unlink(public_path("uploads/documents/user/".$data->document));
                }
                $msg = 'Deleted Successfully';
                return ['status' => true,'message'=>$msg]; 
            }
            $msg = 'Something went wrong';
            return ['status' => false,'message'=>$msg]; 
        }
        catch (\Exception $ex) {
            return ['status' => false,'message'=>$ex->getMessage()]; 
        }
    }
    public static function searchCalendarByLocation($request){
      
        $ceremonies = Booking::getCalendarBooking(auth()->user()->id,$request->secondOptgroup);   
        dd($ceremonies);
      
        // if ($request->has('secondOptgroup') && !empty($request->secondOptgroup)) {
        //     $data = $ceremonies->whereIn('locationId', $request->secondOptgroup);
        // }
              
        // else{
           
        //     $data =  $ceremonies;
        // }
        // return $data->get();

       
    } 
     
    public static function searchCalendarByCouple($request){
       
        $search = $request->search;
        $data = self::fetch_marriages();
        if ($request->has('status') && $request->filled('status')) {
            $whereClause = [
                ['status', '=', $request->status]
            ];
            $data = $data->where($whereClause);
        }
        $data = $data->where(function ($query) use($search) {
            $query->where('first_couple_name', 'like', '%' . $search . '%')
                ->orWhere('second_couple_name', 'like', '%' . $search . '%');
        });
        return $data->get();
    }
    public static function fetch_celebrant_locations($user_id){
        $fetch_celebrant_locations =  CelebrantLocations::where('celebrant_id',$user_id)->get();
            
        $location_ids =[];
        foreach($fetch_celebrant_locations as $celebrant_location){
            $location_ids[] = $celebrant_location['location_id'];

        }

        $getcelebrantAssignedLocation = Locations::whereIn('id',$location_ids)->get();
        $getcelebrantAssignedLocation = collect($getcelebrantAssignedLocation)->map(function ($item) {
            $item['table'] = 'locations';
            return $item;
        });       
       
            
        $data  = self::fetch_locations()->get();
        $data = collect($data)->map(function ($item) {
            $item['table'] = 'request_locations';       
            return $item;
        });
        $data = $getcelebrantAssignedLocation->concat($data);
        // dd($data);
        $allLocations =  Locations::whereNotIn('id', $location_ids)->get();
        return $allLocations;

    }
}
