<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\{User,Addons};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
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
            return view('user.addons.listing',compact(['addons']));
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
            $data = Addons::products()->where('id',$id)->first()->toArray();
            return view('user.addons.package-details',compact(['data','id']));
           
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }   
    }
     /**
     * Show User Package Gallery
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery($id,$addonid){       
        try{
            $data = Addons::packageGallery($id)->first()->toArray();
            return view('user.addons.package-gallery',compact(['data','addonid']));
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }
    }
}
?>