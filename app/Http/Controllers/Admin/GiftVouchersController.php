<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User,GiftVoucher,Booking};
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
    public function index(Request $request, $slug = null)
    {
    
        $search = '';
        $records = 10;
        $req_page = 1;
        if ($request->has('page')) {
            $req_page = $request->page;
        }
        
        $gift_voucher = GiftVoucher::all();
        $data = $allRequest = Booking::with(['booking_coupon','user'])->where('voucher_number','!=',null)->paginate($records, ['*'], 'page', $req_page);
        // dd($data);

        if ($request->ajax()) {          
            $viewurl = 'elements.admin.gift-voucher.' . $slug;         
            return View::make($viewurl, ['req_page' => $req_page, 'gift_voucher' => $gift_voucher,'data'=>$data, 'search' => $search]);
        }
        return view('admin.gift-vouchers.index', compact('gift_voucher','data')); 
    }
    /**
     * search the specified booking location in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     * */

    public function searchGiftOrderByDate(Request $request){
        try {
            $data =   GiftVoucher::searchGiftOrderByDate($request);
            return View::make('elements.admin.gift-voucher.all-orders', ['data' => $data]);
        } catch (\Exception $ex) {
           
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
     /**
     * Search Voucher
     *
     * @return \Illuminate\Http\Response
     */
    public function searchGiftVoucher(Request $request)
    {
        try {
            $search ='';
            if ($request->has('search') && $request->filled('search')) {
                $search = $request->search;
                $gift_voucher = GiftVoucher::where('voucher_title', 'like', '%' . $request->search . '%')->orWhere('voucher_number', 'like', '%' . $request->search . '%')->get();
            }
            else{
                $gift_voucher = GiftVoucher::all();
            }
            return View::make('elements.admin.gift-voucher.all-active-gift-vouchers', ['gift_voucher' => $gift_voucher, 'search' => $search]);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
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
            $checkName = GiftVoucher::where('voucher_title',$request->voucher_title)->where('voucher_number',$request->voucher_number)->first();
           
            if($checkName){
                $msg = 'Voucher already exists with this name.';
                return ['status' => false,'message'=>$msg];    
            }        
            if($request->image_id ==null){
                $input['voucher_image'] ='';
            }  else{
                if(!empty($request->voucher_image)){
                    $input['voucher_image'] = uploadImage($request->voucher_image, 'vouchers');
                }
            }
            $response = GiftVoucher::create($input);
            $saveCoupon = GiftVoucher::addCouponToStripe($input);
            
            if ($saveCoupon) {
                return redirect('/gift-voucher/all-active-gift-vouchers')->with('message', 'Voucher added successfully.');
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
                return redirect('/gift-voucher/all-active-gift-vouchers')->with('message', 'Voucher updated successfully.');
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
