<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\{User,Addons};
use Illuminate\Http\Request;

class UserController extends Controller
{

   /**  
     * index 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
       
        try{
            User::addToCart();
            $addons = Addons::productPackages()->get()->toArray();
            return view('user.overview.index',compact(['addons']));
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }        
       
    }
    /**  
     * addons
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addons(Request $request){
        try{
            $addons = Addons::products()->get()->toArray();
            return view('user.add-ons.listing',compact(['addons']));
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }          
    }
    /**  
     * addon detail 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addonDetail($id){
       
        try{
            $data = Addons::productPackages($id)->get()->toArray();
            return view('user.overview.order-add-ons',compact(['addons']));
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }   
    }
}
?>