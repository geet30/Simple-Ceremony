<div class="modal" id="{{ $target }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <ul class="signature-tabs nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#{{ $target }}e-signature" type="button" role="tab"
                        aria-selected="true">E-Signature</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#{{ $target }}-signature-upload"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Upload
                        signature</button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="{{ $target }}e-signature" role="tabpanel"
                    aria-labelledby="home-tab">
                    <form method="POST" action="{{ route('userNoim.documents.signature') }}">
                        <div class="modal-body">
                            <div class="card-body">
                                @csrf
                                <input type="hidden" name="document_name" value="{{ $document_name }}">
                                <div class="col-md-12">
                                    <label class="mb-3 info-ttitle" for="">Signature:</label>
                                    <div id="{{ $signatureId }}">
                                    </div>
                                    <textarea id="{{ $signatureId }}signature64" name="signed" style="display: none"></textarea>
                                    <input type="hidden" name="key" value="{{ $field_name }}">
                                </div>
                                <br />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="{{ $signatureId }}clear" class="clear-signature-btn">Clear
                                Signature</button>
                            <button class="save-signature-btn">Save</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="{{ $target }}-signature-upload" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <form method="POST" action="{{ route('userNoim.documents.signature') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="document_name" value="{{ $document_name }}">
                        <input type="hidden" name="key" value="{{ $field_name }}">
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="row" id="noim-upload-section">
                                    <div class="attach-document-box position-relative noim-document-box ">
                                        <input id="fileupload" class="fileupload" type="file" name="signature-file"
                                            accept=".png,.jpg,.jpeg">
                                        <div class="invalid-feedback"> <span><img class="me-2"
                                                    src="/images/require-iocn.svg" alt="Require Icon"></span>Field is
                                            required</div>
                                        <div class="inner-content">
                                            <div class="d-md-flex ">
                                                <div
                                                    class="d-flex d-md-block  justify-content-center justify-content-md-start">
                                                    <p class="mt-3 info-ttitle">Compatible file .png .jpg .jpeg</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--uploaded-box  -->
                                    <div class="conjugal_document_perview attach-document-box uploaded-box noim-document-box d-none"
                                        style="position: relative;">
                                        <div class="d-flex justify-content-center uploaded-content">
                                            <div class="align-self-center">
                                                <p class="h4 neutral-100 mb-0 document-name">
                                                    sample.pdf
                                                </p>
                                            </div>
                                            <div class="align-self-center"><img src="/images/icons/cross.svg"
                                                    alt="cross" class="img-fluid ms-3"></div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="{{ $signatureId }}clear" class="clear-signature-btn">Clear
                                Signature</button>
                            <button class="save-signature-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .signature-tabs li button {
        color: #333 !important;
        font-weight: 500 !important;
        font-size: 14px;
    }

    .clear-signature-btn {
        padding: 10px 29px;
        font-weight: 700;
        font-size: 16px;
        line-height: 19px;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        background-color: transparent;
        color: #333;
        border: 1px solid #62cbca;
    }

    .save-signature-btn {
        padding: 10px 29px;
        font-weight: 700;
        font-size: 16px;
        line-height: 19px;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        background-color: #62CBC9;
        color: #ffffff;
        border: 1px solid #62cbca;
    }

    .modal-footer {
        border: 0;
    }

    .modal-header {
        border: 0;
    }
    .info-ttitle {
    font-size: 16px;
    font-weight: 400;
}
</style>
