<div class="offcanvas offcanvas-end theme-offcanvas" id="celebrant_assign_location" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <p id="offcanvasRightLabel" class="h3 neutral-100">Add new location</p>
        <button type="button" class="btn-close text-reset closeCanvas" data-bs-dismiss="offcanvas"
            aria-label="Close">Cancel</button>
    </div>
    <div class="offcanvas-body">
    <div class="message"></div>
        <form method="post" id="assign-location" action="{{url('assign-location')}}" name="assign-location" onsubmit="return submitThroughAjax(event,'assign-location','post','/assign-location')">
        @csrf
            <div class="col-md-9 mb-4">
                <label for="InputName" class="form-label small-text2">Location name
                </label>
                <select class="js-placeholder-single-input form-control" name="location" >
                    <option value="" disabled="" selected="" hidden="">Select location</option>
                    @foreach ($allLocations as $loc)
                        <option value="{{ $loc->id }}">{{ $loc->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" id="submit_button" class="theme-btn primary-btn border-0 mt-4 d-inline-block" >Save</button>
            <!-- <a class="theme-btn primary-btn d-inline-block" -->
                <!-- onclick="assignLocation('select2Popup','celebrantLocation', 'closeCanvas')">Save</a> -->
        </form>
    </div>
</div>
<style type="text/css">
span.select2-container.select2-container--default.select2-container--open {
    z-index: 9999999;
}
</style>
