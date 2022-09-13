<?php

namespace App\Traits\Location;

use App\Models\{User,Locations,LocationKeyAdvantages,LocationImages,LocationPackages,RequestLocations,PartnerPackages,PartnerProducts,CelebrantLocations,LocationFilterCriterias};
use Illuminate\Support\Facades\Cache;
use Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth; 
trait Methods
{

   
  
    static function addData($data){    
        try{          
            $input = $data->all();
            $input['added_by'] = Auth::user()->id;
            $checkName = Locations::where('name',$data->name)->first();
            if($checkName){
                $msg = 'Location already exists with this name.';
                return ['status' => false,'message'=>$msg];    
            }
            if($data->hasFile('cover_image')){
                $input['cover_image'] = uploadImage($data->cover_image, 'locations');
            }
            $result = Locations::create($input);
            if($result){
                self::locationExtras($data,$result->id);
                $msg = 'Location added Successfully';
                return ['status' => true,'message'=>$msg];   
            }
            $msg = 'Something went wrong';
            return ['status' => false,'message'=>$msg]; 
        }
        catch (\Exception $ex) {
            return ['status' => false,'message'=>$ex->getMessage()]; 
        }

    }
    static function addRequestLocation($data){    
        try{          
            $input = $data->all();
            // $input['added_by'] = Auth::user()->id;
            $checkName = RequestLocations::where('name',$data->name)->first();
            if($checkName){
                $msg = 'Location already exists with this name.';
                return ['status' => false,'message'=>$msg];    
            }
            if($data->hasFile('cover_image')){
                $input['cover_image'] = uploadImage($data->cover_image, 'locations');
            }
            $input['celebrant_id'] = Auth::user()->id;
            $input['type'] = 2;
            $input['username'] = Auth::user()->username;
            $input['email'] = Auth::user()->email;
            $result = RequestLocations::create($input);
            if($result){
                self::locationExtras($data,$result->id,2);
                $msg = 'Location added Successfully';
                return ['status' => true,'message'=>$msg];   
            }
            $msg = 'Something went wrong';
            return ['status' => false,'message'=>$msg]; 
        }
        catch (\Exception $ex) {
            return ['status' => false,'message'=>$ex->getMessage()]; 
        }

    }
    
