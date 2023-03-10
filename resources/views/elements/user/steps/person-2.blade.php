{{-- @dd($person) --}}
@php
$person = isset($person) && isset($person[1]) ? $person[1] : null;
@endphp
<input type="hidden" name="person[1][uuid]" value="{{ $person && $person['uuid'] ? $person['uuid'] : '' }}">

<div class="row pt-4">
    <div class="col-12">
        <div class="d-md-flex w-100">
            <div class="d-flex add-ons-detail ">
                <div class="numberCircle align-self-center">2</div>
                <h2 class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Person 2</h2>
            </div>
            <div class="ms-md-5 mt-3 mt-md-0 w-md-25">
                <label for="person1preferred_name" class="form-label small-text2">Person 2 Preferred name</label>
                <input type="text" pattern="\S(.*\S)?" class="form-control body-1 netural-100" name="person[1][preferred_name]"
                    value="{{ $person['preferred_name'] ?? '' }}" id="person1preferred_name" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
        </div>
    </div>
    <div class="col-12 mt-4">
        <div class="card card-turquoise-noim">
            <div class="card-body ">
                <h3 class="h4 text-black mb-3 text-center">Upload govt issued photo ID and evidence of date and place of
                    birth</h3>
                <p class="body-3-medium neutral-100 col-xl-10 mx-auto text-center">After uploading your data, the form
                    below will be automatically filled, please make sure to double-check your data!</p>
                <div class="col-xl-10 mx-auto text-center">
                    <div class="haze-alert  body-3-medium ">If you are uploading your passport, there is no need to
                        upload Govt issued photo ID as well (eg Drivers Licence)</div>
                </div>
                <div class="col-xl-10 mx-auto mt-20">
                    <div class="row">
                        <div class="col-md-6 mb-4 align-self-end">
                            <label for="person2selectEvidence" class="form-label small-text2">What evidence of Date and
                                Place of
                                Birth are you using?</label>
                            <select id="person2selectEvidence"
                                class="js-placeholder-single-input form-control selectEvidence"
                                name="person[1][document][first_document_name]" required>
                                <option value="">Select answer here</option>
                                @foreach (Config::get('userConstants.birth_evidence_list_1') as $key => $evidence)
                                    <option value="{{ $key }}"
                                        {{ $person && $person->BirthDocument && $person->BirthDocument['first_document_name'] == $key ? 'selected' : '' }}>
                                        {{ $evidence }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                                        alt="Require Icon"></span>Field is required</div>
                        </div>
                        <div
                            class="col-md-6 mb-4 align-self-end  {{ $person && $person->BirthDocument && $person->BirthDocument['second_document_name'] != null ? '' : 'd-none' }}"">
                            <label for="person2SelectEvidence2" class="form-label small-text2">What photo ID are you
                                using?</label>
                            <select name="person[1][document][second_document_name]" id="person2SelectEvidence2"
                                class="js-placeholder-single-input form-control" required>
                                <option value="" selected>Select answer here
                                </option>
                                @foreach (Config::get('userConstants.birth_evidence_list_2') as $key => $evidence)
                                    <option value="{{ $key }}"
                                        {{ $person && $person->BirthDocument && $person->BirthDocument['second_document_name'] == $key ? 'selected' : '' }}>
                                        {{ $evidence }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                                        alt="Require Icon"></span>Field is required</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 mx-auto mt-30 position-relative">
                    <div class="attach-document-box position-relative noim-document-box">
                        <input id="fileupload" class="fileupload" type="file"
                            name="person[1][document][birth_evedence_file]" accept=".pdf,.doc,.docx"
                            {{ $person && $person->BirthDocument && $person->BirthDocument['document_path'] != null ? '' : 'required' }}>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                                    alt="Require Icon"></span>Field is required</div>
                        <div class="inner-content">
                            <div class="d-md-flex ">
                                <div class="d-flex d-md-block  justify-content-center justify-content-md-start">
                                    <img src="/images/icons/uploading.svg" class="img-fluid mb-2 align-self-center">
                                    <p class="text-1 text-black align-self-center mb-0 mt-mb-0 ms-md-0 ms-2">Compatible
                                        file .pdf .docx</p>
                                </div>
                                <div class="align-self-center ms-md-3 text-center mt-3 mt-md-0">
                                    <p class="body-2 text-black mb-1">Upload your evidence of Date and Place of Birth
                                        here </p>
                                    <p class="darg turquoise-100 mb-0 text-decoration-underline">browse file</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- progress-box -->
                    {{-- <div class="attach-document-box progress-box text-center  noim-document-box d-none">
                        <div class="progress-content">
                            <p class="h4 neutral-100">Uploading 0%</p>
                            <div id="progress" class="progress">
                                <div class="progress-bar bar"></div>
                            </div>
                        </div>
                    </div> --}}
                    <!--  -->
                    <!--uploaded-box  -->
                    <div
                        class="attach-document-box uploaded-box  noim-document-box {{ $person && $person->BirthDocument && $person->BirthDocument['document_path'] != null ? '' : 'd-none' }}">
                        <div class="d-flex justify-content-center uploaded-content">
                            <div class="align-self-center">
                                <p id="filename" class="h4 neutral-100 mb-0 document-name">
                                    {{ $person && $person->BirthDocument && $person->BirthDocument['document_path'] ? $person->BirthDocument['document_path'] : '' }}
                                </p>
                            </div>
                            <div class="align-self-center"><img src="/images/icons/cross.svg" alt="cross"
                                    class="img-fluid ms-3"></div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mt-4">
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person1person_description" class="form-label small-text2">Description of person 2</label>
                <select name="person[1][person_description]" id="person1person_description"
                    class="js-placeholder-single-input form-control" required>
                    <option value="">Select answer here</option>
                    <option value="1" {{ $person && $person['person_description'] == '1' ? 'selected' : '' }}>
                        Partner</option>
                    <option value="2" {{ $person && $person['person_description'] == '2' ? 'selected' : '' }}>
                        Bride</option>
                    <option value="3" {{ $person && $person['person_description'] == '3' ? 'selected' : '' }}>
                        Groom</option>
                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                                alt="Require Icon"></span>Field is required
                    </div>
                </select>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person1family_name" class="form-label small-text2">Your family name</label>
                <input type="text" pattern="\S(.*\S)?" value="{{ $person['family_name'] ?? '' }}"
                    class="form-control body-1 netural-100" name="person[1][family_name]" id="person1family_name"
                    oninput="this.value = this.value.toUpperCase()" required>
                <span class="small-text2 text-black mt-1">*Must be in UPPERCASE</span>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person1person_first_name" class="form-label small-text2">Person 2 First Name</label>
                <input type="text" pattern="\S(.*\S)?" class="form-control body-1 netural-100" name="person[1][person_first_name]"
                    value="{{ $person['person_first_name'] ?? '' }} " id="person1person_first_name" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person1person_other_name" class="form-label small-text2">Other given name(s)</label>
                <input type="text"  pattern="\S(.*\S)?" class="form-control body-1 netural-100" name="person[1][person_other_name]"
                    id="person1person_other_name" value="{{ $person['person_other_name'] ?? '' }}" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-12 mb-4 align-self-top">
                <label for="person1person_name_combination" class="form-label small-text2">Combination of your
                    name</label>
                <input type="text" pattern="\S(.*\S)?" class="form-control body-1 netural-100"
                    name="person[1][person_name_combination]" value="{{ $person['person_name_combination'] ?? '' }}"
                    id="person1person_name_combination" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-12 mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"
                        name="person[1][name_same_as_passport_or_driving_license]"
                        id="pereson1name_same_as_passport_or_driving_license" autocomplete="off"
                        {{ $person && $person['name_same_as_passport_or_driving_license'] ? 'checked' : '' }}>
                    <label class="form-check-label text-black small-text2"
                        for="personname_same_as_passport_or_driving_license">
                        Does this name exactly match with your passport or drivers licence?
                    </label>
                </div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person1gender" class="form-label small-text2">Gender</label>
                <select name="person[1][gender]" id="person1gender" class="js-placeholder-single-input form-control"
                    required>
                    <option value="">Select gender here</option>
                    @foreach (Config::get('userConstants.gender') as $key => $gender)
                        <option value="{{ $key }}"
                            {{ $person && $person['gender'] == $key ? 'selected' : '' }}>
                            {{ $gender }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person1occupation" class="form-label small-text2">Usual occupation</label>
                <input type="text" pattern="\S(.*\S)?" value="{{ $person['occupation'] ?? '' }}"
                    class="form-control body-1 netural-100" name="person[1][occupation]" id="person1occupation"
                    required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person1residence_place" class="form-label small-text2">Usual place of residence</label>
                <select name="person[1][residence_place]" id="person1residence_place"
                    class="js-placeholder-single-input form-control" required>
                    <option value="">Select country here</option>
                    @foreach (Config::get('userConstants.countries') as $key => $country)
                        <option value="{{ $key }}"
                            {{ $person && $person['residence_place'] == $key ? 'selected' : '' }}>
                            {{ Config::get('userConstants.countries')[$key]['name'] }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-6 mb-4 ">
                <label for="person1address_line_1" class="form-label small-text2">Address line 1</label>
                <input type="text" pattern="\S(.*\S)?" value="{{ $person['address_line_1'] ?? '' }}"
                    class="form-control body-1 netural-100" name="person[1][address_line_1]"
                    id="person1address_line_1" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 ">
                <label for="description" class="form-label small-text2">Address line 2</label>
                <input type="text" pattern="\S(.*\S)?" class="form-control body-1 netural-100" name="person[1][address_line_2]"
                    value="{{ $person['address_line_2'] ?? '' }}" id="description">
            </div>
            <div class="col-md-6 mb-4 ">
                <label for="person1residence_town_or_city_or_suburb"
                    class="form-label small-text2">Suburb/Town/City</label>
                <input type="text" pattern="\S(.*\S)?" class="form-control body-1 netural-100"
                    name="person[1][residence_town_or_city_or_suburb]" id="person1residence_town_or_city_or_suburb"
                    value="{{ $person['residence_town_or_city_or_suburb'] ?? '' }}" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person1residence_state_or_province_or_territory"
                    class="form-label small-text2">State/Territory/Province</label>
                <select name="person[1][residence_state_or_province_or_territory]"
                    id="person1residence_state_or_province_or_territory"
                    class="js-placeholder-single-input form-control" required>
                    <option value="">Select state/Territory/Province here</option>
                    @foreach (Config::get('userConstants.countries.australia.states') as $key => $state)
                        <option value="{{ $key }}"
                            {{ $person && $person['residence_state_or_province_or_territory'] == $key ? 'selected' : '' }}>
                            {{ $state }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 ">
                <label for="person1postal_code" class="form-label small-text2">Post code / ZIP Code </label>
                <input type="text" pattern="\S(.*\S)?" class="form-control body-1 netural-100" name="person[1][postal_code]"
                    value="{{ $person['postal_code'] ?? '' }}" id="person1postal_code" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person1conjugal_status" class="form-label small-text2">Conjugal status</label>
                <select name="person[1][conjugal_document][first_document_name]" id="person1conjugal_status"
                    class="js-placeholder-single-input form-control conjugal_status_select" required>
                    <option value="">Select conjugal status here</option>
                    @foreach (Config::get('userConstants.conjugal_status') as $key => $value)
                        <option value="{{ $key }}"
                            {{ $person && $person['conjugal_status'] == $key ? 'selected' : '' }}>{{ $value }}
                        </option>
                    @endforeach
                </select>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            @php
                $divorceDocumentShowClass = $person && $person['conjugal_status'] == 2 ? true : false;
                $divorcePendingDocumentShowClass = $person && $person['conjugal_status'] == 3 ? true : false;
                $widowedDocumentShowClass = $person && $person['conjugal_status'] == 4 ? true : false;
            @endphp
            <div id="preson2DiviorceSection"
                class="row divorce-document-section  {{ $divorceDocumentShowClass ? '' : 'd-none' }}">
                <input type="hidden" name="person[1][conjugal_document][2][first_document_name]" value="2">
                <div class="col-md-12 mb-4 align-self-top">
                    <div class="attach-document-box position-relative noim-document-box conjugal_document d-none">
                        <input id="fileupload1" class="fileupload" type="file"
                            name="person[1][conjugal_document][2][file]" accept=".pdf,.doc,.docx">
                        <div class="inner-content">
                            <div class="d-md-flex justify-content-center">
                                <div class="d-flex d-md-block  justify-content-center justify-content-md-center">
                                    <img src="/images/icons/uploading.svg" class="img-fluid mb-2 align-self-center">
                                    <p class="text-1 text-black align-self-center mb-0 mt-mb-0 ms-md-0 ms-2">Compatible
                                        file .pdf .docx</p>
                                </div>
                                <div class="align-self-center ms-md-3 text-center mt-3 mt-md-0">
                                    <p class="body-2 text-black mb-1">Upload your divorce document here
                                    </p>
                                    <p class="darg turquoise-100 mb-0 text-decoration-underline">browse file</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--uploaded-box  -->
                    <div class="attach-document-box uploaded-box noim-document-box conjugal_document_perview {{ $person && $divorceDocumentShowClass && $person->divorceOrWidowedDocument != null ? '' : 'd-none' }}"
                        style="position: relative;">
                        <div class="d-flex justify-content-center uploaded-content">
                            <div class="align-self-center">
                                <p class="h4 neutral-100 mb-0 document-name">
                                    {{ $person && $person->divorceOrWidowedDocument && $person->divorceOrWidowedDocument['first_document_name'] == 2 ? $person->divorceOrWidowedDocument['document_path'] : '' }}
                                </p>
                            </div>
                            <div class="align-self-center"><img src="/images/icons/cross.svg" alt="cross"
                                    class="img-fluid ms-3"></div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="row mt-4">
                        <div class="col-md-6 mb-4 ">
                            <label for="person1divorceCourtLocation" class="form-label small-text2">Court location(of
                                divorce)</label>
                            <input type="text" pattern="\S(.*\S)?" class="form-control body-1 netural-100"
                                name="person[1][conjugal_document][2][court_location]"
                                id="person1divorceCourtLocation"
                                value="{{ $person && $person->divorceOrWidowedDocument && $person->divorceOrWidowedDocument['first_document_name'] == 2 ? $person->divorceOrWidowedDocument['court_location'] : '' }}"
                                placeholder="Court location(of divorce)">
                            <div class="invalid-feedback event_date_required"> <span><img class="me-2"
                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Field is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="person1date_of_birth" class="form-label small-text2">Date last marrige
                                ended</label>
                            <div class="input-group date ">
                                <input role="button" type="text" pattern="\S(.*\S)?"
                                    class="form-control body-1 netural-100 event_date_input noim-user-calendar"
                                    id="person1date_of_birth"
                                    name="person[1][conjugal_document][2][date_last_marriage_ended]"
                                    placeholder="Date last marrige
                                    ended" required
                                    autocomplete="off"
                                    value="{{ $person && $person->divorceOrWidowedDocument && $person->divorceOrWidowedDocument['first_document_name'] == 2 ? date('D, M d, Y', strtotime($person->divorceOrWidowedDocument['date_last_marriage_ended'])) : date('D, M d, Y') }}" />
                                <span class="input-group-append">
                                </span>
                                <div class="invalid-feedback event_date_required"> <span><img class="me-2"
                                            src="/images/require-iocn.svg" alt="Require Icon"></span>Field is required
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="preson2WidowedSection"
                class="row widowed-document-section {{ $widowedDocumentShowClass ? '' : 'd-none' }}">
                <input type="hidden" name="person[1][conjugal_document][4][first_document_name]" value="4">
                <div class="col-md-12 mb-4 align-self-top">
                    <div class="attach-document-box position-relative noim-document-box conjugal_document  d-none">
                        <input id="fileupload2" class="fileupload" type="file"
                            name="person[1][conjugal_document][4][file]" accept=".pdf,.doc,.docx">
                        <div class="inner-content">
                            <div class="d-md-flex justify-content-center">
                                <div class="d-flex d-md-block  justify-content-center justify-content-md-center">
                                    <img src="/images/icons/uploading.svg" class="img-fluid mb-2 align-self-center">
                                    <p class="text-1 text-black align-self-center mb-0 mt-mb-0 ms-md-0 ms-2">Compatible
                                        file .pdf .docx</p>
                                </div>
                                <div class="align-self-center ms-md-3 text-center mt-3 mt-md-0">
                                    <p class="body-2 text-black mb-1">Upload your widowed document here
                                    </p>
                                    <p class="darg turquoise-100 mb-0 text-decoration-underline">browse file</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--uploaded-box  -->
                    <div class="attach-document-box uploaded-box noim-document-box conjugal_document_perview {{ $person && $widowedDocumentShowClass && $person->divorceOrWidowedDocument != null ? '' : 'd-none' }}"
                        style="position: relative;">
                        <div class="d-flex justify-content-center uploaded-content">
                            <div class="align-self-center">
                                <p class="h4 neutral-100 mb-0 document-name">
                                    {{ $person && $person->divorceOrWidowedDocument && $person->divorceOrWidowedDocument['first_document_name'] == 4 ? $person->divorceOrWidowedDocument['document_path'] : '' }}
                                </p>
                            </div>
                            <div class="align-self-center"><img src="/images/icons/cross.svg" alt="cross"
                                    class="img-fluid ms-3"></div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="row mt-4">
                        <div class="col-md-6 mb-4 ">
                            <label for="person1divorceCourtLocation" class="form-label small-text2">Certificate
                                number</label>
                            <input type="text" pattern="\S(.*\S)?" class="form-control body-1 netural-100"
                                name="person[1][conjugal_document][4][certificate_number]"
                                id="person1divorceCourtLocation"
                                value="{{ $person && $person->divorceOrWidowedDocument && $person->divorceOrWidowedDocument['first_document_name'] == 4 ? $person->divorceOrWidowedDocument['certificate_number'] : '' }}"
                                placeholder="Certificate number">
                            <div class="invalid-feedback event_date_required"> <span><img class="me-2"
                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Field is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="person1date_of_birth" class="form-label small-text2">Date last marrige
                                ended</label>
                            <div class="input-group date ">
                                <input role="button" type="text" pattern="\S(.*\S)?"
                                    class="form-control body-1 netural-100 event_date_input noim-user-calendar"
                                    id="person1date_of_birth"
                                    name="person[1][conjugal_document][4][date_last_marriage_ended]"
                                    placeholder="Choose date here" required autocomplete="off"
                                    value="{{ $person && $person->divorceOrWidowedDocument && $person->divorceOrWidowedDocument['first_document_name'] == 4 ? date('D, M d, Y', strtotime($person->divorceOrWidowedDocument['date_last_marriage_ended'])) : date('D, M d, Y') }}">
                                <span class="input-group-append">
                                </span>
                                <div class="invalid-feedback event_date_required"> <span><img class="me-2"
                                            src="/images/require-iocn.svg" alt="Require Icon"></span>Field is required
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="preson2DivorcePendingSection"
                class="row divorce-pending-document-section  {{ $divorcePendingDocumentShowClass ? '' : 'd-none' }}">
                <input type="hidden" name="person[1][conjugal_document][3][first_document_name]" value="3">
                <div class="col-md-12 mb-4 align-self-top">
                    <div class="attach-document-box position-relative noim-document-box conjugal_document d-none">
                        <input id="fileupload3" class="fileupload" type="file"
                            name="person[1][conjugal_document][3][file]" accept=".pdf,.doc,.docx">
                        <div class="inner-content">
                            <div class="d-md-flex justify-content-center">
                                <div class="d-flex d-md-block  justify-content-center justify-content-md-center">
                                    <img src="/images/icons/uploading.svg" class="img-fluid mb-2 align-self-center">
                                    <p class="text-1 text-black align-self-center mb-0 mt-mb-0 ms-md-0 ms-2">Compatible
                                        file .pdf .docx</p>
                                </div>
                                <div class="align-self-center ms-md-3 text-center mt-3 mt-md-0">
                                    <p class="body-2 text-black mb-1">Upload your widowed document here
                                    </p>
                                    <p class="darg turquoise-100 mb-0 text-decoration-underline">browse file</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--uploaded-box  -->

                    <div class="attach-document-box uploaded-box noim-document-box conjugal_document_perview {{ $person && $divorcePendingDocumentShowClass && $person->divorceOrWidowedDocument != null ? '' : 'd-none' }}"
                        style="position: relative;">
                        <div class="d-flex justify-content-center uploaded-content">
                            <div class="align-self-center">
                                <p class="h4 neutral-100 mb-0 document-name">
                                    {{ $person && $person->divorceOrWidowedDocument && $person->divorceOrWidowedDocument['first_document_name'] == 3 ? $person->divorceOrWidowedDocument['document_path'] : '' }}
                                </p>
                            </div>
                            <div class="align-self-center"><img src="/images/icons/cross.svg" alt="cross"
                                    class="img-fluid ms-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person1birth_place" class="form-label small-text2">Birth place</label>
                <select name="person[1][birth_place]" id="person1birth_place"
                    class="js-placeholder-single-input form-control" required>
                    <option value="">Select country here</option>
                    <option value="Australia"
                        {{ $person && $person['birth_place'] == 'Australia' ? 'selected' : '' }}>
                        Australia</option>
                </select>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            {{-- <div class="col-md-6 mb-4 align-self-top">
                <div
                    class="attach-document-box position-relative noim-document-box conjugal_document {{ $person && $person->divorceOrWidowedDocument && $person->divorceOrWidowedDocument['document_path'] != null ? 'd-none' : '' }}">
                    <input id="fileupload" class="fileupload" type="file"
                        name="person[1][conjugal_document][file]" accept=".pdf,.doc,.docx">
                    <div class="inner-content">
                        <div class="d-md-flex ">
                            <div class="d-flex d-md-block  justify-content-center justify-content-md-start">
                                <img src="/images/icons/uploading.svg" class="img-fluid mb-2 align-self-center">
                                <p class="text-1 text-black align-self-center mb-0 mt-mb-0 ms-md-0 ms-2">Compatible
                                    file .pdf .docx</p>
                            </div>
                            <div class="align-self-center ms-md-3 text-center mt-3 mt-md-0">
                                <p class="body-2 text-black mb-1">Upload your divorce/widowed document here
                                </p>
                                <p class="darg turquoise-100 mb-0 text-decoration-underline">browse file</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--uploaded-box  -->
                <div class="attach-document-box uploaded-box noim-document-box conjugal_document_perview {{ $person && $person->divorceOrWidowedDocument && $person->divorceOrWidowedDocument['document_path'] != null ? '' : 'd-none' }}"
                    style="position:relative">
                    <div class="d-flex justify-content-center
                    uploaded-content">
                        <div class="align-self-center">
                            <p id="filename" class="h4 neutral-100 mb-0 document-name">
                                {{ $person && $person->divorceOrWidowedDocument && $person->divorceOrWidowedDocument['document_path'] ? $person->divorceOrWidowedDocument['document_path'] : '' }}
                            </p>
                        </div>
                        <div class="align-self-center"><img src="/images/icons/cross.svg" alt="cross"
                                class="img-fluid ms-3"></div>
                    </div>
                </div>
                <!--  -->
            </div> --}}
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person1birth_town_or_city_or_suburb"
                    class="form-label small-text2">Suburb/town/city</label>
                <select name="person[1][birth_town_or_city_or_suburb]" id="person1birth_town_or_city_or_suburb"
                    class="js-placeholder-single-input form-control" required>
                    <option value="">Select country here</option>
                    <option value="1"
                        {{ $person && $person['birth_town_or_city_or_suburb'] == '1' ? 'selected' : '' }}>PIMPAMA
                        QLD</option>
                </select>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person1birth_state_or_province_or_territory"
                    class="form-label small-text2">State/territory</label>
                <select name="person[1][birth_state_or_province_or_territory]"
                    id="person1birth_state_or_province_or_territory" class="js-placeholder-single-input form-control"
                    required>
                    <option value="">Select your state/territory here</option>
                    <option value="NSW"
                        {{ $person && $person['birth_state_or_province_or_territory'] == 'NSW' ? 'selected' : '' }}>
                        NSW</option>
                    <option value="VIC"
                        {{ $person && $person['birth_state_or_province_or_territory'] == 'VIC' ? 'selected' : '' }}>
                        VIC</option>
                    <option value="ACT"
                        {{ $person && $person['birth_state_or_province_or_territory'] == 'ACT' ? 'selected' : '' }}>
                        ACT</option>
                    <option value="NT"
                        {{ $person && $person['birth_state_or_province_or_territory'] == 'NT' ? 'selected' : '' }}>
                        NT</option>
                    <option value="WA"
                        {{ $person && $person['birth_state_or_province_or_territory'] == 'WA' ? 'selected' : '' }}>
                        WA</option>
                    <option value="SA"
                        {{ $person && $person['birth_state_or_province_or_territory'] == 'SA' ? 'selected' : '' }}>
                        SA</option>
                    <option value="TASX"
                        {{ $person && $person['birth_state_or_province_or_territory'] == 'TASX' ? 'selected' : '' }}>
                        TAS</option>
                </select>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 ">
                {{-- <label for="person1date_of_birth" class="form-label small-text2">Date of Birth </label>
                <input type="text" pattern="\S(.*\S)?" class="form-control body-1 netural-100" name="person[1][date_of_birth]"
                    id="person1date_of_birth" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div> --}}
                <label for="person1date_of_birth" class="form-label small-text2">Date of Birth</label>
                <div class="input-group date {{-- theme-datepicker --}}">
                    <input role="button" type="text" pattern="\S(.*\S)?"
                        class="form-control body-1 netural-100 event_date_input noim-user-calendar"
                        id="person1date_of_birth" name="person[1][date_of_birth]" placeholder="Choose date here"
                        value="{{ $person && $person['date_of_birth'] ? date('D, M d, Y', strtotime($person['date_of_birth'])) : date('D, M d, Y') }}"
                        required />
                    <span class="input-group-append">
                    </span>
                    <div class="invalid-feedback event_date_required"> <span><img class="me-2"
                                src="/images/require-iocn.svg" alt="Require Icon"></span>Field is required</div>
                </div>
            </div>

            <div class="col-md-6 mb-4 align-self-top"></div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person1are_parties_related" class="form-label small-text2">Are the parties
                    related?</label>
                <select name="person[1][are_parties_related]" id="person1are_parties_related"
                    class="js-placeholder-single-input form-control" required>
                    <option value="">Select your answer here</option>
                    <option value="1" {{ $person && $person['are_parties_related'] == 1 ? 'selected' : '' }}>
                        Yes</option>
                    <option value="0" {{ $person && $person['are_parties_related'] == 0 ? 'selected' : '' }}>
                        No</option>
                </select>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 ">
                <label for="person1how_they_related" class="form-label small-text2">How are they related </label>
                <input type="text" pattern="\S(.*\S)?" placeholder="Type here" class="form-control body-1 netural-100"
                    name="person[1][how_they_related]" value="{{ $person['how_they_related'] ?? '' }}"
                    id="person1how_they_related">
            </div>
            <div class="col-12 ">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="person[1][is_data_and_document_identical]"
                        id="person1is_data_and_document_identical" autocomplete="off"
                        {{ $person && $person['is_data_and_document_identical'] ? 'checked' : '' }}>
                    <label class="form-check-label text-black small-text2 "
                        for="person1is_data_and_document_identical">
                        Have you uploaded the above documents to this site & checked all data entered is identical to
                        these documents?
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
