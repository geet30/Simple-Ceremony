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
            $records = 10;
            $req_page = 1;
            if($request->has('page')){
                $req_page = $request->page; 
            }
            $celebrants = Locations::celebrants()->get();
            $locations = Locations::all(); 
            $data  = CelebrantMethods::fetch_marriages();
           
            
            $all_marriages = (clone $data)->paginate($records, ['*'], 'page', $req_page);
            $booking_marriages = (clone $data)->where('status', 1)->paginate($records, ['*'], 'page', $req_page);
            $lodged_marriages = (clone $data)->where('status', 2)->paginate($records, ['*'], 'page', $req_page);
            $lodged_pending_marriages = (clone $data)->where('status', 3)->paginate($records, ['*'], 'page', $req_page);
            $non_legal_marriages = (clone $data)->where('status', 4)->paginate($records, ['*'], 'page', $req_page);
            $registered_marriages = (clone $data)->where('status', 5)->paginate($records, ['*'], 'page', $req_page);
            $finalised_marriages = (clone $data)->where('status', 6)->paginate($records, ['*'], 'page', $req_page);
            $settled_marriages = (clone $data)->where('status', 7)->paginate($records, ['*'], 'page', $req_page);
            $cancelled_marriages = (clone $data)->where('status', 8)->paginate($records, ['*'], 'page', $req_page);

            $dataArray = array(
                'all_marriages' => $all_marriages,
                'booking_marriages' => $booking_marriages,
            );
            if ($request->ajax()) {
                $viewurl = 'elements.celebrant.marriage.' . $slug;
                return View::make($viewurl, ['req_page' => $req_page, 'dataArray' => $dataArray]);
            }
            // dd($dataArray);
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
          
            $celebrant_details = User::where('id',Auth::user()->id )->with('celebrant')->first();
          
            // $user_id = PartnerProducts::where('id', $id)->value('user_id');
            return view('celebrant.upcoming.detail',compact('celebrants','locations','data','celebrant_details'));
            
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