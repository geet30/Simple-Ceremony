<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\{Addons,PartnerProducts,PartnerPackages,RejectedProducts};
use Illuminate\Http\Request;
use View;
use Session;
use DB;

class UserAddonController extends Controller
{


    public function index(Request $request){
        $addons = PartnerProducts::with([
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
        return view('user.add-ons.add-ons',compact(['addons' ]));
       
    }

}
?>