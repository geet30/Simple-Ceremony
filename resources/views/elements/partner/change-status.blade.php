<div class="offcanvas offcanvas-end theme-offcanvas" tabindex="-1"
    id="change_status" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <p id="offcanvasRightLabel" class="h3 neutral-100">Change status</p>

        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
    </div>
    <div class="offcanvas-body">
        <form class="needs-validation" novalidate >
            <div class="col-md-12 mt-2">
                <div class="d-flex align-items-center">
                    <div class="me-3"><span class="status booked">Booked</span></div>
                    <div class="dropdown theme-dropdown off-canvas-change-status">
                        <button class="btn dropdown-toggle gray-gray-900 button-1 theme-btn white-btn-border" type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Order status
                        </button>
                        <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                            <li class="p-2"><a class="dropdown-item cursor-pointer mb-0 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#partner_change_status_modal"><span class="status pending">Pending</span></a></li>
                            <li class="p-2"><a class="dropdown-item cursor-pointer mb-0 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#partner_change_status_modal"><span class="status booked">Booked</span></a></li>
                            <li class="p-2"><a class="dropdown-item cursor-pointer mb-0 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#partner_change_status_modal"><span class="status rejected">Rejected</span></a></li>
                            <li class="p-2"><a class="dropdown-item cursor-pointer mb-0 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#partner_change_status_modal"><span class="status finalised">Finalised</span></a></li>
                            <li class="p-2"><a class="dropdown-item cursor-pointer mb-0 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#partner_change_status_modal"><span class="status settled">Settled</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Save</button>
            </div>
        </form>
    </div>
</div>
@include('pages.alert.change_status_modal')

