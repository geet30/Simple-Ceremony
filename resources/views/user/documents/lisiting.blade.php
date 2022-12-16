@extends('layouts.panels')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 p-0">
                @include('elements.common.user-sidebar')
            </div>
            <div class="col-10 col-md-9 col-lg-10 px-md-4">
            @include('elements.common.panel-header')
                <div class="card panel-card ">
                    <div class="card-body">
                        
                        <div class="row add-ons-detail">
                        <div class="numberCircle col-3 col-xl-1">1</div>
                                <div class="ms-2 col-9 col-xl-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h2 class="subheader-3 neutral-100 mb-0 ms-2">Sign the Notice of Intended Marriage Form</h2>
                                        <a class="theme-btn primary-btn d-inline-flex justify-content-center" href="/user/NoIM">
                                            <img class="me-2" src="/images/icons/edit.svg" alt="shopping-icon">
                                            Edit
                                        </a>
                                    </div>
                                    
                            {{-- <div class="col-md-12 text-md-end"> 
                                
                                <a class="theme-btn primary-btn d-inline-flex justify-content-center" href="/user/NoIM">
                                    <img class="me-2" src="/images/icons/edit.svg" alt="shopping-icon">
                                    Edit
                                </a>
                            </div> --}}
                            <div class="alert alert-primary show mt-4" role="alert">
                                <div class="d-flex">
                                    <div class="me-3"><img src="/images/info.svg" class="img-fluid" alt="info-icon" style="width: 90px;height: 25px;"></div>
                                    <div>
                                        <p class="body-1 mb-2">Instructions.</p>
                                        <a class="button-3 text-decoration-none d-block" style="width: 90%;">Click on the Notice of Intended Marriage form below (show the eye symbol) and review, in details. If the details are not 100% without omissions please make correction(s) by clicking the Edit button.  If all correct, you just need to sign in front of an Authorised Person - click here to see list of Authorised Persons. Note. If you are in Australia, you can sign via video.
                                        Click here to see how</a>
                                    
                                    </div>
                                    
                                    <div><button type="button" class="theme-btn-close" data-bs-dismiss="alert" aria-label="Close"><img src="/images/cross-blue-white.svg" class="img-fluid" alt="cross-icon"></button></div>
                                </div>
                                
                                
                            </div>
                            <div class="col-12 col-xl-10 mt-4">
                                <div class="row">
                                    
                                    <div class="col-md-6 col-xl-4 text-center position-relative mb-4 ">
                                        <div class="document-box">
                                            <div class="uploaded-content ">
                                                <p id="filename" class="h4 neutral-100 mb-3">Notice of Intended Marriage form.pdf</p>
                                                <div class="mb-2">
                                <a class="me-2"
                                                        href="{{ route('userNoim.preview-document', 'noim-perview') }}"
                                                        target="_blank"><img src="/images/icons/uploading/eye.svg"
                                                            class="img-fluid" alt="eye"></a>
                                                    <a class="me-2"
                                                        href="{{ route('userNoim.preview-document', 'noim-download') }}"><img
                                                            src="/images/icons/uploading/download.svg" class="img-fluid"
                                                            alt="download"></a>
                                                </div>
                                            </div>
                                            <div class="created-date">Created Feb 27, 2022</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="mt-4 add-ons-detail needs-validation" method="post" novalidate
                            action="{{ route('userNoim.documents.post') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="numberCircle col-3 col-xl-1">2</div>
                                <div class="ms-2 col-9 col-xl-10">
                                    <h2 class="subheader-3 neutral-100 mb-0 ms-2">How did you sign and have your signature witnessed?</h2>
                                    <div class="row w-100 mt-3 mb-4">
                                        <div class="col-12 col-md-7 col-xl-6">
                                            <label for="digital-signature"
                                                class="form-label small-text2 col-12 mb-2 ms-2">Did you
                                                electronically sign and have your signature
                                                witnessed on this website?</label>
                                            <select name="is_document_electronically_signed" id="digital-signature"
                                                class="js-placeholder-single-input form-control col-12">
                                                <option value="1"
                                                    {{ $userMarriageDocument && $userMarriageDocument['is_document_electronically_signed'] == 1 ? 'selected' : '' }}>
                                                    Yes</option>
                                                <option value="2"
                                                    {{ $userMarriageDocument && $userMarriageDocument['is_document_electronically_signed'] == 2 ? 'selected' : '' }}>
                                                    No, I will need to upload the NOIM</option>
                                            </select>
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Field is
                                                required
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row w-100 mb-4">
                                        <div class="col-12 col-md-6 col-xl-5">
                                            <label for="NoIM-witnessed"
                                                class="form-label small-text2 col-12 mb-2 ms-2">How did
                                                you
                                                have the NoIM witnessed?</label>
                                            <select name="how_did_you_have_noim_witnessed" id="NoIM-witnessed"
                                                class="js-placeholder-single-input form-control col-12" required>
                                                <option value="">Select here</option>
                                                <option value="1"
                                                    {{ $userMarriageDocument && $userMarriageDocument['how_did_you_have_noim_witnessed'] == 1 ? 'selected' : '' }}>
                                                    Live video</option>
                                                <option value="2"
                                                    {{ $userMarriageDocument && $userMarriageDocument['how_did_you_have_noim_witnessed'] == 2 ? 'selected' : '' }}>
                                                    Video recording</option>
                                                <option value="3"
                                                    {{ $userMarriageDocument && $userMarriageDocument['how_did_you_have_noim_witnessed'] == 3 ? 'selected' : '' }}>
                                                    In person</option>
                                            </select>
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Field is
                                                required
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-5 {{ $userMarriageDocument && $userMarriageDocument['how_did_you_have_noim_witnessed'] == 1 ? '' : 'd-none' }}"
                                            id="authorization-code-section">
                                            <label for="authorization-code"
                                                class="form-label small-text2 col-12 mb-2 ms-2">Insert
                                                authorization code</label>
                                            <input type="text" id="authorization-code" class="form-control"
                                                name="authorization_code"
                                                value="{{ $userMarriageDocument && $userMarriageDocument['authorization_code'] ? $userMarriageDocument['authorization_code'] : '' }}">
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Field is
                                                required
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row w-100 mb-4">
                                        <div class="col-12 col-md-6 col-xl-5">
                                            <label for="who_signed_person_1_witness"
                                                class="form-label small-text2 col-12 mb-2 ms-2">Who has
                                                witnessed person 1 sign the NoIm?</label>
                                            <select name="who_signed_person_1_witness" id="who_signed_person_1_witness"
                                                class="js-placeholder-single-input form-control col-12" required>
                                                <option value="">Select here</option>
                                                <option value="1"
                                                    {{ $userMarriageDocument && $userMarriageDocument['who_signed_person_1_witness'] == 1 ? 'selected' : '' }}>
                                                    Authorised Marriage Celebrant</option>
                                                <option value="2"
                                                    {{ $userMarriageDocument && $userMarriageDocument['who_signed_person_1_witness'] == 2 ? 'selected' : '' }}>
                                                    Justice of the Peace</option>
                                                <option value="3"
                                                    {{ $userMarriageDocument && $userMarriageDocument['who_signed_person_1_witness'] == 3 ? 'selected' : '' }}>
                                                    Legal Practitioner</option>
                                                <option value="4"
                                                    {{ $userMarriageDocument && $userMarriageDocument['who_signed_person_1_witness'] == 4 ? 'selected' : '' }}>
                                                    Notary Public</option>
                                                <option value="5"
                                                    {{ $userMarriageDocument && $userMarriageDocument['who_signed_person_1_witness'] == 5 ? 'selected' : '' }}>
                                                    Other Authorised Person</option>
                                            </select>
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Field is
                                                required
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-5">
                                            <label for="who_signed_person_2_witness"
                                                class="form-label small-text2 col-12 mb-2 ms-2">Who has
                                                witnessed person 2 sign the NoIm?</label>
                                            <select name="who_signed_person_2_witness" id="who_signed_person_2_witness"
                                                class="js-placeholder-single-input form-control col-12" required>
                                                <option value="">
                                                    Select
                                                    here</option>
                                                <option value="1"
                                                    {{ $userMarriageDocument && $userMarriageDocument['who_signed_person_2_witness'] == 1 ? 'selected' : '' }}>
                                                    Authorised Marriage Celebrant</option>
                                                <option value="2"
                                                    {{ $userMarriageDocument && $userMarriageDocument['who_signed_person_2_witness'] == 2 ? 'selected' : '' }}>
                                                    Justice of the Peace</option>
                                                <option value="3"
                                                    {{ $userMarriageDocument && $userMarriageDocument['who_signed_person_2_witness'] == 3 ? 'selected' : '' }}>
                                                    Legal Practitioner</option>
                                                <option value="4"
                                                    {{ $userMarriageDocument && $userMarriageDocument['who_signed_person_2_witness'] == 4 ? 'selected' : '' }}>
                                                    Notary Public</option>
                                                <option value="5"
                                                    {{ $userMarriageDocument && $userMarriageDocument['who_signed_person_2_witness'] == 5 ? 'selected' : '' }}>
                                                    Other Authorised Person</option>
                                            </select>
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Field is
                                                required
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row w-100 mb-4" id="witness-occupation-section">
                                        <div class="col-12 col-md-6 col-xl-5">
                                            <label for="person_1_witness_occupation_name"
                                                class="form-label small-text2 col-12 mb-2 ms-2">Occupation name</label>
                                            <input type="text" id="person_1_witness_occupation_name"
                                                class="form-control body-1 netural-100"
                                                placeholder="Type occupation name "
                                                name="person_1_witness_occupation_name"
                                                value="{{ $userMarriageDocument && $userMarriageDocument['person_1_witness_occupation_name'] ? $userMarriageDocument['person_1_witness_occupation_name'] : '' }}"
                                                >
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Field is
                                                required
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-5">
                                            <label for="person_2_witness_occupation_name"
                                                class="form-label small-text2 col-12 mb-2 ms-2">Occupation name</label>
                                            <input type="text" id="person_2_witness_occupation_name"
                                                class="form-control body-1 netural-100" placeholder="Type occupation name"
                                                name="person_2_witness_occupation_name"
                                                value="{{ $userMarriageDocument && $userMarriageDocument['person_2_witness_occupation_name'] ? $userMarriageDocument['person_2_witness_occupation_name'] : '' }}"
                                                >
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Field is
                                                required
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row w-100 mb-4">
                                        <div class="col-12 col-md-6 col-xl-5 mb-4">
                                            <label for="person_1_witness_name"
                                                class="form-label small-text2 col-12 mb-2 ms-2">Authorised
                                                Person's Name who witnessed
                                                Person 1 on the NoIM</label>
                                            <input type="text" placeholder="Type your witness' name here"
                                                class="form-control body-1 netural-100" name="person_1_witness_name"
                                                id="person_1_witness_name"
                                                value="{{ $userMarriageDocument && $userMarriageDocument['person_1_witness_name'] ? $userMarriageDocument['person_1_witness_name'] : '' }}"
                                                required>
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Field is
                                                required
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-5 mb-4">
                                            <label for="person_2_witness_name"
                                                class="form-label small-text2 col-12 mb-2 ms-2">Authorised
                                                Person's Name who witnessed
                                                Person 2 on the NoIM</label>
                                            <input type="text" placeholder="Type your witness' name here"
                                                class="form-control body-1 netural-100" name="person_2_witness_name"
                                                id="person_2_witness_name"
                                                value="{{ $userMarriageDocument && $userMarriageDocument['person_2_witness_name'] ? $userMarriageDocument['person_2_witness_name'] : '' }}"
                                                required>
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Field is
                                                required
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-none" id="noim-upload-section">
                                        <div class="attach-document-box position-relative noim-document-box ">
                                            <input id="fileupload" class="fileupload" type="file"
                                                name="signed_noim_document" accept=".pdf,.doc,.docx">
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Field is
                                                required</div>
                                            <div class="inner-content">
                                                <div class="d-md-flex ">
                                                    <div
                                                        class="d-flex d-md-block  justify-content-center justify-content-md-start">
                                                        <img src="/images/icons/uploading.svg"
                                                            class="img-fluid mb-2 align-self-center">
                                                        <p
                                                            class="text-1 text-black align-self-center mb-0 mt-mb-0 ms-md-0 ms-2">
                                                            Compatible
                                                            file .pdf .docx</p>
                                                    </div>
                                                    <div class="align-self-center ms-md-3 text-center mt-3 mt-md-0">
                                                        <p class="body-2 text-black mb-1">Notice of Intended Marrige Form
                                                        </p>
                                                        <p class="darg turquoise-100 mb-0 text-decoration-underline">browse
                                                            file</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--uploaded-box  -->
                                        <div class="conjugal_document_perview attach-document-box uploaded-box noim-document-box d-none"
                                            style="position: relative;">
                                            <div class="d-flex justify-content-center uploaded-content">
                                                <div class="align-self-center">
                                                    <p class="h4 neutral-100 mb-0 document-name">
                                                        sample.pdf
                                                    </p>
                                                </div>
                                                <div class="align-self-center"><img src="/images/icons/cross.svg"
                                                        alt="cross" class="img-fluid ms-3"></div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="numberCircle col-3 col-xl-1">3</div>
                                <div class="ms-2 col-9 col-xl-10">
                                    <h2 class="subheader-3 neutral-100 mb-0 ms-2">Do you need an interpreter?</h2>
                                    <div class="row mt-2">
                                        <div class="col-md-6 mb-4 align-self-end">
                                            <label for="english-speak-parties"
                                                class="form-label small-text2 neutral-100 ">Do either party NOT speak and
                                                understand english?</label>
                                            <select name="party_not_speak_english" id="english-not-speak-parties"
                                                class="js-placeholder-single-input form-control" required>
                                                <option value="0"
                                                    {{ $userMarriageDocument && $userMarriageDocument['party_not_speak_english'] == 0 ? 'selected' : '' }}>
                                                    No</option>
                                                <option value="1"
                                                    {{ $userMarriageDocument && $userMarriageDocument['party_not_speak_english'] == 1 ? 'selected' : '' }}>
                                                    Yes</option>
                                               
                                            </select>
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Field is
                                                required
                                            </div>
                                        </div>
                                        
                                        <div
                                            class="col-md-6 mb-4 align-self-end need-interpreter {{ $userMarriageDocument && $userMarriageDocument['party_not_speak_english'] == 1 ? '' : 'd-none' }}">
                                            <label for="language-speak" class="form-label  small-text2 neutral-100 ">What language do they speak?</label>
                                            <select name="language_speak" id="language-speak"
                                                class="js-placeholder-single-input form-control">
                                                <option value="">Select answer here</option>
                                                <option value="english"
                                                    {{ $userMarriageDocument && $userMarriageDocument['language_speak'] == 'english' ? 'selected' : '' }}>
                                                    English </option>
                                                <option value="russian"
                                                    {{ $userMarriageDocument && $userMarriageDocument['language_speak'] == 'russian' ? 'selected' : '' }}>
                                                    Russian </option>
                                                <option value="arabic"
                                                    {{ $userMarriageDocument && $userMarriageDocument['language_speak'] == 'arabic' ? 'selected' : '' }}>
                                                    Arabic </option>
                                            </select>
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Field
                                                is
                                                required
                                            </div>
                                        </div>

                                        <div><p>You will need to have an interpreter at your ceremony. They can be anyone (a friend or family member) who speaks english and the other language. Please complete the following details so we can prepare Certificate of Faithful performance of Interpreter - which is required for your ceremony</p></div>
                                        <div
                                            class="need-interpreter row  {{ $userMarriageDocument && $userMarriageDocument['party_not_speak_english'] == 1 ? '' : 'd-none' }}">
                                            <div class="col-md-6 align-self-end">
                                                <label for="interpreter-full-name"
                                                    class="form-label small-text2 neutral-100 ">Enter
                                                    full name of your interpreter</label>
                                                <input type="text" class="form-control body-1 netural-100"
                                                    id="interpreter-full-name" name="interpreter_full_name"
                                                    placeholder="Type your interpreter's full name"
                                                    value="{{ $userMarriageDocument && $userMarriageDocument['interpreter_full_name'] ? $userMarriageDocument['interpreter_full_name'] : '' }}">
                                                <div class="invalid-feedback"> <span><img class="me-2"
                                                            src="/images/require-iocn.svg" alt="Require Icon"></span>Field
                                                    is required
                                                </div>
                                            </div>
                                            <div class="col-md-6 align-self-end">
                                                <label for="interpreter-address"
                                                    class="form-label small-text2 neutral-100 ">Enter address of your
                                                    interpreter</label>
                                                <input type="text" class="form-control body-1 netural-100"
                                                    id="interpreter-address" name="interpreter_address"
                                                    placeholder="Type your interpreter's address"
                                                    value="{{ $userMarriageDocument && $userMarriageDocument['interpreter_address'] ? $userMarriageDocument['interpreter_address'] : '' }}">
                                                <div class="invalid-feedback"> <span><img class="me-2"
                                                            src="/images/require-iocn.svg" alt="Require Icon"></span>Field
                                                    is
                                                    required
                                                </div>
                                            </div>
                                            <div class="col-md-6 align-self-end mt-4">
                                                <label for="interpreter-occupation"
                                                    class="form-label small-text2 neutral-100 ">Enter occupation of your
                                                    interpreter</label>
                                                <input type="text" class="form-control body-1 netural-100"
                                                    id="interpreter-occupation" name="interpreter_occupation"
                                                    placeholder="Type your interpreter's occupation"
                                                    value="{{ $userMarriageDocument && $userMarriageDocument['interpreter_occupation'] ? $userMarriageDocument['interpreter_occupation'] : '' }}">
                                                <div class="invalid-feedback"> <span><img class="me-2"
                                                            src="/images/require-iocn.svg" alt="Require Icon"></span>Field
                                                    is
                                                    required
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row w-100 mt-4">
                                <div class="col-12 ms-5">
                                    <button type="submit" class="theme-btn primary-btn">Save</button>
                                    {{-- <a class="theme-btn primary-btn d-inline-flex">Send</a> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
