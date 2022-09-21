<div class="row">
    <div class="col-12 mb-4">
        <h2 class="h3 neutral-100 mb-0">Referrers</h2>
    </div>
    <h4>Add something special to your ceremony</h4>
    <div class="col-md-6 mb-4 ">
        <label for="further-help" class="form-label small-text2">Can we be of further help?</label>
        <select name="further_help" id="further-help" class="js-placeholder-single-input form-control" required>
            <option value="">Select answer here</option>
            <option value="1" {{ $referrer && $referrer->further_help == 1 ? 'selected' : '' }}>Add name add-ons 1
            </option>
            <option value="2" {{ $referrer && $referrer->further_help == 2 ? 'selected' : '' }}>Add name add-ons 2
            </option>
            <option value="3" {{ $referrer && $referrer->further_help == 3 ? 'selected' : '' }}>Add name add-ons 3
            </option>
        </select>
        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                    alt="Require Icon"></span>Field is required</div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12 mb-4">
        <h2 class="h3 neutral-100 mb-0">Do you need an interpreter</h2>
    </div>
    <div class="col-md-6 mb-4 align-self-end">
        <label for="english-speak-parties" class="form-label small-text2 neutral-100 ">Do both parties speak and
            understand
            English?</label>
        <select name="need_interpreter" id="english-speak-parties" class="js-placeholder-single-input form-control"
            required>
            <option value="">Select answer here</option>
            <option value="1" {{ $referrer && $referrer->need_interpreter == 1 ? 'selected' : '' }}>Yes</option>
            <option value="0" {{ $referrer && $referrer->need_interpreter == 0 ? 'selected' : '' }}>No</option>
        </select>
        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                    alt="Require Icon"></span>Field is required</div>
    </div>
    <div
        class="col-md-6 mb-4 align-self-end speaking-lang {{ $referrer && $referrer->need_interpreter == 0 ? '' : 'd-none' }}">
        <label for="language-speak" class="form-label  small-text2 neutral-100 ">What language they speak?</label>
        <select name="language_speak" id="language-speak" class="js-placeholder-single-input form-control">
            <option value="">Select answer here</option>
            <option value="english" {{ $referrer && $referrer->language_speak == 'english' ? 'selected' : '' }}>
                English
            </option>
            <option value="russian" {{ $referrer && $referrer->language_speak == 'russian' ? 'selected' : '' }}>
                Russian
            </option>
            <option value="arabic" {{ $referrer && $referrer->language_speak == 'arabic' ? 'selected' : '' }}>Arabic
            </option>
        </select>
        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                    alt="Require Icon"></span>Field is required</div>
    </div>
