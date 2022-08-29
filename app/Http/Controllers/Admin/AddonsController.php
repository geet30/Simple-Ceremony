<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\{Addons,PartnerProducts,User,RejectedProducts};
use Illuminate\Http\Request;
use App\Http\Requests\AddonsRequest;
use View;
use Redirect;

class AddonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$slug)
    {
        try {
            $data = Addons::all();
            $req_page = 1;
            $records = 10;
            if($request->has('page')){
                $req_page = $request->page; 
            }
            $products = Addons::productWithRejected();          
            $all_addons = (clone $products)->orderBy('id', 'DESC')->paginate($records, ['*'], 'page', $req_page);          
            $pending_addons = (clone $products)->where('status',0)->orderBy('id', 'DESC')->paginate($records, ['*'], 'page', $req_page);
            $approved_addons = (clone $products)->where('partner_products.status',1)->orderBy('id', 'DESC')->paginate($records, ['*'], 'page', $req_page);
            $rejected_addons = (clone $products)->where('partner_products.status',2)->orderBy('id', 'DESC')->paginate($records, ['*'], 'page',$req_page);

            $dataArray = array(
                'all_addons' =>$all_addons,
                'pending_addons' =>$pending_addons,
                'approved_addons' => $approved_addons,
                'rejected_addons' => $rejected_addons       
            );        
            if($request->ajax()){          
                if($slug == 'all'){
                    $slug = 'all-ads-on-tab';
                }
                $viewurl = 'elements.admin.addons.'.$slug;
                return View::make($viewurl, ['req_page' => $req_page, 'dataArray' => $dataArray,'all_addons'=> $all_addons,'pending_addons'=>$pending_addons,'approved_addons'=>$approved_addons,'rejected_addons'=>$rejected_addons]);
            }
            return view('admin.addons.listing', compact(['data','all_addons','pending_addons','approved_addons','rejected_addons','dataArray']));        
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }  
       
    }

    /**
     * show details of packages.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        try {
            $data = Addons::products()->where('id',$id)->first()->toArray();       
            return view('admin.addons.detail',compact(['data','id']));
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }  
       
    }
     /**
     * show image gallery of packages.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function gallery($id,$addonid){
        try{
            $data = Addons::packageGallery($id)->first()->toArray();
            return view('admin.addons.gallery',compact(['data','addonid']));
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }
    }
   
     /**
     * Change status of packages.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request){
        try {
            $result =   Addons::changeStatus($request);
            if($result){
                return $this->successResponse($result,'Status changed successfully.');
            }
           return response()->json(['status'=>false,"message"=>'something went wrong']);
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
    public function store(AddonsRequest $request)
    {
        try {
            $input = $request->all();
            $checkAddons = Addons::where('name',$request->name)->first();
            if($checkAddons){
                $msg = 'Addons already exists with this name.';
                return response()->json(['status'=>false,"message"=>$msg]);
            }
            
            $result = Addons::create($input);
            if($result){
                $msg = 'Addons added successfully.';
                return response()->json(['status'=>true,"message"=>$msg,"data"=>$result]);
                
            }
            return response()->json(['status'=>false,"message"=>'Something went wrong.']);
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }        
       
    }

    
        /**
     * Store a newly created feedback in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submitFeedback(Request $request)
    {
        try {
            $input = $request->all();      
            $result = RejectedProducts::create($input);
            if($result){
                $msg = 'Feedback added successfully.';
                return response()->json(['status'=>true,"message"=>$msg,"data"=>$result]);                
            }
            return response()->json(['status'=>false,"message"=>'Something went wrong.']);
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        } 
       
       
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Addons  $addons
     * @return \Illuminate\Http\Response
     */
    
  
    public function show(Addons $addons)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Addons  $addon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Addons  $addons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            $name = $request->input('name');
            $id = $request->input('id');
            Addons::where('id', $id )->update(['name'=>$name]);
            $msg = 'Addons updated successfully.';
            return response()->json(['status'=>true,"message"=>$msg]);
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }   
       
    }
    public function searchAddon(Request $request){
        try{
            $data = Addons::searchAdminAddon($request);
            return View::make('admin.addons.searchList', ['addons' => $data,'table'=>$request->table]);
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);           
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Addons  $addons
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        try {
            $checkifExistInPackage =  Addons::checkifExistInPackage($id);
            if(count($checkifExistInPackage)==0){
                Addons::destroy($id);
                $msg = 'Addon deleted successfully';
                $route = 'addons/all#addons-setting';
                return redirect($route)->with(['message'=>$msg,'class'=>'alert-success']);
            }
            
            $msg = 'This Addon exist in package';
            $route = 'addons/all#addons-setting';
            return redirect($route)->with(['message'=>$msg,'class'=>'alert-danger']);
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        } 
        
    }
}
