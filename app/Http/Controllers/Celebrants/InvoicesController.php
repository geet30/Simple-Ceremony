<?php

namespace App\Http\Controllers\Celebrants;

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
            $user_id = Auth::user()->id;  
                  
            $records = 10;
            $req_page = 1;
            if ($request->has('page')) {
                $req_page = $request->page;
            }
            $celebrants = User::role('Celebrant')->select('first_name','id')->get();
            $data  = InvoicesMethod::fetch_all_payments($slug,$user_id)->paginate($records, ['*'], 'page', $req_page);
           
            if ($request->ajax()) {            
                $viewurl = 'celebrant.invoices.listing';
                return View::make($viewurl, ['req_page' => $req_page, 'data' => $data]);
            }
            // dd($celebrant);
            return view('celebrant.invoices.index', compact('data','celebrants')); 
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
            $admin = User::role('Admin')->select('name','id')->first();
            $couples = Booking::select('first_couple_name','second_couple_name','id','status')->get();
            $booking_status = Booking::select('id','status')->first();
            return view('celebrant.invoices.create', compact('admin','couples'));
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
            $response =   InvoicesMethod::createCelebrantCustomInvoice($request);
            if ($response) {
                return redirect('invoices')->with('message', 'Invoices created successfully.');
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
 
    }
      /**
     * search the specified booking location in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     * */

    public function searchCelebrantInvoices(Request $request){
        try {
            $data =   InvoicesMethod::searchCelebrantInvoices($request);
            return View::make('celebrant.invoices.listing', ['data' => $data]);
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

 
    
}
