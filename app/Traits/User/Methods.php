<?php

namespace App\Traits\User;

use Illuminate\Support\Facades\{View, Storage, DB, Hash};
use App\Models\{User, PartnerPackages, PackageLocations, PartnerProducts, PackageImages, Booking, CelebrantDetail, CelebrantLocations, AdminTax,UserPersonalDetail};
use Carbon\Carbon;
use Str;
use Cookie;
use App\Mail\RegisterUserMail;

trait Methods
{
    #### Add to Cart ############
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
    ###### Create Parter ###########
    static function createPartner($data)
    {
        // dd($data);
        $user_inputs = $data['user'];
        $random_password = Str::random(8);
        $user_inputs['password'] = Hash::make($random_password);
        $user_inputs['user_type'] =  config('env.userType.Partner');
        if (!empty($data['user']['image'])) {
            $user_inputs['image'] = uploadImage($data['user']['image'], 'user');
        }

        $user = User::create($user_inputs);
        $user->assignRole('Partner');

        //send email 
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
        if ($PartnerProducts) {
            // send notification 
            $admin = User::role('Admin')->first();
            $title = 'New partner registered';
            $body = $data['user']['name'];
            $redirection_url = 'partner/details/' . $PartnerProducts->id . '#personal-data';
            $type = 'New partner registered';
            notificationSave($user->id, $admin->id, $title, $body, $redirection_url, $type);

            // send notification to admin for add-ons list
            $title = 'Add-ons';
            $body = $data['user']['name'] . ' has added the add-ons';
            $redirection_url = 'addons/all';
            $type = 'Add-ons added by partner';
            notificationSave($user->id, $admin->id, $title, $body, $redirection_url, $type);
            self::partnerExtras($data, $PartnerProducts->id, $user->id);
            $msg = 'Partner added Successfully';
            return ['status' => true, 'message' => $msg];
        }
        $msg = 'Something went wrong';
        return ['status' => false, 'message' => $msg];
    }
    ###### Partner Extra Fields ###########
    static function partnerExtras($data, $id, $user_id)
    {
        foreach ($data['package_locations']['location'] as $locationId => $location) {

            $package_locations_inputs['location'] = $location;
            $package_locations_inputs['product_id'] = $id;
            $package_locations_inputs['user_id'] = $user_id;
            PackageLocations::create($package_locations_inputs);
        }


        if (!empty($data['partner_packages'])) {
            foreach ($data['partner_packages'] as $packages) {
                $partner_packages_inputs = $packages;
                $partner_packages_inputs['product_id'] = $id;
                $partner_packages_inputs['user_id'] = $user_id;
                $PartnerPackages = PartnerPackages::create($partner_packages_inputs);
                foreach ($packages['package_images']['image_name'] as $file) {
                    $package_images_inputs['image_name'] = uploadImage($file, 'package');
                    $package_images_inputs['package_id'] = $PartnerPackages->id;
                    $package_images_inputs['user_id'] = $user_id;
                    PackageImages::create($package_images_inputs);
                }
            }
        }
        return true;
    }
    static function updatePackage($data, $id)
    {

        if (isset($data['partner_products'])) {
            $partner_products = $data['partner_products'];
            PartnerProducts::where('id', $id)->update($partner_products);
        }
        if (isset($data['image_id']) && $data['image_id'] != '') {

            deleteRecords($data['image_id'], 'App\Models\PackageImages');
        }

        if (isset($data['package_locations']['location'])) {

            self::savePartnerLocations($data['package_locations']['location'], $data['user_id'], $id);
        }
        if (isset($data['partner_packages']) && !empty($data['partner_packages'])) {

            self::savePartnerPackages($data['partner_packages'], $data['user_id'], $id);
        }

        $msg = 'Package updated Successfully';
        return ['status' => true, 'message' => $msg];
    }
    //common function to partner locations
    static function savePartnerPackages($partner_packages, $user_id, $product_id)
    {
        foreach ($partner_packages as $packages) {
            $partner_packages_inputs['product_id'] = $product_id;
            $partner_packages_inputs['user_id'] = $user_id;
            $partner_packages_inputs['package_name'] = $packages['package_name'];
            $partner_packages_inputs['partner_fee'] = $packages['partner_fee'];
            $partner_packages_inputs['admin_fee'] = $packages['admin_fee'];
            $partner_packages_inputs['total_fee'] = $packages['total_fee'];
            $partner_packages_inputs['deposit'] = $packages['deposit'];
            $partner_packages_inputs['simulation_partner_fee'] = $packages['simulation_partner_fee'];
            $partner_packages_inputs['simulation_total_fee'] = $packages['simulation_total_fee'];
            $partner_packages_inputs['location_description'] = $packages['location_description'];
            $partner_packages_inputs['title_term'] = $packages['title_term'];
            $partner_packages_inputs['terms'] = $packages['terms'];
            PartnerPackages::where('id', $packages['id'])->update($partner_packages_inputs);

            if (isset($packages['package_images']) && !empty($packages['package_images'])) {
                foreach ($packages['package_images']['image_name'] as $file) {
                    $package_images_inputs['image_name'] = uploadImage($file, 'package');
                    $package_images_inputs['package_id'] = $packages['id'];
                    $package_images_inputs['user_id'] = $user_id;
                    PackageImages::create($package_images_inputs);
                }
            }
        }
        return true;
    }
    //function to add celebrant
    static function createCelebrant($data)
    {
        $userData = $data['user'];
       
        $userData['password'] = Hash::make($userData['password']);
        $userData['user_type'] =  config('env.userType.Celebrant');
        if (!empty($data['user']['image'])) {
            $userData['image'] = uploadImage($data['user']['image'], 'user');
        }
        $userData['name'] = $data['user']['first_name'];
        $user = User::create($userData);
        $user->assignRole('Celebrant');

        //Send login detail email to celebrant
        $when = now()->addMinutes(1);
        $dataMail  = array(
            'email' => $userData['email'],
            'password' => $userData['password'],
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
    //function to update user details
    static function updateUserDetail($data, $id)
    {
        $userData = $data['user'];
        User::where('id', $id)->update($userData);

        //Add extra detail of user
        $booking_user = $data['booking_user'];
        $booking_user['user_id'] = $id;
        $match = ['user_id'=>$id];
        UserPersonalDetail::updateOrCreate($match,$booking_user);
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
        User::where('id', $id)->update(['status'=>0]);

        //Add extra detail of celebrant
        $celebrant = $data['celebrant'];
        $celebrant['celebrant_id'] = $id;
        if(isset($data['logo']) && !empty($data['logo'])){
            $celebrant['image'] = uploadImage($data['logo'], 'logos');
        }   
       
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
        try {
            $userData = $data['user'];
            if (!empty($data['user']['image'])) {
                $userData['image'] = uploadImage($data['user']['image'], 'user');
            }
            User::where('id', $partnerid)->update($userData);
            $product_id = $data['product_id'];
            if (isset($data['business_category'])) {
                PartnerProducts::where('id', $product_id)->update(['business_category' => $data['business_category']]);
            }
            if (isset($data['locations'])) {
                self::savePartnerLocations($data['locations'], $partnerid, $product_id);
            }
            $msg = 'Partner Updated Successfully';
            return ['status' => true, 'message' => $msg];
        } catch (\Exception $ex) {
            return ['status' => false, 'message' => $ex->getMessage()];
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
        }else if ($request->route_name == 'celebrant-login') {
            $role = 'Celebrant';
            $redirection = 'upcoming/all-records-tab';
        }
        return array('role' => $role, 'redirection' => $redirection);
    }

    //common function to partner locations
    static function savePartnerLocations($locations, $user_id, $product_id)
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

    //save admin profile detail
    public static function saveProfileDetail($request, $id)
    {
        $userData = $request->except(['_token', 'current_password', 'confirm_password']);
        if ($request->has('password')) {
            $userData['password'] = Hash::make($request->password);
        }
       
        User::where('id', $id)->update($userData);
        return true;
    }

    //save admin tax detail
    public static function saveAdminTax($request, $id)
    {
        $tax = AdminTax::firstOrNew(array('admin_id' => $id));
        $tax->celebrant_tax = $request->celebrant_tax;
        $tax->partner_tax = $request->partner_tax;
        $tax->save();
        return true;
    }
}
