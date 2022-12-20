<?php

namespace App\Http\Controllers\Celebrants;

use App\Http\Controllers\Controller;
use App\Models\{MarriageCertificateNumber, User};
use Illuminate\Http\Request;
use View;
use Redirect;
use App\Traits\Celebrant\{Methods as CelebrantMethods};
use Illuminate\Support\Facades\Auth;
class CertificateRegisterController extends Controller
{
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

            $data  = CelebrantMethods::fetch_marriage_certificate_numbers(Auth::user()->id)->paginate($records, ['*'], 'page', $req_page);
            // dd($data);
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
            // $input = $request->except('_token');    
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
        die('sad');
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enqueries  $enqueries
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = Enqueries::where('id', $id)->delete();
            return redirect('all-enquiries/all-records-tab')->with('message', 'Celebrant deleted successfully.');
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }

   

    //search function
    public function searchEnquiries(Request $request)
    {
        $req_page = 1;
        $records = 10;
        try {
            $whereClause = [];
            $data = new Enqueries();
            if ($request->has('status') && $request->filled('status')) {
                $whereClause = [
                    ['status', '=', $request->status]
                ];
            }
            if ($request->has('search') && $request->filled('search')) {
                $data = $data->where(function ($query) use ($request) {
                    $query->where('couple_one', 'like', '%' . $request->search . '%')
                        ->orWhere('couple_two', 'like', '%' . $request->search . '%')
                        ->orWhere('phone', 'like', '%' . $request->search . '%')
                        ->orWhere('enquiry_date', 'like', '%' . date('Y-m-d',strtotime($request->search)) . '%')
                        ->orWhere('marriage_date', 'like', '%' . date('Y-m-d',strtotime($request->search)) . '%');
                })->where($whereClause)->orderBy('id', 'DESC')->paginate($records, ['*'], 'page', $req_page);
            } else {
                $data = $data->orderBy('id', 'DESC')->where($whereClause)->paginate($records, ['*'], 'page', $req_page);
            }
            return View::make('admin.enquiries.search-list', ['data' => $data]);
        } catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
        }
    }
}
