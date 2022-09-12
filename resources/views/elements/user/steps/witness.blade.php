@php
$personWitness = 'witness[0]';
$personWitnessElement = 'person0Witness';
@endphp

<div class="row pt-4">
    <div class="col-12 mb-4">
        <h2 class="h3 neutral-100 mb-0">
            The marriage documents
        </h2>
    </div>
    <div class="col-12 mb-4">
        <div class="d-md-flex w-100">
            <div class="d-flex add-ons-detail mb-3">
                <div class="numberCircle align-self-center">1</div>
                <h2 class="h4 neutral-100 align-self-center mb-0 ms-2">Witness 1 </h2>
            </div>
        </div>
        <p class="p5 mb-0 text-black">This will be the witness at your ceremony on the day. They can be anyone (a friend,
            a family member, even someone you do not know ;-). They do need to be over 18 years old and understand
            English (even if with the help of an interpreter)</p>
    </div>
    <div class="col-12 ">
        <div class="row">
            <div class="col-md-6 mb-4">
                <label for="{{ $personWitnessElement }}FamilyName" class="form-label small-text2">Family name</label>
                <input type="text" value="GEORGE" class="form-control body-1 netural-100"
                    name="{{ $personWitness }}[family_name]" id="{{ $personWitnessElement }}FamilyName" required>
                <span class="small-text2 text-black mt-1">*Must be in UPPERCASE</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personWitnessElement }}firstName" class="form-label small-text2">First name</label>
                <input type="text" value="Tony" class="form-control body-1 netural-100"
                    name="{{ $personWitness }}[first_name]" id="{{ $personWitnessElement }}firstName" required>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personWitnessElement }}OtherName" class="form-label small-text2">Last/other name</label>
                <input type="text" value="MAX" class="form-control body-1 netural-100"
                    name="{{ $personWitness }}[other_name]" id="{{ $personWitnessElement }}OtherName" required>
            </div>
        </div>
    </div>
</div>
@php
$personWitness = 'witness[1]';
$personWitnessElement = 'person1Witness';
@endphp
<div class="row mt-3">
    <div class="col-12 mb-4">
        <div class="d-md-flex w-100">
            <div class="d-flex add-ons-detail mb-3">
                <div class="numberCircle align-self-center">2</div>
                <h2 class="h4 neutral-100 align-self-center mb-0 ms-2">Witness 2 </h2>
            </div>
        </div>
        <p class="p5 mb-0 text-black">This will be the witness at your ceremony on the day. They can be anyone (a
            friend, a family member, even someone you do not know ;-). They do need to be over 18 years old and
            understand English (even if with the help of an interpreter)</p>
    </div>
    <div class="col-12 ">
        <div class="row">
            <div class="col-md-6 mb-4">
                <label for="{{ $personWitnessElement }}FamilyName" class="form-label small-text2">Family name</label>
                <input type="text" value="Rodge" class="form-control body-1 netural-100"
                    name="{{ $personWitness }}[family_name]" id="{{ $personWitnessElement }}FamilyName" required>
                <span class="small-text2 text-black mt-1">*Must be in UPPERCASE</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personWitnessElement }}FirstName" class="form-label small-text2">First name</label>
                <input type="text" value="Alex" class="form-control body-1 netural-100"
                    name="{{ $personWitness }}[first_name]" id="{{ $personWitnessElement }}FirstName" required>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personWitnessElement }}OtherName" class="form-label small-text2">Last/other
                    name</label>
                <input type="text" value="TOBEY" class="form-control body-1 netural-100"
                    name="{{ $personWitness }}[other_name]" id="{{ $personWitnessElement }}OtherName" required>
            </div>
        </div>
    </div>
    <div class="col-12 mb-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="witness-checkbox" id="witness-checkbox"
                autocomplete="off" required>
            <label class="form-check-label text-black body-3-regular" for="witness-checkbox">
                We have checked that all the details above are 100% correct and exactly agree with all the documentation
                we have provided. We accept that we are responsible for any errors and the cost associated with
                rectifying them
            </label>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                        alt="Require Icon"></span>Field is required</div>
        </div>
    </div>
</div>
</div>
