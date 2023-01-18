<?php

namespace App\Traits\GiftVoucher;

use Illuminate\Support\Facades\{View, Storage, DB, Hash, Auth};
use App\Models\{User,Booking,GiftVoucher};
use Carbon\Carbon;
use Stripe\Stripe;
trait Methods
{

    static function addCouponToStripe($data){    
        try{     
           
            // dd($data);      
            $stripe = new \Stripe\StripeClient(
                config('env.STRIPE_SECRET')
            );
            $price = $data['voucher_price'] * 100;
            return $stripe->coupons->create([
            // 'percent_off' => 25.5,
                'id' =>$data['voucher_number'],
                'amount_off' => $price,
                'name'=>$data['voucher_title'],
                "currency" => "usd",
                'duration' => 'forever',
                // 'metadata' =>$data['voucher_description']
            ]);   
        }
        catch (\Exception $ex) {
            dd($ex);
            return ['status' => false,'message'=>$ex->getMessage()]; 
        }

    } 
    
    // static function updateCouponToStripe($data,$voucherNumber){    
    //     try{     
           
    //         // dd($data);      
    //         $stripe = new \Stripe\StripeClient(
    //             config('env.STRIPE_SECRET')
    //         );
    //         $price = $data['voucher_price'] * 100;
    //         // dd($price);
    //         return $stripe->coupons->update(
    //             $voucherNumber,
    //             [
    //                 "percent_off" => 10,
    //                 // "currency" => "usd",
    //                 "name" =>$data['voucher_title']
    //             ],
    //         );  
    //     }
    //     catch (\Exception $ex) {
    //         dd($ex);
    //         return ['status' => false,'message'=>$ex->getMessage()]; 
    //     }

    // } 
    static function retrieveStripeCoupon($voucherNumber){
        try{
            $stripe = new \Stripe\StripeClient(
                config('env.STRIPE_SECRET')
            );
            $res = $stripe->coupons->retrieve($voucherNumber);          
            if ($res->valid) {
                $couponArr = [[
                    'coupon' => isset($voucherNumber) ? $voucherNumber : '',
                ]];
                return ['status' => true, 'message' => 'valid'];
            }
        }
        catch (\Exception $ex) {
            return ['status' => false, 'message' => 'not valid'];
            dd($ex->getMessage());
            return ['status' => false,'message'=>$ex->getMessage()]; 
        }
    }
    static function retrieveGiftCoupon($voucherNumber){
        try{
            $checkVoucher = GiftVoucher::where('voucher_number', $voucherNumber)->first();
            if ($checkVoucher) {
                return ['status' => true, 'message' => 'valid'];
            }
            return ['status' => false, 'message' => 'not valid'];
        }
        catch (\Exception $ex) {
            return ['status' => false, 'message' => 'not valid'];
            dd($ex->getMessage());
            return ['status' => false,'message'=>$ex->getMessage()]; 
        }
    }
   
    
    public static function searchGiftOrderByDate($request)
    {
        try{
            $req_page = 1;
            $records = 10;
            // if(isset($request->current_url[2]) && !empty($request->current_url[2])){
            //     $slug = $request->current_url[2];
            // }                   
            $data = Booking::with(['booking_coupon','user'])->where('voucher_number','!=',null);               
            if ($request->filled('booking_date')) {            
                $date = date('Y-m-d', strtotime($request->booking_date));
                $data = $data->Where('created_at', 'like', '%' . $date . '%');         
            } else {
                $data = $data->orderBy('id', 'DESC');
            }         
            return $data->paginate($records, ['*'], 'page', $req_page);
        }catch (\Exception $ex) {
            dd($ex);
        }
       
    }
    
    public static function searchGiftOrderByName($request){
        try{
            $req_page = 1;
            $records = 10;                 
            $data = Booking::with(['booking_coupon','user'])->where('voucher_number','!=',null);               
            if ($request->filled('search')) {            
                $search = strtolower($request->search);
                $data = $data->Where('first_couple_name', 'like', '%' . $search . '%')->orWhere('second_couple_name', 'like', '%' . $search . '%');         
            } else {
                $data = $data->orderBy('id', 'DESC');
            }         
            return $data->paginate($records, ['*'], 'page', $req_page);
        }catch (\Exception $ex) {
            dd($ex);
        }
    }
}