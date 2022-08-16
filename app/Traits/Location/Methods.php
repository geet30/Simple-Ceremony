<?php

namespace App\Traits\Location;

use App\Models\{User,Locations,LocationKeyAdvantages,LocationImages,LocationPackages,RequestLocations,PartnerPackages,PartnerProducts};
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
                return \Redirect::back()->withErrors(['msg' => $msg]);
            }
            if($data->hasFile('cover_image')){
                $input['cover_image'] = uploadImage($data->cover_image, 'locations');
            }
            $result = Locations::create($input);

            if($result){
                if($data->has('location_images')){
                    foreach($data->location_images as $file){
                        $image['location_id'] = $result->id;
                        $image['image'] = uploadImage($file, 'locations');
                        LocationImages::create($image);
                    }   
                }
                if($data->has('key_advantages')){
                    foreach($data->key_advantages as $advantage){
                        $key_advantages['location_id'] = $result->id;
                        $key_advantages['key_advantages'] = $advantage;
                        LocationKeyAdvantages::create($key_advantages);
                    }   
                }
                if($data->has('partners')){
                    foreach($data->partners as $partner){
                        $partner_packages['location_id'] = $result->id;
                        $partner_packages['location_category'] = $data->location_category;
                        $partner_packages['partner_id'] = $partner['partner_id'];
                        $partner_packages['package_id'] = $partner['package_id'];
                        LocationPackages::create($partner_packages);
                    }   
                }
                if($data->has('custom_location_id') && $data->custom_location_id !='null'){
                    $status['status'] = 1;  
                    $result = RequestLocations::where('id', $data->custom_location_id)->update($status);
                }
                $msg = 'Location added successfully.';
                $route = 'locations/all-packages';
                return redirect($route)->with(['message'=>$msg,'class'=>'alert-success']);
            }
            return true;
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['message' => $ex->getMessage()]);
            return $ex->getMessage();
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
    
    public static function getPartnerPackages($id=null){
      return  PartnerPackages::where('user_id',$id)->select('id','package_name')->get()->toArray();
    }
    public static function getLocations($id=null){
        $locations =  Locations::with([
            'location_images' => function($query){
                $query->select('location_id','image');
            }
        ])->select('name','id','price','address','town','why_this_location');
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
  
   
}