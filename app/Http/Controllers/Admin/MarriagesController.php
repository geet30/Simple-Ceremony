<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Booking,Locations};
use App\Traits\Marriages\{Methods as MarriagesMethods};
use View;
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
            $data  = MarriagesMethods::fetch_marriages();
           
           
            $all_marriages = (clone $data)->paginate($records, ['*'], 'page', $req_page);
            $booking_marriages = (clone $data)->where('status', 1)->paginate($records, ['*'], 'page', $req_page);

            $dataArray = array(
                'all_marriages' => $all_marriages,
                'booking_marriages' => $booking_marriages,
            );
            if ($request->ajax()) {
                $viewurl = 'elements.admin.marriage.' . $slug;
                return View::make($viewurl, ['req_page' => $req_page, 'dataArray' => $dataArray]);
            }
            // dd($data);
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
            $data =   MarriagesMethods::searchMarriages($request);
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
            // dd($data);
            // $user_id = PartnerProducts::where('id', $id)->value('user_id');
            return view('admin.marriages.detail',compact('celebrants','locations','data'));
            
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }

    }
}
