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
            ])->where('first_name', 'like', '%' . $search . '%')->where('contact_name', 'like', '%' . $search . '%')->orwhere('name', 'like', '%' . $search . '%')->orwhere('email', 'like', '%' . $search . '%')->orderBy('id', 'DESC');
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
