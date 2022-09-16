<?php

namespace App\Http\Controllers\Celebrants;
use App\Http\Controllers\Controller;
use App\Models\{Locations,User,UserNoim,CeremonyFeedback};
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
                'lodged_marriages' => $lodged_marriages,
                'lodged_pending_marriages' => $lodged_pending_marriages,
                'non_legal_marriages' => $non_legal_marriages,
                'registered_marriages' => $registered_marriages,
                'finalised_marriages' => $finalised_marriages,
                'settled_marriages' => $settled_marriages,
                'cancelled_marriages' => $cancelled_marriages,
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
     * Search Marriages with status
     *
     * @return \Illuminate\Http\Response
     */
    public function searchCelebrantMarriagesWithStatus(Request $request)
    {
        
        try {
            $data =   CelebrantMethods::searchCelebrantMarriagesWithStatus($request);
            return View::make('elements.celebrant.marriage.search-marriages', ['data' => $data]);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * Search Marriages with status
     *
     * @return \Illuminate\Http\Response
     */
    public function searchCelebrantMarriagesWithDate(Request $request)
    {
        
        try {
            $data =   CelebrantMethods::searchCelebrantMarriagesWithDate($request);
            return View::make('elements.celebrant.marriage.search-marriages', ['data' => $data]);
        } catch (\Exception $ex) {
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
            
            $couple = UserNoim::where('booking_id',$id )->with(['booking','document'])->get();
            // dd($data);
            return view('celebrant.upcoming.detail',compact('celebrants','locations','data','celebrant_details','couple','id'));
            
        } catch (\Exception $ex) {
            dd($ex);
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }

    }
    /**
     * Store a newly created feedback in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bookingFeedback(Request $request)
    {
        try {
            $input = $request->all();
            $result = CeremonyFeedback::create($input);
            if ($result) {
                $msg = 'Feedback added successfully.';
                return response()->json(['status' => true, "message" => $msg, "data" => $result]);
            }
            return response()->json(['status' => false, "message" => 'Something went wrong.']);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
       
    /**
     * save the detail of resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveDocs(Request $request,$id){
        
        try {
            $detail = CelebrantMethods::update_booking_docs($request,$id);
            return response()->json(['status' => $detail['status'], "message" => $detail['message'],'result'=>$detail['data']]);
           
        } catch (\Exception $ex) {

            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }

    }
       
    /**
     * save the detail of resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveRecord(Request $request){
        try {
            $detail = CelebrantMethods::update_booking_details($request);
            return response()->json(['status' => $detail['status'], "message" => $detail['message']]);
           
        } catch (\Exception $ex) {

            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }

    }
       
    /**
     * Delete the detail of resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteRecord(Request $request){
       
        try {
           
            $detail = CelebrantMethods::delete_booking_record($request);
            return response()->json(['status' => $detail['status'], "message" => $detail['message']]);
           
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