    static function updateRequestLocation($data,$id){   
       
        try{
            // dd($data->location_images);
            $input = $data->all();  
            deleteRecords($data->image_id,'App\Models\LocationImages');  
            if($data->has('key_advantages') && !empty($data->key_advantages)){
                deleteEntries($id,'App\Models\LocationKeyAdvantages','request_location_id'); 
            } 
            if($data->has('partners') && !empty($data->partners)){
                deleteEntries($id,'App\Models\LocationPackages','request_location_id'); 
            }
            if($data->has('location_category') && !empty($data->location_category)){
                deleteEntries($id,'App\Models\LocationFilterCriterias','request_location_id'); 
            } 
            if($data->has('marriage_celebrant') && !empty($data->marriage_celebrant)){
                deleteEntries($id,'App\Models\CelebrantLocations','request_location_id'); 
            }
           
            if($data->hasFile('cover_image')){
                $input['cover_image'] = uploadImage($data->cover_image, 'locations');
            }               
            $location = RequestLocations::find($id);
            if($location->fill($input)->save()){
                self::locationExtras($data,$id,2); 
                $msg = 'Location updated Successfully';
                return ['status' => true,'message'=>$msg];   
            }
            $msg = 'Something went wrong';
            return ['status' => false,'message'=>$msg];   
        }
        catch (\Exception $ex) {
            dd($ex); 
            return ['status' => false,'message'=>$ex->getMessage()];   
        }

    }
    static function locationExtras($data,$id,$type=null){
        if($data->has('location_images')){
            foreach($data->location_images as $file){
                if($type != ''){
                    $image['location_type'] = $type; 
                    $image['request_location_id'] = $id;
                    
                }else{
                    $image['location_id'] = $id;
                }
              
                $image['image'] = uploadImage($file, 'locations');
                LocationImages::create($image);
            }   
        }
        if($data->has('location_category') && !empty($data->location_category)){
            foreach($data->location_category as $category){
                if($type != ''){
                    $location_category['location_type'] = $type; 
                    $location_category['request_location_id'] = $id;
                    
                }else{
                    $location_category['location_id'] = $id;
                }
                $location_category['location_category'] = $category;
                LocationFilterCriterias::create($location_category);
            }   
        }
        if($data->has('marriage_celebrant') && !empty($data->marriage_celebrant)){
            foreach($data->marriage_celebrant as $celebrant){
                if($celebrant!=null){
                    if($type != ''){
                        $marriage_celebrant['location_type'] = $type; 
                        $marriage_celebrant['request_location_id'] = $id;
                        
                    }else{
                        $marriage_celebrant['location_id'] = $id;
                    }
                    $marriage_celebrant['celebrant_id'] =$celebrant;
                    CelebrantLocations::create($marriage_celebrant);
                }
            }   
        }
        
        if($data->has('key_advantages') && !empty($data->key_advantages)){
            foreach($data->key_advantages as $advantage){
                if($advantage!=null){
                    if($type != ''){
                        $key_advantages['location_type'] = $type; 
                        $key_advantages['request_location_id'] = $id;
                        
                    }else{
                        $key_advantages['location_id'] = $id;
                    }
                    $key_advantages['key_advantages'] = $advantage;
                    LocationKeyAdvantages::create($key_advantages);
                }
            }   
        }
        if($data->has('partners') && !empty($data->partners)){
            foreach($data->partners as $partner){
                if($partner['partner_id'] !=null){
                    if($type != ''){
                        $partner_packages['location_type'] = $type; 
                        $partner_packages['request_location_id'] = $id;
                        
                    }else{
                        $partner_packages['location_id'] = $id;
                    }
                    // $partner_packages['location_category'] = $data->location_category;
                    $partner_packages['partner_id'] = $partner['partner_id'];
                    $partner_packages['package_id'] = $partner['package_id'];
                    LocationPackages::create($partner_packages);
                }
              
            }   
        }
        if($data->has('custom_location_id') && $data->custom_location_id !='null'){
            $status['status'] = 1;  
            RequestLocations::where('id', $data->custom_location_id)->update($status);
        }
        return true;
    }
    
    static function updateLocation($data,$id){   
       
        try{
            // dd($data->location_images);
            $input = $data->all();  
            deleteRecords($data->image_id,'App\Models\LocationImages');  
            if($data->has('key_advantages') && !empty($data->key_advantages)){
                deleteEntries($id,'App\Models\LocationKeyAdvantages','location_id'); 
            } 
            if($data->has('partners') && !empty($data->partners)){
                deleteEntries($id,'App\Models\LocationPackages','location_id'); 
            }
            if($data->has('location_category') && !empty($data->location_category)){
                deleteEntries($id,'App\Models\LocationFilterCriterias','location_id'); 
            } 
            if($data->has('marriage_celebrant') && !empty($data->marriage_celebrant)){
                deleteEntries($id,'App\Models\CelebrantLocations','location_id'); 
            }
           
            if($data->hasFile('cover_image')){
                $input['cover_image'] = uploadImage($data->cover_image, 'locations');
            }               
            $location = Locations::find($id);
            if($location->fill($input)->save()){
                self::locationExtras($data,$id); 
                $msg = 'Location updated Successfully';
                return ['status' => true,'message'=>$msg];   
            }
            $msg = 'Something went wrong';
            return ['status' => false,'message'=>$msg];   
        }
        catch (\Exception $ex) {
            dd($ex); 
            return ['status' => false,'message'=>$ex->getMessage()];   
        }

    }
    static function checkifExistInLocation($id){
        return Locations::where('location_category',$id)->get();
    }
    public static function partners($id=null){   
        return  PartnerProducts::with([
            'user' => function($query){               
                $query->select('name','id');
            }          
        ])->select('id','user_id')->get()->toArray();
    }
    public static function celebrants($id=null){ 
        $data = User::role('Celebrant');
        if($id != ''){
            $data = CelebrantLocations::with([
                
                'user' => function ($query)  {
                    $query->select('first_name','id','phone','country_code');
                },
            ])->select('location_id','id','celebrant_id')->where('location_id',$id);
        }
        
        return  $data;
    }
      
