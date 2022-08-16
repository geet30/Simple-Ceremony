<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\{User,Addons,PartnerProducts,PartnerPackages,Locations};
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
    public function partnerDetail(Request $request,$id)
    {
        try {
            $user_id = PartnerProducts::where('id',$id)->value('user_id');
            $data = PartnerProducts::with([
                'package' => function($query){
                    $query->select('id','user_id','product_id','package_name');
                },
                'package.gallery' => function($query){
                    
                    $query->select('image_name','id','package_id');
                },
                
            ])->select('product_name','id','status','business_category')->where('user_id',$user_id)->get()->toArray();
            $addons = Addons::all();
            $partner_details =  User::with('addon')->where('id',$user_id)->first()->toArray();

            return view('admin.partner.partner-details',compact('data','user_id','partner_details','addons'));
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }  

        

    }
     /**
     * Store a detail of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function personalData(Request $request,$partnerId){
        try {
            $data=$request->all();
            $user = User::find($partnerId);
            $user->fill($data)->save();
            return redirect()->back()->with('success', 'Updated Successfully');  
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }  
    }
       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $input = $request->all();
            $input['added_by'] = Auth::user()->id;
            $checkLocations = Locations::where('name',$request->name)->first();
            if($checkLocations){
                $msg = 'location already exists with this name.';
                return response()->json(['status'=>false,"message"=>$msg]);
            }           
            $result = Locations::create($input);
            if($result){
                $msg = 'Locations added successfully.';
                return response()->json(['status'=>true,"message"=>$msg,"data"=>$result]);                
            }
            return response()->json(['status'=>false,"message"=>'Something went wrong.']); 
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }  
       
       
    }

}
