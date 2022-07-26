<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\{Addons,PartnerProducts,PartnerPackages};
use Illuminate\Http\Request;
use App\Http\Requests\AddonsRequest;
use View;
use Session;
use DB;

class AddonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        
        $data = Addons::all();
        $products = PartnerProducts::with([
            'package' => function($query){
                $query->select('user_id','location_description','product_id');
            },
            'addon' => function($query){
                $query->select('name','id');
            },
            
        ])->select('product_name','id','status','business_category');

        $all_addons = (clone $products)->orderBy('id', 'DESC')->paginate(1, ['*'], 'page');  
       
        $pending_addons = (clone $products)->where('status',0)->orderBy('id', 'DESC')->paginate(1, ['*'], 'page');
        $approved_addons = (clone $products)->where('partner_products.status',1)->orderBy('id', 'DESC')->paginate(1, ['*'], 'page');
        $rejected_addons = (clone $products)->where('partner_products.status',2)->orderBy('id', 'DESC')->paginate(1, ['*'], 'page');
        // dd(count($pending_addons));
        return view('admin.addons.listing', compact(['data','all_addons','pending_addons','approved_addons','rejected_addons']));
       
    }

    /**
     * show details of packages.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $data = PartnerProducts::with([
            'package' => function($query){
                $query->select('id','user_id','location_description','product_id','partner_fee','admin_fee','total_fee','package_name','title_term');
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

        // dd($data);
        return view('admin.addons.detail',compact(['data']));
    }
     /**
     * show image gallery of packages.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function gallery($id){
        $data = PartnerPackages::with([
            'gallery' => function($query){
                $query->select('image_name','id','package_id');
            }
            
        ])->select('id')->where('id',$id)->first()->toArray();
        return view('admin.addons.add-ons-gallery',compact('data'));
    }
     /**
     * Change status of packages.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request){
        // dd($request->all());die('fdsf');
        
        $input['status'] = $request->status;  
        if($request->status == 1){
            $data['status'] = 'Approved';
            $data['class'] = 'approved';
        }
         
        else if($request->status == 2){
            $data['status'] = 'Rejected';
            $data['class'] = 'rejected';
        }
          
        else if($request->status == 0){
            $data['status'] = 'Waiting for approval';
            $data['class'] = 'waiting-approval';
        }
        
        $result = PartnerProducts::where('id', $request->id)->update($input);
        if($result){
            // return response()->json(['status'=>true,"message"=>'Status changed successfully.','data'=>$status]);
            return $this->successResponse($data,'Status changed successfully.');
        }
        // return redirect()->route('admin.addons',['slug' => 'all']);
        return response()->json(['status'=>false,"message"=>'something went wrong']);
        // return $this->errorResponse([], 'something went wrong', 400);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddonsRequest $request)
    {
      
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
    
        $name = $request->input('name');
        $id = $request->input('id');
        Addons::where('id', $id )->update(['name'=>$name]);
        $msg = 'Addons updated successfully.';
        return response()->json(['status'=>true,"message"=>$msg]);
    }
    public function searchAddon(Request $request){
        
        $data = [];
       
        
        if($request->has('search') && $request->filled('search')){
            if($request->table == 'partner_products'){
                if($request->status != null){
                    $data = PartnerProducts::where('product_name', 'like', '%' . $request->search . '%')->where('status',$request->status)->orderBy('id', 'DESC')->get(); 
                }else{
                    $data = PartnerProducts::where('product_name', 'like', '%' . $request->search . '%')->orderBy('id', 'DESC')->get(); 
                }
                
            }else{
                $data = Addons::where('name', 'like', '%' . $request->search . '%')->orderBy('id', 'DESC')->get();
            }
           
        }else{
            if($request->table == 'partner_products'){
                
                if($request->status != null){
                    $data = PartnerProducts::orderBy('id', 'DESC')->where('status',$request->status)->get();
                }else{
                    $data = PartnerProducts::orderBy('id', 'DESC')->get();
                }
               
            }else{
                $data = Addons::orderBy('id', 'DESC')->get();
            }
            
        }
        // dd($data);
       
        return View::make('admin.addons.searchList', ['addons' => $data,'table'=>$request->table]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Addons  $addons
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        Addons::destroy($id);
        Session::flash('flash_message', 'Addon is deleted successfully.');
        return redirect()->route('admin.addons',['slug' => 'all']);
      }
}
