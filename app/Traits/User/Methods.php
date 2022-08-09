<?php

namespace App\Traits\User;

use Illuminate\Support\Facades\{View, Storage, DB,Hash};
use App\Models\{User,PartnerPackages,PackageLocations,PartnerProducts,PackageImages,Booking};
use Carbon\Carbon;
use Str;
use Cookie;
use App\Mail\RegisterUserMail;
trait Methods
{
   
    public static function addToCart(){
        if(Cookie::get('myCart')){
            
            $cart = json_decode(Cookie::get('myCart'));            
            Booking::addtoCart($cart);
            $cookie = Cookie::queue(Cookie::forget('myCart'));
            // \Cookie::forget('myCart');
            return redirect('user-add-ons');
        }
    }
    static function createPartner($data) {
        // dd($data);
      
        $user_inputs = $data['user'];
        $random_password = Str::random(8);
        $user_inputs['password'] = Hash::make($random_password);
        if(!empty($data['user']['image'])){
            $user_inputs['image'] = uploadImage($data['user']['image'], 'user');
        }
       
        $user =User::create($user_inputs);
        $user->assignRole('Partner');
        $when = now()->addMinutes(1);
        $dataMail  = array(
            'email' => $user_inputs['email'],
            'password' => $random_password,
        );

        $mail_id = $user_inputs['email'];
        $sendMail = new RegisterUserMail($dataMail);
        $mail = \Mail::to($mail_id)->later($when, $sendMail);


       
        $partner_products_inputs = $data['partner_products'];
        $partner_products_inputs['user_id'] = $user->id;        
        $PartnerProducts = PartnerProducts::create($partner_products_inputs);
        
       
        foreach($data['package_locations']['location'] as $locationId=>$location){
          
            $package_locations_inputs['location'] = $location;
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
    
   
}