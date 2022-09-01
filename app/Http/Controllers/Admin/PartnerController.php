<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{User, Addons, PartnerProducts, PackageLocations, Locations};
use Illuminate\Http\Request;
use View;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Traits\Partner\{Methods as PartnerMethods};

class PartnerController extends Controller
{
    use PartnerMethods;

    public function index(Request $request)
    {
        try {
            $records = 1;
            $req_page = 1;
            $search = '';
            if ($request->has('page')) {
                $req_page = $request->page;
            }
            if ($request->has('search')) {
                $search = $request->search;
            }

            if ($request->has('search') && $request->filled('search')) {
                $search = $request->search;
                $data  = PartnerMethods::partners($search)->paginate($records, ['*'], 'page', $req_page);
            } else {
                $data  = PartnerMethods::partners($search)->paginate($records, ['*'], 'page', $req_page);
            }

            if ($request->ajax()) {

                $viewurl = 'elements.admin.partner.listing';
                return View::make($viewurl, ['req_page' => $req_page, 'data' => $data, 'search' => $search]);
            }
            return view('admin.partner.index', compact('data'));
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
        try {
            $addons = Addons::all();
            $locations = Locations::all();
            return view('admin.partner.create', compact('addons', 'locations'));
        } catch (\Exception $ex) {

            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * store the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $response = User::createPartner($request->all());
            if ($response['status'] == false) {
                return redirect()->back()->with(['message' => $response['message'], 'class' => 'alert-danger'])->withInput();
            } else {
                $route = 'partner';
                return redirect($route)->with(['message' => $response['message'], 'class' => 'alert-success']);
            }
        } catch (\Exception $ex) {
            dd($ex->getMessage());
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * update the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $response = User::updatePackage($request->all(), $id);
            if ($response['status'] == false) {
                return redirect()->back()->with(['message' => $response['message'], 'class' => 'alert-danger'])->withInput();
            } else {
                $route = 'partner';
                return redirect($route)->with(['message' => $response['message'], 'class' => 'alert-success']);
            }
        } catch (\Exception $ex) {
            dd($ex);
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * Show the form for editing a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        try {
            $addons = Addons::all();
            $user_id = PartnerProducts::where('id', $id)->value('user_id');
            $product_id =  $id;
            $partner_details = Addons::products()->where('user_id', $user_id)->first()->toArray();
            $columns = ['name', 'id', 'price', 'address', 'town', 'why_this_location', 'cover_image'];
            $locations = Locations::getLocations('', $columns)->get();
            // dd($partner_details);
            return view('admin.partner.edit-package', compact('partner_details', 'addons', 'locations', 'product_id'));
        } catch (\Exception $ex) {

            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * Display a detail of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function partnerDetail(Request $request, $id)
    {
        try {
            $user_id = PartnerProducts::where('id', $id)->value('user_id');
            $data = Addons::products()->where('user_id', $user_id)->get()->toArray();
            $product_id =  $id;
            $addons = Addons::all();
            $partner_details = Addons::products()->where('user_id', $user_id)->first()->toArray();
            $columns = ['name', 'id', 'price', 'address', 'town', 'why_this_location', 'cover_image'];
            $allLocations = Locations::getLocations('', $columns)->get();
            $partner_locations = PackageLocations::with('locations')->where('user_id', $user_id)->where('product_id', $id)->get();
            return view('admin.partner.partner-details', compact('data', 'user_id', 'partner_details', 'addons', 'allLocations', 'product_id', 'partner_locations'));
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * Store a detail of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function personalData(Request $request, $partnerId)
    {

        try {
            $response = User::updatePartner($request->all(), $partnerId);
            if ($response['status'] == false) {
                return redirect()->back()->with(['message' => $response['message'], 'class' => 'alert-danger'])->withInput();
            } else {
                $route = 'partner/details/' . $request->product_id . '#personal-data';
                return redirect($route)->with(['message' => $response['message'], 'class' => 'alert-success']);
            }
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * Display a detail of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function packageDetail(Request $request, $id)
    {
        try {
            $data = Addons::products()->where('id', $id)->first()->toArray();
            return view('admin.partner.package-details', compact('data', 'id'));
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * show image gallery of packages.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function gallery($id, $addonid)
    {
        try {
            $data = Addons::packageGallery($id)->first()->toArray();
            return view('admin.partner.gallery', compact(['data', 'addonid']));
        } catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
        }
    }
}
