<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{User, Locations,Booking};
use Illuminate\Http\Request;
use View;
use Redirect;
use Illuminate\Support\Facades\Auth;

class CelebrantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [];
        $req_page = 1;
        $search = '';
        $records = 10;
        if ($request->has('page')) {
            $req_page = $request->page;
        }
        if ($request->has('search')) {
            $search = $request->search;
        }
        if ($request->has('search') && $request->filled('search')) {
            $search = $request->search;
            $data = User::role('Celebrant')->with(['celebrantLocations.location' => function ($query) {
                $query->select('name', 'id');
            }])->where(function ($query) use ($request) {
                $query->where('first_name', 'like', '%' . $request->search . '%')
                    ->orWhere('surname', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%');
            })->orderBy('id', 'DESC')->paginate($records, ['*'], 'page', $req_page);
        } else {
            $data = User::role('Celebrant')->with(['celebrantLocations.location' => function ($query) {
                $query->select('name', 'id');
            }])->orderBy('id', 'DESC')->paginate($records, ['*'], 'page', $req_page);
        }
        if ($request->ajax()) {
            return View::make('elements.admin.celebrant.listing', ['req_page' => $req_page, 'celebrants' => $data, 'search' => $search]);
        }
        return View::make('admin.marriage-celebrants.index', ['req_page' => $req_page, 'celebrants' => $data, 'search' => $search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allLocations = Locations::all();
        return view('admin.marriage-celebrants.create', compact('allLocations'));
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
            $checkEmail = User::where('email', $request->user['email'])->first();
            if ($checkEmail) {
                $role = $checkEmail->roles->first()->name;
                $msg = 'Email already exists as a ' . $role;
                return \Redirect::back()->withErrors(['msg' => $msg]);
            }
            $response = User::createCelebrant($request->all());
            if ($response) {
                return redirect('marriage-celebrants')->with('message', 'Celebrant created successfully.');
            }
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Celebrants  $celebrants
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $allLocations = Locations::all();
            $data = User::where('id', $id)->with(['celebrant', 'celebrantLocations.location' => function ($query) {
                $query->select('name', 'id');
            }])->first();
            $booking = Booking::with('location')->where('celebrant_id',$id)->get();
            return view('admin.marriage-celebrants.detail', compact(['data', 'id', 'allLocations','booking']));
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Celebrants  $celebrants
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Celebrants  $celebrants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $response = User::updateCelebrant($request->all(), $id);
            if ($response) {
                return redirect('marriage-celebrants')->with('message', 'Celebrant updated successfully.');
            }
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Celebrants  $celebrants
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = User::where('id', $id)->delete();
            return redirect('marriage-celebrants')->with('message', 'Celebrant deleted successfully.');
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }

    /**
     * Change status of user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request)
    {
        try {
            $result =   User::changeStatus($request);
            if ($result) {
                return $this->successResponse($result, 'Status changed successfully.');
            }
            return response()->json(['status' => false, "message" => 'something went wrong']);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
}
