<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Booking,Locations,UserNoim,User};
use App\Traits\Marriages\{Methods as MarriagesMethods};
use View;
use Illuminate\Support\Facades\Auth; 
class MarriagesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $slug)
    {
       
        try {          
            $records = 10;
            $req_page = 1;
            if($request->has('page')){
                $req_page = $request->page; 
            }
            $celebrants = Locations::celebrants()->get();
            $locations = Locations::all(); 
            $data  = MarriagesMethods::fetch_all_marriages();
           
           
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
                'lodged_marriages' => $lodged_marriages,
                'lodged_pending_marriages' => $lodged_pending_marriages,
                'non_legal_marriages' => $non_legal_marriages,
                'registered_marriages' => $registered_marriages,
                'finalised_marriages' => $finalised_marriages,
                'settled_marriages' => $settled_marriages,
                'cancelled_marriages' => $cancelled_marriages,
            );
            if ($request->ajax()) {
                $viewurl = 'elements.admin.marriage.' . $slug;
                return View::make($viewurl, ['req_page' => $req_page, 'dataArray' => $dataArray]);
            }
            // dd($dataArray);
            return view('admin.marriages.view', compact('dataArray','locations','celebrants'));
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

    public function searchBooking(Request $request)
    {
        try {
            $columns = ['name','id','price','address','town','why_this_location','cover_image'];

            if($request->booking_date=='' && $request->booking_start_time=='' && $request->booking_end_time=='' && $request->id!=''){
                $data = Locations::getLocations($request->id,$columns)->get();
                return View::make('pages.home.search-location', ['locations' => $data]);
            }else{
                $data = Booking::searchBooking($request);
                return View::make('pages.home.search-booking', ['locations' => $data]);
            }
        }
        catch (\Exception $ex) {
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

    public function searchMarriagesByDate(Request $request){
        try {
            $data =   MarriagesMethods::searchMarriagesByDate($request);
            return View::make('elements.admin.marriage.search-marriages', ['data' => $data]);
        } catch (\Exception $ex) {
           
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
    public function searchMarriageByLocation(Request $request){
        try {
            $data =   MarriagesMethods::searchMarriageLocation($request);
            // dd($data);
            return View::make('elements.admin.marriage.search-marriages', ['data' => $data]);
        } catch (\Exception $ex) {
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
            $data = MarriagesMethods::searchByUser($request);
            // dd($data);
            return View::make('elements.admin.marriage.search-marriages', ['data' => $data]);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }      
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveCelebrant(Request $request){
        try {
           
            $id = $request->input('id');
            $celebrant_id = $request->input('celebrant_id');
            Booking::where('id', $id)->update(['celebrant_id' => $celebrant_id]);
            $msg = 'Celebrant assigned successfully.';
            return response()->json(['status' => true, "message" => $msg]);
        } catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
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
            $data = MarriagesMethods::marriage_detail($id)->first();
           
            
            $couple = UserNoim::where('booking_id',$id )->with(['booking','birthDocument'])->get();
            $UserId=booking::whereId($id)->pluck('celebrant_id')->first();     
                          
            $celebrant_details =User::where('id',$UserId)->with('celebrant')->first();            
            return view('admin.marriages.detail',compact('celebrants','locations','data','celebrant_details','couple','id'));
            
        } catch (\Exception $ex) {
            dd($ex);
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }

    }
}
