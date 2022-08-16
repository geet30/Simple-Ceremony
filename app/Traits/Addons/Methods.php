<?php

namespace App\Traits\Addons;

use Illuminate\Support\Facades\{View, Storage, DB,Hash};
use App\Models\{User,PartnerPackages,PackageLocations,PartnerProducts,Addons,Booking};
use Carbon\Carbon;
trait Methods
{
   
   
    public static function products(){
        return PartnerProducts::with([
            'user' => function($query){
                $query->select('name','id','image');
            },
            'package' => function($query){
                $query->select('id','user_id','location_description','product_id','partner_fee','admin_fee','total_fee','package_name','title_term');
            },
            'package.gallery' => function($query){               
                $query->select('image_name','id','package_id');
            },
            'product_location' => function($query){
                $query->select('location','id','product_id');
            },
            'product_location.locations' => function($query){
                $query->select('name','id');
            },
            'addon' => function($query){
                $query->select('name','id');
            },           
        ])->select('product_name','id','user_id','status','business_category');
    }
    public static function packageGallery($id){
        return PartnerPackages::with([
            'gallery' => function($query){
                $query->select('image_name','id','package_id');
            }
            
        ])->select('id')->where('id',$id);
    }
    public static function productPackages($id=null){
        $partnerPackages =   PartnerPackages::with([
            'gallery' => function($query){
                $query->select('image_name','id','package_id');
            },
            'user' => function($query){               
                $query->select('name','id');
            }
            
        ])->select('id','user_id','package_name');
        if($id!=''){
            $partnerPackages = $partnerPackages->where('id',$id);
        }
        return $partnerPackages;
        
    }
    public static function checkifExistInPackage($id){
        return PartnerProducts::where('business_category',$id)->get();
    }

    public static function searchAddon($request){
        if($request->has('search') && $request->filled('search')){
            $addons = self::products()->where('product_name', 'like', '%' . $request->search . '%')->orderBy('id', 'DESC')->get();                               
        }else{
             $addons = self::products()->orderBy('id', 'DESC')->get();
        }
        return $addons;
    }
    public static function searchAdminAddon($request){
        $data = [];           
        if($request->has('search') && $request->filled('search')){            
            if($request->table == 'partner_products'){
                $data = PartnerProducts::where('product_name', 'like', '%' . $request->search . '%');
                if($request->status != null){
                    $data = $data->where('status',$request->status)->orderBy('id', 'DESC')->get(); 
                }
                $data = $data->orderBy('id', 'DESC')->get();               
            }else{
                $data = Addons::where('name', 'like', '%' . $request->search . '%')->orderBy('id', 'DESC')->get();
            }          
        }else{
            if($request->table == 'partner_products'){
                $data = PartnerProducts::orderBy('id', 'DESC');
                if($request->status != null){
                    $data = $data->where('status',$request->status)->get();
                }else{
                    $data = $data->get();
                }              
            }else{
                $data = Addons::orderBy('id', 'DESC')->get();
            }           
        }
        return $data;
       
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
            $data['status'] = 'Waiting for approval';
            $data['class'] = 'waiting-approval';
        }
        PartnerProducts::where('id', $request->id)->update($input);
        return $data;
    }

    public static function productWithRejected(){
        return PartnerProducts::with([
            'package' => function($query){
                $query->select('user_id','location_description','product_id');
            },
            'addon' => function($query){
                $query->select('name','id');
            },
            'rejected' => function($query){
                $query->select('feedback','id','product_id');
            },
        ])->select('product_name','id','status','business_category');
    }
   
}