<?php

namespace App\Traits\Marriages;

use App\Models\{User, Booking};

trait Methods
{

    public static function marriages($date, $search = null)
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
            ])->where(function ($query) use ($search) {
                $query->where('first_name', 'like', '%' . $search . '%')
                    ->orWhere('surname', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%');
            })->orderBy('id', 'DESC');
        } else {
            $data = User::role('User')
                ->whereHas('booking', function ($query) use ($date) {
                    $date = date('Y-m-d', strtotime($date));
                    $query->select('booking_date', 'id', 'user_id', 'locationId', 'celebrant_id', 'first_couple_name', 'status', 'created_at', 'second_couple_name', 'booking_start_time', 'booking_end_time')->whereBookingDate($date);
                })
                ->with([
                    'booking.location' => function ($query) {
                        $query->select('name', 'id', 'price');
                    },
                    'booking.celebrant' => function ($query) {
                        $query->select('first_name', 'id');
                    },

                ])->select('name', 'id', 'phone', 'country_code', 'email')
                ->orderBy('id', 'DESC');
        }
        return $data;
    }
    public static function fetch_all_marriages()
    {

        $data =   Booking::with([
            'user' => function ($query) {
                $query->select('email', 'phone', 'country_code', 'id');
            },
            'location' => function ($query) {
                $query->select('name', 'id', 'price');
            },
            'celebrant' => function ($query) {
                $query->select('first_name', 'id');
            }
        ]);
      
        return $data;
    }
    public static function fetch_marriages()
    {

        $data = User::role('User')->with([
            'booking' => function ($query) {
                $query->select('booking_date', 'id', 'user_id', 'locationId', 'celebrant_id', 'first_couple_name', 'status', 'created_at', 'second_couple_name','ceremony_type');
            },
            'booking.location' => function ($query) {
                $query->select('name', 'id', 'price');
            },
            'booking.celebrant' => function ($query) {
                $query->select('first_name', 'id');
            },

        ])->select('name', 'id', 'phone', 'country_code', 'email')->orderBy('id', 'DESC');
        return $data;
    }
    public static function searchByUser($request)
    {
        $req_page = 1;
        $records = 10;
        $search = $request->search;
        $data = self::fetch_all_marriages();
    
        if ($request->has('status') && $request->filled('status')) {
            $whereClause = [
                ['status', '=', $request->status]
            ];
            $data = $data->where($whereClause);
        }
        if( $search !=''){
            $data = $data->where(function ($query) use($search) {
                $query->where('first_couple_name', 'like', '%' . $search . '%')
                    ->orWhere('second_couple_name', 'like', '%' . $search . '%');
            });
        }
        

        // $data = $data->orwhereHas('celebrant', (function ($q) use ($search) {

        //     $q->where('first_name', 'like', '%' . $search . '%')
        //         ->orWhere('surname', 'like', '%' . $search . '%')
        //         ->orWhere('email', 'like', '%' . $search . '%');
        // }));
       
        return $data->paginate($records, ['*'], 'page', $req_page);
    }
    public static function marriage_detail($id = null)
    {
        $data =   Booking::with([
            'user' => function ($query) {
                $query->select('email', 'phone', 'country_code', 'id');
            },
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
    public static function searchMarriageLocation($request)
    {
        
        $req_page = 1;
        $records = 10;
        $locations = self::fetch_all_marriages();
        if ($request->has('status') && $request->filled('status')) {
            $whereClause = [
                ['status', '=', $request->status]
            ];
            $data = $locations->where($whereClause);
        }

        if ($request->has('filter') && !empty($request->filter)) {
            if (in_array('0', $request->filter)) {
                $data = $locations;
            } else {
                $id = $request->filter;
                $data = $locations->whereIn('locationId', $id);
                // $data = $locations->whereHas('booking', (function ($q) use ($id) {
                //     $q->whereIn('locationId', $id);
                // }));
            }
            return $data->paginate($records, ['*'], 'page', $req_page);
        } else {
            return $locations->paginate($records, ['*'], 'page', $req_page);
        }
    }
    public static function searchMarriagesByDate($request)
    {

        $req_page = 1;
        $records = 10;
        $whereClause = [];
        $data = self::fetch_all_marriages();
        if ($request->has('status') && $request->filled('status')) {
            $whereClause = [
                ['status', '=', $request->status]
            ];
            $data = $data->where($whereClause);
        }
        if ($request->has('type') && $request->filled('type') &&  $request->type == 'date') {
            $date = date('Y-m-d', strtotime($request->search));
        }
        if ($request->has('search') && $request->filled('search')) {
            $data->Where('booking_date', 'like', '%' . $date . '%')
                    ->orWhere('created_at', 'like', '%' . $date . '%');
            // $data = $data->whereHas('booking', (function ($q) use ($date) {

            //     $q->Where('booking_date', 'like', '%' . $date . '%')
            //         ->orWhere('created_at', 'like', '%' . $date . '%');
            // }))->orderBy('id', 'DESC');
        } else {
            $data = $data->orderBy('id', 'DESC');
        }
        return $data->paginate($records, ['*'], 'page', $req_page);
    }
}
