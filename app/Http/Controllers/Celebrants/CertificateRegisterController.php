<?php

namespace App\Http\Controllers\Celebrants;

use App\Http\Controllers\Controller;
use App\Models\{MarriageCertificateNumber, User};
use Illuminate\Http\Request;
use View;
use Redirect;
use App\Traits\Celebrant\{Methods as CelebrantMethods};
use Illuminate\Support\Facades\Auth;
use App\Traits\Pagination\CustomPagination;
class CertificateRegisterController extends Controller
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
            $req_page = 1;
            $records = 10;
            if ($request->has('page')) {
                $req_page = $request->page;
            }

            $data  = CelebrantMethods::fetch_marriage_certificate_numbers(Auth::user()->id);
            // dd($data);
            $data = $this->customPaginate($data, $records, $req_page, ['*']);
            if ($request->ajax()) {
                $viewurl = 'elements.celebrant.certificate-register.listing';
                return View::make($viewurl, ['req_page' => $req_page, 'data' => $data]);
            }
            return view('celebrant.certificate-register.index', compact('data'));
        } catch (\Exception $ex) {
            dd($ex);
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
            $input = $request->all();  
            $input['user_id'] = Auth::user()->id;                
            $result = MarriageCertificateNumber::create($input);
            if ($result) {              
                $msg = 'Marriage Certificate added successfully.';
                return response()->json(['status' => true, "message" => $msg, "data" => $result]);
            }
        } catch (\Exception $ex) {
            dd($ex);
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enqueries  $enqueries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        try {
            $input = $request->except(['_token', '_method']);
           
            $result = MarriageCertificateNumber::where('id', $id)->update($input);
            if ($result) {
                $msg = 'Marriage Certificate updated successfully.';
                return response()->json(['status' => true, "message" => $msg, "data" => $result]);
            }
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
      /**
     * Update the Certiificates by couple and date specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enqueries  $enqueries
     * @return \Illuminate\Http\Response
     */
    public function searchCertificateByDate(Request $request){
        $req_page = 1;
        $records = 10;
        try {
            $data = CelebrantMethods::searchCertificateByDate($request);
            // dd($data);
            $data = $this->customPaginate($data, $records, $req_page, ['*']);
            return View::make('elements.celebrant.certificate-register.listing', ['data' => $data]);
        } catch (\Exception $ex) {
           
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
}
