<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User,Booking,Locations,CeremonyType};
use Illuminate\Support\Facades\{Auth};
use App\Traits\Pagination\CustomPagination;
use View;
use App\Traits\FinancialReport\{Methods as FinancialReport};
class FinancialReportController extends Controller
{
    use CustomPagination;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {       
        try {           
            $records = 10;
            $req_page = 1;
            if ($request->has('page')) {
                $req_page = $request->page;
            }
            $locations = Locations::all();
            $type_ceremonies = CeremonyType::all();
            $partners = User::role('Partner')->select('name','id')->get();

            $celebrants = User::role('Celebrant')->select('first_name','id')->get();
            $data  = FinancialReport::fetch_all_reports()->get();

            // dd($data);
            $data = $this->customPaginate($data, $records, $req_page, ['*']);
           
            if ($request->ajax()) {            
                $viewurl = 'elements.admin.financial-report.listing';
                return View::make($viewurl, ['req_page' => $req_page, 'data' => $data]);
            }
           
            return view('admin.financial-report.index', compact('data','celebrants','locations','type_ceremonies','partners')); 
        } catch (\Exception $ex) {
            dd($ex);
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }


    
       /**
     * Display a location listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getReportLocation(Request $request,$id)
    {       
        try {           
            $records = 10;
            $req_page = 1;
            if ($request->has('page')) {
                $req_page = $request->page;
            }
            $locations = Locations::all();
            $type_ceremonies = CeremonyType::all();
            $partners = User::role('Partner')->select('name','id')->get();          
            $celebrants = User::role('Celebrant')->select('first_name','id')->get();
            $data  = FinancialReport::fetch_all_location_reports($id)->paginate($records, ['*'], 'page', $req_page);
            // $data2 =[];
            // foreach($data as $key=>$value){
                
            //     foreach($value->booking as $result){
            //         $data2[]=  $result;
            //     }

            // }
            
            // dd($data); 
                   
            if ($request->ajax()) {            
                $viewurl = 'elements.admin.financial-report.location-listing';
                return View::make($viewurl, ['req_page' => $req_page, 'data' => $data]);
            }
            return view('admin.financial-report.reports-location', compact('data','celebrants','locations','type_ceremonies','partners')); 
        } catch (\Exception $ex) {
            dd($ex);
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * Search Report By Date.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchReportByDate(Request $request){
        try {     
            
            // dd($request->current_url);  
            if(isset($request->current_url[2]) && $request->current_url[2] !=''){
               
                $data = FinancialReport::searchReportForLocation($request);

                return View::make('elements.admin.financial-report.location-listing', ['data' => $data]);
            }  else{
                $data = FinancialReport::searchReportByDate($request);

                return View::make('elements.admin.financial-report.listing', ['data' => $data]);
            } 
            
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

    
 
   
}
