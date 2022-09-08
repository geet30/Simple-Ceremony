@php
$personParent = 'person[0][parent]';
$personParentElement = 'person0Parent';
@endphp
<div class="row pt-4">
    <div class="col-12 mb-4">
        <h2 class="h3 neutral-100 mb-0">Details of the parties’ parents</h2>
    </div>
    <div class="col-12 mb-30">
        <div class="d-md-flex w-100">
            <div class="d-flex add-ons-detail ">
                <div class="numberCircle align-self-center">3</div>
                <h2 class="h4 neutral-100 align-self-center mb-0 ms-2">Details of parent's details</h2>
            </div>
        </div>
    </div>
    <div class="col-12 mx-auto ">
        <div class="haze-50-alert">
            <p class="mb-0 neutral-100 body-1">Instructions:</p>
            <p class="mb-0 neutral-100 body-3-regular">It is a legal requirement that you complete parents full legal
                names (current & at birth) of Person 1- {preferred name of Person 1}. If on your birth certificate, a
                parent name is listed as “Unknown” you can complete as “Unknown” but otherwise it is a requirement to
                include their full legal name.</p>
        </div>
    </div>
    <div class="col-12 mt-4">
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}0CurrentName" class="form-label small-text2">Current Name of
                    Parent
                    1</label>
                <input type="text" value="SMITH" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[0][current_name]" id="{{ $personParentElement }}0CurrentName" required>
                <span class="small-text2 text-black mt-1">*Must be in UPPERCASE</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}0FirstName" class="form-label small-text2">Parent 1 first
                    name</label>
                <input type="text" value="Brad" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[0][first_name]" id="{{ $personParentElement }}0FirstName" required>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}oOtherName" class="form-label small-text2">Parent 1 other given
                    name(s)</label>
                <input type="text" value="Martin" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[0][other_name]" id="{{ $personParentElement }}0OtherName" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}0BirthName" class="form-label small-text2">Birth Name of Parent
                    1</label>
                <input type="text" value="SMITH" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[0][parent_birth_name]" id="{{ $personParentElement }}0BirthName"
                    required>
                <span class="small-text2 text-black mt-1">*Must be in UPPERCASE</span>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $presonParentElement }}FirstName" class="form-label small-text2">Parent 1 first
                    name</label>
                <input type="text" value="Brad" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[first_name]" id="{{ $presonParentElement }}FirstName" required>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}OtherName" class="form-label small-text2">Parent 1 other given
                    name(s)</label>
                <input type="text" value="Martin" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[other_name]" id="{{ $personParentElement }}OtherName" required>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}0BirthPlace" class="form-label small-text2">Birth place</label>
                <select name="{{ $personParent }}[0][birth_place]" id="{{ $personParentElement }}0BirthPlace"
                    class="js-placeholder-single-input form-control">
                    <option value="0">Select country here</option>
                    <option value="1" selected="">Australia</option>
                    <option value="2">Add other country names here</option>
                    <option value="3">Add other country names here</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}1CurrentName" class="form-label small-text2">Current Name of
                    Parent 2</label>
                <input type="text" value="SMITH" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[1][current_name]" id="{{ $personParentElement }}1CurrentName" required>
                <span class="small-text2 text-black mt-1">*Must be in UPPERCASE</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}1FirstName" class="form-label small-text2">Parent 2 first
                    name</label>
                <input type="text" value="Judith" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[1][first_name]" id="{{ $personParentElement }}1FirstName" required>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}1OtherName" class="form-label small-text2">Parent 2 other given
                    name(s)</label>
                <input type="text" value="Lyn" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[1][other_name]" id="{{ $personParentElement }}1OtherName" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="{{ $personParentElement }}1BirthName" class="form-label small-text2">Birth Name of Parent
                    2</label>
                <input type="text" value="GOONAN" class="form-control body-1 netural-100"
                    name="{{ $personParent }}[1][birth_name]" id="{{ $personParentElement }}1BirthName" required>
                <span class="small-text2 text-black mt-1">*Must be in UPPERCASE</span>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-6 mb-4 align-self-top">
                <label for="description" class="form-label small-text2">Parent 2 first name</label>
                <input type="text" value="Brad" class="form-control body-1 netural-100" name="name"
                    id="description" required>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="description" class="form-label small-text2">Parent 2 other given name(s)</label>
                <input type="text" value="Lyn" class="form-control body-1 netural-100" name="name"
                    id="description" required>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-6  align-self-top">
                <label for="{{ $personParentElement }}[1][birth_place]" class="form-label small-text2">Birth
                    place</label>
                <select name="{{ $personParent }}[1][birth_place]" id="{{ $personParentElement }}[1][birth_place]"
                    class="js-placeholder-single-input form-control">
                    <option value="0">Select country here</option>
                    <option value="1" selected="">Australia</option>
                    <option value="2">Add other country names here</option>
                    <option value="3">Add other country names here</option>
                </select>
            </div>
        </div>
    </div>
</div>
