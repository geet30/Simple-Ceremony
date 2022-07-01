<?php
use App\Models\Users;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

function one_validation_message($validator){
    // To get all the error messages.
    $validation_messages = $validator->getMessageBag()->toArray();
    $validation_messages1 = array_values($validation_messages);

       $new_validation_messages = [];
       for ($i = 0; $i < count($validation_messages1); $i++) {
           $inside_element = count($validation_messages1[$i]);
            for ($j=0; $j < $inside_element; $j++) {
               // inserting array element into new array
               array_push($new_validation_messages, $validation_messages1[$i]);
            }

       }
  // Return only first occured message
  return implode(' ', $new_validation_messages[0]);
}

 /**
  *upload image function
  *
  */

  function uploadImage($image, $folder){
     $folderPath = 'uploads/images/'.$folder.'/';
     //Check if the directory already exists.
     if(!is_dir($folderPath)){
         //Directory does not exist, so lets create it.
        \File::makeDirectory(public_path().'/'.$folderPath,0777,true);
     }
     $imageName = time().'.'.$image->getClientOriginalExtension();
     if($image->move(public_path('uploads/images/'.$folder), $imageName)){
         return $imageName;
     }else{
         return false;
     }

  }

