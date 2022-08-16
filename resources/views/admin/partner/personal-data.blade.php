<div class="row">
    <div class="col-md-3 col-lg-3 col-xl-2 col-xxl-2 col-6">
        <img src="/images/admin/partner/user-image.png" alt="Partner Image" class="img-fluid">
    </div>
    <div class="col-md-12 col-lg-9 col-xl-9 col-xxl-8">
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
        <form class="needs-validation" method="POST" novalidate action="{{ route('partner.personal-data',$user_id) }}">
            @csrf
            <div class="row">
            <div class="col-md-6 mb-4">
                <label for="InputName" class="form-label small-text2">Business name</label>
                <input type="text" class="form-control body-1 netural-100 disabled" name="name" id="InputName" value="{{ isset($partner_details['name']) ? $partner_details['name'] : '' }}" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
            </div>
            <div class="col-md-6 mb-4">
                <label for="InputName" class="form-label small-text2">Contact name</label>
                <input type="text" value="{{ isset($partner_details['contact_name']) ? $partner_details['contact_name'] : '' }}" class="form-control body-1 netural-100 disabled" name="contact_name" id="InputName" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Contact name is required</div>
            </div>
            <div class="col-md-6 mb-4">
                <label for="phone" class="form-label small-text2">Phone number</label>
                <input class="form-control body-1 netural-100 disabled" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="{{ isset($partner_details['phone']) ? $partner_details['phone'] : '' }}" name="phone" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is required</div>
            </div>
            <div class="col-md-6 mb-4">
                <label for="InputName" class="form-label small-text2">Email address</label>
                <input type="text" value="{{ isset($partner_details['email']) ? $partner_details['email'] : '' }}" class="form-control body-1 netural-100 disabled" name="email" id="InputName" required="">
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required</div>
            </div>
            <div class="col-md-6 mb-4">
                <label for="InputName" class="form-label small-text2">Business category</label>
                <select required="" name="business_category" class="js-placeholder-single-input form-control select2-hidden-accessible disabled" >
                    <option value="" disabled="" hidden="">Choose category here</option>
                    @foreach($addons as $addon)
                    <option value="{{$addon->id}}" {{ (isset($partner_details['addon']['name']) && $partner_details['addon']['id'] == $addon->id) ? 'selected' : '' }}>{{$addon->name }}</option>
                    @endforeach
                    
                </select>


                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business category is required</div>
            </div>
            <div class="col-md-6 mb-4">
                <label for="InputName" class="form-label small-text2">ABN Number</label>
                <input type="text" value="{{ isset($partner_details['abn_number']) ? $partner_details['abn_number'] : '' }}" class="form-control body-1 netural-100 disabled" name="abn_number" id="InputName" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>ABN Number is required</div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="row">
                    <div class="col-md-9">
                        <label for="InputName" class="form-label small-text2">Bank</label>
                        <input type="text" value="{{ isset($partner_details['bank']) ? $partner_details['bank'] : '' }}" class="form-control body-1 netural-100 disabled" name="bank" id="InputName" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Bank is required</div>
                    </div>
                    <div class="col-md-3">
                        <label for="InputName" class="form-label small-text2">BSB</label>
                        <input type="text" value="{{ isset($partner_details['bsb']) ? $partner_details['bsb'] : '' }}" class="form-control body-1 netural-100 disabled" name="bsb" id="InputName" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>BSB is required</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <label for="InputName" class="form-label small-text2">Account number</label>
                <input type="text" value="{{ isset($partner_details['account_no']) ? $partner_details['account_no'] : '' }}" class="form-control body-1 netural-100 disabled" name="account_no" id="InputName" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Account number is required</div>
            </div>
            <div class="location_list_div">
                <div class="col-md-12 mb-3 mt-4">
                    <div class="d-flex flex-column flex-md-row">
                        <span class="body-2 netural-100 me-4">Locations list</span>
                        <a href="#" class="mt-2 mt-md-0 button-1 turquoise-100 text-decoration-none faq-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_partner_addlocation" aria-controls="offcanvas_partner_addlocation">Add new location</a>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <input type="text" value="Bradfield park" class="form-control body-1 netural-100 disabled" name="location_name" id="InputName">
                        </div>
                        <div class="col-md-6">
                            <input type="button" value="confirm" class="theme-btn primary-btn border-0 me-4">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="row">
                        <div class="col-md-12 mb-4 col-lg-6 mb-lg-0">
                            <input type="text" value="Tench park, penrith" class="form-control body-1 netural-100 disabled" name="location_name" id="InputName">
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="d-flex table-dropdown align-items-start flex-column flex-md-row align-items-md-center">
                            <span class="small-text2 netural-100 me-3 mt-3 mt-md-0 mb-md-0 mb-3">status</span>
                            <p class="approved p-1 px-3 d-inline-block text-decoration-none me-3 mb-3 mb-md-0">Approve</p>
                            <a href="#" class="button-1 turquoise-100 text-decoration-none faq-link me-3 mb-3 mb-md-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_partner_editlocation" aria-controls="offcanvas_partner_editlocation">Edit</a>
                            <a href="#" class="button-1 turquoise-100 text-decoration-none faq-link mb-3 mb-md-0">
                            <img src="/images/admin/partner/trash.svg" alt="Delete">
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 mb-4 text-start">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <!-- <a href="/partner-edit" role="button" class="d-inline-flex theme-btn primary-btn justify-content-center partner-edit_info"> -->
                        <a role="button" class="d-inline-flex theme-btn primary-btn justify-content-center partner-edit_info">
                        <img class="me-2" src="/images/admin/partner/edit.svg" alt="Edit">
                        Edit information
                        </a>
                        <button type="submit" id="partner_save_btn" class="partner_save_btn d-inline-flex theme-btn primary-btn justify-content-center">Save</button>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </div>
</div>