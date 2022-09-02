<?php

namespace App\Traits\Addons;

use Illuminate\Support\Facades\{View, Storage, DB, Hash, Auth};
use App\Models\{User, PartnerPackages, PackageLocations, PartnerProducts, Addons, Booking};
use Carbon\Carbon;

trait Methods
{


    public static function products()
    {
        return PartnerProducts::with([
            'user' => function ($query) {
                $query->select('*');
            },
            'package' => function ($query) {
                $query->select('id', 'user_id', 'location_description', 'product_id', 'partner_fee', 'admin_fee', 'total_fee', 'package_name', 'title_term', 'deposit', 'simulation_partner_fee', 'simulation_admin_fee', 'simulation_total_fee', 'terms');
            },
            'package.gallery' => function ($query) {
                $query->select('image_name', 'id', 'package_id');
            },
            'product_location' => function ($query) {
                $query->select('location', 'id', 'product_id');
            },
            'product_location.locations' => function ($query) {
                $query->select('name', 'id');
            },
            'addon' => function ($query) {
                $query->select('name', 'id');
            },
        ])->select('product_name', 'id', 'user_id', 'status', 'business_category');
    }
    public static function packageGallery($id)
    {
        return PartnerPackages::with([
            'gallery' => function ($query) {
                $query->select('image_name', 'id', 'package_id');
            }

        ])->select('id')->where('id', $id);
    }
    public static function productPackages($id = null)
    {
        $partnerPackages =   PartnerPackages::with([
            'gallery' => function ($query) {
                $query->select('image_name', 'id', 'package_id');
            },
            'user' => function ($query) {
                $query->select('name', 'id');
            }

        ])->select('id', 'user_id', 'package_name');
        if ($id != '') {
            $partnerPackages = $partnerPackages->where('id', $id);
        }
        return $partnerPackages;
    }
    public static function userProductPackages($id = null)
    {
        $partnerPackages =   PartnerPackages::with([
            'gallery' => function ($query) {
                $query->select('image_name', 'id', 'package_id');
            },
            'user' => function ($query) {
                $query->select('name', 'id');
            }

        ])->select('id', 'user_id', 'package_name');
        if ($id != '') {
            $partnerPackages = $partnerPackages->where('user_id', $id);
        }
        return $partnerPackages;
    }
    public static function checkifExistInPackage($id)
    {
        return PartnerProducts::where('business_category', $id)->get();
    }

    public static function searchAddon($request)
    {
        if ($request->has('search') && $request->filled('search')) {
            $addons = self::products()->where('product_name', 'like', '%' . $request->search . '%')->orderBy('id', 'DESC')->get();
        } else {
            $addons = self::products()->orderBy('id', 'DESC')->get();
        }
        return $addons;
    }
    public static function searchAdminAddon($request)
    {
        $req_page = 1;
        $records = 10;
        $data = [];
        if ($request->has('search') && $request->filled('search')) {
            if ($request->table == 'partner_products') {
                $data = PartnerProducts::where('product_name', 'like', '%' . $request->search . '%');
                if ($request->status != null) {
                    $data = $data->where('status', $request->status)->orderBy('id', 'DESC')->paginate($records, ['*'], 'page', $req_page);
                }
            } else {
                $data = Addons::where('name', 'like', '%' . $request->search . '%')->orderBy('id', 'DESC')->paginate($records, ['*'], 'page', $req_page);
            }
        } else {
            if ($request->table == 'partner_products') {
                $data = PartnerProducts::orderBy('id', 'DESC');
                if ($request->status != null) {
                    $data = $data->where('status', $request->status)->paginate($records, ['*'], 'page', $req_page);
                } else {
                    $data = $data->paginate($records, ['*'], 'page', $req_page);
                }
            } else {
                $data = Addons::orderBy('id', 'DESC')->paginate($records, ['*'], 'page', $req_page);
            }
        }
        return $data;
        
    }
    public static function changeStatus($request)
    {
        $input['status'] = $request->status;
        $body = '';
        if ($request->status == 1) {
            $body = 'Add-ons approved by admin';
            $data['status'] = 'Approved';
            $data['class'] = 'approved';
        } else if ($request->status == 2) {
            $body = 'Add-ons rejected by admin';
            $data['status'] = 'Rejected';
            $data['class'] = 'rejected';
        } else if ($request->status == 0) {
            $body = 'Add-ons updated as waiting for approval by admin';
            $data['status'] = 'Waiting for approval';
            $data['class'] = 'waiting-approval';
        }
        // send notification to admin for add-ons list
        $title = 'Add-ons status';
        $redirection_url = '/add-ons';
        $type = 'Add-ons status updated';
        $authId = Auth::user()->id;
        PartnerProducts::where('id', $request->id)->update($input);
        $partner = PartnerProducts::where('id', $request->id)->first();
        notificationSave($authId, $partner->user_id, $title, $body, $redirection_url, $type);
        return $data;
    }

    public static function productWithRejected()
    {
        return PartnerProducts::with([
            'package' => function ($query) {
                $query->select('user_id', 'location_description', 'product_id');
            },
            'user' => function ($query) {
                $query->select('*');
            },
            'addon' => function ($query) {
                $query->select('name', 'id');
            },
            'rejected' => function ($query) {
                $query->select('feedback', 'id', 'product_id');
            },
        ])->select('product_name', 'id', 'status','user_id', 'business_category');
    }
}
