@php
$person = isset($person) && isset($person[1]) ? $person[1] : null;
$personIdenticalDoc = 'person[1]';
$personIdenticalDocElement = 'person1DocElement';
@endphp
<div class="row pt-4">
    <div class="col-12 mb-4">
        <div class="d-md-flex w-100">
            <div class="d-flex add-ons-detail ">
                <div class="numberCircle align-self-center">6</div>
                <h2 class="h4 neutral-100 align-self-center mb-0 ms-2">Person 2 documents - Ava</h2>
            </div>
        </div>
    </div>
    <div class="col-12 ">
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personIdenticalDocElement }}Name" class="form-label small-text2">Evidence of Date and
                    Place of Birth</label>
                <select name="{{ $personIdenticalDoc }}[birth_identical_document_first]"
                    id="{{ $personIdenticalDocElement }}Name" class="js-placeholder-single-input form-control" required>
                    <option value="">Select answer here</option>
                    @foreach (Config::get('userConstants.birth_evidence_list_1') as $key => $evidence)
                        <option value="{{ $key }}"
                            {{ $person && $person['birth_identical_document_first'] == $key ? 'selected' : '' }}>
                            {{ $evidence }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personIdenticalDocElement }}Number" class="form-label small-text2">Document
                    Number</label>
                <input type="text" value="{{ $person['birth_identical_document_number_first'] ?? '' }}"
                    class="form-control body-1 netural-100"
                    name="{{ $personIdenticalDoc }}[birth_identical_document_number_first]"
                    id="{{ $personIdenticalDocElement }}Number" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Field is required</div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personIdenticalDocElement }}Name2" class="form-label small-text2">Photo ID </label>
                <select name="{{ $personIdenticalDoc }}[birth_identical_document_second]"
                    id="{{ $personIdenticalDocElement }}Name2" class="js-placeholder-single-input form-control">
                    <option value="">Select answer here</option>
                    @foreach (Config::get('userConstants.birth_evidence_list_2') as $key => $evidence)
                        <option value="{{ $key }}"
                            {{ $person && $person['birth_identical_document_second'] == $key ? 'selected' : '' }}>
                            {{ $evidence }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personIdenticalDocElement }}Number2" class="form-label small-text2">Document
                    Number</label>
                <input type="text"
                    value="{{ $person && $person['birth_identical_document_number_second'] ? $person['birth_identical_document_number_second'] : '' }}"
                    class="form-control body-1 netural-100"
                    name="{{ $personIdenticalDoc }}[birth_identical_document_number_second]"
                    id="{{ $personIdenticalDocElement }}Number2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 align-self-top">
                <label for="{{ $personIdenticalDocElement }}State1" class="form-label small-text2">State, Territory or
                    country of issue</label>
                <input type="text"
                    value="{{ $person && $person['birth_identical_document_issue_state'] ? $person['birth_identical_document_issue_state'] : '' }}"
                    class="form-control body-1 netural-100"
                    name="{{ $personIdenticalDoc }}[birth_identical_document_issue_state]"
                    id="{{ $personIdenticalDocElement }}State1" required>
            </div>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                        alt="Require Icon"></span>Field is required</div>
        </div>
    </div>
</div>
