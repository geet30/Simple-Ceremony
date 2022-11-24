<?php

namespace App\Traits\Ceremonies;

use App\Models\{User, Booking, Locations};

trait Methods
{

    public static function fetch_all_ceremonies($id=null)
    {   
        $data = Locations::whereHas('booking')->with(['booking']);
        if($id !=null){
            $data = $data->where('id',$id);
        }
        
        return $data;
    }  
   
  
}
