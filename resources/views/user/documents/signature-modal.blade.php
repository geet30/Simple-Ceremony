<div class="modal" id="{{ $target }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <ul class="nav nav-tabs" role="tablist">
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
            <div class="tab-content"">
                <div class="tab-pane fade show active" id="{{ $target }}e-signature" role="tabpanel"
                    aria-labelledby="home-tab">
                    <form method="POST" action="{{ route('userNoim.documents.signature') }}">
                        <div class="modal-body">
                            <div class="card-body">
                                @csrf
                                <input type="hidden" name="document_name" value="{{ $document_name }}">
                                <div class="col-md-12">
                                    <label class="" for="">Signature:</label>
                                    <div id="{{ $signatureId }}">
                                    </div>
                                    <textarea id="{{ $signatureId }}signature64" name="signed" style="display: none"></textarea>
                                    <input type="hidden" name="key" value="{{ $field_name }}">
                                </div>
                                <br />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="{{ $signatureId }}clear" class="btn btn-danger btn-sm">Clear
                                Signature</button>
                            <button class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="{{ $target }}-signature-upload" role="tabpanel"
                    aria-labelledby="profile-tab">
                    file upload
                </div>
            </div>
        </div>
    </div>
</div>
