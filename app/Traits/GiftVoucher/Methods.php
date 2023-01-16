<?php

namespace App\Traits\GiftVoucher;

use Illuminate\Support\Facades\{View, Storage, DB, Hash, Auth};
use App\Models\{User};
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
    static function retrieveCoupon($voucherNumber){
        try{
            $stripe = new \Stripe\StripeClient(
                config('env.STRIPE_SECRET')
            );
            $res = $stripe->coupons->retrieve($voucherNumber);
            // $couponArr =[];
           
            if ($res->valid) {
                $couponArr = [[
                    'coupon' => isset($voucherNumber) ? $voucherNumber : '',
                ]];
                return ['status' => true, 'message' => 'valid'];
            }   
            // return $couponArr;

        }
        catch (\Exception $ex) {
            return ['status' => false, 'message' => 'not valid'];
            dd($ex->getMessage());
            return ['status' => false,'message'=>$ex->getMessage()]; 
        }
    }
}