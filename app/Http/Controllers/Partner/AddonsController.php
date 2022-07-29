<?php

namespace App\Http\Controllers\Partner;
use App\Http\Controllers\Controller;
use App\Models\Addons;
use Illuminate\Http\Request;
use App\Http\Requests\AddonsRequest;
use View;
use Session;
use Auth;

class AddonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = Addons::all();
        return view('partner.add-ons', compact(['data']));
       
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
            $data = Addons::where('name', 'like', '%' . $request->search . '%')->orderBy('id', 'DESC')->get();
        }else{
            $data = Addons::orderBy('id', 'DESC')->get();
        }
       
        return View::make('admin.addons.searchList', ['addons' => $data]);


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
        return redirect()->route('admin.addons');
      }
}
