<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\{Locations,Addons,PartnerProducts,User,PartnerPackages};
use Illuminate\Http\Request;
use View;
use DB;
use Stripe\Stripe;
use Illuminate\Support\Facades\Cache;
class HomeController extends Controller
{
    public function index()
    {
              
        $locations = Locations::with([
            'location_images' => function($query){
                $query->select('location_id','image');
            }
        ])->select('name','id','price')->get();
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
        // echo "<pre>";print_r($addons);die;

        return View::make('pages.home',compact(['locations' ,'addons' ]));
    }
    public function allAddons(){
        $locations = Locations::with([
            'location_images' => function($query){
                $query->select('location_id','image');
            }
        ])->select('name','id','price')->get();
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
        return View::make('pages.add-ons',compact(['locations' ,'addons' ])); 
    }
    public function searchBookingAddon(Request $request){
        
        $addons = [];       
        if($request->has('search') && $request->filled('search')){
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
                
                
            ])->select('product_name','id','user_id','status','business_category')->where('product_name', 'like', '%' . $request->search . '%')->orderBy('id', 'DESC')->get();

                                
        }else{
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
                
                
            ])->select('product_name','id','user_id','status','business_category')->orderBy('id', 'DESC')->get();
            
        }
        return View::make('elements.user.booking.search-addon', ['addons' => $addons]);
    }
    public function addonDetail($id){
        
        $data = PartnerProducts::with([
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
            
        ])->select('product_name','id','status','business_category')->where('id',$id)->first()->toArray();
        // echo "<pre>";print_r($data);die;
        return view('pages.add-ons-detail',compact(['data']));
        // return view('admin.addons.detail',compact(['data']));

    }
    public function gallery($id){
        $data = PartnerPackages::with([
            'gallery' => function($query){
                $query->select('image_name','id','package_id');
            }
            
        ])->select('id')->where('id',$id)->first()->toArray();
        return view('pages.add-ons-gallery',compact('data'));
    }
}