<?php

namespace App\Traits\Payments;

use App\Models\{User, Booking};

trait Methods
{

    public static function fetch_all_payments($slug=null)
    {   
        
        $data =   Booking::with([
            'user' => function ($query) {
                $query->select('email', 'phone', 'country_code', 'id');
            },
            'celebrant' => function ($query) {
                $query->select('first_name', 'id');
            },
            'payments' =>function($query){
                $query->select( 'booking_id', 'invoice_number', 'recipient_name', 'abn_number', 'bank_name', 'bank_number', 'notes');
            },
            'booking_payments'=>function ($query) {
                $query->select('amount','id','booking_id');
            },

        ]);

        // if($slug =='invoice-couple'){

        // }else 
        if($slug == 'celebrants-invoice'){           
            $data = $data->where('celebrant_id','!=','null');
        }            
    //    dd($data->first());s
        return $data;
    }
    public static function searchPaymentsByDate($request)
    {
        
        $req_page = 1;
        $records = 10;
        $slug = '';
        $whereClause = [];
        if(isset($request->current_url[2]) && !empty($request->current_url[2])){
            $slug = $request->current_url[2];
        }
        $data = self::fetch_all_payments($slug);
        // if ($request->has('status') && $request->filled('status')) {
        //     $whereClause = [
        //         ['status', '=', $request->status]
        //     ];
        //     $data = $data->where($whereClause);
        // }
       
        if ($request->has('booking_date') && $request->filled('booking_date')) {
            $date = date('Y-m-d', strtotime($request->booking_date));
            $data->Where('booking_date', 'like', '%' . $date . '%')
                    ->orWhere('created_at', 'like', '%' . $date . '%');
        } else {
            $data = $data->orderBy('id', 'DESC');
        }
        return $data->paginate($records, ['*'], 'page', $req_page);
    }
}
