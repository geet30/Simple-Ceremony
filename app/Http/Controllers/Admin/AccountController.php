<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User,Locations};
use View;
use Redirect;
use Illuminate\Support\Facades\{Auth, Hash};
use Illuminate\Support\Facades\Validator;
use App\Mail\{SendFollowUpMail};
use App\Traits\Celebrant\{Methods as CelebrantMethods};
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.account.detail');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCelebrantAccount()
    {
        try {
            $allLocations = Locations::all();
            $id = Auth::user()->id;
            $data = User::where('id',$id )->with(['celebrant', 'celebrantLocations.location' => function ($query) {
                $query->select('name', 'id');
            }])->first();
            // dd($data);
            return view('celebrant.profile.setting',compact('allLocations','id','data'));
        }catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        } 
    }

   /**
     * Send follow up Email.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendFollowUpEmailOnButton(Request $request,$user_id,$celebrant_id)
    {
      $user_email = User::where('id', $user_id)->value('email');
      $data = User::where('id', $celebrant_id)->with('celebrant')->first();
    
        try {
            $when = now()->addMinutes(1);
            $dataMail  = array(
                'email'=>$data->email,
                'subject' => $data->celebrant->follow_subject,
                'body' => $data->celebrant->follow_Description,
                
            );
            $sendMail = new SendFollowUpMail($dataMail);
            \Mail::to($user_email)->later($when, $sendMail);
            return Redirect::back()->with('open_modal', 'yes');

        }catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        } 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateCelebrantAccount(Request $request)
    {
       
        try {
            if ($request->ajax()) {
                if ($request->has('current_password')) {
                    if (Hash::check($request->current_password,Auth::user()->password) == false) {
                        return $this->errorResponse([], 'Current password is not correct.', 400);
                    }
                }
                $response = User::saveProfileDetail($request,  Auth::user()->id);
                if ($response) {
                    return $this->successResponse([], 'Password changed successfully.');
                }
            }
            $response = User::updateCelebrant($request->all(), Auth::user()->id);
            if ($response) {
                return redirect('profile')->with('message', 'Profile updated successfully.');
            }
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }  
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserAccount()
    {
        try {
            
            $id = Auth::user()->id;
            $data = User::where('id',$id )->with(['booking_user'])->first();
            return view('user.profile.setting',compact('id','data'));
        }catch (\Exception $ex) {
            dd($ex);
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        } 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateUserAccount(Request $request)
    {
        try {
            if ($request->ajax()) {
                if ($request->has('current_password')) {
                    if (Hash::check($request->current_password,Auth::user()->password) == false) {
                        return $this->errorResponse([], 'Current password is not correct.', 400);
                    }
                }
                $response = User::saveProfileDetail($request,  Auth::user()->id);
                if ($response) {
                    return $this->successResponse([], 'Password changed successfully.');
                }
            }
            $response = User::updateUserDetail($request->all(), Auth::user()->id);
            if ($response) {
                return redirect('user/profile')->with('message', 'Profile updated successfully.');
            }
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }  
    }   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $id = Auth::user()->id;
            if ($request->ajax()) {
                if ($request->has('current_password')) {
                    if (Hash::check($request->current_password,Auth::user()->password) == false) {
                        return $this->errorResponse([], 'Current password is not correct.', 400);
                    }
                }
                $response = User::saveProfileDetail($request, $id);
                if ($response) {
                    return $this->successResponse([], 'Password changed successfully.');
                }
            }
            $response = User::saveProfileDetail($request, $id);
            if ($response) {
                return redirect('/account')->with('message', 'Detail updated successfully.');
            }
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.account.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Store value of admin tax for both celebrant and partner.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addAdminTax(Request $request)
    {
        try {

            $id = Auth::user()->id;
            if ($request->ajax()) {
                $response = User::saveAdminTax($request, $id);
                if ($response) {
                    return $this->successResponse([], 'Tax detail saved successfully.');
                }
            }
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
}
