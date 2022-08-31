<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Booking,Locations};
class MarriagesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $slug = null)
    {
        try {
           
            $records = 10;
            $req_page = 1;
            if($request->has('page')){
                $req_page = $request->page; 
            }
            $locations = Locations::all();
            $data = Booking::marriages()->paginate($records, ['*'], 'page', $req_page); 
            // dd($data);
            // if($request->ajax()){  
            //     if($slug == ''){
            //         $slug = 'all-requests';
            //     }
            //     $viewurl = 'elements.admin.location.' . $slug;
            //     return View::make($viewurl, ['req_page' => $req_page, 'data' => $data]);
            // }
            return view('admin.marriages.view', compact('data','locations'));
        } catch (\Exception $ex) {

dd($ex->getMessage());
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
}
