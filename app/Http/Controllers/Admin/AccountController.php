<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User};
use View;
use Redirect;
use Illuminate\Support\Facades\{Auth, Hash};
// use Validator;
use Illuminate\Support\Facades\Validator;


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
                    if (Hash::check(Auth::user()->password, $request->password) == false) {
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