    public static function getPartnerPackages($id=null){
        $getPartnerPackages = PartnerPackages::select('id','package_name','total_fee');
        if($id != ''){
            $getPartnerPackages =$getPartnerPackages->where('user_id',$id);
        }
        $getPartnerPackages =$getPartnerPackages->get();
        return $getPartnerPackages;
    }
    public static function getLocationPackages($id=null){
        
        $getLocationPackages =  LocationPackages::with([
            'packages' => function($query){               
                $query->select('package_name','id','total_fee');
            }          
        ])->select('id','package_id');
        if($id != ''){
            $getLocationPackages =$getLocationPackages->where('location_id',$id);
        }
        return $getLocationPackages;
    }
    
    public static function getLocations($id=null,$columns=null,$packages=null){
        if($columns ==''){
            $columns = ['name','id','price','address','town','why_this_location','cover_image'];
        }
        
        $locations =  Locations::with([
            'location_images' => function($query){
                $query->select('location_id','image','id');
            }           
        ]);
        if($packages == 'packages'){
            $locations =  $locations->with([
                'location_packages' => function($query){
                    $query->select('location_id','partner_id','package_id');
                },
                'location_advantages'=>function($query){
                    $query->select('location_id','key_advantages','id');
                },
                'location_celebrants' => function($query){
                    $query->select('location_id','celebrant_id','id');
                },
                'location_criteria'=>function($query){
                    $query->select('location_id','location_category','id');
                },
            ]);
        }
        $locations =  $locations->select($columns);
        if($id!=''){
           $locations = $locations->where('id',$id);
        }
        return $locations;
    }
    public static function changeStatus($request){
        $input['status'] = $request->status;  
        if($request->status == 1){
            $data['status'] = 'Approved';
            $data['class'] = 'approved';
        }
         
        else if($request->status == 2){
            $data['status'] = 'Rejected';
            $data['class'] = 'rejected';
        }
          
        else if($request->status == 0){
            $data['status'] = 'pending';
            $data['class'] = 'waiting-approval';
        }
        
        RequestLocations::where('id', $request->id)->update($input);
        return $data;
    }
    public static function searchLocation($request){
     
        $locations = self::getLocations();
        if($request->has('filter') && !empty($request->filter)){
            if(in_array('0',$request->filter)){             
                $data =$locations->get();
            }else{
                $id = $request->filter;
                $data = $locations->whereHas('location_criteria', (function ($q) use ($id)
                {
                    $q->whereIn('location_category', $id);

                }))->get();

                // $data = $locations->whereIn('location_category',$request->filter)->get();
            }
            return $data;

        }else{
            return $locations->get();
        }
    }
    public static function searchAdminLocation($request){
        $locations = self::getLocations();
        if($request->has('filter') && $request->filter !=''){
            $id = $request->filter;
            if($request->has('search') && $request->search !=''){
                $data = $locations->where('name', 'like', '%' . $request->search . '%')->get();
            }
            else if(($request->has('search') && $request->search !='') && ($request->has('filter') && $request->filter !='' && $request->filter !=0)){
                $data = $locations->where('name', 'like', '%' . $request->search . '%')->whereHas('location_criteria', (function ($q) use ($id)
                {
                    $q->where('location_category', '=', $id);

                }
                ))->get();
            }
            
            else if($request->filter == 0){             
                $data =$locations->get();
            }else{
               
                $data = $locations->whereHas('location_criteria', (function ($q) use ($id)
                {
                    $q->where('location_category', '=', $id);

                }
                ))->get();
                // $data = $locations->where('location_category',$request->filter)->get();
            }
            return $data;
        }else{
            return $locations->get();
        }
    } 
    public static function request_custom_location_data(){
        $locations =   RequestLocations::with([
            'request_location_images' => function($query){               
                $query->select('request_location_id', 'image');
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
        return $locations;
    }
   
}