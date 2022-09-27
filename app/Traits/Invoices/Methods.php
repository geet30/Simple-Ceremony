<?php

namespace App\Traits\Invoices;

use App\Models\{User, Booking, Invoices};

trait Methods
{

    public static function fetch_all_payments($slug=null)
    {   
        
        // $data =   Booking::with([
        //     'user' => function ($query) {
        //         $query->select('email', 'phone', 'country_code', 'id');
        //     },
        //     'celebrant' => function ($query) {
        //         $query->select('first_name', 'id');
        //     },
        //     'invoices' =>function($query){
        //         $query->select( 'booking_id', 'invoice_number', 'recipient_name', 'abn_number', 'bank_name', 'bank_number', 'notes');
        //     },
        //     'booking_payments'=>function ($query) {
        //         $query->select('amount','id','booking_id');
        //     },

        // ]);
        $data =   Invoices::with([
            'booking' => function ($query) {
                $query->select( 'id', 'booking_date', 'price', 'first_couple_name', 'second_couple_name', 'status');
            },
        ]);
        // $data =   Booking::with([
        //     'invoices' => function ($query) {
        //         $query->select( 'booking_id', 'invoice_number', 'recipient_name', 'abn_number', 'bank_name', 'bank_number', 'notes','user_type','status','amount');
        //     },
        // ]);

        // if($slug =='invoice-couple'){

        // }else 
        
        if($slug == 'celebrants-invoice'){  
            $type = config('env.userType.Celebrant');
            $data = $data->where('user_type', '=', $type);
            // $data = $data->whereHas('invoices', (function ($q) use ($type) {
            //    $q->where('user_type', '=', $type);
            // }));    
           
        }            
    //    dd($data->get()->toArray());
        return $data;
    }
    public static function searchPaymentsByDate($request)
    {
        dd($request->all());
        $req_page = 1;
        $records = 10;
        $slug = '';
        $whereClause = [];
        if(isset($request->current_url[2]) && !empty($request->current_url[2])){
            $slug = $request->current_url[2];
        }
       
       
        $data = self::fetch_all_payments($slug);
        if ($request->has('bookingStatus') && $request->filled('bookingStatus')) {
            $whereClause = [
                ['status', '=', $request->bookingStatus]
            ];
            $data = $data->whereIn($whereClause);
        }
        if ($request->has('celebrants') && $request->filled('celebrants')) {
            $whereClause = [
                ['celebrant_id', '=', $request->celebrants]
            ];
            $data = $data->whereIn($whereClause);
        }
        if ($request->has('booking_date') && $request->filled('booking_date')) {
            $date = date('Y-m-d', strtotime($request->booking_date));
            $data->Where('booking_date', 'like', '%' . $date . '%')
                    ->orWhere('created_at', 'like', '%' . $date . '%');
        } else {
            $data = $data->orderBy('id', 'DESC');
        }
        // dd($data->toSql());
        return $data->paginate($records, ['*'], 'page', $req_page);
    }
}
