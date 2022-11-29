<?php

namespace App\Traits\CeremonyType;

use Illuminate\Support\Facades\{View, Storage, DB, Hash, Auth};
use App\Models\{User, CeremonyType,CeremonyTypesAdditionalInfo};
use Carbon\Carbon;

trait Methods
{

    static function addData($data){    
        try{    
            // dd($data->all());      
            $input = $data->all();
            $checkName = CeremonyType::where('ceremony_name',$data->ceremony_name)->first();
            if($checkName){
                $msg = 'Ceremony Type already exists with this name.';
                return ['status' => false,'message'=>$msg];    
            }
            
            $result = CeremonyType::create($input);
            if($result){
                if($data->has('additional_info')){
                    foreach($data->additional_info as $info){
                        if($info != ''){
                            $additional_info['type_id'] = $result->id; 
                            $additional_info['additional_info'] = $info;
                            
                        }
                        CeremonyTypesAdditionalInfo::create($additional_info);
                    }   
                }
                $msg = 'Ceremony Type additional info Successfully';
                return ['status' => true,'message'=>$msg];   
            }
            $msg = 'Something went wrong';
            return ['status' => false,'message'=>$msg]; 
        }
        catch (\Exception $ex) {
            return ['status' => false,'message'=>$ex->getMessage()]; 
        }

    } 
    static function updateData($data,$id){    
        try{    
               
            $input = $data->all();
            deleteEntries($id,'App\Models\CeremonyTypesAdditionalInfo','type_id'); 
           
            $CeremonyType = CeremonyType::find($id);
            if($CeremonyType->fill($input)->save()){
                if($data->has('additional_info')){
                    foreach($data->additional_info as $info){
                        if($info != ''){
                            $additional_info['type_id'] = $id; 
                            $additional_info['additional_info'] = $info;
                            
                        }
                        CeremonyTypesAdditionalInfo::create($additional_info);
                    }   
                }
                $msg = 'Ceremony Type additional info Successfully';
                return ['status' => true,'message'=>$msg];   
            }
            $msg = 'Something went wrong';
            return ['status' => false,'message'=>$msg];  

        }
        catch (\Exception $ex) {
            return ['status' => false,'message'=>$ex->getMessage()]; 
        }

    }
}
