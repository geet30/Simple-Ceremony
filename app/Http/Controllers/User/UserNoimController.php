<?php

namespace App\Http\Controllers\User;

use App\Models\Booking;
use App\Models\UserNoim;
use App\Models\UserParent;
use Illuminate\Support\Str;
use App\Models\UserWitness;
use App\Models\UserDocument;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserNoimRequest;
use Illuminate\Support\Facades\Request as FacadesRequest;
use PhpParser\Node\Stmt\TryCatch;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;


class UserNoimController extends Controller
{
    protected static $bladePath = 'user.NoIM.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(self::$bladePath . 'view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loggedInUserId = Auth::user()->id;
        $bookingId =  booking::whereUserId($loggedInUserId)->pluck('id')->first();
        // return $request->all();
        // dd($request->all());
        // remove the exists rows
        // UserNoim::whereUserIdAndBookingId($loggedInUserId, $bookingId)->delete();
        UserParent::whereUserIdAndBookingId($loggedInUserId, $bookingId)->delete();
        UserWitness::whereUserIdAndBookingId($loggedInUserId, $bookingId)->delete();

        $person = array_map(function ($person) use ($loggedInUserId, $bookingId) {
            $person['uuid'] = $person['uuid'] ?? Str::uuid();
            $person['user_id'] = $loggedInUserId;
            $person['booking_id'] = $bookingId;
            $person['date_of_birth'] = date('Y-m-d', strtotime($person['date_of_birth']));
            $person['conjugal_status'] = $person['conjugal_document']['first_document_name'];
            $person['name_same_as_passport_or_driving_license'] = isset($person['name_same_as_passport_or_driving_license']) && $person['name_same_as_passport_or_driving_license'] == 'on' ? true : false;
            $person['is_data_and_document_identical'] = isset($person['is_data_and_document_identical']) && $person['is_data_and_document_identical'] == 'on' ? true : false;
            $userNoim = UserNoim::updateOrCreate(['user_id' => $loggedInUserId, 'booking_id' => $bookingId, 'uuid' => $person['uuid']], $person);
            if (isset($person['document']['birth_evedence_file'])) {
                // UserDocument::whereUserIdAndBookingId($loggedInUserId, $bookingId)->where('document_type', 1)->delete();
                self::uploadDocument($person['document'], $userNoim, 'birth_evedence_file');
            }
            if (isset($person['conjugal_document']['file'])) {
                // UserDocument::whereUserIdAndBookingId($loggedInUserId, $bookingId)->where('document_type', 2)->delete();
                self::uploadDocument($person['conjugal_document'],  $userNoim, 'file', 2);
            }
            self::storeParentData($person, $loggedInUserId, $bookingId, $userNoim);
        }, $request->person);
        self::storeWitnessData($request, $loggedInUserId, $bookingId);
        return env('APP_ENV') == 'dev' ? $request->all() : redirect()->back();
    }
    private static function storeWitnessData($request, $loggedInUserId, $bookingId)
    {
        $witness = array_map(function ($witness) use ($loggedInUserId, $bookingId) {
            $witness['user_id'] = $loggedInUserId;
            $witness['booking_id'] = $bookingId;
            return $witness;
        }, $request->witness);
        UserWitness::insert($witness);
    }
    private static function storeParentData($request, $loggedInUserId, $bookingId, $userNoim)
    {
        $parents = array_map(function ($parent) use ($loggedInUserId, $bookingId, $userNoim) {
            $parent['user_id'] = $loggedInUserId;
            $parent['booking_id'] = $bookingId;
            $parent['user_noim_id'] = $userNoim->id;
            return $parent;
        }, $request['parent']);
        UserParent::insert($parents);
    }
    private function uploadDocument($document, $ref, $fileName, $documentType = 1)
    {
        $file_name = uploadFile($document[$fileName], 'uploads/documents/user/');
        $document['user_id'] = $ref->user_id;
        $document['booking_id'] = $ref->booking_id;
        $document['user_noim_id'] = $ref->id;
        $document['document_type'] = $documentType;
        $document['document_extension'] = $document[$fileName]->getClientOriginalExtension();
        $document['document_path'] = $file_name;
        UserDocument::create($document);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserNoim  $userNoim
     * @return \Illuminate\Http\Response
     */
    public function show(UserNoim $userNoim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserNoim  $userNoim
     * @return \Illuminate\Http\Response
     */
    public function edit(UserNoim $userNoim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserNoim  $userNoim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserNoim $userNoim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserNoim  $userNoim
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserNoim $userNoim)
    {
        //
    }

    public function steps()
    {
        $loggedInUserId = Auth::user()->id;
        $person = UserNoim::with('birthDocument', 'divorceOrWidowedDocument', 'parents', 'witness')->whereUserId($loggedInUserId)->get();
        // return $person;
        return view(self::$bladePath . 'steps', compact('person'));
    }
}
