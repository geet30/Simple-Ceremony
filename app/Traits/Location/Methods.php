<?php

namespace App\Traits\Location;

use App\Models\{User,Locations,LocationKeyAdvantages,LocationImages,Cart,RequestLocations};
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
            $checkEmail = Locations::where('name',$data->name)->first();
            if($checkEmail){
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
                if($data->has('custom_location_id') && $data->custom_location_id !='null'){
                    $status['status'] = 1;  
                    $result = RequestLocations::where('id', $data->custom_location_id)->update($status);
                }
                $msg = 'Location added successfully.';
                $route = 'locations/all-packages';
                return redirect($route)->with('message', $msg);
            }
            return true;
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
            return $ex->getMessage();
        }

    }
  
   
}