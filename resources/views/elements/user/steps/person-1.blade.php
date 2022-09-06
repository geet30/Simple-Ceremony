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
                <label for="InputName" class="form-label small-text2">Person 1 Preferred name</label>
                <input type="text" class="form-control body-1 netural-100" name="name" id="InputName" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                            alt="Require Icon"></span>Title is required</div>
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
                            <select name="birth" id="birth" class="js-placeholder-single-input form-control">
                                <option value="" disabled="" selected="" hidden="">Select answer here
                                </option>
                                <option value="1">Birth Certificate or official extract</option>
                                <option value="2">Australian Passport</option>
                                <option value="3">OS Passport</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-4 align-self-end">
                            <label for="id" class="form-label small-text2">What photo ID are you using?</label>
                            <select name="id" id="id" class="js-placeholder-single-input form-control">
                                <option value="" disabled="" selected="" hidden="">Select answer here
                                </option>
                                <option value="1">Current Card (Govt issued)</option>
                                <option value="2">Current Driver’s Licence</option>
                                <option value="3">Current Proof of Age Card (Govt issued)</option>
                                <option value="4">Passport</option>
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
                <label for="description" class="form-label small-text2">Description of person 1</label>
                <select name="description" id="description" class="js-placeholder-single-input form-control">
                    <option value="0">Select answer here</option>
                    <option value="1">Partner</option>
                    <option value="2" selected="">Bride</option>
                    <option value="3">Groom</option>
                </select>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="description" class="form-label small-text2">Your family name</label>
                <input type="text" value="SMITH" class="form-control body-1 netural-100" name="name"
                    id="description" required>
                <span class="small-text2 text-black mt-1">*Must be in UPPERCASE</span>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="description" class="form-label small-text2">Person 1 First Name</label>
                <input type="text" value="Geoff" class="form-control body-1 netural-100" name="name"
                    id="description" required>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="description" class="form-label small-text2">Other given name(s)</label>
                <input type="text" value="George" class="form-control body-1 netural-100" name="name"
                    id="description" required>
            </div>
            <div class="col-md-12 mb-4 align-self-top">
                <label for="description" class="form-label small-text2">Combination of your name</label>
                <input type="text" value="Geoff George SMITH" class="form-control body-1 netural-100"
                    name="name" id="description" required>
            </div>
            <div class="col-12 mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember3" id="remember3"
                        autocomplete="off">
                    <label class="form-check-label text-black small-text2" for="remember3">
                        Does this name exactly match with your passport or drivers licence?
                    </label>
                </div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="gender" class="form-label small-text2">Gender (Optional)</label>
                <select name="gender" id="gender" class="js-placeholder-single-input form-control">
                    <option value="0">Select gender here</option>
                    <option value="1">Female</option>
                    <option value="2" selected="">Male</option>
                    <option value="3">Non-binary</option>
                    <option value="4">X</option>
                </select>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="description" class="form-label small-text2">Usual occupation</label>
                <input type="text" value="Architect" class="form-control body-1 netural-100" name="name"
                    id="description" required>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="residence" class="form-label small-text2">Usual place of residence</label>
                <select name="residence" id="residence" class="js-placeholder-single-input form-control">
                    <option value="0">Select country here</option>
                    <option value="1" selected="">Australia</option>
                    <option value="2">Add other country names here</option>
                    <option value="3">Add other country names here</option>
                </select>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-6 mb-4 ">
                <label for="description" class="form-label small-text2">Address line 1</label>
                <input type="text" value="98 Shirley Street" class="form-control body-1 netural-100"
                    name="name" id="description" required>
            </div>
            <div class="col-md-6 mb-4 ">
                <label for="description" class="form-label small-text2">Address line 2</label>
                <input type="text" value="-" class="form-control body-1 netural-100" name="name"
                    id="description" required>
            </div>
            <div class="col-md-6 mb-4 ">
                <label for="description" class="form-label small-text2">Suburb/Town/City</label>
                <input type="text" value="PIMPAMA QLD" class="form-control body-1 netural-100" name="name"
                    id="description" required>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="state" class="form-label small-text2">State/Territory/Province</label>
                <select name="state" id="state" class="js-placeholder-single-input form-control">
                    <option value="0">Select country here</option>
                    <option value="1" selected="">TAS</option>
                    <option value="2">Add other country names here</option>
                    <option value="3">Add other country names here</option>
                </select>
            </div>
            <div class="col-md-6 mb-4 ">
                <label for="description" class="form-label small-text2">Post code / ZIP Code </label>
                <input type="text" value="0000" class="form-control body-1 netural-100" name="name"
                    id="description" required>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="conjugal" class="form-label small-text2">Conjugal status</label>
                <select name="conjugal" id="conjugal" class="js-placeholder-single-input form-control">
                    <option value="0">Select country here</option>
                    <option value="1" selected="">Never validly married</option>
                    <option value="2">Divorced</option>
                    <option value="3">Add other country names here</option>
                </select>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="birthplace2" class="form-label small-text2">Birth place</label>
                <select name="birthplace2" id="birthplace2" class="js-placeholder-single-input form-control">
                    <option value="0">Select country here</option>
                    <option value="1" selected="">Australia</option>
                    <option value="2">Add other country names here</option>
                    <option value="3">Add other country names here</option>
                </select>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
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
                                <p class="body-2 text-black mb-1">Upload your evidence of Date and Place of Birth here
                                </p>
                                <p class="darg turquoise-100 mb-0 text-decoration-underline">browse file</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="city" class="form-label small-text2">Suburb/town/city</label>
                <select name="city" id="city" class="js-placeholder-single-input form-control">
                    <option value="0">Select country here</option>
                    <option value="1" selected="">PIMPAMA QLD</option>
                    <option value="2">Add other country names here</option>
                    <option value="3">Add other country names here</option>
                </select>
            </div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="birthplace1" class="form-label small-text2">State/territory</label>
                <select name="birthplace1" id="birthplace1" class="js-placeholder-single-input form-control">
                    <option value="0">Select your state/territory here</option>
                    <option value="1">NSW</option>
                    <option value="2">VIC</option>
                    <option value="3">ACT</option>
                    <option value="4">NT</option>
                    <option value="5">WA</option>
                    <option value="6">ACT</option>
                    <option value="7">SA</option>
                    <option value="8" selected="">TAS</option>
                </select>
            </div>
            <div class="col-md-6 mb-4 ">
                <label for="description" class="form-label small-text2">Date of Birth </label>
                <input type="text" value="09/03/1995" class="form-control body-1 netural-100" name="name"
                    id="description" required>
            </div>
            <div class="col-md-6 mb-4 align-self-top"></div>
            <div class="col-md-6 mb-4 align-self-top">
                <label for="parties" class="form-label small-text2">Are the parties related?</label>
                <select name="parties" id="parties" class="js-placeholder-single-input form-control">
                    <option value="0">Select your answer here</option>
                    <option value="1" selected="">Yes</option>
                    <option value="2">No</option>
                </select>
            </div>
            <div class="col-md-6 mb-4 ">
                <label for="description" class="form-label small-text2">How are they related </label>
                <input type="text" placeholder="Type here" class="form-control body-1 netural-100" name="name"
                    id="description" required>
            </div>
            <div class="col-12 ">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember2" id="remember2"
                        autocomplete="off">
                    <label class="form-check-label text-black small-text2" for="remember2">
                        Have you uploaded the above documents to this site & checked all data entered is identical to
                        these documents?
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
