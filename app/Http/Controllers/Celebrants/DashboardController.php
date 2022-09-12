<?php

namespace App\Http\Controllers\Celebrants;
use App\Http\Controllers\Controller;
use App\Models\{Locations,User};
use Illuminate\Http\Request;
use View;
use App\Traits\Celebrant\{Methods as CelebrantMethods};
use Illuminate\Support\Facades\Auth; 

class DashboardController extends Controller
{
    public function index(Request $request,$slug){
        try {          
            $records = 1;
            $req_page = 1;
            if($request->has('page')){
                $req_page = $request->page; 
            }
            $celebrants = Locations::celebrants()->get();
            $locations = Locations::all(); 
            $data  = CelebrantMethods::fetch_marriages();
           
            
            $all_marriages = (clone $data)->paginate($records, ['*'], 'page', $req_page);
            $booking_marriages = (clone $data)->where('status', 1)->paginate($records, ['*'], 'page', $req_page);

            $dataArray = array(
                'all_marriages' => $all_marriages,
                'booking_marriages' => $booking_marriages,
            );
            if ($request->ajax()) {
                $viewurl = 'elements.celebrant.marriage.' . $slug;
                return View::make($viewurl, ['req_page' => $req_page, 'dataArray' => $dataArray]);
            }
            // dd($all_marriages);
            return view('celebrant.upcoming.listing', compact('dataArray','locations','celebrants'));
        } catch (\Exception $ex) {

            dd($ex);
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }

    }
    /**
     * View the detail of resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $request,$id){
        try {
            $celebrants = Locations::celebrants()->get();
            $locations = Locations::all();
            $data = CelebrantMethods::marriage_detail($id)->first();
            // dd($data);
            // $user_id = PartnerProducts::where('id', $id)->value('user_id');
            return view('celebrant.upcoming.detail',compact('celebrants','locations','data'));
            
        } catch (\Exception $ex) {
            dd($ex);
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }

    }
    /**
     * search the specified booking location in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
    * */

    public function searchMarriagesByUser(Request $request){
        try {
            $data = CelebrantMethods::searchByUser($request);
            // dd($data);
            return View::make('elements.celebrant.marriage.search-marriages', ['data' => $data]);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }   

    
}