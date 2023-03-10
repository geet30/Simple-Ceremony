<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User, Invoices,Booking};
use Illuminate\Support\Facades\{Auth};
use View;
use App\Traits\Invoices\{Methods as InvoicesMethod};
class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$slug = null)
    {       
        try {           
            $records = 10;
            $req_page = 1;
            if ($request->has('page')) {
                $req_page = $request->page;
            }
            $celebrants = User::role('Celebrant')->select('first_name','id')->get();
            $data  = InvoicesMethod::fetch_all_payments($slug)->paginate($records, ['*'], 'page', $req_page);
           
            if ($request->ajax()) {            
                $viewurl = 'elements.admin.payments.' . $slug;
                return View::make($viewurl, ['req_page' => $req_page, 'data' => $data]);
            }
            // dd($celebrant);
            return view('admin.invoices.index', compact('data','celebrants')); 
        } catch (\Exception $ex) {
            dd($ex);
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
        try {
            $celebrants = User::role('Celebrant')->select('first_name','id')->get();
            $couples = Booking::select('first_couple_name','second_couple_name','id')->get();
            return view('admin.invoices.create-invoice', compact('celebrants','couples'));
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
    public function store(Request $request)
    {
        try {         
            $response =   InvoicesMethod::createCustomInvoice($request);
            if ($response) {
                return redirect('all-payments/celebrants-invoice')->with('message', 'Invoices created successfully.');
                return \Redirect::back()->with('message', 'Invoices created successfully');
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
        //
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        try {
            $data = Invoices::where('id', $request->id)->delete();
            return redirect('all-payments/celebrants-invoice')->with('message', 'Celebrant deleted successfully.');
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
        
        // deleteEntries($id,'App\Models\CelebrantLocations','request_location_id'); 
    }
    /**
     * search the specified booking location in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     * */

    public function searchByStatusDate(Request $request){
        try {
            $data =   InvoicesMethod::searchPaymentsByDate($request);
            return View::make('elements.admin.payments.search-payments', ['data' => $data]);
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

    public function searchByInvoice(Request $request){
        try {
            $data =   InvoicesMethod::searchByInvoice($request);
            return View::make('elements.admin.payments.search-payments', ['data' => $data]);
        } catch (\Exception $ex) {
           
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * search the specified booking in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $booking
     * @return \Illuminate\Http\Response
     * */  
    public function getUserInfo(Request $request){
       
        try {
            $getUserInfo = InvoicesMethod::getUserInfo($request->id);
            if (!empty($getUserInfo)) {
                return $this->successResponse($getUserInfo, 'data found successfully.');
            }
            return response()->json(['status' => false, "message" => 'something went wrong']);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    public function getRecipientInfo(Request $request){
       
        try {
            $getRecipientInfo = InvoicesMethod::getRecipientInfo($request->id);
            if (!empty($getRecipientInfo)) {
                return $this->successResponse($getRecipientInfo, 'data found successfully.');
            }
            return response()->json(['status' => false, "message" => 'something went wrong']);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    
}
