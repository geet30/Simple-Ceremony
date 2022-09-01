<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Enqueries, User};
use Illuminate\Http\Request;
use View;
use Redirect;

class EnqueriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $slug)
    {
        try {
            $req_page = 1;
            $records = 10;
            if ($request->has('page')) {
                $req_page = $request->page;
            }

            $enquries = new Enqueries();
            $all_enquries = (clone $enquries)->orderBy('id', 'DESC')->paginate($records, ['*'], 'page', $req_page);
            $follow_enquries = (clone $enquries)->where('status', 0)->orderBy('id', 'DESC')->paginate($records, ['*'], 'page', $req_page);
            $booked_enquries = (clone $enquries)->where('status', 1)->orderBy('id', 'DESC')->paginate($records, ['*'], 'page', $req_page);
            $noInterest_enquries = (clone $enquries)->where('status', 2)->orderBy('id', 'DESC')->paginate($records, ['*'], 'page', $req_page);

            $dataArray = array(
                'all_enquries' => $all_enquries,
                'follow_enquries' => $follow_enquries,
                'booked_enquries' => $booked_enquries,
                'noInterest_enquries' => $noInterest_enquries
            );
            if ($request->ajax()) {
                if ($slug == 'all-records-tab') {
                    $data = $all_enquries;
                } else if ($slug == 'follow-up-tab') {
                    $data = $follow_enquries;
                } else if ($slug == 'booked-tab') {
                    $data = $booked_enquries;
                } else {
                    $data = $noInterest_enquries;
                }
                $viewurl = 'admin.enquiries.search-list';
                return View::make($viewurl, compact('data'));
            }
            return view('admin.enquiries.listing', compact('dataArray'));
        } catch (\Exception $ex) {
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
        return view('admin.enquiries.create');
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
            $input = $request->except('_token');
            $result = Enqueries::create($input);
            if ($result) {
                return redirect('all-enquiries/all-records-tab')->with('message', 'Enquiry created successfully.');
            }
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enqueries  $enqueries
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = Enqueries::find($id);
        return view('admin.enquiries.detail', compact(['detail']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enqueries  $enqueries
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = Enqueries::find($id);
        return view('admin.enquiries.edit', compact(['detail']));
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
            $result = Enqueries::where('id', $id)->update($input);
            if ($result) {
                return redirect('all-enquiries/all-records-tab')->with('message', 'Enquiry updated successfully.');
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

    //update status of enqueries
    public function changeStatus(Request $request)
    {
        try {
            $input['status'] = $request->status;
            if ($request->status == 1) {
                $data['status'] = 'Booked';
                $data['class'] = 'approved';
            } else if ($request->status == 2) {
                $data['status'] = 'No Interest';
                $data['class'] = 'rejected';
            } else if ($request->status == 0) {
                $data['status'] = 'Follow up';
                $data['class'] = 'waiting-approval';
            }
            Enqueries::where('id', $request->id)->update($input);
            return $this->successResponse($data, 'Status changed successfully.');
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
                        ->orWhere('enquiry_date', 'like', '%' . $request->search . '%')
                        ->orWhere('marriage_date', 'like', '%' . $request->search . '%');
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
