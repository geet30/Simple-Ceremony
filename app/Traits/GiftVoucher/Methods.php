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
        // dd($request->all());
        try{
            $req_page = 1;
            $records = 10;                 
            $data = Booking::with(['booking_coupon','user']); 
            $end_date = '';
            if($request->filled('search_end_date')){
                $end_date =$request->search_end_date;
            } 
            if ($request->filled('search_start_date') && $end_date =='') {
                $start_date =date('Y-m-d',strtotime($request->search_start_date));
                $data = $data->Where('created_at', 'like', '%' . $start_date . '%')  ;             
                          
            }
            if($end_date !=''){
                $start_date =$request->search_start_date;
                
                $data = $data->whereDate('created_at','>=',$start_date)
                    ->whereDate('created_at','<=',$end_date); 
            }
            $data = $data->where('voucher_number','!=','')->where('voucher_number','IS NOT', null);        
            return $data->paginate($records, ['*'], 'page', $req_page);
        }catch (\Exception $ex) {
            dd($ex);
        }
       
    }
    
    public static function searchGiftOrderByName($request){
        try{
            $req_page = 1;
            $records = 10;                 
            $data = Booking::with(['booking_coupon','user']);  
                       
            if ($request->filled('search')) {            
                $search = strtolower($request->search);
                $data = $data->where(function ($query) use($search) {
                    $query->where('first_couple_name', 'like', '%' . $search . '%')
                        ->orWhere('second_couple_name', 'like', '%' . $search . '%');
                });      
            } else {
                $data = $data->orderBy('id', 'DESC');
            }  
            $data = $data->where('voucher_number','!=','')->where('voucher_number','IS NOT', null);   
            return $data->paginate($records, ['*'], 'page', $req_page);
        }catch (\Exception $ex) {
            dd($ex);
        }
    }
}