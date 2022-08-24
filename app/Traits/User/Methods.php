<?php

namespace App\Traits\User;

use Illuminate\Support\Facades\{View, Storage, DB, Hash};
use App\Models\{User, PartnerPackages, PackageLocations, PartnerProducts, PackageImages, Booking, CelebrantDetail, CelebrantLocations};
use Carbon\Carbon;
use Str;
use Cookie;
use App\Mail\RegisterUserMail;

trait Methods
{

    public static function addToCart()
    {

        if (Cookie::get('myCart')) {

            $cart = json_decode(Cookie::get('myCart'));

            Booking::addtoCart($cart);
            $cookie = Cookie::queue(Cookie::forget('myCart'));
            // \Cookie::forget('myCart');
            return redirect('user/add-ons');
        }
    }

    static function createPartner($data)
    {
        $user_inputs = $data['user'];
        $random_password = Str::random(8);
        $user_inputs['password'] = Hash::make($random_password);
        if (!empty($data['user']['image'])) {
            $user_inputs['image'] = uploadImage($data['user']['image'], 'user');
        }

        $user = User::create($user_inputs);
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


        foreach ($data['package_locations']['location'] as $locationId => $location) {

            $package_locations_inputs['location'] = $location;
            $package_locations_inputs['product_id'] = $PartnerProducts->id;
            $package_locations_inputs['user_id'] = $user->id;
            $PackageLocations = PackageLocations::create($package_locations_inputs);
        }


        if (!empty($data['partner_packages'])) {
            foreach ($data['partner_packages'] as $packages) {
                $partner_packages_inputs = $packages;
                $partner_packages_inputs['product_id'] = $PartnerProducts->id;
                $partner_packages_inputs['user_id'] = $user->id;
                $PartnerPackages = PartnerPackages::create($partner_packages_inputs);
                foreach ($packages['package_images']['image_name'] as $file) {
                    $package_images_inputs['image_name'] = uploadImage($file, 'package');
                    $package_images_inputs['package_id'] = $PartnerPackages->id;
                    $package_images_inputs['user_id'] = $user->id;
                    $PackageImages = PackageImages::create($package_images_inputs);
                }
            }
        }
        return true;
    }

    //function to add celebrant
    static function createCelebrant($data)
    {
        $userData = $data['user'];
        $random_password = Str::random(8);
        $userData['password'] = Hash::make($random_password);
        if (!empty($data['user']['image'])) {
            $userData['image'] = uploadImage($data['user']['image'], 'user');
        }
        $user = User::create($userData);
        $user->assignRole('Celebrant');

        //Send login detail email to celebrant
        $when = now()->addMinutes(1);
        $dataMail  = array(
            'email' => $userData['email'],
            'password' => $random_password,
        );
        $mail_id = $userData['email'];
        $sendMail = new RegisterUserMail($dataMail);
        $mail = \Mail::to($mail_id)->later($when, $sendMail);

        //Add extra detail of celebrant
        $celebrant = $data['celebrant'];
        $celebrant['celebrant_id'] = $user->id;
        CelebrantDetail::create($celebrant);

        //celebrant's locations
        if (isset($data['locations'])) {
            Methods::saveCelebrantLocations($data['locations'], $user->id);
        }
        return true;
    }

    //function to update celebrant
    static function updateCelebrant($data, $id)
    {
        $userData = $data['user'];
        if (!empty($data['user']['image'])) {
            $userData['image'] = uploadImage($data['user']['image'], 'user');
        }
        User::where('id', $id)->update($userData);

        //Add extra detail of celebrant
        $celebrant = $data['celebrant'];
        $celebrant['celebrant_id'] = $id;
        CelebrantDetail::where('celebrant_id', $id)->update($celebrant);

        //celebrant's locations
        if (isset($data['locations'])) {
            Methods::saveCelebrantLocations($data['locations'], $id);
        } else {
            CelebrantLocations::where('celebrant_id', $id)->delete();
        }
        return true;
    }
   //function to update partner
   static function updatePartner($data, $partnerid)
   {
        try{

            $userData = $data['user'];
            // dd($data['user']);
            if (!empty($data['user']['image'])) {
                $userData['image'] = uploadImage($data['user']['image'], 'user');
            }
            User::where('id', $partnerid)->update($userData);
            $product_id = $data['product_id']; 
            if (isset($data['business_category'])) {
                PartnerProducts::where('id', $product_id )->update(['business_category'=>$data['business_category']]);
            } 
            if (isset($data['locations'])) {
                self::savePartnerLocations($data['locations'], $partnerid,$product_id);
            } 
            else {
                PackageLocations::where('user_id', $partnerid)->delete();
            }
            $msg = 'Partner Updated Successfully';
            return ['status' => true,'message'=>$msg];   
        }catch (\Exception $ex) {
            return ['status' => false,'message'=>$ex->getMessage()]; 
        }
     
   }
    static function redirectToRole($request)
    {

        $redirection = '';
        if ($request->route_name == 'admin-login') {
            $role = 'Admin';
            $redirection = 'locations/all-requests';
        } else if ($request->route_name == 'partner-login') {
            $role = 'Partner';
            $redirection = 'add-ons';
        } else if ($request->route_name == 'user-login') {
            $role = 'User';
            $redirection = 'user/overview';
        }
        return array('role' => $role, 'redirection' => $redirection);
    }
    //common function to partner locations
    static function savePartnerLocations($locations, $user_id,$product_id)
    {
        
        PackageLocations::where('user_id', $user_id)->where('product_id', $product_id)->delete();
        foreach ($locations as $location) {
            $package_locations['location'] = $location;
            $package_locations['product_id'] = $product_id;
            $package_locations['user_id'] = $user_id;
            PackageLocations::create($package_locations);
        }
        return true;
    }
    //common function to celebrant locations
    static function saveCelebrantLocations($locations, $id)
    {
        CelebrantLocations::where('celebrant_id', $id)->delete();
        foreach ($locations as $location) {
            $loc['celebrant_id'] = $id;
            $loc['location_id'] = $location;
            CelebrantLocations::create($loc);
        }
    }

    //make active and inactive user
    public static function changeStatus($request)
    {
        $input['status'] = $request->status;
        if ($request->status == 1) {
            $data['status'] = 'Active';
            $data['class'] = 'approved';
        } else if ($request->status == 0) {
            $data['status'] = 'Inactive';
            $data['class'] = 'rejected';
        }
        User::where('id', $request->id)->update($input);
        return $data;
    }
}
