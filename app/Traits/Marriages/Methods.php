<?php

namespace App\Traits\Marriages;

use App\Models\{User, Booking};

trait Methods
{

    public static function marriages($search = null)
    {
        if ($search != '') {
            $data = User::role(['User'])->with([
                'booking' => function ($query) {
                    $query->select('booking_date', 'id', 'user_id', 'locationId', 'celebrant_id', 'first_couple_name', 'status', 'created_at', 'second_couple_name');
                },
                'booking.location' => function ($query) {
                    $query->select('name', 'id', 'price');
                },
                'booking.celebrant' => function ($query) use ($search) {
                    $query->select('first_name', 'id')
                        ->where(function ($query) use ($search) {
                            $query->where('first_name', 'like', '%' . $search . '%')
                                ->orWhere('surname', 'like', '%' . $search . '%')
                                ->orWhere('email', 'like', '%' . $search . '%');
                        });
                },
            ])
                ->where(function ($query) use ($search) {
                    $query->where('first_name', 'like', '%' . $search . '%')
                        ->orWhere('surname', 'like', '%' . $search . '%')
                        ->orWhere('email', 'like', '%' . $search . '%');
                })->orderBy('id', 'DESC');
            dd($data->get()->toArray());
        } else {
            $data = User::role('User')->with([
                'booking' => function ($query) {
                    $query->select('booking_date', 'id', 'user_id', 'locationId', 'celebrant_id', 'first_couple_name', 'status', 'created_at', 'second_couple_name');
                },
                'booking.location' => function ($query) {
                    $query->select('name', 'id', 'price');
                },
                'booking.celebrant' => function ($query) {
                    $query->select('first_name', 'id');
                },

            ])->select('name', 'id', 'phone', 'country_code', 'email')->orderBy('id', 'DESC');
        }


        return   $data;
    }
    public static function marriage_detail($id = null)
    {
        $data =   Booking::with([
            'location' => function ($query) {
                $query->select('name', 'id', 'price');
            },
            'celebrant' => function ($query) {
                $query->select('first_name', 'id');
            }
        ]);
        if ($id != null) {
            $data = $data->where('id', $id);
        }
        return   $data;
    }
}
