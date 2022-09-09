@php
$person = $person && $person[0] ? $person[0] : null;
@endphp
<div class="row">
    <div class="col-12 mb-4">
        <h2 class="h3 neutral-100 mb-0">Details of the Parties</h2>
    </div>
    <div class="col-12">
        <div class="d-md-flex w-100">
            <div class="d-flex add-ons-detail ">
                <div class="numberCircle align-self-center">1</div>
                <h2 class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Person 1</h2>
            </div>
            <div class="ms-md-5 mt-3 mt-md-0 w-md-25">
                <label for="person0preferred_name" class="form-label small-text2">Person 1 Preferred name</label>
                <input type="text" class="form-control body-1 netural-100" name="person[0][preferred_name]"
                    value="{{ $person['preferred_name'] ?? '' }}" id="person0preferred_name" required>
                {{-- @if ($errors->has('person.0.preferred_name')) --}}
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
                {{-- @endif --}}
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
                            <label for="birth" class="form-label small-text2">What evidence of Date and Place of
                                Birth are you using?</label>
                            <select name="birth" id="person1SelectEvidence"
                                class="js-placeholder-single-input form-control selectEvidence">
                                <option value="" selected="">Select answer here
                                </option>
                                <option value="1">Birth Certificate or official extract</option>
                                <option value="2">Australian Passport</option>
                                <option value="3">OS Passport</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-4 align-self-end d-none">
                            <label for="id" class="form-label small-text2">What photo ID are you using?</label>
                            <select name="id" id="id" class="js-placeholder-single-input form-control">
                                <option value="" selected="">Select answer here
                                </option>
                                <option value="1">Current Card (Govt issued)</option>
                                <option value="2">Current Driver’s Licence</option>
                                <option value="3">Current Proof of Age Card (Govt issued)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 mx-auto mt-30 position-relative">
                    <div class="attach-document-box position-relative noim-document-box">
                        <input id="fileupload" class="fileupload" type="file" name="files[]">
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
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mt-4">
        <div class="card card-turquoise-noim">
            <div class="card-body p-4">
                <div class="d-flex justify-content-center">
                    <div class="align-self-center me-3"><img src=" /images/icons/info.svg" class="img-fluid"
                            alt="infoss-icon"> </div>
                    <div class="button-1 text-black align-self-center ">Please use English character and don't use
                        umlauts and accents</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mt-4">
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person0person_description" class="form-label small-text2 ">Description of person 1</label>
                <select name="person[0][person_description]" id="person0person_description"
                    class="js-placeholder-single-input form-control" required>
                    <option value="">Select answer here</option>
                    <option value="1" {{ $person['person_description'] == '1' ? 'selected' : '' }}>
                        Partner</option>
                    <option value="2" {{ $person['person_description'] == '2' ? 'selected' : '' }}>
                        Bride</option>
                    <option value="3" {{ $person['person_description'] == '3' ? 'selected' : '' }}>
                        Groom</option>
                </select>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person0family_name" class="form-label small-text2">Your family name</label>
                <input type="text" class="form-control body-1 netural-100" name="person[0][family_name]"
                    id="person0family_name" oninput="this.value = this.value.toUpperCase()"
                    value="{{ $person['family_name'] ?? 'FAMILY NAME' }}" required>
                <span class="small-text2 text-black mt-1">*Must be in UPPERCASE</span>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person0person_first_name" class="form-label small-text2">Person 1 First Name</label>
                <input type="text" class="form-control body-1 netural-100" name="person[0][person_first_name]"
                    id="person0person_first_name" value="{{ $person['person_first_name'] ?? '' }}" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person0person_other_name" class="form-label small-text2">Other given name(s)</label>
                <input type="text" class="form-control body-1 netural-100" name="person[0][person_other_name]"
                    id="person0person_other_name" value="{{ $person['person_other_name'] ?? '' }}" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-12 mb-4 align-self-top">
                <label for="person0person_name_combination" class="form-label small-text2">Combination of your
                    name</label>
                <input type="text" class="form-control body-1 netural-100"
                    name="person[0][person_name_combination]" id="person0person_name_combination"
                    value="{{ $person['person_name_combination'] ?? '' }}" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-12 mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"
                        name="person[0][name_same_as_passport_or_driving_license]"
                        id="person0name_same_as_passport_or_driving_license" autocomplete="off"
                        {{ $person['name_same_as_passport_or_driving_license'] ? 'checked' : '' }}>
                    <label class="form-check-label text-black small-text2"
                        for="person0name_same_as_passport_or_driving_license">
                        Does this name exactly match with your passport or drivers licence?
                    </label>
                </div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person0gender" class="form-label small-text2">Gender (Optional)</label>
                <select name="person[0][gender]" id="person0gender" class="js-placeholder-single-input form-control"
                    required>
                    <option value="">Select gender here</option>
                    <option value="1" {{ $person['gender'] == 1 ? 'selected' : '' }}>Female</option>
                    <option value="2" {{ $person['gender'] == 2 ? 'selected' : '' }}>Male</option>
                    <option value="3" {{ $person['gender'] == 3 ? 'selected' : '' }}>Non-binary</option>
                    <option value="4" {{ $person['gender'] == 4 ? 'selected' : '' }}>X</option>
                </select>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person0occupation" class="form-label small-text2">Usual occupation</label>
                <input type="text" class="form-control body-1 netural-100" name="person[0][occupation]"
                    id="person0occupation" value="{{ $person['occupation'] ?? '' }}" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person0residence_place" class="form-label small-text2">Usual place of residence</label>
                <select name="person[0][residence_place]" id="person0residence_place"
                    class="js-placeholder-single-input form-control">
                    <option value="">Select country here</option>
                    <option value="Australia"
                        {{ $person && $person['residence_place'] == 'Australia' ? 'selected' : '' }}>
                        Australia</option>
                </select>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-6 mb-4 ">
                <label for="person0address_line_1" class="form-label small-text2">Address line 1</label>
                <input type="text" class="form-control body-1 netural-100" name="person[0][address_line_1]"
                    id="person0address_line_1" value="{{ $person['address_line_1'] ?? '' }}" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 ">
                <label for="person0address_line_2" class="form-label small-text2">Address line 2</label>
                <input type="text" class="form-control body-1 netural-100" name="person[0][address_line_2]"
                    id="person0address_line_2" value="{{ $person['address_line_2'] ?? '' }}">
            </div>
            <div class="col-md-6 mb-4 ">
                <label for="person0residence_town_or_city_or_suburb"
                    class="form-label small-text2">Suburb/Town/City</label>
                <input type="text" class="form-control body-1 netural-100"
                    name="person[0][residence_town_or_city_or_suburb]"
                    value="{{ $person['residence_town_or_city_or_suburb'] ?? '' }}"
                    id="person0residence_town_or_city_or_suburb" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person0residence_state_or_province_or_territory"
                    class="form-label small-text2">State/Territory/Province</label>
                <select name="person[0][residence_state_or_province_or_territory]"
                    id="person0residence_state_or_province_or_territory"
                    class="js-placeholder-single-input form-control" required>
                    <option value="">Select country here</option>
                    <option value="1"
                        {{ $person && $person['residence_state_or_province_or_territory'] == 1 ? 'selected' : '' }}>
                        TAS
                    </option>
                </select>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 ">
                <label for="person0postal_code" class="form-label small-text2">Post code / ZIP Code </label>
                <input type="text" class="form-control body-1 netural-100" name="person[0][postal_code]"
                    id="person0postal_code" value="{{ $person['postal_code'] ?? '' }}" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person0conjugal_status" class="form-label small-text2">Conjugal status</label>
                <select name="person[0][conjugal_status]" id="person0conjugal_status"
                    class="js-placeholder-single-input form-control" required>
                    <option value="">Select country here</option>
                    <option value="1" {{ $person && $person['conjugal_status'] == 1 ? 'selected' : '' }}>
                        Never
                        validly married</option>
                    <option value="2"{{ $person && $person['conjugal_status'] == 2 ? 'selected' : '' }}>
                        Divorced</option>
                </select>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person0birth_place" class="form-label small-text2">Birth place</label>
                <select name="person[0][birth_place]" id="person0birth_place"
                    class="js-placeholder-single-input form-control" required>
                    <option value="">Select country here</option>
                    <option value="Australia"
                        {{ $person && $person['birth_place'] == 'Australia' ? 'selected' : '' }}>Australia</option>
                </select>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <div class="attach-document-box position-relative noim-document-box">
                    <input id="fileupload" class="fileupload" type="file" name="person[0][birth_document]">
                    <div class="inner-content">
                        <div class="d-md-flex ">
                            <div class="d-flex d-md-block  justify-content-center justify-content-md-start">
                                <img src="/images/icons/uploading.svg" class="img-fluid mb-2 align-self-center">
                                <p class="text-1 text-black align-self-center mb-0 mt-mb-0 ms-md-0 ms-2">Compatible
                                    file .pdf .docx</p>
                            </div>
                            <div class="align-self-center ms-md-3 text-center mt-3 mt-md-0">
                                <p class="body-2 text-black mb-1">Upload your evidence of Date and Place of Birth
                                    here
                                </p>
                                <p class="darg turquoise-100 mb-0 text-decoration-underline">browse file</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person0birth_town_or_city_or_suburb"
                    class="form-label small-text2">Suburb/town/city</label>
                <select name="person[0][birth_town_or_city_or_suburb]" id="person0birth_town_or_city_or_suburb"
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
                <label for="person0birth_state_or_province_or_territory"
                    class="form-label small-text2">State/territory</label>
                <select name="person[0][birth_state_or_province_or_territory]"
                    id="person0birth_state_or_province_or_territory" class="js-placeholder-single-input form-control"
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
                <label for="person0date_of_birth" class="form-label small-text2">Date of Birth</label>
                <div class="input-group date theme-datepicker">
                    <input role="button" type="text" class="form-control body-1 netural-100 event_date_input"
                        id="person0date_of_birth" name="person[0][date_of_birth]" placeholder="Choose date here"
                        required />
                    <span class="input-group-append">
                    </span>
                    <div class="invalid-feedback event_date_required"> <span><img class="me-2"
                                src="/images/require-iocn.svg" alt="Require Icon"></span>Field is required</div>
                </div>
            </div>
            <div class="col-md-6 mb-4 align-self-top"></div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="person0are_parties_related" class="form-label small-text2">Are the parties
                    related?</label>
                <select name="person[0][are_parties_related]" id="person0are_parties_related"
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
                <label for="person0how_they_related" class="form-label small-text2">How are they related </label>
                <input type="text" placeholder="Type here" class="form-control body-1 netural-100"
                    name="person[0][how_they_related]" value="{{ $person['how_they_related'] ?? '' }}"
                    id="person0how_they_related">
            </div>
            <div class="col-12 ">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="person[0][is_data_and_document_identical]"
                        id="person0is_data_and_document_identical" autocomplete="off"
                        {{ $person['is_data_and_document_identical'] ? 'checked' : '' }}>
                    <label class="form-check-label text-black small-text2"
                        for="person0is_data_and_document_identical">
                        Have you uploaded the above documents to this site & checked all data entered is identical
                        to
                        these documents?
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
