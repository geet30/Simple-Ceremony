@extends('layouts.panels')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 p-0">
                @include('elements.user-sidebar')
            </div>
            <div class="col-10 col-md-9 col-lg-10 px-md-4">
                {{-- @include('elements.user-header') --}}
                <div class="card panel-card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-md-end"> <a
                                    class="theme-btn primary-btn d-inline-flex justify-content-center" href="/user/NoIM">
                                    <img class="me-2" src="/images/icons/edit.svg" alt="shopping-icon">
                                    Edit
                                </a>
                            </div>
                            <div class="col-12 col-xl-10 mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-xl-4 text-center position-relative mb-4 ">
                                        <div class="document-box">
                                            <div class="uploaded-content ">
                                                <p id="filename" class="h4 neutral-100 mb-3">Notice of Intended Marriage
                                                    form.pdf</p>
                                                <div>
                                                    <a class="me-2" href="/user/signature"><img
                                                            src="/images/icons/uploading/eye.svg" class="img-fluid"
                                                            alt="eye"></a>
                                                    <a class="me-2"><img src="/images/icons/uploading/download.svg"
                                                            class="img-fluid" alt="download"></a>
                                                </div>
                                            </div>
                                            <div class="created-date">Created Feb 27, 2022</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 text-center position-relative mb-4 ">
                                        <div class="document-box">
                                            <div class="uploaded-content">
                                                <p id="filename" class="h4 neutral-100 mb-3">Official Certificate of
                                                    Marriage</p>
                                                <div>
                                                    <a class="me-2" href="/user/signature"><img
                                                            src="/images/icons/uploading/eye.svg" class="img-fluid"
                                                            alt="eye"></a>
                                                    <a class="me-2"><img src="/images/icons/uploading/download.svg"
                                                            class="img-fluid" alt="download"></a>
                                                </div>
                                            </div>
                                            <div class="created-date">Created Feb 27, 2022</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 text-center position-relative mb-4 ">
                                        <div class="document-box">
                                            <div class="uploaded-content ">
                                                <p id="filename" class="h4 neutral-100 mb-3">Declaration of No legal
                                                    Impediment</p>
                                                <div>
                                                    <a class="me-2" href="/user/signature"><img
                                                            src="/images/icons/uploading/eye.svg" class="img-fluid"
                                                            alt="eye"></a>
                                                    <a class="me-2"><img src="/images/icons/uploading/download.svg"
                                                            class="img-fluid" alt="download"></a>
                                                </div>
                                            </div>
                                            <div class="created-date">Created Feb 27, 2022</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 text-center position-relative mb-4 ">
                                        <div class="document-box">
                                            <div class="uploaded-content ">
                                                <p id="filename" class="h4 neutral-100 mb-3">Certificate of Faithful
                                                    performance of Interpreter</p>
                                                <div>
                                                    <a class="me-2" href="/user/signature"><img
                                                            src="/images/icons/uploading/eye.svg" class="img-fluid"
                                                            alt="eye"></a>
                                                    <a class="me-2"><img src="/images/icons/uploading/download.svg"
                                                            class="img-fluid" alt="download"></a>
                                                </div>
                                            </div>
                                            <div class="created-date">Created Feb 27, 2022</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 text-center position-relative mb-4 ">
                                        <div class="document-box">
                                            <div class="uploaded-content">
                                                <p id="filename" class="h4 neutral-100 mb-3">Official Certificate of
                                                    Marriage</p>
                                                <div>
                                                    <a class="me-2" href="/user/signature"><img
                                                            src="/images/icons/uploading/eye.svg" class="img-fluid"
                                                            alt="eye"></a>
                                                    <a class="me-2"><img src="/images/icons/uploading/download.svg"
                                                            class="img-fluid" alt="download"></a>
                                                </div>
                                            </div>
                                            <div class="created-date">Created Feb 27, 2022</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="d-flex w-100 mt-4  add-ons-detail">
                            <div class="numberCircle col-3 col-xl-1 ">1</div>
                            <div class="ms-2 col-9 col-xl-10">
                                <h2 class="subheader-3 neutral-100 mb-0 ms-2">How did you sign and have your signature
                                    witnessed?</h2>
                                <div class="row w-100 mt-3 mb-4">
                                    <div class="col-12 col-md-7 col-xl-6">
                                        <label for="witnessed" class="form-label small-text2 col-12 mb-2 ms-2">Did you
                                            electronically sign and have your signature
                                            witnessed on this website?</label>
                                        <select name="witnessed" id="witnessed"
                                            class="js-placeholder-single-input form-control col-12">
                                            <option value="1" selected="">Yes</option>
                                            <option value="2">No, I will need to upload the NOIM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row w-100 mb-4">
                                    <div class="col-12 col-md-6 col-xl-5">
                                        <label for="NoIM" class="form-label small-text2 col-12 mb-2 ms-2">How did you
                                            have the NoIM witnessed?</label>
                                        <select name="NoIM" id="NoIM"
                                            class="js-placeholder-single-input form-control col-12">
                                            <option value="" disabled="" selected="" hidden="">Select
                                                here</option>
                                            <option value="1">Live video</option>
                                            <option value="2">Video recording</option>
                                            <option value="3">In person</option>
                                            {{-- <option value="4">Justice of peace</option>
                                            <option value="5">Legal Practitioner</option>
                                            <option value="6">Notary Public</option>
                                            <option value="7">Other Authorised Person</option> --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="row w-100 mb-4">
                                    <div class="col-12 col-md-6 col-xl-5">
                                        <label for="NoIM1" class="form-label small-text2 col-12 mb-2 ms-2">Who has
                                            witnessed person 1 sign the NoIm?</label>
                                        <select name="NoIM1" id="NoIM1"
                                            class="js-placeholder-single-input form-control col-12">
                                            <option value="" disabled="" selected="" hidden="">Select
                                                here</option>
                                            <option value="1">Authorised Marriage Celebrant</option>
                                            <option value="2">Justice of the Peace</option>
                                            <option value="3">Legal Practitioner</option>
                                            <option value="4">Notary Public</option>
                                            <option value="5">Other Authorised Person</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-5">
                                        <label for="NoIM2" class="form-label small-text2 col-12 mb-2 ms-2">Who has
                                            witnessed person 2 sign the NoIm?</label>
                                        <select name="NoIM2" id="NoIM2"
                                            class="js-placeholder-single-input form-control col-12">
                                            <option value="" disabled="" selected="" hidden="">Select
                                                here</option>
                                            <option value="1">Authorised Marriage Celebrant</option>
                                            <option value="2">Justice of the Peace</option>
                                            <option value="3">Legal Practitioner</option>
                                            <option value="4">Notary Public</option>
                                            <option value="5">Other Authorised Person</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row w-100 mb-4">
                                    <div class="col-12 col-md-6 col-xl-5 mb-4">
                                        <label for="NoIM1" class="form-label small-text2 col-12 mb-2 ms-2">Authorised
                                            Person's Name who witnessed
                                            Person 1 on the NoIM</label>
                                        <input type="text" placeholder="Type your witness' name here"
                                            class="form-control body-1 netural-100" name="name" id="InputName"
                                            required>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-5 mb-4">
                                        <label for="NoIM1" class="form-label small-text2 col-12 mb-2 ms-2">Authorised
                                            Person's Name who witnessed
                                            Person 2 on the NoIM</label>
                                        <input type="text" placeholder="Type your witness' name here"
                                            class="form-control body-1 netural-100" name="name" id="InputName"
                                            required>
                                    </div>
                                </div>
                                <div class="row w-100 ">
                                    <div class="col-12 ">
                                        <a class="theme-btn primary-btn d-inline-flex">Send</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
