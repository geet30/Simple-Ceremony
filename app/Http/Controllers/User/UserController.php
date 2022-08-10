<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\{User,Addons,PartnerProducts,PartnerPackages,RejectedProducts};
use Illuminate\Http\Request;
use View;
use Session;
use DB;

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
            $addons = User::userPackages();
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
            $addons = User::userAddons();
            return view('user.add-ons.add-ons',compact(['addons']));
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
        // echo $id;die;
        try{
            $data = User::userPackages($id);
            dd($data);
            return view('user.overview.order-add-ons',compact(['addons']));
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }   
    }
}
?>