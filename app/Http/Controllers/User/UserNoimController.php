<?php

namespace App\Http\Controllers\User;

use App\Models\Booking;
use App\Models\UserNoim;
use App\Models\UserParent;
use Illuminate\Support\Str;
use App\Models\UserWitness;
use App\Models\UserDocument;
use App\Models\UserMarriagePdf;
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
use Illuminate\Http\File;

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
        $loggedInUserId = Auth::user()->id;
        $bookingId =  booking::whereUserId($loggedInUserId)->pluck('id')->first();
        $userMarriageDocument = UserMarriageDocument::where(['user_id' => $loggedInUserId, 'booking_id' => $bookingId])->first();
        return view('user.documents.lisiting', compact('userMarriageDocument'));
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
    public function previewDocument(Request $request, $document, $userId = null)
    {
        $loggedInUserId = $userId ?? Auth::user()->id;
        $person = UserNoim::with('booking.location', 'birthDocument', 'divorceOrWidowedDocument', 'parents', 'witness', 'marriageDocument', 'marriageDocumentPdfNoim', 'marriageDocumentPdfOfficialMarriageCertificate', 'marriageDocumentPdfdeclarationOfNoLegalImpedimentToMarriage')->whereUserId($loggedInUserId)->get();
        switch ($document) {
            case 'noim-perview':
                return view('user.documents.noim',  ['person' => $person, 'button' => true]);
                break;
            case 'noim-download':
                $NOIMpdf = PDF::loadView('user.documents.noim', ['person' => $person, 'button' => false]);
                return $NOIMpdf->download('NOIM.pdf');
                break;
            case 'preview-certificate-of-faithful-performance-by-interpreter':
                return view('user.documents.certificate-of-faithful-performance-by-interpreter', compact('person'));
                break;
            case 'download-certificate-of-faithful-performance-by-interpreter':
                $faithFullCertificate = PDF::loadView('user.documents.certificate-of-faithful-performance-by-interpreter', ['person' => $person]);
                return $faithFullCertificate->download('certificate-of-faithful-performance-by-interpreter.pdf');
                break;
            case 'preview-official-certificate-of-marriage':
                return view('user.documents.official-certificate-of-marriage', ['person' => $person, 'button' => true]);
                break;
            case  'download-official-certificate-of-marriage':
                $officialCertificateOfMarriage = PDF::loadView('user.documents.official-certificate-of-marriage', ['person' => $person, 'button' => false]);
                return $officialCertificateOfMarriage->download('official-certificate-of-marriage.pdf');
                break;
            case 'preview-declaration-of-no-legal-impediment-to-marriage':
                return view('user.documents.declaration-of-no-legal-impediment-to-marriage', ['person' => $person, 'button' => true]);
                break;
            case 'download-declaration-of-no-legal-impediment-to-marriage':
                $officialCertificateOfMarriage = PDF::loadView('user.documents.declaration-of-no-legal-impediment-to-marriage', ['person' => $person, 'button' => false]);
                return $officialCertificateOfMarriage->download('declaration-of-no-legal-impediment-to-marriage.pdf');
                break;
            case 'preview-certificate-of-marriage':
                return view('user.documents.certificate-of-marriage', ['person' => $person, 'button' => true]);
                break;
            case 'download-certificate-of-marriage':
                $certificateOfMarriage = PDF::loadView('user.documents.certificate-of-marriage', ['person' => $person, 'button' => false]);
                return $certificateOfMarriage->download('certificate-of-marriage.pdf');
                break;

            default:
                return redirect()->back();
        }
    }

    public function saveSignature(Request $request)
    {
        $loggedInUserId = Auth::user()->id;
        $bookingId =  booking::whereUserId($loggedInUserId)->pluck('id')->first();
        if ($request->hasFile('signature-file')) {
            $imgName = uploadFile($request['signature-file'], 'user-signature');
            $imgName = 'user-signature/' . $imgName;
        } else {
            $img = self::convertBase64ToImage($request->signed);
            $imageName = rand(777777, 777777777) . time() . '-' . rand(9999, 999999999) . '.' . 'png';
            $folder = 'base64toimg/';
            if (!is_dir($folder)) {
                //Directory does not exist, so lets create it.
                \File::makeDirectory(public_path() . '/' . $folder, 0777, true);
            }
            file_put_contents(public_path($folder) . $imageName, $img);
            $imgName = $folder . $imageName;
        }

        $request->merge([
            'user_id' => $loggedInUserId,
            'booking_id' => $bookingId,
            $request->key => $imgName
        ]);
        UserMarriagePdf::updateOrCreate(['user_id' => $loggedInUserId, 'booking_id' => $bookingId, 'document_name' => $request->document_name], $request->all());
        return redirect()->back();
    }

    private static function convertBase64ToImage($base64String)
    {
        $image = explode(',', $base64String)[1];  // your base64 encoded
        $imgFile = base64_decode($image);
        return $imgFile;
    }
}
