<?php

namespace App\Traits\Marriages;

use App\Models\{User,Booking};

trait Methods
{

    public static function users($search=null){
        if($search !=''){

            // Booking::with([
            //     'location' => function($query){
            //         $query->select('name','id','price');
            //     },
            //     'celebrant' => function($query){
            //         $query->select('first_name','id');
            //     }
            // ]);
            // $data = Booking::whereHas('user.role', function ($query) {
            //     $query->where('type', 'admin');
            // })->get();


            $data = User::role('User')->with([
                'booking' => function ($query) {
                    $query->select('booking_date', 'id');
                },
                'booking.location' => function($query){
                    $query->select('name','id','price');
                },
                'booking.celebrant' => function ($query) {
                    $query->select('id','first_name');
                },

            ])->where('first_name', 'like', '%' . $search . '%')->where('contact_name', 'like', '%' . $search . '%')->orwhere('name', 'like', '%' . $search . '%')->orwhere('email', 'like', '%' . $search . '%')->orderBy('id', 'DESC');
        }else{
            $data =  Booking::with([
                'location' => function($query){
                    $query->select('name','id','price');
                },
                'celebrant' => function($query){
                    $query->select('first_name','id');
                }
            ]);

            // $data = User::role('User')->with([
            //     'booking' => function ($query) {
            //         $query->select('booking_date', 'id');
            //     },
            //     'booking.celebrant' => function ($query) {
            //         $query->select('booking_date', 'id');
            //     },

            // ])->select('name','id','phone','country_code','email')->orderBy('id', 'DESC');
        }
        

        return   $data;

    }
}
