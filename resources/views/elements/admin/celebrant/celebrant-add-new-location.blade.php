<div class="offcanvas offcanvas-end theme-offcanvas" id="celebrant_addlocation" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <p id="offcanvasRightLabel" class="h3 neutral-100">Add new location</p>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
    </div>
    <div class="offcanvas-body">
        <div class="col-md-9 mb-4">
            <label for="InputName" class="form-label small-text2">Location name
            </label>
            <select class="js-example-placeholder-single form-control">
                <option value="" disabled="" selected="" hidden="">Select location</option>
                @foreach ($locations as $location)
                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                @endforeach
            </select>
        </div>
        <a href="#" class="theme-btn primary-btn d-inline-block">Save</a>
    </div>
</div>
<style type="text/css">
    .select2-container {
        z-index: 99999;
    }
</style>