</div>
<div class="row speaking-lang {{ $referrer && $referrer->need_interpreter == 0 ? '' : 'd-none' }}">
    <div class="col-md-6 mb-4 align-self-end">
        <label for="interpreter-full-name" class="form-label  small-text2 neutral-100 ">Interpreter's full name</label>
        <input type="text" id="nterpreter-full-name" class="form-control" name="interpreter_full_name"
            value="{{ $referrer->interpreter_full_name ?? '' }}">
        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                    alt="Require Icon"></span>Field is required</div>
    </div>
    <div class="col-md-6 mb-4 align-self-end">
        <label for="interpreter-occupation" class="form-label  small-text2 neutral-100 ">Interpreter's
            occupation</label>
        <input type="text" id="interpreter-occupation" class="form-control" name="interpreter_occupation"
            value="{{ $referrer->interpreter_occupation ?? '' }}">
        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                    alt="Require Icon"></span>Field is required</div>
    </div>
    <div class="col-md-6 mb-4 align-self-end">
        <label for="interpreter-address" class="form-label  small-text2 neutral-100 ">Interpreter's
            address</label>
        <input type="text" id="interpreter-address" class="form-control" name="interpreter_address"
            value="{{ $referrer->interpreter_address ?? '' }}">
        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                    alt="Require Icon"></span>Field is required</div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-4">
        <h2 class="h3 neutral-100 mb-0">Almost there. Now the easy questions</h2>
    </div>
    <div class="col-md-6 mb-4 align-self-end">
        <label for="sc-hear" class="form-label  small-text2 neutral-100">When did you hear about SC?</label>
        <select name="when_did_you_hear_about_us" id="sc-hear" class="js-placeholder-single-input form-control"
            required>
            <option value="">Select answer here</option>
            <option value="1" {{ $referrer && $referrer->when_did_you_hear_about_us == 1 ? 'selected' : '' }}>
                Today</option>
            <option value="2" {{ $referrer && $referrer->when_did_you_hear_about_us == 2 ? 'selected' : '' }}>This
                week</option>
            <option value="3" {{ $referrer && $referrer->when_did_you_hear_about_us == 3 ? 'selected' : '' }}>This
                month</option>
            <option value="4" {{ $referrer && $referrer->when_did_you_hear_about_us == 4 ? 'selected' : '' }}>Last
                3 months</option>
            <option value="5" {{ $referrer && $referrer->when_did_you_hear_about_us == 5 ? 'selected' : '' }}>
                Greater than 3 months</option>
        </select>
        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                    alt="Require Icon"></span>Field is required</div>
    </div>
    <div class="col-md-6 mb-4 align-self-end">
        <label for="process" class="form-label  small-text2 neutral-100 ">How easy has the process been so far?
            Could we have the ratings</label>
        <select name="process_feedback" id="process" class="js-placeholder-single-input form-control" required>
            <option value="">Select answer here</option>
            <option value="1" {{ $referrer && $referrer->process_feedback == 1 ? 'selected' : '' }}>
                Very easy</option>
            <option value="2" {{ $referrer && $referrer->process_feedback == 2 ? 'selected' : '' }}>
                Easy</option>
            <option value="3" {{ $referrer && $referrer->process_feedback == 3 ? 'selected' : '' }}>OK
            </option>
            <option value="4" {{ $referrer && $referrer->process_feedback == 4 ? 'selected' : '' }}>
                Hard</option>
            <option value="5" {{ $referrer && $referrer->process_feedback == 5 ? 'selected' : '' }}>
                Very hard</option>
        </select>
        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                    alt="Require Icon"></span>Field is required</div>
    </div>
    <div class="col-md-6 mb-4 align-self-end">
        <label for="google-review" class="form-label  small-text2 neutral-100 ">Did you read Simple Ceremonies’ Google
            reviews before booking?</label>
        <select name="read_google_review_before_booking" id="google-review"
            class="js-placeholder-single-input form-control" required>
            <option value="">Select answer here</option>
            <option value="1"
                {{ $referrer && $referrer->read_google_review_before_booking == 1 ? 'selected' : '' }}>Yes </option>
            <option value="0"
                {{ $referrer && $referrer->read_google_review_before_booking == 0 ? 'selected' : '' }}>No</option>
        </select>
        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                    alt="Require Icon"></span>Field is required</div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-4 ">
            <label for="find-us" class="form-label h4 neutral-100 mb-3">How did you find us</label>
            <select name="how_did_you_find_us" id="find-us" class="js-placeholder-single-input form-control">
                <option value="">Select answer here</option>
                <option value="1" {{ $referrer && $referrer->how_did_you_find_us == 1 ? 'selected' : '' }}>Google
                </option>
                <option value="2" {{ $referrer && $referrer->how_did_you_find_us == 2 ? 'selected' : '' }}>
                    Trailer
                    signage</option>
                <option value="3" {{ $referrer && $referrer->how_did_you_find_us == 3 ? 'selected' : '' }}>Radio
                    ads
                </option>
                <option value="4" {{ $referrer && $referrer->how_did_you_find_us == 4 ? 'selected' : '' }}>Friend
                </option>
                <option value="5" {{ $referrer && $referrer->how_did_you_find_us == 5 ? 'selected' : '' }}>
                    Referrer
                </option>
                <option value="6" {{ $referrer && $referrer->how_did_you_find_us == 6 ? 'selected' : '' }}>Other
                </option>
            </select>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                        alt="Require Icon"></span>Field is required</div>
        </div>
    </div>
</div>
