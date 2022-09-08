<?php

namespace App\Traits\Celebrant;

use App\Models\{User, RequestLocations};
use Illuminate\Support\Facades\Cache;
use Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

trait Methods
{

    static function fetch_locations($id=null,$search=null){
        $columns = ['*'];
        if($search !=''){
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
        }

        if($id!=''){
           $locations = $locations->where('id',$id);
        }
        $data = $locations->select($columns)->where('celebrant_id',Auth::user()->id);
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
 
}
