@php
$personParent = 'person[1][parent]';
$personParentElement = 'person1Parent';
@endphp
<div class="row pt-4">
    <div class="col-12 mb-30">
        <div class="d-md-flex w-100">
            <div class="d-flex add-ons-detail ">
                <div class="numberCircle align-self-center">4</div>
                <h2 class="h4 neutral-100 align-self-center mb-0 ms-2">Details of Person 2 Parents</h2>
            </div>
        </div>
    </div>
    <div class="col-12 mx-auto ">
        <div class="haze-50-alert">
            <p class="mb-0 neutral-100 body-1">Instructions:</p>
            <p class="mb-0 neutral-100 body-3-regular">It is a legal requirement that you complete parents full legal
                names (current & at birth) of Person 2- {preferred name of Person 2}. If on your birth certificate, a
                parent name is listed as “Unknown” you can complete as “Unknown” but otherwise it is a requirement to
                include their full legal name.</p>
        </div>
    </div>
    <div class="col-12 mt-4">
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}0CurrentName" class="form-label small-text2">Current parent 1
                    family name</label>
                <input type="text" value="HAMMOND" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[0][current_name]" id="{{ $personParentElement }}0CurrentName" required>
                <span class="small-text2 text-black mt-1">*Must be in UPPERCASE</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}0FirstName" class="form-label small-text2">Parent 1 first
                    name</label>
                <input type="text" value="Miguelle" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[0][first_name]" id="{{ $personParentElement }}0FirstName" required>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}0OtherName" class="form-label small-text2">Parent 1 other given
                    name(s)</label>
                <input type="text" value="Lux" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[0][other_name]" id="{{ $personParentElement }}0OtherName" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}0BirthName" class="form-label small-text2">Birth Name of Parent
                    1</label>
                <input type="text" value="HAMMOND" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[0][birth_name]" id="{{ $personParentElement }}0BirthName" required>
                <span class="small-text2 text-black mt-1">*Must be in UPPERCASE</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}0BirthFirstName" class="form-label small-text2">Parent 1 first
                    name</label>
                <input type="text" value="Miguelle" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[0][birth_first_name]" id="{{ $personParentElement }}0BirthFirstName"
                    required>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}BirthOtherName" class="form-label small-text2">Parent 1 other
                    given name(s)</label>
                <input type="text" value="Lux" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[0][birth_other_name]" id="{{ $personParentElement }}BirthOtherName"
                    required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}0BirthPlace" class="form-label small-text2">Birth place</label>
                <select name="{{ $personParent }}[0][birth_place]" id="{{ $personParentElement }}0BirthPlace"
                    class="js-placeholder-single-input form-control">
                    <option value="0">Select country here</option>
                    <option value="Australia" selected="">Australia</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}1CurrentName" class="form-label small-text2">Current Parent 2
                    family name</label>
                <input type="text" value="HAMMOND" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[1][current_name]" id="{{ $personParentElement }}1CurrentName" required>
                <span class="small-text2 text-black mt-1">*Must be in UPPERCASE</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}1FirstName" class="form-label small-text2">Parent 2 first
                    name</label>
                <input type="text" value="Pat" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[1][first_name]" id="{{ $personParentElement }}1FirstName" required>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}1OtherName" class="form-label small-text2">Parent 2 other given
                    name(s)</label>
                <input type="text" value="Ellory" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[1][other_name]" id="{{ $personParentElement }}1OtherName" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}1BirthName" class="form-label small-text2">Birth Name of Parent
                    2</label>
                <input type="text" value="DOBSON" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[1][birth_name]" id="{{ $personParentElement }}1BirthName" required>
                <span class="small-text2 text-black mt-1">*Must be in UPPERCASE</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}1BirthFirstName" class="form-label small-text2">Parent 2 first
                    name</label>
                <input type="text" value="Pat" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[1][birth_first_name]" id="{{ $personParentElement }}1BirthFirstName"
                    required>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}1OtherName" class="form-label small-text2">Parent 2 other given
                    name(s)</label>
                <input type="text" value="Ellory" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[1][birth_other_name]" id="{{ $personParentElement }}1OtherName"
                    required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6  align-self-top">
                <label for="{{ $personParentElement }}[1][birth_place]" class="form-label small-text2">Birth
                    place</label>
                <select name="{{ $personParent }}[1][birth_place]" id="{{ $personParentElement }}[1][birth_place]"
                    class="js-placeholder-single-input form-control">
                    <option value="0">Select country here</option>
                    <option value="Australia" selected=>Australia</option>
                </select>
            </div>
        </div>
    </div>
</div>
