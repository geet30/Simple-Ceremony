<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User,GiftVoucher};
use View;
use Redirect;
use Illuminate\Support\Facades\{Auth, Hash};
use Illuminate\Support\Facades\Validator;
class GiftVouchersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = '';
        if ($request->has('search') && $request->filled('search')) {
            $search = $request->search;
            $gift_voucher = GiftVoucher::where('voucher_title', 'like', '%' . $request->search . '%')->orWhere('voucher_number', 'like', '%' . $request->search . '%')->get();
            // dd($gift_voucher);
          
        } else{
            $gift_voucher = GiftVoucher::all();
        }
        if ($request->ajax()) {
            return View::make('elements.admin.gift-voucher.listing', ['gift_voucher' => $gift_voucher, 'search' => $search]);
        }
        // die;
        return view('admin.gift-vouchers.index', compact('gift_voucher')); 
    }
 
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gift-vouchers.add-voucher');
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
          
            $input = $request->except('_token');           
            if($request->image_id ==null){
                $input['voucher_image'] ='';
            }  else{
                if(!empty($request->voucher_image)){
                    $input['voucher_image'] = uploadImage($request->voucher_image, 'vouchers');
                }
            }
            $response = GiftVoucher::create($input);
            
            if ($response) {
                return redirect('/gift-vouchers')->with('message', 'Voucher added successfully.');
            }
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gift_voucher = GiftVoucher::where('id',$id)->first();
        
        return view('admin.gift-vouchers.details', compact('gift_voucher')); 
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $data = GiftVoucher::where('id',$id)->first();
        return view('admin.gift-vouchers.edit-voucher', compact('data')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
           
            $input = $request->except(['_token', '_method','image_id']);
            if($request->image_id == null){
                $input['voucher_image'] ='';
            }  
            if(!empty($request->voucher_image)){
                $input['voucher_image'] = uploadImage($request->voucher_image, 'vouchers');
            }
            $response = GiftVoucher::where('id', $id)->update($input);
            
            if ($response) {
                return redirect('/gift-vouchers')->with('message', 'Voucher updated successfully.');
            }
          
        } catch (\Exception $ex) {
            dd($ex);
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
