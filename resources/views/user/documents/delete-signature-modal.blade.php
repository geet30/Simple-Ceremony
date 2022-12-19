<div class="modal fade" id="{{ $target }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <form action="{{ route($delete_action)}}" method="post">
                @csrf
                <div class="modal-body">
                    <p class="info-ttitle"> Are you sure to delete the signature?</p>
                    <input type="hidden" name="field" value="{{ $field_name }}">
                    <input type="hidden" name="document_name" value="{{ $document_name }}">
                    <input type="hidden" name="bookingId" value="{{ $bookingId }}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger btn-ok">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>
