<?php

use App\Models\{Users, Notification,User};
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\{Auth};

function timeslots()
{
   $start = new \DateTime('00:00');
   $times = 24 * 2; // 24 hours * 30 mins in an hour
   $timeslot = [];
   for ($i = 0; $i < $times - 1; $i++) {
      $timeslot[] = $start->add(new \DateInterval('PT30M'))->format('H:i');
   }
   return $timeslot;
}
function deleteRecords($id, $model)
{
   try {
      $imgIds = '';
      if ($id != null) {
         $imgIds = explode(',', $id);
      }
      foreach ($imgIds as $id) {
         $model::destroy($id);
      }
      return ['status' => true, 'message' => 'Deleted'];
   } catch (\Exception $ex) {
      return ['status' => false, 'message' => $ex->getMessage()];
   }
}
function deleteEntries($id, $model, $column)
{
   try {
      $model::where($column, '=', $id)->delete();
      return ['status' => true, 'message' => 'Deleted'];
   } catch (\Exception $ex) {
      return ['status' => false, 'message' => $ex->getMessage()];
   }
}

function one_validation_message($validator)
{
   // To get all the error messages.
   $validation_messages = $validator->getMessageBag()->toArray();
   $validation_messages1 = array_values($validation_messages);

   $new_validation_messages = [];
   for ($i = 0; $i < count($validation_messages1); $i++) {
      $inside_element = count($validation_messages1[$i]);
      for ($j = 0; $j < $inside_element; $j++) {
         // inserting array element into new array
         array_push($new_validation_messages, $validation_messages1[$i]);
      }
   }
   // Return only first occured message
   return implode(' ', $new_validation_messages[0]);
}
/**
 *check mail exist
 *
 */
function checkIfMailExist($request){
  
   $checkEmail = User::where('email', $request['email'])->first();
   
   if ($checkEmail) {
       $role = $checkEmail->roles->first()->name;
       $msg = 'Email already exists as a ' . $role;
       return ['status' => false,'message'=>$msg]; 
   }
   return ['status' => true,'message'=>'']; 

}
/**
 *upload image function
 *
 */

function uploadImage($image, $folder)
{

   $folderPath = 'uploads/images/' . $folder . '/';
   //Check if the directory already exists.
   if (!is_dir($folderPath)) {
      //Directory does not exist, so lets create it.
      \File::makeDirectory(public_path() . '/' . $folderPath, 0777, true);
   }
   $fileImageNameExtension = $image->getClientOriginalName();
   $fileName = pathInfo($fileImageNameExtension, PATHINFO_FILENAME);
   $imageName = $fileName . '-' . time() . '.' . $image->getClientOriginalExtension();
   //  $imageName = $image->getClientOriginalName().'_'. time().'.'.$image->getClientOriginalExtension();
   if ($image->move(public_path('uploads/images/' . $folder), $imageName)) {
      // echo $imageName;
      return $imageName;
   } else {
      return false;
   }
}

/**
 *function to add the notifications
 *
 */
function notificationSave($sender_id, $receiver_id, $title, $body, $redirection, $type)
{
   $not['sender_id'] = $sender_id;
   $not['receiver_id'] = $receiver_id;
   $not['title'] = $title;
   $not['body'] = $body;
   $not['redirection_url'] = $redirection;
   $not['type'] = $type;
   $res = Notification::create($not);
   ($res) ? true : false;
}
