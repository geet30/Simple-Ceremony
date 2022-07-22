<?php

namespace App\Traits\User;

use Illuminate\Support\Facades\{View, Storage, DB,Hash};
use App\Models\{User,PartnerPackages,PackageLocations,PartnerProducts,PackageImages};
use Carbon\Carbon;
use Str;
trait Methods
{
   

    static function createPartner ($data) {
        // dd($data);
      
        $user_inputs = $data['user'];
        $user_inputs['password'] = Hash::make(Str::random(8));
        if(!empty($data['user']['image'])){
            $user_inputs['image'] = uploadImage($data['user']['image'], 'user');
        }
       
        $user =User::create($user_inputs);
       
        $partner_products_inputs = $data['partner_products'];
        $partner_products_inputs['user_id'] = $user->id;        
        $PartnerProducts = PartnerProducts::create($partner_products_inputs);
        
       
        foreach($data['package_locations']['location'] as $locationId=>$location){
          
            $package_locations_inputs['location'] = $locationId;
            $package_locations_inputs['product_id'] = $PartnerProducts->id;
            $package_locations_inputs['user_id'] = $user->id;
            $PackageLocations = PackageLocations::create($package_locations_inputs);
        }
        
      
        if(!empty($data['partner_packages'])){
            foreach($data['partner_packages'] as $packages){
                $partner_packages_inputs = $packages;
                $partner_packages_inputs['product_id'] = $PartnerProducts->id;
                $partner_packages_inputs['user_id'] = $user->id;
                $PartnerPackages = PartnerPackages::create($partner_packages_inputs);
                foreach($packages['package_images']['image_name'] as $file){
                    $package_images_inputs['image_name'] = uploadImage($file, 'package');
                    $package_images_inputs['package_id'] = $PartnerPackages->id;
                    $package_images_inputs['user_id'] = $user->id;
                    $PackageImages = PackageImages::create($package_images_inputs);
                }   
            }
            
    
            
            
            
        }
      
        
       
        return true;
    }

   
}