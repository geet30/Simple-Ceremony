<?php

namespace App\Traits\Addons;

use Illuminate\Support\Facades\{View, Storage, DB,Hash};
use App\Models\{User,PartnerPackages,PackageLocations,PartnerProducts,PackageImages,Booking};
use Carbon\Carbon;
trait Methods
{
   
   
    public static function userAddons(){
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
            
            
        ])->select('product_name','id','user_id','status','business_category')->get()->toArray();
    }
    public static function addonPackageGallery($id){
        return PartnerPackages::with([
            'gallery' => function($query){
                $query->select('image_name','id','package_id');
            }
            
        ])->select('id')->where('id',$id)->first()->toArray();
    }
    public static function userPackages($id=null){
        return  PartnerPackages::with([
            'gallery' => function($query){
                $query->select('image_name','id','package_id');
            },
            'user' => function($query){               
                $query->select('name','id');
            }
            
        ])->select('id','user_id','package_name')->get()->toArray();

    }
    public static function checkifExistInPackage($id){
        return PartnerProducts::where('business_category',$id)->get();
    }
    
   
}