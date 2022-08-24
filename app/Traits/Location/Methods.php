<?php

namespace App\Traits\Location;

use App\Models\{User,Locations,LocationKeyAdvantages,LocationImages,LocationPackages,RequestLocations,PartnerPackages,PartnerProducts,CelebrantLocations};
use Illuminate\Support\Facades\Cache;
use Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth; 
trait Methods
{

   
  
    static function addData($data){    
        try{
            // dd($data->all());
           
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
    static function locationExtras($data,$id){
        if($data->has('location_images')){
            foreach($data->location_images as $file){
                $image['location_id'] = $id;
                $image['image'] = uploadImage($file, 'locations');
                LocationImages::create($image);
            }   
        }
        if($data->has('marriage_celebrant') && !empty($data->marriage_celebrant)){
            foreach($data->marriage_celebrant as $celebrant){
                if($celebrant!=null){
                    $marriage_celebrant['location_id'] = $id;
                    $marriage_celebrant['celebrant_id'] =$celebrant;
                    CelebrantLocations::create($marriage_celebrant);
                }
            }   
        }
        
        if($data->has('key_advantages') && !empty($data->key_advantages)){
            foreach($data->key_advantages as $advantage){
                if($advantage!=null){
                    $key_advantages['location_id'] = $id;
                    $key_advantages['key_advantages'] = $advantage;
                    LocationKeyAdvantages::create($key_advantages);
                }
            }   
        }
        if($data->has('partners')){
            foreach($data->partners as $partner){
                $partner_packages['location_id'] = $id;
                $partner_packages['location_category'] = $data->location_category;
                $partner_packages['partner_id'] = $partner['partner_id'];
                $partner_packages['package_id'] = $partner['package_id'];
                LocationPackages::create($partner_packages);
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
            
            $input = $data->all();
            dd($data->all());   
            deleteRecords($data->image_id,'App\Models\LocationImages');  
            if($data->has('key_advantages') && !empty($data->key_advantages)){
                deleteEntries($id,'App\Models\LocationKeyAdvantages','location_id'); 
            } 
            if($data->has('partners') && !empty($data->partners)){
                // dd($data->all());
                deleteEntries($id,'App\Models\LocationPackages','location_id'); 
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
    //   return  PartnerPackages::where('user_id',$id)->select('id','package_name','total_fee')->get()->toArray();
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
                $data = $locations->whereIn('location_category',$request->filter)->get();
            }
            return $data;

        }else{
            return $locations->get();
        }
    }
    public static function searchAdminLocation($request){
     
        $locations = self::getLocations();
        if($request->has('filter') && $request->filter !=''){
            if($request->has('search') && $request->search !=''){
                $data = $locations->where('name', 'like', '%' . $request->search . '%')->get();
            }
            else if(($request->has('search') && $request->search !='') && ($request->has('filter') && $request->filter !='' && $request->filter !=0)){
                $data = $locations->where('name', 'like', '%' . $request->search . '%')->where('location_category',$request->filter)->get();
            }
            
            else if($request->filter == 0){             
                $data =$locations->get();
            }else{
                $data = $locations->where('location_category',$request->filter)->get();
            }
            return $data;
        }else{
            return $locations->get();
        }
    } 
   
}