@php
$documentDetail = $couple && $couple[0]->signedDocumentDetail ? $couple[0]->signedDocumentDetail : null;

@endphp
<form class=" pt-31" method="post" action="{{ route('celebrant.marriage.save-detail', $id) }}">
    @csrf
    <div class="row">
        <div class="pe-xl-0  col-xl-2  mb-4 mb-xl-0">
            <div class="d-flex add-ons-detail">
                <div class="numberCircle align-self-center">1</div>
                <h2 class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Documents</h2>
            </div>
        </div>
        <div class=" col-lg-9 col-xl-9 mt-3 mt-lg-0">
            <div class="row">
                <div class="col-md-6 col-xl-4 text-center position-relative mb-4 ">
                    <div class="document-box">
                        <div class="uploaded-content ">
                            <p id="filename" class="h4 neutral-100 mb-3">Notice of Intended Marriage
                                form.pdf</p>
                            <div>
                                <a class="me-2"
                                    href="{{ route('userNoim.preview-document', ['page' => 'noim-perview', 'id' => $couple[0]->user_id]) }}"
                                    target="_blank"><img src="/images/icons/uploading/eye.svg" class="img-fluid"
                                        alt="eye"></a>
                                <a class="me-2"
                                    href="{{ route('userNoim.preview-document', ['page' => 'noim-download', 'id' => $couple[0]->user_id]) }}"><img
                                        src="/images/icons/uploading/download.svg" class="img-fluid" alt="download"></a>
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
                                <a class="me-2"
                                    href="{{ route('userNoim.preview-document', 'preview-official-certificate-of-marriage') }}"><img
                                        src="/images/icons/uploading/eye.svg" class="img-fluid" alt="eye"></a>
                                <a class="me-2"
                                    href="{{ route('userNoim.preview-document', 'download-official-certificate-of-marriage') }}"><img
                                        src="/images/icons/uploading/download.svg" class="img-fluid" alt="download"></a>
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
                                <a class="me-2"
                                    href="{{ route('userNoim.preview-document', 'preview-declaration-of-no-legal-impediment-to-marriage') }}"><img
                                        src="/images/icons/uploading/eye.svg" class="img-fluid" alt="eye"></a>
                                <a class="me-2"
                                    href="{{ route('userNoim.preview-document', 'download-declaration-of-no-legal-impediment-to-marriage') }}"><img
                                        src="/images/icons/uploading/download.svg" class="img-fluid" alt="download"></a>
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
                                <a class="me-2"
                                    href="{{ route('userNoim.preview-document', 'preview-certificate-of-faithful-performance-by-interpreter') }}"><img
                                        src="/images/icons/uploading/eye.svg" class="img-fluid" alt="eye"></a>
                                <a class="me-2"
                                    href="{{ route('userNoim.preview-document', 'download-certificate-of-faithful-performance-by-interpreter') }}"><img
                                        src="/images/icons/uploading/download.svg" class="img-fluid" alt="download"></a>
                            </div>
                        </div>
                        <div class="created-date">Created Feb 27, 2022</div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-xl-4 text-center position-relative mb-4 ">
                    <div class="attach-document-box position-relative  d-none">
                        <input id="fileupload" class="fileupload" type="file" name="files[]">
                        <div class="inner-content">
                            <p class="document-text mb-4">Attach document</p>
                            <img src="/images/icons/uploading.svg" class="img-fluid mb-2">
                            <p class="text">Compatible file .pdf .docx</p>
                            <div class="d-flex justify-content-center">
                                <div class="align-self-center">
                                    <p class="darg neutral-100 mb-0">Drag or</p>
                                </div>
                                <div class="align-self-center ms-1">
                                    <p class="darg turquoise-100 mb-0 text-decoration-underline">browse file</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- progress-box -->
                    <div class="attach-document-box progress-box text-center  d-none">
                        <div class="progress-content">
                            <p class="h4 neutral-100">Uploading 0%</p>
                            <div id="progress" class="progress">
                                <div class="progress-bar bar"></div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--uploaded-box  -->
                    <div class="attach-document-box uploaded-box ">
                        <div class="d-flex form-check justify-content-end">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                autocomplete="off">
                        </div>
                        <div class="uploaded-content mt-3">
                            <p id="filename" class="h4 neutral-100 mb-4">Notice of Intended Marriage form</p>
                            <a class="me-2"><img src="/images/icons/uploading/eye.svg" class="img-fluid"
                                    alt="eye"></a>
                            <a class="me-2"><img src="/images/icons/uploading/download.svg" class="img-fluid"
                                    alt="download"></a>
                            <!-- <a><img src="/images/icons/uploading/delete.svg" class="img-fluid " alt="delete"></a> -->
                        </div>
                        <div class="created-date">Created Feb 29, 2022</div>
                    </div>
                    <!--  -->
                </div> --}}
                {{-- <div class="col-md-6 col-xl-4 text-center position-relative mb-4">
                    <div class="attach-document-box position-relative d-none">
                        <input id="fileupload" class="fileupload" type="file" name="files[]">
                        <div class="inner-content">
                            <p class="document-text mb-4">Attach document</p>
                            <img src="/images/icons/uploading.svg" class="img-fluid mb-2">
                            <p class="text">Compatible file .pdf .docx</p>
                            <div class="d-flex justify-content-center">
                                <div class="align-self-center">
                                    <p class="darg neutral-100 mb-0">Drag or</p>
                                </div>
                                <div class="align-self-center ms-1">
                                    <p class="darg turquoise-100 mb-0 text-decoration-underline">browse file</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- progress-box -->
                    <div class="attach-document-box progress-box text-center d-none">
                        <div class="progress-content">
                            <p class="h4 neutral-100">Uploading 0%</p>
                            <div id="progress" class="progress">
                                <div class="progress-bar bar"></div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--uploaded-box  -->
                    <div class="attach-document-box uploaded-box ">
                        <div class="d-flex form-check justify-content-end">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                autocomplete="off">
                        </div>
                        <div class="uploaded-content mt-3">
                            <p id="filename" class="h4 neutral-100 mb-4">Notice of Intended Marriage form</p>
                            <a class="me-2"><img src="/images/icons/uploading/eye.svg" class="img-fluid"
                                    alt="eye"></a>
                            <a class="me-2"><img src="/images/icons/uploading/download.svg" class="img-fluid"
                                    alt="download"></a>
                            <!-- <a><img src="/images/icons/uploading/delete.svg" class="img-fluid " alt="delete"></a> -->
                        </div>
                        <div class="created-date">Created Feb 29, 2022</div>
                    </div>
                    <!--  -->
                </div> --}}
                {{-- <div class="col-md-6 col-xl-4 text-center position-relative mb-4">
                    <div class="attach-document-box position-relative">
                        <input id="fileupload" class="fileupload" type="file" name="files[]">
                        <div class="inner-content">
                            <p class="document-text mb-4">Declaration of No Legal Impediment to Marriage</p>
                            <img src="/images/icons/uploading.svg" class="img-fluid mb-2">
                            <p class="text">Compatible file .pdf .docx</p>
                            <div class="d-flex justify-content-center">
                                <div class="align-self-center">
                                    <p class="darg neutral-100 mb-0">Drag or</p>
                                </div>
                                <div class="align-self-center ms-1">
                                    <p class="darg turquoise-100 mb-0 text-decoration-underline">browse file</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- progress-box -->
                    <div class="attach-document-box progress-box text-center d-none">
                        <div class="progress-content">
                            <p class="h4 neutral-100">Uploading 0%</p>
                            <div id="progress" class="progress">
                                <div class="progress-bar bar"></div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--uploaded-box  -->
                    <div class="attach-document-box uploaded-box d-none">
                        <div class="d-flex form-check justify-content-end">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                autocomplete="off">
                        </div>
                        <div class="uploaded-content">
                            <p id="filename" class="h4 neutral-100 mb-4"></p>
                            <a class="me-2"><img src="/images/icons/uploading/eye.svg" class="img-fluid"
                                    alt="eye"></a>
                            <a class="me-2"><img src="/images/icons/uploading/download.svg" class="img-fluid"
                                    alt="download"></a>
                            <a><img src="/images/icons/uploading/delete.svg" class="img-fluid" alt="delete"></a>
                        </div>
                        <div class="created-date">Created Feb 29, 2022</div>
                    </div>
                    <!--  -->
                </div> --}}
                <div class="col-md-6 col-xl-4 text-center position-relative mb-4">
                    <div class="attach-document-box position-relative">
                        <input id="fileupload" class="fileupload" type="file" name="files[]">
                        <div class="inner-content">
                            <p class="document-text mb-4">Certificate of Marriage - Form 15</p>
                            <img src="/images/icons/uploading.svg" class="img-fluid mb-2">
                            <p class="text">Compatible file .pdf .docx</p>
                            <div class="d-flex justify-content-center">
                                <div class="align-self-center">
                                    <p class="darg neutral-100 mb-0">Drag or</p>
                                </div>
                                <div class="align-self-center ms-1">
                                    <p class="darg turquoise-100 mb-0 text-decoration-underline">browse file</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- progress-box -->
                    <div class="attach-document-box progress-box text-center d-none">
                        <div class="progress-content">
                            <p class="h4 neutral-100">Uploading 0%</p>
                            <div id="progress" class="progress">
                                <div class="progress-bar bar"></div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--uploaded-box  -->
                    <div class="attach-document-box uploaded-box d-none">
                        <div class="d-flex form-check justify-content-end">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                autocomplete="off">
                        </div>
                        <div class="uploaded-content">
                            <p id="filename" class="h4 neutral-100 mb-4"></p>
                            <a class="me-2"><img src="/images/icons/uploading/eye.svg" class="img-fluid"
                                    alt="eye"></a>
                            <a class="me-2"><img src="/images/icons/uploading/download.svg" class="img-fluid"
                                    alt="download"></a>
                            <a><img src="/images/icons/uploading/delete.svg" class="img-fluid" alt="delete"></a>
                        </div>
                        <div class="created-date">Created Feb 29, 2022</div>
                    </div>
                    <!--  -->
                </div>
                {{-- <div class="col-md-6 col-xl-4 text-center position-relative mb-4">
                    <div class="attach-document-box position-relative">
                        <input id="fileupload" class="fileupload" type="file" name="files[]">
                        <div class="inner-content">
                            <p class="document-text mb-4">Certificate of Faithful performance of Interpreter</p>
                            <img src="/images/icons/uploading.svg" class="img-fluid mb-2">
                            <p class="text">Compatible file .pdf .docx</p>
                            <div class="d-flex justify-content-center">
                                <div class="align-self-center">
                                    <p class="darg neutral-100 mb-0">Drag or</p>
                                </div>
                                <div class="align-self-center ms-1">
                                    <p class="darg turquoise-100 mb-0 text-decoration-underline">browse file</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- progress-box -->
                    <div class="attach-document-box progress-box text-center d-none">
                        <div class="progress-content">
                            <p class="h4 neutral-100">Uploading 0%</p>
                            <div id="progress" class="progress">
                                <div class="progress-bar bar"></div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--uploaded-box  -->
                    <div class="attach-document-box uploaded-box d-none">
                        <div class="d-flex form-check justify-content-end">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                autocomplete="off">
                        </div>
                        <div class="uploaded-content">
                            <p id="filename" class="h4 neutral-100 mb-4"></p>
                            <a class="me-2"><img src="/images/icons/uploading/eye.svg" class="img-fluid"
                                    alt="eye"></a>
                            <a class="me-2"><img src="/images/icons/uploading/download.svg" class="img-fluid"
                                    alt="download"></a>
                            <a><img src="/images/icons/uploading/delete.svg" class="img-fluid" alt="delete"></a>
                        </div>
                        <div class="created-date">Created Feb 29, 2022</div>
                    </div>
                    <!--  -->
                </div> --}}
                <div class="col-12">
                    <a class="theme-btn primary-btn   cursor-pointer d-inline-flex">Download all documents</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-31">
        <div class="pe-xl-0  col-xl-2  mb-4 mb-xl-0">
            <div class="d-flex add-ons-detail">
                <div class="numberCircle align-self-center">2</div>
                <h2 class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Fill form</h2>
            </div>
        </div>
        <div class=" col-lg-9 col-xl-9 mt-3 mt-lg-0">
            <div class="row">
                <div class="col-md-6  mb-4 ">
                    <label for="marriage_certificate_number" class="form-label small-text2 ps-2">Fill marriage
                        certificate
                        number</label>
                    <input type="text" placeholder="Type marriage certificate number here"
                        class="form-control body-1 netural-100" name="marriage_certificate_number"
                        value="{{ $documentDetail ? $documentDetail->marriage_certificate_number : '' }}"
                        id="marriage_certificate_number">
                </div>
                <div class="col-12 mb-5">
                    <a role="button" class="theme-btn primary-btn cursor-pointer d-inline-flex me-lg-3 mb-4 mb-lg-0"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">Generate</a>
                    <a class="theme-btn primary-btn    d-inline-flex me-lg-3 mb-4 mb-lg-0 disabled" disabled>Click the
                        button next to the JS code will appear</a>
                </div>
                <div class="col-md-6  mb-4 ">
                    <label for="registry_number" class="form-label small-text2 ps-2">Fill eregistry number</label>
                    <input type="text" placeholder="Type eregistry number here"
                        class="form-control body-1 netural-100" name="registry_number" id="registry_number"
                        value="{{ $documentDetail ? $documentDetail->registry_number : '' }}">
                </div>
                <div class="col-12 mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="have_you_ordered_certificate"
                            id="have_you_ordered_certificate" autocomplete="off"
                            {{ $documentDetail && $documentDetail->have_you_ordered_certificate ? 'checked' : '' }}>
                        <label class="form-check-label body-3-regular text-black" for="have_you_ordered_certificate">
                            Marriage Certificate has been requested. Have you ordered the certificate?
                        </label>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <a class="theme-btn primary-btn   cursor-pointer d-inline-flex me-lg-3 mb-4 mb-lg-0"
                        data-bs-toggle="offcanvas" data-bs-target="#view-message" aria-controls="view-message">View
                        message before sending</a>
                    <a class="theme-btn primary-btn-border  d-inline-flex me-lg-3 mb-4 mb-lg-0 ">Send</a>
                </div>
                <div class="col-md-12 mb-4">
                    <label for="event_comment" class="form-label small-text2  ps-2">Event Summary Comments</label>
                    <textarea class="form-control body-1 netural-100" id="event_comment" placeholder="Type here" rows="10"
                        name="event_comment">{{ $documentDetail ? $documentDetail->event_comment : '' }}</textarea>
                </div>
                <div class="col-12 mb-4">
                    <button class="theme-btn primary-btn   cursor-pointer d-inline-flex mb-4 mb-lg-0">Send summary
                        comments</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Js code</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="dynamic-js-code">
                    <pre>
                        @include('elements.celebrant.marriage.detail.genrate-js-code')
                    </pre>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary" id="copy_code">Copy code</button> --}}
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    // $(document).ready(function() {
    //     setTimeout(() => {
    //         $('#exampleModal').modal('show');
    //     }, 500);
    // });
    var cl = console.log;
    // $(document).ready(function() {
    $('button#copy_code').click(function() {
        cl('clicked');
        let s = $('#dynamic-js-code pre').select();
        cl(s)
        document.execCommand("copy");
    });
    // });
</script>
