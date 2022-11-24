<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User,CeremonyType,Locations};
use Illuminate\Support\Facades\{Auth};
use View;
use App\Traits\Ceremonies\{Methods as Ceremonies};

class CeremoniesTypeController extends Controller
{
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

            $celebrants = User::role('Celebrant')->select('first_name','id')->get();
            $data  = Ceremonies::fetch_all_ceremonies()->paginate($records, ['*'], 'page', $req_page);
            // dd($data);
           
            if ($request->ajax()) {            
                $viewurl = 'elements.admin.financial-report.listing';
                return View::make($viewurl, ['req_page' => $req_page, 'data' => $data]);
            }
           
            return view('admin.type-ceremonies.index', compact('data','celebrants','locations')); 
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
            return view('admin.type-ceremonies.create');
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
            $input = $request->except('_token');
                    
            $result = CeremonyType::create($input);
            if ($result) {
                return redirect('all-type-of-ceremonies')->with('message', 'Ceremony Type created successfully.');
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
        $detail = CeremonyType::find($id);
        return view('admin.type-ceremonies.edit', compact(['detail']));
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
        try {
            $input = $request->except(['_token', '_method']);
           
            $result = CeremonyType::where('id', $id)->update($input);
            if ($result) {
                return redirect('all-type-of-ceremonies')->with('message', 'Ceremony Type updated successfully.');
            }
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
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
