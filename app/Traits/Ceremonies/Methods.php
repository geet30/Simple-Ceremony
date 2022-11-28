<?php

namespace App\Traits\Ceremonies;

use App\Models\{User, Booking, CeremonyType};

trait Methods
{

    public static function fetch_all_ceremony_type($id=null)
    {   
        $data = CeremonyType::with(['additonal_info']);
        if($id !=null){
            $data = $data->where('id',$id);
        }
        
        return $data;
    }  
   
  
}
