<?php

namespace App\Traits\Partner;

use App\Models\{User};

trait Methods
{

    public static function partners($search=null){
        if($search !=''){
            $data = User::role('Partner')->with([
                'partnerProducts.addon' => function ($query) {
                    $query->select('name', 'id');
                },
            ])->where(function ($query) use ($search) {
                $query->where('first_name', 'like', '%' . $search . '%')
                    ->orWhere('surname', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%');
            })->orderBy('id', 'DESC');
        }else{
            $data = User::role('Partner')->with([
                'partnerProducts.addon' => function ($query) {
                    $query->select('name', 'id');
                },
            ])->select('name','id','phone','country_code','email')->orderBy('id', 'DESC');
        }
        

        return   $data;

    }
}
