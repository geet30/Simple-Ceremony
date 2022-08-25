
<div class="offcanvas offcanvas-end theme-offcanvas" id="offcanvas_partner_addlocation" aria-labelledby="offcanvas_partner_addlocationLabel">
    <div class="offcanvas-header">
        <p id="offcanvasRightLabel" class="h3 neutral-100">Add new location</p>
        <button type="button" class="btn-close text-reset closeCanvas" data-bs-dismiss="offcanvas"
            aria-label="Close">Cancel</button>
    </div>
    <div class="offcanvas-body">
        <div class="col-md-9 mb-4">
            <label for="InputName" class="form-label small-text2">Location name
            </label>
            <select class="select2partnerPopup form-control">
                <option value="" disabled="" selected="" hidden="">Select location</option>
                @foreach ($allLocations as $loc)
                    <option value="{{ $loc->id }}">{{ $loc->name }}</option>
                @endforeach
            </select>
        </div>
        <a class="theme-btn primary-btn d-inline-block" onclick="assignLocation('select2partnerPopup','celebrantLocation', 'closeCanvas')">Save</a>
    </div>
</div>
<style type="text/css">
    .select2-container {
        z-index: 99999;
    }
</style>
