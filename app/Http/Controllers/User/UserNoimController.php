<?php

namespace App\Http\Controllers\User;

use App\Models\Booking;
use App\Models\UserNoim;
use App\Models\UserParent;
use Illuminate\Support\Str;
use App\Models\UserWitness;
use App\Models\UserDocument;
use App\Models\UserMarriageDocument;
use App\Models\UserNoimReferrers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserNoimRequest;
use Illuminate\Support\Facades\Request as FacadesRequest;
use PhpParser\Node\Stmt\TryCatch;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;
use PDF;

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loggedInUserId = Auth::user()->id;
        $bookingId =  booking::whereUserId($loggedInUserId)->pluck('id')->first();
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
            if (isset($person['conjugal_document'])) {
                $selectedIndex = $person['conjugal_document']['first_document_name'];
                if (isset($person['conjugal_document'][$selectedIndex])) {
                    if (isset($person['conjugal_document'][$selectedIndex]['file'])) {
                        self::uploadDocument($person['conjugal_document'][$selectedIndex],  $userNoim, 'file', 2, $person['conjugal_document']['first_document_name']);
                    }
                }
            }
            self::storeParentData($person, $loggedInUserId, $bookingId, $userNoim);
        }, $request->person);
        self::storeWitnessData($request, $loggedInUserId, $bookingId);
        return env('APP_ENV') == 'dev' ? $request->all() : redirect()->route('user-noim.steps2.get');
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
        $document['date_last_marriage_ended'] = isset($document['date_last_marriage_ended']) ?  date('Y-m-d', strtotime($document['date_last_marriage_ended'])) : null;
        $document['user_id'] = $ref->user_id;
        $document['booking_id'] = $ref->booking_id;
        $document['user_noim_id'] = $ref->id;
        $document['document_type'] = $documentType;
        $document['document_extension'] = $document[$fileName]->getClientOriginalExtension();
        $document['document_path'] = $file_name;
        UserDocument::create($document);
    }

    public function steps()
    {
        $loggedInUserId = Auth::user()->id;
        $person = UserNoim::with('birthDocument', 'divorceOrWidowedDocument', 'parents', 'witness')->whereUserId($loggedInUserId)->get();
        // return $person;
        return view(self::$bladePath . 'steps', compact('person'));
    }
    public function step2()
    {
        $loggedInUserId = Auth::user()->id;
        $bookingId =  booking::whereUserId($loggedInUserId)->pluck('id')->first();
        $referrer = UserNoimReferrers::where(['user_id' => $loggedInUserId, 'booking_id' => $bookingId])->first();
        return view(self::$bladePath . 'step-2', compact('referrer'));
    }
    public function referrer(Request $request)
    {
        $loggedInUserId = Auth::user()->id;
        $bookingId =  booking::whereUserId($loggedInUserId)->pluck('id')->first();
        $request->merge([
            'user_id' => $loggedInUserId,
            'booking_id' => $bookingId
        ]);
        UserNoimReferrers::updateOrCreate(['user_id' => $loggedInUserId, 'booking_id' => $bookingId], $request->all());
        return redirect()->back();
        return $request->all();
    }

    public function userNoim($id)
    {
        $person = UserNoim::where('booking_id', $id)->with(['birthDocument', 'divorceOrWidowedDocument', 'parents', 'witness'])->get();
        return view('pages.steps.index', compact('person', 'id'));
    }
    public function updateUserNoim(Request $request, $id)
    {
        $loggedInUserId =  booking::whereId($id)->pluck('user_id')->first();
        $bookingId = $id;
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
    public function documents()
    {
        return view('user.documents.lisiting');
    }
    public function documentSave(Request $request)
    {
        $loggedInUserId = Auth::user()->id;
        $bookingId =  booking::whereUserId($loggedInUserId)->pluck('id')->first();
        $request->merge([
            'user_id' => $loggedInUserId,
            'booking_id' => $bookingId,
        ]);
        UserMarriageDocument::updateOrCreate(['user_id' => $loggedInUserId, 'booking_id' => $bookingId], $request->all());
        return $request->all();
    }
    public function previewDocument(Request $request, $document)
    {
        $loggedInUserId = Auth::user()->id;
        $person = UserNoim::with('birthDocument', 'divorceOrWidowedDocument', 'parents', 'witness')->whereUserId($loggedInUserId)->get();

        switch ($document) {
            case 'noim-download':
                $NOIMpdf = PDF::loadView('user.documents.noim', ['person' => $person]);
                return $NOIMpdf->download('sampleNoim.pdf');
                break;
            case 'noim-perview':
                return view('user.documents.noim', ['person' => $person]);
            default:
                return redirect()->back();
        }
    }
}
