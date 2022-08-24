<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{User, Addons, PartnerProducts, PackageLocations, Locations};
use Illuminate\Http\Request;
use View;
use Session;
use DB;
use Illuminate\Support\Facades\Auth;

class PartnerController extends Controller
{
    /**
     * Display a detail of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function partnerDetail(Request $request, $id)
    {
        try {
            $user_id = PartnerProducts::where('id', $id)->value('user_id');
            $data = Addons::products()->where('user_id', $user_id)->get()->toArray();
            $product_id =  $id;
            $addons = Addons::all();
            // $partner_details =  User::with('addon')->where('id', $user_id)->first()->toArray();
            $partner_details = Addons::products()->where('user_id', $user_id)->first()->toArray();
            $columns = ['name','id','price','address','town','why_this_location','cover_image'];
            $allLocations = Locations::getLocations('',$columns)->get();
            $partner_locations = PackageLocations::with('locations')->where('user_id', $user_id)->where('product_id', $id)->get();
            // dd($partner_details);
            return view('admin.partner.partner-details', compact('data', 'user_id', 'partner_details', 'addons','allLocations','product_id','partner_locations'));
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * Store a detail of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function personalData(Request $request, $partnerId)
    {
        // dd($request->all());
        try {
            $response = User::updatePartner($request->all(),$partnerId);
            if($response['status'] == false){
                return redirect()->back()->with(['message'=>$response['message'],'class'=>'alert-danger'])->withInput();
            }else{
                $route = 'partner/details/'.$request->product_id.'#personal-data';
                return redirect($route)->with(['message'=>$response['message'],'class'=>'alert-success']);
            }

        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
   
}
