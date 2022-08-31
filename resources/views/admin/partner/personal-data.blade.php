<div class="row">
    <div class="col-md-3 col-lg-3 col-xl-2 col-xxl-2 col-6">
        <!-- <img src="/images/admin/partner/user-image.png" alt="Partner Image" class="img-fluid"> -->
        <div class="position-relative mb-4">
            
            @if ($partner_details['user']['image'] == '')
                <img src="/images/admin-celebrants-profile.png" alt="Partner Image"
                    class="img-fluid w-100 profile-image previewImage">
            @else
                <img src="/uploads/images/user/{{ $partner_details['user']['image'] }}" alt="Partner Image"
                    class="img-fluid w-100 profile-image previewImage">
            @endif

            <img role="button" class="camera-icon position-absolute"
                style="bottom: 10px;right: 10px;"
                src="/images/admin/partner/camera-icon.svg" alt="Camera"
                onclick="browseImage(this,'imageInput')">
        </div>
    </div>
    <div class="col-md-12 col-lg-9 col-xl-9 col-xxl-8">
    
        <form class="needs-validation" method="POST" novalidate action="{{ route('partner.personal-data',$user_id) }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="product_id" value="{{$product_id}}">
            <div class="row">
            <div class="col-md-6 mb-4">
            <input class="form-control body-1 netural-100 d-none imageInput" type="file" name="user[image]" onchange="readURL(this)">
                <label for="InputName" class="form-label small-text2">Business name</label>
                <input type="text" class="form-control body-1 netural-100 disabled" name="user[name]" id="InputName" value="{{ isset($partner_details['user']['name']) ? $partner_details['user']['name'] : '' }}" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
            </div>
            <div class="col-md-6 mb-4">
                <label for="InputName" class="form-label small-text2">Contact name</label>
                <input type="text" value="{{ isset($partner_details['user']['contact_name']) ? $partner_details['user']['contact_name'] : '' }}" class="form-control body-1 netural-100 disabled" name="user[contact_name]" id="InputName" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Contact name is required</div>
            </div>
            
            <div class="col-md-6 mb-4">
                <label for="phone" class="form-label small-text2">Phone number *</label>
                <input type="hidden"  id="code" name ="user[country_code]" value="{{ isset($partner_details['user']['country_code']) ? $partner_details['user']['country_code'] : '61' }}" >
                <input class="form-control body-1 netural-100 tel-input" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" name="user[phone]" value="{{ isset($partner_details['user']['phone']) ? $partner_details['user']['phone'] : '' }}" required>
                <div class="invalid-feedback phone_number_required"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is required</div>
                <div class="invalid-feedback invalid-phone-number"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is invalid</div>
            </div>

            <div class="col-md-6 mb-4">
                <label for="InputName" class="form-label small-text2">Email address</label>
                <input type="text" value="{{ isset($partner_details['user']['email']) ? $partner_details['user']['email'] : '' }}" class="form-control body-1 netural-100 disabled" name="user[email]" id="InputName" required="">
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
                <input type="text" value="{{ isset($partner_details['user']['abn_number']) ? $partner_details['user']['abn_number'] : '' }}" class="form-control body-1 netural-100 disabled" name="user[abn_number]" id="InputName" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>ABN Number is required</div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="row">
                    <div class="col-md-9">
                        <label for="InputName" class="form-label small-text2">Bank</label>
                        <input type="text" value="{{ isset($partner_details['user']['bank']) ? $partner_details['user']['bank'] : '' }}" class="form-control body-1 netural-100 disabled" name="user[bank]" id="InputName" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Bank is required</div>
                    </div>
                    <div class="col-md-3">
                        <label for="InputName" class="form-label small-text2">BSB</label>
                        <input type="text" value="{{ isset($partner_details['user']['bsb']) ? $partner_details['user']['bsb'] : '' }}" class="form-control body-1 netural-100 disabled" name="user[bsb]" id="InputName" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>BSB is required</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <label for="InputName" class="form-label small-text2">Account number</label>
                <input type="text" value="{{ isset($partner_details['user']['account_no']) ? $partner_details['user']['account_no'] : '' }}" class="form-control body-1 netural-100 disabled" name="user[account_no]" id="InputName" required>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Account number is required</div>
            </div>
            <div class="col-md-12 col-lg-6 mb-4 celebrantLocation">
                <div class="row ">
                    <div class="col-md-12 mb-3 mt-4">
                        <div class="d-flex flex-column flex-md-row">
                            <span class="body-2 netural-100 me-4">Locations list</span>
                            <a role="button"
                                class="mt-2 mt-md-0 button-1 turquoise-100 text-decoration-none faq-link offcanvasCommonClass"
                                data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvas_partner_addlocation"
                                aria-controls="offcanvas_partner_addlocation">Add new location</a>
                        </div>
                    </div>
                </div>
                
                @if (count($partner_locations) > 0)
                    @foreach ($partner_locations as $locations)
                        @foreach($locations->locations as $location)
                    
                   
                        <div class="row locDiv mb-2">
                            <div class="col-10 col-sm-8 col-md-6"><input
                                    type="text"
                                    value="{{ $location->name }}" readonly
                                    class="form-control body-1 netural-100 locationText">
                                <input type="hidden"
                                    value='{{ $location->id }}'
                                    name="locations[]">
                            </div>
                            <div class="col-2 col-sm-4 col-md-6">
                                <a class="cross-icon" onclick="remove(`locDiv`,this)"><img
                                        src="/images/icons/cross.svg"
                                        class="img-fluid"></a>
                            </div>
                        </div>
                        @endforeach
                    @endforeach
                @else
                    <div class="col-12 mb-4 emptyRecord">
                        Location not added yet.
                    </div>
                @endif
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
<!-- <style type="text/css">
    .select2-container {
        z-index: 99999;
    }
</style> -->