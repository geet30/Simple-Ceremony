<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\{User,ListToDo};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth,Hash}; 
use Cookie;
use Validator;
use Illuminate\Support\Carbon;

class UserListToDoController extends Controller
{
    /**  
     * index 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        try{
            $user_id = Auth::user()->id;                
                  
            $lists = ListToDo::where('user_id',$user_id)->get();
            if(count($lists) > 0){
                return view('user.list.listing',compact(['lists']));
            }else{
                return view('user.list.listing-empty');
            }
            
        }catch (\Exception $e) {
            dd($e);
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }        
       
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $input = $request->except('_token');
            $input['due_date'] = date('Y-m-d',strtotime($request->due_date));
            $input['user_id'] = Auth::user()->id;
                    
            $result = ListToDo::create($input);
            if ($result) {
                return redirect('user/list-to-do')->with(['status' => true, "message" => 'List to do created successfully.', "class" => 'alert-success']);
            }
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enqueries  $enqueries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
           
            $input = $request->except('_token');
            $input['due_date'] = date('Y-m-d',strtotime($request->due_date));
            $input['user_id'] = Auth::user()->id;
           
            $result = ListToDo::where('id', $id)->update($input);
            if ($result) {
                return redirect('user/list-to-do')->with(['status' => true, "message" => 'List to do updated successfully.', "class" => 'alert-success']);
                
                
            }
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enqueries  $enqueries
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $detail = Enqueries::find($id);
        // return view('admin.enquiries.detail', compact(['detail']));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enqueries  $enqueries
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
      
        try {
           
            ListToDo::destroy($id);
            // $data = ListToDo::where('id', $id)->delete();
            $route = 'addons/all#addons-setting';
            return redirect('user/list-to-do')->with(['message' => 'List to do deleted successfully', 'class' => 'alert-success']);

        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
}
